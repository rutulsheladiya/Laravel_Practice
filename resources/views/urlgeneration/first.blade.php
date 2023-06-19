<ul>
    <li>
        <a href="{{url('/')}}/first">First</a>
        <a href="{{url('/')}}/second">Second</a>
        <a href="{{url('/')}}/third">Third</a>
    </li>
</ul>

<h3>First Page</h3>

{{-- URL::current() => return current url  --}}
<p>Current Url Is :  {{URL::current()}}</p>

{{-- =================================================================================== --}}

{{-- URL::full() -> return url with parameter --}}
<p>Current URL With Parameter : {{URL::full()}}</p>

{{-- =================================================================================== --}}

{{-- URL::previous() -> last kaya page ne visit kari ne avya chiye te page ni url apse --}}
<p>Previous Visited Page : {{URL::previous()}}</p>
