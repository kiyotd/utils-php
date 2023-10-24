<?php

namespace kiyotd\utils\sns;

class YouTube
{
    /**
     * Returns a boolean value if the URL is a YouTube video or not.
     *
     * @param string $url
     * @return bool
     */
    public static function is_youtube_url(string $url): bool
    {
        $pattern = '/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/watch\?v=[\w-]{11}$/';

        return (bool)preg_match($pattern, $url);
    }
}
