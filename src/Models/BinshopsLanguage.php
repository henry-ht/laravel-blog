<?php

namespace BinshopsBlog\Models;

use Illuminate\Database\Eloquent\Model;

class BinshopsLanguage extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
    ];

    public function post(){
        return $this->hasMany(BinshopsBlogPost::class);
    }
}
