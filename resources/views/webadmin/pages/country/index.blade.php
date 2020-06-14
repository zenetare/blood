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
          <h1>country & city</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">county & city</li>
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
              <a href="{{ aca_url('adminPanel/country/create')}}">
                <button style="width: 131px;" type="button" class="btn btn-block btn-outline-secondary"><i class="fas fa-plus"></i> Add new</button>
              </a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Donor countries and cities</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>country</th>
                  <th>Number of cities</th>
                  <th>cities</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                

                  @foreach ($countrys as $country)
                  
                  <tr>
                    <td>
                      @if ($country->active == 1)
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
                    <td>{{ $country->country }}</td>
                  <td>{{ aca_count($country->id) }}</td>
                    <td>
                      <a href="{{ aca_url('/adminPanel/' . $country->id .'/city')}}">
                        Go here
                      </a>
                    </td>
                    <td style="text-align: center;">
                      <div class="btn-group btn-group-sm">
                        <a href="{{ aca_url('/adminPanel/country/' . $country->id . '/edit') }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  
                  @endforeach
    
                
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>country</th>
                  <th>Number of cities</th>
                  <th>cities</th>
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