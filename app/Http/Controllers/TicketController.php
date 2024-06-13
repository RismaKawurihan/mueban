<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => "Ticket and Time",
        ];
        return view('ticket', $data);
    }

    public function table ()
  {

  }
}
