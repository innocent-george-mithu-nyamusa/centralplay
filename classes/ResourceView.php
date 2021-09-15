<?php


namespace Classes;


class ResourceView extends ResourceContr
{
    public function createResource(string $itemId, string $userId): bool
    {
        $this->setCResourceId();
        $this->setCUserId(userId: $userId);
        $this->setCItemId(itemId: $itemId);
        return parent::createResourceStatus();
    }

    public function updateLikes(string $userId, string $itemId): bool
    {

        $this->setCUserId(userId: $userId);
        $this->setCItemId(itemId: $itemId);
        return parent::updateLikeStatus();
    }

    public function updateUnLikes(string $userId, string $itemId): bool
    {


        $this->setCUserId(userId: $userId);
        $this->setCItemId(itemId: $itemId);
        return parent::updateUnLikeStatus();
    }


    public function getItemLikes($itemId): null|int
    {
        $this->setCItemId(itemId: $itemId);
        return parent::getLikesStatus();
    }


    public function updateFavorite(bool $favorite, string $itemId, string $userId): bool
    {
        $this->setCFavorite(favorite: $favorite);
        $this->setCItemId(itemId: $itemId);
        $this->setCUserId(userId: $userId);
        return parent::updateFavoriteStatus();
    }


    public function updateView(string $itemId, string $userId): bool
    {
        $this->setCItemId(itemId: $itemId);
        $this->setCUserId(userId: $userId);
        return parent::updateViewStatus();
    }

    public function getViews(string $itemId): null|int
    {
        $this->setCItemId(itemId: $itemId);
        return parent::getViewsStatus();
    }

    public function hasUserLikedItem(string $userId,string $itemId): bool
    {
        $this->setCUserId(userId: $userId);
        $this->setCItemId(itemId: $itemId);
        return parent::hasUserLikedStatus();
    }

    public function hasUserReacted(string $userId, string $itemId): bool
    {
        $this->setCItemId(itemId: $itemId);
        $this->setCUserId(userId: $userId);
        return parent::hasUserReactedStatus();
    }


}