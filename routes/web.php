<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\slugController;
use App\Models\Award;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
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
    $awards = Award::get();
    $projects = Project::get();
    $holder_a = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','a')
        ->first();

        $holder_b = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','b')
        ->first();

        $holder_c = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','c')
        ->first();

        $holder_d = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','d')
        ->first();

        $holder_e = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','e')
        ->first();

        $holder_f = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','f')
        ->first();

        $holder_g = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','g')
        ->first();

        $holder_h = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','h')
        ->first();

        $holder_i = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','i')
        ->first();

        $holder_j = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','j')
        ->first();

        $holder_k = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','k')
        ->first();

        $holder_l = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->where('homes.holder','l')
        ->first();

    return view('index', ['awards' => $awards, 'projects' => $projects,'holder_a'=>$holder_a,'holder_b'=>$holder_b,'holder_c'=>$holder_c,'holder_d'=>$holder_d,'holder_e'=>$holder_e,'holder_f'=>$holder_f,'holder_g'=>$holder_g,'holder_h'=>$holder_h,'holder_i'=>$holder_i,'holder_j'=>$holder_j,'holder_k'=>$holder_k,'holder_l'=>$holder_l]);
});

Route::get('about', function () {
    $awards = Award::get();
    $projects = Project::get();
    return view('about', ['awards' => $awards, 'projects' => $projects]);
});

Route::get('contact', function () {
    $contact = Contact::first();
    $awards = Award::get();
    $projects = Project::get();
    return view('contact', ['contact' => $contact, 'awards' => $awards, 'projects' => $projects]);
});

Route::get('award/{slug}', [AwardController::class, 'award'])->name('award');
Route::get('gallery/{slug}', [ProjectController::class, 'gallery'])->name('gallery');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home_page', function () {
    $projects = Project::get();
    $home = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->get();
    return view('home_page', ['projects' => $projects, 'home' => $home]);
})->name('home_page');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects/add-projects', function () {
    return view('add-projects');
})->name('add-projects');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects/projects-list', function () {
    $projects = Project::get();
    return view('projects-list', ['projects' => $projects]);
})->name('projects-list');

Route::middleware(['auth:sanctum', 'verified'])->get('/awards/award-list', function () {
    $awards = Award::get();
    return view('awards-list', ['awards' => $awards]);
})->name('awards-list');

Route::middleware(['auth:sanctum', 'verified'])->get('/awards/add-awards', function () {
    return view('add-awards');
})->name('add-awards');

Route::middleware(['auth:sanctum', 'verified'])->get('/contact-details', function () {
    $contacts = Contact::where('id', 1)->first();
    return view('contact-details', ['contacts' => $contacts]);
})->name('contact-details');

Route::group(['middleware' => ['auth']], function () {
    Route::post('contact-details-address-update', [ContactController::class, 'address'])->name('contact-details-address-update');
    Route::post('contact-details-telephone-update', [ContactController::class, 'telephone'])->name('contact-details-telephone-update');
    Route::post('contact-details-email-update', [ContactController::class, 'email'])->name('contact-details-email-update');
    Route::post('contact-details-social-update', [ContactController::class, 'social'])->name('contact-details-social-update');

    Route::post('save-award', [AwardController::class, 'store'])->name('save-award');
    Route::post('update-award', [AwardController::class, 'update'])->name('update-award');
    Route::get('awards/view-awards/{slug}', [AwardController::class, 'view'])->name('awards/view-awards');
    Route::get('awards/disable/{slug}', [AwardController::class, 'disable'])->name('awards/disable');
    Route::get('awards/enable/{slug}', [AwardController::class, 'enable'])->name('awards/enable');
    Route::get('awards/delete/{slug}', [AwardController::class, 'delete'])->name('awards/delete');

    Route::post('save-projects', [ProjectController::class, 'store'])->name('save-projects');
    Route::post('update-projects', [ProjectController::class, 'update'])->name('update-projects');
    Route::get('projects/view-projects/{slug}', [ProjectController::class, 'view'])->name('projects/view-projects');
    Route::get('projects/disable/{slug}', [ProjectController::class, 'disable'])->name('projects/disable');
    Route::get('projects/enable/{slug}', [ProjectController::class, 'enable'])->name('projects/enable');
    Route::get('projects/delete/{slug}', [ProjectController::class, 'delete'])->name('projects/delete');

    Route::post('asign-gallery', [HomeController::class, 'store'])->name('asign-gallery');
});


Route::get('/slug/{title}', [slugController::class, 'slug'])->name('slug');


Route::get('/add-post', [PostController::class, 'addPost']);
Route::get('/add-comment/{id}', [PostController::class, 'addComment']);
Route::get('/get-comment/{id}', [PostController::class, 'getCommentsByPost']);
