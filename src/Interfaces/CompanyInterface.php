<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Interfaces;

use Stringable;

/**
 * Организация (Юр.лио)
 */
interface CompanyInterface extends Stringable
{
    /**
     * Возвращает название компании.
     * @return mixed
     */
    public function getFormattedName():string;

    /**
     * Возвращает ИНН компании
     * @return string
     */
    public function getInn():string;

    /**
     * Возвращает КПП компании.
     * Может быть пустым для ИП
     * @return string|null
     */
    public function getKpp():?string;

    /**
     * Возвращает ОГРН компании
     * @return string
     */
    public function getOgrn():string;

    /**
     * Возвращает адрес регистрации компании
     * @return string
     */
    public function getLegalAddress():string;

    /**
     * Возвращает форматированную информацию о компании
     * @return mixed
     */
    public function getFormattedFull(): string;

    /**
     * То-же самое что и ::getFormattedName()
     * @return string
     */
    public function __toString(): string;
}