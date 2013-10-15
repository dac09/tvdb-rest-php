<?php
function getImg() {

    /* 
    	Example: (1) getImg/Top Gear or (2) getImg/Top Gear/1,2
      Arguments: (1) Show Name e.g. Top Gear.  (2) ShowName & SeasonNo.,EpisodeNo.
      Response: (1) All images associated with show. Need to find type2=1280x720 to get big image
      (2) Thumbnail for the specific episode of the show
     */

      global $f3;
      global $tvdb;

      $series = $f3->get('PARAMS.param1');
      $episode_index = $f3->get('PARAMS.param2');
      $data = $tvdb->getSeries($series);

    if ($episode_index) {
		//if requesting episode image
        $chunks = explode(",", $episode_index);
    		$season = $chunks[0];  //	echo "Season " . $season;
    		$ep = $chunks[1];   //		echo "Ep" . $ep;
    		$episode = $tvdb->getEpisode($data[0]->id, $season, $ep, 'en');
		    echo $episode->thumbnail;
    } 
    else {
		//if requesting show images
    $banner = $tvdb->getBanners($data[0]->id);
    $banner_j = json_encode($banner);
    echo $banner_j;
  }
}

function getShow() {

    /* 
    	Example: getShow/Top Gear
      Arguments: Show Name e.g. Top Gear
      Response: Show details, synopsis, etc.
     */

      global $f3;
      global $tvdb;

      $series = $f3->get('PARAMS.param1');
      $data = $tvdb->getSeries($series);

      echo json_encode($data);
    }

function getEpisode() {
    /* 	
      Example: getEpisode/Top Gear/1,2
      Arguments: Show Name/SeasonNo. , EpisodeNo.
      Response: Episode details, synopsis, etc.
     */
    
      global $f3;
      global $tvdb;

      $series = $f3->get('PARAMS.param1');
      $episode_index = $f3->get('PARAMS.param2');
      $data = $tvdb->getSeries($series);

      $chunks = explode(",", $episode_index);
      $season = $chunks[0];  //	echo "Season " . $season;
      $ep = $chunks[1];   //		echo "Ep" . $ep;

      $episode = $tvdb->getEpisode($data[0]->id, $season, $ep, 'en');

      echo json_encode($episode);
  }
  ?>