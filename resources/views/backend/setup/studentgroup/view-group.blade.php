@extends('backend.layouts.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Manage Student Group</h1> --}}
          </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Student Group</li>
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
              <div class="card-header" style="background-color: #605ca8;color: white;padding: 5px">
                <h5 ><b>Student Group List
                  <a  href="{{route('groups.student.group.add')}}" class="btn btn-warning  float-right"><i class="fa fa-plus-circle"> Add Student Group</i></a></b>
                </h5>
              </div> 
            <div class="card-body">
                <table id="example1" class="table table-sm table-hover">
                  <thead>
                   <tr style="background-color: #001f3f;color: white">
                    <th>SL</th>
                    <th>Gruop ID</th>
                    <th>Student Group</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($alldata as $key => $group)
                    <tr class="{{$group->id}}">
                      <td>{{$key+1}}</td>
                      <td>{{$group->id}}</td>
                     
                      <td>{{$group->name}}</td>
                     
                  
                      <td>
                    <a title="Edit" href="{{route('groups.student.group.edit',$group->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                    <a title="Delete" id="delete" href="{{route('groups.student.group.delete',$group->id)}}" data-token="{{csrf_token()}}" data-id="{{$group->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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