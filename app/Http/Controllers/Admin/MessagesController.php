<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use Mail;
use App\Mail\NewContact;
use App\Mail\Autoresponder;

class MessagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['store']]);
        $this->middleware('can:messages.index')->only('index');
        $this->middleware('can:messages.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('id', 'DESC')->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $message = Message::create($request->all());
        //Enviar correo con los datos de contacto
        Mail::to('emmanuel@kukulha.com')->send(new NewContact($message));
        //Enviar correo de confirmación al usuario
        Mail::to($message->email)->send(new Autoresponder($message));
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id)->delete();
        return redirect()->back()->with('info', 'Mensaje eliminado correctamente');
    }
}
