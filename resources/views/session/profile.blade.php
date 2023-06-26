<h3>Profile Page</h3>
@if (session()->has('message')){
   {{session("message")}}
}

@endif
<h2>Hello {{ session()->get('username')}}</h2>
<h2>{{ session('role')}}</h2>
<a href="{{url('/')}}/logout">Logout</a>
