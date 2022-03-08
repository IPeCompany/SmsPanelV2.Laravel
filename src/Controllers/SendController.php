<?php

namespace Cryptommer\Smsir\Controllers;

use Cryptommer\Smsir\Classes\Smsir;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

class SendController extends Controller {

    private $smsir;

    public function __construct(){
        $this->smsir = new Smsir();
    }

    public function sendbulk(Request $request) {
        $mobiles = explode(PHP_EOL,$request->get('mobiles'));
        $message = $request->get('message');
        $response = $this->smsir->Send()->Bulk($message,$mobiles);
        return view('Smsir::sendbulk')->with([
            'status' => $response->Status,
            'message' => $response->Message
        ]);
    }
}
