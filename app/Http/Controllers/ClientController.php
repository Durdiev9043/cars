<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $clients=Booking::all();
        return view('admin.client.index',['clients'=>$clients]);
    }

    public function create()
    {
        return view('admin.client.create');
    }

    public function store(Request $request)
    {
        Client::create($request->all());
        return redirect()->route('admin.client.index')->with('sucsess','saqlandi');
    }


    public function show($id)
    {
        //
    }


    public function edit(Client $client)
    {
        return view('admin.client.edit',['client'=>$client]);
    }


    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('admin.client.index')->with('sucsess','O`zgartirildi');

    }

    public function destroy(Client $client)
    {
//       Booking::all()->where('client_id',$client->id)->first()->delete();
//       $client->delete();
       if (Booking::all()->where('client_id',$client->id)->first()->delete()){
           if ($client->delete()){
               return redirect()->back()-with('success','Deleted');
           }
       }
    }
}
