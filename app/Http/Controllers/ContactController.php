<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function address(Request $request)
    {

        $this->validate($request, [
            'address' => ['string', 'required']
        ]);
        $contact = new Contact();
        $contact->address = $request['address'];
        $data = array(
            'address' => $contact->address,
        );
        Contact::where('id', '1')->update($data);
        return redirect()->back()->with('status', 'Address Update Sucessfully');
    }

    public function telephone(Request $request)
    {

        $this->validate($request, [
            'telephone1' => ['string', 'required'],
            'telephone2' => ['string', 'required'],
            'telephone3' => ['string', 'required']
        ]);
        $contact = new Contact();
        $contact->telephone1 = $request['telephone1'];
        $contact->telephone2 = $request['telephone2'];
        $contact->telephone3 = $request['telephone3'];
        $data = array(
            'telephone1' => $contact->telephone1,
            'telephone2' => $contact->telephone2,
            'telephone3' => $contact->telephone3,
        );
        Contact::where('id', '1')->update($data);
        return redirect()->back()->with('status', 'Telephone Numbers Update Sucessfully');
    }


    public function email(Request $request)
    {

        $this->validate($request, [
            'email1' => ['string', 'required', 'email'],
            'email2' => ['string', 'required', 'email'],
            'email3' => ['string', 'required', 'email'],
        ]);
        $contact = new Contact();
        $contact->email1 = $request['email1'];
        $contact->email2 = $request['email2'];
        $contact->email3 = $request['email3'];
        $data = array(
            'email1' => $contact->email1,
            'email2' => $contact->email2,
            'email3' => $contact->email3,
        );
        Contact::where('id', '1')->update($data);
        return redirect()->back()->with('status', 'Email Update Sucessfully');
    }

    public function social(Request $request)
    {

        $this->validate($request, [
            'facebook' => ['string', 'required'],
            'linkedin' => ['string', 'required'],
            'instagram' => ['string', 'required'],
            'twitter' => ['string', 'required'],
            'youtube' => ['string', 'required'],
            'whatsapp' => ['string', 'required'],
        ]);
        $contact = new Contact();
        $contact->facebook = $request['facebook'];
        $contact->linkedin = $request['linkedin'];
        $contact->instagram = $request['instagram'];
        $contact->twitter = $request['twitter'];
        $contact->youtube = $request['youtube'];
        $contact->whatsapp = $request['whatsapp'];
        $data = array(
            'facebook' => $contact->facebook,
            'linkedin' => $contact->linkedin,
            'instagram' => $contact->instagram,
            'twitter' => $contact->twitter,
            'youtube' => $contact->youtube,
            'whatsapp' => $contact->whatsapp,
        );
        Contact::where('id', '1')->update($data);
        return redirect()->back()->with('status', 'Email Update Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Contact $contact)
    // {

    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
