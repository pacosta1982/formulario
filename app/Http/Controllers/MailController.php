<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function basic_email(){
        //$data = array('name'=>"Virat Gandhi");
        $data = array('name'=>"Virat Gandhi",
              'mensaje' => "Sos de la B Nelson");

        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('nmaidana@muvh.gov.py', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('pacosta@muvh.gov.py','Pedro Acosta');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
}
