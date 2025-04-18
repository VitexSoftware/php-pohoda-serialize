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

namespace Pohoda\ListActivity;

/**
 * Class representing ListRequestActivityType.
 *
 * XSD Type: listRequestActivityType
 */
class ListRequestActivityType
{
    private ?string $version = null;

    /**
     * Požadovaná verze activity dokumentu.
     */
    private ?string $activityVersion = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\Filter\RequestActivityType[]
     */
    private array $requestActivity = [
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
     * Gets as activityVersion.
     *
     * Požadovaná verze activity dokumentu.
     *
     * @return string
     */
    public function getActivityVersion()
    {
        return $this->activityVersion;
    }

    /**
     * Sets a new activityVersion.
     *
     * Požadovaná verze activity dokumentu.
     *
     * @param string $activityVersion
     *
     * @return self
     */
    public function setActivityVersion($activityVersion)
    {
        $this->activityVersion = $activityVersion;

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
     * Adds as requestActivity.
     *
     * @return self
     */
    public function addToRequestActivity(\Pohoda\Filter\RequestActivityType $requestActivity)
    {
        $this->requestActivity[] = $requestActivity;

        return $this;
    }

    /**
     * isset requestActivity.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestActivity($index)
    {
        return isset($this->requestActivity[$index]);
    }

    /**
     * unset requestActivity.
     *
     * @param int|string $index
     */
    public function unsetRequestActivity($index): void
    {
        unset($this->requestActivity[$index]);
    }

    /**
     * Gets as requestActivity.
     *
     * @return \Pohoda\Filter\RequestActivityType[]
     */
    public function getRequestActivity()
    {
        return $this->requestActivity;
    }

    /**
     * Sets a new requestActivity.
     *
     * @param \Pohoda\Filter\RequestActivityType[] $requestActivity
     *
     * @return self
     */
    public function setRequestActivity(array $requestActivity)
    {
        $this->requestActivity = $requestActivity;

        return $this;
    }
}
