<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->isAdmin()) {
            return $this->admin();
        }

        return $this->client();
    }


    public function admin()
    {
        return view('home');
    }

    public function client()
    {
        return view('client');
    }
}
