<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visits;

class VisitsController extends Controller
{
    public function save()
    {
        $visit=new Visits();
        $visit->datetime = date('Y-m-d H:i:s');
        $visit->ip = \Request::getClientIp();
        $visit->save();     
        echo '<h1 style="text-align:center;">your information have been saved !</h1>';
    }
    public function show()
    {
        $visits=Visits::get(['datetime','ip']);
        foreach ($visits as $visit) {
            unset($visit->_id);
        }
        return response()->json($visits);
    }
    public function home(){
        echo '<h1 style="text-align:center;">welcome ! try accessing show and save methods.</h1>';
    }
}
