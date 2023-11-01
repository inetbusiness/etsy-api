<?php

namespace Etsy;

class ListingDataTransfer extends DataTransfer
{
    public function getTitle()
    {
        return $this->data[ListingData::TITLE];
    }

    public function getDescription()
    {
        return $this->data[ListingData::DESCRIPTION];
    }

    // Add other listing-related getters here.
}


