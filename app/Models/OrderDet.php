<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 06:00
 */
namespace inha_store\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDet extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [
        'order_id',
        'product_id',
        'amount',
        'price',
        'sub_total',
    ];
}
