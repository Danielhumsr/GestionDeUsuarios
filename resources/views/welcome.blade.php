@extends('estructura')

@section('contenido')
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Navbar</span>
    </div>
  </nav>
<div class="container login">
    <h1>LOGIN</h1>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">User</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        
      </form>

     <a href="" class="btn btn-primary" onclick="CrearUsuario();"> LogIn</a>
</div>

    
@endsection