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
 * Class representing ListParameterRequestType.
 *
 * XSD Type: listParameterRequestType
 */
class ListParameterRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $parameterVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @var \Pohoda\List\RequestParameterType[]
     */
    private array $requestParameter = [
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
     * Gets as parameterVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getParameterVersion()
    {
        return $this->parameterVersion;
    }

    /**
     * Sets a new parameterVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $parameterVersion
     *
     * @return self
     */
    public function setParameterVersion($parameterVersion)
    {
        $this->parameterVersion = $parameterVersion;

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
    public function setLimit(?array $limit = null)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Adds as requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @return self
     */
    public function addToRequestParameter(\Pohoda\List\RequestParameterType $requestParameter)
    {
        $this->requestParameter[] = $requestParameter;

        return $this;
    }

    /**
     * isset requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestParameter($index)
    {
        return isset($this->requestParameter[$index]);
    }

    /**
     * unset requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param int|string $index
     */
    public function unsetRequestParameter($index): void
    {
        unset($this->requestParameter[$index]);
    }

    /**
     * Gets as requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @return \Pohoda\List\RequestParameterType[]
     */
    public function getRequestParameter()
    {
        return $this->requestParameter;
    }

    /**
     * Sets a new requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param \Pohoda\List\RequestParameterType[] $requestParameter
     *
     * @return self
     */
    public function setRequestParameter(?array $requestParameter = null)
    {
        $this->requestParameter = $requestParameter;

        return $this;
    }
}
