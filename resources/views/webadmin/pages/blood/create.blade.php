@extends('webadmin.template.index')

@section('head')

   <!-- Select2 -->
   <link rel="stylesheet" href="{{ aca_asset('plugins/select2/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{ aca_asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
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
      
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Blood donors from all over the Arab countries</h3>
            </div>
            <!-- /.card-header -->
            <form id="quickForm" novalidate="novalidate" action="{{ aca_url('/adminPanel/blood/create') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                  @error('name')
 
                   <small style="color: #dc3545">{{ $message }}</small>

                  @enderror
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Country</label>
                      <select name="country" class="form-control country" style="width: 100%;">
                        <option value="" selected="selected">--- country ---</option>
                        @foreach ($countrys as $country)
                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                         @endforeach
                      </select>
                      @error('country')
 
                      <small style="color: #dc3545">{{ $message }}</small>
   
                     @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>City</label>
                      <select name="city" class="form-control citey" style="width: 100%;">
                        <option value="" selected="selected">--- city ---</option>
                      </select>
                      @error('city')
 
                      <small style="color: #dc3545">{{ $message }}</small>
   
                     @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telephone number</label>
                  <input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror" placeholder="Telephone number">
                  @error('tel')
 
                  <small style="color: #dc3545">{{ $message }}</small>

                 @enderror
                </div>
                <div class="form-group">
                  <label>Blood type</label>
                  <select name="bloodType" class="form-control blood" style="width: 100%;">
                    <option value="" selected="selected">--- blood type ---</option>
                    <option value="+O">+O</option>
                    <option value="-O">-O</option>
                    <option value="+B">+B</option>
                    <option value="-B">-B</option>
                    <option value="+A">+A</option>
                    <option value="-A">-A</option>
                    <option value="+AB">+AB</option>
                    <option value="-AB">-AB</option>
                  </select>
                  @error('bloodType')
 
                  <small style="color: #dc3545">{{ $message }}</small>

                 @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
                  @error('email')
 
                  <small style="color: #dc3545">{{ $message }}</small>

                 @enderror
                </div>
                <div class="form-group">
                  <label>time to call</label>
                  <select name="callTime" class="form-control" style="width: 100%;">
                    <option value="24 ساعة" > 24 hours </option>
                    <option value="من 8 الى 3 عصراً"> from 8 to 3 in the afternoon </option>
                    <option value="من3 الى 11 مساءً"> from 3 to 11 pm </option>
                  </select>
                  @error('callTime')
 
                  <small style="color: #dc3545">{{ $message }}</small>

                 @enderror
                </div>
                <div class="form-group">
                  <label for="customRadio1" >Case</label>
                  <input type="checkbox" value="1" name="active" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
              </div>
                <div class="form-group">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio1" value="رسائل نصية" name="callType" checked>
                    <label for="customRadio1" class="custom-control-label">Text messages</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio2" value="اتصال" name="callType" >
                    <label for="customRadio2" class="custom-control-label">Contact</label>
                  </div>
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
<script>
  $(document).ready(function() {

    $('.country').change(function() {


       let countryID = $(this).val();

       $.ajax({


          url: '{{ aca_url("/adminPanel/city") }}',
          method: 'POST',
          dataType: 'JSON',
          data: {_token:'{{ csrf_token() }}', countryID:countryID },
          success: function(response){

            let countData = response.data;
            valhtml = '';
            for(let i = 0; i < countData.length; i++) {
              
              valhtml +=  '<option value="' + response.data[i].id + '">' + response.data[i].city + '</option>'

            }
            $('.citey').html(valhtml);

         

          }


       });


    });

  });
</script>

@endsection