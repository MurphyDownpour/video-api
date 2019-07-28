<?php

namespace src\base_video;

abstract class BaseVideo
{
    protected $title;
    protected $author;
    protected $thumbnailSource;

    abstract protected function setTitle($title) : void;

    abstract protected function setAuthor($author) : void;

    abstract protected function setThumbnailSource($thumbnailSource) : void;

    abstract protected function sendRequest($videoUrl);
}