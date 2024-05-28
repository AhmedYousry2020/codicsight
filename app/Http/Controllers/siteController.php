<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Notifications\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
   /**
    * index function for show home page
    */
    // public function __construct()
    // {
    //     $lang = Session::get('lang', 'en');
    //     app()->setLocale($lang);
    // }

   public function index()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);

    return view('index');
   }
   public function contact()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);

    return view('contact');
   }
   public function about()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);

    return view('about');
   }

   public function services()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);

    return view('services');
   }

   public function serviceDetails(string $key)
   {
    $data = Config('serviceData.data.'.$key);
    return view('service-single',compact('data'));
   }
   public function contactUs(ContactRequest $request)
   {
        $data = $request->validated();
        $users= [];
        $info = array('msg'=>$data['message']);
        Mail::send('mail', $info , function($message) use ($data) {
            $message->to('info@raus.sa', 'raus')->subject
               ('New Message');
            $message->from($data['email'], $data['name']);
         });
        return redirect()->back()->with('success', __('general.Send Successfully'));
   }
}
