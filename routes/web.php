<?php

use App\Http\Controllers\BigTitleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\VideoController;
use App\Models\Bigtitle;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Genre;
use App\Models\Image;
use App\Models\Job;
use App\Models\Logo;
use App\Models\Map;
use App\Models\Post;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

/* _____________________________ FRONT _____________________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog-post/{id}', [FrontController::class, 'showArticle'])->name('blog-post');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/services', [FrontController::class, 'services'])->name('services');

// MAIL * Newsletter, Contact

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');
Route::post('/mail', [ContactMailController::class, 'store'])->name('mail-contact');

// BLOG SEARCHBAR *

Route::get('/search', [FrontController::class,'search'])->name('search'); 

// BLOG - Search CATEGORY/TAG

Route::get('/blog/category/{id}', [FrontController::class, 'searchCat'])->name('searchCat'); 
Route::get('/blog/tag/{id}', [FrontController::class,'searchTag'])->name('searchTag'); 


/* _____________________________ BACK _____________________________ */


//  STORE Comment *

// Route::post('/comment/store/{id}', [CommentController::class, 'store'])->name('commentStore');

/* ---------------------- C R U D ---------------------- */

// Users

Route::get('/admin/user/create', [UserController::class, 'create'])->name('userCreate');
Route::post('/admin/user/store', [UserController::class, 'store'])->name('userStore');
Route::get('/admin/user/{user}/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('userEdit');
Route::put('/admin/user/{user}/update', [UserController::class, 'update'])->middleware(['auth'])->name('userUpdate');
Route::delete('/admin/user/{user}/delete', [UserController::class,'destroy'])->middleware(['auth'])->name('userDestroy');

// Images carousel

Route::get('/admin/image/create', [ImageController::class, 'create'])->middleware(['admin'])->name('imageCreate');
Route::post('/admin/image/store', [ImageController::class, 'store'])->middleware(['admin'])->name('imageStore');
Route::get('/admin/image/{image}/edit', [ImageController::class, 'edit'])->middleware(['admin'])->name('imageEdit');
Route::put('/admin/image/{image}/update', [ImageController::class, 'update'])->middleware(['admin'])->name('imageUpdate');
Route::delete('/admin/image/{image}/delete', [ImageController::class,'destroy'])->middleware(['admin'])->name('imageDestroy');

// Image en first dans le carousel
Route::put('/admin/image/{image}/first-image', [ImageController::class, 'firstImage'])->middleware(['admin'])->name('firstImage');

// Logo

Route::get('/admin/logo/{logo}/edit', [LogoController::class, 'edit'])->middleware(['admin'])->name('logoEdit');
Route::put('/admin/logo/{logo}/update', [LogoController::class, 'update'])->middleware(['admin'])->name('logoUpdate');

// Services

Route::get('/admin/service/create', [ServiceController::class, 'create'])->middleware(['admin'])->name('serviceCreate');
Route::post('/admin/service/store', [ServiceController::class, 'store'])->middleware(['admin'])->name('serviceStore');
Route::get('/admin/service/{service}/edit', [ServiceController::class, 'edit'])->middleware(['admin'])->name('serviceEdit');
Route::put('/admin/service/{service}/update', [ServiceController::class, 'update'])->middleware(['admin'])->name('serviceUpdate');
Route::delete('/admin/service/{service}/delete', [ServiceController::class,'destroy'])->middleware(['admin'])->name('serviceDestroy');

// Titres

Route::get('/admin/title/{title}/edit', [TitleController::class, 'edit'])->middleware(['admin'])->name('titleEdit');
Route::put('/admin/title/{title}/update', [TitleController::class, 'update'])->middleware(['admin'])->name('titleUpdate');

// Discover

Route::get('/admin/discover/{discover}/edit', [DiscoverController::class, 'edit'])->middleware(['admin'])->name('discoverEdit');
Route::put('/admin/discover/{discover}/update', [DiscoverController::class, 'update'])->middleware(['admin'])->name('discoverUpdate');

// Video

Route::get('/admin/video/{video}/edit', [VideoController::class, 'edit'])->middleware(['admin'])->name('videoEdit');
Route::put('/admin/video/{video}/update', [VideoController::class, 'update'])->middleware(['admin'])->name('videoUpdate');

// Slogan

Route::put('/admin/bigtitle/{bigtitle}/update', [BigTitleController::class, 'update'])->middleware(['admin'])->name('bigtitleUpdate');

// Testi

Route::get('/admin/testimonial/create', [TestimonialController::class, 'create'])->middleware(['admin'])->name('testimonialCreate');
Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])->middleware(['admin'])->name('testimonialStore');
Route::get('/admin/testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->middleware(['admin'])->name('testimonialEdit');
Route::put('/admin/testimonial/{testimonial}/update', [TestimonialController::class, 'update'])->middleware(['admin'])->name('testimonialUpdate');
Route::delete('/admin/testimonial/{testimonial}/delete', [TestimonialController::class,'destroy'])->middleware(['admin'])->name('testimonialDestroy');

// Contact

Route::get('/admin/contact/{contact}/edit', [ContactController::class, 'edit'])->middleware(['admin'])->name('contactEdit');
Route::put('/admin/contact/{contact}/update', [ContactController::class, 'update'])->middleware(['admin'])->name('contactUpdate');

// Articles de blog

Route::get('/admin/post/create', [PostController::class, 'create'])->middleware(['writer'])->name('postCreate');
Route::post('/admin/post/store', [PostController::class, 'store'])->middleware(['writer'])->name('postStore');
Route::get('/admin/post/{post}/edit', [PostController::class, 'edit'])->middleware(['writer'])->name('postEdit');
Route::put('/admin/post/{post}/update', [PostController::class, 'update'])->middleware(['writer'])->name('postUpdate');
Route::delete('/admin/post/{post}/delete', [PostController::class,'destroy'])->middleware(['writer'])->name('postDestroy');

// Google Maps

Route::get('/admin/map/{map}/edit', [MapController::class, 'edit'])->middleware(['admin'])->name('mapEdit');
Route::put('/admin/map/{map}/update', [MapController::class, 'update'])->middleware(['admin'])->name('mapUpdate');

// Features - Smartphone - Left/Right

Route::get('/admin/feature/{feature}/edit', [FeatureController::class, 'edit'])->middleware(['admin'])->name('featureEdit');
Route::put('/admin/feature/{feature}/update', [FeatureController::class, 'update'])->middleware(['admin'])->name('featureUpdate');

// Tags

Route::get('/admin/tag/create', [TagController::class, 'create'])->middleware(['admin'])->name('tagCreate');
Route::post('/admin/tag/store', [TagController::class, 'store'])->middleware(['admin'])->name('tagStore');
Route::get('/admin/tag/{tag}/edit', [TagController::class, 'edit'])->middleware(['admin'])->name('tagEdit');
Route::put('/admin/tag/{tag}/update', [TagController::class, 'update'])->middleware(['admin'])->name('tagUpdate');
Route::delete('/admin/tag/{tag}/delete', [TagController::class,'destroy'])->middleware(['admin'])->name('tagDestroy');

// Categories

Route::get('/admin/category/create', [CategoryController::class, 'create'])->middleware(['admin'])->name('categoryCreate');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->middleware(['admin'])->name('categoryStore');
Route::get('/admin/category/{category}/edit', [CategoryController::class, 'edit'])->middleware(['admin'])->name('categoryEdit');
Route::put('/admin/category/{category}/update', [CategoryController::class, 'update'])->middleware(['admin'])->name('categoryUpdate');
Route::delete('/admin/category/{category}/delete', [CategoryController::class,'destroy'])->middleware(['admin'])->name('categoryDestroy');

// Footer

Route::get('/admin/footer/{footer}/edit', [FooterController::class, 'edit'])->middleware(['admin'])->name('footerEdit');
Route::put('/admin/footer/{footer}/update', [FooterController::class, 'update'])->middleware(['admin'])->name('footerUpdate');

// ___________________________DASHBOARD___________________________ *

Route::get('/dashboard', function () {
    $users = User::all();
    $logo = Logo::find(1);
    return view('dashboard', compact('users', 'logo'));
})->middleware(['auth'])->name('dashboard');

// Dashboard - ALL USERS

Route::get('/dashboard/allusers', function () {
    $users = User::all();
    return view('admin.pages.allusers', compact('users'));
})->middleware(['admin'])->name('adminUsers');

// Dashboard - GENERAL

Route::get('/dashboard/general', function () {
    $logo = Logo::find(1);
    $footer = Footer::find(1);
    $bigtitle = Bigtitle::find(1);
    return view('admin.pages.general', compact('logo', 'footer', 'bigtitle'));
})->middleware(['admin'])->name('adminGeneral');

// Dashboard - DISCOVER

Route::get('/dashboard/discover', function () {
    $video = Video::find(1);
    $title = Title::all();
    $discover = Discover::find(1);
    return view('admin.pages.discover', compact('video', 'title', 'discover'));
})->middleware(['admin'])->name('adminDiscover');

// Dashboard - TESTIMONIALS

Route::get('/dashboard/testimonials', function () {
    $testimonials = Testimonial::all();
    $title = Title::all();
    return view('admin.pages.testimonial', compact('testimonials', 'title'));
})->middleware(['admin'])->name('adminTestimonial');

// Dashboard - CONTACT

Route::get('/dashboard/contact', function () {
    $contact = Contact::find(1);
    $map = Map::find(1);
    return view('admin.pages.contact', compact('contact', 'map'));
})->middleware(['admin'])->name('adminContact');

// Dashboard - SERVICES

Route::get('/dashboard/services', function () {
    $services = Service::all();
    $title = Title::all();
    return view('admin.pages.services', compact('services', 'title'));
})->middleware(['admin'])->name('adminServices');

// Dashboard - FEATURES

Route::get('/dashboard/features', function () {
    $features = Feature::all();
    $title = Title::all();
    return view('admin.pages.features', compact('features', 'title'));
})->middleware(['admin'])->name('adminFeatures');

// Dashboard - CAROUSEL

Route::get('/dashboard/carousel', function () {
    $images = Image::all();
    return view('admin.pages.carousel', compact('images'));
})->middleware(['admin'])->name('adminCarousel');

// Dashboard - BLOG

Route::get('/dashboard/blog', function () {
    $posts = Post::all()->where('trash', 0)->where('validate', 1);
    return view('admin.pages.blog', compact('posts'));
})->middleware(['writer'])->name('adminBlog');

// Dashboard - TAG/CATEGORY

Route::get('/dashboard/tag-category', function () {
    $tags = Tag::all();
    $categories = Category::where('id', '!=', 5)->get();
    return view('admin.pages.tag-category', compact('tags', 'categories'));
})->middleware(['admin'])->name('adminTagCategory');

// Dashboard - VALIDATE

// Page validate
Route::get('/admin/validate', [ValidationController::class, 'index'])->middleware(['webmaster'])->name('adminValidate');

// Valider un membre
Route::put('/admin/validation/member/update/{id}', [ValidationController::class, 'updateUser'])->middleware(['webmaster'])->name('validateUserUpdate');
// Supprimer un membre non-validé
Route::delete('/admin/validate/user/{id}/delete', [ValidationController::class,'deleteUser'])->middleware(['webmaster'])->name('validateDeleteUser');

// Valider un article
Route::put('/admin/validate/update/{id}', [ValidationController::class, 'updateArticle'])->middleware(['webmaster'])->name('validateUpdateArticle');
// Déplacer un article dans la corbeille
Route::put('/admin/trash/article/{id}/', [TrashController::class,'trashArticle'])->middleware(['webmaster'])->name('trashArticle');
// Récupérer un article de la corbeille
Route::put('/admin/recup/article/{id}/', [TrashController::class,'recupArticle'])->middleware(['webmaster'])->name('recupArticle');

// Commentaires
Route::post('/blog/article/{id}/comment', [CommentController::class, "store"])->name('commentStore');

// Valider un commentaire
Route::put('/admin/validation/update/{id}', [CommentController::class, 'update'])->middleware(['webmaster'])->name('commentUpdate');
// Supprimer un commentaire 
Route::delete('/admin/validate/comment/{id}/delete', [ValidationController::class,'deleteComment'])->middleware(['webmaster'])->name('validateDeleteComment');

// Dashboard - USERS ROLES

Route::get('/admin/user-role', [UserRoleController::class, 'index'])->middleware(['webmaster'])->name('adminUserRole');
Route::get('/admin/user-role/{id}/edit', [UserRoleController::class, 'edit'])->middleware(['webmaster'])->name('editRole');
Route::put('/admin/user-role/{id}/update', [UserRoleController::class, 'update'])->middleware(['webmaster'])->name('updateRole');

// Dashboard - TRASH

Route::get('/admin/trash', [TrashController::class, 'index'])->middleware(['webmaster'])->name('adminTrash');

// Supprimer un article de la corbeille définitivement
Route::delete('/admin/trash/article/{id}/delete', [TrashController::class,'deleteArticle'])->middleware(['webmaster'])->name('deleteArticle');

require __DIR__.'/auth.php';
