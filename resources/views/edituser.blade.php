{{View::make('title')}}

{{View:: make('menu')}}
<div class="container">
@if(!empty($users)) 
<form action ="useredit?rid={{ $users->id }}" method="post">

@csrf
    <div  class="mb-3 w-50">
        <label for="InputName" class="form-label" >Full Name</label>
        <input maxlength="100" value="{{ $users->name }}" type="text" name="fullname" id="InputName" class="form-control">
    </div>

    <div  class="mb-3 w-50">
        <label for="InputEmail" class="form-label" >Email Address</label>
        <input maxlength="100" value="{{ $users->email }}" type="email" name="email"  id="InputEmail" class="form-control">
    </div>

    <div  class="mb-3 w-50">
        <label for="InputPassword" class="form-label">Password</label>
        <input maxlength="50" value="{{ $users->password }}" type="text" name="password" id="InputPassword" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary" >Update</button>
    <button type="button" class="btn btn-secondary" onclick="javascript:history.back()">Cancel</button>
</form>
</div>
@else
no record found
@endif

{{View:: make('footer')}}