<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\slugController;
use App\Http\Controllers\UserController;
use App\Models\Award;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Project;
use App\Models\Member;
use App\Models\Service;
use App\Models\User;
use App\Models\Publication;
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
    $awards = Award::where('status',1)->orderBy('order', 'ASC')->get();
    $publications = Publication::where('status',1)->orderBy('order', 'ASC')->get();
    $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
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

    return view('index', ['awards' => $awards, 'publications' => $publications, 'projects' => $projects,'holder_a'=>$holder_a,'holder_b'=>$holder_b,'holder_c'=>$holder_c,'holder_d'=>$holder_d,'holder_e'=>$holder_e,'holder_f'=>$holder_f,'holder_g'=>$holder_g,'holder_h'=>$holder_h,'holder_i'=>$holder_i,'holder_j'=>$holder_j,'holder_k'=>$holder_k,'holder_l'=>$holder_l]);
});

Route::get('about', function () {
    $publications = Publication::where('status',1)->orderBy('order', 'ASC')->get();
    $awards = Award::where('status',1)->orderBy('order', 'ASC')->get();
    $members = Member::where('status',1)->orderBy('order', 'ASC')->get();
    $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
    return view('about', ['awards' => $awards, 'projects' => $projects,'members'=>$members, 'publications' => $publications]);
});

Route::get('services', function () {
    $publications = Publication::where('status',1)->orderBy('order', 'ASC')->get();
    $awards = Award::where('status',1)->orderBy('order', 'ASC')->get();
    $services = Service::orderBy('order', 'ASC')->get();
    $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
    return view('services',['awards' => $awards, 'projects' => $projects,'services' => $services, 'publications' => $publications]);
});


Route::get('gallery', function () {
    $publications = Publication::where('status',1)->orderBy('order', 'ASC')->get();
    $awards = Award::where('status',1)->orderBy('order', 'ASC')->get();
    $services = Service::orderBy('order', 'ASC')->get();
    $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
    return view('gallery_image',['awards' => $awards, 'projects' => $projects,'services' => $services, 'publications' => $publications]);
});



Route::get('contact', function () {
    $publications = Publication::where('status',1)->orderBy('order', 'ASC')->get();
    $contact = Contact::first();
    $awards = Award::where('status',1)->orderBy('order', 'ASC')->get();
    $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
    return view('contact', ['contact' => $contact, 'awards' => $awards, 'projects' => $projects, 'publications' => $publications]);
});

Route::get('award/{slug}', [AwardController::class, 'award'])->name('award');
Route::get('publication/{slug}', [PublicationController::class, 'publication'])->name('publication');
Route::get('gallery/{slug}', [ProjectController::class, 'gallery'])->name('gallery');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $project = Project::count();
    $award = Award::count();
    $member = Member::count();
    $user = User::count();
    return view('dashboard',['project'=>$project,'award'=>$award,'member'=>$member,'user'=>$user]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home_page', function () {
    $projects = Project::where('status',1)->orderBy('order', 'ASC')->get();
    $home = DB::table('homes')
        ->join('projects', 'homes.gallery', '=', 'projects.slug')
        ->select('projects.*', 'homes.id', 'homes.image', 'homes.holder')
        ->get();
    return view('home_page', ['projects' => $projects, 'home' => $home]);
})->name('home_page');

Route::middleware(['auth:sanctum', 'verified'])->get('/members', function () {
    $members = Member::get();
    return view('members',['members' => $members]);
})->name('members');

Route::middleware(['auth:sanctum', 'verified'])->get('/services-list', function () {
    $services = Service::get();
    return view('services-list',['services' => $services]);
})->name('services-list');

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

Route::middleware(['auth:sanctum', 'verified'])->get('/publications/publications-list', function () {
    $publications = Publication::get();
    return view('publications-list', ['publications' => $publications]);
})->name('publications-list');

Route::middleware(['auth:sanctum', 'verified'])->get('/publications/add-publications', function () {
    return view('add-publications');
})->name('add-publications');

Route::middleware(['auth:sanctum', 'verified'])->get('/contact-details', function () {
    $contacts = Contact::where('id', 1)->first();
    return view('contact-details', ['contacts' => $contacts]);
})->name('contact-details');

Route::middleware(['auth:sanctum', 'verified'])->get('/kpXZbznHlU', function () {
    $users = User::get();
    return view('kpXZbznHlU',['users' => $users]);
})->name('kpXZbznHlU');

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


    Route::post('save-publications', [PublicationController::class, 'store'])->name('save-publications');
    Route::post('update-publications', [PublicationController::class, 'update'])->name('update-publications');
    Route::get('publications/view-publications/{slug}', [PublicationController::class, 'view'])->name('publications/view-publications');
    Route::get('publications/disable/{slug}', [PublicationController::class, 'disable'])->name('publications/disable');
    Route::get('publications/enable/{slug}', [PublicationController::class, 'enable'])->name('publications/enable');
    Route::get('publications/delete/{slug}', [PublicationController::class, 'delete'])->name('publications/delete');

    Route::post('save-projects', [ProjectController::class, 'store'])->name('save-projects');
    Route::post('update-projects', [ProjectController::class, 'update'])->name('update-projects');
    Route::post('update-project-cover', [ProjectController::class, 'update_cover'])->name('update-project-cover');
    Route::get('projects/view-projects/{slug}', [ProjectController::class, 'view'])->name('projects/view-projects');
    Route::get('projects/disable/{slug}', [ProjectController::class, 'disable'])->name('projects/disable');
    Route::get('projects/enable/{slug}', [ProjectController::class, 'enable'])->name('projects/enable');
    Route::get('projects/delete/{slug}', [ProjectController::class, 'delete'])->name('projects/delete');

    Route::post('asign-gallery', [HomeController::class, 'store'])->name('asign-gallery');

    Route::post('save-member', [MemberController::class, 'store'])->name('save-member');
    Route::post('update-member', [MemberController::class, 'update'])->name('update-member');
    Route::get('member/view-member/{id}', [MemberController::class, 'view'])->name('member/view-member');
    Route::get('member/disable/{id}', [MemberController::class, 'disable'])->name('member/disable');
    Route::get('member/enable/{id}', [MemberController::class, 'enable'])->name('member/enable');
    Route::get('member/delete/{id}', [MemberController::class, 'delete'])->name('member/delete');


    Route::post('save-user', [UserController::class, 'store'])->name('save-user');
    Route::post('update-user', [UserController::class, 'update'])->name('update-user');
    Route::get('user/view-kpXZbznHlU/{id}', [UserController::class, 'view'])->name('user/view-kpXZbznHlU');
    Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user/delete');


    Route::post('save-service', [ServiceController::class, 'store'])->name('save-service');
    Route::get('save-service/delete/{id}', [ServiceController::class, 'delete'])->name('save-service/delete');


});


Route::get('/slug/{title}', [slugController::class, 'slug'])->name('slug');


Route::get('/add-post', [PostController::class, 'addPost']);
Route::get('/add-comment/{id}', [PostController::class, 'addComment']);
Route::get('/get-comment/{id}', [PostController::class, 'getCommentsByPost']);
