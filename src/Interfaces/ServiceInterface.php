<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Interfaces;

use Stringable;

/**
 * Интерфейс определяет одну услугу (Рейс)
 */
interface ServiceInterface
{
    /**
     * Количество услуг.
     * Не может быть меньше 1.
     * По умолчанию должен быть 1.
     * @return int
     */
    public function getCountReason():int;

    /***
     * Сумма денег за все количество услуг.
     * По умолчанию: getCountReason() * getOrder()->getAgreedPrice()
     * @return float
     */
    public function getSummaPrice():float;

    /**
     * Основание для оплаты
     * @return Stringable
     */
    public function getWorkName():Stringable;

    /**
     * Заявка
     * @return OrderInterface
     */
    public function getOrder():OrderInterface;
}