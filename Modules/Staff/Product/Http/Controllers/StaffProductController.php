<?php

namespace Modules\Staff\Product\Http\Controllers;

use App\Models\Mediable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;

use App\Models\Media;
use Modules\Staff\Attribute\Models\AttributeProduct;
use Modules\Staff\Category\Models\Categorizable;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Brand\Models\Brand;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Attribute\Models\AttributeValue;
use Modules\Staff\Product\Models\ProductType;


class StaffProductController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $products = Product::distinct('title_fa')->orderBy('created_at', 'desc')->paginate(10);
        $trashed_products = Product::distinct('title_fa')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        return view('staffproduct::index', compact('products', 'trashed_products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
//        $product_category = Category::find($product->category[0]->id);

        $category = $product->category[0];
        do {
            $main_cat=$category->parent;
            $lists[] = $category;
            $category = $category->parent;
        } while (isset($category));
        $lists = array_reverse($lists,true);
        $aa = [0];

        foreach ($lists as $list) {
            $all_parent[] = $list->id;
        }
        array_unshift($all_parent,0);

        $categories = Category::all();

        return view('staffproduct::edit', compact('product', 'all_parent', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('staffproduct::create', compact('categories'));
    }


    /**
     * Return the tree structure View for category select section.
     * @return Response
     */
    public function childCatsLoader(Request $request)
    {
        $categories = Category::all();
        $id = $request->parent_id;
        return View::make("staffproduct::ajax.child-cat-loader", compact('id', 'categories'));
    }


    /**
     * Return the result for category search section.
     * @return Response
     */
    public function searchCategories(Request $request)
    {
        if (!is_null($request->q)) {
            $categories = Category::query()->where('name', 'LIKE', "%{$request->q}%")->get();
            return View::make("staffproduct::ajax.search-categories", compact('categories'));
        } else {
            $categories = Category::all();
            return View::make("staffproduct::ajax.main-cat-loader", compact('categories'));
        }
    }


    /**
     * Return the result for step two in create page.
     * @return Response
     */
    public function stepProduct(Request $request)
    {
        $category = Category::findOrFail($request->category_id);

        while ($category->parent) {
            $category = $category->parent;
        }

        if ($category->parent_id == 0) {
            $cat = $category->brands;
        }

        foreach ($cat as $brand) {
            $brands[] = array("value" => $brand->id, "text" => $brand->name . ' ' . $brand->en_name);
        }

        $defualt_brand = array("value" => "", "text" => 'برند کالا را انتخاب کنید');
        $miscellaneous_brand = array("value" => 0, "text" => 'متفرقه Miscellaneous');

        if (!isset($brands)) {
            $brands = [];
        }

        array_unshift($brands, $miscellaneous_brand);
        array_unshift($brands, $defualt_brand);

        $find_category = Category::findOrFail($request->category_id);

        foreach ($find_category->types as $type) {
            $types[] = array("value" => $type->id, "text" => $type->name);
        }

        if (!isset($types)) {
            $types = [];
        }

        if (count($types) > 0) {
            $defualt_types = array("value" => "", "text" => 'دسته‌بندی کالا را انتخاب کنید');
            array_unshift($types, $defualt_types);
        }


        $jayParsedAry = [
            "status" => true,
            "data" => [
                "categoryFormValid" => true,
                "fields" => [
                    "select" => [
                        "brands" => [
                            "options" =>
                                $brands,
                        ],
                        "categoryProductTypes" => [
                            "options" =>
                                $types,
                        ],
                    ],
                    "span" => [
                        "categoryTheme" => "sized",
                        "categoryThemeTranslated" => "سایز",
                        "categoryTitle" => "اکسسوری ورزشی مردانه",
                        "categoryThemeDescription" => "<strong>تنوع سایز: </strong>تنوع سایز برای کالاهایی استفاده می‌شود که ظاهر مشابه دارند اما در سایزهای مختلف فروخته می‌شوند. از این تنوع برای درج کالاهایی مثل انواع لباس استفاده می‌شود. لباس‌ها ظاهری یکسان دارند اما بر اساس سایز طبقه‌بندی می‌شوند و قرار دادن آن‌ها در یک محصول می‌تواند فرآیند انتخاب را برای خریدار ساده‌تر کند.
"
                    ],
                    "extra" => [
                        "allow_fake" => true,
                        "brand_other_id" => 719
                    ]
                ]
            ]
        ];

        return response()->json($jayParsedAry, 200);
    }


    public function stepAttributes(Request $request)
    {
        $category = Category::find($request->category_id);

        $attr_groups = $category->attributeGroups;

        return View::make("staffproduct::ajax.attributes-step", compact('attr_groups'));
    }


    public function stepUploadImages(Request $request)
    {

        $messages = [
            'files.*.mimes' => 'فرمت تصویر غیر مجاز است',
            'files.*.max' => 'حجم عکس بیشتر از مقدار مجاز است',
            'files.*.dimensions' => 'اندازه تصویر مناسب نیست',
        ];

        $validator = Validator::make($request->all(), [
            'files.*' => 'required|mimes:jpg|max:6144|dimensions:min_width=300,min_height=300,max_width=2500,max_height=2500',
        ], $messages);


        if ($validator->fails()) {
            $error = $validator->errors()->first();
            $data = [
                "status" => true,
                "data" => [
                    "errors" => [
                        "error" => "$error"
                    ],
                    "slot" => "$request->slot",
                ]
            ];
        } else {

            $image = $request->file('files');
            foreach ($image as $files) {
                $destinationPath = public_path('media/images/');
                $file_name = time() . rand(10000, 100000) . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $file_name);
                $data[] = $file_name;


                $media = Media::create([
                    'name' => $file_name,
                    'path' => 'media/images',
                    'person_id' => auth()->guard('staff')->user()->id,
                    'person_role' => 'staff',
                    'status' => 0,
                ]);
            }

            $path = env('APP_URL') . '/media/images/' . $file_name;


            $data = [
                "status" => true,
                "data" => [
                    "id" => "$media->id",
                    "url" => "$path",
                    "tempFile" => true,
                    "slot" => "$request->slot"
                ]
            ];
        }
        return response()->json($data, 200);
    }


    public function savePost(Request $request)
    {

        if (isset($request->product['advantages'])) {
            $advantages = json_encode($request->product['advantages']);
        } else {
            $advantages = null;
        }

        if (isset($request->product['disadvantages'])) {
            $disadvantages = json_encode($request->product['disadvantages']);
        } else {
            $disadvantages = null;
        }

        $product = Product::create([
            'status' => $request->publish_status,
            'title_fa' => $request->title['title_fa'],
            'title_en' => $request->title['title_en'],
            'nature' => $request->product['product_nature'],
            'advantages' => $advantages,
            'disadvantages' => $disadvantages,
            'brand_id' => $request->product['brand_id'],
            'model' => $request->product['model'],
            'is_iranian' => $request->product['is_iranian'],
            'length' => $request->product['package_length'],
            'width' => $request->product['package_width'],
            'height' => $request->product['package_height'],
            'weight' => $request->product['package_weight'],
            'description' => $request->product['description'],
        ]);

        Categorizable::create([
           'category_id' => $request->product['category_id'],
           'categorizable_type' => 'Product',
           'categorizable_id' => $product->id,
        ]);

        $category = Category::find($request->product['category_id']);

        if (isset($category->attributes)) {
            foreach ($category->attributes as $attribute) {
                AttributeProduct::create([
                    'attribute_id' => $attribute->id,
                    'product_id' => $product->id,
                    'values' => (isset($request['attributes'][$attribute->id])) ? json_encode($request['attributes'][$attribute->id]) : '',
                ]);
            }
        }

        if (isset($request->product['types'])) {
            foreach ($request->product['types'] as $key => $type) {
                ProductType::create([
                    'product_id' => $product->id,
                    'type_id' => $type,
                ]);
            }
        }


        foreach ($request->images['images'] as $key => $value)
        {
            if($request['images']['main_image'] == $value){
                $is_main = 1;
            } else {
                $is_main = 0;
            }

            Mediable::create([
                'media_id' => $value,
                'mediable_type' => 'Product',
                'mediable_id' => $product->id,
                'position' => $key,
                'is_main' => $is_main,
            ]);

            Media::where('id', $value)->update([
                'status' => 1,
            ]);


            $user_id = auth()->guard('staff')->user()->id;


            $all_images = $request['images']['order'];
            $all_images = explode(',', $all_images);

            $available_images = $request['images']['images'];

            $only_trashed = array_diff($all_images, $available_images);

            foreach ($only_trashed as $item)
            {
                $media = Media::find($item);
                if(($media) && ($media->person_role == 'staff') && ($media->person_id == $user_id))
                {
                    unlink(public_path("$media->path/"). $media->name);
                    $media->delete();
                }
            }

        }
    }





    public function ajaxPagination(Request $request)
    {
        if ($request->paginatorNum) {
            $paginatorNum = $request->paginatorNum;
        } else {
            $paginatorNum = 10;
        }

        $brands = Brand::distinct('name')->orderBy('created_at', 'desc')->paginate($paginatorNum);
        $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        $media = Media::all();
        $categories = Category::all();

        $pageType = 'index';

        return View::make('staffproduct::ajax-content',
            compact('brands', 'media', 'categories', 'pageType', 'trashed_brands'))->render();

    }


    public function filterByType(Request $request)
    {
        if ($request->search_type == 'all') {
            return $this->ajaxPagination($request);

        } else {
            $brands = Brand::where('type', 1)->distinct('name')->orderBy('created_at', 'desc')->paginate(1);
            $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
            $pageType = 'only_special';

            if ($brands) {
                return View::make('staffproduct::ajax-content', compact('brands', 'pageType', 'trashed_brands'));
            }

        }
    }


    public function trash()
    {
        $brands = Brand::onlyTrashed()->paginate(1);
        return view('staffproduct::trash', compact('brands'));
    }


    public function trashPagination()
    {
        $brands = Brand::onlyTrashed()->paginate(1);
        return View::make('staffproduct::ajax-trash-content', compact('brands'));
    }


    public function moveToTrash(Request $request)
    {
        Brand::find($request->id)->delete();
        //        $id = $request->id;
        //        return response()->json($id, 200);

        return $this->ajaxPagination($request);

    }


    public function restoreFromTrash(Request $request)
    {
        Brand::withTrashed()->find($request->id)->restore();
        $brands = Brand::onlyTrashed()->paginate(10);
        return View::make('staffproduct::ajax-trash-content', compact('brands'));
    }


    public function removeFromTrash(Request $request)
    {
        Brand::withTrashed()->find($request->id)->forceDelete();
        $brands = Brand::onlyTrashed()->paginate(10);
        return View::make('staffproduct::ajax-trash-content', compact('brands'));

    }


    public function brandSearch(Request $request, Brand $brands)
    {
        $search_keyword = $request->search_keyword;

        $brands = Brand::query()->where('name', 'LIKE', "%{$search_keyword}%")->paginate(1);
        $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        if ($brands) {
            $pageType = 'brandSearch';
            return View::make("staffproduct::ajax-content",
                compact('brands', 'pageType', 'trashed_brands'));
        }
    }


    public function brandCatSearch(Request $request, Brand $brands)
    {
        $search_keyword = $request->search_keyword;

        $brands = $brands->whereHas('categories', function ($query) use ($search_keyword) {
            $query->where('name', 'LIKE', '%' . $search_keyword . '%');
        })->paginate(5);

        if ($brands) {
            $pageType = 'brandCatSearch';
            $trashed_brands = Brand::distinct('name')->onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
            return View::make("staffproduct::ajax-content", compact('brands', 'pageType', 'trashed_brands'));
        }
    }

}
