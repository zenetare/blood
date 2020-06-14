@extends('webadmin.template.index')

@section('head')

  <style>
    .boold {

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
          <h1>Blood donors</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blood donors</li>
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
          <div class="card">
            <div class="card-body">
              <a href="{{ aca_url('adminPanel/blood/create')}}">
                <button style="width: 131px;" type="button" class="btn btn-block btn-outline-secondary"><i class="fas fa-plus"></i> Add new</button>
              </a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Blood donors from all over the Arab countries</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>name</th>
                  <th>country</th>
                  <th>blood type</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                  @foreach ($bloods as $blood)
                  
                  <tr>
                    <td>
                      @if ($blood->case == 1)
                      <span  style="
                      background: #12b510;
                      height: 20px;
                      width: 20px;
                      display: block;
                      border-radius: 50%;
                      "></span>
                      @else
                      <span  style="
                      background: #dc3545;
                      height: 20px;
                      width: 20px;
                      display: block;
                      border-radius: 50%;
                      "></span>
                      @endif
                     
                    </td>
                    <td>{{ $blood->name }}</td>
                    <td>{{ $blood->nameCountry }} - {{ $blood->nameCity }}</td>
                    <td>{{ $blood->bloodType }}</td>
                    <td style="text-align: center;">
                      <div class="btn-group btn-group-sm">
                      <a href="{{ aca_url('/adminPanel/blood/' . $blood->id . '/edit') }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a id="btn_delet" data-id="{{ $blood->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  
                  @endforeach
              

                
                </tbody>
                <tfoot>
                <tr>
                  <th>name</th>
                  <th>country</th>
                  <th>blood type</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
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
  <!-- /.content -->


@endsection
@section('footer')
<script src="{{ aca_asset('asset/js/sweetalert2.js')}}"></script>
<script>

  $(document).ready(function() {


    $('#btn_delet').click(function() {

      var iddelete = $(this).data('id');
      if (confirm("Are you sure to delete this volunteer!")) {
   
   
        window.location.href = '{{ aca_url("") }}' + '/adminPanel/blood/' + iddelete + '/destory'

      
      } 

    });


  });

</script>
@endsection