<h3>Student List</h3>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Department</th>
        <th>Salary</th>
        <th>Gender</th>
        <th>Age</th>
    </tr>
    @foreach ($allData as $item)
        <tr>
          <td>{{$item['EmployeeId']}}</td>
          <td>{{$item['FullName']}}</td>
          <td>{{$item['Department']}}</td>
          <td>{{$item['Salary']}}</td>
          <td>{{$item['Gender']}}</td>
          <td>{{$item['Age']}}</td>
        </tr>
    @endforeach
</table>
