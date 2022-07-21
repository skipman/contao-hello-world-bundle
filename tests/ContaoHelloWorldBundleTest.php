<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Skipman\ContaoHelloWorldBundle\Tests;

use Skipman\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('Skipman\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
