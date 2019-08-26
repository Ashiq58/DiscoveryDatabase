<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Discovery Database</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link href="css/addons/datatables.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('/bs-admin')}}/files/bootstrap.min.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
      
    .label {
      display: inline;
      padding: .2em .6em .3em;
      font-size: 75%;
      font-weight: bold;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25em;
    }
    a.label:hover,
    a.label:focus {
      color: #fff;
      text-decoration: none;
      cursor: pointer;
    }
    .label:empty {
      display: none;
    }
    .btn .label {
      position: relative;
      top: -1px;
    }
    .label-default {
      background-color: #777;
    }
    .label-default[href]:hover,
    .label-default[href]:focus {
      background-color: #5e5e5e;
    }
    .label-primary {
      background-color: #014154;
    }
    .label-primary[href]:hover,
    .label-primary[href]:focus {
      background-color: #286090;
    }
    .label-success {
      background-color: #5cb85c;
    }
    .label-success[href]:hover,
    .label-success[href]:focus {
      background-color: #449d44;
    }
    .label-info {
      background-color: #5bc0de;
    }
    .label-info[href]:hover,
    .label-info[href]:focus {
      background-color: #31b0d5;
    }
    .label-warning {
      background-color: #f0ad4e;
    }
    .label-warning[href]:hover,
    .label-warning[href]:focus {
      background-color: #ec971f;
    }
    .label-danger {
      background-color: #d9534f;
    }
    .label-danger[href]:hover,
    .label-danger[href]:focus {
      background-color: #c9302c;
    }

    .label-info {
      background-color: #5bc0de;
    }
    .label-info[href]:hover,
    .label-info[href]:focus {
      background-color: #31b0d5;
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="{{asset('/bs-admin')}}/files/dashboard.css" rel="stylesheet">
  <link href="{{asset('/bs-admin')}}/files/bootstrap-tagsinput.css">
</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('home')}}">Discovery Data Engine</a>
 

    <ul class="navbar-nav px-3">

      <li class="nav-item text-nowrap">
     
        <a class="nav-link dropdown-toggle" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>

      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar" >
        <div class="sidebar-sticky" style="background: #014154">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active label-primary" style="color: white" href="{{route('travel.index')}}">
                Discovery Travel Club <span class="sr-only">(current)</span>
              </a>

            </li>
            <li class="nav-item">
              <a class="nav-link label-primary" style="color: white" href="#">
               Discovery Uttara Club
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link label-primary" style="color: white" href="#">
               Discovery Rotary Club
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @yield('content')

      </main>
    </div>
  </div>
  <script src="{{asset('/bs-admin')}}/files/jquery-3.4.1.js"></script>
  <script src="{{asset('/bs-admin')}}/files/popper.min.js"></script>
  <script src="{{asset('/bs-admin')}}/files/bootstrap-tagsinput.min.js"></script>
  <script src="{{asset('/bs-admin')}}/files/bootstrap.min.js"></script>

        @yield('js')
</body>

</html>


<script type="text/javascript" src="js/addons/datatables.min.js"></script>

  <!-- Bootstrap core JavaScript-->
<script src="{{ asset('/bs-admin')}}vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('/bs-admin')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/bs-admin')}}vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('/bs-admin')}}vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('/bs-admin')}}vendor/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/bs-admin')}}vendor/datatables/dataTables.bootstrap4.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
        setTimeout(function(){
            $("div.flash-message").remove();
        }, 100);
    });



</script>