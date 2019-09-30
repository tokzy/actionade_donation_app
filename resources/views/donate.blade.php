@extends('layouts.profile')
@section('header-styles')
    <style>
        body {background:white;}
    </style>
@endsection
@section('content')
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div style="margin-top:100px;width:500px;height:500px;margin-left:500px;margin-right:500px;background:#c00000;color:white;padding:10px;">
            <p style="text-align:center;">Note: Give Monthly sets up for you ‘Regular Giving’: a
                recurring Monthly debit on your payment-card as sign-on to
                Action Aids’s Social Justice support to the Rights of : Women
                & safe city, child & Girl’s to Education. Psychosocial support
                to displaced victims of insurgences Relief in emergencies and
                Building resilience of rural communities<br/><br/>
                While: Give Once is a ‘One-off’ Donation</p>
                <div style="background:#d0cece;padding:20px;height:280px;">
                <form>
                 <label for="donation_category">category</label>
                    <select class="form-control" id="donation_category">
                     <option>Give Monthly</option>
                        <option>Give Once</option>
                    </select>
                   <label>Amount(NGN)</label>
                    <select class="form-control" id="amount">
                        <option value="200000">2,000</option>
                        <option value="300000">3,000</option>
                        <option value="500000">5,000</option>
                        <option value="1000000">10,000</option>
                    </select>
                    <br/>
                </form>
                    <form>
                        <script src="https://js.paystack.co/v1/inline.js"></script>
                    <button type="button" class="btn btn-danger" name="donate" style="background:#c00000;padding:5px;width:200px;border-radius:5px 5px;color:white;" onclick="payWithPaystack()">Donate</button>

                    <script>
                        function payWithPaystack(){
                            var amount_field = document.getElementById('amount').value;
                            var category = document.getElementById('donation_category').value;
                            var handler = PaystackPop.setup({
                                key: 'pk_test_23c9d382228a12bfef2c6be73ae8a100e1c3059b',
                                email: '{{Auth::user()->email}}',
                                amount: parseInt(amount_field),
                                currency: "NGN",
                                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                metadata: {
                                    custom_fields: [
                                        {
                                            display_name: "Mobile Number",
                                            variable_name: "mobile_number",
                                            value: "+2348012345678"
                                        }
                                    ]
                                },
                                callback: function(response){
                                    alert('success. transaction ref is ' + response.reference);
                                    window.location = '/paymentsuccess/'+amount_field+'/'+category;
                                }
                                //onClose: function(){
                                  //  alert('window closed');
                               // }
                            });
                            handler.openIframe();
                        }
                    </script>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection
