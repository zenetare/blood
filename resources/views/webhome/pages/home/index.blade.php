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

                <form action="?" method="post" id="search_form" name="search_form">
                <input type="hidden" name="do" value="search" />
                <table id="Table_01" width="639" height="78" border="0" cellpadding="0" cellspacing="0" dir="ltr">
                <tr>
                <td><img class="submitBlood" src="{{ aca_asset('templets/new/center_01.gif')}}" width="125" height="49" id="go"></td>
                <td><img src="{{ aca_asset('templets/new/center_02.gif')}}" width="10" height="49"></td>
                <td width="165" height="49" background="{{ aca_asset('templets/new/center_03.gif')}}" align="right" dir="rtl"> 
                <label class="label">
                <select name="blood_type"  id="blood_type" class="selects" >
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
                </label>	 
                </td>
                <td width="164" height="49" background="{{ aca_asset('templets/new/center_03.gif')}}" align="right" dir="rtl">
                <label class="label" id="towns">
                <select name="town"  id="town" class="selects">
                <option value="0">اختـــر المدينـــة</option>
                </select>
                </label>
                </td>
                <td width="163" height="49" background="{{ aca_asset('templets/new/center_03.gif')}}" align="right" dir="rtl">
                <label class="label">
                <select id="country" class="selects">
                <option value="0">اختر الدولة</option>
                @foreach ($countrys as $country)
                <option value="{{ $country->id }}" >{{ $country->country }}</option>
                @endforeach
        
                </select>
                </label>		
                </td>
                <td>	<img src="{{ aca_asset('templets/new/center_06.gif')}}" width="12" height="49" ></td>
                </tr>
                <tr>
                        <td colspan="6" align="right" bgcolor="#FFFFFF">
                                <img src="{{ aca_asset('templets/new/center_07.gif')}}">
                        </td>
                </tr>
                <tr>
                        <td colspan="6" align="center" bgcolor="#FFFFFF"> 
                <div  id="result"> 

                        
                </div>
                </td>
                </tr>
                </table>



                </form>












                </td>
        </tr>
        <tr>
        <td align="center"><a href="{{ aca_url('/adduser') }}" ><img src="{{ aca_asset('templets/new/layout_03.gif')}}" border="0"></a>            <br />

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

                               
                                url: '{{ url("adminPanel/city/home") }}',
                                dataType: 'json',
                                method: 'get',
                                processData: false,
                                contentType: false,
                                data: {_token:'{{ csrf_token() }}', countryID:countryID },
                                beforeSend: function() {

                                  $('#towns').html('<div align="center"><img src="{{ aca_asset("images/befor.gif") }}"/></div>'); 

                                },
                                success: function(response) {
                                        $('#towns').html('');

                                        let countData = response.data;
                                        valhtml = '';
                                        for(let i = 0; i < countData.length; i++) {

                                                valhtml +=  '<option value="' + response.data[i].id + '">' + response.data[i].city + '</option>'
c
                                        };

                                        $('#towns').html('<select name="town"  id="town" class="selects"> <option value="">اختـــر المدينـــة</option>' + valhtml + '</select>');
  

                                }


                        });

                });
                $('.submitBlood').click( function() {

                        let country = $('#country').val();
                        let town    = $('#town').val();
                        let blood_type = $('#blood_type').val();
                        if( country == 0) {

                                $('.error_blood').html('<div class="tooltip" style="display: block; position: absolute; top: 326.5px; left: 858px; opacity: 0.7;">مـــن فضـــلك اختـــر الدولـــة</div>');

                        } else if(town == 0) {

                                $('.error_blood').html('<div class="tooltip" style="display: block; position: absolute; top: 326.5px; left: 695px; opacity: 0.7;">مـــن فضـــلك  اختـــر المدينــــة</div>');

                        } else if(blood_type == 0) {

                                $('.error_blood').html('<div class="tooltip" style="display: block; position: absolute; top: 326.5px; left: 531px; opacity: 0.7;">مـــن فضـــلك  اختـــر فصيلة الدم</div>');

                        } else {

                                $('.error_blood').html('');

                                $.ajax({

                                        url: '{{ aca_url("adminPanel/blood") }}',
                                        method: 'get',
                                        dataType: 'json',
                                        data: {_token:'{{ csrf_token() }}', country:country, town:town, blood_type:blood_type},
                                        beforeSend: function() {
                                                $('#result').html('<div align="center"><img src="{{ aca_asset("images/befor.gif") }}"/></div>'); 
                                        },
                                        success: function (response){

                                                let countData = response.data;
                                                valHtml = '';
                                                for(let i = 0; i < countData.length; i++){
                                                        
                                                        valHtml += '<tr align="center" class="font3">';
                                                                valHtml += '<td class="td1">' + response.data[i].name + '</td>';
                                                                valHtml += '<td class="td1">' + response.data[i].nameCountry + ' - ' + response.data[i].nameCity + '</td>';
                                                                valHtml += '<td class="td1">' + response.data[i].tel + '</td>';
                                                                valHtml += '<td class="td1">' + response.data[i].bloodType + '</td>';
                                                                valHtml += '<td class="td1">' + response.data[i].callType + '</td>';
                                                                valHtml += '<td class="td1">' + response.data[i].callTime + '</td>';
                                                        valHtml += '</tr>';

                                                }


                                        $('#result').html(
                                        
                                                '<table width="100%" border="0" class="table" dir="rtl" cellpadding="4">' +
                                                        '<tbody><tr class="font2 td3" align="center">' +
                                                                '<td>الإســـم</td><td>العنــوان</td><td>الجـــوال</td><td>فصيلة الدم</td><td>نوع الإتصــال</td><td>وقت الإتصــال</td>'+
                                                        '</tr>'+
                                                                   
                                                        valHtml +   
                                                        
                                                '</tbody>'+
                                        '</table>'+
                                        
                                        '<div align="center" dir="rtl"></div><br>'

                                        
                                        
                                        );
                                                

                                        }

                                });


                        }

                });

        });

    </script>
@endsection