<?php

namespace src\base_factory_impl;

use src\base_factory\AbstractVideoFactory;
use src\videos\RutubeVideo;
use src\videos\YoutubeVideo;

class VideoFactory implements AbstractVideoFactory
{
    public function createYoutubeVideo($youtubeUrl) : YoutubeVideo
    {
        return new YoutubeVideo($youtubeUrl);
    }

    public function createRutubeVideo($rutubeUrl) : RutubeVideo
    {
        return new RutubeVideo($rutubeUrl);
    }
}