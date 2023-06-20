<h3>Response Page</h3>
<form action="{{url('/')}}/dataresponse" method="get">
    @csrf
    <input type="text" name="name" placeholder="Enter name"><br>
    <button type="submit">Submit</button>
</form>
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
