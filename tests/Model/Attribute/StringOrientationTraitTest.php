<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Tests\Model\Attribute;

use WBW\Library\Pexels\Tests\AbstractTestCase;
use WBW\Library\Pexels\Tests\Fixtures\Model\Attribute\TestStringOrientationTrait;

/**
 * String orientation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Pexels\Tests\Model\Attribute
 */
class StringOrientationTraitTest extends AbstractTestCase {

    /**
     * Tests the setOrientation() method.
     *
     * @return void
     */
    public function testSetOrientation(): void {

        $obj = new TestStringOrientationTrait();

        $obj->setOrientation("orientation");
        $this->assertEquals("orientation", $obj->getOrientation());
    }
}
