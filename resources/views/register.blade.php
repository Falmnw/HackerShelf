@extends('layout.master')
@section('title', 'register account')

@section('content')

   <div class="col-md-6 offset-md-3 mt-5">
        <h1>Register</h1>
        <form action="{{route('register')}}" accept-charset="UTF-8" action="https://getform.io/f/{your-form-endpoint-goes-here}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="InputName">Name</label>
                <input type="text" name="name" class="form-control" id="InputName" placeholder="Enter your name" required="required">
            </div>

            <div class="form-group mb-3">
                <label for="InputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Enter your email" required="required">
            </div>

             <div class="form-group mb-3">
                <label for="InputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Enter your passsword" required="required">
            </div>  
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection




