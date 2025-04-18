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
 * Class representing AttachmentsType.
 *
 * Záznamy ze záložky "Dokumenty".
 * XSD Type: attachmentsType
 */
class AttachmentsType
{
    /**
     * Soubory v definované složce.
     *
     * @var \Pohoda\Type\FilesAttachmentsType[]
     */
    private array $files = [
    ];

    /**
     * URL adresa.
     *
     * @var \Pohoda\Type\ContUrlAddressType[]
     */
    private array $urlAddress = [
    ];

    /**
     * Zástupce.
     *
     * @var \Pohoda\Type\ContShortcutType[]
     */
    private array $shortcut = [
    ];

    /**
     * Adds as files.
     *
     * Soubory v definované složce.
     *
     * @return self
     */
    public function addToFiles(\Pohoda\Type\FilesAttachmentsType $files)
    {
        $this->files[] = $files;

        return $this;
    }

    /**
     * isset files.
     *
     * Soubory v definované složce.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetFiles($index)
    {
        return isset($this->files[$index]);
    }

    /**
     * unset files.
     *
     * Soubory v definované složce.
     *
     * @param int|string $index
     */
    public function unsetFiles($index): void
    {
        unset($this->files[$index]);
    }

    /**
     * Gets as files.
     *
     * Soubory v definované složce.
     *
     * @return \Pohoda\Type\FilesAttachmentsType[]
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Sets a new files.
     *
     * Soubory v definované složce.
     *
     * @param \Pohoda\Type\FilesAttachmentsType[] $files
     *
     * @return self
     */
    public function setFiles(?array $files = null)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Adds as urlAddress.
     *
     * URL adresa.
     *
     * @return self
     */
    public function addToUrlAddress(\Pohoda\Type\ContUrlAddressType $urlAddress)
    {
        $this->urlAddress[] = $urlAddress;

        return $this;
    }

    /**
     * isset urlAddress.
     *
     * URL adresa.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUrlAddress($index)
    {
        return isset($this->urlAddress[$index]);
    }

    /**
     * unset urlAddress.
     *
     * URL adresa.
     *
     * @param int|string $index
     */
    public function unsetUrlAddress($index): void
    {
        unset($this->urlAddress[$index]);
    }

    /**
     * Gets as urlAddress.
     *
     * URL adresa.
     *
     * @return \Pohoda\Type\ContUrlAddressType[]
     */
    public function getUrlAddress()
    {
        return $this->urlAddress;
    }

    /**
     * Sets a new urlAddress.
     *
     * URL adresa.
     *
     * @param \Pohoda\Type\ContUrlAddressType[] $urlAddress
     *
     * @return self
     */
    public function setUrlAddress(?array $urlAddress = null)
    {
        $this->urlAddress = $urlAddress;

        return $this;
    }

    /**
     * Adds as shortcut.
     *
     * Zástupce.
     *
     * @return self
     */
    public function addToShortcut(\Pohoda\Type\ContShortcutType $shortcut)
    {
        $this->shortcut[] = $shortcut;

        return $this;
    }

    /**
     * isset shortcut.
     *
     * Zástupce.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetShortcut($index)
    {
        return isset($this->shortcut[$index]);
    }

    /**
     * unset shortcut.
     *
     * Zástupce.
     *
     * @param int|string $index
     */
    public function unsetShortcut($index): void
    {
        unset($this->shortcut[$index]);
    }

    /**
     * Gets as shortcut.
     *
     * Zástupce.
     *
     * @return \Pohoda\Type\ContShortcutType[]
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }

    /**
     * Sets a new shortcut.
     *
     * Zástupce.
     *
     * @param \Pohoda\Type\ContShortcutType[] $shortcut
     *
     * @return self
     */
    public function setShortcut(?array $shortcut = null)
    {
        $this->shortcut = $shortcut;

        return $this;
    }
}
