@extends('layouts.profile')
@section('header-styles')
    <style>
        body {background:white;}
    </style>
@endsection
@section('content')
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div style="border:1px solid black;margin-top:50px;width:500px;height:600px;margin-left:500px;margin-right:500px;">
                <div style="background:#c00000;color:white;padding:10px;">Dear {{Auth::user()->name}} {{Auth::user()->last_name}}, your donation is SUCCESSFUL!<br/><br/>
                    <span style="color:black;">Please follow the instruction below to generate your receipt.</span></div><br/><br/>
                <div style="margin-left:10px;">
                <h3>STEP</h3>
                <span>1.Log into your email and click on inbox. Click on the mail from
                    act!onaid</span></div><br/>
                <div style="margin-left:10px;">
                    <h3>STEP</h3>
                    <span>2.Click on print receipt</span></div><br/>
                <div style="margin-left:10px;">
                    <h3>STEP</h3>
                    <span>3.To give next month, click on the link below print receipt.</span></div><br/><br/><br/>
                <h4 style="color:red;margin-left:20px;">THANK YOU FOR DONATING</h4>
            </div>
        </div>
    </div>

@endsection
