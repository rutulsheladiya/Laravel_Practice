<h3>HTTP Request Methods</h3>
<p>GET,POST,PUT,PATCH,DELETE,HEAD,OPTIONS</p>

{{-- get method  => Get method ma CSRF token moklvani jarur nathi --}}
{{-- <form action="{{url('/')}}/action" method="get">
    <input type="email" placeholder="Enter Email" name="email"><br><br>
    <input type="password" placeholder="Enter Password" name="password"><br><br>
    <button type="submit">Submit</button>
</form> --}}

{{-- ============================================================================ --}}

{{-- POST method jyare post method user kariye tyare compalsory @csrf token moklvu nkr page expire ni error avse. --}}
{{-- <form action="{{url('/')}}/action" method="POST">
    @csrf
    <input type="email" placeholder="Enter Email" name="email"><br><br>
    <input type="password" placeholder="Enter Password" name="password"><br><br>
    <button type="submit">Submit</button>
</form> --}}

{{-- ============================================================================ --}}

{{-- - PUT => jyare apde put method use kariye tyare form ni andar action="PUT" Lakhiye to chalse nahi because 
browser bydefault GET & POST 2 j method ne samje che to apde form ni andar  method_fill('PUT') a rite lakhvu padse and
jya router banaviye tya method nu name put apvu padse.

- method_fill('PUT') bydefault form ni sathe aek field j add kari deshe jema value put haise atle apnne khabar padse a put 
method che. --}}


{{-- <form action="{{url('/')}}/action" method="POST">
    @csrf
    {{method_field('PUT')}}
    <input type="email" placeholder="Enter Email" name="email"><br><br>
    <input type="password" placeholder="Enter Password" name="password"><br><br>
    <button type="submit">Submit</button>
</form> --}}

{{-- ============================================================================ --}}

{{-- Delete method same as put method --}}
<form action="{{url('/')}}/action" method="POST">
    @csrf
    {{method_field('DELETE')}}
    <input type="email" placeholder="Enter Email" name="email"><br><br>
    <input type="password" placeholder="Enter Password" name="password"><br><br>
    <button type="submit">Submit</button>
</form>