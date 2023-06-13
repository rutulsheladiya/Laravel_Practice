    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
    use App\Models\User;

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
        return view('welcome');
    });

    Route::get('/about', function () {
        return view('about');
    });

    // Route::view('/about','about');


    Route::get("/contact", function () {
        return view("contact");
    });

    // Route::view("/contact","contact");

    //  * Routes With Parameter  *
    // 1)
    // passing data in url and other page
    // Route::get("/post/{id}",function($id){
    //   return view("post",["userId" => $id]);
    // });

    // 2)
    // aama jo apde post lakhi ne id pass nahi kariye to page not fount ni error avse
    // Route::get("/post/{id}",function($id){
    //     return "<h3>Id Is : ".$id."</h3>";
    // });

    // 3)
    // post lakhi ne id pass na krvi hoy without error
    // Route::get("post/{id?}",function($id = null){
    //     if($id == null){
    //         return "<h3>Id Not Sended</h3>";
    //     }else{
    //         return "<h3>Id Is : ".$id."</h3>";
    //     }
    // }); 

    // 4)
    Route::get("/post/{id?}", function ($id = null) {
        if ($id == null) {
            return view("post", ["userId" => $id]);
        } else {
            return view("post", ["userId" => $id]);
        }
    });


    // controller
    Route::get("/user", [UserController::class, 'userData']);
    Route::get("/profile/{id}/{name}", [UserController::class, 'showProfile']);

    // set default value
    // Route::get("/profile/{id?}/{name?}", [UserController::class, 'showProfile']);

    // controller Group
    // Route::controller(UserController::class)->group(function () {
    //     Route::get("/user", 'userData');
    //     Route::get("/profile/{id?}/{name?}", 'showProfile');
    // });
