<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<h1>Your Progress on the Missions</h1><div id='results_mission_update' class='results_mission_update'> </div><script language="JavaScript" type="text/javascript">
  var missions = gameResultsShowActiveMissions(1,"//tetrisow-a.akamaihd.net/data5_0_1_1");
  var parentheight = 357;
  var missionsHtml = "";
  var numMissions = Math.floor(missions.length/2);
  for (var i = 0; i < numMissions*2; i+=2)
  {
    missionsHtml += missions[i];
  }
  $('div#game_results_missions_popup').css({
    'top':(parentheight-(18+20+(numMissions*60)))+"px",
    'height':(18+20+(numMissions*60))+"px",
    'z-index':999
  });
  $("#results_mission_update").html(missionsHtml);
  
</script>