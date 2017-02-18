<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Attendance System</title>

    <!-- Styles -->
    <link href="{{url('/public/css/app.css')}}" rel="stylesheet">
    <link href="{{url('/public/css/custom_style.css')}}" rel="stylesheet">
    <link href="{{url('/public/css/attendance.css')}}" rel="stylesheet">
    <link href="{{url('/public/css/jquery.dataTables.min.css')}}" rel="stylesheet">   
    <link href="{{url('/public/css/user-profile.css')}}" rel="stylesheet">   
     
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

 
 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container header-menu-container">
                <div class="navbar-header"> 
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Attendance System
                     </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li> 
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div> 
 
    <script src="{{url('/public/js/app.js')}}"></script>  
    <script language="JavaScript" type="text/javascript" src="{{url('/public/js/jquery.dataTables.min.js')}}"></script>   
  <script>
// $(document).ready(function() { 
//     $('#example').DataTable( {
//         "paging":   5,
//         "ordering": false,
//         "info":     false
//     } );
// } );  
// do sorting 
$(document).ready(function() { 

    // make data table works as table
      $("#example").dataTable({
         "paging":   5,
        "sPaginationType": "full_numbers",
        "bFilter": true,
        // "sDom":"lrtip" 
       });  
      
      // sorting
      var oTable;
      oTable = $('#example').dataTable(); 
      $('#msds-select').change( function() {  
            var sortAs = $(this).val(); 

            console.log(sortAs); 
            if(sortAs == 'None') {  
            }  else {  
                oTable.fnFilter( sortAs );    
            }
       });
   });

  </script>
    {{-- <script src="{{url('/public/js/personnel.js')}}"></script> --}}
    {{-- <script src="{{url('/public/js/jquery.js')}}" type="text/javascript" charset="utf-8" async defer></script>  --}}
</body>
</html>
