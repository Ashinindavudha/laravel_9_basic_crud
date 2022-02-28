@extends('student.layout')
@section('content')
<div class="card">
 <div class="card-header">Contactus Page</div>
 <div class="card-body">

  <form action="{{ url('student/' .$student_edit->id) }}" method="post">
   {!! csrf_field() !!}
   @method("PATCH")
   <input type="hidden" name="id" id="id" value="{{$student_edit->id}}" id="id" />
   <label>Name</label></br>
   <input type="text" name="name" id="name" value="{{$student_edit->name}}" class="form-control"></br>
   <label>Address</label></br>
   <input type="text" name="address" id="address" value="{{$student_edit->address}}" class="form-control"></br>
   <label>Mobile</label></br>
   <input type="text" name="mobile" id="mobile" value="{{$student_edit->mobile}}" class="form-control"></br>
   <input type="submit" value="Update" class="btn btn-success"></br>
  </form>

 </div>
</div>
@stop