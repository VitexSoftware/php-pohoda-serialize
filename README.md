# PohodaSer

[![wakatime](https://wakatime.com/badge/user/5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/project/7bf8c435-6fd3-4568-980a-e78253585143.svg)](https://wakatime.com/badge/user/5abba9ca-813e-43ac-9b5f-b1cfdf3dc1c7/project/7bf8c435-6fd3-4568-980a-e78253585143)

Stormware's Pohoda XML/PHP serializer.

This library provides a PHP-based solution for serializing and deserializing XML data for Stormware's Pohoda accounting software. It is designed to work with Pohoda's XML schema definitions (XSD) and simplifies the process of integrating Pohoda's data exchange into your PHP applications.

---

## Features

- **XML Serialization**: Convert PHP objects into Pohoda-compatible XML.
- **XML Deserialization**: Parse Pohoda XML files into PHP objects.
- **XSD Integration**: Automatically maps XML schema definitions to PHP classes.
- **Customizable**: Extend and modify the library to fit your specific Pohoda integration needs.

---

## Requirements

- PHP 8.1 or higher
- Composer
- [JMS Serializer](https://jmsyst.com/libs/serializer)
- [GoetasWebservices XSD2PHP](https://github.com/goetas-webservices/xsd2php)

---

## Installation

Install the library using Composer:

```bash
composer require vitexsoftware/pohodaser
```

XSD Taken from https://www.stormware.cz/xml/schema/all_schema_ver2.zip

---

## Example Usage

### Serialize an Invoice Object to XML

```php
use Pohoda\Invoice\InvoiceType;
use JMS\Serializer\SerializerBuilder;

// Create an instance of the serializer
$serializer = SerializerBuilder::create()->build();

// Create an invoice object
$invoice = new InvoiceType();
$invoice->setId(123);
$invoice->setName('Sample Invoice');

// Serialize the object to XML
$xmlContent = $serializer->serialize($invoice, 'xml');

echo $xmlContent;
```

### Deserialize XML to an Invoice Object

```php
use Pohoda\Invoice\InvoiceType;
use JMS\Serializer\SerializerBuilder;

// Create an instance of the serializer
$serializer = SerializerBuilder::create()->build();

// Load XML content
$xmlContent = file_get_contents('path/to/invoice.xml');

// Deserialize the XML into a PHP object
$invoice = $serializer->deserialize($xmlContent, InvoiceType::class, 'xml');

print_r($invoice);
```

### Detect and Deserialize XML to a PHP Object

```php
use Pohoda\Xml\Helper;
use JMS\Serializer\SerializerBuilder;

$serializer = SerializerBuilder::create()->build();
$xmlContent = file_get_contents('path/to/faktury_03_v2.0.xml');

// Detect the PHP class name from the XML
$phpClassName = Helper::xml2ns($xmlContent);

if ($phpClassName) {
    $object = $serializer->deserialize($xmlContent, $phpClassName, 'xml');
    print_r($object);
} else {
    echo "Namespace not found for the root element.\n";
}
```
