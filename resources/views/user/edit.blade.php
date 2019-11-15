@extends('user.master')
@section('title', 'Member')
@section('content')

    <div class="container">
        <div class="row"> 
            <div class="col-md-12"> <br /> 
                <h1 align="center">EDIT MEMBER INFORMATION</h1> <br /> 

                @if(count($errors) > 0) 
                <div class="alert alert-danger"> 
                <ul> @foreach($errors->all() as $error) 
                <li>{{$error}}</li> 
                @endforeach 
                </ul> 
                </div> 
                @endif 

                @if(\Session::has('success')) 
                <div class="alert alert-success"> 
                <p>{{ \Session::get('success') }}</p> 
                </div> 
                @endif 

        <form method="post" action="{{action('finalincontroller@update', $id)}}"> 
            {{csrf_field()}}
        <div class="form-group"> 
        <input type="text" name="fname" class="form-control" placeholder="FIRST NAME" value="{{$user->fname}}"/> 
        </div> 

        <div class="form-group"> 
            <input type="text" name="lname" class="form-control" placeholder="LAST NAME" value="{{$user->lname}}"/> 
        </div> 

        <div class="form-group"> 
            <input type="submit" class="btn btn-warning" value="EDIT" /> 
        </div>
        <input type="hidden"name="_method" value="PATCH"/> 
        </form> 
            </div> 
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br>
        
@endsection