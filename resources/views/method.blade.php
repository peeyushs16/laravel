

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    

<h3>FLASH SESSION</h3>

@if(session('user'))
<h3>Data save for {{session('user')}}</h3>
@endif
<form method="POST" action="session_flase">
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

<br/>
<br/>
<br/>


<h3>POST METHOD</h3>

<form method="POST" action="method_user">
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

<br/>
<br/>
<br/>


<h3>PUT METHOD</h3>
<form method="POST" action="method_user">
  @csrf
  {{method_field('PUT')}}
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

<br/>
<br/>
<br/>

<h3>DELETE METHOD</h3>
<form method="POST" action="method_user">
  @csrf
  {{method_field('DELETE')}}
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

<br/>
<br/>
<br/>
    <h3>GET METHOD</h3>
<form method="GET" action="method_user">
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

<br/>
<br/>
<br/>