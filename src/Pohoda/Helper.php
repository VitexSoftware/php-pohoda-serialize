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

namespace Pohoda;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;

class Helper
{
    /**
     * @return \JMS\Serializer\Serializer
     */
    public static function getSerializer()
    {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__.'/../../metadata', 'Pohoda');
        $serializerBuilder->configureHandlers(static function (HandlerRegistry $registry) use ($serializerBuilder): void {
            $serializerBuilder->addDefaultHandlers();
            $registry->registerSubscribingHandler(new BaseTypesHandler());
            $registry->registerSubscribingHandler(new XmlSchemaDateHandler());
        });

        return $serializerBuilder->build();
    }

    public static function xml2php(string $xml): ?string
    {
        if (empty(trim($xml))) {
            return null;
        }

        return \Pohoda\Xml\Helper::xml2ns($xml);
    }

    /**
     * @param object $list
     */
    public static function findListItems($list): array
    {
        $response = [];
        $vars = get_object_vars($list);

        foreach ($vars as $var) {
            if (\is_array($var)) {
                $response = array_merge($response, $var);
            } elseif (\is_object($var)) {
                $response = array_merge($response, self::findListItems($var));
            }
        }

        return $response;
    }
}
