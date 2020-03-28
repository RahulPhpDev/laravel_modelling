<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aadhar;
use App\User;
use Illuminate\Support\Str;
use App\Role;
use App\Comment;
use App\Post;
use App\Article;
use  App\Tag;
class RelationshipController extends Controller
{
 		public function index()
 		{
 			/*
 			$users = User::with('aadhar')->get();
 			$users->each(function($user) {
 				dump($user->aadhar->aadhar_number);	
 			});
 			*/
 			/* Get The aadhar number */

 			$aadhars = Aadhar::with('user')->get();
 			$aadhars->each(function($aadhar){
 				dump($aadhar->user->toArray());
 			});
 			dd($aadhars);
 		}

 		public function store() {
 			$data = ['email'=> 'abc@test.com', 'name' => 'abc', 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  'remember_token' => Str::random(10), 'aadhar_id' =>1];
 			 // $user->roles()->sync($request->input('roles', []));
 			$user =User::create($data);
 			// $user->aadhar()->attach(1);
 			dd($user);
 		}

 		public function role()
 		{
 			// Role::create(['name' => 'User']);
 			// $data = ['email'=> 'dd@test.com', 'name' => 'abc', 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  'remember_token' => Str::random(10), 'aadhar_id' =>1];
 			// $user = User::create($data);
 			$user = User::findOrFail(21);
 			$user->role()->sync(2);
 		}

 		public function user()
 		{
 			$user = User::findOrFail(21);
 			$role = $user->role->map(function($role) {
 				return $role->name;
 			});
 			dd($role);
 		}

 		public function savePostComment()
 		{
 			$post = Post::findOrFail(1);
 			// dd($post->commentDatas);

 			$post->comments->map(function($comment){
 				dump($comment->body);
 			});

		dd('exit');
 			// $commentData = ['body' => 'Comment on first Post'];
 			$comment = new Comment;
 			$comment->body = 'Comment on first Post';
 			$postRetive = $post->comments()->save($comment);
 			dd($postRetive);
 		}


 		public function saveArticlePost()
 		{

 			$article = Article::with('comments')->findOrFail(2);
 			dd($article->comments,$article->comments->body,);
 			$comment = new Comment;
 			$comment->body = 'Video 1 Comment';
 			$articleRetrive =$article->comments()->save($comment);
 			dd($articleRetrive);
 		}

 		public function articleTag()
 		{
 			$article = Article::findOrFail(2);
 			// $tag = new Tag;
 			// $tags =$tag->findOrFail(1);

 			$tag1 = new Tag;
			$tag1->name = "ItSolutionStuff.com";
			 
			$tag2 = new Tag;
			$tag2->name = "ItSolutionStuff.com 2";
			 
$article->tags()->saveMany([$tag1, $tag2]);
 			// dd($tags);
 			// $article->tags()->save($tags);
 			dd('done');
 		}
}
