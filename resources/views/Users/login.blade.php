<!Doctype html>
<html>
	<head>
		<title>Web Application</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
	<link rel="icon" type="image/png" href="{{asset('photos/logo.jpg')}}" />
	<body>
		@if(session('info'))
			<h3 style="text-align: center;">{{ session('info') }}</h3>
		@endif
		<div class="login_form">
			<div class="header_login">
				<svg class="bi" width="5em" height="5em" fill="white" color="white">
					<use xlink:href="{{asset('icons/bootstrap-icons.svg#globe')}}"/>
				</svg>
				<h3>Web Application</h3>
			</div>
			<div class="main_login">
				<form action="/user/login" method="post" class="login_submit_form">
          {{ csrf_field() }}
					<label>User Name</label>
					<br>
					<input type="text" name="email" required="email" class="login_email">
					<br><br>
					<label>Password</label>
					<br>
					<input type="password" name="password" required class="login_password">
					<br><br><br>
					<input type="submit" value="Login" class="login_submit">
				</form>
			</div>
		</div>
		<div class="login_form_for_small_screens">
			<div class="header_login_small_screens">
				<svg class="bi" width="3em" height="3em" fill="white" color="white">
					<use xlink:href="{{asset('icons/bootstrap-icons.svg#globe')}}"/>
				</svg>
				<h4>Web Application</h4>
			</div>
			<div class="main_login_small_screens">
				<form action="/user/login" method="post" class="login_submit_form_small_screens">
          {{ csrf_field() }}
					<label>User Name</label>
					<br>
					<input type="text" name="email" required="email" class="login_email_small_screens">
					<br><br>
					<label>Password</label>
					<br>
					<input type="password" name="password" required class="login_password_small_screens">
					<br><br>
					<input type="submit" value="Login" class="login_submit_small_screens">
				</form>
			</div>
		</div>
	</body>
</html>
