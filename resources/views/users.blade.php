<x-header componentName="users"/>
<h3>This Page is used for Blade Template</h3>
{{-- {{2+2}} --}}


{{-- @if($names == "Rutul")
<h3>Hello {{$names}}</h3>
@elseif($names == "Dhenish")
<h3>Hello {{$names}}</h3>
@else
<h3>Unknown User</h3>
@endif --}}

{{-- =================================================== --}}

{{-- <h3>Total Element {{count($names)}}</h3> --}}

{{-- =================================================== --}}

{{-- for loop --}}
@for($i=1;$i<=10;$i++)
<h4>{{$i}}</h4>
@endfor

{{-- =================================================== --}}

{{-- for each loop --}}
@foreach ($name as $data)
    {{$data}}
@endforeach

{{-- =================================================== --}}

{{-- include contact.blade.php page --}}
@include('contact')

{{-- =================================================== --}}
{{-- get php array from json --}}
{{-- {{print_r(json_decode($name,true))}} --}}

{{-- =================================================== --}}

{{-- convert php array into json --}}
{{-- {{json_encode($name)}} --}}

{{-- =================================================== --}}

{{-- use php array data in js --}}  


@csrf
<script>
    // convert the php array into json
    // var data = @json($name);
    // console.log(JSON.stringify(data));
</script>
<x-footer/>