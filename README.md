# Wrapper for bcsrecutil

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tobya/documentdump.svg?style=flat-square)](https://packagist.org/packages/tobya/documentdump)


This is a wrapper for BCSDumpRec.exe command line tool used in Ballymaloe Cookery School.
It is a very simple Process wrapper.

## Installation

You can install the package via composer:

```bash
composer require tobya/documentdump
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="documentdump-config"
```



## Usage

```php
\Tobya\Documentdump\Facades\DocumentDump::output('C:\DriveETemp\OutputsABCDE\\')
       ->connectionstring()
       ->parameter('--DAYS',8)
       ->parameter('-M')
       ->parameter('-N')
       ->param('-s','false')       
        ->run();
```

## Testing

```bash
composer test
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Toby Allen](https://github.com/tobya)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
