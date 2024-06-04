<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;

class ServiceController extends Controller
{
    public function index()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.index');
    }
    public function web()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.webMobile');
    }

    public function ecommerce()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.ecommerce');
    }

    public function ui()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.uiUX');
    }

    public function seo()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.seo');
    }

    public function public()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.publicRelations');
    }

    public function social()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.social');
    }

    public function content()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.contentMarketing');
    }

    public function branding()
    {
        header('Cache-Control: public, max-age=604800');
        return view('services.branding');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:contacts|string|max:255',
            'email' => 'required|email|dns|unique:contacts|string|max:255',
            'phone' => 'required|unique:contacts|max:13',
            'subject' => 'required|string|unique:contacts|max:255',
            'message' => 'required|string|max:1000',
        ]);
        
        $contact = new Contact();
        $contact->name = htmlspecialchars($request->input('name'), ENT_QUOTES, 'UTF-8');
        $contact->email = htmlspecialchars($request->input('email'), ENT_QUOTES, 'UTF-8');
        $contact->phone = htmlspecialchars($request->input('phone'), ENT_QUOTES, 'UTF-8');
        $contact->subject = htmlspecialchars($request->input('subject'), ENT_QUOTES, 'UTF-8');
        $contact->message = htmlspecialchars($request->input('message'), ENT_QUOTES, 'UTF-8');
        $contact->save();
        Notification::route('mail', [
            'webshopmedia01@gmail.com' => 'Alert! New Contact request from website',
        ])->notify(new ContactNotification($contact));
        return redirect()->back()->with('status', 'One of our team would get back to you. Thank you!');
    }

  
}
