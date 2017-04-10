<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Message;
use Form;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function insertOne(Request $request)
  {
    $message = new Message;
    $message->name = $request->name;
    $message->prenom = $request->prenom;
    $message->email = $request->email;
    $message->content = $request->content;
    $message->save();
    return redirect('/home');
  }

  public function message()
{
  $messages = Message::all();
    return view('message', ['messages'=>$messages]);
  }
}
