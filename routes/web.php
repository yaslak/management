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
/*
 * language chooser
 */
Route::post('/language-chooser','App\LanguageController@changeLanguage');
Route::post('/language/',array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'App\LanguageController@changeLanguage'
));

/*
 * home guest and Membre
 */
Route::get('/', 'Home\HomeController@index')->middleware('recover')->name('home');

/*
 * Membre
 */

Auth::routes();


/**
 * juridiction App
 *      Conditions
 *      Terms
 *      Policy
 */

Route::prefix('app')->group(function (){
    Route::get('faq',function (){
            return view('app.faq');
        })->name('faq');
    Route::get('policies',function (){
            return view('app.policies');
        })->name('policies');
    Route::get('conditions',function (){
            return view('app.conditions');
        })->name('conditions');
});

/*
 * système Permissions
 */

Route::post('permissions','Permissions\PermissionsController@index')->name('permissions');

/**
 * Système password reset
 */
Route::namespace('Auth\Password')->prefix('password')->middleware('guest')->group(function (){Route::get('target','TargetController@index')->name('reset.target.show');
    Route::put('target','TargetController@store')->name('reset.target.store');
    Route::get('last_password/{token}','last_passwordController@index')->name('reset.lp.show');
    Route::put('last_password/{token}','last_passwordController@store')->name('reset.lp.store');
    Route::get('sq/{token}','sqController@index')->name('reset.sq.show');
    Route::put('sq/{token}','sqController@store')->name('reset.sq.store');
    Route::get('mail/{token}','mailController@index')->name('reset.mail.show');
    Route::put('mail/{token}','mailController@store')->name('reset.mail.store');
    Route::get('newPassword/{token}','NpswController@index')->name('reset.npsw.show');
    Route::put('newPassword/{token}','NpswController@store')->name('reset.npsw.store');
});

/**
 * Système recovered
 */
Route::namespace('Auth\Recover')->prefix('recover')->group( function (){
    Route::get('recover','RecoverController@index')->name('recover.recover');
    Route::put('recover','RecoverController@store')->name('recover.store');
    Route::get('mail','MailController@index')->name('recoverMail.show');
    Route::post('mail','MailController@return')->name('recoverMail.return');
    Route::put('mail','MailController@store')->name('recoverMail.store');
    Route::get('sq','SqController@show')->name('recoverSq.show');
    Route::post('sq','SqController@store')->name('recoverSq.store');
    Route::put('sq','SqController@update')->name('recoverSq.update');
});
/*
// profil

Route::middleware('auth')->namespace('Membre')->group(function (){
    Route::get('{slug}','ProfilController@index')->name('profil.show');
    Route::put('{slug}','ProfilController@update')->name('profil.info.update');
});

Route::middleware('auth')->namespace('App')->group(function (){
    Route::get('setting','SettingController@index')->name('setting');
});
// organisation
Route::namespace('Admin')->prefix('admin')->middleware('auth')->group(function (){
    Route::get('admin','AdminController@index')->name('admin.index');
    Route::get('users','AdminController@index')->name('users.index');
    Route::resources(['society'=>'SocietiesController']);
});
*/
/**
 * Admin
 */

Route::namespace('Admin')->prefix('admin')->group(function (){
    Route::resources(['societies'=>'SocietiesController']);
    Route::resource('users','UsersController',['only' => [
        'index',
        'destroy'
    ]]);
});
/**
 * User
*/
Route::namespace('User')->prefix('user')->group(function (){
    // setting
   // Route::get('setting','Setting\SettingController@index')->name('setting');
    // profil

});

/**
 * Society
*/

Route::namespace('Society')->prefix('society')->group(function (){
    // setting
    Route::get('setting','Setting\SettingController@index')->name('setting');
    // profil
    Route::resources(['society_profil'=>'Profil\ProfilController']);
    // Clients

});


// users
Route::resources(['user'=>'User\UserController']);

// societies
Route::resources(['society'=>'Society\SocietyController']);

// providers
Route::resources(['provider' => 'Provider\ProviderController']);
Route::resources(['provider_private' => 'Provider\ProviderPrivateController']);
Route::resources(['provider_society' => 'Provider\ProviderSocietyController']);

// clients
Route::resources(['client' => 'Client\ClientController']);

// Store
Route::resources(['store' => 'Store\StoreController']);

// Buy
Route::resources(['buy' => 'Buy\BuyController']);

// Sale
Route::resources(['sale' => 'Sale\SaleController']);

// Accounting
Route::resources(['accounting' => 'Accounting\AccountingController']);

//Agenda
Route::resources(['agenda' => 'Agenda\AgendaController']);

// Statistic
Route::resources(['statistic' => 'Statistic\StatisticController']);

// dashboard
Route::resources(['dashboard' => 'Dashboard\DashboardController']);

// Organization
Route::resources(['organization' => 'Organization\BuyController']);

// setting
Route::resources(['setting' => 'Setting\SettingController']);

// admin
Route::resources(['admin' => 'Admin\AdminController']);