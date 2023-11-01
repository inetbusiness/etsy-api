<?php

// tests/ShopInfoDataTransferTest.php
use Etsy\ShopInfo;
use Etsy\ShopInfoDataTransfer;
use PHPUnit\Framework\TestCase;

class ShopInfoDataTransferTest extends TestCase
{
    public function testShopName()
    {
        $data = [ShopInfo::SHOP_NAME => 'ShopName'];
        $dataTransfer = new ShopInfoDataTransfer($data);
        $this->assertEquals('ShopName', $dataTransfer->getShopName());
    }

    public function testShopURL()
    {
        $data = [ShopInfo::SHOP_URL => 'ShopURL'];
        $dataTransfer = new ShopInfoDataTransfer($data);
        $this->assertEquals('ShopURL', $dataTransfer->getShopURL());
    }

    // Add other tests for shop-related properties here.
}
