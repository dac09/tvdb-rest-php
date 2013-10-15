TVDB REST-ish Api
---
This is a REST-ish wrapper to a modified version of PHPTVDB. Everything is returned in JSON for ease of use on the client side.

**Note**: *this is a quick hack, it does one thing well - it works. Its doesn't follow best practice*

###What did you build it with?
Built with [Fat Free Framework (F3)](https://github.com/bcosca/fatfree) for routing. I've not used many of the advanced features this micro framework offers. 

The base code I used is available here (thank you!): [TvDb](https://github.com/Moinax/TvDb). I've modified this however, as I couldn't get it to work for me.


###What does it do?

Adds RESTful like layer to an existing PHP TVDB wrapper.

**Please note:** it's a wrapper on top of a wrapper - but it was for a quick and easy solution to a project I was working on. If I have time I will rewrite completely in F3.

###Getting Started
- Get your TVDB API key, and update bootstrap.php
- Make sure you have [**mod_rewrite**](https://httpd.apache.org/docs/current/mod/mod_rewrite.html) plugin enabled for PHP on your webserver
- Pull the code into your webserver either on its root or a  subdirectory - doesn't matter
- Make sure you've got the .htaccess file (hidden on UNIX systems)
- Test by making a call e.g. localhost/tvdb-api/. This should return a hello world message

##Calls
All calls are GET (hence REST-ish) and are based on function names inside apicalls.php. The code is also commented with examples so should get you started pretty easy.

###getImg
Get show images e.g. (e.g. Friends)

     getImg/Friends
or get episodic images (e.g. Friends season 1, episode 2)

    getImg/Friends/1,2

###getShow
This will return an array of shows, with the closest match (how TVDB works). So be specific e.g. Battlestar Galactica (2003) instead of Battlestar Galactica

    getShow/Friends

###getEpisode
Get episode details e.g. Friends Season 3, Episode 5

    getEpisode/Friends/3,5


