<?php
// tests/EtsyAPITest.php
use Etsy\ListingDataTransfer;
use PHPUnit\Framework\TestCase;

class APITest extends TestCase
{
    // Mock EtsyAPI and implement tests for its methods.
    // Ensure to use PHPUnit's mock features to simulate API responses.
    public function test()
    {
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
    }
}
