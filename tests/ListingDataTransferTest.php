<?php
// tests/ListingDataTransferTest.php
use Etsy\ListingData;
use Etsy\ListingDataTransfer;
use PHPUnit\Framework\TestCase;

class ListingDataTransferTest extends TestCase
{
    public function testTitle()
    {
        $data = [ListingData::TITLE => 'Title'];
        $dataTransfer = new ListingDataTransfer($data);
        $this->assertEquals('Title', $dataTransfer->getTitle());
    }

    public function testDescription()
    {
        $data = [ListingData::DESCRIPTION => 'Description'];
        $dataTransfer = new ListingDataTransfer($data);
        $this->assertEquals('Description', $dataTransfer->getDescription());
    }

    // Add other tests for listing-related properties here.
}
