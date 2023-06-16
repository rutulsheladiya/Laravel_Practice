<h1>Facades </h1>

<?php 

// class Dheno {
//     public function greet()
//     {
//         return 'Hii I am Dheno';
//     }
// }

// app()->bind('dhenoObject',function(){
//     return new Dheno;
// });
// dd(app()->make('dhenoObject')->greet());



// Dependency between classes
// class stadium {

// }

// class football{
//     public $stadium;
//     function __construct(Stadium $s)
//     {
//         $this->stadium = $s;
//     }
// }

// class Game {
//     public $football;
//     function __construct(Football $f)
//     {
//         $this->football = $f;
//     }
// }

// app()->bind('obj',function(){
//    return new Game(new Football(new Stadium));
// });
// dd(app()->make('obj'));
//To resolve dependeny (Dependency injection)
// dd(resolve('Game'));







// Facades
 
class ThisIsARutulClass {

    public function show()
    {
        return 'Showing';
    }
    public function display()
    {
        return 'display called';
    }
}
//We need object to access show method

//Binding a service which will return us a new object of class
app()->bind('Rutulobj',function()
{
    return new ThisIsARutulClass;
});



//Base class facade
class Facade {
    public static function __callStatic($name, $args)
    {
        return app()->make(static::getFacadeAccessor())->$name();
        //app()->make('Rutulobj')
        //$name = show
        //app()->make('Rutulobj')->show();
        //ThisIsARutulClass -> show();
        //Showing
    }

    // protected static function getFacadeAccessor(){

    // }
}

//
class RutulFacade  extends Facade{

    protected static function getFacadeAccessor(){
        //Returning a string through which we can get the object if we pass in make() method
        return 'Rutulobj';
    }

}
// $obj = new ThisIsARutulClass(new ThisIsADhenoClass);
// $obj->show();
dd(RutulFacade::display());
/* 
Steps:

1. Check the display method in rutulfacade
2. Go to parent class of Rutulfacade to find display method
3. Method does not exist in facade then call the __callStatic
4. Return the make method of app.
5. Call the getFacaceAccessor of children class
6. Getfacade will return a string through which we can get the object where display method is present
7. Call the method Through $name (the name of method we have called using RutulFacade)
8. Display the output.
*/

Cache::set('name', 'Rutul');
dd(Cache::get('name')); 
?>

