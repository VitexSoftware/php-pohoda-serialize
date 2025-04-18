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

namespace Pohoda\Gdpr;

/**
 * Class representing GDPRType.
 *
 * XSD Type: GDPRType
 */
class GDPRType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\Gdpr\GDPRHeaderType[]
     */
    private array $gDPRHeader = [
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
     * Adds as gDPRHeader.
     *
     * @return self
     */
    public function addToGDPRHeader(\Pohoda\Gdpr\GDPRHeaderType $gDPRHeader)
    {
        $this->gDPRHeader[] = $gDPRHeader;

        return $this;
    }

    /**
     * isset gDPRHeader.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGDPRHeader($index)
    {
        return isset($this->gDPRHeader[$index]);
    }

    /**
     * unset gDPRHeader.
     *
     * @param int|string $index
     */
    public function unsetGDPRHeader($index): void
    {
        unset($this->gDPRHeader[$index]);
    }

    /**
     * Gets as gDPRHeader.
     *
     * @return \Pohoda\Gdpr\GDPRHeaderType[]
     */
    public function getGDPRHeader()
    {
        return $this->gDPRHeader;
    }

    /**
     * Sets a new gDPRHeader.
     *
     * @param \Pohoda\Gdpr\GDPRHeaderType[] $gDPRHeader
     *
     * @return self
     */
    public function setGDPRHeader(?array $gDPRHeader = null)
    {
        $this->gDPRHeader = $gDPRHeader;

        return $this;
    }
}
