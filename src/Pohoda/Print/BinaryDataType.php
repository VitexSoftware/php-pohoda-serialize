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
 * Class representing BinaryDataType.
 *
 * XSD Type: binaryDataType
 */
class BinaryDataType
{
    /**
     * Ve výstupním souboru bude uložen vytvořený soubor ve formátu Base64.
     */
    private ?string $responseXml = null;

    /**
     * Odstranit vytvořený soubor.
     */
    private ?string $removeFile = null;

    /**
     * Gets as responseXml.
     *
     * Ve výstupním souboru bude uložen vytvořený soubor ve formátu Base64.
     *
     * @return string
     */
    public function getResponseXml()
    {
        return $this->responseXml;
    }

    /**
     * Sets a new responseXml.
     *
     * Ve výstupním souboru bude uložen vytvořený soubor ve formátu Base64.
     *
     * @param string $responseXml
     *
     * @return self
     */
    public function setResponseXml($responseXml)
    {
        $this->responseXml = $responseXml;

        return $this;
    }

    /**
     * Gets as removeFile.
     *
     * Odstranit vytvořený soubor.
     *
     * @return string
     */
    public function getRemoveFile()
    {
        return $this->removeFile;
    }

    /**
     * Sets a new removeFile.
     *
     * Odstranit vytvořený soubor.
     *
     * @param string $removeFile
     *
     * @return self
     */
    public function setRemoveFile($removeFile)
    {
        $this->removeFile = $removeFile;

        return $this;
    }
}
