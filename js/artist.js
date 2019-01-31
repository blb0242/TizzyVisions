var slider = $('.carousel');
slider.carousel();
slider.empty();


var API_key = 'AIzaSyDPQncvocimM7RRjDTQNnYCtH8fFYbDX4k';
var channelId = 'UCjFClAX21CTwdFeJGkdgTCA';
let maxResults = 11;

var get = "https://www.googleapis.com/youtube/v3/playlists";

var playlists = { part: "snippet", channelId: channelId, maxResults: maxResults, key: API_key };
var p = $.param(playlists);
var url = get.concat('?', p);


// Get first video 
$.ajax({
    url: url,
    type: "get",
    success: function (data) {
        var playlistId = '';
        var playlistTitle = '';
        var playlistImage = '';
        var playlist = '';



        $.each(data.items, function (i, item) {

            console.log(item.snippet.title);
            if (i == 0 || i == 2 || i > 11) {
                i++;
            } else {
                playlistId = item.id;
                playlistTitle = item.snippet.title;
                playlistImage = item.snippet.thumbnails.maxres.url;
                console.log(item.id);

                if (i == 3) {
                    musicVideos = '<a class="contain carousel-item" href="videos.php?id=' + playlistId + '"><img class="my_img" height=300 src="' + playlistImage + '"><div class="middle"><div class="text">' + playlistTitle + '</div></div></a>';
                    slider.prepend(musicVideos);
                    return;
                }

                playlist = '<a class="contain carousel-item" href="videos.php?id=' + playlistId + '"><img class="my_img" height=300 src="' + playlistImage + '"><div class="middle"><div class="text">' + playlistTitle + '</div></div></a>';
                slider.append(playlist);
                //remove the 'initialized' class which prevents slider from initializing itself again when it's not needed
                if (slider.hasClass('initialized')) {
                    slider.removeClass('initialized')
                }

                //just reinit the carousel
                slider.carousel({
                    numVisible: 5,
                    duration: 700,
                    dist: -60,
                    shift: 0,
                    padding: -200
                });

            } //end else

        });


        $("html").keyup(function (event) {
            if (event.which == 39 || event.which == 38) {
                $(slider).carousel('next');
            } else if (event.which == 37 || event.which == 40) {
                $(slider).carousel('prev');
            }

        });

    },
    error: function () {
        console.log('No Data');
    }
});