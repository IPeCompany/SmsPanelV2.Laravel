<?php

namespace Cryptommer\Smsir\Controllers;

use Cryptommer\Smsir\Classes\Smsir;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

class ViewController extends Controller {

    public function sendbulk(Request $request) {
        return view('smsir::sendbulk')->with([
            'status' => $request->get('status'),
            'message' => $request->get('message')
        ]);
    }

    public function received(Request $request) {
        $report = (new Smsir())->Report();
        $response = $report->TodayReceived($request->get('page_size'), $request->get('page_number'));
        return view('smsir::received', [
            'received' => $response->Data
        ]);
    }
}
