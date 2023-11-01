<?php

namespace Etsy;

use Etsy;

class ShopInfo extends Etsy\DTO
{
    const SHOP_NAME = 'shop_name';
    const SHOP_URL = 'shop_url';

    public function getShopName()
    {
        return $this->data[self::SHOP_NAME];
    }

    public function getShopURL()
    {
        return $this->data[self::SHOP_URL];
    }

    // TODO: Add other shop-related constants and getters here.
}