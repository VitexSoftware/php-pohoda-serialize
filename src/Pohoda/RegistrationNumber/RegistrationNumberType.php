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

namespace Pohoda\RegistrationNumber;

/**
 * Class representing RegistrationNumberType.
 *
 * XSD Type: registrationNumberType
 */
class RegistrationNumberType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\RegistrationNumber\RegistrationNumberHeaderType[]
     */
    private array $registrationNumberHeader = [
    ];

    /**
     * Záznamy ze záložky "Dokumenty".
     *
     * @var \Pohoda\Type\AttachmentsType[]
     */
    private array $attachments = [
    ];

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
     * Adds as registrationNumberHeader.
     *
     * @return self
     */
    public function addToRegistrationNumberHeader(\Pohoda\RegistrationNumber\RegistrationNumberHeaderType $registrationNumberHeader)
    {
        $this->registrationNumberHeader[] = $registrationNumberHeader;

        return $this;
    }

    /**
     * isset registrationNumberHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRegistrationNumberHeader($index)
    {
        return isset($this->registrationNumberHeader[$index]);
    }

    /**
     * unset registrationNumberHeader.
     *
     * @param int|string $index
     */
    public function unsetRegistrationNumberHeader($index): void
    {
        unset($this->registrationNumberHeader[$index]);
    }

    /**
     * Gets as registrationNumberHeader.
     *
     * @return \Pohoda\RegistrationNumber\RegistrationNumberHeaderType[]
     */
    public function getRegistrationNumberHeader()
    {
        return $this->registrationNumberHeader;
    }

    /**
     * Sets a new registrationNumberHeader.
     *
     * @param \Pohoda\RegistrationNumber\RegistrationNumberHeaderType[] $registrationNumberHeader
     *
     * @return self
     */
    public function setRegistrationNumberHeader(?array $registrationNumberHeader = null)
    {
        $this->registrationNumberHeader = $registrationNumberHeader;

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
    public function setAttachments(?array $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }
}
