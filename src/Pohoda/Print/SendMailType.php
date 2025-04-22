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

namespace Pohoda\Print;

/**
 * Class representing SendMailType.
 *
 * XSD Type: sendMailType
 */
class SendMailType
{
    /**
     * @var string[]
     */
    private ?array $to = null;

    /**
     * @var string[]
     */
    private ?array $cc = null;

    /**
     * @var string[]
     */
    private ?array $bcc = null;
    private ?string $subject = null;
    private ?string $body = null;

    /**
     * @var string[]
     */
    private ?array $attachments = null;
    private ?string $priority = null;

    /**
     * Požadovat oznámení o doručení.
     */
    private ?string $returnReceipt = null;

    /**
     * Požadovat oznámení o přečtení.
     */
    private ?string $disposNotif = null;

    /**
     * Adds as email.
     *
     * @param string $email
     *
     * @return self
     */
    public function addToTo($email)
    {
        $this->to[] = $email;

        return $this;
    }

    /**
     * isset to.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetTo($index)
    {
        return isset($this->to[$index]);
    }

    /**
     * unset to.
     *
     * @param int|string $index
     */
    public function unsetTo($index): void
    {
        unset($this->to[$index]);
    }

    /**
     * Gets as to.
     *
     * @return string[]
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to.
     *
     * @param string $to
     *
     * @return self
     */
    public function setTo(?array $to = null)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Adds as email.
     *
     * @param string $email
     *
     * @return self
     */
    public function addToCc($email)
    {
        $this->cc[] = $email;

        return $this;
    }

    /**
     * isset cc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCc($index)
    {
        return isset($this->cc[$index]);
    }

    /**
     * unset cc.
     *
     * @param int|string $index
     */
    public function unsetCc($index): void
    {
        unset($this->cc[$index]);
    }

    /**
     * Gets as cc.
     *
     * @return string[]
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Sets a new cc.
     *
     * @param string $cc
     *
     * @return self
     */
    public function setCc(?array $cc = null)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * Adds as email.
     *
     * @param string $email
     *
     * @return self
     */
    public function addToBcc($email)
    {
        $this->bcc[] = $email;

        return $this;
    }

    /**
     * isset bcc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBcc($index)
    {
        return isset($this->bcc[$index]);
    }

    /**
     * unset bcc.
     *
     * @param int|string $index
     */
    public function unsetBcc($index): void
    {
        unset($this->bcc[$index]);
    }

    /**
     * Gets as bcc.
     *
     * @return string[]
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * Sets a new bcc.
     *
     * @param string $bcc
     *
     * @return self
     */
    public function setBcc(?array $bcc = null)
    {
        $this->bcc = $bcc;

        return $this;
    }

    /**
     * Gets as subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Gets as body.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Adds as attachment.
     *
     * @param string $attachment
     *
     * @return self
     */
    public function addToAttachments($attachment)
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
     * @return string[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments.
     *
     * @param string[] $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Gets as priority.
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority.
     *
     * @param string $priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Gets as returnReceipt.
     *
     * Požadovat oznámení o doručení.
     *
     * @return string
     */
    public function getReturnReceipt()
    {
        return $this->returnReceipt;
    }

    /**
     * Sets a new returnReceipt.
     *
     * Požadovat oznámení o doručení.
     *
     * @param string $returnReceipt
     *
     * @return self
     */
    public function setReturnReceipt($returnReceipt)
    {
        $this->returnReceipt = $returnReceipt;

        return $this;
    }

    /**
     * Gets as disposNotif.
     *
     * Požadovat oznámení o přečtení.
     *
     * @return string
     */
    public function getDisposNotif()
    {
        return $this->disposNotif;
    }

    /**
     * Sets a new disposNotif.
     *
     * Požadovat oznámení o přečtení.
     *
     * @param string $disposNotif
     *
     * @return self
     */
    public function setDisposNotif($disposNotif)
    {
        $this->disposNotif = $disposNotif;

        return $this;
    }
}
