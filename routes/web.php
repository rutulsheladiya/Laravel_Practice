    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\TestSingleActionController;
    use App\Models\User;
    use Illuminate\Http\Request;
    use App\Http\Controllers\register;
    use App\Models\Product;
    use App\Models\Personal;
    use App\Http\Controllers\UserAuth;
    use App\Http\Controllers\StoreController;
    use App\Http\Controllers\RequestController;
    use Symfony\Component\Routing\RequestContext;
    use App\Http\Controllers\ResponseController;
    use App\Http\Controllers\DatabaseData;
    use App\Http\Controllers\factorydata;
    use App\Http\Controllers\EmployeeController;
    use Illuminate\Support\Facades\Log;
    use App\Http\Controllers\ColletionController;
    use App\Http\Controllers\PersonalController;
    use App\Jobs\sendemailtest;
    use App\Jobs\sendmail;
    use App\Mail\sendtestemail;
    use App\Mail\Welcome;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Mail;
    use App\Http\Controllers\InvokableController;
use Faker\Test\Provider\Collection;

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
    // aama jo apde post lakhi ne id pass nahi kariye to page not fount ni error avse

    // 2)
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
            // session()->forget(['username','role']);
            session()->flush();
            return redirect('login');
        }
    });



    //========================================================================================================

    // Flash Session => flash session me je data store kariye te at a one time mate j store thay page refresh thay atle data delete thay jay.
    //  store user route
    Route::view('storeuser', 'session/storeuser');

    //Store controller   function
    Route::post('senduserdata', [StoreController::class, 'StoreUser']);


    //========================================================================================================
    // Url generattion

    Route::view('first', 'urlgeneration/first');
    Route::view('second', 'urlgeneration/second');
    Route::view('third', 'urlgeneration/third');


    //========================================================================================================
    //Request Page Route
    Route::view('request', 'Request/request');
    // Route::post('sendRequestdata', [RequestController::class, 'requestData']);

    // pass id from the router and catch it in the controller
    //Route::get('sendRequestdata/{id}',[RequestController::class,'Index2']);

    // path inspection
    Route::get("/admin/one", [RequestController::class, 'Index3']);
    Route::get("/admin/two", [RequestController::class, 'Index3']);
    Route::get("/guest/one", [RequestController::class, 'Index3']);
    Route::get("/guest/two", [RequestController::class, 'Index3']);

    // Named Route
    Route::get("/adminn/one", [RequestController::class, 'Index4'])->name('adminn.one');
    Route::get("/guestt/two", [RequestController::class, 'Index4'])->name('guestt.two');

    // Retriving Input Data Route with controller
    Route::post('sendinputdata', [RequestController::class, 'getFormData']);

    //========================================================================================================

    //HTTP Response
    // Response Page route

    // 1) return a simple string data
    // Route::get('response',function(){
    //    return "this is simple response";
    // });

    // 2) Return a array
    // Route::get('response',function(){
    //    return ['first','second',3,4,"five","six","seven"];
    // });

    //3) Using response()
    // Route::get('response',function(){
    //    dd(response("this is response using response method"));
    // });

    //4) Using response() pass header
    // Route::get('response',function(){
    //    dd(response("this is response using response method")
    //    ->header('Content-Type',"application/json"))
    //    ->header('Authorization', 'token');
    // });

    //5) if we want to pass multiple header then we can pass it using withheader()
    // Route::get('response',function(){
    //     return dd(response("this is simple response using response method with headers")->withHeaders([
    //         'Content-Type'=>"application/json",
    //         'Authorization'=> 'token'
    //     ]));
    // });

    // 6) set cookie in response
    // Route::get('response',function(){
    //     return dd(response("this is simple response using response method with headers")->withCookie('userName','Rutul Sheladiya',180));
    // });

    // 7) redirect('viewname') => it is used to redirect on the other page.

    Route::view('/response', 'response');
    Route::get('dataresponse', [ResponseController::class, 'index']);
    Route::get('registerTest', [register::class, 'test']);

    //========================================================================================================//================================================================================================================================================================================================================

    // localization
    Route::get('localizationExample/{lang}', function ($lang) {
        // App::setlocale($lang);
        return view('localization');
    });

    //========================================================================================================//================================================================================================================================================================================================================
    // Error logging

    // Route::get('checkerrorlog',function(){
    //      Log::info("Log Pade che ke nahi..");
    // });

    //create custom log
    Route::get('checkerrorlog', function () {
        Log::channel('customlog')->info('custom log created');
    });

    //crete custom log in blade file
    // Route::get('checkerrorlog',function(){
    //   Log::channel('bladelog')->info("Custom Log Created In Blade File");
    // });

    // Route of custom log in blade file
    // Route::view('mylog','CustomLog/mylog');

    //========================================================================================================//================================================================================================================================================================================================================
    //========================================================================================================//================================================================================================================================================================================================================
    //1) fetch data from database using controller
    Route::get('fetchdata', [UserController::class, 'fetchDbData']);


    //2) fetch data from table and stotre it in table in blade file
    //Route::view('studentlist', 'DatabaseData/studentlist');
    Route::get('studentlist', [DatabaseData::class, 'fetchdata']);
    //========================================================================================================//================================================================================================================================================================================================================

    // * Query Builder *
    Route::get('querybuilder', [DatabaseData::class, 'index']);

    //========================================================================================================//================================================================================================================================================================================================================

    // * Factory Data Fetch *
    Route::view('factorydata', 'Factory/factorydata');
    Route::get('factorydata', [factorydata::class, 'fetchFactoryData']);

    //========================================================================================================//================================================================================================================================================================================================================

    // * Seeder Data Fetch *
    Route::view('seederdata', 'seederdata/seederdata');
    Route::get('seederdata', [EmployeeController::class, 'Index']);

    //========================================================================================================//================================================================================================================================================================================================================

    // * Collections Different Methods *
    Route::get('collectionMethods', [ColletionController::class, 'Index']);

    //========================================================================================================//================================================================================================================================================================================================================

    //*  Serialization *
    Route::get('serialization', [PersonalController::class, 'Serialization']);


    Route::get('/execCmd', function () {
        $res = Artisan::call('cmd');
        dump($res);
    });

    // without queue and job
    Route::get('/sendMail', function () {
        $user = Personal::where('name', 'Dhenish')->first();
        Mail::to("rutulsheladiya2731@gmail.com")->send(new Welcome($user));
    });

    Route::get('/sendMailall', function () {
        // $users = Personal::all();
        // foreach($users as $user){
        //   sendmail::dispatch($user)->delay(now()->addMinutes(2));
        // }
        $user = Personal::where('name', 'Rutul Sheladiya')->first();
        sendmail::dispatch($user);
        return "mail Sending...........................";
    });

    //========================================================================================================//================================================================================================================================================================================================================
    Route::get('testemail', function () {
        //  Mail::to('dhenishjivani@gmail.com')->send(new sendtestemail);
        //  return view('email.testemail');

        // without quque
        //   $data = Personal::where("id",3)->first();
        //   Mail::to($data)->send(new sendtestemail($data));
        //   return "Mail Send";

        $data = Personal::where("id", 6)->first();
        sendemailtest::dispatch($data);
        return "Mail Send";
    });

           //========================================================================================================//================================================================================================================================================================================================================
// Invokable Controller Route
Route::get('invokablecontroller',InvokableController::class);


Route::get('contactus',[ColletionController::class,'test']);