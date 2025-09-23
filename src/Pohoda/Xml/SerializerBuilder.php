<?php

declare(strict_types=1);

namespace Pohoda\Xml;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder as JmsSerializerBuilder;

class SerializerBuilder
{
    public static function create(): JmsSerializerBuilder
    {
        $serializerBuilder = JmsSerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__ . '/../../../metadata', 'Pohoda');
        $serializerBuilder->configureHandlers(static function (HandlerRegistryInterface $handler) use ($serializerBuilder): void {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });

        return $serializerBuilder;
    }
}
