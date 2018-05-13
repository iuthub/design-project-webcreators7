<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 05:58
 */
namespace inha_store\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function customer()
    {
        return $this->belongsTo('inha_store\Models\Customer', 'customer_id' );
    }

    public function orderItems()
    {
        return $this->hasMany('inha_store\Models\Order_Item', 'id');
    }

}
