@extends('student.layout')
@section('content')
<div class="card">
 <div class="card-header">Students Page</div>
 <div class="card-body">

  <div class="card-body">
   <h5 class="card-title">Name : {{ $student_show->name }}</h5>
   <p class="card-text">Address : {{ $student_show->address }}</p>
   <p class="card-text">Mobile : {{ $student_show->mobile }}</p>
  </div>

  </hr>

 </div>
</div>