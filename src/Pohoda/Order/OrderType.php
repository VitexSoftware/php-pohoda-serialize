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

namespace Pohoda\Order;

/**
 * Class representing OrderType.
 *
 * XSD Type: orderType
 */
class OrderType
{
    private ?string $version = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky).
     *
     * @var \Pohoda\Type\LinksType[]
     */
    private array $links = [
    ];

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\Order\ActionTypeType[]
     */
    private array $actionType = [
    ];

    /**
     * @var \Pohoda\Order\OrderHeaderType[]
     */
    private array $orderHeader = [
    ];

    /**
     * @var \Pohoda\Order\OrderDetailType[]
     */
    private array $orderDetail = [
    ];

    /**
     * @var \Pohoda\Order\OrderSummaryType[]
     */
    private array $orderSummary = [
    ];

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @var \Pohoda\Type\LinksType[]
     */
    private array $linkedDocuments = [
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
     * Adds as links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @return self
     */
    public function addToLinks(\Pohoda\Type\LinksType $links)
    {
        $this->links[] = $links;

        return $this;
    }

    /**
     * isset links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLinks($index)
    {
        return isset($this->links[$index]);
    }

    /**
     * unset links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @param int|string $index
     */
    public function unsetLinks($index): void
    {
        unset($this->links[$index]);
    }

    /**
     * Gets as links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @return \Pohoda\Type\LinksType[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links.
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @param \Pohoda\Type\LinksType[] $links
     *
     * @return self
     */
    public function setLinks(array $links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Adds as actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return self
     */
    public function addToActionType(\Pohoda\Order\ActionTypeType $actionType)
    {
        $this->actionType[] = $actionType;

        return $this;
    }

    /**
     * isset actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActionType($index)
    {
        return isset($this->actionType[$index]);
    }

    /**
     * unset actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param int|string $index
     */
    public function unsetActionType($index): void
    {
        unset($this->actionType[$index]);
    }

    /**
     * Gets as actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\Order\ActionTypeType[]
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\Order\ActionTypeType[] $actionType
     *
     * @return self
     */
    public function setActionType(array $actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Adds as orderHeader.
     *
     * @return self
     */
    public function addToOrderHeader(\Pohoda\Order\OrderHeaderType $orderHeader)
    {
        $this->orderHeader[] = $orderHeader;

        return $this;
    }

    /**
     * isset orderHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOrderHeader($index)
    {
        return isset($this->orderHeader[$index]);
    }

    /**
     * unset orderHeader.
     *
     * @param int|string $index
     */
    public function unsetOrderHeader($index): void
    {
        unset($this->orderHeader[$index]);
    }

    /**
     * Gets as orderHeader.
     *
     * @return \Pohoda\Order\OrderHeaderType[]
     */
    public function getOrderHeader()
    {
        return $this->orderHeader;
    }

    /**
     * Sets a new orderHeader.
     *
     * @param \Pohoda\Order\OrderHeaderType[] $orderHeader
     *
     * @return self
     */
    public function setOrderHeader(array $orderHeader)
    {
        $this->orderHeader = $orderHeader;

        return $this;
    }

    /**
     * Adds as orderDetail.
     *
     * @return self
     */
    public function addToOrderDetail(\Pohoda\Order\OrderDetailType $orderDetail)
    {
        $this->orderDetail[] = $orderDetail;

        return $this;
    }

    /**
     * isset orderDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOrderDetail($index)
    {
        return isset($this->orderDetail[$index]);
    }

    /**
     * unset orderDetail.
     *
     * @param int|string $index
     */
    public function unsetOrderDetail($index): void
    {
        unset($this->orderDetail[$index]);
    }

    /**
     * Gets as orderDetail.
     *
     * @return \Pohoda\Order\OrderDetailType[]
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }

    /**
     * Sets a new orderDetail.
     *
     * @param \Pohoda\Order\OrderDetailType[] $orderDetail
     *
     * @return self
     */
    public function setOrderDetail(array $orderDetail)
    {
        $this->orderDetail = $orderDetail;

        return $this;
    }

    /**
     * Adds as orderSummary.
     *
     * @return self
     */
    public function addToOrderSummary(\Pohoda\Order\OrderSummaryType $orderSummary)
    {
        $this->orderSummary[] = $orderSummary;

        return $this;
    }

    /**
     * isset orderSummary.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOrderSummary($index)
    {
        return isset($this->orderSummary[$index]);
    }

    /**
     * unset orderSummary.
     *
     * @param int|string $index
     */
    public function unsetOrderSummary($index): void
    {
        unset($this->orderSummary[$index]);
    }

    /**
     * Gets as orderSummary.
     *
     * @return \Pohoda\Order\OrderSummaryType[]
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    /**
     * Sets a new orderSummary.
     *
     * @param \Pohoda\Order\OrderSummaryType[] $orderSummary
     *
     * @return self
     */
    public function setOrderSummary(array $orderSummary)
    {
        $this->orderSummary = $orderSummary;

        return $this;
    }

    /**
     * Adds as linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return self
     */
    public function addToLinkedDocuments(\Pohoda\Type\LinksType $linkedDocuments)
    {
        $this->linkedDocuments[] = $linkedDocuments;

        return $this;
    }

    /**
     * isset linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLinkedDocuments($index)
    {
        return isset($this->linkedDocuments[$index]);
    }

    /**
     * unset linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @param int|string $index
     */
    public function unsetLinkedDocuments($index): void
    {
        unset($this->linkedDocuments[$index]);
    }

    /**
     * Gets as linkedDocuments.
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return \Pohoda\Type\LinksType[]
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
     * @param \Pohoda\Type\LinksType[] $linkedDocuments
     *
     * @return self
     */
    public function setLinkedDocuments(array $linkedDocuments)
    {
        $this->linkedDocuments = $linkedDocuments;

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
