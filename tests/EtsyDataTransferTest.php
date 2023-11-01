<?php
// tests/EtsyDataTransferTest.php
use Etsy\DataTransfer;
use PHPUnit\Framework\TestCase;

class EtsyDataTransferTest extends TestCase
{
    public function testToRequestArray()
    {
        $data = ['key' => 'value'];
        $dataTransfer = new DataTransfer($data);
        $this->assertEquals($data, $dataTransfer->toRequestArray());
    }

    public function testFromResponseArray()
    {
        $data = ['key' => 'value'];
        $dataTransfer = DataTransfer::fromResponseArray($data);
        $this->assertEquals($data, $dataTransfer->toRequestArray());
    }
}
