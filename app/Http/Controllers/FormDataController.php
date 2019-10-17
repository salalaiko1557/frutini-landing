<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use View;

class FormDataController extends Controller
{
    public function phoneDataHandler(Request $request)
    {
        //Validate
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'name_msngrs' => 'required',
            'mobile_number_mesenger' => 'required'
            ]);
            info($data);
        //Save to DB
        // DB::table('customers')->insert(
        //    [
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'mobile_call' => $data['mobile_number'],
        //     'messager' => $data['name_msngrs'],
        //     'mobile_messager' => $data['mobile_number_mesenger']
        //    ]
        // );
    }
}
