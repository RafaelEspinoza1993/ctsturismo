<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index()
    {
       return view('app');
    }
    public function ChallengeOne(Request $request){
        
        $modelyear  = $request->input('modelyear');
        $make       = $request->input('make');
        $model      = $request->input('model');
        $result = new \stdClass();

        $data = requisito_1($modelyear, $make, $model);

        
        $result->Count = $data->Count;
        for ($i = 0; $i < $data->Count; $i++) {
            $total[$i] = [
                'Description' => $data->Results[$i]->VehicleDescription,
                'VehicleId' => $data->Results[$i]->VehicleId
            ];
        }
        $result->Results = $total;
        return response()->json($result);
    }
}
