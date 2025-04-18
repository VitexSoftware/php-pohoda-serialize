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

namespace Pohoda\Response;

/**
 * Class representing RecordDuplicityType.
 *
 * XSD Type: recordDuplicityType
 */
class RecordDuplicityType
{
    private ?string $agendaType = null;

    /**
     * Datum importu záznamu.
     */
    private ?\DateTime $dateCreate = null;

    /**
     * ID vytvořeného dokladu. Pokud hodnota není uvedena, byl doklad již smazán.
     */
    private ?int $id = null;

    /**
     * Číslo vytvořeného dokladu.
     */
    private ?string $number = null;

    /**
     * Gets as agendaType.
     *
     * @return string
     */
    public function getAgendaType()
    {
        return $this->agendaType;
    }

    /**
     * Sets a new agendaType.
     *
     * @param string $agendaType
     *
     * @return self
     */
    public function setAgendaType($agendaType)
    {
        $this->agendaType = $agendaType;

        return $this;
    }

    /**
     * Gets as dateCreate.
     *
     * Datum importu záznamu.
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Sets a new dateCreate.
     *
     * Datum importu záznamu.
     *
     * @return self
     */
    public function setDateCreate(?\DateTime $dateCreate = null)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Gets as id.
     *
     * ID vytvořeného dokladu. Pokud hodnota není uvedena, byl doklad již smazán.
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
     * ID vytvořeného dokladu. Pokud hodnota není uvedena, byl doklad již smazán.
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
     * Gets as number.
     *
     * Číslo vytvořeného dokladu.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Číslo vytvořeného dokladu.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}
