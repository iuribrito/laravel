<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        echo 'not implemented';
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store()
    {

    }
}
