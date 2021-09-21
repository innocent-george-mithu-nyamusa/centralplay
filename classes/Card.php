<?php


namespace Classes;


class Card extends Dbh
{
    private string $cardId;
    private int $cardNumber;
    private int $cardCvv;
    private string $cardOwnerId;
    private string $cardExpiry;
    private string $cardOwnerName;
    private int $cardZip;

    /**
     * @param string $cardOwnerId
     */
    public function setCardOwnerId(string $cardOwnerId): void
    {
        $this->cardOwnerId = $cardOwnerId;
    }

    /**
     * @param string $paymentType
     */
    protected function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @param string $mobileNumber
     */
    protected function setMobileNumber(string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * @param int $cardZip
     */
    protected function setCardZip(int $cardZip): void
    {
        $this->cardZip = $cardZip;
    }

    /**
     * @param string $cardOwnerName
     */
    protected function setCardOwnerName(string $cardOwnerName): void
    {
        $this->cardOwnerName = $cardOwnerName;
    }

    /**
     * @param string $cardExpiry
     */
    protected function setCardExpiry(string $cardExpiry): void
    {
        $this->cardExpry = $cardExpiry;
    }



    /**
     * @param int $cardCvv
     */
    protected function setCardCvv(int $cardCvv): void
    {
        $this->cardCvv = $cardCvv;
    }

    /**
     * @param int $cardNumber
     */
    protected function setCardNumber(int $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @param string $cardId
     */
    protected function setCardId(string $cardId): void
    {
        $this->cardId = $cardId;
    }

    protected function createCardStatus(): bool {
        return $this->createCard();
    }

    private function createCard(): bool {
        try {
            $cardAddQuery = "INSERT INTO card(card_id, card_number, card_cvv, card_owner, card_owner_full_name, card_expiry, card_zip) VALUES (:cardId, :cardNumber,:cardCvv, :cardOwner, :cardOwnerName, :cardExpiry, :cardZip)";
            $cardAddStmt = $this->connect()->prepare($cardAddQuery);
            $cardAddStmt->bindParam(":cardId", $this->cardId);
            $cardAddStmt->bindParam(":cardNumber", $this->cardNumber);
            $cardAddStmt->bindParam(":cardCvv", $this->cardCvv);
            $cardAddStmt->bindParam(":cardOwner", $this->cardOwnerId);
            $cardAddStmt->bindParam(":cardOwnerName", $this->cardOwnerName);
            $cardAddStmt->bindParam(":cardExpiry", $this->cardExpiry);
            $cardAddStmt->bindParam(":cardZip", $this->cardZip);
            $result =$cardAddStmt->execute();
            $cardAddStmt->closeCursor();

            return $result;
        }catch (\Exception $exception) {
            echo "Failed to create card ". $exception->getMessage();
            return false;
        }
    }



}