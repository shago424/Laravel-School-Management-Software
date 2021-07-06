@extends('backend.layouts.master')
@section('content')
 

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-6">
           {{--  <h1 class="m-0 text-dark">Manage Grade Point</h1> --}}
          </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Grade Point</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
    <!-- Main content -->
    <section class="content">
       <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
           
           <div class="card">
              <div class="card-header"style="background-color: #605ca8;color: white;padding: 5px">
                <h5 ><b>Grade Point List </b>
                  <a  href="{{route('marks.grade.add')}}" class="btn btn-warning  float-right"><i class="fa fa-plus-circle"> Add Grade Point</i></a>
                </h5>
              </div> 
            <div class="card-body">
                <table id="example1" class=" table-sm table table-bordered table-hover">
                  <thead>
                  <tr style="background-color: #001f3f;color: white">
                    <th>SL</th>
                    <th>Grade</th>
                    <th> Grade Point</th>
                    <th> Start Marks</th>
                    <th> End Marks</th>
                    <th> Point Range</th>
                    <th> Remarks</th>
                    <th> Action</th>

                  </tr>
                  </thead>
                  <tbody>
                    @foreach($alldata as $key => $value)
                    <tr class="{{$value->id}}">
                      <td style="text-align: center">{{$key+1}}</td>
                      <td style="text-align: center">{{$value->grade}}</td>
                      <td style="text-align: center">{{ number_format((float)$value->grade_point,2)}}</td>
                      <td style="text-align: center">{{$value->start_marks}}</td>
                      <td style="text-align: center">{{$value->end_marks}}</td>
                      <td style="text-align: center">{{ number_format((float)$value->start_point,2)}} - {{ number_format((float)$value->end_point,2)}}</td>
                      <td style="text-align: center">{{$value->remarks}}</td>
                      
                    <td>
                      
                    <a title="Edit" href="{{route('marks.grade.edit',$value->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                    <a title="Delete" id="delete" href="{{route('marks.grade.delete',$value->id)}}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                    
                      </td> 
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection