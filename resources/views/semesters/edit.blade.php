@extends('layouts.mynavbar')
 @section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit Class NAme : {{$sem->semester}}</div>

        <div class="card-body">
          @if(count($errors)>0) @foreach ($errors->all() as $error)
          <p style="color:red;"> {{$error}} </p>

          @endforeach @endif


          <form method="post" action="{{route('semester.update',['id'=>$sem->id])}}">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Name Class</label>
              <input type="text" class="form-control" name="semester" aria-describedby="emailHelp" value="{{$sem->semester}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection