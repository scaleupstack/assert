<?php declare(strict_types = 1);

/**
 * This file is part of ScaleUpStack/Assert.
 *
 * For the full copyright and license information, please view the README.md and LICENSE.md files that were distributed
 * with this source code.
 *
 * @copyright 2019 - present ScaleUpVentures GmbH, https://www.scaleupventures.com
 * @link      https://github.com/scaleupstack/assert
 */

namespace ScaleUpStack\Assert;

class Assert extends \Webmozart\Assert\Assert
{
    protected static $assertionClassName = InvalidArgumentException::class;

    protected static function reportInvalidArgument($message)
    {
        throw new static::$assertionClassName($message);
    }
}
