<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\aboutController as AboutController;
use App\Http\Controllers\frontend\faqController as FaqController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\TeamController;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use App\Models\Blog;

// use App\Http\Controllers\FaqController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {

    Route::get('/index', [HomeController::class, 'index']);
    Route::get('/faq', [FaqController::class, 'index']);
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/team', [TeamController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/blogs', function () {
        $blogs = Blog::all();
        return view("blogs", ['blogs' => $blogs]);
    });
});


Route::middleware('auth', 'admin')->group(function () {

    Route::get("/admin", function () {
        $blogs = Blog::all();
        return view("admin", ['blogs' => $blogs]);
    });

    Route::post("/admin/addblog", function (Request $request) {
        Blog::create([
            'name' => $request->name,
            'content' => $request->content,
        ]);
        return redirect("/admin");
    });

    Route::get("/admin/addblog", function () {
        return view("addblog");
    });

    Route::get('/admin/deleteBlog/{id}', function ($id) {

        $blog = Blog::find($id);
        $blog->delete();

        return redirect("/admin");
    })->name('admin.delete.blog');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
