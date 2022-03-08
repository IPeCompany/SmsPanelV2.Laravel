<?php

namespace Cryptommer\Smsir\Classes;

use Cryptommer\Smsir\Exceptions\HttpException;
use Cryptommer\Smsir\Objects\BulkResponse;
use Cryptommer\Smsir\Objects\LikeToLikeResponse;
use Cryptommer\Smsir\Objects\Parameters;
use Cryptommer\Smsir\Objects\ScheduleResponse;
use Cryptommer\Smsir\Objects\VerifyResponse;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;

class Send {

    private $smsir;

    /**
     * @param Smsir $smsir
     */
    public function __construct(Smsir $smsir) {
        $this->smsir = $smsir;
    }

    /**
     * send bulk message
     *
     * @param $message string
     * @param $mobiles string[]
     * @param $send_at int|null unixtime
     * @param int|null $line_number
     * @return BulkResponse
     * @throws HttpException|GuzzleException|JsonException
     */
    public function Bulk(string $message, array $mobiles, int $send_at = null, int $line_number = null): BulkResponse
    {
        $response = $this->smsir->post('/v1/send/bulk', [
            'lineNumber' => $line_number ?? $this->smsir->LineNumber,
            'MessageText' => $message,
            'Mobiles' => $mobiles,
            'SendDateTime' => $send_at
        ]);
        return new BulkResponse($response);
    }

    /**
     * send like to like message
     * mobiles and messages counts must be equal
     *
     * @param array $messages
     * @param array $mobiles
     * @param int|null $send_at
     * @param int|null $line_number
     * @return LikeToLikeResponse
     * @throws HttpException|GuzzleException|JsonException
     */
    public function LikeToLike(array $messages, array $mobiles, int $send_at = null, int $line_number = null): LikeToLikeResponse
    {
        $response = $this->smsir->post('/v1/send/likeToLike', [
            'lineNumber' => $line_number ?? $this->smsir->LineNumber,
            'MessageTexts' => $messages,
            'Mobiles' => $mobiles,
            'SendDateTime' => $send_at
        ]);
        return new LikeToLikeResponse($response);
    }

    /**
     * delete scheduled messages with message pack id
     *
     * @param $PackId
     * @return ScheduleResponse
     * @throws HttpException|GuzzleException|JsonException
     */
    public function deleteScheduled($PackId): ScheduleResponse {
        $response = $this->smsir->delete('/v1/send/scheduled/'.$PackId);
        return new ScheduleResponse($response);
    }

    /**
     * send verification message
     *
     * @param string $mobile
     * @param int $template_id
     * @param Parameters[] $parameters
     * @return VerifyResponse
     *@throws HttpException|GuzzleException|JsonException
     */
    public function Verify(string $mobile, int $template_id, array $parameters): VerifyResponse {
        $response = $this->smsir->post('/v1/send/verify', [
            'Mobile' => $mobile,
            'TemplateId' => $template_id,
            'Parameters' => $parameters,
        ]);
        return new VerifyResponse($response);
    }
}
