<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatecontactRequest;
use App\Models\contact;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Input;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact= 
        contact::all();
         return view('home', ['contact'=>$contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
            $validator =  Validator::make($request->all(), [
         
                     'contact' => 'required|unique:contacts|size:9',
                      'name' => 'required|min:5',
                      'email'=> 'required|unique:contacts|email:rfc,dns'
                     

            
        ]);
        if($validator->fails()){
         
            return Redirect::back()->withInput()->withErrors($validator);
        }
       
       $contact= new contact();
        $contact->name= $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
  
        $contact->save();
          \Session::flash('success', 'The contact  '. $contact->name .' has ben created');

       
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact= contact::find($id);
         return view('show', ['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $contact= contact::find($id);
         return view('edit', ['contact'=>$contact]);
    }

    
public function update(Request $request)
{
    
            $validator =  Validator::make($request->all(), [
         
                     'contact' => 'required|size:9',
                      'name' => 'required|min:5',
                      'email'=> 'required|email:rfc,dns'
                     

            
        ]);
        if($validator->fails()){
         
            return Redirect::back()->withInput()->withErrors($validator);
        }
       
       $contact=  contact::find($request->id);
        $contact->name= $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;

        $contact->save();
          \Session::flash('success', 'The contact  '. $contact->name .' has ben updated');

       
        return Redirect::to('/');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        
         $contact= contact::findOrFail($id);
      $contact->delete();
          \Session::flash('success', 'The contact  '. $contact->name .' has ben deleted');
           return Redirect::to('/');
    }
}
