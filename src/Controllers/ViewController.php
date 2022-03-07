<?php

namespace Cryptommer\Smsir\Controllers;

use Cryptommer\Smsir\Classes\Smsir;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

class ViewController extends Controller {

    public function SendBulk(Request $request) {
        return view('Smsir::sendbulk')->with([
            'status' => $request->get('status'),
            'message' => $request->get('message')
        ]);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Cryptommer\Smsir\Exceptions\HttpException
     * @throws \JsonException
     */
    public function TodayReceived(Request $request) {
        $report = (new Smsir())->Report();
        $response = $report->TodayReceived($request->get('page_size'), $request->get('page_number'));
        return view('Smsir::todayreceived', [
            'received' => $response->Data
        ]);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Cryptommer\Smsir\Exceptions\HttpException
     * @throws \JsonException
     */
    public function TodaySent(Request $request) {
        $report = (new Smsir())->Report();
        $response = $report->Today($request->get('page_size'), $request->get('page_number'));
        return view('Smsir::todaysent', [
            'received' => $response->Data
        ]);
    }

}
