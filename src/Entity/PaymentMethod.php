<?php

namespace App\Entity;

use App\Repository\PaymentMethodRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentMethodRepository::class)]
class PaymentMethod
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'paymentMethods')]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $card_type = null;

    #[ORM\Column(length: 16)]
    private ?string $card_number = null;

    #[ORM\Column(length: 255)]
    private ?string $expiration_date = null;

    #[ORM\Column(length: 255)]
    private ?string $cardholder_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCardType(): ?string
    {
        return $this->card_type;
    }

    public function setCardType(string $card_type): self
    {
        $this->card_type = $card_type;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->card_number;
    }

    public function setCardNumber(string $card_number): self
    {
        $this->card_number = $card_number;

        return $this;
    }

    public function getExpirationDate(): ?string
    {
        return $this->expiration_date;
    }

    public function setExpirationDate(string $expiration_date): self
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }

    public function getCardholderName(): ?string
    {
        return $this->cardholder_name;
    }

    public function setCardholderName(string $cardholder_name): self
    {
        $this->cardholder_name = $cardholder_name;

        return $this;
    }
}
