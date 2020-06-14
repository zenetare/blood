@extends('webadmin.template.index')

@section('head')

   <!-- Select2 -->
   <link rel="stylesheet" href="{{ aca_asset('plugins/select2/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{ aca_asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
   
  <style>
    .country-btn {

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
          <h1>Edit country</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit country</li>
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
      
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form edit country</h3>
            </div>
            <!-- /.card-header -->
            <form id="quickForm" novalidate="novalidate" action="{{ aca_url('/adminPanel/country/' . $country->id . '/edit') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Country</label>
                <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $country->country }}">
                  @error('country')
 
                   <small style="color: #dc3545">{{ $message }}</small>

                  @enderror
                </div>
                <div class="form-group">
                    <label for="customRadio1" >Case</label>
                    <input type="checkbox" value="1" name="active" @if ($country->active == 1 ) checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="success">
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