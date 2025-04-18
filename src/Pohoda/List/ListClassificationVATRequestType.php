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

namespace Pohoda\List;

/**
 * Class representing ListClassificationVATRequestType.
 *
 * XSD Type: listClassificationVATRequestType
 */
class ListClassificationVATRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $classificationVATVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\List\RequestClassificationVATType[]
     */
    private array $requestClassificationVAT = [
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
     * Gets as classificationVATVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getClassificationVATVersion()
    {
        return $this->classificationVATVersion;
    }

    /**
     * Sets a new classificationVATVersion.
     *
     * Požadovaná verze.
     *
     * @param string $classificationVATVersion
     *
     * @return self
     */
    public function setClassificationVATVersion($classificationVATVersion)
    {
        $this->classificationVATVersion = $classificationVATVersion;

        return $this;
    }

    /**
     * Adds as limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @return self
     */
    public function addToLimit(\Pohoda\Filter\LimitType $limit)
    {
        $this->limit[] = $limit;

        return $this;
    }

    /**
     * isset limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLimit($index)
    {
        return isset($this->limit[$index]);
    }

    /**
     * unset limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param int|string $index
     */
    public function unsetLimit($index): void
    {
        unset($this->limit[$index]);
    }

    /**
     * Gets as limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @return \Pohoda\Filter\LimitType[]
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets a new limit.
     *
     * Omezení počtu exportovaných záznamů.
     *
     * @param \Pohoda\Filter\LimitType[] $limit
     *
     * @return self
     */
    public function setLimit(array $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Adds as requestClassificationVAT.
     *
     * @return self
     */
    public function addToRequestClassificationVAT(\Pohoda\List\RequestClassificationVATType $requestClassificationVAT)
    {
        $this->requestClassificationVAT[] = $requestClassificationVAT;

        return $this;
    }

    /**
     * isset requestClassificationVAT.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestClassificationVAT($index)
    {
        return isset($this->requestClassificationVAT[$index]);
    }

    /**
     * unset requestClassificationVAT.
     *
     * @param int|string $index
     */
    public function unsetRequestClassificationVAT($index): void
    {
        unset($this->requestClassificationVAT[$index]);
    }

    /**
     * Gets as requestClassificationVAT.
     *
     * @return \Pohoda\List\RequestClassificationVATType[]
     */
    public function getRequestClassificationVAT()
    {
        return $this->requestClassificationVAT;
    }

    /**
     * Sets a new requestClassificationVAT.
     *
     * @param \Pohoda\List\RequestClassificationVATType[] $requestClassificationVAT
     *
     * @return self
     */
    public function setRequestClassificationVAT(array $requestClassificationVAT)
    {
        $this->requestClassificationVAT = $requestClassificationVAT;

        return $this;
    }
}
