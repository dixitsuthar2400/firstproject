
<h1>Users page</h1>

<table border="2" width="70%" cellpadding="10px" cellspacing="0px" style="text-align: center;">
    <tr>
        <th>Id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Action</th>
    </tr>

    @foreach($students as $row)
    <tr>
        <td>{{$row['id']}}</td>
        <td>{{$row['First_name']}}</td>
        <td>{{$row['Last_name']}}</td>
        <td><a href={{"delete/" .$row['id']}} >Delete</a>  <a href={{"edit/" .$row['id']}} >Edit</a></td>
    </tr>
    @endforeach

</table>