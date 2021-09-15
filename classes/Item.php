<?php


namespace Classes;

use Exception;
use PDO;

class Item extends Dbh
{
    private string $itemId;
    private string $itemName;
    private string $itemModel;
    private string $itemColor;
    private string $itemSerial;
    private string $itemCategoryId;
    private string $itemRetrievalLocationName;
    private string $itemDescription;
    private string $itemValue;
    private string $itemImage;
    private string $itemUserCreaterId;
    private float $itemAdditionalItemsNumber;
    private string $itemFinderName;
    private string $searchTerm;


    /**
     * @param mixed $itemValue
     */
    public function setItemValue(string $itemValue): void
    {
        $this->itemValue = $itemValue;
    }

    /**
     * @return mixed
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param mixed $itemFinderName
     */
    public function setItemFinderName(string $itemFinderName): void
    {
        $this->itemFinderName = $itemFinderName;
    }

    /**
     * @param string $searchTerm
     */
    protected function setSearchTerm(string $searchTerm): void
    {
        $this->searchTerm = $searchTerm;
    }

    /**
     * @param mixed $itemAdditionalItemsNumber
     */
    protected function setItemAdditionalItemsNumber(float $itemAdditionalItemsNumber): void
    {
        $this->itemAdditionalItemsNumber = $itemAdditionalItemsNumber;
    }


    /**
     * @param $id
     */
    protected function setId($id)
    {
        $this->itemId = $id;
    }

    /**
     * @param $name
     */
    protected function setName($name)
    {
        $this->itemName = $name;
    }

    /**
     * @param $model
     */
    protected function setModel($model)
    {
        $this->itemModel = $model;
    }

    /**
     * @param $color
     */
    protected function setColor($color)
    {
        $this->itemColor = $color;
    }

    /**
     * @param $serial
     */
    protected function setSerial($serial)
    {
        $this->itemSerial = $serial;
    }

    /**
     * @param $category
     */
    protected function setCategory($category)
    {
        $this->itemCategoryId = $category;
    }

    /**
     * @param $location
     */
    protected function setLocationName($location)
    {
        $this->itemRetrievalLocationName = $location;
    }

    /**
     * @param $description
     */
    protected function setDescription($description)
    {
        $this->itemDescription = $description;
    }

    /**
     * @param $image
     */
    protected function setImage($image)
    {
        $this->itemImage = $image;
    }

    /**
     * @param $userId
     */
    protected function setCreaterId($userId)
    {
        $this->itemUserCreaterId = $userId;
    }

    /**
     * @return array|null
     */
    protected function AllUnclaimedItems(): ?array
    {
        return $this->getAllUnclaimedItems();
    }

    /**
     * @return array|null
     */
    private function getAllUnclaimedItems(): ?array
    {
        try {
            $allUnclaimedItemsQuery = "SELECT * FROM lost_item WHERE item_status='unclaimed'";
            $allUnclaimedItemsStmt = $this->connect()->prepare($allUnclaimedItemsQuery);
            $allUnclaimedItemsStmt->execute();
            return $allUnclaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get Unclaimed items\n" . $exception->getMessage();
            return null;
        }

    }

    protected function AllNewUnclaimedItems(): ?array
    {
        return $this->getAllNewUnclaimedItems();
    }

    private function getAllNewUnclaimedItems(): ?array
    {
        try {
            $allUnclaimedItemsQuery = "SELECT * FROM lost_item WHERE item_status='unclaimed' ORDER BY item_no DESC LIMIT 8";
            $allUnclaimedItemsStmt = $this->connect()->prepare($allUnclaimedItemsQuery);
            $allUnclaimedItemsStmt->execute();
            return $allUnclaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get Unclaimed items\n" . $exception->getMessage();
            return null;
        }

    }

    /**
     * @return array|null
     */
    protected function AllClaimedItems(): ?array
    {
        return $this->getAllClaimedItems();
    }

    /**
     * @return array|null
     */
    private function getAllClaimedItems(): ?array
    {
        try {
            $allClaimedItemsQuery = "SELECT * FROM lost_item WHERE item_status='claimed'";
            $allClaimedItemsStmt = $this->connect()->prepare($allClaimedItemsQuery);
            $allClaimedItemsStmt->execute();
            return $allClaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get claimed items\n" . $exception->getMessage();
            return null;
        }

    }

    protected function getSingeItem(): ?array
    {
        return $this->getItem();
    }

    /**
     * @return array|null
     */
    private function getItem(): ?array
    {
        try {
            $singleItemQuery = "SELECT * FROM lost_item WHERE item_id=:id";
            $singleItemStmt = $this->connect()->prepare($singleItemQuery);
            $singleItemStmt->bindParam(":id", $this->itemId);
            $singleItemStmt->execute();
            return $singleItemStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Failed to get claimed items\n" . $exception->getMessage();
            return null;
        }
    }

    /**
     * @return array|null
     */
    protected function AllItems(): ?array
    {
        return $this->getAllItems();
    }

    /**
     * @return array|null
     */
    private function getAllItems(): ?array
    {
        try {
            $allClaimedItemsQuery = "SELECT * FROM lost_item";
            $allClaimedItemsStmt = $this->connect()->prepare($allClaimedItemsQuery);
            $allClaimedItemsStmt->execute();
            return $allClaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Failed to get all results:\n" . $exception->getMessage();
            return null;
        }

    }

    /**
     * @return bool
     */
    protected function createItemResult(): bool
    {
        return $this->createItem();
    }

    private function createItem(): bool
    {

        try {
            $createItemQuery = 'INSERT INTO lost_item(
                 item_name,
                 item_model,
                 item_color,
                 item_id,
                 item_serial,
                 item_category,
                 item_retrieval_location_name, 
                 item_description,
                 item_value,
                 item_image, 
                 item_user_creater_id,
                 item_additional_number,
                      item_finder_name
                 ) ';
            $createItemQuery .= 'VALUES(
       :item_name,
       :item_model,
       :item_color,
       :item_id,
       :item_serial,
       :item_category,
       :item_retrieval_location_name,
       :item_description,
       :item_value
       :item_image,
       :item_user_creater_id,
       :item_additional_number,
       :item_finder_name
       )';

            $createItemStmt = $this->connect()->prepare($createItemQuery);
            $createItemStmt->bindParam(':item_name', $this->itemName);
            $createItemStmt->bindParam(':item_model', $this->itemModel);
            $createItemStmt->bindParam(':item_color', $this->itemColor);
            $createItemStmt->bindParam(':item_id', $this->itemId);
            $createItemStmt->bindParam(':item_serial', $this->itemSerial);
            $createItemStmt->bindParam(':item_category', $this->itemCategoryId);
            $createItemStmt->bindParam(':item_retrieval_location_name', $this->itemRetrievalLocationName);
            $createItemStmt->bindParam(':item_description', $this->itemDescription);
            $createItemStmt->bindParam(":item_value", $this->itemValue);
            $createItemStmt->bindParam(':item_image', $this->itemImage);
            $createItemStmt->bindParam(':item_user_creater_id', $this->itemUserCreaterId);
            $createItemStmt->bindParam(":item_additional_number", $this->itemAdditionalItemsNumber);
            $createItemStmt->bindParam(":item_finder_name", $this->itemFinderName);

            return $createItemStmt->execute();
        } catch (Exception $exception) {

            echo "Failed to create Item :\n" . $exception->getMessage();
            return false;
        }
    }

    /**
     * @return bool
     */
    protected function itemUpdateResult(): bool
    {
        return $this->updateItem();
    }

    /**
     * @return bool
     */
    private function updateItem(): bool
    {
        try {
            $updateItemQuery = "UPDATE lost_items 
                            SET 
                                item_name=?,
                                item_model=?,
                                item_color=?,
                                item_serial=?,
                                item_category=?,
                                item_retrieval_location_name=?, 
                                item_description=?, 
                                item_image=?,
                                item_additional_number=?,
                                item_finder_name=?
                            WHERE item_id = ?;
                            ";
            $updateItemStmt = $this->connect()->prepare($updateItemQuery);
            $updateItemStmt->bindValue(
                "ssssssssssds", array(
                    $this->itemName,
                    $this->itemModel,
                    $this->itemColor,
                    $this->itemSerial,
                    $this->itemCategoryId,
                    $this->itemRetrievalLocationName,
                    $this->itemDescription,
                    $this->itemImage,
                    $this->itemId,
                    $this->itemAdditionalItemsNumber,
                    $this->itemFinderName
                )
            );
            return $updateItemStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to update Item:\n" . $exception->getMessage();
            return false;
        }

    }

    protected function deleteItemResult(): ?bool
    {
        return $this->deleteItem();
    }

    private function deleteItem(): ?bool
    {
        try {
            $singleItemDeleteQuery = "DELETE FROM lost_item WHERE item_id=:id";
            $singleItemDeleteStmt = $this->connect()->prepare($singleItemDeleteQuery);
            $singleItemDeleteStmt->bindParam(":id", $this->itemId);
            return $singleItemDeleteStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to get delete item\n" . $exception->getMessage();
            return null;
        }
    }

    protected function deleteAllItemsResult(): ?bool
    {
        return $this->deleteAllItems();
    }

    private function deleteAllItems(): ?bool
    {
        try {
            $allItemsDeleteQuery = "DELETE * FROM lost_item";
            $allItemsDeleteStmt = $this->connect()->prepare($allItemsDeleteQuery);
            return $allItemsDeleteStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to get delete item\n" . $exception->getMessage();
            return null;
        }

    }

    protected function getNumberOfItemsInCategory(string $categoryId): bool|int
    {

        try {
            $itemsNumberQuery = "SELECT COUNT(item_id) as itemsNumber FROM lost_item WHERE category_id=:category_id";
            $itemsNumberStmt = $this->connect()->prepare($itemsNumberQuery);
            $itemsNumberStmt->bindParam(":category_id", $categoryId);
            $itemsNumberStmt->execute();
            $results = $itemsNumberStmt->fetchAll(PDO::FETCH_ASSOC);
            return $results[0]["itemsNumber"];
        } catch (Exception $exception) {
            echo "Failed to get number of items in category" . $exception->getMessage();
            return false;
        }

    }

    protected function getFewCategoryItemsResult(): bool|array
    {
        return $this->getFewCategoryItems();
    }

    private function getFewCategoryItems(): bool|array
    {
        try {
            $getCategoryItemsQuery = "SELECT * FROM lost_item WHERE item_category=:catId LIMIT 4";
            $getCategoryItemsStmt = $this->connect()->prepare($getCategoryItemsQuery);
            $getCategoryItemsStmt->bindParam(":catId", $this->itemCategoryId);
            $getCategoryItemsStmt->execute();
            return $getCategoryItemsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get items in category" . $exception->getMessage();
            return false;
        }
    }

    protected function getAllCategoryItemsResult(): bool|array
    {
        return $this->getAllCategoryItems();
    }

    private function getAllCategoryItems(): bool|array
    {
        try {
            $getCategoryItemsQuery = "SELECT * FROM lost_item WHERE item_category=:catId";
            $getCategoryItemsStmt = $this->connect()->prepare($getCategoryItemsQuery);
            $getCategoryItemsStmt->bindParam(":catId", $this->itemCategoryId);
            $getCategoryItemsStmt->execute();
            return $getCategoryItemsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get items in category" . $exception->getTraceAsString();
            return false;
        }
    }


    protected function getNumberOfItemsAddedByUserStatus(): int
    {
        return self::getNumberOfItemsAddedByUser();
    }

    private function getNumberOfItemsAddedByUser(): int
    {
        try {
            $getNumberOfItemsByUserQuery = "SELECT COUNT(*) FROM lost_item WHERE item_adder_id=:itemAdderId";
            $getNumberOfItemsByStmt = $this->connect()->prepare($getNumberOfItemsByUserQuery);
            $getNumberOfItemsByStmt->bindParam(":itemAdderId", $this->itemUserCreaterId);
            $getNumberOfItemsByStmt->execute();
            $number = $getNumberOfItemsByStmt->fetchColumn();
            $getNumberOfItemsByStmt->closeCursor();
            return $number;
        } catch (Exception $exception) {
            echo "Failed to get number of items by user " . $exception->getTraceAsString();
            return 0;
        }
    }

    protected function getUserCreatedItemsStatus(): ?array
    {
        return $this->getUserCreatedItems();
    }

    private function getUserCreatedItems(): ?array
    {

        try {

            $getUserItemsQuery = "SELECT * FROM lost_item WHERE item_adder_id=:itemCreaterId ORDER BY item_date_added DESC LIMIT 4";
            $getUserItemsStmt = $this->connect()->prepare($getUserItemsQuery);
            $getUserItemsStmt->bindParam(":itemCreaterId", $this->itemUserCreaterId);
            $getUserItemsStmt->execute();
            return $getUserItemsStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Failed to get items craeted by user" . $exception->getTraceAsString();
            return null;
        }
    }

    protected function searchItemUnclaimedStatus(): ?array {
        return self::searchUnclaimedItems();
    }

    private function searchUnclaimedItems(): ?array {
        try {
            $terms  = explode(" ", $this->searchTerm);
            $searchItemQuery = "SELECT * FROM lost_item ";
            $i = 1;
            foreach ($terms as $term) {

                if ($i == 1) {
                    $searchItemQuery .= "WHERE item_status='unclaimed' AND item_name LIKE '%$term%' OR item_model LIKE '%$term%' OR item_retrieval_location LIKE '%$term%' OR item_description LIKE '$$term%'";
                } else {
                    $searchItemQuery .= " OR item_name LIKE '%$term%' OR item_model LIKE '%$term%' OR item_retrieval_location LIKE '%$term%' OR item_description LIKE '%$term%'";
                }
                $i++;
            }
                $searchItemStmt = $this->connect()->prepare($searchItemQuery);
                $searchItemStmt->execute();
                $results =  $searchItemStmt->fetchAll(PDO::FETCH_ASSOC);
                $searchItemStmt->closeCursor();
                return $results;

        }catch (Exception $exception) {
            echo "Failed to get search item". $exception->getMessage();
            return null;
        }
    }

}

