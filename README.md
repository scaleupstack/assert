# ScaleUpStack/Assert


This library is a tiny wrapper around [webmozart/assert], a library that provides "Assertions to validate method input/output with nice error messages". ScaleUpStack/Assert allows you to extend that library easily to throw a project-specific exception in case an assertion is invalid.

The main reason of this library is, that you can extend it in your project without the need to write a unit test to get full code coverage.

The concept how to extend the base class was inspired by [beberlei/assert].


## Installation

Use [Composer] to install this library:

```
$ composer require scaleupstack/assert
```


## Introduction

```php
<?php declare(strict_types = 1);

namespace ScaleUpStack\Assert\Tests;

use ScaleUpStack\Assert\Assert as BaseAssert;

final class Assert extends BaseAssert
{
    protected static $assertionClassName = CustomizedInvalidArgumentException::class;
}
```


## Contribute

Thanks that you want to contribute to ScaleUpVentures/Assert.

* Report any bugs or issues on the [issue tracker].

* Get the source code from the [Git repository].


## License

Please check [LICENSE.md] in the root dir of this package.


## Copyright

ScaleUpVentures Gmbh, Germany<br>
Thomas Nunninger <thomas.nunninger@scaleupventures.com><br>
[www.scaleupventures.com]



[webmozart/assert]: https://github.com/webmozart/assert
[beberlei/assert]: https://github.com/beberlei/assert
[Composer]: https://getcomposer.org
[issue tracker]: https://github.com/scaleupstack/assert/issues
[Git repository]: https://github.com/scaleupstack/assert
[LICENSE.md]: LICENSE.md
[www.scaleupventures.com]: https://www.scaleupventures.com/
