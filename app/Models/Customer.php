<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 05:56
 */
namespace inha_store\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customer extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];
}
