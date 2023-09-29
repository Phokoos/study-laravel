<?php


use App\Models\Photo;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsControllers;

// Route::resource('post', PostsControllers::class);
// Route::get('contact', [PostsControllers::class, "contact"]);
// Route::get('post/{id}', [PostsControllers::class, "show_post\

//! Work with fields in DB
use Illuminate\Support\Facades\DB;

// Route::get('insert', function () {
// 		DB::insert('insert into posts (title, content) values (?, ?)', ['PHP with Laravel', 'Laravel`s the best thing!']);
// });

// Route::get('/read', function () {
// 		$results =	DB::select('select * from posts where id = ?', [1]);
// 		foreach ($results as $post) {
// 			return $post->content;
// 		}
// });

// Route::get('/update', function () {
// 		$updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);

// 		return $updated;
// });

// Route::get('/delete', function () {
// 		DB::delete('delete from posts where id = ?', [1]);
// });

//! Eloquent

// Route::get('read', function () {
// 		$posts = Post::all();
		// foreach ($posts as $post) {
			// return $post->title;
		// }
// 		return $posts;
// });

// Route::get('find', function () {
// 	$post = Post::find(3);
//
// 	return $post->title;
// });

// Route::get('/findWhere', function () {
// 		$posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
// 		return $posts;
// });

// Route::get('/findMore', function () {
// 		$posts = Post::findOrFail(3);
//
// 		return $posts;
// });

// Route::get('/basicInsert', function () {
// 		$post = new Post;
//
// 		$post->title = 'New Eloquent title insert';
// 		$post->content = 'Wow Eloquent is cool!';
//
// 		$post->save();
// });

// Route::get('/basicUpdate', function () {
// 		$post = Post::find(4);
//
// 		$post->title = 'Old Eloquent title insert';
// 		$post->content = 'Wow old Eloquent is cool!';
//
// 		$post->save();
// });

// Route::get('/create', function () {
// 		Post::create(['title'=>'3-the create method', 'content'=>'3-Wow i`m learning Laravel']);
// });

// Route::get('update', function () {
// 		Post::where('id',2)->update(['title'=>'new PHP title', 'content'=>"new PHP content"]);
// });

// Route::get('/delete', function () {
// 		$post = Post::find(2);
// 		$post->delete();
// });

// Route::get('/delete2', function () {
// 		Post::destroy([4,5]);
// });

// Route::get('/softDelete', function () {
// 		Post::find(2)->delete();
// });

// Route::get('/readSoftDelete', function () {
// 	$post = Post::withTrashed()->where('id', 3)->get();
// 	return $post[0]->title;
// });


// Route::get('/restore', function () {
// 		Post::withTrashed()->where('id', 2)->restore();
// });

// Route::get('/forceDelete', function () {
// 		Post::withTrashed()->where('id', 2)->forceDelete();
// });


//! Eloquent relationships
/*Route::get('user/{id}/post', function ($id) {
    return User::find($id)->post;
});*/

/*Route::get('/post/{id}/user', function ($id){
    return Post::find($id)->user->name;
});*/

// One to many
/*Route::get('/posts', function () {
    $user = User::find(1);

    foreach ($user->posts as $post) {
        echo $post->id;
    }
});*/

/*Route::get("/user/{id}/role", function ($id){
   $user = User::find($id);
   foreach($user->roles as $role){
       echo $role;
   }
});*/

// Accessing the intermediate table
/*Route::get("user/pivot", function (){
   $user = User::find(1);

   foreach ($user->roles as $role){
       echo $role->pivot;
   }
});*/

/*Route::get('/user/country', function (){
    $country = Country::find(1);
    foreach ($country->posts as $post){
        echo $post->title;
    }
});*/

// Polymorphic Relations

/*Route::get('/post/photos', function (){
    $post = Post::find(1);

    foreach ($post->photos as $photo){
        echo $photo;
    }
});*/

/*Route::get('/photo/{id}/post', function ($id){
    $photo = Photo::findOrFail($id);
    return $photo;
});*/

// Polymorphic many to many
/*Route::get('/posts/tag', function (){
    $post = Post::find(1);
    foreach ($post->tags as $tag){
        echo $tag;
    }
});*/

Route::get('/tag/post',function (){
    $tag = Tag::find(2);
    foreach ($tag->posts as $post){
        echo  $post;
    }
});
