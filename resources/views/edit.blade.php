@extends('layouts.app')
@section('content')
<div class="card col-5" style="margin: auto;">
  <div class="card-header"  style="background:#2d3748; color:white;">
    Edit Student
  </div>
  <div class="card-body">
    <form class="" method="post" action="{{url('home/'.$students->id)}}">
      {!!csrf_field() !!}
      @method("PATCH")
          <label for="">Student ID:</label><br>
          <input type="text" name="studid" id="studid" class="form-control col-2" value="{{$students->studid}}" style="margin-bottom: 10px">

          <label for="">First Name:</label><br>
          <input type="text" name="firstname" id="firstname" class="form-control col-2" value="{{$students->firstname}}" style="margin-bottom: 10px">

          <label for="">Middle Initial:</label><br>
          <input type="text" name="mi" id="mi" class="form-control col-2" value="{{$students->mi}}" style="margin-bottom: 10px">

          <label for="">Last Name:</label>
          <input type="text" name="lastname" id="lastname" class="form-control col-2" value="{{$students->lastname}}" style="margin-bottom: 10px">

          <label for="">Year Level:</label><br>
          <input type="text" name="yearlevel" id="yearlevel" class="form-control col-2" value="{{$students->yearlevel}}" style="margin-bottom: 10px">

          <label for="">Course:</label><br>
          <input type="text" name="course" id="course" class="form-control col-2" value="{{$students->course}}" style="margin-bottom: 10px">

      <div class="form-group p-2 col-6">
          <input type="submit" value="Update" class="btn btn-success btn-sm">
      </div>
  </form>
  </div>
</div>
@stop