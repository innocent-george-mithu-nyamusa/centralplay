<?php


namespace Classes;


class UserSubscriptionView extends UserSubscriptionContr
{
    public function createUserSubscription(string $subscriptionPurpose, string $subscriptionType, string $subscriptionRId ,string $subscriberId): bool {

        $this->setCSubscriberId($subscriberId);
        $this->setCSubscriptionAmount($subscriptionPurpose);
        $this->setCSubscriptionId();
        $this->setCSubscriptionResourceId($subscriptionRId);
        $this->setCSubscriptionType($subscriptionType);

        return parent::createSubscriptionStatus();
    }


}