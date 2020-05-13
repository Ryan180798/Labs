<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function edit(){
        
        $contact = Contact::find(1);

        if ($contact != null) {
            return view('admin/page-home/contact/index', compact('contact'));
         } 
            else {
            return view('admin/page-home/contact/index'); 
            }
    }



    public function update(){

        $contact = Contact::find(1);

        if ($contact != null) {

                    $contact->titre_contact = request('titre_contact');
                    $contact->info1_contact = request('info1_contact');
                    $contact->info2_contact = request('info2_contact');
                    $contact->info3_contact = request('info3_contact');
                    $contact->button_contact = request('button_contact');

                    $contact->save();
                    return redirect()->route('admin');
                }


            
            else {
                $contact = new Contact();

                $contact->titre_contact = request('titre_contact');
                $contact->sous_titre_contact = request('sous_titre_contact');
                $contact->info1_contact = request('info1_contact');
                $contact->info2_contact = request('info2_contact');
                $contact->info3_contact = request('info3_contact');
                $contact->button_contact = request('button_contact');
        
                $contact->save();
        
                return redirect()->route('admin');

            }
    }
}