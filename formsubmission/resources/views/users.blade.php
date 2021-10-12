<h1>User Login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter the user id"><br>
    <span style="color: red">@error('username'){{$message}}@enderror</span><br><br>
    <input type="password" name="userpassword" placeholder="Enter the user password"><br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span><br><br>
    <button type="submit">Login</button>
</form>