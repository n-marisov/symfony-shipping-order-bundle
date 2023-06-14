<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Entity;


use DateTimeInterface;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Maris\SymfonyBundle\ShippingOrderBundle\Interfaces\CompanyInterface;
use Maris\SymfonyBundle\ShippingOrderBundle\Interfaces\PaymentDocumentInterface;
use Stringable;

#[Entity]
#[Table(name: "payment_documents")]
class PaymentDocument implements PaymentDocumentInterface
{
    #[Id,GeneratedValue,Column]
    private ?int $id;



    public function getDateDocument(): DateTimeInterface
    {
        return new \DateTimeImmutable();
    }

    public function getDocumentNumber(): int
    {
        return 0;
    }

    public function getCustomer(): CompanyInterface
    {
        return new Company();
    }

    public function getExecutor(): CompanyInterface
    {
        return new Company();
    }

    public function getReason(): ?Stringable
    {
        return null;
    }

    public function getServices(): iterable
    {
        return [];
    }
}