<h1>Add Member</h1>

<form action="Add" method="post" enctype="multipart/form-data">

    @csrf
    <input type="text" name="name" placeholder="enter user name" /> <br> <br> 

    <input type="text" name="email" placeholder="enter user email" /> <br> <br> 

    <input type="text" name="course" placeholder="enter user course" /> <br> <br> 
     
    <input type="file" name="image" /> <br> <br> 

    <button type="submit">Add User</button>
</form>

<table border="2" width="70%" cellpadding="10px" cellspacing="0px" style="text-align: center;">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>IMAGE</th>

    </tr>

    @foreach($students as $row)
    <tr>
        <td>{{$row['id']}}</td>
        <td>{{$row['name']}}</td>
        <td>{{$row['email']}}</td>
        <td>{{$row['course']}}</td>
        <td><img src={{$row['image']}} alt="no image" style="width: 80px;height: 80px; border-radius:50%;" ></td>
    </tr>
    @endforeach

</table>