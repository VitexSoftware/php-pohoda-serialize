<?php
declare(strict_types=1);

namespace Pohoda;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Yaml\Yaml;

class Helper
{
    /**
     * @return \JMS\Serializer\Serializer
     */
    public static function getSerializer()
    {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__ . '/../../metadata', 'Pohoda');
        $serializerBuilder->configureHandlers(function (HandlerRegistry $registry) {
            $registry->registerSubscribingHandler(new BaseTypesHandler());
            $registry->registerSubscribingHandler(new XmlSchemaDateHandler());
        });

        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__ . '/../../metadata'));
        $files = new \RegexIterator($files, '/\.yml$/');

        foreach ($files as $file) {
            $yaml = Yaml::parseFile($file->getRealPath());
            foreach ($yaml as $class => $metadata) {
                if (isset($metadata['xml_root_namespace']) && isset($metadata['namespace'])) {
                    $serializerBuilder->addMetadataDir($metadata['xml_root_namespace'], $metadata['namespace']);
                }
            }
        }

        return $serializerBuilder->build();
    }

    public static function xml2php(string $xml): ?string
    {
        if (empty(trim($xml))) {
            return null;
        }
        $dom = new \DOMDocument();
        @$dom->loadXML($xml);

        if (!$dom->documentElement) {
            return null;
        }

        $rootElement = $dom->documentElement;
        $namespaceURI = $rootElement->namespaceURI;
        $rootName = $rootElement->localName;

        if (!$namespaceURI) {
            return null;
        }

        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__ . '/../../metadata'));
        $files = new \RegexIterator($files, '/\.yml$/');

        foreach ($files as $file) {
            $yaml = Yaml::parseFile($file->getRealPath());
            foreach ($yaml as $class => $metadata) {
                if (isset($metadata['xml_root_namespace'], $metadata['xml_root_name']) &&
                    $metadata['xml_root_namespace'] === $namespaceURI &&
                    $metadata['xml_root_name'] === $rootName) {
                    return $class;
                }
            }
        }

        return null;
    }

    /**
     * @param object $list
     *
     * @return array
     */
    public static function findListItems($list): array
    {
        $response = [];
        $vars = get_object_vars($list);
        foreach ($vars as $var) {
            if (is_array($var)) {
                $response = array_merge($response, $var);
            } elseif (is_object($var)) {
                $response = array_merge($response, self::findListItems($var));
            }
        }
        return $response;
    }
}
