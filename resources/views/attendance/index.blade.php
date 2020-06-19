@extends('layouts.mynavbar')
 @section('content')
<div class="container">
  <div class="row">
    <div class="card mb-3" style="width: 100%;">
      <div class="card-header">
        <i class="fa fa-table"></i> Display Attendence </div>
      <div class="card-body">

         <form method="post" action="{{route('attendance.store')}}" enctype="multipart/form-data" role="form">
   {{csrf_field()}}
      <div class="table-responsive">
          <table border="0" class="table table-striped table-bordered table-hover " id="example">
            <thead>
            <tr class="text-center">
                <th>No.</th>
                <th>Teacher Name</th>
                <th>Teacher Phone</th>
                <th>Create At</th>
                <th>Absence</th>
            </tr>
            @if ($teacheres->count()>0 ) @foreach ($teacheres as $index=>$teach)
              <tr class="text-center">
                <td>{{$index +1}}</td>
                <td>
                  {{$teach->teach_name}}
                   <input type="hidden" name="name" class="" value="{{$teach->teach_name}}" />
                </td>
                <td> {{$teach->phone_number}}
                <input type="hidden" name="phone" class="" value="{{$teach->phone_number}}" />
                </td>
                <td>
                  {{$teach->created_at}}
                </td>
                <td>

 @foreach ($teach->attendances as $index=>$attend)
                @if($attend->created_at->format("d/m/y"))
                {{$attend->created_at->format("d/m/y")}}
                @else
                 @endif
                @endforeach
               


                </td>

             
              </tr>
              @endforeach @else @endif
        </thead>

    </table>

</form>

</div>

</div>
  </div>

</div>

</div>

@endsection