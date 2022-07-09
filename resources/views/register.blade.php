{{View::make('title')}}

<div class="container">
<form action ="register" method="post">

@csrf
<body class="text-center">
    <main class="form-signin">
        <form>
            <img  src="/images/logo.svg" alt="" width="202" height="200">
            <h1 class="h3 mb-3 fw-normal">Register here</h1>
            <div class="form-floating mb-3">

                <input type="text" name="fullname" class="form-control" id="floatingInput" placeholder="Adam johnson ">

                <label for="floatingInput" class="form-label">Full Name</label>

            </div>

            <div class="form-floating  mb-3">

             
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"aria-describedy="emailHelp">

                <label for="floatingInput" >Email Address</label>

            
                 <div id="emailHelp" class="form-text">we'll never share your email with anyone else.</div> 

            </div>

            <div class="form-floating  mb-3">

                <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">

                <label for="floatingInput" class="form-label">Password</label>

               
            </div>


            <button type="submit" class="btn btn-primary  w-100 mb-2">Register</button>
            <button type="button" onclick="javascript:history.back()"
            class="btn btn-secondary  w-100 mb-2">Cancel</button>

            @if(session('status'))
                <div class="alert alert-success position-absolute top-0 end-0" id="message">
                {{ session('status') }} <button type="button" class="btn-close" onclick="closeFunction()" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            @endif
        </form>
    </main>    
</body>
</form>
</div>