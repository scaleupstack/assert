<?php declare(strict_types = 1);

/**
 * This file is part of ScaleUpStack/Assert.
 *
 * For the full copyright and license information, please view the README.md and LICENSE.md files that were distributed
 * with this source code.
 *
 * @copyright 2019 ScaleUpVentures GmbH, https://www.scaleupventures.com
 * @link      https://github.com/scaelupstack/assert
 */

use ScaleUpStack\Assert\Assert;
use ScaleUpStack\Assert\Tests\TestCase;

/**
 * @coversDefaultClass \ScaleUpStack\Assert\Assert
 */
final class AssertTest extends TestCase
{
    /**
     * @test
     *
     * @covers ::reportInvalidArgument()
     */
    public function it_throws_a_custom_exception()
    {
        // given a project-specific Assert class as imported via the use statement

        // when asserting something that is not valid
        // then the project specific exception is thrown
        $this->expectException(\ScaleUpStack\Assert\InvalidArgumentException::class);
        $this->expectExceptionMessage('Error: given "not the same", expected: "this is".');

        Assert::same(
            'this is',
            'not the same',
            'Error: given %2$s, expected: %1$s.'
        );
    }
}
