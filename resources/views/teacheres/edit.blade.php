@extends('layouts.mynavbar')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit Teacher : {{$teacheres->teach_name}}</div>

        <div class="card-body">

                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <p style="color:red;"> {{$error}} </p>

                       @endforeach

                @endif



                  <form method="post" action="{{route('teacher.update',['id'=>$teacheres->id])}}" enctype="multipart/form-data" role="form">
                    {{csrf_field()}}
                    
           <div class="form-group">
                        <label for="exampleInputEmail1">Techer Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$teacheres->teach_name}}">
                      </div>

                      <label for="exampleFormControlSelect1">Classes</label>
@foreach($semesters as $sem)
                  <div class="form-check">

                    <label class="form-check-label">
                      <input type="checkbox" name="sem[]" class="form-check-input" value="{{$sem->id}}"

@foreach($teacheres->semester as $ta)
    @if($sem->id==$ta->id))
                    checked
      @endif
                @endforeach
                > {{$sem->semester}}
              </label>

            </div>

@endforeach
                      
                       <div class="form-group">
                        <label for="exampleInputEmail1">Techer Degree</label>
                        <input type="text" class="form-control" name="degree" aria-describedby="text" value="{{$teacheres->degree}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Techer Email</label>
                        <input type="text" class="form-control" name="email" aria-describedby="text" value="{{$teacheres->teacher_email}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Techer Phone</label>
                        <input type="text" class="form-control" name="phone" aria-describedby="text" value="{{$teacheres->phone_number}}">
                      </div>

                          <div class="form-group">
                        <label for="exampleInputEmail1">Techer Address</label>
                        <input type="text" class="form-control" name="address" aria-describedby="text" value="{{$teacheres->address}}">
                      </div>


                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



