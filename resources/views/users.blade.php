<h1>User login List</h1>

<form action="users" method="post">

    @csrf
    <input type="text" name="name" placeholder="username" />
    <br>
    <span style="color:red">@error('name'){{$message}}@enderror</span>
    </br>
    
    <input type="password" name="password" placeholder="password" />
    <br>
    <span style="color:red">@error('password'){{$message}}@enderror</span>
    </br>

    <button type="submit">login</button>
  
</form> 