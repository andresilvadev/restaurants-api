<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'description',
        'photo'
    ];

    /**
     * @var array
     *
     * Criando um campo virtual com o mutator do laravel
     * getPhotoFullUrlAttribute corresponde a photo_full_url
     */
    protected $appends = ['photo_full_url'];

    protected function getPhotoFullUrlAttribute()
    {
        if($this->attributes['photo']){
            return 'https://s3-'.env('AWS_REGION').'.amazonaws.com/'.env('AWS_BUCKET').'/restaurante/'.$this->attributes['photos'];
        }else{
            return null;
        }
    }
}