<?php


namespace Classes;

use Classes\Utilities;

class ItemView extends ItemContr
{
    public function __construct()
    {

    }

    public function createItem(
        string $itemName,
        string $itemModel,
        string $itemColor,
        string $itemSerial,
        string $itemCategory,
        string $itemLocation,
        string $itemDescription,
        string $itemValue,
        string $itemImage,
        $imageTemp,
        string $itemCreaterId,
        float $additionalItemsNumber,
        string $finderName
    ):?bool
    {
        $imageName = Utilities::uploadPhoto($itemImage, $imageTemp, "item");
        if(!$imageName) {
            $imageName = $itemImage;
        }
        $this->addItemName($itemName);
        $this->addItemNomdel($itemModel);
        $this->addItemId();
        $this->addItemColor($itemColor);
        $this->addItemSerial($itemSerial);
        $this->addItemCategory($itemCategory);
        $this->addItemLocation($itemLocation);
        $this->addItemDescription($itemDescription);
        $this->addItemValue($itemValue);
        $this->addItemImage($imageName);
        $this->addItemCreaterId($itemCreaterId);
        $this->addItemAdditionalItemsNumber($additionalItemsNumber);
        $this->addItemFinderName($finderName);

        return $this->createItemResult();
    }


    public function updateItem(
        string $itemName,
        string $itemModel,
        string $itemColor,
        string $itemSerial,
        string $itemCategory,
        string $itemLocation,
        string $itemDescription,
        string $oldItemImage,
        string $itemImage,
        $imageTemp,
        string $itemCreaterId,
        string $itemId,
        float $additionalItemsNumber,
        string $finderName
    ): ?bool {
        Utilities::deletePhoto($oldItemImage, "item");
        $imageName = Utilities::uploadPhoto($itemImage, $imageTemp, "item");
        if(!$imageName) {
            $imageName = $itemImage;
        }
        $this->itemAddId($itemId);
        $this->addItemName($itemName);
        $this->addItemNomdel($itemModel);
        $this->addItemColor($itemColor);
        $this->addItemSerial($itemSerial);
        $this->addItemCategory($itemCategory);
        $this->addItemLocation($itemLocation);
        $this->addItemDescription($itemDescription);
        $this->addItemImage($imageName);
        $this->addItemCreaterId($itemCreaterId);
        $this->addItemAdditionalItemsNumber($additionalItemsNumber);
        $this->addItemFinderName($finderName);

        return $this->itemUpdateResult();
    }

    public function getItemId(): string
    {
        return parent::getItemId();
    }

    public function getUnclaimedItems() :?array {
        return $this->checkAllUnclaimedItems();
    }

    public function getAllNewUnclaimedItems() :?array {
        return $this->checkAllNewUnclaimedItems();
    }

    public function getAllClaimedItems() :?array{
        return $this->checkAllClaimedItems();
    }

    public function getAllItems():?array {
        return $this->checkAllItems();
    }

    public function getItem(string $id) :?array{
        $this->itemAddId($id);
        return $this->getSingeItem();
    }

    public function deleteItem(string $id): ?bool{
        $this->itemAddId($id);
        return $this->deleteItemResult();
    }

    public function deleteAllItems() :?bool {
        return $this->deleteAllItemsResult();
    }

    public function getAllCategoryItems(string $catId): bool|array {
        $this->addItemCategory($catId);
        return $this->getAllCategoryItemsResult();
    }

    public function getFewCategoryItems(string $catId): bool|array {
        $this->addItemCategory($catId);
        return $this->getFewCategoryItemsResult();
    }

    public function getUserCreatedItems(string $creatorId): ?array {
        $this->setCreaterId($creatorId);
        return parent::getUserCreatedItemsStatus();
    }

    public function getNumberOfItemsAddedByUser(string $createrId): int
    {
        $this->setCreaterId($createrId);
        return parent::getNumberOfItemsAddedByUserStatus();
    }

    public function searchResults(string $searchTerm): ?array {
        $this->setCSearchTerm($searchTerm);
        return parent::searchItemUnclaimedStatus();
    }
}