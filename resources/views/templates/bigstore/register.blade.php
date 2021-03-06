@extends('templates.bigstore.master')
@section('title', 'Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template')
@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="{{ route('temp.bigstore.index') }}">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile form1">
            <h3>Register</h3>
            <div class="key">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
                <div class="clearfix"></div>
            </div>
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
            <div class="key">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
                <div class="clearfix"></div>
            </div>
            <input type="submit" value="Submit">
        </div>
    </div>
</div>
@endsection