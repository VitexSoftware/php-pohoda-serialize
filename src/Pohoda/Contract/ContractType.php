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

namespace Pohoda\Contract;

/**
 * Class representing ContractType.
 *
 * XSD Type: contractType
 */
class ContractType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\Contract\ContractDescType[]
     */
    private array $contractDesc = [
    ];

    /**
     * Záznamy ze záložky "Dokumenty".
     *
     * @var \Pohoda\Type\AttachmentsType[]
     */
    private array $attachments = [
    ];

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
     * Adds as contractDesc.
     *
     * @return self
     */
    public function addToContractDesc(\Pohoda\Contract\ContractDescType $contractDesc)
    {
        $this->contractDesc[] = $contractDesc;

        return $this;
    }

    /**
     * isset contractDesc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetContractDesc($index)
    {
        return isset($this->contractDesc[$index]);
    }

    /**
     * unset contractDesc.
     *
     * @param int|string $index
     */
    public function unsetContractDesc($index): void
    {
        unset($this->contractDesc[$index]);
    }

    /**
     * Gets as contractDesc.
     *
     * @return \Pohoda\Contract\ContractDescType[]
     */
    public function getContractDesc()
    {
        return $this->contractDesc;
    }

    /**
     * Sets a new contractDesc.
     *
     * @param \Pohoda\Contract\ContractDescType[] $contractDesc
     *
     * @return self
     */
    public function setContractDesc(array $contractDesc)
    {
        $this->contractDesc = $contractDesc;

        return $this;
    }

    /**
     * Adds as attachments.
     *
     * Záznamy ze záložky "Dokumenty".
     *
     * @return self
     */
    public function addToAttachments(\Pohoda\Type\AttachmentsType $attachments)
    {
        $this->attachments[] = $attachments;

        return $this;
    }

    /**
     * isset attachments.
     *
     * Záznamy ze záložky "Dokumenty".
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAttachments($index)
    {
        return isset($this->attachments[$index]);
    }

    /**
     * unset attachments.
     *
     * Záznamy ze záložky "Dokumenty".
     *
     * @param int|string $index
     */
    public function unsetAttachments($index): void
    {
        unset($this->attachments[$index]);
    }

    /**
     * Gets as attachments.
     *
     * Záznamy ze záložky "Dokumenty".
     *
     * @return \Pohoda\Type\AttachmentsType[]
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
     * @param \Pohoda\Type\AttachmentsType[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments)
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
    public function setPrint(array $print)
    {
        $this->print = $print;

        return $this;
    }
}
