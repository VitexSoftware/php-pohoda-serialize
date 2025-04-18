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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListUserAgendaType.
 *
 * XSD Type: listUserAgendaType
 */
class ListUserAgendaType extends ListVersionType
{
    /**
     * @var \Pohoda\UserAgenda\UserAgendaType[]
     */
    private array $userAgenda = [
    ];

    /**
     * Adds as userAgenda.
     *
     * @return self
     */
    public function addToUserAgenda(\Pohoda\UserAgenda\UserAgendaType $userAgenda)
    {
        $this->userAgenda[] = $userAgenda;

        return $this;
    }

    /**
     * isset userAgenda.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUserAgenda($index)
    {
        return isset($this->userAgenda[$index]);
    }

    /**
     * unset userAgenda.
     *
     * @param int|string $index
     */
    public function unsetUserAgenda($index): void
    {
        unset($this->userAgenda[$index]);
    }

    /**
     * Gets as userAgenda.
     *
     * @return \Pohoda\UserAgenda\UserAgendaType[]
     */
    public function getUserAgenda()
    {
        return $this->userAgenda;
    }

    /**
     * Sets a new userAgenda.
     *
     * @param \Pohoda\UserAgenda\UserAgendaType[] $userAgenda
     *
     * @return self
     */
    public function setUserAgenda(?array $userAgenda = null)
    {
        $this->userAgenda = $userAgenda;

        return $this;
    }
}
