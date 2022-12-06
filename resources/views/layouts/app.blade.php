<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Mobile Phone Selling</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="{!!asset('/css/bootstrap.min.css')!!}">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  
  <style>
    /* change Password */
    .pass_show{position: relative} 
    .pass_show .ptxt { 
    position: absolute; 
    top: 50%; 
    right: 10px; 
    z-index: 1; 
    color: #f36c01; 
    margin-top: -10px; 
    cursor: pointer; 
    transition: .3s ease all; 
    } 
    .pass_show .ptxt:hover{color: #333333;}
  </style>
</head> 

@if (!Auth::guest())
  @if(Auth::user()->is_admin == 0) 
    @include('admin_header')
  @else 
    @include('header')
  @endif
@else
 
@endif

  <main class="py-4">
    @yield('content')
  </main>

  <script src="{!!asset('/js/jquery-3.6.0.min.js')!!}"></script>
  <script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/1434eaa1d1.js" crossorigin="anonymous"></script>
    
  <script src="{{ asset('css/app.css') }}" defer></script>

</body>
{{-- <script>
  document.addEventListener("DOMContentLoaded", () => {
    const rows = document.querySelectorAll("tr[data-href]");
    rows.forEach(row => {
      row.addEventListener("click", () => {
        window.location.href = row.dataset.href;
      });
    });
  });
</script> --}}
  <script>
    $('#img_file_upid').on('change',function(ev) {
      console.log("here inside");

      //image preview 
      var reader = new FileReader();

      reader.onload=function(ev) {
        $('#img_prv').attr('src',ev.target.result).css('width','150px').css('height','150px');
      }
      reader.readAsDataURL(this.files[0]);
    });
  </script>

  <script>
      $(document).ready(function(){
        $('.pass_show').append('<span class="ptxt">Show</span>');  
        });      
      $(document).on('click','.pass_show .ptxt', function(){ 
        
      $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 
        
      $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 
        
    }); 
  </script>
</html>
