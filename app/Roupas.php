<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roupas extends Model
{

    /**
     * Get the comments for the blog post.
     */
    public function tamanhos()
    {
        return $this->hasMany('App\Tamanho','id','tamanho_id');
    }
}
