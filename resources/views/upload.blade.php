<h1>Upload file</h1>

<form action="upload" method="post" enctype="multipart/form-data">
    @csrf

    <input type="file" name="save"> <br> <br>
    <button type="submit">Upload File</button>

</form>