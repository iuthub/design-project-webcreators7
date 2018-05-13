<?php
/**
 * Created by PhpStorm.
 * User: jamal
 * Date: 5/12/18
 * Time: 05:52
 */
namespace inha_store\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
