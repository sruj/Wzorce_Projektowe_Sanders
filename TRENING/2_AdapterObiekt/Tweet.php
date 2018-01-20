<?php

//include_once './twitter-php-3.5/src/Twitter.php';
require __DIR__ . '/vendor/autoload.php';

class Tweet {
    const consumerKey = 'x3di6uhpkAnG6oHfU0rf3wAMV';
    const consumerSecret = 'AybSkLrbYzzwsX8SsRZSlSFnOuMhiQGgKVq0K72oMikAULwgYe';
    const accessToken = '70373433-5h3fY2LDahDRfZo6dkzDWFpzEFqlbjBU3Gb6gBLvd';
    const accessTokenSecret = 'AEUz9Lsbq1OuXS59FUar75McpR8lVRXiG4Ud77DvLnhY9';
    private $message;


    public function setMessage($param) {
        $this->message = $param;
    }
    
    public function sendTweet() {
        $twitter = new Twitter(self::consumerKey, self::consumerSecret, self::accessToken, self::accessTokenSecret);
        $twitter->send($this->message);
        echo 'poszło';
    }
}
