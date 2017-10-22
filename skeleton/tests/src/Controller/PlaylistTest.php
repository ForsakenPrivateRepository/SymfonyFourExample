<?php

namespace Tests\App\Controller;

use App\Controller\Playlist;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PlaylistTest extends TestCase
{
    /**
     * @covers \App\Controller\Playlist::create()
     */
    public function testCreate()
    {
        /* @var $mockRequest Request */
        $mockRequest = $this->getMockBuilder(Request::class)
            ->disableOriginalConstructor()
            ->getMock();

        $controller = new Playlist();

        $actual = $controller->create($mockRequest);

        $this->assertInstanceOf(JsonResponse::class, $actual);
    }
}
