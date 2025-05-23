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
 * Class representing ResponsePack.
 */
class ResponsePack extends ResponsePackType
{
    /**
     * Get the items from the response pack.
     */
    public function getResponsePackItems(): array
    {
        return $this->responsePackItem ?? [];
    }
}
