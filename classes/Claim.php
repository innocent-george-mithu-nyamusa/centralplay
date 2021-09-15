<?php


namespace Classes;


use Exception;
use PDO;

class Claim extends Dbh
{
    private string $claimId;
    private string $itemId;
    private string $claimerId;
    private string $claimDispatcherId;
    private string $proofDocument;
    private string $expiryYear;
    private string $expiryDate;
    private string $expiryMonth;


    /**
     * @param string $expiryYear
     */
    public function setExpiryYear(string $expiryYear): void
    {
        $this->expiryYear = $expiryYear;
    }

    /**
     * @param string $expiryMonth
     */
    public function setExpiryMonth(string $expiryMonth): void
    {
        $this->expiryMonth = $expiryMonth;
    }

    /**
     * @param string $expiryDate
     */
    public function setExpiryDate(string $expiryDate): void
    {
        $this->expiryDate = $expiryDate;
    }


    /**
     * @param string $proofDocument
     */
    protected function setProofDocument(string $proofDocument): void
    {
        $this->proofDocument = $proofDocument;
    }

    /**
     * @param string $itemId
     */
    protected function setItemId(string $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @param string $claimerId
     */
    protected function setClaimerId(string $claimerId): void
    {
        $this->claimerId = $claimerId;
    }

    /**
     * @param string $claimDispatcherId
     */
    protected function setClaimDispatcherId(string $claimDispatcherId): void
    {
        $this->claimDispatcherId = $claimDispatcherId;
    }

    /**
     * @param string $claimId
     */
    protected function setClaimId(string $claimId): void
    {
        $this->claimId = $claimId;
    }


    protected function addClaimStatus(): bool
    {
        return $this->addClaim();
    }

    private function addClaim(): bool
    {
        try {
            $addClaimQuery = "INSERT INTO claim(claim_id, claim_item_id, claim_user_id, claim_dispatcher_id, claim_expiry_date) ";
            $addClaimQuery .= " VALUES(:claimId, :claimItemId, :claimUserId, :claimDispatcherId, :claimExpiryDate)";

            $date = $this->expiryYear . "-" . $this->expiryMonth . "-" . $this->expiryDate;

            $addClaimStmt = $this->connect()->prepare($addClaimQuery);
            $addClaimStmt->bindParam(":claimId", $this->claimId);
            $addClaimStmt->bindParam(":claimItemId", $this->itemId);
            $addClaimStmt->bindParam(":claimUserId", $this->claimerId);
            $addClaimStmt->bindParam(":claimDispatcherId", $this->claimDispatcherId);
            $addClaimStmt->bindParam(":claimExpiryDate", $date);

            return $addClaimStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to add claim " . $exception->getMessage();
            return false;
        }

    }

    protected function updateClaimStatus(): bool
    {
        return self::updateClaim();
    }

    private function updateClaim(): bool
    {
        try {
            $addClaimQuery = "UPDATE claim SET claim_item_id=:claimItemId, claim_proof_document=:claimProofDocument WHERE claim_user_id=:claimUserId";
            $addClaimStmt = $this->connect()->prepare($addClaimQuery);
            $addClaimStmt->bindParam(":claimItemId", $this->itemId);
            $addClaimStmt->bindParam(":claimUserId", $this->claimerId);
            $addClaimStmt->bindParam(":claimProofDocument", $this->proofDocument);
            return $addClaimStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to add claim " . $exception->getMessage();
            return false;
        }
    }


    protected function getAllClaimsResult(): bool|array
    {
        return self::getAllClaims();
    }

    private function getAllClaims(): bool|array
    {
        try {
            $getAllClaimsQuery = "SELECT * FROM claim ORDER BY claim_date DESC";
            $getAllClaimsStmt = $this->connect()->prepare($getAllClaimsQuery);
            $getAllClaimsStmt->execute();
            return $getAllClaimsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return false;
        }
    }

    protected function getFewClaimsResult(): bool|array
    {
        return self::getFewClaims();
    }

    private function getFewClaims(): bool|array
    {
        try {
            $getAllClaimsQuery = "SELECT * FROM claim WHERE claim_status='incomplete' AND claim_item_id=:itemId ORDER BY claim_date DESC LIMIT 4";
            $getAllClaimsStmt = $this->connect()->prepare($getAllClaimsQuery);
            $getAllClaimsStmt->bindParam(":itemId", $this->itemId);
            $getAllClaimsStmt->execute();
            return $getAllClaimsStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return false;
        }
    }

    protected function getClaimStatus(): bool|array
    {
        return self::getClaim();
    }

    private function getClaim(): bool|array
    {
        try {
            $getClaimQuery = "SELECT * FROM claim WHERE claim_id=:claimId ORDER BY claim_date DESC LIMIT 4";
            $getClaimStmt = $this->connect()->prepare($getClaimQuery);
            $getClaimStmt->bindParam(":claimId", $this->claimId);
            $getClaimStmt->execute();
            $results = $getClaimStmt->fetchAll(PDO::FETCH_ASSOC);
            $getClaimStmt->closeCursor();
            return $results;
        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return false;
        }
    }

    protected function claimExpiredStatus(): bool
    {
        return self::claimExpired();
    }

    private function claimExpired(): bool
    {
        try {
            $expiredClaimQuery = "UPDATE claim SET claim_status='expired' WHERE claim_id=:claimId";
            $expiredClaimStmt = $this->connect()->prepare($expiredClaimQuery);
            $expiredClaimStmt->bindParam(":claimId", $this->claimId);
            $result = $expiredClaimStmt->execute();
            $expiredClaimStmt->closeCursor();

            return $result;
        } catch (Exception $exception) {
            echo "Failed update claim " . $exception->getMessage();
            return false;
        }
    }

    protected function claimCompleteStatus(): bool
    {
        return self::claimComplete();
    }

    private function claimComplete(): bool
    {
        try {
            $expiredClaimQuery = "UPDATE claim SET claim_status='completed' WHERE claim_id=:claimId";
            $expiredClaimStmt = $this->connect()->prepare($expiredClaimQuery);
            $expiredClaimStmt->bindParam(":claimId", $this->claimId);
            $result = $expiredClaimStmt->execute();
            $expiredClaimStmt->closeCursor();

            return $result;
        } catch (Exception $exception) {
            echo "Failed update claim " . $exception->getMessage();
            return false;
        }
    }


    protected function getClaimByUserStatus(): bool|array
    {
        return self::getClaimByUser();
    }

    private function getClaimByUser(): bool|array
    {
        try {
            $getClaimQuery = "SELECT * FROM claim WHERE claim_item_id=:claimItemId AND claim_user_id=:claimUserId AND claim_status = 'incomplete'";
            $getClaimStmt = $this->connect()->prepare($getClaimQuery);
            $getClaimStmt->bindParam(":claimItemId", $this->itemId);
            $getClaimStmt->bindParam(":claimUserId", $this->claimerId);
            $getClaimStmt->execute();
            $results = $getClaimStmt->fetchAll(PDO::FETCH_ASSOC);
            $getClaimStmt->closeCursor();
            return $results;
        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return false;
        }
    }


    protected function getItemClaimsHistoryResult(): bool|array
    {
        return self::getItemClaimHistory();
    }

    private function getItemClaimHistory(): bool|array
    {
        try {
            $getClaimQuery = "SELECT * FROM claim WHERE claim_status!='collected' AND claim_item_id=:itemId ORDER BY claim_date ASC LIMIT 4";
            $getClaimStmt = $this->connect()->prepare($getClaimQuery);
            $getClaimStmt->bindParam(":itemId", $this->itemId);
            $getClaimStmt->execute();
            return $getClaimStmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return false;
        }
    }

    protected function isItemClaimedStatus(): bool
    {
        return self::isItemClaimed();
    }

    private function isItemClaimed(): bool
    {
        try {
            $getItemQuery = "SELECT COUNT(*) FROM claim WHERE claim_item_id=:claimItemId AND claim_user_id=:claimUserId AND claim_status='incomplete'";
            $getItemStmt = $this->connect()->prepare($getItemQuery);
            $getItemStmt->bindParam(":claimItemId", $this->itemId);
            $getItemStmt->bindParam(":claimUserId", $this->claimerId);
            $getItemStmt->execute();
            if ($getItemStmt->fetchColumn() > 0) {
                return true;
            }
            return false;
        } catch (Exception $exception) {
            echo "Failed to check if item is claimed " . $exception->getMessage();
            return false;
        }
    }


    protected function getNumberOfClaimsStatus(): int
    {
        return self::claimOnItemCount();
    }

    private function claimOnItemCount(): int
    {
        try {
            $countItemCountQuery = "SELECT COUNT(*) FROM claim WHERE claim_item_id=:claimItemId";
            $countItemCountStmt = $this->connect()->prepare($countItemCountQuery);
            $countItemCountStmt->bindParam(":claimItemId", $this->itemId);
            $countItemCountStmt->execute();
            $result = $countItemCountStmt->fetchColumn();
            $countItemCountStmt->closeCursor();
            return $result;
        } catch (Exception $exception) {
            echo "Failed to count claims on item" . $exception->getMessage();
            return 0;
        }
    }


    protected function getIncompleteClaimsStatus(): ?array
    {
        return $this->getAllIncompleteClaims();
    }

    private function getAllIncompleteClaims(): ?array
    {

        try {
            $getAllClaimsQuery = "SELECT * FROM claim WHERE claim_status='incomplete' ORDER BY claim_date DESC";
            $getAllClaimsStmt = $this->connect()->prepare($getAllClaimsQuery);
            $getAllClaimsStmt->execute();
            return $getAllClaimsStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return null;
        }

    }


    protected function getCompleteClaimsStatus(): ?array
    {
        return $this->getAllCompleteClaims();
    }

    private function getAllCompleteClaims(): ?array
    {
        try {

            $getAllClaimsQuery = "SELECT * FROM claim WHERE claim_status='completed' ORDER BY claim_date DESC";
            $getAllClaimsStmt = $this->connect()->prepare($getAllClaimsQuery);
            $getAllClaimsStmt->execute();
            return $getAllClaimsStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return null;
        }
    }

    protected function getCancelledClaimsStatus(): ?array
    {
        return $this->getCancelledClaims();
    }

    private function getCancelledClaims(): ?array
    {
        try {

            $getAllClaimsQuery = "SELECT * FROM claim WHERE claim_status='cancelled' ORDER BY claim_date DESC";
            $getAllClaimsStmt = $this->connect()->prepare($getAllClaimsQuery);
            $getAllClaimsStmt->execute();
            return $getAllClaimsStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Failed to get claims " . $exception->getMessage();
            return null;
        }

    }


}