# Your Package Name

Description of your package. You'll want to replace `{vendor}` and `{package}` in this document with your values.

[![Source](https://img.shields.io/badge/source-{vendor}/{package}-blue.svg?style=flat-square)](https://github.com/{vendor}/{package}) [![Build Status](https://img.shields.io/travis/{vendor}/{package}.svg?style=flat-square)](https://travis-ci.org/{vendor}/{package}) [![Total Downloads](https://img.shields.io/packagist/dt/{vendor}/{package}.svg?style=flat-square)](https://packagist.org/packages/{vendor}/{package}) [![Latest Stable Version](https://img.shields.io/packagist/v/{vendor}/{package}.svg?style=flat-square)](https://packagist.org/packages/{vendor}/{package})


## Installation
This is installable and autoloadable via Composer as [{vendor}/{package}](https://packagist.org/packages/{vendor}/{package}). If you aren't familiar with the Composer Dependency Manager for PHP, [you should read this first](https://getcomposer.org/doc/00-intro.md).

```bash
$ composer require {vendor}/{package} --prefer-dist
```

## Contributing

### Unit Testing

``` bash
$ vendor/bin/phpunit
```

### Coding Standards
This library uses [PHP_CodeSniffer](http://www.squizlabs.com/php-codesniffer) to ensure coding standards are followed.

I have adopted the [PHP FIG PSR-2 Coding Standard](http://www.php-fig.org/psr/psr-2/) EXCEPT for the tabs vs spaces for indentation rule. PSR-2 says 4 spaces. I use tabs. No discussion.

To support indenting with tabs, I've defined a custom PSR-2 ruleset that extends the standard [PSR-2 ruleset used by PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer/blob/master/CodeSniffer/Standards/PSR2/ruleset.xml). You can find this ruleset in the root of this project at PSR2Tabs.xml

Executing the codesniffer command from the root of this project to run the sniffer using these custom rules.


	$ ./codesniffer
