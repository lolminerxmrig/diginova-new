<?php

namespace Modules\Staff\Comment\Http\Controllers;

use App\Models\Mediable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

use Modules\Staff\Comment\Http\Requests\StaffCommentImageRequest;
use Modules\Staff\Comment\Http\Requests\StaffCommentRequest;
use Modules\Staff\Category\Models\Categorizable;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Comment\Models\Comment;
use App\Models\Media;

class StaffCommentController extends Controller
{

    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->paginate(10);
        $trashed_comments = Comment::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        $media = Media:: all();
        $categories = Category:: all();
        return view('staffcomment::index', compact('comments', 'media', 'categories', 'trashed_comments'));
    }

    public  function ajaxPagination(Request $request)
    {
        if ($request->paginatorNum){
            $paginatorNum = $request->paginatorNum;
        }
        else {
            $paginatorNum = 10;
        }

        $comments = Comment::distinct('name')->orderBy('created_at', 'desc')->paginate($paginatorNum);
        $trashed_comments = Comment::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        $media = Media::all();
        $categories = Category::all();

        $pageType = 'index';

        return View::make('staffcomment::ajax-content',
            compact('comments', 'media', 'categories', 'pageType', 'trashed_comments'))->render();
    }

    public function filterByType(Request $request)
    {
        if ($request->search_type == 'all')
        {
            return $this->ajaxPagination($request);

        }
        else {
            $comments = Comment::where('type', 1)->distinct('name')->orderBy('created_at', 'desc')->paginate(10);
            $trashed_comments = Comment::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
            $pageType = 'only_special';

            if ($comments){
                return View::make('staffcomment::ajax-content', compact('comments', 'pageType', 'trashed_comments'));
            }

        }
    }

    public function create()
    {
        $categories = Category::get()->unique('name');
        return view('staffcomment::create', compact('categories'));
    }

    public function edit($comment)
    {
        $comment = Comment::where('en_name', $comment)->first();
        $comments = Comment::all();
        $categories = Category::get()->unique('name');
        $media = Media:: all();
        return view('staffcomment::edit', compact('categories', 'comment', 'comments', 'media'));
    }

    public function update(StaffCommentRequest $request)
    {
        // تبدیل آرایه ای از اعداد با فرمت رشته به آرایه عددی
        $categories = array_map(function($value) {
            return intval($value);
        }, $request->categories);

        $comment = Comment::find($request->id);

        Comment::find($request->id)->update([
            'name' => $request->name,
            'en_name' => $request->en_name,
            'description' => $request->description,
            'slug' => $request->slug,
        ]);

        $media = Comment::find($request->id)->media()->first();
        $user_id = auth()->guard('staff')->user()->id;

        if ($request->image)
        {
            $old_img = Mediable::where('media_id', $request->image)->first();
            if($old_img == null)
            {
                if (Comment::find($request->id)->media()->first() !== null && Comment::find($request->id)->media()->first()->id !== $request->image){
                    Mediable::where('mediable_type', 'Comment')->where('mediable_id', $request->id)->delete();
                    if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id)) {
                        unlink(public_path("$media->path/") . $media->name);
                    }
                    $media->delete();

                    Media::find($request->image)->update([
                        'status' => 1,
                    ]);

                    $this_comment = Comment::find($request->id)->id;
                    Media::find($request->image)->comments()->attach($this_comment);
                }
            }
        }

        Categorizable::where('categorizable_type', 'Comment')->where('categorizable_id', $request->id)->delete();

        foreach ($categories as $category)
        {
            $this_cat = Category::find($category);
            $comment->categories()->attach($this_cat);
        }

    }

    public function store(StaffCommentRequest $request)
    {
        // تبدیل آرایه ای از اعداد با فرمت رشته به آرایه عددی
        $categories = array_map(function($value) {
            return intval($value);
        }, $request->categories);

        $comment = Comment::create([
            'name' => $request->name,
            'en_name' => $request->en_name,
            'description' => $request->description,
            'slug' => $request->slug,
        ]);

        foreach ($categories as $category)
        {
            $this_cat = Category::find($category);
            $comment->categories()->attach($this_cat);
        }

        if ($request->image !== 'not_required')
        {
            Media::find($request->image)->comments()->attach($comment);
            Media::find($request->image)->update([
                'status' => 1,
            ]);
        }
    }

    public function uploadImage(StaffCommentImageRequest $request)
    {
        if ($request->old_img){
            $request->id = $request->old_img;
            $this->deleteImage($request);
        }

        $imageSize = $request->file('image')->getSize();

        $input['image'] = time().'.'.$request->image->extension();
        $request->image->move(public_path('media/images'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/images',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);


        return View::make("staffcomment::layouts.ajax.image-box.upload-image" ,
            compact('input', 'imageSize', 'request' , 'media'));
    }

    public function uploadUpdate(StaffCommentImageRequest $request)
    {
        if ($request->old_img) {
            $request->id = $request->old_img;
            if(Mediable::where('media_id', $request->old_img)->first() == null)
            {
                $this->deleteImage($request);
            }
        }

        $imageSize = $request->file('image')->getSize();

        $input['image'] = time() . '.' . $request->image->extension();
        $request->image->move(public_path('media/images'), $input['image']);

        $media = Media::create([
            'name' => $input['image'],
            'path' => 'media/images',
            'person_id' => auth()->guard('staff')->user()->id,
            'person_role' => 'staff',
        ]);

        return View::make("staffcomment::layouts.ajax.image-box.upload-image",
            compact('input', 'imageSize', 'request', 'media'));
    }

    public function deleteImage(Request $request)
    {
        $media = Media::find($request->id);
        $user_id = auth()->guard('staff')->user()->id;

        if(($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id))
        {
            unlink(public_path("$media->path/"). $media->name);
            $media->delete();
        }
    }

    public function trash()
    {
        $comments = Comment::onlyTrashed()->paginate(10);
        return view('staffcomment::trash', compact('comments'));
    }

    public function trashPagination(){
        $comments = Comment::onlyTrashed()->paginate(10);
        return View::make('staffcomment::ajax-trash-content', compact('comments'));
    }

    public function moveToTrash(Request $request)
    {
        Comment::find($request->id)->delete();
        return $this->ajaxPagination($request);
    }

    public function restoreFromTrash(Request $request)
    {
        Comment::withTrashed()->find($request->id)->restore();
        $comments = Comment::onlyTrashed()->paginate(10);
        return View::make('staffcomment::ajax-trash-content', compact('comments'));
    }

    public function removeFromTrash(Request $request)
    {
        $comment = Comment::withTrashed()->find($request->id);
        $media = $comment->media()->first();
        $user_id = auth()->guard('staff')->user()->id;
        if (($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id)) {
            unlink(public_path("$media->path/") . $media->name);
            $media->delete();
            Mediable::where('mediable_type', 'Comment')->where('mediable_id', $request->id)->delete();
        }

        Categorizable::where('categorizable_type', 'Comment')->where('categorizable_id', $request->id)->delete();
        $comment->forceDelete();
        if($comment->products)
        {
            foreach ($comment->products as $product)
            {
                $product->update([
                   'comment_id' => 0,
                ]);
            }
        }
        $comments = Comment::onlyTrashed()->paginate(10);
        return View::make('staffcomment::ajax-trash-content', compact('comments'));

    }

    public function commentSearch(Request $request, Comment $comments)
    {
        $search_keyword = $request->search_keyword;

        $comments = Comment::query()->where('name', 'LIKE', "%{$search_keyword}%")->paginate(10);
        $trashed_comments = Comment::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        if ($comments) {
            $pageType = 'commentSearch';
            return View::make("staffcomment::ajax-content",
                compact('comments', 'pageType', 'trashed_comments'));
        }
    }

    public function commentCatSearch(Request $request, Comment $comments)
    {
        $search_keyword = $request->search_keyword;

        $comments = $comments->whereHas('categories', function ($query) use ($search_keyword) {
            $query->where('name', 'LIKE', '%' . $search_keyword . '%');
        })->paginate(5);

        if ($comments) {
            $pageType = 'commentCatSearch';
            $trashed_comments = Comment::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
            return View::make("staffcomment::ajax-content", compact('comments', 'pageType', 'trashed_comments'));
        }
    }

}
