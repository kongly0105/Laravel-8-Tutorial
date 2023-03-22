<h1>User login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id" /> <br><br>
    <input type="password" name="userpassword" placeholder="enter user password" /> <br><br>
    <button type="submit">Login</button>
</form>
