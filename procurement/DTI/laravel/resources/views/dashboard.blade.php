@extends('layouts.master')

@section('textfields')
<form action="{{ route('post.procurements') }}" method ="post">
 <div class="row">
    <div class="col">
       <div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date</label>
  <div class="col-08">
    <input class="form-control" type="date" value="00-00-00" id="date" name="date">
  </div>
</div>
    </div>
    <div class="col">
       <div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">PR No.</label>
  <div class="col-08">
    <input class="form-control" type="date" value="00-00-00" id="prno" name="prno">
  </div>
</div>
    </div>
  </div>

   <div class="form-group">
    <label for="particulars">Particulars:</label>
    <textarea class="form-control" id="particulars" rows="3" name="particulars" placeholder="Particular"></textarea>
  </div>
 <div class="form-group row">
  <label for="daterequiredneeded" class="col-2">Date Required</label>
  <div class="col-10">
    <input class="form-control" type="date" value="00-00-00" id="daterequiredneeded" name="daterequiredneeded">
  </div>  
</div>
   <div class="form-group">
    <label for="total">Total</label>
    <input type="password" class="form-control" id="total" placeholder="Total" name="total">
  </div>
   <div class="form-group">
    <label for="requestingdivision">Requesting Division</label>
    <input type="password" class="form-control" id="requestingdivision" placeholder="Requesting Division" name="requestingdivision">
  </div>
  <div class="form-group">
    <label for="pono">PO No.</label>
    <input type="text" class="form-control" id="pono" placeholder="cannot be null" name="pono">
  </div>
  <div class="form-group">
    <label for="total">Total</label>
    <input type="password" class="form-control" id="total" placeholder="Total" name="total">
  </div>
<div class="form-group row">
  <label for="noticetoproceed" class="col-2 col-form-label">Notice to Proceed</label>
  <div class="col-08">
    <input class="form-control" type="date" value="00-00-00" id="noticetoproceed" name="noticetoproceed">
  </div>
</div>
<div class="form-group row">
  <label for="deliverycompletion" class="col-2 col-form-label">Delivery Completion</label>
  <div class="col-08">
    <input class="form-control" type="date" value="00-00-00" id="deliverycompletion" name="deliverycompletion">
  </div>
</div>
<div class="form-group row">
  <label for="acceptanceturnover" class="col-2 col-form-label">Acceptance/Turnover</label>
  <div class="col-08">
    <input class="form-control" type="date" value="00-00-00" id="acceptanceturnover" name="acceptanceturnover">
  </div>
</div>
  <div class="form-group">
    <label for="cino">CI No.</label>
    <input type="password" class="form-control" id="cino" placeholder="Ci No." name="cino">
  </div>
<div class="form-group row">
  <label for="accounting" class="col-2 col-form-label">Accounting</label>
  <div class="col-08">
    <input class="form-control" type="date" value="00-00-00" id="accounting" name="accounting">
  </div>
</div>
<div class="form-group row">
  <label for="cashier" class="col-2 col-form-label">Cashier</label>
  <div class="col-08">
    <input class="form-control" type="date" value="00-00-00" id="cashier" name="cashier">
  </div>
</div>
  <div class="form-group">
    <label for="numberofdayspodelivery">Number of days(PO-Delivery)</label>
    <input type="password" class="form-control" id="numberofdayspodelivery" placeholder="Po-Delivery" name="numberofdayspodelivery">
  </div>
  <div class="form-group">
    <label for="numberofdaysdeliverycashier">Number of days(Delivery-Cashier)</label>
    <input type="password" class="form-control" id="numberofdaysdeliverycashier" placeholder="Delivery-Cashier" name="numberofdaysdeliverycashier">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="hidden" value="{{Session::token()}}" name="_token">
</form>
@endsection

@section('post')
  <section class="row posts">
    <div class="col-md-6 col-md-3-offset">
      @foreach($postinfo as $postinfo)
        <article class ="postinfo">
       
          @if($postinfo->date === date('Y-m-d'))
          <p>DATE: {{$postinfo->date}}</p><br>
               <p>PRNO: {{$postinfo->prno}}</p>
          <p>DATE REQUIRED NEEDED: {{$postinfo->daterequiredneeded}}</p><br>
          <p>TOTAL: {{$postinfo->total}}</p><br>
          <p>REQUESTING DIVISION: {{$postinfo->requestingdivision}}</p><br>
          <p>NOTICE TO PROCEED: {{$postinfo->noticetoproceed}}</p><br>
          <p>DELIVERY COMPLETION: {{$postinfo->deliverycompletion}}</p><br>
           <div>
           </div>
           <div class ="interaction">
            <a href ="#">Edit</a>
            <a href ="{{route('post.delete',['postinfo_id'=>$postinfo->user_id])}}">Delete</a>
           </div>
        </article>
          @endif
       
       @endforeach
     </div>
     </section>
@endsection