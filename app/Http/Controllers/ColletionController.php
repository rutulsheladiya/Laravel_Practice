<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\Diff\Diff;

class ColletionController extends Controller
{
    function Index(){
    // 1) collect()
    //    $data = collect([1,2,3,4,5,6,7,8,9,10]);
    //    dump($data);

    //    2) all() return the underlaying array represented by collection.
    // $data = collect([1,2,3,4,5,6,7,8,9,10]);
    // dump($data->all());

    // 3) avg() return the avegrage value of given key
    // $data = collect([1,2,3,4,5]);
    // dump($data->avg());

    // 4) chunk() -> chunk will break the collection into multiple smaller colletion of given size.
     $data = collect(['first','second','third',4,5,6,7,8,9,'ten']);
     dump($data->chunk(3)->all());

     //5) combine
     $data1 = collect(['name'=>'Rutul','Age'=>23]);
     $data2  = collect(['Mobile'=>12345,'Address'=>'surat']);
     $combined = $data1->combine($data2);
     dump($combined->all());

     //6) merge() merge one or more array or colletion() with original collection. if the given collcetion and originakl colletion has same key then given key value with override with original collection key value
     $data1 = collect(['Name'=>'Rutul','MobileNo'=>8320893080]);
     $data2 = collect(['Name'=>'Puro','city'=>'surat']);
     $merged = $data1->merge($data2);
     dump($merged->all());

    //7) mergerecursive() merge one or more array or colletion() with original collection. if the given collcetion and originakl colletion has same key then the value of that same key are merged together into new array.
        $data1 = collect(['Name'=>'Rutul','MobileNo'=>8320893080]);
        $data2 = collect(['Name'=>'Puro','city'=>'surat']);
        $merged = $data1->mergeRecursive($data2);
        dump($merged->all());



    //8) diff() - first collection ma je value che e second collection ma nai hoy aetli value first collection ni original colletion ma return krse.
     $data1 = collect([1,2,3,4,5,6,7,8,9,0]);
     $data2 = collect([4,6,8,2,10,40,20]);
     $diff = $data1->diff($data2);
     dump($diff);


     //9) diffkeys() banne collection ne key check krse colletion 1 ma je key che e collcetion 2 ma nahi hoy to original colletion ma colletion 1 ni je key collcetion 2 ma naho hoy te return karse.
     $data1=collect(['one' => 10,'two' => 20,'three' => 30,'four' => 40,'five' => 50,]);
     $data2 = collect(['one' => "ABD",'two' => 2,'four' => 4,'six' => 6,'eight' => 8,]);
     $diffkey = $data1->diffKeys($data2);
     dump($diffkey->all());

    //  10) flip() => change key with value and value with key
     $data1=collect(['one' => 10,'two' => 20,'three' => 30,'four' => 40,'five' => 50,]);
     $flip = $data1->flip($data1);
     dump($flip);
     $data2=collect([10,20,30,50,60,'ABC']);
     $flip = $data2->flip($data2);
     dump($flip);

    //11) groupby() it will groupby colletion that have the same key. 
     $data = collect([
        ['account_id' => 'account-x10', 'product' => 'Chair'],
        ['account_id' => 'account-x10', 'product' => 'Bookcase'],
        ['account_id' => 'account-x11', 'product' => 'Desk'],
    ]);
     
    $grouped = $data->groupBy('account_id');
     
    dump($grouped->all());

    //12) has() => collection ni andar array ni key ne find karva use thase jo search kreli key exist haise to true return krse nkr false apse.
    $data = collect(['Id'=>1,"Name"=>"Rutul","Address"=>"India","City"=>"Surat"]);
    $hasData = $data->has('Name');
    // $hasData = $data->has(['Name','Address']);
    // $hasData = $data->has(['Name','Town']);
    dump($hasData);

    // 13) isEmpty() - jo collection khali haise toi true return krse nkr false apse.
    // 14) isnotEmpty() - jo collection khali nai hoy to true return krse nkr false apse.

    // 15) push() add new item at the end of the collection
    $data = collect([1,2,3,4]);
    $pushData = $data->push(5,6,7);
    dump($data->all());

        // 16) pop() delete last element from collection
        $data = collect([1,2,3,4]);
        $popData = $data->pop();
        dump($data->all());
    }
}
