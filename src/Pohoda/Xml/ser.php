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

namespace Pohoda\Xml;

trait ser {

    private \Pohoda\Response\ResponsePack $responsePack;

    public function __construct(\Pohoda\Response\ResponsePack $responsePack) {
        $this->responsePack = $responsePack;
    }

    protected function getResponsePack(): \Pohoda\Response\ResponsePack {
        return $this->responsePack;
    }

    /**
     * Get Items in Array
     * 
     * @return array
     */
    public function getItems(): array {
        return $this->getResponsePack()->getResponsePackItem();
    }

    /**
     * Return one result form response;
     */
    public function getItem() {
        
    }
}
