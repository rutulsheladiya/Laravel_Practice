<h3>Custom Facade</h3>

<?php
class Fish{
    public function swim(){
        return "Swimming";
    }
    public function eat(){
        return "Eating";
    }
}
// $obj1 = new Fish();
// dd($obj1->eat());

app()->bind('fishObj',function(){
    return new Fish;
});
// we can call the fish class method like this
// dd(app()->make('fishObj')->eat());

// ======================================================================

// class FishFacade{
//     public static function __callStatic($name,$args){
//         return app()->make('fishObj')->$name();
//     }
// }
// dd(FishFacade::swim());
// NOTE : ahiya aopde FishFacade class ma magic method __callStatic use kariye chiye it means jyare apde dd kai ne
// FishFacade::swim() a karishu atle FishFacade class ma jashe tyate swim method ne find karse. swim mwthod nahi male atle
// __callStatic method call thase aema 2 value hoy che $name => functin name ,$args => function parameter like(swim ("eurr"))
// and te function nu name return karse.


// ======================================================================

// now let's make common facade class that conatin __callstatic() so we can easily call it
class Facade{
    public static function __callStatic($name,$args){
        return app()->make(static::getFacaceAccessor())->$name();
    }
}

// class FishFacade extends Facade{
//     public static function getFacaceAccessor(){
//         return 'fishObj';
//     }
// }
// dd(FishFacade::swim());

// ======================================================================

class Bike{
    public function start(){
        return "Bike Started..";
    }

    public function run(){
        return "Bike Running..";
    }
}
app()->bind('bikeObj',function(){
  return new Bike;  
});
// dd(app()->make("bikeObj"));

class bikeFacade extends Facade{
   public static function getFacaceAccessor(){
    return 'bikeObj';                        //as a string return karse
   }
}
dd(bikeFacade::run());
?>
