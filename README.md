# LTI Configuration XML Generator

[![Latest Version](https://img.shields.io/packagist/v/smtech/lti-configuration-xml.svg)](https://packagist.org/packages/smtech/lti-configuration-xml)

Generate an LTI configuration XML file from parameters

## Install

Include in your `composer.json`:

```JSON
"require": {
    "smtech/lti-configuration-xml": "~1.0"
}
```

## Use

```PHP
/* display a simple configuration */
$config = new \smtech\LTI\Configuration\Generator(
    'My Spiffy Tool',
    'my-spiffy-tool',
    'https://example.com/my-spiffy-tool/launch.php'
);
header('Content-type: application/xml');
echo $config->saveXML();
exit;
```

[Documentation included in the repo.](https://htmlpreview.github.io/?https://raw.githubusercontent.com/smtech/lti-configuration-xml/master/doc/namespaces/smtech.LTI.Configuration.html)
