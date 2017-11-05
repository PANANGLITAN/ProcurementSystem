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
                
                <img src="dti.png"  width="130px" height="70px">

                <div class="col-md-6">
                    
                <form action="{{route('signin')}}" method="post">
                    <div class = "form-group">
                        <label for ="email"></label><br>
                        <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}"  placeholder="Username" style="text-align:left">
                    </div>
                      <div class = "form-group">
                        <label for ="password"></label><br>
                        <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}" placeholder="Password" style="text-align:left">
                    </div>
                    <br/>
                    <button type="submit" class="loginbutton "  >Login</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <br>
                    <input type="checkbox" name="vehicle" value="Bike" style="font-family: railway" > Remember me
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="default.asp" target="_blank">Forgot Your Password?</a>

                  <br>
                    <label for ="password" >Dont have an account?</label>
                  &nbsp &nbsp &nbsp  <a href="default.asp" target="_blank">Sign up</a>
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
                  <img src="dti.png"  width="130px" height="70px">
                  <form action="{{route('signup')}}" method="post">
                    <div class = "form-group ">
                       &nbsp &nbsp &nbsp &nbsp <label for ="email" > Email</label>
                       
                       <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}" placeholder="Email" style="text-align:left" >


                    </div>
                      <div class = "form-group">
                        <label for ="FirstName">First name</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}"  placeholder="First Name" style="text-align:left">
                    </div>
                     <div class = "form-group">
                        <label for ="LastName">Last name</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" value="{{Request::old('last_name')}}"  placeholder="Last Name" style="text-align:left">
                    </div>
                      <div class = "form-group">
                         &nbsp<label for ="password"> Password</label>
                         <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}" placeholder="Password" style="text-align:left">
                    </div>
                    <div class = "form-group">
                         &nbsp<label for ="password">Confirm Password</label>
                         <input class="form-control" type="password" name="conpassword" id="confirm_password" value="{{Request::old('password')}}" placeholder="Confirm Password" style="text-align:left">
                    </div><br/>
                    <div >
                    <button type="submit" class="submitbutton " style="position: center; left:10; bottom: 15px;">Submit</button>

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