<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
        <table border="1" class="table table-responsive mb-5">
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
        {{$collection->links()}}
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>


