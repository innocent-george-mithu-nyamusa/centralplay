<?php


namespace Classes;


use Exception;
use PDO;

class Request extends Dbh
{
    private string $requestItemId;
    private string $requestItemName;
    private string $requestItemColor;
    private string $requestItemSerial;
    private string $requestItemDescription;
    private float $requestItemValue;
    private string $requestItemImage;
    private string $requestItemSubmitter;

    /**
     * @return string
     */
    protected function getRequestItemId(): string
    {
        return $this->requestItemId;
    }

    /**
     * @param string $requestItemSubmitter
     */
    protected function setRequestItemSubmitter(string $requestItemSubmitter): void
    {
        $this->requestItemSubmitter = $requestItemSubmitter;
    }

    /**
     * @param string $requestItemName
     */
    protected function setRequestItemName(string $requestItemName): void
    {
        $this->requestItemName = $requestItemName;
    }

    /**
     * @param string $requestItemId
     */
    protected function setRequestItemId(string $requestItemId): void
    {
        $this->requestItemId = $requestItemId;
    }

    /**
     * @param string $requestItemColor
     */
    protected function setRequestItemColor(string $requestItemColor): void
    {
        $this->requestItemColor = $requestItemColor;
    }

    /**
     * @param string $requestItemSerial
     */
    protected function setRequestItemSerial(string $requestItemSerial): void
    {
        $this->requestItemSerial = $requestItemSerial;
    }

    /**
     * @param string $requestItemDescription
     */
    protected function setRequestItemDescription(string $requestItemDescription): void
    {
        $this->requestItemDescription = $requestItemDescription;
    }

    /**
     * @param float $requestItemValue
     */
    protected function setRequestItemValue(float $requestItemValue): void
    {
        $this->requestItemValue = $requestItemValue;
    }

    /**
     * @param string $requestItemImage
     */
    protected function setRequestItemImage(string $requestItemImage): void
    {
        $this->requestItemImage = $requestItemImage;
    }

    protected function createItemRequestResult():bool {
        return $this->createItem();
    }

    private function createItem(): bool
    {

        try {
            $createItemQuery = 'INSERT INTO lost_item_request(
                              request_item_id,
                              item_name,
                              item_serial,
                              item_color,
                              item_description,
                              item_reward,
                              item_image, 
                              submitter_id,
                              ) ';

            $createItemQuery .= 'VALUES(
            :requestItemId,
       :requestItemName,
       :requestItemColor,
       :requestItemSerial,
       :requestItemDescription,
       :requestItemReward,
       :requestItemImage,
       :requestItemSubmitterId
       )';

            $createItemStmt = $this->connect()->prepare($createItemQuery);
            $createItemStmt->bindParam(':requestItemId', $this->requestItemId);
            $createItemStmt->bindParam(':requestItemName', $this->requestItemName);
            $createItemStmt->bindParam(':requestItemColor', $this->requestItemColor);
            $createItemStmt->bindParam(':requestItemSerial', $this->requestItemSerial);
            $createItemStmt->bindParam(':requestItemDescription', $this->requestItemDescription);
            $createItemStmt->bindParam(":requestItemReward", $this->requestItemValue);
            $createItemStmt->bindParam(':requestItemImage', $this->requestItemImage);
            $createItemStmt->bindParam(':requestItemSubmitterId', $this->requestItemSubmitter);
            return $createItemStmt->execute();
        } catch (Exception $exception) {

            echo "Failed to create Item Request \n" . $exception->getMessage();
            return false;
        }
    }

    protected function updateItemRequestResult():bool {
        return $this->updateItem();
    }

    private function updateItem(): bool
    {
        try {
            $updateItemQuery = "UPDATE lost_item_request
                            SET 
                              item_name=?,
                              item_serial=?,
                              item_color=?,
                              item_description=?,
                              item_reward=?,
                              item_image=? 
                            WHERE request_item_id = ?;
                            ";
            $updateItemStmt = $this->connect()->prepare($updateItemQuery);
            $updateItemStmt->bindValue(
                "sssssds", array(
                    $this->requestItemName,
                    $this->requestItemColor,
                    $this->requestItemSerial,
                    $this->requestItemDescription,
                    $this->requestItemImage,
                    $this->requestItemValue,
                    $this->requestItemId,
                )
            );
            return $updateItemStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to update Item:\n" . $exception->getMessage();
            return false;
        }

    }

    protected function deleteAllItemsRequestResult(): ?bool
    {
        return $this->deleteAllItems();
    }

    private function deleteAllItems(): bool
    {
        try {
            $allItemsDeleteQuery = "DELETE * FROM lost_item_request";
            $allItemsDeleteStmt = $this->connect()->prepare($allItemsDeleteQuery);
            return $allItemsDeleteStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to get delete item requests \n" . $exception->getMessage();
            return false;
        }

    }

    protected function getAllItemsRequestResult(): ?array
    {
        return self::getAllItemsRequests();
    }


    private function getAllItemsRequests(): ?array
    {
        try {
            $allItemsQuery = "SELECT * FROM lost_item_request";
            $allItemsStmt = $this->connect()->prepare($allItemsQuery);
            $allItemsStmt->execute();
            $result = $allItemsStmt->fetchAll(PDO::FETCH_ASSOC);
            $allItemsStmt->closeCursor();
            return $result;
        } catch (Exception $exception) {
            echo "Failed to get delete item requests \n" . $exception->getMessage();
            return null;
        }

    }
    protected function getAllClaimedRequestsStatus(): ?array
    {
        return self::getAllClaimedRequests();
    }

    private function getAllClaimedRequests(): ?array
    {
        try {
            $allItemsQuery = "SELECT * FROM lost_item_request WHERE item_request='claimed'";
            $allItemsStmt = $this->connect()->prepare($allItemsQuery);
            $allItemsStmt->execute();
            $result = $allItemsStmt->fetchAll(PDO::FETCH_ASSOC);
            $allItemsStmt->closeCursor();
            return $result;

        } catch (Exception $exception) {
            echo "Failed to get delete item requests \n" . $exception->getMessage();
            return null;
        }

    }

    protected function getCancelledRequestsStatus(): ?array
    {
        return self::getCancelledRequests();
    }

    private function getCancelledRequests(): ?array
    {
        try {
            $allItemsQuery = "SELECT * FROM lost_item_request WHERE item_request='cancelled'";
            $allItemsStmt = $this->connect()->prepare($allItemsQuery);
            $allItemsStmt->execute();
            $result = $allItemsStmt->fetchAll(PDO::FETCH_ASSOC);
            $allItemsStmt->closeCursor();
            return $result;

        } catch (Exception $exception) {
            echo "Failed to get delete item requests \n" . $exception->getMessage();
            return null;
        }

    }

    protected function getActiveRequestsResult(): ?array
    {
        return self::getActiveRequests();
    }

    private function getActiveRequests(): ?array
    {
        try {
            $allItemsQuery = "SELECT * FROM lost_item_request WHERE item_request='active'";
            $allItemsStmt = $this->connect()->prepare($allItemsQuery);
            $allItemsStmt->execute();
            $result = $allItemsStmt->fetchAll(PDO::FETCH_ASSOC);
            $allItemsStmt->closeCursor();
            return $result;

        } catch (Exception $exception) {
            echo "Failed to get delete item requests \n" . $exception->getMessage();
            return null;
        }

    }


    protected function deleteItemRequestResult(): ?bool
    {
        return $this->deleteItem();
    }

    private function deleteItem(): bool
    {
        try {
            $singleItemDeleteQuery = "DELETE FROM lost_item_request WHERE request_item_id=:id";
            $singleItemDeleteStmt = $this->connect()->prepare($singleItemDeleteQuery);
            $singleItemDeleteStmt->bindParam(":id", $this->requestItemId);
            return $singleItemDeleteStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to get delete Request item\n" . $exception->getMessage();
            return false;
        }
    }

    protected function getAllRequests(): ?array
    {
        return $this->getAllItems();
    }

    private function getAllItems(): ?array
    {
        try {
            $allClaimedItemsQuery = "SELECT * FROM lost_item_request";
            $allClaimedItemsStmt = $this->connect()->prepare($allClaimedItemsQuery);
            $allClaimedItemsStmt->execute();
            $results = $allClaimedItemsStmt->fetchAll(PDO::FETCH_ASSOC);
            $allClaimedItemsStmt->closeCursor();
            return $results;

        } catch (Exception $exception) {
            echo "Failed to get all results:\n" . $exception->getMessage();
            return null;
        }

    }

    protected function getSingeItemRequest(): ?array
    {
        return $this->getItem();
    }

    /**
     * @return array|null
     */
    private function getItem(): ?array
    {
        try {
            $singleItemQuery = "SELECT * FROM lost_item_request WHERE request_item_id=:id";
            $singleItemStmt = $this->connect()->prepare($singleItemQuery);
            $singleItemStmt->bindParam(":id", $this->requestItemId);
            $singleItemStmt->execute();
            return $singleItemStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Failed to get item request \n" . $exception->getMessage();
            return null;
        }
    }


}