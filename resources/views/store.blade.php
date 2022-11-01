<h1>Add New Member</h1>

@if(session('name'))
<h3>Data saved for, {{session('name')}}</h3>
@endif

<form action="storecontroller" method="post">

    @csrf
    <input type="text" name="name" placeholder="enter user name"> <br></br>

    <input type="password" name="password" placeholder="enter user password"> <br></br>

    <input type="email" name="email" placeholder="enter user email"> <br></br>
    
    <button type="submit" class="btn btn-primary">Add User</button>

</form>