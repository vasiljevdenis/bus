<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
     
  public function index($arr)
  {
    print_r($arr);
    $data = [
      "subject"=>"Cambo Tutorial Mail",
      "body"=>$arr
      ];
    try
    {
      Mail::to('vasiljevdenis@bk.ru')->send(new MailNotify($data));
      return response()->json(['Great! Successfully send in your mail']);
    }
    catch(Exception $e)
    {
      return response()->json(['Sorry! Please try again later']);
    }
  } 
}