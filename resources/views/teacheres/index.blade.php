@extends('layouts.mynavbar') @section('content')
<div class="container">
  <div class="row">
    <div class="card mb-3" style="width: 100%;">
      <div class="card-header">
        <i class="fa fa-table"></i> welcome to teacheres </div>
      <div class="card-body">

        <div class="table-responsive">
          <table border="0" class="table table-striped table-bordered table-hover " id="example">
            <thead>
              <tr class="table-primary" style="text-align:center;color:white;margin-left:150px;">

                <th style="width: 30px;">No.</th>
                <th style="width: 30px;">Teacher Name</th>
                <th>Phone No.</th>
                <th>Class</th>
                <th>Address</th>
                <th>created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr class="text-center">
                <th>No.</th>
                <th>Teacher Name</th>
                <th>Phone No.</th>
                <th>Class</th>
                <th>Address</th>
                <th>created At</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>


              @if ($teacheres->count()>0 ) @foreach ($teacheres as $index=>$teach)
              <tr class="text-center">
                <td>{{$index +1}}</td>
                <td>
                  {{$teach->teach_name}}
                </td>
                <td>{{$teach->phone_number}}</td>

                <td>
                  @foreach($teach->semester as $ta)
                  <span class="badge badge-primary badge-pill">{{$ta->semester}}</span> @endforeach
                </td>
                <td>{{$teach->address}}</td>
                <td>{{$teach->created_at}}</td>

                <td>



                  <a class="btn btn-success rounded float-left" href="{{route('teacher.edit',['id'=>$teach->id])}}" data-method="delete" rel="nofollow"
                    data-confirm="Are you sure you want to edit this?">
                    <i class="fas fa-edit"></i> Edit </a>


                  <a class="btn btn-danger  rounded float-left" href="{{route('teacher.delete',['id'=>$teach->id])}}" data-method="delete"
                    rel="nofollow" data-confirm="Are you sure you want to delete this?">
                    <i class="fas fa-trash-alt"></i> Delete</a>

                </td>

              </tr>
              @endforeach @else @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">

      </div>
    </div>
  </div>

</div>

</div>


<
  
</script> @endsection