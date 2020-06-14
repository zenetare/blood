@extends('webadmin.template.index')

@section('head')

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
          <h1>Cities</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Country & Cities</a></li>
            <li class="breadcrumb-item active">Cities</li>
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
              <a href="{{ aca_url('/adminPanel/' . $country->id . '/city/create')}}">
                <button style="width: 131px;" type="button" class="btn btn-block btn-outline-secondary"><i class="fas fa-plus"></i> Add new</button>
              </a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                Cities of ({{ $country->country }})
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Cities</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                

                 @foreach ($citys as $city)
                  
                  <tr>
                    <td>
                      @if ($city->active == 1)
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
                    <td>{{ $city->city }}</td>
                 
                    <td style="text-align: center;">
                      <div class="btn-group btn-group-sm">
                      <a href="{{ aca_url('/adminPanel/' . $city->id . '/city/edit') }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  
                  @endforeach
    
                
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Cities</th>
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


@endsection