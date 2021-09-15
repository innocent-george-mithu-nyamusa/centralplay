<?php


namespace Classes;


use PDO;

class Resource extends Dbh
{
    private string $userId;
    private string $itemId;
    private string $resourceId;
    private bool $like;
    private bool $favorite;

    /**
     * @param string $itemId
     */
    protected function setItemId(string $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @param bool $favorite
     */
    protected function setFavorite(bool $favorite): void
    {
        $this->favorite = $favorite;
    }

    /**
     * @param bool $like
     */
    protected function setLike(bool $like): void
    {
        $this->like = $like;
    }

    /**
     * @param string $resourceId
     */
    protected function setResourceId(string $resourceId): void
    {
        $this->resourceId = $resourceId;
    }

    /**
     * @param string $userId
     */
    protected function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return bool
     */
    protected function createResourceStatus(): bool
    {
        return $this->createResource();
    }

    /**
     * @return bool
     */
    private function createResource(): bool
    {
        try {
            $createResourceQuery = "INSERT INTO resource (resource_id, resource_item_id, resource_user_id) VALUES (:resourceId, :resourceItemId, :resourceUserId)";
            $createResourceStmt = $this->connect()->prepare($createResourceQuery);
            $createResourceStmt->bindParam(":resourceId", $this->resourceId);
            $createResourceStmt->bindParam("resourceItemId", $this->itemId);
            $createResourceStmt->bindParam("resourceUserId", $this->userId);
            return $createResourceStmt->execute();
        } catch (\Exception $exception) {
            echo "Failed to create Item " . $exception->getMessage();
            return false;
        }
    }

    protected function updateLikeStatus(): bool
    {
        return $this->updateLike();
    }

    private function updateLike(): bool
    {
        try {
            $updateLikeQuery = "UPDATE resource SET resource_like='1' WHERE resource_item_id=:resourceItemId AND resource_user_id=:resourceUserId";
            $updateLikeStmt = $this->connect()->prepare($updateLikeQuery);
            $updateLikeStmt->bindParam(":resourceItemId", $this->itemId);
            $updateLikeStmt->bindParam(":resourceUserId", $this->userId);
            $result = $updateLikeStmt->execute();
            $updateLikeStmt->closeCursor();
            return $result;

        } catch (\Exception $exception) {
            echo "Failed to update Like " . $exception->getTraceAsString();
            return false;
        }
    }

    protected function updateUnLikeStatus(): bool
    {
        return $this->updateUnLike();
    }

    private function updateUnLike(): bool
    {
        try {
            $updateLikeQuery = "UPDATE resource SET resource_like='0' WHERE resource_item_id=:resourceItemId AND resource_user_id=:resourceUserId";
            $updateLikeStmt = $this->connect()->prepare($updateLikeQuery);
            $updateLikeStmt->bindParam(":resourceItemId", $this->itemId);
            $updateLikeStmt->bindParam(":resourceUserId", $this->userId);
            $result = $updateLikeStmt->execute();
            $updateLikeStmt->closeCursor();
            return $result;

        } catch (\Exception $exception) {
            echo "Failed to update Like " . $exception->getTraceAsString();
            return false;
        }
    }

    protected function updateViewStatus(): bool
    {
        return $this->updateView();
    }

    private function getCurrentViewCount(): int {
        try {
            $currentViewQuery = "SELECT resource_view FROM resource WHERE resource_item_id=:itemId AND resource_user_id=:resourceUserId";
            $currentViewStmt = $this->connect()->prepare($currentViewQuery);
            $currentViewStmt->bindParam(":itemId", $this->itemId);
            $currentViewStmt->bindParam(":resourceUserId", $this->userId);
            $currentViewStmt->execute();
            $results = $currentViewStmt->fetchAll(PDO::FETCH_ASSOC);
            return $results[0]["resource_view"];

        }catch (\Exception $exception){
            echo "failed to get item count".$exception->getMessage();
            return 0;
        }
    }

    private function updateView(): bool
    {
        try {
            $views = self::getCurrentViewCount() +1;
            $updateViewQuery = "UPDATE resource SET resource_view=:views WHERE resource_item_id=:itemId AND resource_user_id=:resourceUserId";
            $updateLikeStmt = $this->connect()->prepare($updateViewQuery);
            $updateLikeStmt->bindParam(":views", $views);
            $updateLikeStmt->bindParam(":itemId", $this->itemId);
            $updateLikeStmt->bindParam(":resourceUserId", $this->userId);
            return $updateLikeStmt->execute();
        } catch (\Exception $exception) {
            echo "Failed to update View " . $exception->getTraceAsString();
            return false;
        }
    }


    protected function updateFavoriteStatus(): bool
    {
        return $this->updateFavorite();
    }

    private function updateFavorite(): bool
    {
        try {
            $updateLikeQuery = "UPDATE resource SET resource_favorite=:favorite WHERE resource_item_id=:resourceItemId AND resource_user_id=:resourceUserId";
            $updateLikeStmt = $this->connect()->prepare($updateLikeQuery);
            $updateLikeStmt->bindParam(":favorite", $this->favorite);
            $updateLikeStmt->bindParam(":resourceItemId", $this->itemId);
            $updateLikeStmt->bindParam(":resourceUserId", $this->userId);
            return $updateLikeStmt->execute();
        } catch (\Exception $exception) {
            echo "Failed to update Like " . $exception->getMessage();
            return false;
        }
    }

    protected function getViewsStatus(): null|int
    {
        return $this->getViews();
    }

    private function getViews(): null|int
    {
        try {
            $getViewsQuery = "SELECT SUM(resource_view) FROM resource WHERE resource_item_id=:resourceItemId";
            $getViewsStmt = $this->connect()->prepare($getViewsQuery);
            $getViewsStmt->bindParam(":resourceItemId", $this->itemId);
            $getViewsStmt->execute();
            $results = $getViewsStmt->fetchColumn();
            $getViewsStmt->closeCursor();
            return $results;
        } catch (\Exception $exception) {
            echo "Failed to get views " . $exception->getMessage();
            return null;
        }
    }

    protected function getLikesStatus(): null|int
    {
        return $this->getLikes();
    }

    private function getLikes(): null|int
    {
        try {
            $getLikesQuery = "SELECT SUM(resource_like) FROM resource WHERE resource_item_id=:resourceItemId";
            $getLikesStmt = $this->connect()->prepare($getLikesQuery);
            $getLikesStmt->bindParam(":resourceItemId", $this->itemId);
            $getLikesStmt->execute();
            $results = $getLikesStmt->fetchColumn();
            $getLikesStmt->closeCursor();
            return $results;

        } catch (\Exception $exception) {
            echo "Failed to get views " . $exception->getMessage();
            return null;
        }
    }

    protected function hasUserLikedStatus(): bool
    {
        return $this->hasUserLiked();
    }

    private function hasUserLiked(): bool
    {
        try {
            $getLikesQuery = "SELECT COUNT(*) FROM resource WHERE resource_like='1' AND resource_user_id=:resourceUserId AND resource_item_id=:resourceItemId";
            $getLikesStmt = $this->connect()->prepare($getLikesQuery);
            $getLikesStmt->bindParam(":resourceUserId", $this->userId);
            $getLikesStmt->bindParam(":resourceItemId", $this->itemId);
            $getLikesStmt->execute();
            $user_number = $getLikesStmt->fetchColumn();
            $getLikesStmt->closeCursor();

            if ($user_number > 0) {
                return true;
            }
            return false;
        } catch (\Exception $exception) {
            echo "Failed to check if user ahs liked the item or not " . $exception->getMessage();
            return false;
        }
    }

    protected function hasUserReactedStatus(): bool
    {
        return $this->hasUserReacted();
    }

    private function hasUserReacted(): bool
    {
        try {
            $getUserIdQuery = "SELECT COUNT(*) FROM resource WHERE resource_user_id=:resourceUserId AND resource_item_id=:resourceItemId";
            $getUserIdStmt = $this->connect()->prepare($getUserIdQuery);
            $getUserIdStmt->bindParam(":resourceUserId", $this->userId);
            $getUserIdStmt->bindParam(":resourceItemId", $this->itemId);
            $getUserIdStmt->execute();
            $user_number = $getUserIdStmt->fetchColumn();
            $getUserIdStmt->closeCursor();
            if ($user_number > 0) {
                return true;
            }
            return false;
        } catch (\Exception $exception) {
            echo "Failed to check if user has reacted " . $exception->getMessage();
            return false;
        }
    }

}