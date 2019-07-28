<?php

require_once './vendor/autoload.php';

use src\base_factory_impl\VideoFactory;

$videoUrl = $_GET['url'];

$videoFactory = new VideoFactory();
$youtubeVideo = $videoFactory->createYoutubeVideo($videoUrl);
$status = 0;

if ($youtubeVideo->getAuthor()) {
    $status = 1;
}

echo json_encode([
    'status' => $status,
    'title' => $youtubeVideo->getTitle(),
    'author' => $youtubeVideo->getAuthor(),
    'thumbnail' => $youtubeVideo->getThumbnailSource(),
    'videoId' => $youtubeVideo->getVideoId()
], JSON_UNESCAPED_UNICODE);