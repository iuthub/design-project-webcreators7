<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 05:42
 */

namespace inha_store\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'desc',
        'price',
        'counter',
        'sale_status',
        'category_id',
    ];
    /**
     * Get the category that the product belongs to.
     */
    public function category()
    {
        return $this->belongsTo('inha_store\Models\Category','category_id');
    }
}
