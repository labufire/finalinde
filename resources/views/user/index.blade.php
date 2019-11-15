@extends('user.master')
@section('title', 'Home')
@section('content')


    <div class="container">
        <div class="row"> 
            <div class="col-md-12"> <br />

                <h1 align="center">FITNESS-D MEMBERS INFORMATION</h1>
                <br />


               <div align="right"> <a href="{{route('user.create')}}" class="btn btn-success">ADD MEMBER</a>
            </div><br>

            @if(\Session::has('success')) 
                <div class="alert alert-success"> 
                <p>{{ \Session::get('success') }}</p> 
                </div> 
                @endif

            <table class="table table-bordered table-hover"> 
                    <tr> <thead>
                        <th>MEMBER ID</th>
                        <th>FIRST NAME</th> 
                        <th>LAST NAME</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </thead>
                    </tr> 
                    @foreach($users as $row) <tr>
                        <td>{{$row['id']}}</td> 
                        <td>{{$row['fname']}}</td>
                        <td>{{$row['lname']}}</td>
                        <td><a href="{{action('finalincontroller@edit', $row['id'])}}"  class="btn btn-warning">EDIT</a></td> 
                        <td>
                            <form method="post" class="delete_form" action="{{action('finalincontroller@destroy',$row['id'])}}">
                                {{csrf_field()}}
                            <input type="hidden"name="_method" value="DELETE"/>
                            <button type="submit" class="btn btn-danger">DELETE</button>

                            </form>
                        </td>
                    </tr> 
                    @endforeach 
                    </table>
                    

        </div>
        </div>
    </div>

    <script  type="text/javascript"> 
            $(document).ready(function(){ $('.delete_form').on('submit', function(){ 
                if(confirm("Do you want to delete?")) { 
                return true; 
                } 
                else { 
                    return false; 
                } 
                }); 
            }); 
            </script>
            
        
@endsection