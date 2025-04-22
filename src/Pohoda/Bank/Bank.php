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

namespace Pohoda\Bank;

/**
 * Class representing Bank.
 */
class Bank extends BankType
{
    use \Pohoda\Xml\ser;

    /**
     * @return array<Pohoda\Bank\BankType>
     */
    public function get(): array
    {
        $items = [];

        foreach ($this->getItems() as $responsePackItem) {
            foreach ($responsePackItem->getListBank() as $listBank) {
                $items = array_merge($items, $listBank->getBank());
            }
        }

        return $items;
    }
}
