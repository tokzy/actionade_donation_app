<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\dashboard;
use Auth;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaymentsuccessController extends Controller
{
 public function __construct()
 {
  $this->middleware('auth');
 }

 function index($amount,$category){
  $username = Auth::user()->name.' '.Auth::user()->last_name;
  $email = Auth::user()->email;
  $user_donations = new dashboard();
  $user_donations->user_id = Auth::user()->id;
  $user_donations->amount = $amount;
  $user_donations->donation_category = $category;
  $user_donations->save();
     $data = array('name'=>"".$username."");
     Mail::send('mail', $data, function($message) {
         $message->to('netsage23@gmail.com', 'Act!onade Donation')->subject
         ('Donation successful');
         $message->from('isaiahtokunbo11@gmail.com','Act!onaid');
     });
  return redirect('useralert');
 }
}
