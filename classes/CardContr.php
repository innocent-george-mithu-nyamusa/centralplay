<?php


namespace Classes;


class CardContr extends Card
{
    protected function setCCardCvv(int $cardCvv): void
    {
        $cardCvv = Utilities::cleanData($cardCvv);
        parent::setCardCvv($cardCvv);
    }

    protected function setCCardId(): void
    {
        $cardId = Utilities::genUniqueId("crd");
        parent::setCardId($cardId);
    }

    protected function setCCardZip(int $cardZip): void{
        $cardZip = Utilities::cleanData($cardZip);
        parent::setCardZip($cardZip);
}

    protected function setCCardOwnerName(string $ownerName): void {
        $ownerName = Utilities::cleanData($ownerName);
        parent::setCardOwnerName($ownerName);

    }

    protected function setCCardExpiry(string $expiryDate):void {
        $expiryDate = Utilities::cleanData($expiryDate);
        parent::setCardExpiry($expiryDate);
    }

    protected function setCCardNumber(int $cardNumber): void
    {
        $cardNumber = Utilities::cleanData($cardNumber);
        parent::setCardNumber($cardNumber);
    }

    public function setCCardOwnerId(string $cardOwnerId): void
    {
        $cardOwnerId = Utilities::cleanData($cardOwnerId);
        parent::setCardOwnerId($cardOwnerId);
    }



}