<?php


namespace Classes;


class ClaimContr extends Claim
{
    protected function setCExpiryDate(): void
    {
        $year = date("Y");
        $date = strval(intval(date("d")) + 3);
        $month = date("m");

        $this->setExpiryMonth($month);
        $this->setExpiryYear($year);
        $this->setExpiryDate($date);
    }

    protected function setCItemId(string $itemId): void
    {
        $itemId = Utilities::cleanData($itemId);
        parent::setItemId($itemId);
    }

    protected function setCClaimDispatcherId(string $claimDispatcherId): void
    {
        $claimDispatcherId = Utilities::cleanData($claimDispatcherId);
        parent::setClaimDispatcherId($claimDispatcherId);
    }

    protected function setCClaimerId(string $claimerId): void
    {
        $claimerId = Utilities::cleanData($claimerId);
        parent::setClaimerId($claimerId);
    }

    protected function setCClaimId(): void
    {
        $claimId = Utilities::genUniqueId("clm");
        parent::setClaimId($claimId);
    }

    protected function addCClaimId(string $claimId): void
    {
        $claimId = Utilities::cleanData($claimId);
        parent::setClaimId($claimId);
    }

    protected function setCProofDocument(string $proofDocument): void
    {
        $proofDocument = Utilities::cleanData($proofDocument);
        parent::setProofDocument($proofDocument);
    }

}