<?php

use kiyotd\utils\sns\YouTube;
use PHPUnit\Framework\TestCase;

class YouTubeTest extends TestCase
{
    public function testIsYoutubeUrlReturnsTrueForValidUrl()
    {
        $validUrl = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
        $result = YouTube::is_youtube_url($validUrl);

        $this->assertTrue($result);
    }

    public function testIsYoutubeUrlReturnsFalseForInvalidUrl()
    {
        $invalidUrl = 'https://www.google.com/';
        $result = YouTube::is_youtube_url($invalidUrl);

        $this->assertFalse($result);
    }

    public function testIsYoutubeUrlReturnsFalseForShortenedUrl()
    {
        $shortenedUrl = 'https://youtu.be/dQw4w9WgXcq';
        $result = YouTube::is_youtube_url($shortenedUrl);

        $this->assertFalse($result);
    }

    public function testIsYoutubeUrlReturnsFalseForInvalidVideoId()
    {
        $invalidVideoIdUrl = 'https://www.youtube.com/watch?v=invalid-id';
        $result = YouTube::is_youtube_url($invalidVideoIdUrl);

        $this->assertFalse($result);
    }
}
