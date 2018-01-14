<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Mail;
 class MailController extends Controller
 {
     public function getSend()
     {
         $content='Hello!!';
         $data = ['name' => 'test', 'content'=> $content, ];
         Mail::send('email.test', $data, function($message){
             $message->subject('Laravel 5 Mail');
             $message->to('test@gmail.com', 'test');
             $message->from('test123@gmail.com', 'test123');
         });
     }
 }
