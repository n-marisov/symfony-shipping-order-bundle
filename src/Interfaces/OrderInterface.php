<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Interfaces;

use DateTimeInterface;
use Maris\SymfonyBundle\Directions\Interfaces\RouteInterface;

/**
 * Интерфейс заявки
 */
interface OrderInterface
{
    /**
     * Дата создания заявки
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface;

    /**
     * Номер заявки
     * @return int
     */
    public function getOrderNumber():int;

    /**
     * Платежный документ
     * @return PaymentDocumentInterface|null
     */
    public function getPaymentDocument():?PaymentDocumentInterface;

    /**
     * Цена рассчитанного маршрута
     * @return float
     */
    public function getCalculatePrice():float;

    /***
     * Согласованная цена маршрута
     * @return float
     */
    public function getAgreedPrice():float;

    /**
     * Маршрут по заявке
     * @return RouteInterface
     */
    public function getDirectionRoute():RouteInterface;

    /**
     * Список адресов загрузки
     * @return iterable
     */
    public function getAddressesUnload():iterable;

    /**
     * Список адресов выгрузки
     * @return iterable
     */
    public function getAddressesDownload():iterable;
}