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

namespace Pohoda\Activity;

/**
 * Class representing ActivityType.
 *
 * XSD Type: activityType
 */
class ActivityType
{
    private ?string $version = null;

    /**
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @var \Pohoda\Activity\ActionTypeType[]
     */
    private array $actionType = [
    ];

    /**
     * @var \Pohoda\Activity\ActivityHeaderType[]
     */
    private array $activityHeader = [
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
    public function addToActionType(\Pohoda\Activity\ActionTypeType $actionType)
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
     * @return \Pohoda\Activity\ActionTypeType[]
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
     * @param \Pohoda\Activity\ActionTypeType[] $actionType
     *
     * @return self
     */
    public function setActionType(?array $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Adds as activityHeader.
     *
     * @return self
     */
    public function addToActivityHeader(\Pohoda\Activity\ActivityHeaderType $activityHeader)
    {
        $this->activityHeader[] = $activityHeader;

        return $this;
    }

    /**
     * isset activityHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActivityHeader($index)
    {
        return isset($this->activityHeader[$index]);
    }

    /**
     * unset activityHeader.
     *
     * @param int|string $index
     */
    public function unsetActivityHeader($index): void
    {
        unset($this->activityHeader[$index]);
    }

    /**
     * Gets as activityHeader.
     *
     * @return \Pohoda\Activity\ActivityHeaderType[]
     */
    public function getActivityHeader()
    {
        return $this->activityHeader;
    }

    /**
     * Sets a new activityHeader.
     *
     * @param \Pohoda\Activity\ActivityHeaderType[] $activityHeader
     *
     * @return self
     */
    public function setActivityHeader(?array $activityHeader = null)
    {
        $this->activityHeader = $activityHeader;

        return $this;
    }
}
