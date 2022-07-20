
@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Student Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Student Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                @if ($studentDetails->photo != '')
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{ asset('uploads/students/'.$studentDetails->photo) }}"
                  alt="{{$studentDetails->namewithinitial}}">
                  @else
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{ asset('/dist/img/avatar.png') }}"
                  alt="User profile picture">
                @endif
               
              </div>

              <h3 class="profile-username text-center">{{ $studentDetails->namewithinitial }}</h3>

              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
        
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-5">
          <div class="card">
            <div class="card-header p-2">
              Student Details
            </div><!-- /.card-header -->
            <div class="card-body">
                <strong>Full Name</strong>

                <p class="text-muted">
                  {{$studentDetails->fullname}}
                </p>

                <hr>

                <strong> Name with Initial</strong>

                <p class="text-muted">
                  {{$studentDetails->namewithinitial}}
                </p>

                <hr>

                <strong> Student Number</strong>

                <p class="text-muted">
                  {{$studentDetails->student_id}}
                </p>

                <hr>

                <strong> Permanent Address</strong>

                <p class="text-muted">
                  {{$studentDetails->address}}
                </p>

                <hr>

                <strong> Date of Birth</strong>

                <p class="text-muted">
                  {{date('m/d/Y', strtotime($studentDetails->dob))}}
                </p>

                <hr>

                <strong> Gender</strong>

                <p class="text-muted">
                  {{$studentDetails->gender}}
                </p>

                <hr>

                <strong> Registered Date</strong>

                <p class="text-muted">
                  {{ date('m/d/Y', strtotime($studentDetails->registereddate))}}
                </p>

                <hr>
                 
                  
               
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->


        <div class="col-md-4">
          <div class="card">
            <div class="card-header p-2">
              Guardian Details
            </div><!-- /.card-header -->
            <div class="card-body">
                <strong> Name</strong>

                <p class="text-muted">
                  {{$studentDetails->guardians->guarname}}
                </p>

                <hr>

                <strong> Address</strong>

                <p class="text-muted">
                  {{$studentDetails->guardians->address}}
                </p>

                <hr>

                <strong> Contact number</strong>

                <p class="text-muted">
                  {{$studentDetails->guardians->contactno}}
                </p>

                <hr>

                <strong> Relationship</strong>

                <p class="text-muted">
                  {{$relationships->name}}
                </p>

                <hr>

                
                 
                  
               
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection