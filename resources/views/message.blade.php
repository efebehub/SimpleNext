@extends('layouts.log')

@section('content')

<section class="vh-100 border-top border-info"
style="background-image: url('img/back1.jpg'); background-repeat: repeat;">>
  <div class="container-fluid vh-100">
    <div class="row" style="height: 100%;">

      <div class="col-4 text-white text-center pt-5 mt-5 mb-5 pb-5 shadow p-3 mb-5" 
           style="margin-left: auto; margin-right: auto;  z-index: 100; height: 70%; text-shadow: 2px 2px #006699; ">
           <h1> 
            <br/>
           {{ $xmsg }}  
           <br/>
           <br/>
           <b>{{ $xaut }}.-  </b>
           </h1>
           <br/>

           <br/>

           <img src="img/loading.gif" style="width: 15%; height: auto; opacity: 0.5;"/>

      </div>
      
    </div>
  </div>
</section>

@endsection