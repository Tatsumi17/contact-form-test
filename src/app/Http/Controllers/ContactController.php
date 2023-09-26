<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function confirm(ContactRequest $request){
        $contact = $request->only(["last-name","first-name","gender","email","tel-first","tel-middle","tel-last","address","building","contact-content","detail"]);
        $contact["name"] = $contact["last-name"]." ". $contact["first-name"];
        $contact["tel"]=$contact["tel-first"].$contact["tel-middle"].$contact["tel-last"];
        return view("confirm",compact("contact"));
    }

    public function store(Request $request){
        $contact = $request->only(["name","gender","email","tel","address","building","contact-content","detail"]); 
        Contact::create($contact);
        return view("thanks");
    }
    public function admin(){
        $contacts = Contact::all();
        return view("admin",compact("contacts"));
    }
   
}
