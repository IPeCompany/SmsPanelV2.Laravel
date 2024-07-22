<?php

namespace Cryptommer\Smsir\Notifications;

class SmsirMessage
{

    public $template_id;

    public $parameters;

    public function __construct($template_id = null, $parameters = null) {
        $this->template_id = $template_id;
        $this->parameters = $parameters;
    }

    public function template_id($template_id) {
        $this->template_id = $template_id;
        return $this;
    }

    public function parameters(array $parameters) {
        $this->parameters = $parameters;
        return $this;
    }

}