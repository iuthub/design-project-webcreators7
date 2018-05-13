<?php

namespace inha_store;

use Illuminate\Database\Eloquent\Model;

class ContactMess extends Model
{
    protected $fillable = [
        'name', 'email', 'title', 'text'
    ];
}
