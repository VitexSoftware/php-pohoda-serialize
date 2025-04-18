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

namespace Pohoda\Bank;

/**
 * Class representing BankType.
 *
 * XSD Type: bankType
 */
class BankType
{
    private ?string $version = null;

    private ?\Pohoda\Bank\BankHeaderType $bankHeader = null;

    private ?\Pohoda\Bank\BankDetailType $bankDetail = null;

    private ?\Pohoda\Bank\BankSummaryType $bankSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     */
    private ?\Pohoda\Type\LinksType $linkedDocuments = null;

    /**
     * Záznamy ze záložky "Dokumenty".
     */
    private ?\Pohoda\Type\AttachmentsType $attachments = null;

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
     * Gets as bankHeader.
     *
     * @return \Pohoda\Bank\BankHeaderType
     */
    public function getBankHeader()
    {
        return $this->bankHeader;
    }

    /**
     * Sets a new bankHeader.
     *
     * @return self
     */
    public function setBankHeader(?\Pohoda\Bank\BankHeaderType $bankHeader = null)
    {
        $this->bankHeader = $bankHeader;

        return $this;
    }

    /**
     * Gets as bankDetail.
     *
     * @return \Pohoda\Bank\BankDetailType
     */
    public function getBankDetail()
    {
        return $this->bankDetail;
    }

    /**
     * Sets a new bankDetail.
     *
     * @return self
     */
    public function setBankDetail(?\Pohoda\Bank\BankDetailType $bankDetail = null)
    {
        $this->bankDetail = $bankDetail;

        return $this;
    }

    /**
     * Gets as bankSummary.
     *
     * @return \Pohoda\Bank\BankSummaryType
     */
    public function getBankSummary()
    {
        return $this->bankSummary;
    }

    /**
     * Sets a new bankSummary.
     *
     * @return self
     */
    public function setBankSummary(?\Pohoda\Bank\BankSummaryType $bankSummary = null)
    {
        $this->bankSummary = $bankSummary;

        return $this;
    }

    /**
     * Gets as linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinkedDocuments()
    {
        return $this->linkedDocuments;
    }

    /**
     * Sets a new linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return self
     */
    public function setLinkedDocuments(?\Pohoda\Type\LinksType $linkedDocuments = null)
    {
        $this->linkedDocuments = $linkedDocuments;

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
}
