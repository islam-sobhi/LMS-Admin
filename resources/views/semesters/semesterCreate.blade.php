@extends('layouts.mynavbar')
 @section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create Class</div>

        <div class="card-body">

          @if(count($errors)>0) @foreach ($teacher->all() as $error)
          <p style="color:red;"> {{$error}} </p>

          @endforeach @endif


          <form method="post" action="{{route('semester.store')}}">
            {{csrf_field()}}

            <div class="form-group">
              <label for="exampleInputEmail1">Class Name </label>
              <input type="text" class="form-control" name="semester" aria-describedby="emailHelp" placeholder="Enter class Name">
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection