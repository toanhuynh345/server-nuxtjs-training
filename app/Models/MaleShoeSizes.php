<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MaleShoeSizes extends Model
{

    protected $table = 'male_shoes_sizes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'foot_size_cm', 'foot_size_inch', 'size_uk','size_us','size_vn', 'sex'
    ];

}
