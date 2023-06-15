<x-Header componentName="Home"/>
<h3 class="text-center">Welcome Page</h3>
<a href="/about">About Us</a>
<a href="/contact">Contact Us</a>

<?php 
//bind a function to service container
// app()->bind("myfunction",function(){
//     return "This is my function";
// });
// app()->bind("testFunction",function(){
//    return "Testing Function";
// });
//dd(app()->make('myfunction'));
// dd(app());

//called defrred service 
//validator();
// dd(app());

// create service provider in app/provider
// dd(app()->make('NewFunction'));
validator();
dd(app());
?>
<x-Footer/>