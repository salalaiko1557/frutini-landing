<?php

namespace App\Services;
use Mail;

class EmailNewDataSender{


    public function sendEmailToCustomer(array $customer)
    {
        Mail::send('emails.customer', ['customer' => $customer], function ($message) use ($customer) {
            $message->from('support@frutini.com.ua', 'Спасибо за заявку!');
            $message->to($customer['email'])->subject('Ваша заявка взята на обработку');
        });
    }

    public function sendEmailToAdmin(array $customer)
    {
        $email = env('MAIL_ADMIN');
        info($email);
        Mail::send('emails.admin', ['customer' => $customer], function ($message) use ($customer, $email) {
            $message->from('support@frutini.com.ua', 'Новая заявка!');
            $message->to($email)->subject('Новая заявка на frutini');
        });
    }
}