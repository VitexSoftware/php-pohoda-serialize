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

namespace Pohoda\Offer;

/**
 * Class representing OfferType.
 *
 * XSD Type: offerType
 */
class OfferType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\Offer\OfferHeaderType[]
     */
    private array $offerHeader = [
    ];

    /**
     * @var \Pohoda\Offer\OfferDetailType[]
     */
    private array $offerDetail = [
    ];

    /**
     * @var \Pohoda\Offer\OfferSummaryType[]
     */
    private array $offerSummary = [
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
     * Adds as offerHeader.
     *
     * @return self
     */
    public function addToOfferHeader(\Pohoda\Offer\OfferHeaderType $offerHeader)
    {
        $this->offerHeader[] = $offerHeader;

        return $this;
    }

    /**
     * isset offerHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOfferHeader($index)
    {
        return isset($this->offerHeader[$index]);
    }

    /**
     * unset offerHeader.
     *
     * @param int|string $index
     */
    public function unsetOfferHeader($index): void
    {
        unset($this->offerHeader[$index]);
    }

    /**
     * Gets as offerHeader.
     *
     * @return \Pohoda\Offer\OfferHeaderType[]
     */
    public function getOfferHeader()
    {
        return $this->offerHeader;
    }

    /**
     * Sets a new offerHeader.
     *
     * @param \Pohoda\Offer\OfferHeaderType[] $offerHeader
     *
     * @return self
     */
    public function setOfferHeader(array $offerHeader)
    {
        $this->offerHeader = $offerHeader;

        return $this;
    }

    /**
     * Adds as offerDetail.
     *
     * @return self
     */
    public function addToOfferDetail(\Pohoda\Offer\OfferDetailType $offerDetail)
    {
        $this->offerDetail[] = $offerDetail;

        return $this;
    }

    /**
     * isset offerDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOfferDetail($index)
    {
        return isset($this->offerDetail[$index]);
    }

    /**
     * unset offerDetail.
     *
     * @param int|string $index
     */
    public function unsetOfferDetail($index): void
    {
        unset($this->offerDetail[$index]);
    }

    /**
     * Gets as offerDetail.
     *
     * @return \Pohoda\Offer\OfferDetailType[]
     */
    public function getOfferDetail()
    {
        return $this->offerDetail;
    }

    /**
     * Sets a new offerDetail.
     *
     * @param \Pohoda\Offer\OfferDetailType[] $offerDetail
     *
     * @return self
     */
    public function setOfferDetail(array $offerDetail)
    {
        $this->offerDetail = $offerDetail;

        return $this;
    }

    /**
     * Adds as offerSummary.
     *
     * @return self
     */
    public function addToOfferSummary(\Pohoda\Offer\OfferSummaryType $offerSummary)
    {
        $this->offerSummary[] = $offerSummary;

        return $this;
    }

    /**
     * isset offerSummary.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOfferSummary($index)
    {
        return isset($this->offerSummary[$index]);
    }

    /**
     * unset offerSummary.
     *
     * @param int|string $index
     */
    public function unsetOfferSummary($index): void
    {
        unset($this->offerSummary[$index]);
    }

    /**
     * Gets as offerSummary.
     *
     * @return \Pohoda\Offer\OfferSummaryType[]
     */
    public function getOfferSummary()
    {
        return $this->offerSummary;
    }

    /**
     * Sets a new offerSummary.
     *
     * @param \Pohoda\Offer\OfferSummaryType[] $offerSummary
     *
     * @return self
     */
    public function setOfferSummary(array $offerSummary)
    {
        $this->offerSummary = $offerSummary;

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
