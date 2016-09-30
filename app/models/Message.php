<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Message extends Eloquent {
    // eloquent fillable fields
    protected $fillable = [
        'title',
        'author',
        'content',
        'post_date'
    ];
}