<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Tests\Request;

use WBW\Library\Pexels\Request\GetPhotoRequest;
use WBW\Library\Pexels\Tests\AbstractTestCase;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Get photo request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Tests\Request
 */
class GetPhotoRequestTest extends AbstractTestCase {

    /**
     * Tests getSubstituables()
     *
     * @return void
     */
    public function testGetSubstituables(): void {

        $obj = new GetPhotoRequest();

        $obj->setId(1);
        $this->assertEquals([":id" => 1], $obj->getSubstituables());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/v1/photos/:id", GetPhotoRequest::GET_PHOTO_RESOURCE_PATH);

        $obj = new GetPhotoRequest();

        $this->assertInstanceOf(SubstituableRequestInterface::class, $obj);

        $this->assertEquals(GetPhotoRequest::GET_PHOTO_RESOURCE_PATH, $obj->getResourcePath());
        $this->assertNull($obj->getId());
        $this->assertEquals([":id" => null], $obj->getSubstituables());
    }
}
