<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCounty;
use App\Models\Town;

class AjaxController extends Controller
{
    public function getSubCounties(Request $request){
        $data['data'] = SubCounty::where("county_id", $request->county_id)
            ->get(["name as text", "id"]);
        return response()->json($data);
    }

    public function getTowns(Request $request){
        $data['data'] = Town::where("sc_id", $request->sc_id)
            ->get(["name as text", "id"]);

        return response()->json($data);
    }
}
