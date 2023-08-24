<h2>Login Page</h2>


<form method="POST" action="user_login">
  @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" name="username" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" id="exampleFormControlInput1">
</div>

<input type="submit" value="Submit" />
</form>
