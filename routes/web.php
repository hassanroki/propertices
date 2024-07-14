<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactIconController;
use App\Http\Controllers\ContactPhoneController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MainMenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialIconController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\Role;
use App\Models\SendMail;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/project/{project}', [HomeController::class, 'project'])->name('project');

// Contact
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Send Mail
Route::get('/send-mail/create', [SendMailController::class, 'create'])->name('send-mail.create');
Route::post('/send-mail', [SendMailController::class, 'store'])->name('send-mail.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Admin Route
Route::middleware(['auth', Role::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::resource('/admin/welcome', WelcomeController::class);
    Route::resource('/admin/social', SocialIconController::class);
    Route::resource('/admin/logo', LogoController::class);
    Route::resource('/admin/contact-icon', ContactIconController::class);
    Route::resource('/admin/main-menu', MainMenuController::class);
    Route::resource('/admin/banner', BannerController::class);
    Route::resource('/admin/about', AboutUsController::class);
    Route::resource('admin/service', ServiceController::class);
    Route::resource('/admin/project', ProjectController::class);
    Route::resource('/admin/contact-phone', ContactPhoneController::class);
    // Contact
    Route::get('/admin/contact/', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('/admin/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

    // Send Mail
    Route::get('/admin/send-mail/', [SendMailController::class, 'index'])->name('send-mail.index');
    Route::delete('/admin/send-mail/{send_mail}', [SendMailController::class, 'destroy'])->name('send-mail.destroy');

    Route::resource('/admin/footer', FooterController::class);
});
