<h1>Update Users</h1>

<form action="/edit" method="post">

    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}" /> <br> <br>

    <input type="text" name="First_name" value="{{$data['First_name']}}" /> <br> <br>

    <input type="text" name="Last_name" value="{{$data['Last_name']}}" /> <br> <br>

    <button type="submit">Update</button>

</form>