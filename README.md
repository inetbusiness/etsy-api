Basic implementation of the Etsy API

### Install via Composer
edit **composer.json** file
```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/inetbusiness/etsy-api"
    }
],
```
and
```json
"require": {
    "inetbusiness/etsy-api": "^1.0.0"
},
```
```bash
composer install
```


### Simple usage

```php
$etsy = new \Etsy\API("12345678.097hym1q6g", "q4a5qsp7wkg4hjwojmwopign");

$listingData = new ListingDataTransfer([
    Etsy\ListingData::TITLE => 'Handcrafted Necklace',
    Etsy\ListingData::DESCRIPTION => 'Beautiful handmade necklace.',
    // Add other listing details.
]);
$newListing = $etsy->createListing($listingData);
print_r($newListing);

$listingId = 'listing_id';
$updatedData = new ListingDataTransfer([Etsy\ListingData::TITLE => 'Updated Necklace']);
$updatedListing = $etsy->updateListing($listingId, $updatedData);
print_r($updatedListing);

$shopInfoData = $etsy->getShopInfo(\Etsy\ShopInfo::SHOP_NAME);
$shopInfo = Etsy\ShopInfoDataTransfer::fromResponseArray($shopInfoData);
echo "Shop Name: " . $shopInfo->getShopName() . "\n";
echo "Shop URL: " . $shopInfo->getShopURL() . "\n";
```