<?php


namespace Classes;


use Exception;
use PDO;

class Reward extends Dbh
{

    private float $rewardAmount;
    private string $rewardId;
    private string $rewardItemId;
    private string $rewardDispatcherId;



    /**
     * @param string $rewardId
     */
    protected function setRewardId(string $rewardId): void
    {
        $this->rewardId = $rewardId;
    }

    /**
     * @param string $rewardItemId
     */
    protected function setRewardItemId(string $rewardItemId): void
    {
        $this->rewardItemId = $rewardItemId;
    }

    /**
     * @param string $rewardDispatcherId
     */
    protected function setRewardDispatcherId(string $rewardDispatcherId): void
    {
        $this->rewardDispatcherId = $rewardDispatcherId;
    }

    /**
     * @param float $rewardAmount
     */
    protected function setRewardAmount(float $rewardAmount): void
    {
        $this->rewardAmount = $rewardAmount;
    }

    protected function createRewardStatus(): bool
    {
        return $this->createReward();
    }

    private function createReward(): bool
    {

        try {
            $createRewardQuery = "INSERT INTO reward(reward_id, reward_item_id, reward_amount, reward_dispatcher_id) ";
            $createRewardQuery .= "VALUES(:rewardId, :rewardItemId, :rewardAmount, :rewardDispatcherId)";

            $createRewardStmt = $this->connect()->prepare($createRewardQuery);
            $createRewardStmt->bindParam(":rewardId", $this->rewardId);
            $createRewardStmt->bindParam(":rewardItemId", $this->rewardItemId);
            $createRewardStmt->bindParam(":rewardAmount", $this->rewardAmount);
            $createRewardStmt->bindParam(":rewardDispatcherId", $this->rewardDispatcherId);
            return $createRewardStmt->execute();
        } catch (Exception $exception) {
            echo $exception->getMessage();
            return false;
        }

    }

    protected function getAllRewardsStatus(): null|array
    {
        return $this->getAllRewards();
    }

    private function getAllRewards(): null|array
    {

        try {
            $allRewardsQuery = "SELECT * FROM reward";
            $allRewardsStmt = $this->connect()->prepare($allRewardsQuery);
            $allRewardsStmt->execute();
            return $allRewardsStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "failed to get all rewards" . $exception->getMessage();
            return null;
        }
    }

    protected function getClaimedRewardsStatus(): null|array
    {
        return $this->getClaimedRewards();
    }

    private function getClaimedRewards(): null|array
    {
        try {
            $allUnclaimedResultsQuery = "SELECT * FROM reward WHERE reward_status='claimed'";
            $allUnclaimedResultsStmt = $this->connect()->prepare($allUnclaimedResultsQuery);
            $allUnclaimedResultsStmt->execute();
            return $allUnclaimedResultsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get unclaimed " . $exception->getMessage();
            return null;
        }
    }

    protected function getUnclaimedRewardsStatus(): null|array
    {
        return $this->getUnclaimedRewards();
    }

    private function getUnclaimedRewards(): null|array
    {
        try {
            $allUnclaimedResultsQuery = "SELECT * FROM reward WHERE reward_status='unclaimed'";
            $allUnclaimedResultsStmt = $this->connect()->prepare($allUnclaimedResultsQuery);
            $allUnclaimedResultsStmt->execute();
            return $allUnclaimedResultsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get unclaimed " . $exception->getMessage();
            return null;
        }
    }

    protected function updateRewardStatus(): bool {
        return $this->updateReward();
    }

    private function updateReward(): bool {
        try {
            $updateRewardQuery = "UPDATE reward SET reward_amount=:rewardAmount, reward_dispatcher_id=:rewardDispatcherId WHERE reward_item_id=:rewardItemId";
            $updateRewardStmt = $this->connect()->prepare($updateRewardQuery);
            $updateRewardStmt->bindParam(":rewardAmount", $this->rewardAmount);
            $updateRewardStmt->bindParam(":rewardDispatcherId", $this->rewardDispatcherId);
            $updateRewardStmt->bindParam(":rewardItemId", $this->rewardItemId);
            return $updateRewardStmt->execute();
        }catch (Exception $exception) {
            echo "Failed to update Reward " . $exception->getMessage();
            return false;
        }
    }

}