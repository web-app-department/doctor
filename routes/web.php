<?php

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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use App\Category;
use App\Http\Controllers\JobCircularController;
use App\Post;

Route::get('/foo', function () {
    Artisan::call('storage:link');
});


Route::get('/', 'HomeController@index')->name('home');
Route::get('posts','PostController@index')->name('post.index');
Route::get('jobs','JobController@index')->name('job.index');
Route::get('jobs/{id}','JobController@details')->name('job.details');
Route::post('/apply_list/submit','JobController@apply_list_submit')->name('apply_list_submit')->middleware('auth');

Route::get('post/{slug}','PostController@details')->name('post.details');

Route::get('/category/{slug}','PostController@postByCategory')->name('category.posts');
Route::get('/tag/{slug}','PostController@postByTag')->name('tag.posts');
Route::get('postview/{slug}','PostController@postview')->name('postview');

Route::get('profile/{username}','AuthorController@profile')->name('author.profile');

Route::post('subscriber','SubscriberController@store')->name('subscriber.store');

Route::get('/search','SearchController@search')->name('search');

Auth::routes();

Route::group(['middleware'=>['auth']], function (){
   Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');
   Route::post('comment/{post}','CommentController@store')->name('comment.store');
});


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');

    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');

    Route::get('/pending/post','PostController@pending')->name('post.pending');
    Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');

    Route::get('/favorite','FavoriteController@index')->name('favorite.index');

    Route::get('authors','AuthorController@index')->name('author.index');
    Route::delete('authors/{id}','AuthorController@destroy')->name('author.destroy');

    Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');

    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');

    Route::get('/contact_message','ContactController@contact_message')->name('contact_message');
    Route::post('/contact_message_stor','ContactController@contact_message_stor')->name('contact_message_stor');

    Route::resource('job_circular', 'JobCircularController');

    Route::get('/apply_list','JobCircularController@apply_list')->name('apply_list');
    Route::get('/apply_list_details/{id}','JobCircularController@apply_list_details')->name('apply_list_details');
    

    Route::resource('doctor', 'DoctorController');
    Route::get('/medicine','MedicineCOntroller@index')->name('medicine.index');
    Route::get('/medicine/create','MedicineCOntroller@create')->name('medicine.create');
    Route::post('/medicine/store','MedicineCOntroller@store')->name('medicine.store');
    Route::get('/medicine/edit/{id}','MedicineCOntroller@edit')->name('medicine.edit');
    Route::post('/medicine/update/{id}','MedicineCOntroller@update')->name('medicine.update');
    Route::post('/medicine/delete/{id}','MedicineCOntroller@delete')->name('medicine.delete');


});

Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'user','middleware'=>['auth','user']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('settings','SettingController@index')->name('settings');
    Route::put('profile-update','SettingController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingController@updatePassword')->name('password.update');

    
});
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('appointment/details/{id}','DashboardController@appoinmentDetails')->name('appoinmentDetails');

    Route::get('comments','CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','CommentController@destroy')->name('comment.destroy');

    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');
    Route::resource('appointment','DoctorAppointmentController');
    Route::get('download/prescription/','DoctorAppointmentController@downloadList')->name('prescription.download');
    Route::resource('post','PostController');
    Route::get('/favorite','FavoriteController@index')->name('favorite.index');
    Route::get('/pdf','DoctorAppointmentController@create');
});

View::composer('layouts.frontend.partial.footer',function ($view) {

    $categories = App\Category::latest()->limit(5)->get();
    $view->with('categories',$categories);
});
View::composer('layouts.frontend.partial.header',function ($view) {

    $toppost=App\Post::latest()->approved()->published()->take(1)->get();
    $view->with('toppost',$toppost);
});


// View::composer('layouts.frontend.partial.header',function ($view) {

//     $catagoryWisePost = Category::with(['posts'=>function($query){

//         return $query->orderBy('id','DESC')->limit(4)->where('is_approved',1)->where('status',1)->get();
//     }])->orderBy('slug')->get();
//     $menupost=$catagoryWisePost[5];

//     $view->with('menupost',$menupost);
// });


View::composer('layouts.frontend.partial.header',function ($view) {
    $menu = App\Category::latest()->limit(4)->get();
    $view->with('menu',$menu);
});
View::composer('layouts.frontend.partial.footer',function ($view) {
    $footerposts=App\Post::latest()->approved()->published()->take(2)->get();
    $view->with('footerposts',$footerposts);
});

Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/privacy_policy','HomeController@privacy_policy')->name('privacy_policy');
Route::get('/faq','HomeController@faq')->name('faq');
Route::get('/terms_and_condition','HomeController@terms_and_condition')->name('terms_and_condition');
Route::resource('doctor', 'DoctorController');
Route::get('doctors/all', 'DoctorController@index')->name('doctorindex');
Route::get('doctor/report_submit/{id}', 'DoctorController@report')->name('doctor.report');
Route::get('doctor/report_submit/success/{id}', 'DoctorController@success')->name('doctor.success');
Route::post('doctor/report_submit/submit', 'DoctorController@update')->name('doctor.report_submit');
Route::resource('appoinment','user\AppointmentController');

//Route::get('/share-social','ShareSocialController@shareSocial')->name('shareSocial');




Route::group(['middleware' => ['auth']], function () {
    Route::get('/agora-chat', 'AgoraVideoController@index');
    Route::post('/agora/token', 'AgoraVideoController@token');
    Route::post('/agora/call-user', 'AgoraVideoController@callUser');
});
