@extends('layouts.profile')
@section('header-styles')
    <style>
        body {background:#c00000;}
    </style>
@endsection
@section('content')
<div class="w3-row-padding">
 <div class="w3-col m12">
   <div style="text-align:center;margin-top:300px;">
 <h2>Welcome! {{Auth::user()->name.' '.Auth::user()->last_name}}<br/>
 To get started, click on the menu bar
 </h2>
 </div>
 </div>
</div>
















<!--    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>



                <div class="card-body">


          You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
