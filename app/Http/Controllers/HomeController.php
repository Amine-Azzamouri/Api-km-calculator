<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('dashboard');
            }

            else if ($usertype=='admin')
            {
                return view('admin.adminhome');
            }

            else {
                return redirect()->back();
            }
        }
    }

    public function miles(Request $request)
    {
        $pick = str_replace(' ', '', $request->input('pickupAddress'));
        $delivery = str_replace(' ', '', $request->input('deliveryAddress'));
    
        $api_key = 'bqXR5q8e345vwH6zqC2QfXeWqQzTLhvgBmfEoUBlBPX4Cih4tfLmK56Ax3IYqY2j';
    
        $url = 'https://api.distancematrix.ai/maps/api/distancematrix/json?origins=' . urlencode($pick) . '&destinations=' . urlencode($delivery) . '&key=' . $api_key;
    
        $mileage_result = file_get_contents($url);
    
        $mileage_result = json_decode($mileage_result);
    
        if ($mileage_result->status === "OK") {
            $mileage = $mileage_result->rows[0]->elements[0]->distance->text;
    
            $clean_miles = (float) preg_replace('/[^0-9.]+/', '', $mileage);
    
            $result = $pick . ' to ' . $delivery . ' is ' . $mileage . ' apart. 2.15 per mile = ' . (2.15 * $clean_miles) . ' 1.95 per mile = ' . (1.95 * $clean_miles);
    
            dd($result);
        } else {
            dd("Error occurred: " . $mileage_result->status);
        }
    }
    
}

