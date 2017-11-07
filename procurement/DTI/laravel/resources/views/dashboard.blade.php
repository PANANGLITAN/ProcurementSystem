@extends('layouts.master')

@section('textfields')

<script type="text/javascript" >
$(document).ready(function()
{
$("#button4").click(function()
{
$("#notification_count").fadeOut("slow");
return false;
});

 
</script>
</br>

<div class="container">

<header>
  <table width="100%" height="100px" bgcolor="white" border="0">
  <tr>
    <td width="10%">
 <img src="dti.png"  >
    </td>
     <td>
      <h2>Department of Trade and Industry XI</h2>
      <h3>Procurement System</h3>
    </td>

    
  </tr>
</table>
   

</header>
  
<nav>
  
   <a href="{{URL::to('src/css/home.html')}}" target="myIframe"  ><button class="button button1" style="height:50px;width:160px"><h3>Home</h3></button></a>
   
   <a href="{{URL::to('src/css/task.html')}}" target="myIframe"  ><button class="button button2" style="height:50px;width:160px"><h3>Add Procurement</h3></button></a>
    
   <a href="{{URL::to('src/css/remarks.html')}}" target="myIframe"  ><button class="button button3" style="height:50px;width:160px"><h3>Remarks</h3></button></a>

   <span id="notification_count">1</span>


   <a href="{{URL::to('src/css/notification.html')}}" target="myIframe"  ><button class="button button4" style="height:50px;width:160px" id="button4"><h3>Notifications</h3></button></a>

    <a href="{{route('Logout')}}"  ><button class="button button5" style="height:50px;width:160px"><h3>Logout</h3></button></a>
   
  
  
</nav>

<article>
<table width="100%" height="30px" bgcolor="#3173AD">
  <tr>
    <td width="70%">
    &nbsp &nbsp
<h2 ><font color="white" > &nbsp  Procurement 2017</font></h2>
    </td>
    <td >
  <input class="form-control" type="text" name="search" id="seach" value="{{Request::old('email')}}"  placeholder="Search" style="text-align:left">
 
    </td>
    <td width="10%">
     <img src="search.png"  height="8%" >

    </td>
  </tr>
</table>

 <table width = "100%" border = "0" name="mytable" >    
          <td colspan = "10" bgcolor = "" width = "100%" height= "502px"> 
          <iframe  name="myIframe"  frameborder="0" width="100%" height="100%" src="{{URL::to('src/css/home.html')}}">
            
          </iframe> 
          </td>

</table>

</article>

<footer >@2017. | Procurement System</footer>

</div>
@endsection