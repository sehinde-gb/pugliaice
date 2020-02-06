<?php

namespace pugice;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    /**
     * Fillable fields for a Post.
     *
     * @var array
     */
    protected $fillable = [
        'flavour', 'biscuit_type', 'cone_type', 'review'
    ];
}
