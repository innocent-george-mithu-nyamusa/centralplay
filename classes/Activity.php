<?php


namespace Classes;

use PDO;

class Activity extends Dbh
{

    private string $activityId;
    private string $activityName;
    private string $activityType;
    private string $activityResourceId;
    private string $activityOwner;

    /**
     * @param string $activityResourceId
     */
    public function setActivityResourceId(string $activityResourceId): void
    {
        $this->activityResourceId = $activityResourceId;
    }

    /**
     * @param string $activityType
     */
    public function setActivityType(string $activityType): void
    {
        $this->activityType = $activityType;
    }

    /**
     * @param string $activityName
     */
    public function setActivityName(string $activityName): void
    {
        $this->activityName = $activityName;
    }

    /**
     * @param string $activityId
     */
    protected function setActivityId(string $activityId): void
    {
        $this->activityId = $activityId;
    }


    /**
     * @param string $activityOwner
     */
    protected function setActivityOwner(string $activityOwner): void
    {
        $this->activityOwner = $activityOwner;
    }

    protected function createActivityStatus(): bool {
        return self::createActivity();
    }


    private function createActivity(): bool {
        try {
            $createActivityQuery = "INSERT INTO activity(activity_id, activity_name, activity_owner, activity_resource_id, activity_type)";
            $createActivityQuery .= "VALUES(:activityId, :activityName, :activityOwner, :activityResourceId, :activityType)";

            $createActivityStmt = $this->connect()->prepare($createActivityQuery);
            $createActivityStmt->bindParam(":activityId", $this->activityId);
            $createActivityStmt->bindParam(":activityName", $this->activityName);
            $createActivityStmt->bindParam(":activityOwner", $this->activityOwner);
            $createActivityStmt->bindParam(":activityResourceId", $this->activityResourceId);
            $createActivityStmt->bindParam(":activityType", $this->activityType);
            $result = $createActivityStmt->execute();
            $createActivityStmt->closeCursor();
            return $result;

        }catch (\Exception $exception) {
            echo "Failed to create activity". $exception->getMessage();
            return false;
        }
    }

    protected function getOwnerActivityStatus(): bool|array {
        return self::getOwnerActivity();
    }

    private function getOwnerActivity(): bool|array {
        try {
            $getActivityQuery = "SELECT * FROM (((activity INNER JOIN user ON user.user_id = activity.activity_resource_id) INNER JOIN lost_item ON lost_item.item_id = activity.activity_resource_id) INNER JOIN claim ON claim.claim_id = activity.activity_resource_id) WHERE activity.activity_owner=:activityOwner";
            $getActivityStmt = $this->connect()->prepare($getActivityQuery);
            $getActivityStmt->bindParam(":activityOwner", $this->activityOwner);
            $getActivityStmt->execute();
            $results = $getActivityStmt->fetchAll(PDO::FETCH_ASSOC);
            $getActivityStmt->closeCursor();
            return $results;
        }catch (\Exception $exception) {
            echo "Failed to get all user ". $exception->getMessage();
            return false;
        }
    }

    protected function getActivityOnUserItemsClaimedStatus(): bool|array {
        return self::getActivityOnUserItemsClaimed();
    }

    private function getActivityOnUserItemsClaimed(): bool|array {

        try {
            $getUserClaimedItemsQuery = "SELECT * FROM ((activity INNER JOIN JOIN user on activity.activity_owner = user.user_id) INNER JOIN claims ON claim.claim_user_id= activity.activity_owner) WHERE activity.activity_ower=:activityOwner ORDER BY activity.activity_date DESC LIMIT 15";
            $getUserClaimedItemsStmt = $this->connect()->prepare($getUserClaimedItemsQuery);
            $getUserClaimedItemsStmt->bindParam(":activityOwner", $this->activityOwner);
            $getUserClaimedItemsStmt->execute();
            $results = $getUserClaimedItemsStmt->fetchAll();
            $getUserClaimedItemsStmt->closeCursor();

            return $results;

        }catch (\Exception $exception){
            echo "failed to get actvity claims on User". $exception->getMessage();
        }
    }


    protected function getActivityOnUserItemLikesStatus(): bool|array {
        return self::getActivityOnUserItemLikes();
    }

    private function getActivityOnUserItemLikes(): bool|array {
        try {
            $getUserLikeItemsQuery = "SELECT * FROM ((activity INNER JOIN user on activity.activity_owner = user.user_id) INNER JOIN resource ON resource.claim_user_id=) WHERE activity.activity_ower=:activityOwner ORDER BY activity.activity_date DESC LIMIT 15";
            $getUserLikeItemsStmt = $this->connect()->prepare($getUserLikeItemsQuery);
            $getUserLikeItemsStmt->bindParam(":activityOwner", $this->activityOwner);
            $getUserLikeItemsStmt->execute();
            $results = $getUserLikeItemsStmt->fetchAll();
            $getUserLikeItemsStmt->closeCursor();

        }catch (\Exception $exception){
            echo "failed to get actvity claims on User". $exception->getMessage();
        }
    }



}