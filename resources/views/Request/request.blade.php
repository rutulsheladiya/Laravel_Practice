<h3>Request Page</h3>
{{-- <form action="{{url('/')}}/sendRequestdata" method="Post">
@csrf
    <button type="submit">Submit</button>
</form> --}}


{{-- request Input --}}
<form action="{{ url('/') }}/sendinputdata/" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Enter name" name="username" value="{{ old('username') }}"> <br><br>
    <input type="email" placeholder="Enter name" name="email"><br><br>
    <input type="password" placeholder="Enter password" name="password"><br><br>
    <input type="date" name="bdy"><br><br>
    <input type="file" name="profile[]" multiple><br><br>
    <button type="submit">Submit</button>
</form>
