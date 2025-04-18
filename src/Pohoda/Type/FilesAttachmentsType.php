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

namespace Pohoda\Type;

/**
 * Class representing FilesAttachmentsType.
 *
 * XSD Type: filesAttachmentsType
 */
class FilesAttachmentsType
{
    /**
     * Složka dokumentů firmy (pouze export).
     */
    private ?string $companyDocumentsFolder = null;

    /**
     * Podsložka, do níž budete ukládat dokumenty spojené s aktuálním záznamem.
     */
    private ?string $subFolder = null;

    /**
     * Soubor v adresáři (pouze export).
     *
     * @var \Pohoda\Type\ContFileType[]
     */
    private array $file = [
    ];

    /**
     * Gets as companyDocumentsFolder.
     *
     * Složka dokumentů firmy (pouze export).
     *
     * @return string
     */
    public function getCompanyDocumentsFolder()
    {
        return $this->companyDocumentsFolder;
    }

    /**
     * Sets a new companyDocumentsFolder.
     *
     * Složka dokumentů firmy (pouze export).
     *
     * @param string $companyDocumentsFolder
     *
     * @return self
     */
    public function setCompanyDocumentsFolder($companyDocumentsFolder)
    {
        $this->companyDocumentsFolder = $companyDocumentsFolder;

        return $this;
    }

    /**
     * Gets as subFolder.
     *
     * Podsložka, do níž budete ukládat dokumenty spojené s aktuálním záznamem.
     *
     * @return string
     */
    public function getSubFolder()
    {
        return $this->subFolder;
    }

    /**
     * Sets a new subFolder.
     *
     * Podsložka, do níž budete ukládat dokumenty spojené s aktuálním záznamem.
     *
     * @param string $subFolder
     *
     * @return self
     */
    public function setSubFolder($subFolder)
    {
        $this->subFolder = $subFolder;

        return $this;
    }

    /**
     * Adds as file.
     *
     * Soubor v adresáři (pouze export).
     *
     * @return self
     */
    public function addToFile(\Pohoda\Type\ContFileType $file)
    {
        $this->file[] = $file;

        return $this;
    }

    /**
     * isset file.
     *
     * Soubor v adresáři (pouze export).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetFile($index)
    {
        return isset($this->file[$index]);
    }

    /**
     * unset file.
     *
     * Soubor v adresáři (pouze export).
     *
     * @param int|string $index
     */
    public function unsetFile($index): void
    {
        unset($this->file[$index]);
    }

    /**
     * Gets as file.
     *
     * Soubor v adresáři (pouze export).
     *
     * @return \Pohoda\Type\ContFileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file.
     *
     * Soubor v adresáři (pouze export).
     *
     * @param \Pohoda\Type\ContFileType[] $file
     *
     * @return self
     */
    public function setFile(?array $file = null)
    {
        $this->file = $file;

        return $this;
    }
}
