<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\dashboard;

class DashboardController extends Controller
{
 public function __construct()
 {
     $this->middleware('auth');
 }

public function index(){
$user = Auth::user();
$donations = $user->dashboard;
return view('dashboard',[
 'donations' => $donations,
]);
}
}
