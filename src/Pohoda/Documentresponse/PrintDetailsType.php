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

namespace Pohoda\Documentresponse;

/**
 * Class representing PrintDetailsType.
 *
 * XSD Type: printDetailsType
 */
class PrintDetailsType
{
    /**
     * @var \Pohoda\Documentresponse\AttachmentType[]
     */
    private ?array $attachments = null;

    /**
     * Adds as attachment.
     *
     * @return self
     */
    public function addToAttachments(\Pohoda\Documentresponse\AttachmentType $attachment)
    {
        $this->attachments[] = $attachment;

        return $this;
    }

    /**
     * isset attachments.
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
     * @param int|string $index
     */
    public function unsetAttachments($index): void
    {
        unset($this->attachments[$index]);
    }

    /**
     * Gets as attachments.
     *
     * @return \Pohoda\Documentresponse\AttachmentType[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments.
     *
     * @param \Pohoda\Documentresponse\AttachmentType[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }
}
