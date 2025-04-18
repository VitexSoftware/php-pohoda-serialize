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

namespace Pohoda\Response;

/**
 * Class representing ErrorDetailType.
 *
 * XSD Type: errorDetailType
 */
class ErrorDetailType
{
    /**
     * @var \Pohoda\Response\RecordDuplicityType[]
     */
    private array $recordDuplicity = [
    ];

    /**
     * Adds as recordDuplicity.
     *
     * @return self
     */
    public function addToRecordDuplicity(\Pohoda\Response\RecordDuplicityType $recordDuplicity)
    {
        $this->recordDuplicity[] = $recordDuplicity;

        return $this;
    }

    /**
     * isset recordDuplicity.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRecordDuplicity($index)
    {
        return isset($this->recordDuplicity[$index]);
    }

    /**
     * unset recordDuplicity.
     *
     * @param int|string $index
     */
    public function unsetRecordDuplicity($index): void
    {
        unset($this->recordDuplicity[$index]);
    }

    /**
     * Gets as recordDuplicity.
     *
     * @return \Pohoda\Response\RecordDuplicityType[]
     */
    public function getRecordDuplicity()
    {
        return $this->recordDuplicity;
    }

    /**
     * Sets a new recordDuplicity.
     *
     * @param \Pohoda\Response\RecordDuplicityType[] $recordDuplicity
     *
     * @return self
     */
    public function setRecordDuplicity(?array $recordDuplicity = null)
    {
        $this->recordDuplicity = $recordDuplicity;

        return $this;
    }
}
