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
 * Class representing AttachmentType.
 *
 * XSD Type: attachmentType
 */
class AttachmentType
{
    /**
     * Identifikátor vytvořené sestavy.
     */
    private ?int $idReport = null;

    /**
     * Data ve formátu Base64.
     */
    private ?\Pohoda\Documentresponse\AttachmentType\DataAType $data = null;

    /**
     * Gets as idReport.
     *
     * Identifikátor vytvořené sestavy.
     *
     * @return int
     */
    public function getIdReport()
    {
        return $this->idReport;
    }

    /**
     * Sets a new idReport.
     *
     * Identifikátor vytvořené sestavy.
     *
     * @param int $idReport
     *
     * @return self
     */
    public function setIdReport($idReport)
    {
        $this->idReport = $idReport;

        return $this;
    }

    /**
     * Gets as data.
     *
     * Data ve formátu Base64.
     *
     * @return \Pohoda\Documentresponse\AttachmentType\DataAType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data.
     *
     * Data ve formátu Base64.
     *
     * @return self
     */
    public function setData(?\Pohoda\Documentresponse\AttachmentType\DataAType $data = null)
    {
        $this->data = $data;

        return $this;
    }
}
