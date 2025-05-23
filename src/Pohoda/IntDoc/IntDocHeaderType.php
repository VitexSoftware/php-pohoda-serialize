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

namespace Pohoda\IntDoc;

/**
 * Class representing IntDocHeaderType.
 *
 * XSD Type: intDocHeaderType
 */
class IntDocHeaderType
{
    /**
     * ID záznamu. Používá se při requestu.
     */
    private ?int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     */
    private ?string $storno = null;

    /**
     * Evidenční číslo dokladu.
     */
    private ?\Pohoda\Type\NumberType $number = null;

    /**
     * Variabilní symbol.
     */
    private ?string $symVar = null;

    /**
     * Pár. symbol.
     */
    private ?string $symPar = null;

    /**
     * Původní číslo dokladu (pouze SK verze).
     */
    private ?string $originalDocumentNumber = null;

    /**
     * Pôvodný opravný doklad (pouze SK verze).
     */
    private ?string $originalCorrectiveDocument = null;

    /**
     * Datum vystavení dokladu. Tento element je vyžadován při vytvoření dokladu.
     */
    private ?\DateTime $date = null;

    /**
     * Datum zdanitelného plnění.
     */
    private ?\DateTime $dateTax = null;

    /**
     * Datum účetního případu.
     */
    private ?\DateTime $dateAccounting = null;

    /**
     * Datum dodání tovaru (pouze SK verze).
     */
    private ?\DateTime $dateDelivery = null;

    /**
     * Datum KV DPH (pouze SK verze).
     */
    private ?\DateTime $dateKVDPH = null;

    /**
     * Datum KH DPH. Pokud není datum KH DPH uveden, nebude na dokladu nastaven (pouze CZ verze).
     */
    private ?\DateTime $dateKHDPH = null;

    /**
     * Předkontace. Pokud není uveden typ předkontace, je nastaveno 'Nevím'.
     */
    private ?\Pohoda\Type\AccountingType $accounting = null;

    /**
     * Členění DPH, přednastavená hodnota je "inland".
     */
    private ?\Pohoda\Type\ClassificationVATType $classificationVAT = null;

    /**
     * Členění KV DPH (pouze SK verze).
     */
    private ?\Pohoda\Type\RefType $classificationKVDPH = null;

    /**
     * Evidenční číslo KH DPH. Pokud není uvedeno, nebude na dokladu nastaveno (pouze CZ verze).
     */
    private ?string $numberKHDPH = null;

    /**
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
     */
    private ?string $text = null;

    /**
     * Zákazníkova adresa.
     */
    private ?\Pohoda\Type\AddressType $partnerIdentity = null;

    /**
     * Osobní adresa.
     */
    private ?\Pohoda\Type\MyAddressType $myIdentity = null;

    /**
     * Úhrada tohoto účetního dokladu proběhne formou likvidace.
     */
    private ?string $liquidation = null;

    /**
     * Středisko.
     */
    private ?\Pohoda\Type\RefType $centre = null;

    /**
     * Činnost.
     */
    private ?\Pohoda\Type\RefType $activity = null;

    /**
     * Zakázka.
     */
    private ?\Pohoda\Type\RefType $contract = null;

    /**
     * Registrace DPH v EU.
     */
    private ?\Pohoda\Type\RefTypeRegVATinEUType $regVATinEU = null;

    /**
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     */
    private ?\Pohoda\Type\MOSStypeType $mOSS = null;

    /**
     * Důkazní prostředky (OSS).
     *
     * @var string[]
     */
    private ?array $evidentiaryResourcesMOSS = null;

    /**
     * Účetní období (OSS).
     */
    private ?string $accountingPeriodMOSS = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Interní poznámka.
     */
    private ?string $intNote = null;

    /**
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     */
    private ?string $histRate = null;

    /**
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     */
    private ?string $lock1 = null;

    /**
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     */
    private ?string $lock2 = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private ?string $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[]
     */
    private ?array $labels = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private ?array $parameters = null;

    /**
     * Gets as id.
     *
     * ID záznamu. Používá se při requestu.
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
     * ID záznamu. Používá se při requestu.
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
     * Gets as extId.
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as storno.
     *
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @return string
     */
    public function getStorno()
    {
        return $this->storno;
    }

    /**
     * Sets a new storno.
     *
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @param string $storno
     *
     * @return self
     */
    public function setStorno($storno)
    {
        $this->storno = $storno;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Evidenční číslo dokladu.
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
     * Evidenční číslo dokladu.
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as symVar.
     *
     * Variabilní symbol.
     *
     * @return string
     */
    public function getSymVar()
    {
        return $this->symVar;
    }

    /**
     * Sets a new symVar.
     *
     * Variabilní symbol.
     *
     * @param string $symVar
     *
     * @return self
     */
    public function setSymVar($symVar)
    {
        $this->symVar = $symVar;

        return $this;
    }

    /**
     * Gets as symPar.
     *
     * Pár. symbol.
     *
     * @return string
     */
    public function getSymPar()
    {
        return $this->symPar;
    }

    /**
     * Sets a new symPar.
     *
     * Pár. symbol.
     *
     * @param string $symPar
     *
     * @return self
     */
    public function setSymPar($symPar)
    {
        $this->symPar = $symPar;

        return $this;
    }

    /**
     * Gets as originalDocumentNumber.
     *
     * Původní číslo dokladu (pouze SK verze).
     *
     * @return string
     */
    public function getOriginalDocumentNumber()
    {
        return $this->originalDocumentNumber;
    }

    /**
     * Sets a new originalDocumentNumber.
     *
     * Původní číslo dokladu (pouze SK verze).
     *
     * @param string $originalDocumentNumber
     *
     * @return self
     */
    public function setOriginalDocumentNumber($originalDocumentNumber)
    {
        $this->originalDocumentNumber = $originalDocumentNumber;

        return $this;
    }

    /**
     * Gets as originalCorrectiveDocument.
     *
     * Pôvodný opravný doklad (pouze SK verze).
     *
     * @return string
     */
    public function getOriginalCorrectiveDocument()
    {
        return $this->originalCorrectiveDocument;
    }

    /**
     * Sets a new originalCorrectiveDocument.
     *
     * Pôvodný opravný doklad (pouze SK verze).
     *
     * @param string $originalCorrectiveDocument
     *
     * @return self
     */
    public function setOriginalCorrectiveDocument($originalCorrectiveDocument)
    {
        $this->originalCorrectiveDocument = $originalCorrectiveDocument;

        return $this;
    }

    /**
     * Gets as date.
     *
     * Datum vystavení dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date.
     *
     * Datum vystavení dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as dateTax.
     *
     * Datum zdanitelného plnění.
     *
     * @return \DateTime
     */
    public function getDateTax()
    {
        return $this->dateTax;
    }

    /**
     * Sets a new dateTax.
     *
     * Datum zdanitelného plnění.
     *
     * @return self
     */
    public function setDateTax(?\DateTime $dateTax = null)
    {
        $this->dateTax = $dateTax;

        return $this;
    }

    /**
     * Gets as dateAccounting.
     *
     * Datum účetního případu.
     *
     * @return \DateTime
     */
    public function getDateAccounting()
    {
        return $this->dateAccounting;
    }

    /**
     * Sets a new dateAccounting.
     *
     * Datum účetního případu.
     *
     * @return self
     */
    public function setDateAccounting(?\DateTime $dateAccounting = null)
    {
        $this->dateAccounting = $dateAccounting;

        return $this;
    }

    /**
     * Gets as dateDelivery.
     *
     * Datum dodání tovaru (pouze SK verze).
     *
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * Sets a new dateDelivery.
     *
     * Datum dodání tovaru (pouze SK verze).
     *
     * @return self
     */
    public function setDateDelivery(?\DateTime $dateDelivery = null)
    {
        $this->dateDelivery = $dateDelivery;

        return $this;
    }

    /**
     * Gets as dateKVDPH.
     *
     * Datum KV DPH (pouze SK verze).
     *
     * @return \DateTime
     */
    public function getDateKVDPH()
    {
        return $this->dateKVDPH;
    }

    /**
     * Sets a new dateKVDPH.
     *
     * Datum KV DPH (pouze SK verze).
     *
     * @return self
     */
    public function setDateKVDPH(?\DateTime $dateKVDPH = null)
    {
        $this->dateKVDPH = $dateKVDPH;

        return $this;
    }

    /**
     * Gets as dateKHDPH.
     *
     * Datum KH DPH. Pokud není datum KH DPH uveden, nebude na dokladu nastaven (pouze CZ verze).
     *
     * @return \DateTime
     */
    public function getDateKHDPH()
    {
        return $this->dateKHDPH;
    }

    /**
     * Sets a new dateKHDPH.
     *
     * Datum KH DPH. Pokud není datum KH DPH uveden, nebude na dokladu nastaven (pouze CZ verze).
     *
     * @return self
     */
    public function setDateKHDPH(?\DateTime $dateKHDPH = null)
    {
        $this->dateKHDPH = $dateKHDPH;

        return $this;
    }

    /**
     * Gets as accounting.
     *
     * Předkontace. Pokud není uveden typ předkontace, je nastaveno 'Nevím'.
     *
     * @return \Pohoda\Type\AccountingType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting.
     *
     * Předkontace. Pokud není uveden typ předkontace, je nastaveno 'Nevím'.
     *
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\AccountingType $accounting = null)
    {
        $this->accounting = $accounting;

        return $this;
    }

    /**
     * Gets as classificationVAT.
     *
     * Členění DPH, přednastavená hodnota je "inland".
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVAT()
    {
        return $this->classificationVAT;
    }

    /**
     * Sets a new classificationVAT.
     *
     * Členění DPH, přednastavená hodnota je "inland".
     *
     * @return self
     */
    public function setClassificationVAT(?\Pohoda\Type\ClassificationVATType $classificationVAT = null)
    {
        $this->classificationVAT = $classificationVAT;

        return $this;
    }

    /**
     * Gets as classificationKVDPH.
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPH()
    {
        return $this->classificationKVDPH;
    }

    /**
     * Sets a new classificationKVDPH.
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @return self
     */
    public function setClassificationKVDPH(?\Pohoda\Type\RefType $classificationKVDPH = null)
    {
        $this->classificationKVDPH = $classificationKVDPH;

        return $this;
    }

    /**
     * Gets as numberKHDPH.
     *
     * Evidenční číslo KH DPH. Pokud není uvedeno, nebude na dokladu nastaveno (pouze CZ verze).
     *
     * @return string
     */
    public function getNumberKHDPH()
    {
        return $this->numberKHDPH;
    }

    /**
     * Sets a new numberKHDPH.
     *
     * Evidenční číslo KH DPH. Pokud není uvedeno, nebude na dokladu nastaveno (pouze CZ verze).
     *
     * @param string $numberKHDPH
     *
     * @return self
     */
    public function setNumberKHDPH($numberKHDPH)
    {
        $this->numberKHDPH = $numberKHDPH;

        return $this;
    }

    /**
     * Gets as text.
     *
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text.
     *
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as partnerIdentity.
     *
     * Zákazníkova adresa.
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getPartnerIdentity()
    {
        return $this->partnerIdentity;
    }

    /**
     * Sets a new partnerIdentity.
     *
     * Zákazníkova adresa.
     *
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;

        return $this;
    }

    /**
     * Gets as myIdentity.
     *
     * Osobní adresa.
     *
     * @return \Pohoda\Type\MyAddressType
     */
    public function getMyIdentity()
    {
        return $this->myIdentity;
    }

    /**
     * Sets a new myIdentity.
     *
     * Osobní adresa.
     *
     * @return self
     */
    public function setMyIdentity(?\Pohoda\Type\MyAddressType $myIdentity = null)
    {
        $this->myIdentity = $myIdentity;

        return $this;
    }

    /**
     * Gets as liquidation.
     *
     * Úhrada tohoto účetního dokladu proběhne formou likvidace.
     *
     * @return string
     */
    public function getLiquidation()
    {
        return $this->liquidation;
    }

    /**
     * Sets a new liquidation.
     *
     * Úhrada tohoto účetního dokladu proběhne formou likvidace.
     *
     * @param string $liquidation
     *
     * @return self
     */
    public function setLiquidation($liquidation)
    {
        $this->liquidation = $liquidation;

        return $this;
    }

    /**
     * Gets as centre.
     *
     * Středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre.
     *
     * Středisko.
     *
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Gets as activity.
     *
     * Činnost.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity.
     *
     * Činnost.
     *
     * @return self
     */
    public function setActivity(?\Pohoda\Type\RefType $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Gets as contract.
     *
     * Zakázka.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract.
     *
     * Zakázka.
     *
     * @return self
     */
    public function setContract(?\Pohoda\Type\RefType $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Gets as regVATinEU.
     *
     * Registrace DPH v EU.
     *
     * @return \Pohoda\Type\RefTypeRegVATinEUType
     */
    public function getRegVATinEU()
    {
        return $this->regVATinEU;
    }

    /**
     * Sets a new regVATinEU.
     *
     * Registrace DPH v EU.
     *
     * @return self
     */
    public function setRegVATinEU(?\Pohoda\Type\RefTypeRegVATinEUType $regVATinEU = null)
    {
        $this->regVATinEU = $regVATinEU;

        return $this;
    }

    /**
     * Gets as mOSS.
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @return \Pohoda\Type\MOSStypeType
     */
    public function getMOSS()
    {
        return $this->mOSS;
    }

    /**
     * Sets a new mOSS.
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @return self
     */
    public function setMOSS(?\Pohoda\Type\MOSStypeType $mOSS = null)
    {
        $this->mOSS = $mOSS;

        return $this;
    }

    /**
     * Adds as ids.
     *
     * Důkazní prostředky (OSS).
     *
     * @param string $ids
     *
     * @return self
     */
    public function addToEvidentiaryResourcesMOSS($ids)
    {
        $this->evidentiaryResourcesMOSS[] = $ids;

        return $this;
    }

    /**
     * isset evidentiaryResourcesMOSS.
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEvidentiaryResourcesMOSS($index)
    {
        return isset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * unset evidentiaryResourcesMOSS.
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     */
    public function unsetEvidentiaryResourcesMOSS($index): void
    {
        unset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * Gets as evidentiaryResourcesMOSS.
     *
     * Důkazní prostředky (OSS).
     *
     * @return string[]
     */
    public function getEvidentiaryResourcesMOSS()
    {
        return $this->evidentiaryResourcesMOSS;
    }

    /**
     * Sets a new evidentiaryResourcesMOSS.
     *
     * Důkazní prostředky (OSS).
     *
     * @param string[] $evidentiaryResourcesMOSS
     *
     * @return self
     */
    public function setEvidentiaryResourcesMOSS(?array $evidentiaryResourcesMOSS = null)
    {
        $this->evidentiaryResourcesMOSS = $evidentiaryResourcesMOSS;

        return $this;
    }

    /**
     * Gets as accountingPeriodMOSS.
     *
     * Účetní období (OSS).
     *
     * @return string
     */
    public function getAccountingPeriodMOSS()
    {
        return $this->accountingPeriodMOSS;
    }

    /**
     * Sets a new accountingPeriodMOSS.
     *
     * Účetní období (OSS).
     *
     * @param string $accountingPeriodMOSS
     *
     * @return self
     */
    public function setAccountingPeriodMOSS($accountingPeriodMOSS)
    {
        $this->accountingPeriodMOSS = $accountingPeriodMOSS;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka.
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
     * Poznámka.
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
     * Gets as intNote.
     *
     * Interní poznámka.
     *
     * @return string
     */
    public function getIntNote()
    {
        return $this->intNote;
    }

    /**
     * Sets a new intNote.
     *
     * Interní poznámka.
     *
     * @param string $intNote
     *
     * @return self
     */
    public function setIntNote($intNote)
    {
        $this->intNote = $intNote;

        return $this;
    }

    /**
     * Gets as histRate.
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @return string
     */
    public function getHistRate()
    {
        return $this->histRate;
    }

    /**
     * Sets a new histRate.
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @param string $histRate
     *
     * @return self
     */
    public function setHistRate($histRate)
    {
        $this->histRate = $histRate;

        return $this;
    }

    /**
     * Gets as lock1.
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @return string
     */
    public function getLock1()
    {
        return $this->lock1;
    }

    /**
     * Sets a new lock1.
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @param string $lock1
     *
     * @return self
     */
    public function setLock1($lock1)
    {
        $this->lock1 = $lock1;

        return $this;
    }

    /**
     * Gets as lock2.
     *
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @return string
     */
    public function getLock2()
    {
        return $this->lock2;
    }

    /**
     * Sets a new lock2.
     *
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @param string $lock2
     *
     * @return self
     */
    public function setLock2($lock2)
    {
        $this->lock2 = $lock2;

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
     * Adds as label.
     *
     * Štítky záznamu.
     *
     * @return self
     */
    public function addToLabels(\Pohoda\Type\LabelType $label)
    {
        $this->labels[] = $label;

        return $this;
    }

    /**
     * isset labels.
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLabels($index)
    {
        return isset($this->labels[$index]);
    }

    /**
     * unset labels.
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     */
    public function unsetLabels($index): void
    {
        unset($this->labels[$index]);
    }

    /**
     * Gets as labels.
     *
     * Štítky záznamu.
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets a new labels.
     *
     * Štítky záznamu.
     *
     * @param \Pohoda\Type\LabelType[] $labels
     *
     * @return self
     */
    public function setLabels(?array $labels = null)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * Volitelný parametr.
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
     * Volitelný parametr.
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
     * Volitelný parametr.
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
     * Volitelný parametr.
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
     * Volitelný parametr.
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
