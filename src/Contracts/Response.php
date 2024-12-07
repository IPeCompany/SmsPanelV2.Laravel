<?php

namespace Cryptommer\Smsir\Contracts;

interface Response
{
    public function getData();

    public function getMessage();

    public function getStatus();
}
