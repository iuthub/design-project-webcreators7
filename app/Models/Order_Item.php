<?php

namespace inha_store\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Item extends Model
{
    use SoftDeletes;

    public function product()
    {
        return $this->belongsTo('inha_store\Models\Product');
    }

}
