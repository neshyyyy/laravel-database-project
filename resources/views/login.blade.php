@extends('header')

@section('login')

<style>
  html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }
</style>
<form action ="login" method="post" >
@csrf 
<body class="text-center"> 
  
    
     <main class="form-signin">
      <form>
        <img  src="/images/logo.svg" alt="" width="202" height="200">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">

          <label for="floatingInput" >Email Address</label>
        </div>

        <div  class="form-floating">

          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">

          <label for="floatingPassword"class="form-label">Password</label>

        </div>
        <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

        <button type="submit" class="btn btn-primary w-100 mb-2"  >Login</button>
        <button type="button" onclick="window.location='/register'"
            class="btn btn-secondary  w-100 mb-2" >Register</button>

        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>
    @if(session('status'))
        <div class="alert alert-warning position-absolute top-0 end-0" id="message">
            {{ session('status') }} <button type="button" class="btn-close" onclick="closeFunction()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    @endif
</body>
</form>

@endsection
