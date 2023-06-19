<h3>Request Page</h3>
<form action="{{url('/')}}/sendRequestdata" method="get">
@csrf
    <button type="submit">Submit</button>
</form>
