@extends('layouts.mynavbar')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Classes</div>

        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>

            @foreach ($semesters as $sem)
            <tbody>
              <tr>
                <th scope="row">{{$x++}}</th>
                <td>{{$sem->semester}}</td>
                <td>{{$sem->created_at}}</td>
                <td>{{$sem->updated_at}}</td>
                <td>
                  <a class="btn btn-success rounded float-left" style="width:100%;" href="{{route('semester.edit',['id'=>$sem->id])}}">
Edit                           </a>
                </td>
                <td>
                  <a class="btn btn-danger rounded float-left" style="width:100%;" href="{{route('semester.delete',['id'=>$sem->id])}}">
Delete                         </a>
                </td>
              </tr>
            </tbody>

            @endforeach
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection