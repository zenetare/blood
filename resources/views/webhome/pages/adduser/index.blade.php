@extends('webhome.template.index')

@section('content')
    

<table id="Table_01" width="960" height="604" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td  width="960"   valign="top" align="center">

                        <table id="Table_01" width="960" height="352" border="0" cellpadding="0" cellspacing="0" dir="ltr">
                                <tr>
                                        <td>
                                        <img src="{{ aca_asset('templets/new/top_01.gif')}}" width="165" height="14" alt=""></td>
                                        <td>
                                        <img src="{{ aca_asset('templets/new/top_02.gif')}}" width="628" height="14" alt=""></td>
                                        <td>
                                        <img src="{{ aca_asset('templets/new/top_03.gif')}}" width="167" height="14" alt=""></td>
                                </tr>
                                <tr>
                                <td>
                                        <img src="{{ aca_asset('templets/new/top_04.gif')}}" width="165" height="42" alt="">
                                </td> 
                                <td background="{{ aca_asset('templets/new/top_05.gif')}}" width="628" height="42" align="center" >
                                        <div style="margin:2px" dir="rtl">
                                                <font class="font2"><font color="#FF0000"> اعلان : </font>
                                        </font>
                                        <a href="page-2.html"><font class="font3">تنبيه : ارجو عدم التسجيل بالاسم الحقيقى للحفاظ على الخصوصيه وعدم الازعاج و بالأخص النساء</font> 
                                        </a>
                                        </div>
                                </td>
                                <td>
                                <img src="{{ aca_asset('templets/new/top_06.gif')}}" width="167" height="42" alt=""></td>
                                </tr>
                                <tr>
                                <td>
                                <img src="{{ aca_asset('templets/new/top_07.gif')}}" width="165" height="302" alt=""></td>
                                <td><a href="{{ aca_url('/') }}">
                                <img src="{{ aca_asset('templets/new/top_08.gif')}}" width="628" height="302" border="0"></a></td>
                                <td>
                                <img src="{{ aca_asset('templets/new/top_09.gif')}}" width="167" height="302" alt=""></td>
                                </tr>
                        </table>

                </td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF" align="center">



		<div class="body_case">
 
                <input type="hidden" value="add" name="do">
                                <table width="639" border="0" class="table" dir="rtl" cellpadding="0" cellspacing="0">
                                        <tr class="font2" align="right" >
                                                <td colspan="2" align="center" background="templets/new/td.jpg" height="27">سجل بياناتك لدينا</td>
                                        </tr>
                                <tr > 
                                        <td align="center" valign="top">
                
                                        <table width="100%" border="0"   dir="rtl" cellpadding="4">
                                        <tr class="td1" align="right">	
                                                <td width="35%"> <font color="#FF0000">*</font> <font class="font3"><b>اسم المتبرع :</b></font></td>
                                                <td width="65%"><input type="text" name="name" class="input"  size="30" id="name" title="ادخل اسم المتبرع"></td>
                                        </tr>
                                        <tr  class="td1" align="right">	
                                                <td><font color="#FF0000">*</font> <font  class="font3"><b> الدولة :</b></font></td>
                                                <td>
                                                        <select name="country" id="country" dir="rtl"   title="اختر الدولة"  style="color:#1E9EC2">
                                                                <option value="0">اختـــر الدولـــة</option>
                                                                @foreach ($countrys as $country)
                                                                    <option value="{{ $country->id }}" >{{ $country->country }}</option> 
                                                                @endforeach
                                                        
                                                        </select>
                                                
                                                </td>
                                        </tr>
                                        <tr  class="td1" id="all_city" style="display:none" align="right"></tr>
                                        <tr class="td1" align="right">	
                                                <td width="35%"> <font color="#FF0000">*</font> <font  class="font3"><b> رقم الهاتف - الجوال :</b></font></td>
                                                <td width="65%"><input type="text" name="tele" id="tele" class="input"  size="30"  title="ادخل رقم الهاتف -  الجوال" dir="ltr"></td>
                                        </tr>
                                        <tr class="td1" align="right">	
                                                <td><font color="#FF0000">*</font> <font class="font3"><b>فصيلة الدم :</b></font></td>
                                                <td>
                                                <select name="blood_type" id="blood_type"   title="اختر فصيلة الدم" style="color:#1E9EC2">
                                                                <option value="0">  اختــر فصيلة الدم </option>
                                                                <option value="+O">+O</option>
                                                                <option value="-O">-O</option>
                                                                <option value="+B">+B</option>
                                                                <option value="-B">-B</option>
                                                                <option value="+A">+A</option>
                                                                <option value="-A">-A</option>
                                                                <option value="+AB">+AB</option>
                                                                <option value="-AB">-AB</option>
                                                </select>
                                                </td>
                                        </tr>
                                        <tr class="td1" align="right">	
                                                <td><font  class="font3"><b>خيـــارات لطريقة التواصل </b></font></td>
                                                <td>
                                        
                                                        <table width="100%" cellspacing="2">
                                                                <tr class="td1" align="right">	
                                                                        <td width="22%"><font class="font3">البريد الالكتروني</font></td>
                                                                        <td width="78%"> <input type="text" name="email" id="email" class="input" dir="ltr"   size="30"  >
                                                                                        
                                                                </td>
                                                                </tr>
                                                                <tr align="right">
                                                                        <td><font class="font3">نوع الإتصال :</font></td>
                                                                        <td>
                                                                                <font class="font3"> رسائل نصية :</font> <input type="checkbox" name="callType" value="رسائل نصية">&nbsp;&nbsp;&nbsp;&nbsp; 
                                                                                <font class="font3"> اتصال :</font> <input id="callType" type="checkbox" name="callType" value="0" checked>
                                                                        </td>
                                                                </tr>
                                                                <tr align="right">
                                                                        <td><font class="font3">وقت الإتصال :</font></td>
                                                                        <td>
                                                                                <select name="calling_time" id="calling_time" style="color:#1E9EC2">
                                                                                        <option value="24 ساعة">24 ساعة</option>
                                                                                        <option value="من 8 الى 3 عصراً">من 8 الى 3 عصراً</option>
                                                                                        <option value="من3 الى 11 مساءً">من3 الى 11 مساءً</option>
                                                                                </select>	
                                                                        </td>
                                                                </tr>
                                                        </table>
                                                
                                                
                                                
                                                </td>
                                        </tr>
                                        <tr class="txt td3">
                                                <td id="beforS" colspan="2" align="center"><input class="submiadd" type="submit" value="اضف بياناتك"  style="background:url(templets/new/td.jpg); height:27px; border:1px solid #999999" ></td>
                                        </tr>
                                </table>
                        </div>
                                </td>
                                </tr>
                                </table>
                
	
	
	
     
	
			</td>
	</tr>
        <tr>
                <td align="center">            <br />
        
                <a href="#"><img alt="Get it on Google Play" src="https://developer.android.com/images/brand/ar_generic_rgb_wo_60.png" /></a>
        
        
        
                </td>
                </tr>
                <tr>
                <td>	<img src="{{ aca_asset('templets/new/layout_04.gif')}}" width="960" height="9" alt=""></td>
                </tr>
                <tr>
                <td width="960" height="56"  bgcolor="#FFFFFF" align="center" valign="top">
                <table width="560" border="0">
                <tr>
                        <td><a href="{{ aca_url('/') }}"><font class="font4">الرئيسية |</font></a> </td>
                        <td><a href="{{ aca_url('/') }}"><font class="font4">فوائد التبرع العلمية  |</font></a></td>
                        <td><a href="{{ aca_url('/') }}"><font class="font4">ثواب التبرع |</font></a> </td>
                        <td><a href="{{ aca_url('/') }}"><font class="font4">من نحن |</font></a></td>
                        <td><a href="{{ aca_url('/') }}"><font class="font4">ادعمنا |</font></a></td>
                        <td><a href="{{ aca_url('/') }}"><font class="font4">راسلنا |</font></a></td>
                        <td><a href="{{ aca_url('/') }}"><font class="font4">الخصوصية</font></a></td>
                <td>	&nbsp; 
                <a href="#" target="blank"><img src="{{ aca_asset('templets/new/digg.png')}}" border="0" /></a>
        
                <a href="#" target="blank"> <img src="{{ aca_asset('templets/new/twitter.png')}}" border="0" /></a>
        
                <a href="#" target="blank"><img src="{{ aca_asset('templets/new/facebook.png')}}" border="0" /></a>
                </td>
        
                </tr>
                </table>
        
                </td>
                </tr>
        </table>
        
        <div class="error_blood"></div>
        
         

@endsection
@section('footer')
    <script>

        $(document).ready(function() {


                $('#country').change(function(){

                        var countryID = $(this).val();
                        console.log(countryID);
                        $.ajax({

                               
                                url: '{{ aca_url("adminPanel/city/home") }}',
                                dataType: 'json',
                                method: 'get',
                                data: {_token:'{{ csrf_token() }}', countryID:countryID },
                                beforeSend: function() {
                                       
                                    $("#all_city").css("display", "");

                                  $('#all_city').html(
                                                '<td></td>'   +
                                                '<td width="65%"><img src="{{ aca_asset("images/befor.gif") }}"/></td>'
                                                ); 

                                },
                                success: function(response) {

                                        let countData = response.data;
                                        valhtml = '';
                                        for(let i = 0; i < countData.length; i++) {

                                                valhtml +=  '<option value="' + response.data[i].id + '">' + response.data[i].city + '</option>'

                                        }
                                        $('#all_city').html(
                                                
                                                '<td><font color="#FF0000">*</font> <font class="font3"><b> المدينة </b></font></td><td width="65%">' +
                                        
                                                        '<select name="town" id="town" dir="rtl" style="color:#1E9EC2">' +
			                                        '<option value="0">اختـــر المدينـــة</option>' + 

                                                                valhtml +
						
			                                '</select>' + 
                                        
                                                '</td>'
                                        
                                        );
  

                                }


                        });

                });
                $('.submiadd').click(function() {
                var name = $('#name').val();
                var country = $('#country').val();
                var city = $('#town').val();
                var tel = $('#tele').val();
                var bloodType = $('#blood_type').val();
                var email = $('#email').val();
                var callType = $('#callType').val();
                var callTime = $('#calling_time').val();
         
         
                        if($.trim($('#name').val()) == '') {
                                $('.error_blood').html('<div class="tooltip" style="display: block; position: absolute; top: 381.5px; left: 378px; opacity: 0.7;">ادخل اسم المتبرع</div>');
                        } else if(country == 0) {
                                $('.error_blood').html('<div class="tooltip" style="display: block; position: absolute; top: 410.5px; left: 535px; opacity: 0.7;">اختر الدولة</div>');
                        } else if(city == 0) {
                                $('.error_blood').html('<div class="tooltip" style="display: block; position: absolute; top: 439.5px; left: 532px; opacity: 0.7;">اختــر المدينـــة</div>');
                        } else if($.trim($('#tele').val()) == '') {
                                $('.error_blood').html('<div class="tooltip" style="display: block; position: absolute; top: 439.5px; left: 378px; opacity: 0.7;">ادخل رقم الهاتف -  الجوال</div>');
                        } else if(bloodType == 0) {
                                $('.error_blood').html('<div class="tooltip" style="display: none; position: absolute; top: 497.5px; left: 526px; opacity: 0.7;">اختر فصيلة الدم</div>');
                        } else {

                                $('.error_blood').html('');
                                $.ajax({

                                        url: '{{ aca_url("/adduser/add")}}',
                                        method: 'get',
                                        dataType: 'json',
                                        data: {_token:'{{ csrf_token() }}', name:name, country:country, city:city, tel:tel, bloodType:bloodType, email:email, callType:callType, callTime:callTime},
                                        beforeSend: function() {
                                                $('#beforS').html('<div align="center"><img src="{{ aca_asset("images/befor.gif") }}"/></div>');
                                        },
                                        success: function(response) {
                                                if(response.data == true) {

                                                        $('.body_case').html('<fieldset dir="rtl" style="width:60%; border:green 1px solid"><legend class="font2" style="color:green">رسالة ادارية</legend>	<div align="center"><font class="font2" style="color:green"><br>شكراً لك تم تسجيلك بنجاح وسوف تقوم الإداره بتفعيل اشتراكك</font></div><br></fieldset>');

                                                }
                                        }

                                });

                        }

                });

             
        });

    </script>
@endsection