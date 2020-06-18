@extends('layouts.app')

@section('content')

 <div class="container">
 
 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Techer name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    @if ($teacheres->count()>0 )
               @foreach ($teacheres as $index=>$teach)
               <form  method="post" action="{{route('attendance.update',['id'=>$teach->id])}}"enctype="multipart/form-data" role="form">
                    {{csrf_field()}}
    <tr>
      <th scope="row"></th>
      <td>
      <div class="form-group">
           
              <input type="hidden" class="form-control"  name="id_teacher" value="{{$teach->id}}"/>{{$teach->teach_name}}
        </div>
            
            </td>
      <td>
          
          <div class="form-group">
             {{$teach->phone_number}}
               <input type="hidden" class="form-control" id="phone" name="phone" value="{{$teach->phone_number}}">
             </div>
      </td>
      <td>
      <div class="form-group">
              {{$date=date("y/m/d")}}
              <input type="hidden" class="form-control" name="date" id="date" value="{{$date}}">
            </div>
      </td>
      <td>
        <button type="submit" class="btn btn-primary">Appsend</button>
      </td>
    
    </tr>
   
     @endforeach @else @endif
    
          
  </tbody>
</table>
         
     </form>       
            
            
          
      </div>


@endsection