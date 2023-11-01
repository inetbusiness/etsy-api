<?php

namespace Etsy;

class DataTransfer
{
    protected $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public static function fromResponseArray($response)
    {
        return new self($response);
    }

    public function toRequestArray()
    {
        return $this->data;
    }
}