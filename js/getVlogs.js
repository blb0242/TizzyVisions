var API_key = 'AIzaSyDPQncvocimM7RRjDTQNnYCtH8fFYbDX4k';
var playlistID = 'PLf7I7Yk_q_ujecZCX_mMvXGbOu2SN6G4h';
let maxResults = 20;

var get = "https://www.googleapis.com/youtube/v3/playlistItems";


var vlogs = { part: "snippet", playlistId: playlistID, maxResults: maxResults, key: API_key };
var v = $.param(vlogs);
var url = get.concat('?', v);
// Get first video 
$.ajax({
    url: url,
    type: "get",
    success: function(data) {

        $.each(data.items, function (i, item) {

					var videoTitle = item.snippet.title;
					var videoId = item.snippet.resourceId.videoId;
					var videoSource = '//www.youtube.com/embed/' + videoId;


					var video = '<div class="c-flex-item hover-dark"><a  href=""><div class="container"><iframe class="absolute" src="' + videoSource + '?rel=0&showinfo=0&controls=1" frameborder="0" allowfullscreen></iframe><h6 class="label">' + videoTitle + '</h6></div></a></div>';
					$('.c-outer').append(video);
					

				});


    },
    error: function() {
        console.log('No Data');
    }
});