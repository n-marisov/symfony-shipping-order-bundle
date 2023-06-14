<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Interfaces;

/**
 * Интерфейс автомобиля
 */
interface CarInterface
{

    /**
     * Возвращает ценовое правило
     * @return mixed
     */
    public function getPriceRule();
}