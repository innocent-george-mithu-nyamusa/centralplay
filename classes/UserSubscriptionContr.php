<?php


namespace Classes;


class UserSubscriptionContr extends UserSubscription
{
    protected function setCSubscriberId(string $subscriberId): void
    {
        parent::setSubscriberId($subscriberId);
    }

    protected function setCSubscriptionAmount(string $use): void
    {

        switch ($use) {
            case "rtgs":
                $subscriptionAmount = 420.0;
                parent::setSubscriptionAmount($subscriptionAmount);
                break;
            default:
                $subscriptionAmount = 3.0;
                parent::setSubscriptionAmount($subscriptionAmount);
                break;
        }
    }

    protected function setCSubscriptionId(): void
    {
        $subscriptionId = Utilities::genUniqueId("res");
        parent::setSubscriptionId($subscriptionId);
    }

    protected function setCSubscriptionResourceId(string $subscriptionResourceId): void
    {
        parent::setSubscriptionResourceId($subscriptionResourceId);
    }

    protected function setCSubscriptionType(string $subscriptionType): void
    {
        parent::setSubscriptionType($subscriptionType);
    }
}