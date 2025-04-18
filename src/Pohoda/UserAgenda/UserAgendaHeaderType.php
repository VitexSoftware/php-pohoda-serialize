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
 * Class representing UserAgendaHeaderType.
 *
 * XSD Type: userAgendaHeaderType
 */
class UserAgendaHeaderType
{
    /**
     * ID záznamu (jen pro export).
     */
    private ?int $id = null;

    /**
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená
     *  v nastavení uživatelské agendy nebo se nastaví první číselná řada pro daný doklad.
     */
    private ?\Pohoda\Type\NumberType $number = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private ?string $markRecord = null;

    /**
     * Volitelné parametry.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private ?array $parameters = null;

    /**
     * Gets as id.
     *
     * ID záznamu (jen pro export).
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
     * ID záznamu (jen pro export).
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
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená
     *  v nastavení uživatelské agendy nebo se nastaví první číselná řada pro daný doklad.
     *
     * @return \Pohoda\Type\NumberType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená
     *  v nastavení uživatelské agendy nebo se nastaví první číselná řada pro daný doklad.
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * Poznámka
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets as markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     *
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * Volitelné parametry.
     *
     * @return self
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * isset parameters.
     *
     * Volitelné parametry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters.
     *
     * Volitelné parametry.
     *
     * @param int|string $index
     */
    public function unsetParameters($index): void
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters.
     *
     * Volitelné parametry.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters.
     *
     * Volitelné parametry.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters = null)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
