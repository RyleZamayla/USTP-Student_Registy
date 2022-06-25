@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-3 pl-3 pr-3">
            <img src="/resource_images/ustp_blue_logo.jpg" class="rounded-circle" style="width: 300px; height:auto; margin-top: 30px;">
        </div>
        <div class="col-9 pt-3 pl-3 pr-3">
            <div><h1>University of Science and Technology of Southern Philippines</h1></div>
            <div class="pt-5 d-flex"><h2>Register a Student</h2></div>       
            <form class="" method="post" action="{{url('home')}}">
                {!!csrf_field() !!}
                <div class="form-group p-2 col-5 d-flex">
                    <input type="text" name="studid" id="studid" class="form-control col-2" placeholder="Enter Student ID:">
                    <input type="text" name="firstname" id="firstname" class="form-control col-2" placeholder="Enter First Name:" style="margin-left:5%;">

                </div>
                <div class="form-group p-2 col-5 d-flex">
                    <input type="text" name="mi" id="mi" class="form-control col-2" placeholder="Enter Middle Initial:">
                    <input type="text" name="lastname" id="lastname" class="form-control col-2" placeholder="Enter Last Name:"  style="margin-left:5%;">

                </div>
                <div class="form-group p-2 col-5 d-flex">
                    <input type="text" name="yearlevel" id="yearlevel" class="form-control col-2" placeholder="Enter Year Level:">
                    <input type="text" name="course" id="course" class="form-control col-2" placeholder="Enter Course:" style="margin-left:5%;">
                </div>
                <div class="form-group p-2 col-8">
                    <input type="submit" value="Add this Student" class="btn btn-success btn-sm">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive" style="margin-top: 35px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>School ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Initial</th>
                        <th>Course</th>
                        <th>Year Level</th>
                        <th>User Level</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $item)
                    <tr>
                        <td>{{$item->studid}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->mi}}</td>
                        <td>{{$item->course}}</td>
                        <td>{{$item->yearlevel}}</td>
                        <td>{{$item->userlevel}}</td>
                        <td>{{$item->status}}</td>
    
                        <td>
                            <a href="{{route('home.edit',$item->id)}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"aria-hidden="true" style="margin-right:5px;"></i>Edit</button></a>
    
                            <form action="{{url('/home'.'/'.$item->id)}}" method="post" accept-charset="UTF-8" style="display:inline;">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="" title="Delete Student" onclick="return confirm('Confirm Delete?')"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"aria-hidden="true"  style="margin-right:5px;"></i>Delete</button></a>
                            </form>
                        </td>
    
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>    
</div>
@endsection
