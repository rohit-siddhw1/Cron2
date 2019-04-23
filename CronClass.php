<?php

/**
 * Created by IntelliJ IDEA.
 * User: rohitsid
 * Date: 23/4/19
 * Time: 6:16 PM
 */
class CronClass
{
    function makeCurlCall($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if (isset($postValues)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postValues);
        }
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($server_output, 0, $header_size);
        $body = substr($server_output, $header_size);
        curl_close ($ch);
        if (trim($body) == "") {
            return "Redirected";
        }
        return "Not Redirected";
    }
    public function execute($timeStamp) {
        return $this->makeCurlCall("https://in.bookmyshow.com/buytickets/avengers-endgame-mumbai/movie-mumbai-ET00100668-MT/" . $timeStamp);
    }
}