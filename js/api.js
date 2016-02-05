/////////////////////
// START DOM READY //
/////////////////////
$(function() {
 
    // Runs function on page load
    parse_lastfm_data();
 
    // Runs function every interval thereafter
    window.setInterval(function() {
        parse_lastfm_data();
    }, 5000); // Interval in milliseconds
 
});
// END DOM READY //
 
function parse_lastfm_data() {
 
    $.getJSON("http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user=scoonieapu&api_key=e09f97a093db384bc98e3c0004987fe7&limit=2&format=json", function(data) {
 
        // Uncomment console.log to see all returnable data
        console.log(data);
 
        // Checks for successful return before additional parsing.
        if (typeof data == "object") {
 
            // This just grabs the most recent track, key 0
            // If you want to return more recent tracks you will have to loop through data["recenttracks"]["track"]
            var artist = data["recenttracks"]["track"][0]["artist"]["#text"],
                album = data["recenttracks"]["track"][0]["album"]["#text"],
                title = data["recenttracks"]["track"][0]["name"],
                url = data["recenttracks"]["track"][0]["url"];
 
                $("#recent_artist").text(artist);
                $("#recent_album").text(album);
                $("#recent_title").text(title);
                $("#recent_url").attr("href", url);
 
 
        }
 
    });
 
}