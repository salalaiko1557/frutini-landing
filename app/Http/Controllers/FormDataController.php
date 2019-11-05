<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use View;
use DB;
use App\Services\GoogleSheetsHandler;
use App\Services\EmailNewDataSender;

class FormDataController extends Controller
{

    private $google_sheets_handler;

    public function __construct(GoogleSheetsHandler $google_sheets_handler, EmailNewDataSender $mail)
    {
            $this->google_sheets_handler = $google_sheets_handler;
            $this->mail = $mail;
    }

    public function phoneDataHandler(Request $request)
    {
        info($request->all());
        //Validate
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'name_msngrs' => 'required',
            'mobile_number_mesenger' => 'required',
            'partner_type' => 'required'
            ]);
        //Save to DB
        DB::table('customers')->insert(
           [
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
            'name_msngrs' => $data['name_msngrs'],
            'mobile_number_mesenger' => $data['mobile_number_mesenger'],
            'partner_type' => $data['partner_type'],
            'created_at' => date("Y-m-d H:i:s")
           ]
        );
        //Save in GoogleSheet
        $this->google_sheets_handler->saveToGoogleSheet($data);
        //Send emails for customer and admin
        $this->mail->sendEmailToCustomer($data);
        $this->mail->sendEmailToAdmin($data);
    }
}
