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

namespace Pohoda\Centre;

/**
 * Class representing CentreType.
 *
 * XSD Type: centreType
 */
class CentreType
{
    private ?string $version = null;

    /**
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @var \Pohoda\Centre\ActionTypeType[]
     */
    private array $actionType = [
    ];

    /**
     * @var \Pohoda\Centre\CentreHeaderType[]
     */
    private array $centreHeader = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds as actionType.
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @return self
     */
    public function addToActionType(\Pohoda\Centre\ActionTypeType $actionType)
    {
        $this->actionType[] = $actionType;

        return $this;
    }

    /**
     * isset actionType.
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActionType($index)
    {
        return isset($this->actionType[$index]);
    }

    /**
     * unset actionType.
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @param int|string $index
     */
    public function unsetActionType($index): void
    {
        unset($this->actionType[$index]);
    }

    /**
     * Gets as actionType.
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @return \Pohoda\Centre\ActionTypeType[]
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @param \Pohoda\Centre\ActionTypeType[] $actionType
     *
     * @return self
     */
    public function setActionType(?array $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Adds as centreHeader.
     *
     * @return self
     */
    public function addToCentreHeader(\Pohoda\Centre\CentreHeaderType $centreHeader)
    {
        $this->centreHeader[] = $centreHeader;

        return $this;
    }

    /**
     * isset centreHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCentreHeader($index)
    {
        return isset($this->centreHeader[$index]);
    }

    /**
     * unset centreHeader.
     *
     * @param int|string $index
     */
    public function unsetCentreHeader($index): void
    {
        unset($this->centreHeader[$index]);
    }

    /**
     * Gets as centreHeader.
     *
     * @return \Pohoda\Centre\CentreHeaderType[]
     */
    public function getCentreHeader()
    {
        return $this->centreHeader;
    }

    /**
     * Sets a new centreHeader.
     *
     * @param \Pohoda\Centre\CentreHeaderType[] $centreHeader
     *
     * @return self
     */
    public function setCentreHeader(?array $centreHeader = null)
    {
        $this->centreHeader = $centreHeader;

        return $this;
    }
}
