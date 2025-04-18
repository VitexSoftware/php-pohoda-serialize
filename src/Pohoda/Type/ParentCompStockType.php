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

namespace Pohoda\Type;

/**
 * Class representing ParentCompStockType.
 *
 * XSD Type: parentCompStockType
 */
class ParentCompStockType
{
    /**
     * ID položky dokladu.
     */
    private ?int $id = null;

    /**
     * Externí identifikátor položky dokladu.
     */
    private ?string $extId = null;

    /**
     * Gets as id.
     *
     * ID položky dokladu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * ID položky dokladu.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as extId.
     *
     * Externí identifikátor položky dokladu.
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * Externí identifikátor položky dokladu.
     *
     * @param string $extId
     *
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }
}
