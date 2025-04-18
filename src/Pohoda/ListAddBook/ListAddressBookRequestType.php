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

namespace Pohoda\ListAddBook;

/**
 * Class representing ListAddressBookRequestType.
 *
 * XSD Type: listAddressBookRequestType
 */
class ListAddressBookRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $addressBookVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * Omezení počtu exportovaných záznamů.
     *
     * @var \Pohoda\Filter\LimitType[]
     */
    private array $limit = [
    ];

    /**
     * @var \Pohoda\Filter\RequestAddressBookType[]
     */
    private array $requestAddressBook = [
    ];

    /**
     * Omezení exportu dat dokladů.
     *
     * @var \Pohoda\ListAddBook\RestrictionDataType[]
     */
    private array $restrictionData = [
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
     * Gets as addressBookVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getAddressBookVersion()
    {
        return $this->addressBookVersion;
    }

    /**
     * Sets a new addressBookVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $addressBookVersion
     *
     * @return self
     */
    public function setAddressBookVersion($addressBookVersion)
    {
        $this->addressBookVersion = $addressBookVersion;

        return $this;
    }

    /**
     * Gets as extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @return string
     */
    public function getExtSystem()
    {
        return $this->extSystem;
    }

    /**
     * Sets a new extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     *
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;

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
     * Adds as requestAddressBook.
     *
     * @return self
     */
    public function addToRequestAddressBook(\Pohoda\Filter\RequestAddressBookType $requestAddressBook)
    {
        $this->requestAddressBook[] = $requestAddressBook;

        return $this;
    }

    /**
     * isset requestAddressBook.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestAddressBook($index)
    {
        return isset($this->requestAddressBook[$index]);
    }

    /**
     * unset requestAddressBook.
     *
     * @param int|string $index
     */
    public function unsetRequestAddressBook($index): void
    {
        unset($this->requestAddressBook[$index]);
    }

    /**
     * Gets as requestAddressBook.
     *
     * @return \Pohoda\Filter\RequestAddressBookType[]
     */
    public function getRequestAddressBook()
    {
        return $this->requestAddressBook;
    }

    /**
     * Sets a new requestAddressBook.
     *
     * @param \Pohoda\Filter\RequestAddressBookType[] $requestAddressBook
     *
     * @return self
     */
    public function setRequestAddressBook(array $requestAddressBook)
    {
        $this->requestAddressBook = $requestAddressBook;

        return $this;
    }

    /**
     * Adds as restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return self
     */
    public function addToRestrictionData(\Pohoda\ListAddBook\RestrictionDataType $restrictionData)
    {
        $this->restrictionData[] = $restrictionData;

        return $this;
    }

    /**
     * isset restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRestrictionData($index)
    {
        return isset($this->restrictionData[$index]);
    }

    /**
     * unset restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param int|string $index
     */
    public function unsetRestrictionData($index): void
    {
        unset($this->restrictionData[$index]);
    }

    /**
     * Gets as restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return \Pohoda\ListAddBook\RestrictionDataType[]
     */
    public function getRestrictionData()
    {
        return $this->restrictionData;
    }

    /**
     * Sets a new restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param \Pohoda\ListAddBook\RestrictionDataType[] $restrictionData
     *
     * @return self
     */
    public function setRestrictionData(array $restrictionData)
    {
        $this->restrictionData = $restrictionData;

        return $this;
    }
}
