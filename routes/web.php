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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home_page', function () {
    $projects=Project::get();


    $home = DB::table('homes')
    ->join('projects', 'homes.gallery', '=', 'projects.slug')
    ->select('projects.*', 'homes.id','homes.image','homes.holder')
    ->get();
    
    // return $home;
    return view('home_page',['projects'=>$projects,'home'=>$home]);
})->name('home_page');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects/add-projects', function () {
    return view('add-projects');
})->name('add-projects');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects/projects-list', function () {
    $projects=Project::get();
    return view('projects-list',['projects'=>$projects]);
})->name('projects-list');

Route::middleware(['auth:sanctum', 'verified'])->get('/awards/award-list', function () {
    $awards=Award::get();
    return view('awards-list',['awards'=>$awards]);
})->name('awards-list');

Route::middleware(['auth:sanctum', 'verified'])->get('/awards/add-awards', function () {
    return view('add-awards');
})->name('add-awards');

Route::middleware(['auth:sanctum', 'verified'])->get('/contact-details', function () {
    $contacts = Contact::where('id', 1)->first();
    return view('contact-details',['contacts' => $contacts]);
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

