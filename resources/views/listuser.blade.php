{{View:: make('title')}} 

{{View:: make('menu')}}


<div class="container">
    <div class="table-responsive">
        @if(count($listofuser))
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" width=40>#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col"width=150>Create Date</th>
                    <th scope="col"width=150>Updated Date</th>
                    <th scope="col" width=70></th>  
                </tr>
            </thead>


            <tbody>
                @foreach($listofuser as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>@if($user->created_at) {{date('D, d F Y',strtotime($user->created_at))}} @else N/A @endif</td>
                    <td>@if($user->updated_at) {{date('D, d F Y',strtotime($user->created_at))}} @else N/A @endif</td>
                    <td><a href = "/editmyuser?rid={{$user->id}}"><span class="material-symbols-outlined">edit</span></a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modaldelete" ><span class="material-symbols-outlined" style="color:red">delete</span></a>
                    </td>
                </tr>@endforeach
            </tbody>
        </table>
        @include('modal.delete')
    </div>

    <div class="pagination"> 
        <style>
        .h-5 {
            height: 1em;
        }

        .flex{
            text-align: center;
            width: 100%;
        }

        .leading-5{
            padding: 0.7em;
        }
        </style>

        <!-- {{ $listofuser->links()}} -->
        {{ $listofuser->appends(['search' => Request::get('search')])->links() }}
        @else
        no record found
        @endif

        
    </div>
    @if(session('status'))
        <div class="alert alert-success position-absolute top-0 end-0" id="message">
            {{ session('status') }} <button type="button" class="btn-close" onclick="closeFunction()" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    @endif
</div>    
{{View:: make('footer')}}  