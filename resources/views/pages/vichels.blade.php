@include('layouts.navbar',['title'=>'Vichles'])

<!-- Error Message validation -->
@if ($errors->any())
    @foreach ($errors->all() as $message)
            {{ $message }}
    @endforeach
</div>

@endif

<!DOCTYPE html>
<html>
<head>


       <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

		 <!-- Styles -->
        <!-- bootstrap-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{asset('css/add_advertis.css')}}" rel="stylesheet"/>
         <link href="{{ asset('css/slimselect.min.css') }}" rel="stylesheet"/>
      <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"/>
      <link href="{{ asset('css/vichels.css') }}" rel="stylesheet"/>
     <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet"/>
     <link href="{{ asset('css/ErrorPage/Error-bootstrap.css') }}" rel="stylesheet"/>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">





</head>
<body>
  <br><BR>
    <p class="address">
      Add Advertisement<br>

    </p>
    <div class="row">
        <div class="col-1">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">


            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">{{ $subdepartment_vichels[0]  }}</a>

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">{{ $subdepartment_vichels[1]  }}</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">{{ $subdepartment_vichels[2]  }}</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">{{ $subdepartment_vichels[3]  }}</a>

            </div>
        </div>

        <div class="tab-content" id="v-pills-tabContent" ><!-- start div for #v-pills-tabContent-->
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p> Post car for sale</p>
                <form action="{{ Route('CarSale') }}" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    <!-- start div car make ,car model -->
                    <div class="form-group">
                      <div class="container">
                        <div class="form-row">
                           <!-- start car make-->
                              <div class="col-m-1">
                                  <label for="car_make">Car Make</label>
                              </div>
                              <div class="col ml-4">
                                      <select id="carmake" name="carmake" data-dependent="carmodel" class="form-control" >
                                          @foreach ($carmake as $key=>$value)
                                              <option value="{{ $key }}">{{ ucfirst( $value) }} </option>
                                          @endforeach
                                      </select>
                                </div>


                          <!-- End div car make -->


                              <div class="col-m-1 ml-md-4">
                                  <label for="validationCustom01">Car Model</label>
                              </div>

                              <div class="col" class="position-relative" style="left: 57px;">
                                    <select id="carmodel" name="carmodel" data-dependent="carmake" class="form-control position-relative" selected style="left:56px;" required>
                                          <option value="select carmodel" selected disabled>Select car model </option>
                                      </select>
                                      <div class="invalid-tooltip">
                                        Please First select car make
                                      </div>
                              </div>


                              <br>


                           </div><!-- end car model--><!-- end class form-row-->
                          <br>
                           <!-- start Engine Serial Number-->
                           <div class="form-row">
                              <div class="col-m-1">
                                  <label for="validationTooltip01">Serial num</label>
                              </div>

                              <div class="col-xl-4 ml-3">
                                 <input type="texbox"  id="validationTooltip01" name="txt_eng_ser_num" class="form-control form-control-sm col" placeholder="Enter Engine Serial Number" maxlength="10" required>
                                         <div class="invalid-tooltip">
                                            Please Enter a valid serial number
                                          </div>

                              </div>


                           <!--end Engine Serial Number-->

                          <!-- start year-->


                                <label for="year" class="col-1 ml-5">year</label>


                              <div class="col-4 ml-3">
                                  <span class="year-select2">
                                    <select id="year" name="year" class="col" id="validationTooltip02" required>
                                        @section('year')
                                        @show
                                      </select>
                                      <div class="invalid-tooltip">
                                        Please select year
                                      </div>
                                    </span>

                              </div>
                            </div>
                          <!-- end year-->
                          <br>
                          <!-- status-->
                            <div class="form-row">
                              <div class="col-5">
                                 <label for="status">status</label>

                                  <span class="content ml-sm-4 status-radio-button" id="customControlValidation1" aria-required="true">
                                    <label for="rdo-1" class="btn-radio">
                                      <input type="radio" id="rdo-1" class="custom-control-input"  name="radio-status" value="{{ $carstatusID[0] }}" required>
                                         <svg width="20px" height="20px" viewBox="0 0 20 20">
                                            <circle cx="10" cy="10" r="9"></circle>
                                             <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                             <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                           </svg>
                                        <span>{{ $carstatus[0] }}</span>

                                    </label>

                                      <label for="rdo-2" class="btn-radio">
                                          <input type="radio" id="rdo-2" name="radio-status" value="{{ $carstatusID[1] }}" required>
                                            <svg width="20px" height="20px" viewBox="0 0 20 20" style="margin-left:31px;">
                                              <circle cx="10" cy="10" r="9"></circle>
                                              <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                              <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                             </svg>
                                            <span> {{  $carstatus[1] }}</span>

                                        </label>

                                    </span>
                                    <div class="invalid-tooltip">
                                        Please select status
                                      </div>



                                </div>
                                <br>
                                <!-- end status-->

                                 <!-- Distance -->

                                 <div class="col-1 distance">
                                    <Label>distance</Label>
                                </div>
                                <div class="col ml-4 year-select2">
                                    <input type="texbox" name="distance" class="form-control form-control-sm col" placeholder="Enter Distance" maxlength="11" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid ditance
                                      </div>
                                 </div> <!-- End Distance -->
                            </div>
                            <br>
                            <!-- start Transmission-->
                           <div class="form-row">
                            <div class="col-m-1">
                                <label for="transmission">Transmission</label>
                            </div>

                            <div class="col-4">

                                 <span class="content ml-sm-1">
                                   <label for="rdo-3" class="btn-radio">
                                     <input type="radio" id="rdo-3" name="radio-trans" value="{{ $carTransID[0] }}" required>
                                        <svg width="20px" height="20px" viewBox="0 0 20 20">
                                           <circle cx="10" cy="10" r="9"></circle>
                                            <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                            <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                          </svg>
                                       <span>{{$carTransmission[0]}}</span>
                                   </label>

                                     <label for="rdo-4" class="btn-radio position-relative" style="right: 10px;">
                                         <input type="radio" id="rdo-4" name="radio-trans" value="{{ $carTransID[1] }}" required>
                                           <svg width="20px" height="20px" viewBox="0 0 20 20">
                                             <circle cx="10" cy="10" r="9"></circle>
                                             <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                             <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                            </svg>
                                           <span> {{  $carTransmission[1] }}</span>
                                       </label>
                                   </span>
                                   <div class="invalid-tooltip">
                                    Please provide a valid ditance
                                  </div>


                               </div>

                         <!--end Transmission-->

                        <!-- start Fuel-->


                              <label for="fuel" class="col-1 ml-5">fuel</label>


                            <div class="col-4 ml-3">
                              <span class="year-select2">
                                <select id="fuel" name="fuel" class="form-control">
                                    @foreach ($fuel as  $value)
                                        <option value="{{ $value->fuel_id }}">{{ ucfirst( $value->fuel_eng) }} </option>
                                    @endforeach
                                </select>
                            </span>

                            </div>
                          </div>
                        <!-- end fuel-->
                        <br>
                        <!-- start car option and car license-->
                        <div class="form-row">
                            <div class="col-sm">
                                <label id="car">Car option</label>
                                <select id="car_option" name="car_option[]" multiple data-style="rounded-pill px-4 py-3.8 shadow-sm" class="selectpicker">

                                    @foreach ($car_option as $value)
                                   <option value="{{ $value->option_id }}">{{ ucfirst($value->option_name_en)}}</option>
                                 @endforeach



                                 </select>
                            </div>

                            <div class="col-32 mr-5">
                                <label id="car">Car License</label>
                            </div>
                              <span class="year-select2">

                                    <span class="content ml-sm-1 car-license">
                                    <label for="rdo-5" class="btn-radio">
                                        <input type="radio" id="rdo-5" name="radio-licen" value="1">
                                        <svg width="20px" height="20px" viewBox="0 0 20 20">
                                            <circle cx="10" cy="10" r="9"></circle>
                                            <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                            <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                            </svg>
                                        <span>{{$carLicense[0] }}</span>
                                    </label>

                                        <label for="rdo-6" class="btn-radio position-relative" style="right: 10px;">
                                            <input type="radio" id="rdo-6" name="radio-licen" value="2">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <circle cx="10" cy="10" r="9"></circle>
                                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                            </svg>
                                            <span> {{  $carLicense[1] }}</span>
                                        </label>
                                    </span>


                            </span>

                        </div>
                          <!-- End car option and car license-->

                        <br>
                            <!-- start car Color and car Payment Method-->
                            <div class="form-row">
                                <div class="col">
                                   @section('car_color')
                                   @show



                                 <span class="col-2" style="right: 99px;">
                                    <label>Payment Method</label>
                                 </span>

                                    <span class="content1">
                                      <label for="rdo-7" class="btn-radio">
                                        <input type="radio" id="rdo-7" name="radio-payment" value="{{ $carTransID[0] }}">
                                           <svg width="20px" height="20px" viewBox="0 0 20 20">
                                              <circle cx="10" cy="10" r="9"></circle>
                                               <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                               <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                             </svg>
                                          <span>cash</span>
                                      </label>

                                        <label for="rdo-8" class="btn-radio position-relative" style="right: 10px;">
                                            <input type="radio" id="rdo-8" name="radio-payment" value="{{ $carTransID[1] }}">
                                              <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <circle cx="10" cy="10" r="9"></circle>
                                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                               </svg>
                                              <span>installemt</span>
                                          </label>
                                      </span>

                                  </div>

                            </div>
                            <!-- End car Color and car Payment Method-->
                            <br>
                            <!-- start Title  and Discription-->
                            <div class="form-row">
                               @section('Title')
                               @show
                            </div>
                            <br>
                            <div class="form-row">
                               @section('description')
                               @show
                            </div>
                            <br>

                           <br>

                            <div class="form-row">
                                @section('price')
                                @show
                            </div>
                            <br>

                            <div class="form-row">
                                <select id="city" name="city" class="form-control col-4">
                                    <option>select city</option>
                                    @foreach($city  as $key => $value)
                                       <option value="{{$key}}"> {{ucfirst($value)}}</option>
                                   @endforeach
                                </select>

                               &nbsp;
                               <select id="region"  name="region" class="form-control col-4"></select>
                               <span class="invalid-tooltip">@error('region'){{ $message }}@enderror</span>

                            </div>
                            <br>

                            <div class="col-15">
                                <input type="file" id="images" name="images[]" class="form-control" multiple/>
                            </div>
                            @section('image')
                            @show


                            @section('contact-info')
                            @show
                            <br>
                            @section('submit_button')
                            @show
                   </form>


                </div>
            </div>

        </div>


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <!-- CAR RENTAL -->
                <p>car Rental form here</p>
              <form method="POST" action="{{ Route('CarRent') }}">
                 @csrf
                    <!-- start div car make ,car model -->
                    <div class="form-group">
                        <div class="container">
                        <div class="form-row">
                            <!-- start car make-->
                                <div class="col-m-1">
                                    <label for="car_make1">Car Make</label>
                                </div>
                                <div class="col ml-4">
                                        <select id="carmake1" name="carmake1" data-dependent="carmodel1" class="form-control" >
                                            @foreach ($carmake as $key=>$value)
                                                <option value="{{ $key }}">{{ ucfirst( $value) }} </option>
                                            @endforeach
                                        </select>
                                </div>


                            <!-- End div car make -->


                                <div class="col-m-1 ml-md-4">
                                    <label for="car_model1 validationCustom01">Car Model</label>
                                </div>

                                <div class="col position-relative" style="left: 57px;">
                                    <select id="carmodel1" name="carmodel1" data-dependent="carmake1" class="form-control validationCustom01 position-relative" selected style="left:56px;" required>
                                        <span class="invalid-feedback">Please select the carmodel</span>
                                            <option value="select carmodel" selected disabled>Select car model </option>
                                        </select>

                                </div>

                                <br>


                            </div><!-- end car model--><!-- end class form-row-->
                            <!--year car Rental-->
                            <br>
                            <div class="form-row">
                                <label for="year" class="col-1 ml-1">year</label>


                                <div class="col-3 ml-3">
                                    <span class="position-relative" style="right: 13px;">
                                    <select id="year1" name="year1" class="col">
                                        @section('year')
                                        @show
                                        </select>
                                    </span>

                                </div>

                                <!-- start Transmission,year-->
                                <div class="col-2 ml-5 position-relative" style="left:139px;">
                                    <label for="transmission">Transmission</label>
                                </div>


                                <div class="col-3 ml-1 position-relative" style="left: 89px;">

                                    <span class="content ml-sm-1">
                                    <label for="rdo-9" class="btn-radio">
                                        <input type="radio" id="rdo-9" name="radio-trans" value="{{ $carTransmission[0] }}">
                                        <svg width="20px" height="20px" viewBox="0 0 20 20">
                                            <circle cx="10" cy="10" r="9"></circle>
                                            <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                            <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                            </svg>
                                        <span>{{$carTransmission[0]}}</span>
                                    </label>

                                        <label for="rdo-10" class="btn-radio position-relative" style="right: 10px;">
                                            <input type="radio" id="rdo-10" name="radio-trans" value="{{ $carTransmission[1] }}">
                                            <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <circle cx="10" cy="10" r="9"></circle>
                                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                            </svg>
                                            <span> {{  $carTransmission[1] }}</span>
                                        </label>
                                    </span>

                                </div>

                            </div>
                            <!-- end row transmission,year-->
                            <br>

                                <div class="form-row car_rental_title_row">
                                    <!-- start Fuel ,rental period-->
                                    <label for="fuel" class="col-1 position-relative" style="right:8px">fuel</label>

                                        <div class="col-2 position-relative">
                                            <span>
                                                @section('fuel')
                                                @parent
                                                @show
                                            </span>
                                        </div>

                                    <div class="position-relative" style="left:297px;">
                                        <label>Rental period</label>
                                            <input type="date" name="datefrom" id="date" class="form-control position-relative" style="left:142px;top:-32px">
                                            <input type="date" name="dateTo" id="date" class="form-control position-relative" style="left:303px;top:-69px">
                                    </div>

                                </div>
                            <!-- end fuel , rental period-->

                            <!-- car color -->
                            <div class="form-row">
                                <label id="car" class="col-2">Car Color</label>
                                <select id="car_color" name="car_color" data-style="rounded-pill px-4 py-3 shadow-sm car_color_style" class="selectpicker car_color">
                                    @foreach ($color_name_hex_val as $key=>$value)
                                        <option id='{{ $value}}' class="{{ $key }}" value="{{ $key }}">{{ $key }} </option>
                                    @endforeach
                                </select>
                                <span class="position-relative" style="left:177px;">
                                    <div class="col-m-1">
                                        <label for="title">Title</label>
                                    </div>
                                    <input type="texbox" id="title" name="title_rent" class="form-control form-control-sm ml-2 title_rent" placeholder="Enter Title">
                                </span>

                            </div>
                            <!-- End car color and Title-->

                            <div class="form-row">
                                @section('description')
                                @show
                            </div>


                            <br>

                            <div class="form-row">
                            @section('price')
                                @show
                            </div>
                            <br>

                            <div class="form-row">
                                <select id="city1" name="city1" class="form-control col-4">
                                    @section('city')@show
                                </select>
                                &nbsp;
                                <select id="region1"  name="region1" class="form-control col-4">
                                <span class="invalid-tooltip">@error('region'){{ $message }}@enderror</span>
                            </div>

                            <br><br>

                            <div class="form-row">
                                <input type="file" id="images_carrent" name="images_carrent[]" class="form-control position-relative" style="top:17px" multiple/>
                                <div class="row position-relative" id="preview_img1" style="width: 745px !important;"></div>

                            </div>
                             <br>
                            @section('contact-info')
                            @show
                            <br>
                            @section('submit_button')
                            @show
                        </div>
                    </div>
                </form>

                    <br>


              </div>

              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p>Motor Cycle</p>
                <form action="" method="post">
                    <!-- start div Motor Make , Motor Model-->
                    <div class="form-group">
                        <div class="container">
                            <div class="form-row">
                                <div class="col-m-1">
                                    <label for="motor_make">Motor Make</label>
                                </div>
                                <div class="col ml-4">
                                    <select name="motormake" id="motormake" data-dependent="motormodel" class="form-control"></select>
                                </div><!-- End Div Motor Make -->
                                <div class="col-m-1 ml-md-4">
                                    <label>Motor Model</label>
                                </div>
                                <div class="col" style="left:75px;position-relative">
                                    <select id="motormodel" name="motormodel" data-dependent="motormake" class="form-control position-relative" selected style="left:56px;" required></select>
                                </div>

                            </div>
                            <br>
                            <div class="form-row">
                                 <label for="year" class="col-1 ml-1">year</label>
                                 <span  class="position-relative" style="left:28px;">
                                    <select name="year3" id="year3" class="col ml-4">
                                        @section('year')
                                        @show
                                   </select>

                                 </span>
                                 <span class="position-relative" style="left: 78px">
                                    <label for="motor status" class="col position-relative">Motor Status</label>
                                 </span>

                                 <span class="position-relative" style="left: 149px">
                                    <label for="rdo-11" class="btn-radio">
                                    <input type="radio" name="radio-trans1" id="rdo-11">
                                    <svg width="20px" height="20px" viewBox="0 0 20 20">
                                        <circle cx="10" cy="10" r="9"></circle>
                                        <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                        <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                      </svg>
                                      used
                                    </label>
                                    <label for="rdo-12" class="btn-radio">
                                      <input type="radio" name="radio-trans1" id="rdo-12">
                                      <svg width="20px" height="20px" viewBox="0 0 20 20">
                                        <circle cx="10" cy="10" r="9"></circle>
                                        <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                        <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                      </svg>
                                     new
                                    </label>
                                </span>

                        </div>
                            <br>
                        <div class="form-row">
                            <div>
                                <Label>distance</Label>
                             </div>
                             <div class="col-4 ml-1 year-select2">
                               <input type="texbox" name="distance" class="form-control form-control-sm col" placeholder="Enter Distance" maxlength="9" required>
                               <div class="invalid-tooltip">
                                 Please provide a valid ditance
                               </div>
                             </div> <!-- End Distance -->

                            <label for="Engine" class="col position-relative" style="left: 87px;">Engine</label>
                            <span class="engine_pos">
                                <select name="engine" id="engine" class="col position-relative"></select>
                            </span>


                        </div>
                        <br>
                        <div class="form-row">
                           <label for="title">Title</label>
                           <input type="text" name="title" id="title" class="form-control form-control-sm position-relative col-4" style="left:92px">
                        </div>
                        <br>
                        <div class="form-row">
                        @section('description')
                         @show
                        </div>
                        <br>
                        <div class="form-row">
                            @section('price')
                             @show
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-row">
                                <select id="city2" name="city2" class="form-control col-4">
                                    @section('city')@show
                                </select>
                                 &nbsp;
                                <select id="region2"  name="region2" class="form-control col-4">
                                <span class="invalid-tooltip">@error('region'){{ $message }}@enderror</span>
                            </div>

                        </div>
                        <br><br>
                        <div class="form-row">
                            <input type="file" id="file-input" name="images"/>

                        </div>
                    <br>
                        <div class="form-row">
                            <label for="">Contact Info</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="enter your name here">

                        <br>

                        <input type="text" name="phone" id="phone"  class="form-control" placeholder="Enter your mobile number" maxlength="10">
                    </div>
                        </div>
                    </div>
                    </div>

                </form>

            </div>

            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <label for="">car plates number</label>
                <form action="" method="post">
                    <div class="form-group-">
                        <div class="container">

                                <div class="form-row">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control form-control-sm position-relative col-4" style="left:92px">
                                 </div>
                                 <br>
                                 <div class="form-row">
                                 @section('description')
                                  @show
                                 </div>
                                 <br>
                                 <div class="form-row">
                                     @section('price')
                                      @show
                                 </div>
                                 <br>
                                 <div class="form-row">
                                     <div class="form-row">
                                         <select id="city2" name="city2" class="form-control col-4">
                                             @section('city')@show
                                         </select>
                                          &nbsp;
                                         <select id="region2"  name="region2" class="form-control col-4">
                                         <span class="invalid-tooltip">@error('region'){{ $message }}@enderror</span>
                                     </div>

                                 </div>
                                 <br><br>
                                 <div class="form-row">
                                     <input type="file" id="file-input" name="images"/>

                                 </div>
                             <br>
                                 <div class="form-row">
                                     <label for="">Contact Info</label>
                                     <input type="text" name="name" id="name" class="form-control" placeholder="enter your name here">

                                 <br>

                                 <input type="text" name="phone" id="phone"  class="form-control" placeholder="Enter your mobile number" maxlength="10">
                             </div>

                             </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>









    <!-- jQuery first, then Bootstrap JS. -->

       <script type="text/javascript" src="js/popper.min.js"></script>
      <script src="{{asset('Jquery/jquery-3.4.1.min.js')}}"></script>
   <script type="text/javascript" src="js/select2.min.js"></script>
     <script type="text/javascript" src="js/vichels.js"></script>
       <script type="text/javascript" src="js/slimselect.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/welcome.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>





  </body>
</html>


