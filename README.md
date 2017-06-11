# json-viewer
JSON Viewer for PHP

[![Packagist](https://img.shields.io/packagist/v/kura-lab/json-viewer.svg)](https://packagist.org/packages/kura-lab/json-viewer)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://github.com/kura-lab/json-viewer/blob/master/LICENSE)

### Requirements

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6.30-8892BF.svg?style=flat-square)](https://php.net/)
* PHP 5.6.30 or higher.

### Install

At first, install composer.

```
$ mkdir workspace
$ cd workspace
$ curl -s http://getcomposer.org/installer | php
```

Create composer.json.

```
{
    "require": {
        "kura-lab/json-viewer": "1.*"
    }
}
```

Install library.

```
$ php composer.phar install
```

### Development

Check coding style with CodeSniffer.

```
$ vendor/bin/phpcs --standard=PSR2 src/
```

Execute unit test with PHPUnit.

```
$ vendor/bin/phpunit
```
