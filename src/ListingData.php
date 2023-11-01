<?php

namespace Etsy;

use Etsy;

class ListingData extends Etsy\DTO
{
    const TITLE = 'title';
    const DESCRIPTION = 'description';

    public function getTitle()
    {
        return $this->data[self::TITLE];
    }

    public function getDescription()
    {
        return $this->data[self::DESCRIPTION];
    }

    // TODO: Add other listing-related constants and getters here.
}