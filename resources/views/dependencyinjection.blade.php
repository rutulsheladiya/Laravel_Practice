<h3>dependency injection</h3>

<?php

class Stadium{

}

class Football{
    public function __construct(Stadium $stadium){
        $this->stadium = $stadium;
    }
}

class Game
{
    public function __construct(Football $football){
          $this->football = $football;
    }
}

// Binding , instances je banaviye badhi service container ma j add thay

// app()->bind('gameObj', function () {
//     return new Game(new Football(new Stadium));
// });

// dd(app()->make('gameObj'));

// using resolve we don't need to bind it 
//dd(resolve("Game"));


//==========================================================================
// everytime generate random values
// app()->bind('random',function(){
//    return Str::random();
// });

// dump(app()->make('random'));
// dd(app()->make('random'));
// dd(app());

// single tone means aek it will generate value only one time not change every time.
// app()->singleton('random',function(){
//    return Str::random();
// });

// dump(app()->make('random'));
// dd(app()->make('random'));


?>
