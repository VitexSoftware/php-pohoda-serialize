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
 * Class representing ContShortcutType.
 *
 * XSD Type: contShortcutType
 */
class ContShortcutType
{
    private ?string $target = null;

    /**
     * V agendě Adresář se rozlišuje typ: Adresář/Události.
     */
    private ?string $agenda = null;

    /**
     * Gets as target.
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target.
     *
     * @param string $target
     *
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Gets as agenda.
     *
     * V agendě Adresář se rozlišuje typ: Adresář/Události.
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
     * V agendě Adresář se rozlišuje typ: Adresář/Události.
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
}
