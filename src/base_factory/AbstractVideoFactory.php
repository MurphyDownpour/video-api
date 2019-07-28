<?php

namespace src\base_factory;

use src\videos\YoutubeVideo;

interface AbstractVideoFactory
{
    public function createYoutubeVideo($youtubeUrl) : YoutubeVideo;
}