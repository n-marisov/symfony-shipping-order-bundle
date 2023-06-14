<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Interfaces;
use DateTimeInterface;
use Stringable;

/**
 * Интерфейс платежного документа
 */
interface PaymentDocumentInterface
{

    /**
     * Дата создания документа
     * @return DateTimeInterface
     */
    public function getDateDocument(): DateTimeInterface;

    /**
     * Номер акта/счета
     * @return mixed
     */
    public function getDocumentNumber():int;

    /**
     * Заказчик
     * @return mixed
     */
    public function getCustomer():CompanyInterface;

    /**
     * Исполнитель
     * @return mixed
     */
    public function getExecutor():CompanyInterface;

    /**
     * Основание для перевозки(номер договора)
     * @return Stringable|null
     */
    public function getReason():?Stringable;
    /**
     * Список услуг
     * @return iterable
     */
    public function getServices():iterable;
}