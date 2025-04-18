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
 * Class representing EmailsType.
 *
 * XSD Type: emailsType
 */
class EmailsType
{
    /**
     * @var string[]
     */
    private array $email = [
    ];

    /**
     * Adds as email.
     *
     * @param string $email
     *
     * @return self
     */
    public function addToEmail($email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * isset email.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email.
     *
     * @param int|string $index
     */
    public function unsetEmail($index): void
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email.
     *
     * @return string[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?array $email = null)
    {
        $this->email = $email;

        return $this;
    }
}
