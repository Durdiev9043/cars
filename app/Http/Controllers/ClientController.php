<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients=Client::all();
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
        $client->delete();
        return redirect()->back()->with('sucsess','O`chirildi');
    }
}
