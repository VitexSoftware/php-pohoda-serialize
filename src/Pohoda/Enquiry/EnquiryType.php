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

namespace Pohoda\Enquiry;

/**
 * Class representing EnquiryType.
 *
 * XSD Type: enquiryType
 */
class EnquiryType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\Enquiry\EnquiryHeaderType[]
     */
    private array $enquiryHeader = [
    ];

    /**
     * @var \Pohoda\Enquiry\EnquiryDetailType[]
     */
    private array $enquiryDetail = [
    ];

    /**
     * @var \Pohoda\Enquiry\EnquirySummaryType[]
     */
    private array $enquirySummary = [
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
     * Adds as enquiryHeader.
     *
     * @return self
     */
    public function addToEnquiryHeader(\Pohoda\Enquiry\EnquiryHeaderType $enquiryHeader)
    {
        $this->enquiryHeader[] = $enquiryHeader;

        return $this;
    }

    /**
     * isset enquiryHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnquiryHeader($index)
    {
        return isset($this->enquiryHeader[$index]);
    }

    /**
     * unset enquiryHeader.
     *
     * @param int|string $index
     */
    public function unsetEnquiryHeader($index): void
    {
        unset($this->enquiryHeader[$index]);
    }

    /**
     * Gets as enquiryHeader.
     *
     * @return \Pohoda\Enquiry\EnquiryHeaderType[]
     */
    public function getEnquiryHeader()
    {
        return $this->enquiryHeader;
    }

    /**
     * Sets a new enquiryHeader.
     *
     * @param \Pohoda\Enquiry\EnquiryHeaderType[] $enquiryHeader
     *
     * @return self
     */
    public function setEnquiryHeader(array $enquiryHeader)
    {
        $this->enquiryHeader = $enquiryHeader;

        return $this;
    }

    /**
     * Adds as enquiryDetail.
     *
     * @return self
     */
    public function addToEnquiryDetail(\Pohoda\Enquiry\EnquiryDetailType $enquiryDetail)
    {
        $this->enquiryDetail[] = $enquiryDetail;

        return $this;
    }

    /**
     * isset enquiryDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnquiryDetail($index)
    {
        return isset($this->enquiryDetail[$index]);
    }

    /**
     * unset enquiryDetail.
     *
     * @param int|string $index
     */
    public function unsetEnquiryDetail($index): void
    {
        unset($this->enquiryDetail[$index]);
    }

    /**
     * Gets as enquiryDetail.
     *
     * @return \Pohoda\Enquiry\EnquiryDetailType[]
     */
    public function getEnquiryDetail()
    {
        return $this->enquiryDetail;
    }

    /**
     * Sets a new enquiryDetail.
     *
     * @param \Pohoda\Enquiry\EnquiryDetailType[] $enquiryDetail
     *
     * @return self
     */
    public function setEnquiryDetail(array $enquiryDetail)
    {
        $this->enquiryDetail = $enquiryDetail;

        return $this;
    }

    /**
     * Adds as enquirySummary.
     *
     * @return self
     */
    public function addToEnquirySummary(\Pohoda\Enquiry\EnquirySummaryType $enquirySummary)
    {
        $this->enquirySummary[] = $enquirySummary;

        return $this;
    }

    /**
     * isset enquirySummary.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnquirySummary($index)
    {
        return isset($this->enquirySummary[$index]);
    }

    /**
     * unset enquirySummary.
     *
     * @param int|string $index
     */
    public function unsetEnquirySummary($index): void
    {
        unset($this->enquirySummary[$index]);
    }

    /**
     * Gets as enquirySummary.
     *
     * @return \Pohoda\Enquiry\EnquirySummaryType[]
     */
    public function getEnquirySummary()
    {
        return $this->enquirySummary;
    }

    /**
     * Sets a new enquirySummary.
     *
     * @param \Pohoda\Enquiry\EnquirySummaryType[] $enquirySummary
     *
     * @return self
     */
    public function setEnquirySummary(array $enquirySummary)
    {
        $this->enquirySummary = $enquirySummary;

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
