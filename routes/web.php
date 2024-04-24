<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Post\AddPostController;
use Illuminate\Support\Facades\Route;

/*
---------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route de base pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Groupe de routes nécessitant une authentification
Route::middleware('auth')->group(function () {
    // Route pour les posts, nécessitant également que l'utilisateur soit vérifié
    Route::get('/feed', [PostController::class, 'index'])
        ->middleware('verified')
        ->name('feed');

    // Routes pour la gestion du compte utilisateur
    Route::get('/account', [ProfileController::class, 'edit'])
        ->name('account.edit');
    Route::patch('/account', [ProfileController::class, 'update'])
        ->name('account.update');
    Route::delete('/account', [ProfileController::class, 'destroy'])
        ->name('account.destroy');

    // Route pour le profil utilisateur
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');

    // Routes pour ajouter des posts
    Route::get('addpost', [AddPostController::class, 'create'])
        ->name('addpost');
    Route::post('addpost', [AddPostController::class, 'store']);
});


//routes pour acceder au profil d'un utilisateur : 
Route::get('/user/profile/{user_id}', [UserProfileController::class, 'showProfile'])->name('user.profile');




// Inclusion des routes d'authentification
require __DIR__ . '/auth.php';
