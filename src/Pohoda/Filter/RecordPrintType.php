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
 * Class representing RecordPrintType.
 *
 * XSD Type: recordPrintType
 */
class RecordPrintType
{
    private ?string $agenda = null;

    /**
     * Uživatelské agenda. Hodnota pole 'Zkratka' v Nastavení uživatelské agendy.
     */
    private ?string $usrAgenda = null;

    /**
     * Seznam polí podle kterých se bude filtrovat.
     */
    private ?\Pohoda\Filter\FilterIDType $filter = null;
    private ?\Pohoda\Filter\QueryFilterType $queryFilter = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro vyfiltrování záznamů.
     */
    private ?string $userFilterName = null;

    /**
     * Gets as agenda.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Gets as usrAgenda.
     *
     * Uživatelské agenda. Hodnota pole 'Zkratka' v Nastavení uživatelské agendy.
     *
     * @return string
     */
    public function getUsrAgenda()
    {
        return $this->usrAgenda;
    }

    /**
     * Sets a new usrAgenda.
     *
     * Uživatelské agenda. Hodnota pole 'Zkratka' v Nastavení uživatelské agendy.
     *
     * @param string $usrAgenda
     *
     * @return self
     */
    public function setUsrAgenda($usrAgenda)
    {
        $this->usrAgenda = $usrAgenda;

        return $this;
    }

    /**
     * Gets as filter.
     *
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @return \Pohoda\Filter\FilterIDType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter.
     *
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterIDType $filter = null)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Gets as queryFilter.
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
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro vyfiltrování záznamů.
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
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro vyfiltrování záznamů.
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
