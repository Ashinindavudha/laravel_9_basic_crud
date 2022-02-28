@extends('student.layout')
@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
     <h1>laravel 9 crud <span><a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">Create</a></span>
     </h1>
    </div>
    <div class="card-body">
     <table class="table table-bordered">
      <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Address</th>
       <th>Mobile</th>
       <th>Action</th>
      </tr>
      @foreach($students as $key => $student)
      <tr>
       <td>{{ $student->id }}</td>
       <td>{{ $student->name }}</td>
       <td>{{ $student->address }}</td>
       <td>{{ $student->mobile }}</td>
       <td>
        <a href="{{ url('/student/' . $student->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i
           class="fa fa-eye" aria-hidden="true"></i> View</button></a>
        <a href="{{ url('/student/' . $student->id . '/edit') }}" title="Edit Student"><button
          class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
        <form method="POST" action="{{ url('/student' . '/' . $student->id) }}" accept-charset="UTF-8"
         style="display:inline">
         {{ method_field('DELETE') }}
         {{ csrf_field() }}
         <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
          onclick="return confirm('Are you sure want to delete this item')"><i class="fa fa-trash-o"
           aria-hidden="true"></i>
          Delete</button>
        </form>
       </td>
      </tr>
      @endforeach
     </table>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection