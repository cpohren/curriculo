<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CurriculoController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke()
    {
        return view('curriculo');
    }
}