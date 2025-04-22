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
 * Class representing UserAgendaType.
 *
 * XSD Type: userAgendaType
 */
class UserAgendaType
{
    private ?string $version = null;
    private ?int $userAgendaId = null;
    private ?string $userAgendaIds = null;

    /**
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     */
    private ?\Pohoda\UserAgenda\ActionTypeType $actionType = null;
    private ?\Pohoda\UserAgenda\UserAgendaHeaderType $userAgendaHeader = null;

    /**
     * @var \Pohoda\UserAgenda\UserAgendaItemType[]
     */
    private ?array $userAgendaDetail = null;

    /**
     * Záznamy ze záložky "Dokumenty".
     */
    private ?\Pohoda\Type\AttachmentsType $attachments = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[]
     */
    private ?array $print = null;

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
     * Gets as userAgendaId.
     *
     * @return int
     */
    public function getUserAgendaId()
    {
        return $this->userAgendaId;
    }

    /**
     * Sets a new userAgendaId.
     *
     * @param int $userAgendaId
     *
     * @return self
     */
    public function setUserAgendaId($userAgendaId)
    {
        $this->userAgendaId = $userAgendaId;

        return $this;
    }

    /**
     * Gets as userAgendaIds.
     *
     * @return string
     */
    public function getUserAgendaIds()
    {
        return $this->userAgendaIds;
    }

    /**
     * Sets a new userAgendaIds.
     *
     * @param string $userAgendaIds
     *
     * @return self
     */
    public function setUserAgendaIds($userAgendaIds)
    {
        $this->userAgendaIds = $userAgendaIds;

        return $this;
    }

    /**
     * Gets as actionType.
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @return \Pohoda\UserAgenda\ActionTypeType
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
     * @return self
     */
    public function setActionType(?\Pohoda\UserAgenda\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as userAgendaHeader.
     *
     * @return \Pohoda\UserAgenda\UserAgendaHeaderType
     */
    public function getUserAgendaHeader()
    {
        return $this->userAgendaHeader;
    }

    /**
     * Sets a new userAgendaHeader.
     *
     * @return self
     */
    public function setUserAgendaHeader(?\Pohoda\UserAgenda\UserAgendaHeaderType $userAgendaHeader = null)
    {
        $this->userAgendaHeader = $userAgendaHeader;

        return $this;
    }

    /**
     * Adds as userAgendaItem.
     *
     * @return self
     */
    public function addToUserAgendaDetail(\Pohoda\UserAgenda\UserAgendaItemType $userAgendaItem)
    {
        $this->userAgendaDetail[] = $userAgendaItem;

        return $this;
    }

    /**
     * isset userAgendaDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUserAgendaDetail($index)
    {
        return isset($this->userAgendaDetail[$index]);
    }

    /**
     * unset userAgendaDetail.
     *
     * @param int|string $index
     */
    public function unsetUserAgendaDetail($index): void
    {
        unset($this->userAgendaDetail[$index]);
    }

    /**
     * Gets as userAgendaDetail.
     *
     * @return \Pohoda\UserAgenda\UserAgendaItemType[]
     */
    public function getUserAgendaDetail()
    {
        return $this->userAgendaDetail;
    }

    /**
     * Sets a new userAgendaDetail.
     *
     * @param \Pohoda\UserAgenda\UserAgendaItemType[] $userAgendaDetail
     *
     * @return self
     */
    public function setUserAgendaDetail(?array $userAgendaDetail = null)
    {
        $this->userAgendaDetail = $userAgendaDetail;

        return $this;
    }

    /**
     * Gets as attachments.
     *
     * Záznamy ze záložky "Dokumenty".
     *
     * @return \Pohoda\Type\AttachmentsType
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments.
     *
     * Záznamy ze záložky "Dokumenty".
     *
     * @return self
     */
    public function setAttachments(?\Pohoda\Type\AttachmentsType $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Adds as printerSettings.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return self
     */
    public function addToPrint(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->print[] = $printerSettings;

        return $this;
    }

    /**
     * isset print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrint($index)
    {
        return isset($this->print[$index]);
    }

    /**
     * unset print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     */
    public function unsetPrint($index): void
    {
        unset($this->print[$index]);
    }

    /**
     * Gets as print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return \Pohoda\Print\PrinterSettingsType[]
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $print
     *
     * @return self
     */
    public function setPrint(?array $print = null)
    {
        $this->print = $print;

        return $this;
    }
}
