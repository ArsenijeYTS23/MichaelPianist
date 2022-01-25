<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Index;
use App\Biography;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
   
    function index(){
        $message='';
        if (request()->session()->has('message')){
            $message=session('message');
        }
        $newsletter='';
       if (request()->session()->has('status')) {
        $newsletter=session('status');
        }
        $lang='en';
        $contact_us='contact us';
        $own_compositiones='own compositions';
        $newsletter_text='please leave your email adress';
        $home=Index::where('id',1)->first();
        $bio=Biography::where('id',1)->first();
        $schedule= \App\Schedule::all();
        $videos= \App\Video::all();
        $compositions= \App\Compositions::all();
        $presses= \App\press::all();
        
        $photoses = \App\Photos::orderBy('album', 'DESC')
    ->orderBy('number', 'DESC')
    ->get();
       
      foreach ($photoses->sortByDesc('album') as $photo){
              If($photo->album !=''){
          $album[]=$photo->album;
    }
      }
        
     $albums= collect($album)->unique()->values(); 
        
        return view('index',compact('home','lang','bio','schedule','videos','compositions','presses','albums','photoses','newsletter','own_compositiones','message','newsletter_text','contact_us'));
    }
    function de(){
         $message='';
        if (request()->session()->has('message')){
            $message=session('message');
        }
         $newsletter='';
       if (request()->session()->has('status')) {
        $newsletter=session('status');
        }
        $lang='de';
        $contact_us='KONTAKTIERE UNS';
        $newsletter_text='Bitte hinterlassen Sie uns Ihre E-Mail-Adresse';
        $own_compositiones='EIGENE ZUSAMMENSETZUNGEN';
        $home=Index::where('id',2)->first();
        $bio=Biography::where('id',2)->first();
        $schedule= \App\De_Schedule::all();
        $videos= \App\Video::all();
        $compositions= \App\Compositions::all();
        $presses= \App\press::all();
        
        $photoses = \App\Photos::orderBy('album', 'DESC')
    ->orderBy('number', 'DESC')
    ->get();
        
         foreach ($photoses->sortByDesc('album') as $photo){
              If($photo->album !=''){
          $album[]=$photo->album;
    }
      }
        
     $albums= collect($album)->unique()->values(); 
        
        
        return view('index',compact('home','lang','bio','schedule','videos','compositions','presses','albums','photoses','newsletter','own_compositiones','message','newsletter_text','contact_us'));
    }
    function es(){
         $message='';
        if (request()->session()->has('message')){
            $message=session('message');
        }
         $newsletter='';
       if (request()->session()->has('status')) {
        $newsletter=session('status');
        }
        $lang='es';
        $contact_us='CONTÁCTENOS';
        $newsletter_text='Por favor déjenos su dirección de correo electrónico';
        $own_compositiones='composiciones propias';
        $home=Index::where('id',3)->first();
        $bio=Biography::where('id',3)->first();
        $schedule= \App\Es_Schedule::all();
        $videos= \App\Video::all();
        $compositions= \App\Compositions::all();
        $presses= \App\press::all();
        
          
        $photoses = \App\Photos::orderBy('album', 'DESC')
    ->orderBy('number', 'DESC')
    ->get();
        
         foreach ($photoses->sortByDesc('album') as $photo){
              If($photo->album !=''){
          $album[]=$photo->album;
    }
      }
        
     $albums= collect($album)->unique()->values(); 
        
        
        return view('index',compact('home','lang','bio','schedule','videos','compositions','presses','albums','photoses','newsletter','own_compositiones','message','newsletter_text','contact_us'));
    }
    function newsletter(Request $request){
        

       $validator = Validator::make($request->all(), [
                        'email'       => 'required|email'
                    ]);
        if ($validator->fails()) {
          
            $request->session()->flash('status', 'error! please, try again');
        } else {
        $request->all();
        $message= new \App\Email_message;
        $message->email=$request->email;
        $message->name='';
        $message->subject='';
        $message->message='';
        $message->save();
        $request->session()->flash('status', 'email adress sent');
        }
        
        return back();
    }
    function message(Request $request){
        $validator = Validator::make($request->all(), [
                        'email'       =>'required|email',
                        'name'        =>'required',
                        'message'    =>'required',
                        'subject'    =>'required'
                    ]);
        if ($validator->fails()) {
          
            $request->session()->flash('message', 'error! please try again');
        } else {
        $request->all();
        $message= new \App\Email_message;
        $message->email=$request->email;
        $message->name=$request->name;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->save();
        $request->session()->flash('message', 'message sent');
        }
        
        return Redirect::to(URL::previous() );
    }
}
