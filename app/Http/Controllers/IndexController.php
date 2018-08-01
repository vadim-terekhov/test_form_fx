<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Session;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(){
        return view('data');
    }
    public function feedback_form(Request $request){
        session([
            'sumInv' => $request->sumInv,
            'mult' => $request->mult,
            'takeProfit' => $request->takeProfit,
            'stopLoss' => $request->stopLoss,
            'reduction' => $request->reductionv,
            'growth' => $request->growthv."we",
        ]);
    }
}
