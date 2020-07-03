
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- bootstrap-->

       <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
      <link href="{{ asset('css/slimselect.min.css') }}" rel="stylesheet"/>
      <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"/>
      </head>
    <body>

<!--create First Navigation bar for login and Register -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container d-flex align-items-center px-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link pl-0">About</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link pl-0"  data-focus="true">Register/Login</a></li>

            <li class="nav-item"><a href="{{url('/advertise')}}" target="_self" class="nav-link pl-0">Add Advertisement</a></li>
            <li class="nav-item"><a href="" class="nav-link pl-0">Blog</a></li>
            <li class="nav-item"><a href="" class="nav-link pl-0">Contact</a></li>
            <li class="nav-item"><a href="{{ Auth::logout() }}" class="pl-0">Logout</li>
          </ul>
        </div>
      </div>

    </nav>

</nav>



<!--Create second navigation bar for search-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
       <div class="container d-flex align-items-center px-5">

 <select class="form-control input-sm dynamic" name="department" id="department" data-dependent="subdepartment">

      <option selected disabled>Select Department</option>
        @foreach($department as $key => $value)
                  <option value="{{$key}}"> {{ ucfirst($value)}}</option>
                  @endforeach
      </select>


   <!-- second select for sub department-->
   <select class="form-control input-lg dynamic"  id="subdepartment" name="subdepartment" data-dependent="department">
      <option value="select-SubDepartment" disabled="true" selected="true">Select Sub Department</option>
   </select>&nbsp;
      </div>
    </nav>
    <!-- End second  navigation bar-->

  <!-- sidebar-->

  <div id="viewport">
  <!-- Sidebar -->

  <div id="sidebar">

      <div class="city-region">
        <select id="city" name="city" class="form-control col-10">
            <option>Select City</option>
          @foreach($city  as $key => $value)
              <option value="{{$key}}"> {{ucfirst($value)}}</option>
            @endforeach
       </select>
       <select id="region"  name="region" class="form-control col-10">
         <option>Select Region</option>
       </select>
         </div>


    </div>
  </div>


  <!-- end sidebar-->


       </div>



</div>

       </body>


<!--From here to end file all javascript files link puttet here -->
<script>
   setTimeout(function() {
        new SlimSelect({
          select: '#select'
        })
      }, 300);
</script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script src="{{asset('Jquery/jquery-3.4.1.min.js')}}"></script>
<script src="js/select2.min.js"></script>

 <script type="text/javascript" src="js/welcome.js"></script>

 <script type="text/javascript" src="js/slimselect.min.js"></script>
</html>
