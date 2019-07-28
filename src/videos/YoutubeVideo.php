<?php

namespace src\videos;

use src\base_video\BaseVideo;
use src\interfaces\VideoBehaviour;

class YoutubeVideo extends BaseVideo implements VideoBehaviour
{
    private $apiMethod = "http://www.youtube.com/oembed?url=http%3A//youtube.com/watch%3Fv%3D{VIDEO_ID}&format=json";
    private $requestUrl;
    private $videoId;

    public function __construct($videoUrl)
    {
        $this->videoId = $this->getVideoIdFromUrl($videoUrl);
        $this->requestUrl = $this->createRequestUrl($this->videoId);

        $data = $this->sendRequest($this->requestUrl);

        $this->title = $data['title'];
        $this->author = $data['author_name'];
        $this->thumbnailSource = $data['thumbnail_url'];
    }

    /**
     * Вытаскивает из урла айди видео
     *
     * @param $url string
     * @return string
     */
    private function getVideoIdFromUrl($url) {
        $parts = parse_url($url);
        parse_str($parts['query'], $query);

        return $query['v'];
    }

    /**
     * Создаёт урл для запроса, используя айди видео
     *
     * @param $videoId string
     * @return string|string[]|null
     */
    private function createRequestUrl($videoId) {
        $pattern = '/\{VIDEO_ID\}/';

        return preg_replace($pattern, $videoId, $this->apiMethod);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getThumbnailSource()
    {
        return $this->thumbnailSource;
    }

    public function getVideoId() {
        return $this->videoId;
    }

    public function getRequestUrl() {
        return $this->requestUrl;
    }

    protected function setTitle($title) : void
    {
        $this->title = $title;
    }

    protected function setAuthor($author) : void
    {
        $this->author = $author;
    }

    protected function setThumbnailSource($thumbnailSource) : void
    {
        $this->thumbnailSource = $thumbnailSource;
    }

    /**
     * Отправляет запрос на указанный урл
     *
     * @param $url string
     * @return mixed array
     */
    protected function sendRequest($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response, true);
    }
}