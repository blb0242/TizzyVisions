$(document).ready(function() {
    function getVideos(playlist) {
        // for each playlist item 
        itemsUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=" + playlist + "&maxResults=20&key=AIzaSyDPQncvocimM7RRjDTQNnYCtH8fFYbDX4k";

        // Get VideoIds
        $.ajax({
            url: itemsUrl,
            type: "get",
            async: false,
            success: function(data) {
                var videoTitle = '';
                var videoId = '';
                var videoSource = '';
                var video = '';

                // Each Video
                $.each(data.items, function(i, item) {
                    
                    //console.log(playlist);
                    if (playlist == item.snippet.playlistId) {
                        videoTitle = item.snippet.title;
                        videoId = item.snippet.resourceId.videoId;
                        videoSource = '//www.youtube.com/embed/' + videoId;

                        video = '<div class="c-flex-item hover-dark"><a href=""><div class="container"><iframe class="absolute" src="' + videoSource + '?rel=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe><h6 class="label">' + videoTitle + '</h6></div></a></div>';
                        $('.c-outer').append(video);
                    }
                });
            },
            error: function() {
                console.log('No Data');
            }
        });
    }
    var pid = $('.c-outer').attr('id');
    console.log(pid);
    getVideos(pid);
});