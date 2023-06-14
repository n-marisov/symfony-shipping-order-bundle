<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Maris\SymfonyBundle\ShippingOrderBundle\Interfaces\CompanyInterface;

#[Entity]
#[Table(name: "business")]
class Company implements CompanyInterface
{
    #[Id,GeneratedValue,Column]
    private ?int $id;

    private string $legalForm;

    private string $management;


    private string $name;

    /**
     * @inheritDoc
     */
    public function getFormattedName(): string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function getInn(): string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function getKpp(): ?string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function getOgrn(): string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function getLegalAddress(): string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function getFormattedFull(): string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return "";
    }
}