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

namespace Pohoda\UserAgenda;

/**
 * Class representing UserAgendaDetailType.
 *
 * XSD Type: userAgendaDetailType
 */
class UserAgendaDetailType
{
    /**
     * @var \Pohoda\UserAgenda\UserAgendaItemType[]
     */
    private array $userAgendaItem = [
    ];

    /**
     * Adds as userAgendaItem.
     *
     * @return self
     */
    public function addToUserAgendaItem(\Pohoda\UserAgenda\UserAgendaItemType $userAgendaItem)
    {
        $this->userAgendaItem[] = $userAgendaItem;

        return $this;
    }

    /**
     * isset userAgendaItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUserAgendaItem($index)
    {
        return isset($this->userAgendaItem[$index]);
    }

    /**
     * unset userAgendaItem.
     *
     * @param int|string $index
     */
    public function unsetUserAgendaItem($index): void
    {
        unset($this->userAgendaItem[$index]);
    }

    /**
     * Gets as userAgendaItem.
     *
     * @return \Pohoda\UserAgenda\UserAgendaItemType[]
     */
    public function getUserAgendaItem()
    {
        return $this->userAgendaItem;
    }

    /**
     * Sets a new userAgendaItem.
     *
     * @param \Pohoda\UserAgenda\UserAgendaItemType[] $userAgendaItem
     *
     * @return self
     */
    public function setUserAgendaItem(array $userAgendaItem)
    {
        $this->userAgendaItem = $userAgendaItem;

        return $this;
    }
}
