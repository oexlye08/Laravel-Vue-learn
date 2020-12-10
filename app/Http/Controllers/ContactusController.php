<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('web.contact', ['pages' => $pages]);
        // dd('wkkwkwk');
    }

    public function sendmessages(Request $request)
    {
        $input = $request->all();
        $pages = Page::all();

        $validate = $request->validate([
            'uname' => 'required|max:10',
            'email' => 'required|email',
            'messages' => 'required'
        ]);

        Mail::send('mails.contactus', ['nameInput' => $input['uname'], 'messageInput' => $input['messages']], function($m){
            $m->from('admin@localhost', 'Me');

            $m->to('user@localhost');
        });
        
        return view('web.contact', ['pages' => $pages])->with('successMessages', 'Thanks for your submitting, the messages has been sent!');
        // dd($input);
    }

    public function sendmessagesajax(Request $request)
    {
        $input = $request->all();

        dd($input);
    }
}
