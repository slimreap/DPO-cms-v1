<?php

use App\Http\Controllers\AddButtonController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\FlexboxJustificationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlaceSelfController;
use App\Http\Livewire\SendOtp;

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


Route::get('/{nav?}', [PageController::class, 'showTheme'])
    //  ->where('nav', '.*')
     ->name('home');

     Route::get('/reset/send-otp', function() {
        return view('welcome');
     })->name('sendotp');


// Route for pages
Route::get('/pages/{slug}', [PageController::class, 'show'])->name('pages.show');


// Route for flexbox justification
Route::get('/justification',[FlexboxJustificationController::class, 'flexbox_justification'])->name('justification');

// Route for saving edited theme into a text file and storing in database
Route::post('editorpage/save-html',[PageController::class, 'saveHtml'])->name('saveHtml');

// adding card
Route::get('/editorpage/uploadcard',[EditorController::class, 'uploadcard'])
->name('uploadcard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





require __DIR__.'/auth.php';


Auth::routes();



// !route for editor
Route::middleware(['auth','user-role:editor,admin'])->group(function()
    {
        // ROUTE FOR THEME PAGES
        // Route::get('/editor/pages/{navname}',[PageController::class, 'showTheme'])
        // ->name('pages');

        // Route to delete pages
        Route::delete('deletepage/{themename?}/{page?}', [EditorController::class,'deletepage'])->name('deletepage');

        // route for uploading logo
        Route::post('editor/editorpage/uploadlogo', [EditorController::class,'uploadlogo'])->name('uploadlogo');

        // button attributes **AJAX ROUTE FOR HOMEPAGE**
        // Route for adding button
        Route::get('editor/editorpage/buttonattributes',[AddButtonController::class, 'showButtonAttributes'])->name('showButtonAttributes');
        
        // route for uploading pdf file
        Route::post('editor/editorpage/uploadpdf',[EditorController::class, 'uploadPdf'])->name('uploadPdf');
        
        // route for existing logos
        Route::get('editor/editorpage/logos',[EditorController::class, 'existinglogos'])->name('existinglogos');

        // Route for getting place self alignment and justification
        Route::get('editor/editorpage/placeself',[PlaceSelfController::class, 'show'])->name('placeself');
        
        // retrieve existing carousel images
        Route::get('editor/editorpage/existingCarouselImgs',[EditorController::class, 'showExistingCarouselImgs'])->name('showExistingCarouselImgs');

        // retrieving all single images
        Route::get('editor/editorpage/retrieveimgs',[EditorController::class, 'showSingleImgs'])->name('showSingleImgs');

                                            //*** AJAX ROUTE FOR OTHER PAGE ***
         // Route for adding button
         Route::get('editor/editorpage/{themename?}/{page?}/buttonattributes',[AddButtonController::class, 'showButtonAttributes']);
        
         // route for uploading pdf file
         Route::post('editor/editorpage/{themename?}/{page?}/uploadpdf',[EditorController::class, 'uploadPdf']);
         
         // route for existing logos
         Route::get('editor/editorpage/{themename?}/{page?}/logos',[EditorController::class, 'existinglogos']);
 
         // Route for getting place self alignment and justification
         Route::get('editor/editorpage/{themename?}/{page?}/placeself',[PlaceSelfController::class, 'show']);
         
         // retrieve existing carousel images
         Route::get('editor/editorpage/{themename?}/{page?}/existingCarouselImgs',[EditorController::class, 'showExistingCarouselImgs']);
 
         // retrieving all single images
         Route::get('editor/editorpage/{themename?}/{page?}/retrieveimgs',[EditorController::class, 'showSingleImgs']);

         
        // editor landing page
        Route::get('editor/editorlandingpage', [EditorController::class,'editorthemes'])->name('editorlandingpage');

        Route::get('/editor/editorpage/{themename?}',[EditorController::class, 'editorPage'])
        ->name('editorpage');
        Route::get('/editor/editorpage/{theme}/{navname}',[EditorController::class, 'editedPages'])
        ->name('editedpages');
        Route::get('/editor/navbar',[EditorController::class, 'editorNavbar'])
        ->name('navbar.editor');
        Route::get('/editor/hero',[EditorController::class, 'editorHero'])
        ->name('hero.editor');
        Route::get('/editor/news',[EditorController::class, 'editorNews'])
        ->name('news.editor');
        Route::get('/editor/video',[EditorController::class, 'editorVideo'])
        ->name('video.editor');
        Route::get('/editor/aboutus',[EditorController::class, 'editorAboutus'])
        ->name('aboutus.editor');
        Route::post('editor/editorpage/uploadimages',[EditorController::class, 'uploadimages'])
        ->name('uploadimages');
        // upload photo route
        Route::post('editor/editorpage/uploadphoto',[EditorController::class, 'uploadphoto'])
        ->name('uploadphoto');

        Route::view('/editor/navigationcomponent', 'components.dashboard.navigation')->name('navigationcomponent');
        // wala pang show na route
        Route::post('/editor/uploadsingleimage',[EditorController::class, 'uploadsingleimage'])
        ->name('uploadsingleimage');
        Route::get('/editor/showimg',[EditorController::class, 'showimage'])
        ->name('showimg');
        Route::get('/editor/showcarouselimg',[EditorController::class, 'showcarouselimg'])
        ->name('showcarouselimg');
        Route::get('/editor/existingimgs',[EditorController::class, 'existingimages'])
        ->name('showcarouselimg');
        Route::get('/editor/downloadables',[EditorController::class, 'editorDownloadables'])
        ->name('downloadables.editor');
        Route::get('/editor/magazine',[EditorController::class, 'editorMagazine'])
        ->name('magazine.editor');

    }
);

// !route for admin
Route::middleware(['auth','user-role:admin'])->group(function()
    {
        Route::get('/admin/home',[HomeController::class, 'adminHome'])
        ->name('home.admin');

        Route::get('/myprofile',[AdminController::class, 'adminProfile'])
        ->name('myprofile');

        // Route::get('/admin/logout',[HomeController::class, 'destroy'])
        // ->name('logout');

        // route to preview themes 
        Route::get('/admin/{theme?}/{page?}', [PageController::class, 'previewTheme'])
    //  ->where('nav', '.*')
     ->name('previewtheme');
    }
);


// ?route for super admin
Route::middleware(['auth','user-role:super-admin'])->group(function()
    {

        //route to show form for user creation
        Route::get('/superadmin',[SuperAdminController::class, 'show']) //create User
        ->name('super-admin.show');
        //route to post form for user creation
        Route::post('/superadmin/createadmin',[SuperAdminController::class, 'createAdmin'])
        ->name('super-admin.create');

        //route to update user role
        Route::post('/superadmin/update',[SuperAdminController::class, 'update'])
        ->name('super-admin.update');

        //route to show superadmin dashboard
        Route::get('/superadmin/dashboard',[SuperAdminController::class, 'superadminHome'])
        ->name('super-admin.showDashboard');
        // Route::get('/superadmin/logout',[HomeController::class, 'destroy'])
        // ->name('logout.superadmin');

        // Route::get('/myprofile',[AdminController::class, 'adminProfile'])
        // ->name('myprofile');


    }
);
