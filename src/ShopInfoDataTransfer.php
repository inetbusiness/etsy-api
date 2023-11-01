<?php

namespace Etsy;

use Etsy;

class ShopInfoDataTransfer extends Etsy\DataTransfer
{
    public function getShopName()
    {
        return $this->data[Etsy\ShopInfo::SHOP_NAME];
    }

    public function getShopURL()
    {
        return $this->data[Etsy\ShopInfo::SHOP_URL];
    }

    // Add other shop-related getters here.
}