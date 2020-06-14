@extends('webadmin.template.index')

@section('head')

   <!-- Select2 -->
   <link rel="stylesheet" href="{{ aca_asset('plugins/select2/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{ aca_asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
   
  <style>
    .profil {

      background-color: #007bff;
      color: #fff !important;

    }
  </style>
  
    
@endsection

@section('content')


  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          @if (session('success'))


          <div class="callout callout-success">
            <h5>Alert !</h5>

            <p>{{ session('success') }}.</p>
          </div>

              
          @endif
          @if (session('error'))
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            {{ session('error') }}
          </div>
          @endif
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form profil</h3>
            </div>
            <!-- /.card-header -->
            <form id="quickForm" novalidate="novalidate" action="{{ aca_url('adminPanel/profil') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ auth()->guard('admin')->user()->name }}">
                  @error('name')
 
                   <small style="color: #dc3545">{{ $message }}</small>

                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ auth()->guard('admin')->user()->email }}">
                  @error('email')
 
                   <small style="color: #dc3545">{{ $message }}</small>

                  @enderror
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Horizontal Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          <form class="form-horizontal" action="{{ aca_url('adminPanel/profil/pass') }}" method="POST">
            @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Current Password</label>
                    <input type="password" class="form-control @error('oldPass') is-invalid @enderror" name="oldPass" placeholder="Current Password">
                    @error('oldPass')
 
                   <small style="color: #dc3545">{{ $message }}</small>

                   @enderror
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">The password is new</label>
                  <input type="password" class="form-control @error('newPass') is-invalid @enderror" name="newPass" placeholder="New password">
                  @error('newPass')
 
                  <small style="color: #dc3545">{{ $message }}</small>

                 @enderror
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Retype the new password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Retype the new password">
                @error('password')
 
                <small style="color: #dc3545">{{ $message }}</small>

               @enderror
            </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-danger">change password</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->


@endsection
@section('footer')
<script src="{{ aca_asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{ aca_asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script>

  $(document).ready(function() {

    $('.country').select2();
    $('.citey').select2();
    $('.blood').select2();

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });


  });

</script>

@endsection