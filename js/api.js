$(document).ready(function() {

    window.setTimeout(function() {
        $.getJSON("http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user=scoonieapu&api_key=e09f97a093db384bc98e3c0004987fe7&limit=2&format=json&callback=?", function(data) {

            var html = ''; 
            var counter = 1; 
            $.each(data.recenttracks.track, function(i, item) {
                if(counter == 1) {
                    html += '<span><a href="' + item.url + '" target="_blank">' + item.name + '</a> - ' + item.artist['#text'] + '</span>';
                } 
                counter++ 
            });
            $('.listening-to h5').append(html); // print the information to the document - here I look for the h5 tag inside the div with a class of 'listening-to' and use the jQuery append method to insert the information we've stored in the html variable inside the h5 tag.

        });

    },5000); // close JSON call

}); // close document ready function