<?php


namespace Classes;


class RewardContr extends Reward
{

    protected function setCRewardItemId(string $rewardItemId): void
    {
        parent::setRewardItemId($rewardItemId); // TODO: Change the autogenerated stub
    }

    protected function setCRewardDispatcherId(string $rewardDispatcherId): void
    {
        parent::setRewardDispatcherId($rewardDispatcherId); // TODO: Change the autogenerated stub
    }

    protected function setCRewardId(): void
    {
        $rewardId = Utilities::genUniqueId("rew");
        parent::setRewardId($rewardId); // TODO: Change the autogenerated stub
    }

    protected function setCRewardAmount(float $rewardAmount): void
    {
        parent::setRewardAmount($rewardAmount); // TODO: Change the autogenerated stub
    }

}