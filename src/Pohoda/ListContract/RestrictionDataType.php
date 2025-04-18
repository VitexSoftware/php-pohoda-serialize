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

namespace Pohoda\ListContract;

/**
 * Class representing RestrictionDataType.
 *
 * XSD Type: restrictionDataType
 */
class RestrictionDataType
{
    /**
     * Exportovat záznamy ze záložky "Dokumenty".
     */
    private ?string $attachments = null;

    /**
     * Gets as attachments.
     *
     * Exportovat záznamy ze záložky "Dokumenty".
     *
     * @return string
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments.
     *
     * Exportovat záznamy ze záložky "Dokumenty".
     *
     * @param string $attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }
}
