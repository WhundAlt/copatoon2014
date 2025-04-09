<?php
	if (urldecode($_POST["user"]) == "rank_get") {
		echo "entry=rank&rank_view=999";
	} else {
		echo "entry=ok";
	}
?>