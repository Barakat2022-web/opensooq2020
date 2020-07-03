@include('layouts.navbar',['title'=>'Reigsteration Page'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/Register.css') }}" rel="stylesheet"/>

</head>
<body class="body">
<h1 class="h1_custom">Login & registration Form</h1>
     <div class="content1">
	    <div class="container1">
		   <img class="bg-img" src="{{ asset('image/background-form.jpg') }}" alt="">
			  <div class="menu">
			    	<a href="#connexion" class="btn-connexion"><h2 class="h2_custom">SIGN IN</h2></a>
				    <a href="#enregistrer" class="btn-enregistrer active"><h2 class="h2_custom">SIGN UP</h2></a>
            </div>
            <!-- Registeration Section -->
            <div class="enregistrer active-section">
                    <form action="{{ route('register') }}"  method="POST">
                        {{ csrf_field() }}
                      	<div class="contact-form">
                              <label for="username" class="label">username</label>
                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					             <input class="input2" type="text" id="username" name="username" placeholder="Enter User Name" value="{{ old('username') }}" required>


                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                                <label for="email" class="label">E-mail</label>
                                <input class="input2" type="email" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>

                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <label for="password" class="label">Password</label>

                              <input class="input2" id="password" type="password"  name="password" placeholder="Enter password" value="{{ old('password') }}" required>
                               @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                	<label for="password-confirm" class="label">Confirm Password</label>
                            <input class="input2" type="password" id="password-confirm" name="password_confirmation" placeholder="Re-Type Password" value="{{ old('confirm') }}" required>

                            <div class="check">
								<label>
									<input id="check" type="checkbox" class="checkbox">
										<svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
											<path class="path-back p"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
											<path class="path-moving p" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
										</svg>
								</label>
								<h3 class="h3_custom">I agree</h3>
                             </div>
                             <input  type="submit" class="input2 submit" value="SIGN UP">

                            </div>
                        </div>
                    </form>
            </div><!--End Registeration -->
            <!-- stary login -->
            <div class="connexion">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="contact-form">

                        <label for="username" class="label">username</label>
                        <input class="input2" type="text" id="username" name="username" placeholder="Enter user name" value="{{ old('username') }}" required>

                        <label for="password" class="label">Password</label>
                        <input  class="input2" type="password" id="password" name="password" placeholder="Enter Password Here"  required>
                         <br>
                        <input  type="submit" class="input2 submit" value="Sign In">
                        <hr>
                        <a href="" target="_blank"><h4>Forgot Password?</h4></a>
                    </div>
                </form>
            </div>
        </div>
     </div>

   <script type="text/javascript" src="Jquery/jquery.min.js"></script>
 <script type="text/javascript" src="Jquery/jquery-ui.min.js"></script>
 <script type="text/javascript" src="js/Register.js"></script>

</body>
</html>

