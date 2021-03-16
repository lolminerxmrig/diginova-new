<?php

namespace Modules\Staff\Comment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Media;
use Modules\Customers\Auth\Models\Customer;
use Modules\Staff\Category\Models\Category;
use Modules\Staff\Product\Models\Product;
use Modules\Staff\Rating\Models\Rating;


class CommentHasRating extends Model
{

    protected $table = 'comment_has_ratings';
    protected $fillable = ['parent_id', 'text', 'title', 'advantages', 'disadvantages', 'is_anonymous', 'is_recommended', 'publish_status', 'product_id', 'customer_id'];

    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function rating()
    {
        return $this->belongsTo(Rating::class);
    }

}
