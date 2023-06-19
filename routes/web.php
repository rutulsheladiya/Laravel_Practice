    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\TestSingleActionController;
    use App\Models\User;
    use Illuminate\Http\Request;
    use App\Http\Controllers\register;
    use App\Models\Product;

    use App\Http\Controllers\UserAuth;
    use App\Http\Controllers\StoreController;
    use App\Http\Controllers\RequestController;
    // use App\Http\Middleware\CheckAge;
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

    // ==========================================
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


    // ==========================================
    // Blade template
    Route::get('users', [UserController::class, 'loadView']);

    // ==========================================

    // HTMl form Register Route
    Route::get("/register", function () {
        return view("register");
    });


    // handle POST route after submitting the data.
    // Route::POST("/register",function(Request $req){
    //     return $req->all();
    // });

    // handle POST method after submitting the data using controller.
    Route::POST("/register", [register::class, "getData"]);

    // =================================================
    // middleware
    // route for no access page
    Route::get('/noaccess', function () {
        return view("noaccess");
    });

    // group middlware
    // Route::group(['middleware' => ['protectPage']], function () {
    //     Route::get('/bankdetails1', function () {
    //         return view("bankdetails1");
    //     });
    //     Route::get("/bankdetails2", function () {
    //         return view("bankdetails2");
    //     });
    // });

    // route middleware
    Route::get("/bankdetails2", function () {
        return view("bankdetails2");
    })->middleware('protectedPage');


    // route of facade page
    Route::view('/facade', 'facade');

    // route of custom facade page
    Route::get('customFacade', function () {
        return view("customFacade");
    });

    // dependencyinjection route
    Route::view('/dependencyinjection', 'dependencyinjection');

    // Route for httpclient blade & usercontroller callApi function
    Route::view("httpclientview", "httpclient");
    Route::get("httpclientview", [UserController::class, "callApi"]);

    // Route for httpRequestMethod & it's controller
    Route::view("httpRequestMethod", "httpRequestMethod");
    // Route::POST('action',[UserController::class,'httpRequestMethod']);
    // PUT Route
    // Route::put('action',[UserController::class,'httpRequestMethod']);
    // Delete Route
    // Route::delete("action",[UserController::class,'httpRequestMethod']);





    //========================================================================================================
    // Sigle Action Controller
    Route::get('singleActionController', TestSingleActionController::class);

    //========================================================================================================
    // resource controller with modal
    // testForm blade
    Route::view('/testForm', 'testForm');
    Route::resource('product', Product::class);
    //========================================================================================================

    // Sessions Example

    Route::get('login', function () {
        if (session()->has('username')) {
            return redirect('profile');
        }
        return view('session/login');
    });

    // UserAuth Controller UserLogin function Route
    Route::post('senddata', [UserAuth::class, 'userLogin']);

    // profile page Route
    Route::get('/profile', function () {
        if (!session()->has('username')) {
            return redirect('login');
        }
        return view('session/profile');
    });

    //logout route
    Route::get('/logout', function () {
        if (session()->has('username')) {
            // session()->pull('username',null);
            session()->flush();
            return redirect('login');
        }
    });

//========================================================================================================

 // Flash Session => flash session me je data store kariye te at a one time mate j store thay page refresh thay atle data delete thay jay.
//  store user route
Route::view('storeuser','session/storeuser');

//Store controller   function
Route::post('senduserdata',[StoreController::class,'StoreUser']);


//========================================================================================================
// Url generattion

Route::view('first', 'urlgeneration/first');
Route::view('second', 'urlgeneration/second');
Route::view('third', 'urlgeneration/third');


//========================================================================================================
//Request Page Route
Route::view('request', 'Request/request');
// Route::post('sendRequestdata',[RequestController::class,'requestData']);

// pass id from the router and catch it in the controller
Route::get('sendRequestdata/{id}',[RequestController::class,'Index2']);

// path inspection
Route::get("/admin/one",[RequestController::class,'Index3']);
Route::get("/admin/two",[RequestController::class,'Index3']);
Route::get("/guest/one",[RequestController::class,'Index3']);
Route::get("/guest/two",[RequestController::class,'Index3']);

// Named Route
Route::get("/adminn/one",[RequestController::class,'Index4'])->name('admin.one');
Route::get("/guestt/two",[RequestController::class,'Index4'])->name('guest.two');
