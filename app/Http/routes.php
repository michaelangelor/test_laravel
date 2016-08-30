<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/insert', function () {
    DB::insert('insert into post(postTitle, content) values ( ?, ?)', ['postTitle3', 'post3Content']);
});

Route::get('/read', function () {
    $result = DB::select('select * from post where id >= ?', [1]);

    foreach ($result as $post) {
      for ($i=0; $i < $result; $it++) {
        return $post->postTitle;
      }

    }
});




Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/gear/{name?}', function ($name = null) {
    return view('page.gear',['name'=>$name]);
})->name('gear');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/masonry', function () {
    return view('page.masonry');
})->name('masonry');
