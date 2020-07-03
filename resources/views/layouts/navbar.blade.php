<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="{{ asset('css/navbar-style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <head>

    </head>
        <title> @if(isset($title))
            {{ $title }}
        @endif </title>
    </head>
<body>

    <nav class="navbar navbar-trans navbar-expand-sm">
  <!-- Navbar content -->
     <div class="container">
         <div class="navbar-header">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand text-danger" href="#">BRAND</a>
         </div>
          <div class="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ Route('welcome') }}">Home</a></li>
                <li><a href="{{ Route('advertise') }}">Advertisement</a></li>
                <li><a href="#section3">Then</a></li>
                <li><a href="#section4">Form</a></li>
                <li><a href="#section5">More</a></li>
                <li><a href="#section6">Last</a></li>
            </ul>

        </div>

</nav>

@section('fuel')
<select id="fuel_rental" name="fuel" class="form-control">
    @foreach ($fuel as  $value)
    <option value="{{ $value->fuel_id }}">{{ ucfirst( $value->fuel_eng) }} </option>
@endforeach

</select>
@endsection


@section('car_color')
<label id="car" class="col-4 label_car_color">Car Color</label>
   <select id="car_color" name="car_color" data-style="rounded-pill px-4 py-3 shadow-sm car_color_style" class="selectpicker car_color">
       @foreach ($color_name_hex_val as $key=>$value)
          <option id='{{ $value}}' class="{{ $key }}" value="{{ $key }}">{{ $key }} </option>
       @endforeach
   </select>
@endsection


@section('Title')
<div class="col-m-1">
    <label for="title">Title</label>
</div>
 <input type="texbox" id="title" name="title" class="form-control form-control-sm ml-2 col-4 txtTitle" placeholder="Enter Title">
@endsection


@section('description')
<label for="desciption">Desciption</label>
<textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Enter Descrption here"></textarea>
@endsection

@section('price')
<label for="price">Price</label>&nbsp;
<input type="text" name="txtprice" id="price" class="form-control col-3" maxlength="10">
@endsection

@section('city')
    <option>select city</option>
    @foreach($city  as $key => $value)
       <option value="{{$key}}"> {{ucfirst($value)}}</option>
   @endforeach

@endsection

@section('year')
   <option selected disabled>select year</option>
    @for($i=1980;$i<=2020;$i++)
       <option>{{ $i }}</option>
    @endfor
@endsection

@section('image')
     <div class="row" id="preview_img" style="width: 745px !important;position: relative;"></div>
@endsection

@section('contact-info')
  <div class="form-row">
     <label for="">Contact Info</label>
     <input type="text" name="name" id="name" class="form-control" placeholder="enter your name here">
 </div>
 <br>
 <div>
    <input type="text" name="phone" id="phone"  class="form-control" placeholder="Enter your mobile number" maxlength="10">
</div>
@endsection

@section('submit_button')
<div class="form-row">
    <button class="btn btn-primary" value="submit" type="submit">save and publish</button>
  </div>
@endsection
@yield('content')
</body>
</html>


