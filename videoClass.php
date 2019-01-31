<?php

class VideoClass extends DatabaseClass{
	public function getFeaturedVideo()
	{
		$API_key    = 'AIzaSyDPQncvocimM7RRjDTQNnYCtH8fFYbDX4k';
        $playlistID  = 'UUjFClAX21CTwdFeJGkdgTCA';
        $maxResults = 1;


        $url = "https://www.googleapis.com/youtube/v3/playlistItems";
        $get = array(
                "part" => "snippet",
                "playlistId" => $playlistID,
                "maxResults" => $maxResults,
                "key" => $API_key
                );
        $query_url = sprintf("%s?%s", $url, http_build_query($get));

        $json = file_get_contents($query_url);
        $data = json_decode($json, JSON_PRETTY_PRINT);
        $live_data = $data['items'][0]['snippet'];
        print_r($live_data);
	}
}

?>