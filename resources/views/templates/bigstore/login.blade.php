@extends('templates.bigstore.master')
@section('title', 'Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template')
@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href={{ route('temp.bigstore.index') }}>Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile">
			<h3>Login</h3>
			<div class="key">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<div class="clearfix"></div>
			</div>
			<div class="key">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
				<div class="clearfix"></div>
			</div>
			<input type="submit" value="Login">
		</div>
		<div class="forg">
			<a href="" class="forg-left">Forgot Password</a>
			<a href={{ route('temp.bigstore.register') }} class="forg-right">Register</a>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection