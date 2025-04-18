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

namespace Pohoda\Print;

/**
 * Class representing PDFType.
 *
 * XSD Type: PDFType
 */
class PDFType
{
    /**
     * Název a umístění PDF souboru (př. "C:\PDF\faktura_c_FV160006.pdf").
     */
    private ?string $fileName = null;

    /**
     * Odeslat PDF emailem.
     */
    private ?\Pohoda\Print\SendMailType $sendMail = null;

    private ?\Pohoda\Print\BinaryDataType $binaryData = null;

    private ?\Pohoda\Print\IsdocType $isdoc = null;

    /**
     * Gets as fileName.
     *
     * Název a umístění PDF souboru (př. "C:\PDF\faktura_c_FV160006.pdf").
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName.
     *
     * Název a umístění PDF souboru (př. "C:\PDF\faktura_c_FV160006.pdf").
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Gets as sendMail.
     *
     * Odeslat PDF emailem.
     *
     * @return \Pohoda\Print\SendMailType
     */
    public function getSendMail()
    {
        return $this->sendMail;
    }

    /**
     * Sets a new sendMail.
     *
     * Odeslat PDF emailem.
     *
     * @return self
     */
    public function setSendMail(?\Pohoda\Print\SendMailType $sendMail = null)
    {
        $this->sendMail = $sendMail;

        return $this;
    }

    /**
     * Gets as binaryData.
     *
     * @return \Pohoda\Print\BinaryDataType
     */
    public function getBinaryData()
    {
        return $this->binaryData;
    }

    /**
     * Sets a new binaryData.
     *
     * @return self
     */
    public function setBinaryData(?\Pohoda\Print\BinaryDataType $binaryData = null)
    {
        $this->binaryData = $binaryData;

        return $this;
    }

    /**
     * Gets as isdoc.
     *
     * @return \Pohoda\Print\IsdocType
     */
    public function getIsdoc()
    {
        return $this->isdoc;
    }

    /**
     * Sets a new isdoc.
     *
     * @return self
     */
    public function setIsdoc(?\Pohoda\Print\IsdocType $isdoc = null)
    {
        $this->isdoc = $isdoc;

        return $this;
    }
}
