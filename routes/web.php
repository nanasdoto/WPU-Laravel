<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "bandos kanebo",
        "email" => "bandoskanebo@gmail.com",
        "image" => "kanebo.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post =
        [
            [
                "slug" => "judul-post-pertama",
                "tittle" => "Judul Post Pertama",
                "author" => "Kobok",
                "body" => "
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quisquam esse sapiente non dicta voluptas officia recusandae natus a vitae veniam at blanditiis atque laudantium molestiae ratione ipsam accusantium sunt, tempore mollitia similique ab? Iusto odio, iste impedit debitis quia earum minus similique a recusandae delectus. Sunt laudantium ab eveniet molestiae mollitia obcaecati possimus unde et debitis veniam consequuntur corrupti rem culpa, provident explicabo numquam, voluptatem sapiente ex! Numquam, velit!"
            ],
            [
                "slug" => "judul-post-kedua",
                "tittle" => "Judul Post Kedua",
                "author" => "Kanebo",
                "body" => "
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus quam eum delectus nostrum, est nulla adipisci omnis ipsum assumenda deserunt enim quibusdam incidunt repudiandae vitae, perspiciatis expedita sunt! Unde dolore possimus tempore sint maxime deserunt ut vitae, molestias eius temporibus illo odio eum animi? Et veniam quo cupiditate veritatis qui labore recusandae, excepturi unde totam, est aspernatur minus. Porro, error pariatur. At?"
            ],
        ];
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_post
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('post', [
        "tittle" => "Single Post"
    ]);
});
