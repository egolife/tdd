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
        /**
         * Дата постановки	Приоритет	Описание	url / где	Стоимость	В проге	Статус	комментарий
         */
            return view('home');
        if ($request->user()->isAdmin()) {

        }

        return $this->client();
    }


    protected function admin()
    {

    }

    protected function client()
    {
        return view('client');
    }
}
