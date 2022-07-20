@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Regitered Students</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Students</a></li>
            <li class="breadcrumb-item active">Regitered Students</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @if (Session::has('success'))
      <div class="alert alert-success">
       {{ Session::get('success') }}
     </div>        
 @endif
 
 <!-- validation -->
 @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif 
 
      <div class="row">
        <div class="col-12">
          
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Student Id</th>
                  <th>Student Name</th>
                  <th>Address</th>
                  <th>Gender</th>
                  <th>Registered Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
             @foreach ($studentDetail as $item)
                <tr>
                  <td>{{ $item->student_id }}</td>
                  <td>{{ $item->namewithinitial }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->gender }}</td>
                  <td>{{ $item->registereddate }}</td>
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="{{ url('student-profile/'.$item->id) }}">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{ url('edit-student/'.$item->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    
                    <a class="btn btn-danger btn-sm" href="{{ url('delete-student/'.$item->id) }}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                   
                </td>
                </tr>
                @endforeach
               
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- DataTables  & Plugins -->

  @endsection