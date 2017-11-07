@extends('layouts.master')

@section('title')
    DTI
@endsection

@section('signIn')
@include('includes.message-block')
<br/>
<br/>
<br/>
<br/>
<center>
 
<div class ="border"  >
                <br/>
                <img src="dti.png"  >

                <div class="col-md-6">
                    
                <form action="{{route('signin')}}" method="post">
                    <div class = "form-group">

                        <label for ="email"></label><br>
                        &nbsp &nbsp<img src="username.png"  width="40px" height="40px">

                        <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}"  placeholder="Username" style="text-align:left">
                    </div>
                      <div class = "form-group">
                        <label for ="password"></label>
                         &nbsp &nbsp<img src="password.png"  width="40px" height="40px">
                        <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}" placeholder="Password" style="text-align:left">
                    </div>
                    <br/>
                    &nbsp &nbsp <button type="submit" class="loginbutton "  >Login</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <br>
                    &nbsp &nbsp
                    <input type="checkbox" name="vehicle" value="Bike" style="font-family: railway" style="margin-right:20px "> Remember me
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="default.asp" target="_blank">Forgot Your Password?</a>

                  <br>
                  <br/>
                    <label for ="password" style="margin-left:-138px ">Don't have an account?</labe>&nbsp &nbsp &nbsp 
                 <a href="{{URL::to('src/css/remarks.html')}}" target="_blank" >Sign up</a>
                </form>
            </div>
    </div>
  
    </center>
@endsection

@section('signUp')
@if(count($errors) >0)
    <div class = "row">
        <div class = "col-md-4 col-md-offsett-4">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
<center>
<div class ="row">
        <div class="col-md-6">
        <br/>
                  <img src="dti.png"  >
                  <br/>
                  <form action="{{route('signup')}}" method="post">
                    <div class = "form-group ">
                    <br/>
                       &nbsp &nbsp &nbsp &nbsp <label for ="email" style="margin-left:-4px " > Email</label>
                       
                       <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}" placeholder="Email" style="text-align:left" >


                    </div>
                      <div class = "form-group">
                        <label for ="FirstName" style="margin-left:-2px ">First name</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}"  placeholder="First Name" style="text-align:left">
                    </div>
                     <div class = "form-group">
                        <label for ="LastName">Last name</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" value="{{Request::old('last_name')}}"  placeholder="Last Name" style="text-align:left">
                    </div>
                      <div class = "form-group">
                         &nbsp<label for ="password" style="margin-left:-2px "> Password</label>
                         <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}" placeholder="Password" >
                    </div>
                    <div class = "form-group">
                         &nbsp<label for ="password" style="margin-left:-56px ">Confirm Password</label>
                         <input class="form-control" type="password" name="conpassword" id="confirm_password" value="{{Request::old('password')}}" placeholder="Confirm Password" style="text-align:left">
                    </div><br/>
                    <div >
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                    <button type="submit" class="submitbutton " style="left:10; bottom: 15px;" > Submit</button>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <br/>
                    <br/>
                    <br/>
                    <label for ="downlabel"> @2017.|Procurement System</label></div>

                </form>

            </div>
    </div>
    </center>
@endsection