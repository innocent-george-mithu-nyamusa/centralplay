<?php


namespace Classes;


class ItemContr extends Item
{
    protected $cleaner;
    private $cItemName;
    private $cItemModel;
    private $cItemId;
    private $cItemColor;
    private $cItemSerial;
    private $cItemCategory;
    private $cItemLocation;
    private $cItemDescription;
    private $cItemValue;
    private $cItemImage;
    private $cItemCreaterId;

    public function __construct()
    {

    }

    protected function addItemValue($itemValue){
        $this->cItemValue = Utilities::cleanData($itemValue);
        $this->checkItemValue();
    }

    private function checkItemValue(){
        $this->setItemValue($this->cItemValue);
}

    protected function addItemName($itemName)
    {
        $this->cItemName = Utilities::cleanData($itemName);
        $this->checkItemName();
    }

    private function checkItemName()
    {
        $this->setName($this->cItemName);
    }

    protected function addItemNomdel($itemModel)
    {
        $this->cItemModel = Utilities::cleanData($itemModel);
        $this->checkItemModel();
    }

    private function checkItemModel()
    {
        $this->setModel($this->cItemModel);
    }

    protected function addItemId()
    {
        $this->cItemId = $this->createItemId();
        $this->setId($this->cItemId);
    }

    protected function itemAddId($id){
        $id =Utilities::cleanData($id);
        $this->setId($id);
    }

    private function createItemId(): string
    {
        return Utilities::genUniqueId("itm");
    }

    protected function addItemColor($color)
    {
        $this->cItemColor = Utilities::cleanData($color);
        $this->checkItemColor();
    }

    private function checkItemColor()
    {
        $this->setColor($this->cItemColor);
    }

    protected function addItemSerial($serial)
    {
        $this->cItemSerial = Utilities::cleanData($serial);
        $this->checkItemSerial();
    }

    private function checkItemSerial()
    {
        $this->setSerial($this->cItemSerial);
    }

    protected function addItemCategory($category)
    {
        $this->cItemCategory = Utilities::cleanData($category);
        $this->checkCategory();
    }

    private function checkCategory()
    {
        $this->setCategory($this->cItemCategory);
    }

    protected function addItemLocation($location)
    {
        $this->cItemLocation = Utilities::cleanData($location);
        $this->checkLocation();
    }

    private function checkLocation()
    {
        $this->setLocationName($this->cItemLocation);
    }

    protected function addItemDescription($description)
    {
        $this->cItemDescription = Utilities::cleanData($description);
        $this->checkDescription();
    }

    private function checkDescription()
    {
        $this->setDescription($this->cItemDescription);
    }

    protected function addItemImage($image)
    {
        $this->cItemImage = Utilities::cleanData($image);
        $this->checkImage();
    }

    private function checkImage()
    {
        if($this->cItemImage == null) {
            $this->cItemImage = "placeholder.png";
        }

        $this->setImage($this->cItemImage);
    }

    protected function addItemCreaterId($id)
    {
        $this->cItemCreaterId = Utilities::cleanData($id);
        $this->checkUserCreaterId();
    }

    private function checkUserCreaterId()
    {
        $this->setCreaterId($this->cItemCreaterId);
    }

    public function addItemFinderName($itemFinderName): void
    {
        parent::setItemFinderName($itemFinderName); // TODO: Change the autogenerated stub
    }

    protected function addItemAdditionalItemsNumber($itemAdditionalItemsNumber): void
    {
        $this->setItemAdditionalItemsNumber($itemAdditionalItemsNumber);
    }

    protected function checkAllUnclaimedItems(): ?array
    {
        return $this->AllUnclaimedItems();
    }

    protected function checkAllNewUnclaimedItems(): ?array
    {
        return $this->AllNewUnclaimedItems();
    }

    protected function checkAllClaimedItems(): ?array
    {
        return $this->AllClaimedItems();
    }
    protected function checkAllItems(): ?array{
        return $this->AllItems();

    }

    protected function setCSearchTerm(string $searchTerm): void
    {
        $searchTerm = Utilities::cleanData($searchTerm);
        parent::setSearchTerm($searchTerm);
    }
}