<h3>Http Client</h3>
<p>We will fetch the api Data in the form on table</p>

{{-- First API Response Data --}}
{{-- <table border="1">
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>avatar</th>
    </tr>
    @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['last_name']}}</td>
            <td><img src="{{$item['avatar']}}" alt=""></td>
        </tr>
    @endforeach
</table> --}}

{{-- ====================================================================================================================== --}}


{{-- Second API Response Data --}}
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Year</th>
        <th>Color</th>
        <th>Pantone Value</th>
    </tr>
    @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['year']}}</td>
            <td>{{$item['color']}}</td>
            <td>{{$item['pantone_value']}}</td>
        </tr>
    @endforeach
</table>