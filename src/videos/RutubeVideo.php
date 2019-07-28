<?php

namespace src\videos;

use src\base_video\BaseVideo;
use src\interfaces\VideoBehaviour;

class RutubeVideo extends BaseVideo implements VideoBehaviour
{
    public function __construct($url)
    {
    }

    protected function setTitle($title): void
    {
        // TODO: Implement setTitle() method.
    }

    protected function setAuthor($author): void
    {
        // TODO: Implement setAuthor() method.
    }

    protected function setThumbnailSource($thumbnailSource): void
    {
        // TODO: Implement setThumbnailSource() method.
    }

    protected function sendRequest($videoUrl)
    {
        // TODO: Implement sendRequest() method.
    }

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }

    public function getAuthor()
    {
        // TODO: Implement getAuthor() method.
    }

    public function getThumbnailSource()
    {
        // TODO: Implement getThumbnailSource() method.
    }
}