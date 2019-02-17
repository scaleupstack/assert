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
        // given the Assert class as imported via the use statement

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

    /**
     * @test
     */
    public function it_can_be_extended_by_a_project_specific_assert_class()
    {
        // given a project-specific extension of ScaleUpStack\Assert\Assert as implemented in
        // ScaleUpStack\Assert\Tests\CustomizedAssert

        // when asserting something that is not valid
        // then the exception of that extended assert class is thrown
        $this->expectException(RuntimeException::class);

        \ScaleUpStack\Assert\Tests\CustomizedAssert::same('one', 'two');

    }
}
