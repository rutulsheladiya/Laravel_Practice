{{-- {{$collection}} --}}
<table border="1">
    <tr>
        <th>Id</th>
        <th>email</th>
        <th>name</th>
        <th>mobileno</th>
        <th>age</th>
        <th>address</th>
        <th>city</th>
        <th>state</th>
        <th>country</th>
        <th>profile</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>

    @foreach($collection as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->mobileno}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->city}}</td>
        <td>{{$item->state}}</td>
        <td>{{$item->country}}</td>
        <td><img src="{{$item->profile}}" alt=""></td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_at}}</td>
    </tr>
    @endforeach
</table>
