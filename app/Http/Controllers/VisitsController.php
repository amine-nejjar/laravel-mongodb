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
        $visit->ip = \Request::ip();
        $visit->save();     
        echo '<h1>your information have been saved !!</h1>';
    }
    public function show()
    {
        $visits=Visits::get(['datetime','ip']);
        foreach ($visits as $visit) {
            unset($visit->_id);
        }
        return response()->json($visits);
    }
}
