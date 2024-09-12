<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['contactList']=Contacts::all();
        return view('contacts.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact=new Contacts;
        $contact->title=$request->title;
        $contact->first_name=$request->first_name;
        $contact->last_name=$request->last_name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->destination=$request->destination;
        $contact->opinion=$request->opinion;
        $contact->save();
        return redirect('/contacts');
    }

    /**
     * Display the specified resource.
     */
    public function detail(Contacts $contacts)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['alldata']=Contacts::find($id);

        return view('contacts.edit',$data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $contact=Contacts::find($id);
        $contact->title=$request->title;
        $contact->first_name=$request->first_name;
        $contact->last_name=$request->last_name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->destination=$request->destination;
        $contact->opinion=$request->opinion;
        $contact->save();
        return redirect('/contacts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletecontact($id)
    {
        
        $data=Contacts::find($id);
        $data->delete();
        return redirect('/contacts');
    }
}
