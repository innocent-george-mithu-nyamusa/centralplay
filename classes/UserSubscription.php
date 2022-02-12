<?php

namespace Classes;


use DateInterval;
use DateTime;
use Exception;

class UserSubscription extends Dbh
{
    private string $subscriptionId;
    private string $subscriberId;
    private string $subscriptionType;
    private float $subscriptionAmount;
    private string $subscriptionResourceId;

    /**
     * @param float $subscriptionAmount
     */
    protected function setSubscriptionAmount(float $subscriptionAmount): void
    {
        $this->subscriptionAmount = $subscriptionAmount;
    }

    /**
     * @param string $subscriptionResourceId
     */
    protected function setSubscriptionResourceId(string $subscriptionResourceId): void
    {
        $this->subscriptionResourceId = $subscriptionResourceId;
    }

    /**
     * @param string $subscriptionId
     */
    protected function setSubscriptionId(string $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * @param string $subscriberId
     */
    protected function setSubscriberId(string $subscriberId): void
    {
        $this->subscriberId = $subscriberId;
    }

    /**
     * @param string $subscriptionType
     */
    protected function setSubscriptionType(string $subscriptionType): void
    {
        $this->subscriptionType = $subscriptionType;
    }

    protected function createSubscriptionStatus(): bool {
        return $this->createSubscription();
    }

    private function createSubscription() :bool {

        try {
            $dateCreate = new DateTime('now');
            $dateExpired = new DateTime("now");

            $dateExpired = $dateExpired->add(new DateInterval('P30D'));

            $dateCreate = $dateCreate->format("Y-m-d");
            $dateExpired = $dateExpired->format("Y-m-d");

            $addSubQuery = "INSERT INTO subscription (subscription_id, subscription_date, subscription_amount, subscription_resource_id, subscription_type, subscription_expiration, subscriber_id) VALUES(:subscriptionId, :subscriptionDate, :subscriptionAmount,:subscriptionResourceId, :subscriptionType, :subscriptionExpiration, :subscriberId)";

            $addSubStmt = $this->connect()->prepare($addSubQuery);
            $addSubStmt->bindParam(":subscriptionId", $this->subscriptionId);
            $addSubStmt->bindParam(":subscriptionDate", $dateCreate);
            $addSubStmt->bindParam(":subscriptionAmount", $this->subscriptionAmount);
            $addSubStmt->bindParam(":subscriptionResourceId", $this->subscriptionResourceId);
            $addSubStmt->bindParam(":subscriptionType", $this->subscriptionType);
            $addSubStmt->bindParam(":subscriptionExpiration", $dateExpired);
            $addSubStmt->bindParam(":subscriberId", $this->subscriberId);
            $result = $addSubStmt->execute();
            $addSubStmt->closeCursor();

            return $result ;
        }catch (Exception $exception) {

            echo "failed to create subscription " . $exception->getMessage();
            return false;
        }
    }


}