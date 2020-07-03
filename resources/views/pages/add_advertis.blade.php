@include('layouts.navbar',['title'=>'Advertisement'])

<!DOCTYPE html>
<html>
<head>
	<title>
		Add Advertisement
	</title>
	 <!-- Styles -->
        <link href="{{asset('css/add_advertis.css')}}" rel="stylesheet"/>

</head>
<body>
    <br><br>
    <div class="container">
       <p class="address">
  	      what you are listing?<br>
          Select which category your ad fits into

       </p>
</div>
<div class="container">

    <div class="row mb-5">
			<div class="col-md-4">
				<div class="card">
					<img src="/image/car1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{ ucfirst($department[1]) }}</h5>
						<p class="card-text">Add Vichels for buy and rent,Motor Cycle,Car Plates Number</p>
						<a href="{{ url('/vichels') }}" class="btn btn-sm btn-primary">Click here</a>
					</div>
				</div>
            </div>

            <div class="col-md-4">
				<div class="card">
					<img src="/image/mobile.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{ $department[2] }}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="{{ url('/vichels') }}" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>

          <div class="col-md-4">
				<div class="card">
					<img src="/image/video-game.jpg" class="card-img-top" alt="..." width="35px" height="35px">
					<div class="card-body">
						<h5 class="card-title">{{ $department[3] }}</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="{{ url('/') }}" class="btn btn-sm btn-primary">Go somewhere</a>
					</div>
                </div>
           </div>

    </div><!--End First Row -->


 <!-- start second row -->
  <div class="row">
    <div class="col-md-4">
      <div class="card">
          <img src="/image/pic-computer-&-electronics.jpg" alt="computer" style="width:100%">
          <div class="card-body">
              <h5 class="card-title">{{ $department[4] }}</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error earum exercitationem distinctio velit architecto vitae facere minus ullam facilis quas minima molestiae dignissimos atque, doloremque ipsa, nesciunt reprehenderit soluta perspiciatis?

              </p>
              <a href="{{url('/') }}" class="btn btn-sm btn-primary">Go some where</a>
          </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
          <img src="/image/real_state_for_sale.png" alt="real_state_for_sale">
          <div class="card-body">
              <h5 class="card-title">{{ $department[5] }}</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error earum exercitationem distinctio velit architecto vitae facere minus ullam facilis quas minima molestiae dignissimos atque, doloremque ipsa, nesciunt reprehenderit soluta perspiciatis?

              </p>
              <a href="{{url('/') }}" class="btn btn-sm btn-primary">Go some where</a>
          </div>
      </div>
    </div>







     <div class="col-md-3">
      <div class="thumbnail">
        <a href="/image/RealEstate-for-rent.png" target="_blank">
          <img src="/image/RealEstate-for-rent.png" alt="RealEstate-for-rent" style="height:150px">
          <div class="caption">
            <p>{{$department[6]}}</p>
          </div>
        </a>
      </div>
    </div>
 </div>
    <div class="row">
      <div class="col-md-3">
      <div class="thumbnail">
        <a href="/image/furtinure-decor.jpg" target="_blank">
          <img src="/image/furtinure-decor.jpg" alt="furtinure-decor" style="height:150px">
          <div class="caption">
            <p>{{$department[7]}}</p>
          </div>
        </a>
      </div>
    </div>
    </div>





</div><!-- end dev class container-->



</body>
</html>
