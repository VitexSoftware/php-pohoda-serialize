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

namespace Pohoda\AddressBook;

/**
 * Class representing Addressbook.
 */
class Addressbook extends AddressbookType
{
    use \Pohoda\Xml\ser;

    /**
     * @return array<Pohoda\AddressBook\AddressbookType>
     */
    public function get(): array
    {
        $items = [];

        foreach ($this->getItems() as $responsePackItem) {
            foreach ($responsePackItem->getListAddressBook() as $listAddressBook) {
                $items = array_merge($items, $listAddressBook->getAddressBook());
            }
        }

        return $items;
    }
}
