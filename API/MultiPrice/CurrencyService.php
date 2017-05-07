<?php

/**
 * This file is part of the EzPriceBundle package.
 *
 * @author Bluetel Solutions <developers@bluetel.co.uk>
 * @author Joe Jones <jdj@bluetel.co.uk>
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPriceBundle\API\MultiPrice;

/**
 * Interface for the service used to fetch information about the current
 * users currency.
 */
interface CurrencyService
{
    /**
     * Get the currency for the current user.
     *
     * @return string the current users currency code.
     */
    public function getUsersCurrencyCode();

    /**
     * Fetch the users current currency object.
     *
     * @return Values\Currency The currency object that should be
     *                         applied to prices for the current user.
     */
    public function getUsersCurrency();

    /**
     * Set the users currency.
     *
     * @param string $currencyCode 3 character code to set the users currency to.
     *
     * @return bool whether the session variable was set or not.
     */
    public function setUsersCurrency($currencyCode);

    /**
     * Fetch all available currencies.
     *
     * @return Values\Currency[] Array of all the currency objects.
     */
    public function getAllCurrencies();

    /**
     * Fetch a currency by its code.
     *
     * @param string $currencyCode 3 character code to fetch a currency by.
     *
     * @throws CurrencyNotFoundException If the currency is not found.
     *
     * @return Values\Currency The currency object.
     */
    public function getCurrencyByCode($currencyCode);
}
