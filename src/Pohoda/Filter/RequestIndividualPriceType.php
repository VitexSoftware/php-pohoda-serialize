<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Filter;

/**
 * Class representing RequestIndividualPriceType.
 *
 * XSD Type: requestIndividualPriceType
 */
class RequestIndividualPriceType
{
    /**
     * Seznam polí podle kterých se budou filtrovat adresy.
     */
    private ?\Pohoda\Filter\FilterIndividualPriceType $filter = null;

    /**
     * SQL filtr pro výběr záznamů. Stejná definice jako je v dialogu 'Vlastnosti dotazu' dostupný v kontextovém menu agendy (Výběr->Upravit dotaz...).
     */
    private ?\Pohoda\Filter\QueryFilterType $queryFilter = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     */
    private ?string $userFilterName = null;

    /**
     * Gets as filter.
     *
     * Seznam polí podle kterých se budou filtrovat adresy.
     *
     * @return \Pohoda\Filter\FilterIndividualPriceType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter.
     *
     * Seznam polí podle kterých se budou filtrovat adresy.
     *
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterIndividualPriceType $filter = null)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Gets as queryFilter.
     *
     * SQL filtr pro výběr záznamů. Stejná definice jako je v dialogu 'Vlastnosti dotazu' dostupný v kontextovém menu agendy (Výběr->Upravit dotaz...)
     *
     * @return \Pohoda\Filter\QueryFilterType
     */
    public function getQueryFilter()
    {
        return $this->queryFilter;
    }

    /**
     * Sets a new queryFilter.
     *
     * SQL filtr pro výběr záznamů. Stejná definice jako je v dialogu 'Vlastnosti dotazu' dostupný v kontextovém menu agendy (Výběr->Upravit dotaz...)
     *
     * @return self
     */
    public function setQueryFilter(?\Pohoda\Filter\QueryFilterType $queryFilter = null)
    {
        $this->queryFilter = $queryFilter;

        return $this;
    }

    /**
     * Gets as userFilterName.
     *
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @return string
     */
    public function getUserFilterName()
    {
        return $this->userFilterName;
    }

    /**
     * Sets a new userFilterName.
     *
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @param string $userFilterName
     *
     * @return self
     */
    public function setUserFilterName($userFilterName)
    {
        $this->userFilterName = $userFilterName;

        return $this;
    }
}
