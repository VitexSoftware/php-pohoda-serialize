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
 * Class representing AttachmentsType.
 *
 * XSD Type: attachmentsType
 */
class AttachmentsType
{
    /**
     * @var \Pohoda\Documentresponse\AttachmentType[]
     */
    private array $attachment = [
    ];

    /**
     * Adds as attachment.
     *
     * @return self
     */
    public function addToAttachment(\Pohoda\Documentresponse\AttachmentType $attachment)
    {
        $this->attachment[] = $attachment;

        return $this;
    }

    /**
     * isset attachment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAttachment($index)
    {
        return isset($this->attachment[$index]);
    }

    /**
     * unset attachment.
     *
     * @param int|string $index
     */
    public function unsetAttachment($index): void
    {
        unset($this->attachment[$index]);
    }

    /**
     * Gets as attachment.
     *
     * @return \Pohoda\Documentresponse\AttachmentType[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment.
     *
     * @param \Pohoda\Documentresponse\AttachmentType[] $attachment
     *
     * @return self
     */
    public function setAttachment(array $attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }
}
