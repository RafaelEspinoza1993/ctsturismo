<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index()
    {
       return view('app');
    }
    public function ChallengeOne($modelyear, $make, $model, Request $request){
        $withRating= $request->get("withRating");
        $result = new \stdClass();
        
        $data = GetVehiculo($modelyear, $make, $model);

        if ( $data->Count > 0) {
            if ($withRating) {
                $result->Count = $data->Count;
                for ($i = 0; $i < $data->Count; $i++) {
                    $Rating = GetRating($data->Results[$i]->VehicleId);
                    
                    $total[$i] = [
                        'CrashRating'   => $Rating->Results[0]->OverallRating,
                        'Description'   => $data->Results[$i]->VehicleDescription,
                        'VehicleId'     => $data->Results[$i]->VehicleId
                    ];
                }
                $result->Results = $total;
            }else{
                $result->Count = $data->Count;
                for ($i = 0; $i < $data->Count; $i++) {
                    $total[$i] = [
                        'Description' => $data->Results[$i]->VehicleDescription,
                        'VehicleId' => $data->Results[$i]->VehicleId
                    ];
                }
                $result->Results = $total;
            }
        }else{
            $result->Count = 0;
            $result->Results = [];
        }
       
        return response()->json($result);
    }
    public function ChallengeTwo(Request $request)
    {
        $result = new \stdClass();
        $modelyear= $request->get('modelYear');
        $make= $request->get('manufacturer');
        $model= $request->get('model');
        $data = GetVehiculo($modelyear, $make, $model);

        if ($data->Count > 0) {
            $result->Count = $data->Count;
            for ($i = 0; $i < $data->Count; $i++) {
                $total[$i] = [
                    'Description' => $data->Results[$i]->VehicleDescription,
                    'VehicleId' => $data->Results[$i]->VehicleId
                ];
            }
            $result->Results = $total;
        } else {
            $result->Count = 0;
            $result->Results = [];
        }

        return response()->json($result);
    }
}
