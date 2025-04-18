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
 * Class representing ContUrlAddressType.
 *
 * XSD Type: contUrlAddressType
 */
class ContUrlAddressType
{
    private ?string $name = null;

    private ?string $url = null;

    private ?\DateTime $dateOfChanged = null;

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets as dateOfChanged.
     *
     * @return \DateTime
     */
    public function getDateOfChanged()
    {
        return $this->dateOfChanged;
    }

    /**
     * Sets a new dateOfChanged.
     *
     * @return self
     */
    public function setDateOfChanged(?\DateTime $dateOfChanged = null)
    {
        $this->dateOfChanged = $dateOfChanged;

        return $this;
    }
}
