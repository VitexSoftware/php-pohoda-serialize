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
 * Class representing QueryFilterType.
 *
 * XSD Type: queryFilterType
 */
class QueryFilterType
{
    private ?string $filter = null;

    private ?string $textName = null;

    /**
     * Gets as filter.
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter.
     *
     * @param string $filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Gets as textName.
     *
     * @return string
     */
    public function getTextName()
    {
        return $this->textName;
    }

    /**
     * Sets a new textName.
     *
     * @param string $textName
     *
     * @return self
     */
    public function setTextName($textName)
    {
        $this->textName = $textName;

        return $this;
    }
}
