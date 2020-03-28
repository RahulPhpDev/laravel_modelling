<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Article;
class Tag extends Model
{
    //

     /**
   		 * @return  \Illuminate\Database\Eloquent\Relations\morphedByMany
    */

    public function posts()
    {
    	return $this->morphedByMany(Post::class, 'taggable');
    }

     /**
   		 * @return  \Illuminate\Database\Eloquent\Relations\morphedByMany
    */

    public function articles()
    {
    	return $this->morphedByMany(Article::class, 'taggable');
    }

}
