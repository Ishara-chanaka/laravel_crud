@extends('layouts.app')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update Student</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Student</a></li>
          <li class="breadcrumb-item active">Update Student </li>
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
    <!-- SELECT2 EXAMPLE -->
    
   
    <form action="{{ url('update-student/'.$studentDetails->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Student Details</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
       
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="fullname" class="form-control" value="{{$studentDetails->fullname}}">
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Name with Initial</label>
              <input type="text" name="namewithinitial" class="form-control" value="{{$studentDetails->namewithinitial}}">
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
              <label>Permanent Address</label>
              <textarea class="form-control" name="address" rows="2" >{{$studentDetails->address}}</textarea>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label>Student Number</label>
                <input type="text" name="studentnumber" class="form-control" value="{{$studentDetails->student_id}}">
              </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Date of Birth</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" name="dob" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{date('m/d/Y', strtotime($studentDetails->dob))}}"/>
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Gender</label>
              <div class="select2-purple">
                <select class="form-control select2bs4" name="gender" style="width: 100%;">
                  <option value="Male" @if ($studentDetails->gender == 'Male') selected="selected"  @endif>Male</option>
                  <option value="Female" @if ($studentDetails->gender == 'Female') selected="selected"  @endif>Female</option>
                  <option value="Other" @if ($studentDetails->gender == 'Other') selected="selected"  @endif>Other</option>

                </select>
              </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Registered Date</label>
              <div class="input-group date" id="registereddate" data-target-input="nearest">
                <input type="text" name="registereddate" class="form-control datetimepicker-input" data-target="#registereddate" value="{{ date('m/d/Y', strtotime($studentDetails->registereddate))}}"/>
                <div class="input-group-append" data-target="#registereddate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Photo</label>
              
              <div class="row">
                <div class="col-12 col-sm-3 justify-content-center align-items-center">
                    <img class="animation__shake" src="{{ asset('uploads/students/'.$studentDetails->photo) }}" height="60" width="60">
                  </div>
                  <div class="col-12 col-sm-6">
                <input type="file" name="image"  class="course form-control">
                  </div>
              </div>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Student Guardian Details</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Name of guardian</label>
              <input type="text" name="guarname" class="form-control" value="{{$studentDetails->guardians->guarname}}">
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Contact No</label>
              <input type="text" name="guarcontact" class="form-control" value="{{$studentDetails->guardians->contactno}}">
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" name="guaraddress" rows="2" >{{$studentDetails->guardians->address}}</textarea>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Relation</label>
              <select class="form-control select2bs4" name="relation" style="width: 100%;">
                @foreach ($relationships as $getrelationship)
                <option value="{{ $getrelationship->id }}" @if ($studentDetails->guardians->relationship_id == $getrelationship->id )  selected="selected"  @endif> {{ $getrelationship->name }} </option>
                @endforeach
              </select>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->
    
   

    
   
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-default">
        
          <div class="card-body">
            <div id="actions" class="row">
              <div class="col-lg-2" >
                <div class="btn-group w-100">
                  
                  <button type="submit" class="btn btn-primary col start">
                   
                    <span>Update Student</span>
                  </button>
                  
                </div>
              </div>
             
            </div>




            
          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </form>
  </div>
  <!-- /.container-fluid -->
</section>
@endsection