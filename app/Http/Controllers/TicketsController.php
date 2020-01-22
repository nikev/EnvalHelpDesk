<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\EnvMail;

class TicketsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request->all();

       /* $this->validate($request,[
            'cat_incident' => 'required',
            'niveau_sev'   => 'required',
            'description'  => 'required'
          ]);*/

            $ticket = new Ticket;
            $ticket->id= Auth::id();
            $ticket->cat_incident= request('categorie');
            $ticket->niveau_sev = request('niv_sev');
            $ticket->description = request('description');
            $ticket->save();

       // return (" ticket créé avec succès");
      $data = array(
            'cat'   =>  $request->categorie,
            'niv'   =>  $request->niv_sev,
            'descr' =>  $request->description,
            'id'    => Auth::id(),
            'user_name'=> Auth::user()->name,
            'serv'=> $request->serv
        );
        Mail::to('helpdesk@email.com')->send(new EnvMail($data));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
