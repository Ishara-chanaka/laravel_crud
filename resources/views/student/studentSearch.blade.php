@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Search Students</h1>
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

  <section class="content">
    <div class="container-fluid">
        <form action="{{ route('advance_search') }}" method="GET">
            @csrf
      <div class="row">
        <div class="col-md-3">
            <strong>Student Number</strong>
            <input type="text" name="searchstnumber" class="form-control" >
        </div>
        <div class="col-md-3">
            <strong>Gender</strong>
            <div class="select2-purple">
                <select class="form-control select2bs4" name="searchgender" style="width: 100%;">
                    <option value=""></option>
                    <option value=""></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>

                </select>
              </div>
        </div>

        <div class="col-md-3">
            <strong>Registered Date</strong>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                  </span>
                </div>
                <input type="text" class="form-control float-right" id="reservation" name="searchdate" value="">
              </div>
        </div>

        <div class="col-md-3">
            <br/>
            <button type="submit" class="btn btn-success col start">
                   
                <span>Search</span>
              </button>
        </div>
      </div>
        </form>
    </div>
  </section>
  <br/>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
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
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
             @foreach ($data as $item)
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