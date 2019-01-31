// cktizzy uploads ID

var API_key = 'AIzaSyDPQncvocimM7RRjDTQNnYCtH8fFYbDX4k';
var playlistID = 'PLf7I7Yk_q_ugVNH4q40YaKRBLEipqvm6o';
let maxResults = 1;

var get = "https://www.googleapis.com/youtube/v3/playlistItems";


var uploads = { part: "snippet", playlistId: playlistID, maxResults: maxResults, key: API_key };
var s = $.param(uploads);
var url = get.concat('?', s);
var id = '';
/*
$.get(url, function(data){
         getVideoID(data);
        }); 
function getVideoID(response) {
        id = response.items[0].snippet.resourceId.videoId;
        console.log(id);
        return id;
  }*/


const promise = new Promise((resolve, reject) => {
  const request = new XMLHttpRequest();

  request.open("GET", url);
  request.onload = () => {
    if (request.status === 200) {
      resolve(request.response);
    } else {
      reject(Error(request.statusText));
    }
  };

  request.onerror = () => {
    reject(Error("Error fetching data."));
  };

  request.send();
});

console.log("Asynchronous request made.");

promise.then(
  data => {
    console.log(JSON.parse(data).items[0].snippet.resourceId.videoId);
    id = JSON.parse(data).items[0].snippet.resourceId.videoId;



  },
  error => {
    console.log("Promise rejected.");
    console.log(error.message);
  }
);



// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');


tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



// Get first video


// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

function onYouTubeIframeAPIReady() {
  const vid = id;
  if (vid != '') {
    $('nav').show();
    player = new YT.Player('player', {
      height: '390',
      width: '640',
      videoId: vid,
      playerVars: {
        'autoplay': 1,
        'controls': 1,
        'loop': 1,
        'rel': 0,
        'playsinline': 1
      },
      events: {
        'onReady': onPlayerReady,

      }
    });
    var logoLoad = anime.timeline();

    logoLoad
      .add({
        targets: '#navLoad #navlogo',
        translateY: [-100, 0],
        direction: 'alternate'
      });


    var functionBasedDuration = anime({
      targets: '#navLoad .el',
      translateY: [-100, 0],
      duration: function (el, i, l) {
        return 1000 + (i * 1000);
      }
    });

    var menuLoad = anime.timeline();

    menuLoad
      .add({
        targets: '#navLoad #menu',
        translateX: [-500, 0],
        direction: 'alternate'
      });

    var videoLoad = anime.timeline();

    videoLoad
      .add({
        targets: '.container',
        translateX: [-1500, 0],
        delay: 1000,
        duration: 3000,
        easing: 'easeOutExpo',
        direction: 'alternate'
      });
  } else {
    window.location.reload();

  }


}


// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.setVolume(50);
  event.target.playVideo();
}