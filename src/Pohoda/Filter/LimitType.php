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
 * Class representing LimitType.
 *
 * XSD Type: limitType
 */
class LimitType
{
    /**
     * Minimální hodnota ID záznamu, od kterého se provede export.
     */
    private ?int $idFrom = null;

    /**
     * Počet záznamů v daném exportu.
     */
    private ?int $count = null;

    /**
     * Gets as idFrom.
     *
     * Minimální hodnota ID záznamu, od kterého se provede export.
     *
     * @return int
     */
    public function getIdFrom()
    {
        return $this->idFrom;
    }

    /**
     * Sets a new idFrom.
     *
     * Minimální hodnota ID záznamu, od kterého se provede export.
     *
     * @param int $idFrom
     *
     * @return self
     */
    public function setIdFrom($idFrom)
    {
        $this->idFrom = $idFrom;

        return $this;
    }

    /**
     * Gets as count.
     *
     * Počet záznamů v daném exportu.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count.
     *
     * Počet záznamů v daném exportu.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}
