<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $contactItems= Contact::orderBy('created_at','desc')->get();
        return view('admin.contact.manage_contact',[
            'contacts' => $contactItems

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the request data
        $request->validate([
            "Facebook"=>"required",
            "Twitter"=>"required",
            "Instagram"=>"required",
            "LinkedIn"=>"required",
            "Telegram"=>"required",
            "Header"=>"required",
            "Body"=>"required",
            "location"=>"required",
            "Phone"=>"required|max:10",
            "Email"=>"required|email",
            "Tel"=>"required|max:10",

        ]);
        $new_contact= new Contact;
        $new_contact->FaceBook =$request->Facebook;
        $new_contact->Twitter=$request->Twitter;
        $new_contact->Instagram=$request->Instagram;
        $new_contact->LinkedIn=$request->LinkedIn;
        $new_contact->Telegram=$request->Telegram;
        $new_contact->Header=$request->Header;
        $new_contact->Body=$request->Body;
        $new_contact->location=$request->location;
        $new_contact->Phone=$request->Phone;
        $new_contact->Email=$request->Email;
        $new_contact->Tel=$request->Tel;
        $new_contact->save();
        return redirect('contact_items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $SingleContact=Contact::find($id);
        if($SingleContact){
            return view('admin.contact.show',[
                'single'=>$SingleContact
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       //Validate the request data
       $request->validate([
        "Facebook"=>"required",
        "Twitter"=>"required",
        "Instagram"=>"required",
        "LinkedIn"=>"required",
        "Telegram"=>"required",
        "Header"=>"required",
        "Body"=>"required",
        "location"=>"required",
        "Phone"=>"required|max:10",
        "Email"=>"required|email",
        "Tel"=>"required|max:10",

    ]);
 
        
        $existingContact=Contact::find($id);
        if ($existingContact){
            $existingContact->FaceBook =$request->Facebook;
            $existingContact->Twitter=$request->Twitter;
            $existingContact->Instagram=$request->Instagram;
            $existingContact->LinkedIn=$request->LinkedIn;
            $existingContact->Telegram=$request->Telegram;
            $existingContact->Header=$request->Header;
            $existingContact->Body=$request->Body;
            $existingContact->location=$request->location;
            $existingContact->Phone=$request->Phone;
            $existingContact->Email=$request->Email;
            $existingContact->Tel=$request->Tel;
            $existingContact->save();
              
            return redirect('contact_items');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingContact=Contact::find($id);
        if ($existingContact){
            $existingContact->delete();
            return redirect('contact_items');
        }
    }
}
