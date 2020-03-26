<?php

namespace App\Observers;
use App\Post;
class PostObserver
{
	/*
	Command 
	php artisan make:observer PostObserver --model=Post
	*/


	/*
	* Handle the post 'posted' event.
	*
	* @param \App\Post $post 
	* return void	
	*/

    public function created(Post $post) {
    	info("Post is created {$post->id}");
    }

    /*
		* Handle the Post 'updated' event
		* 
		* @param \App\Post $post
		* return void
    */

	public function updated(Post $post) {
		info('Updated here');
	}	

	/*
		* Handle the Post 'deleted' event
 		* 
 		* @param App\Post $post
 		* return void
	*/

 	public function deleted(Post $post) {
 		info('Post Info deleted');
 	}

 	/*
	 * Handle the post 'restored' event
	 *
	 * @param App\Post $post
	 * return void
 	*/

 	public function restored(Post $post) {
 		info('Post info restored');
 	}
}
