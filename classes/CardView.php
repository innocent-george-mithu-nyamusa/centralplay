<?php


namespace Classes;


class CardView extends CardContr
{
    public function createCard(int $cardNumber, int $cardCvv, string $ownerId, string $ownerFullname, string $cardExpiry, int $cardZip): bool
    {
        $this->setCCardCvv($cardCvv);
        $this->setCCardId();
        $this->setCCardNumber($cardNumber);
        $this->setCCardOwnerId($ownerId);
        $this->setCCardOwnerName($ownerFullname);
        $this->setCCardZip($cardZip);
        $this->setCCardExpiry($cardExpiry);


        return parent::createCardStatus();
    }

}