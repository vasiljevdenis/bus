<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
     
  public function index($arr)
  {
    $data = [
      "subject"=>"New booking!",
      "body"=>$arr
      ];
    try
    {
      Mail::to('Grs.pro@bk.ru')->send(new MailNotify($data));
      return response()->json(['Great! Successfully send in your mail']);
    }
    catch(Exception $e)
    {
      return response()->json(['Sorry! Please try again later']);
    }
  } 
}