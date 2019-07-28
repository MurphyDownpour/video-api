<?php

namespace tests\unit;

use PHPUnit\Framework\TestCase;
use src\videos\YoutubeVideo;

class YoutubeVideoTest extends TestCase
{
    public function testGetVideoIdFromUrl() {
        $videoUrl = "https://www.youtube.com/watch?v=iP0Vl-vU3XM";
        $expected = "iP0Vl-vU3XM";

        $video = new YoutubeVideo($videoUrl);

        $this->assertEquals($expected, $video->getVideoId());
    }

    public function testCreateRequestUrl() {
        $videoUrl = "https://www.youtube.com/watch?v=iP0Vl-vU3XM";
        $expected = "http://www.youtube.com/oembed?url=http%3A//youtube.com/watch%3Fv%3DiP0Vl-vU3XM&format=json";

        $video = new YoutubeVideo($videoUrl);

        $this->assertEquals($expected, $video->getRequestUrl());
    }
}