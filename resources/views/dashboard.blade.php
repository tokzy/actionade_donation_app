@extends('layouts.profile')
@section('header-styles')
 <style>
 body {background:#c00000;}
 </style>
 @endsection
@section('content')
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div style=" text-align:center;margin-top:200px;">
                <table class="w3-table-all" style="width:50%;margin-left:400px;margin-right:400px;">
                    <thead>
                    <tr style="background:#a5a5a5;color:white;">
                        <th>S/N</th>
                        <th>Donation Category</th>
                        <th>Date</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    {{$count = 1}}
                    @foreach($donations as $donation)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$donation->donation_category}}</td>
                        <td>{{date('d-M-Y',strtotime($donation->created_at))}}</td>
                        <td>{{'NGN'.$donation->amount}}</td>
                    </tr>
                   @endforeach
                </table>
                </h2>
            </div>
        </div>
    </div>

















@endsection
