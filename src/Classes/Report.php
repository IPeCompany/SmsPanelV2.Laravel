<?php

namespace Cryptommer\Smsir\Classes;

use Cryptommer\Smsir\Exceptions\HttpException;
use Cryptommer\Smsir\Objects\ReceiveResponse;
use Cryptommer\Smsir\Objects\ReportResponse;
use GuzzleHttp\Exception\GuzzleException;

class Report {

    /**
     * @var Smsir
     */
    private Smsir $smsir;

    /**
     * @param Smsir $smsir
     */
    public function __construct(Smsir $smsir) {
        $this->smsir = $smsir;
    }

    /**
     * get report of sent message
     *
     * @param int $message_id
     * @return ReportResponse
     * @throws HttpException
     * @throws GuzzleException
     */
    public function Message(int $message_id): ReportResponse {
        $response = $this->smsir->get('/v1/send/'.$message_id);
        return new ReportResponse($response);
    }

    /**
     * get report of sent pack messages
     *
     * @param string $pack_id
     * @return ReportResponse
     * @throws GuzzleException
     * @throws HttpException
     */
    public function Pack(string $pack_id): ReportResponse {
        $response = $this->smsir->get('/v1/send/pack/'.$pack_id);
        return new ReportResponse($response);
    }

    /**
     * get report of today messages sent
     *
     * @param int|null $pageSize
     * @param int|null $pageNumber
     * @return ReportResponse
     * @throws GuzzleException
     * @throws HttpException
     * @throws \JsonException
     */
    public function Today(int $pageSize = 10, int $pageNumber = 1): ReportResponse {
        $response = $this->smsir->get('/v1/send/live',[
            'pageSize' => $pageSize,
            'pageNumber' => $pageNumber,
        ]);
        return new ReportResponse($response);
    }

    /**
     * get report of archived messages sent
     *
     * @param int|null $fromDate
     * @param int|null $toDate
     * @param int $pageSize
     * @param int $pageNumber
     * @return ReportResponse
     * @throws GuzzleException
     * @throws HttpException
     */
    public function Archived(int $fromDate = null, int $toDate = null, int $pageSize = 10, int $pageNumber = 1): ReportResponse {
        $response = $this->smsir->get('/v1/send/archive',[
            'fromDate' => $fromDate,
            'toDate' => $toDate,
            'pageSize' => $pageSize,
            'pageNumber' => $pageNumber,
        ]);
        return new ReportResponse($response);
    }

    /**
     * get latest messages received
     *
     * @param int $count
     * @return ReceiveResponse
     * @throws GuzzleException
     * @throws HttpException
     * @throws \JsonException
     */
    public function LatestReceived(int $count = 100): ReceiveResponse {
        $response = $this->smsir->get('/v1/send/receive/latest',[
            'count' => $count
        ]);
        return new ReceiveResponse($response);
    }

    /**
     * get today received messages
     *
     * @param int $pageSize
     * @param int $pageNumber
     * @return ReceiveResponse
     * @throws GuzzleException
     * @throws HttpException
     * @throws \JsonException
     */
    public function TodayReceived(int $pageSize = 10, int $pageNumber = 1): ReceiveResponse {
        $response = $this->smsir->get('/v1/send/receive/live',[
            'pageSize' => $pageSize,
            'pageNumber' => $pageNumber
        ]);
        return new ReceiveResponse($response);
    }

    /**
     * get archived received messages
     *
     * @param int|null $fromDate
     * @param int|null $toDate
     * @param int $pageSize
     * @param int $pageNumber
     * @return ReceiveResponse
     * @throws GuzzleException
     * @throws HttpException
     * @throws \JsonException
     */
    public function ArchivedReceived(int $fromDate = null, int $toDate = null, int $pageSize = 10, int $pageNumber = 1): ReceiveResponse {
        $response = $this->smsir->get('/v1/send/archive',[
            'fromDate' => $fromDate,
            'toDate' => $toDate,
            'pageSize' => $pageSize,
            'pageNumber' => $pageNumber,
        ]);
        return new ReceiveResponse($response);
    }

}
