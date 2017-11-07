@extends('layouts.master')

@section('post')
  <section class="row posts">
    <div class="col-md-6 col-md-3-offset">
      <header><h3>Post<h3></header>
      @foreach($postinfo as $postinfo)
        <article class ="post">
          <p>DATE: {{$postinfo->date}}</p><br>
          <p>PRNO: {{$postinfo->prno}}</p>
          <p>DATE REQUIRED NEEDED: {{$postinfo->daterequiredneeded}}</p><br>
          <p>TOTAL: {{$postinfo->total}}</p><br>
          <p>REQUESTING DIVISION: {{$postinfo->requestingdivision}}</p><br>
          <p>NOTICE TO PROCEED: {{$postinfo->noticetoproceed}}</p><br>
          <p>DELIVERY COMPLETION: {{$postinfo->deliverycompletion}}</p><br>
           <div>
            Posted by {{ $postinfo->user->first_name }} on {{$postinfo->user->created_at}}
           </div>
           <div class ="interaction">
            <a href ="#">Edit</a>
            <a href ="{{route('post.delete',['postinfo_id'=>$postinfo->user_id])}}">Delete</a>
           </div>
        </article>
       @endforeach
     </div>
     </section>
@endsection