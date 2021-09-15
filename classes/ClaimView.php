<?php


namespace Classes;


class ClaimView extends ClaimContr
{

    public function createClaim(string $itemId, string $claimerId, string $claimerDispatcherId): bool {
        parent::setCClaimId();
        parent::setCExpiryDate();
        parent::setCItemId($itemId);
        parent::setCClaimerId($claimerId);
        parent::setCClaimDispatcherId($claimerDispatcherId);
        return parent::addClaimStatus();
    }

    public function updateClaim(string $itemId, string $claimerId, string $proofDocument ): bool
    {
        self::setCItemId($itemId);
        self::setCClaimerId($claimerId);
        self::setCProofDocument($proofDocument);
        return parent::updateClaimStatus();
    }

    public function claimComplete(string $claimId): bool {
        $this->setClaimId($claimId);
        return parent::claimCompleteStatus();
    }

    public function getAllClaims(): bool|array
    {
        return parent::getAllClaimsResult();
    }

    public function getFewClaims(string $itemId): bool|array
    {
        $this->setCItemId($itemId);
        return parent::getFewClaimsResult();
    }

    public function getClaim(string $itemId): bool|array
    {
        self::setCItemId(itemId: $itemId);
        return parent::getClaimStatus();
    }

    public function getClaimByUser(string $itemId, string $userId): bool|array
    {
        self::setCItemId(itemId: $itemId);
        self::setCClaimerId($userId);
        return parent::getClaimByUserStatus();
    }

    public function isItemClaimed(string $itemId, string $userId):bool {
        $this->setCClaimerId($userId);
        $this->setCItemId($itemId);
        return parent::isItemClaimedStatus();
    }

    public function getItemClaimsHistory(): bool|array
    {
        return parent::getItemClaimsHistoryResult();
    }

    public function claimExpired(string $claimId): bool
    {
        $this->addCClaimId($claimId);
        return parent::claimExpiredStatus();
    }

    public function noOfClaimsOnItem(string $itemId): int {
        $this->setCItemId($itemId);
        return parent::getNumberOfClaimsStatus();
    }


    public function getIncompleteClaims(): ?array {

        return parent::getIncompleteClaimsStatus();
    }

    public function getCompleteClaims(): ?array
    {
        return parent::getCompleteClaimsStatus();
    }

    public function getCancelledClaims(): ?array
    {
        return parent::getCancelledClaimsStatus();
    }

}