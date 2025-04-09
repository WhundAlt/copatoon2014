<?

// add user to db --------------------------------

$get = $HTTP_GET_VARS;

$uname = $get['uname'];
$pword = $get['pword'];
$user_props = array("id","uname","pword","eye","life","head","dark","light","photo","photo_x","photo_y","photoscale","cur_level","unlocked_level","unlocked_items","collected_items");


function newAgent(){
	global $get;
	
	$fields = "";
	$values = "";
	foreach($get as $k => $v){
		if($k != "rand" and $k != "func"){
			if($fields != ""){
				$fields .= ",";
			}
			$fields .= $k;
			
			if($values != ""){
				$values .= ",";
			}
			
			if($k == "pword"){
				$values .= "password('" . $v . "')";
			}else{
				$values .= "'" . $v . "'";
			}
		}
	}
	
	$qstr = "INSERT INTO agent (" . $fields . ",created) VALUES (" . $values . ",now())";
	
	$result = mysql_query($qstr);
	
	if($result){
		agentLogin();
	}else{
		echo 'result=fail';
	}
}

// agent login .. returns agent id -----------------
function agentLogin(){
	global $uname;
	global $pword;
	
	$qstr = "SELECT * FROM agent WHERE uname='" . $uname . "' AND pword='" . $pword . "'";
	$login = mysql_query($qstr);
	
	$qstr2 = "SELECT * FROM agent WHERE uname='" . $uname . "' AND pword=password('" . $pword . "')";
	$login2 = mysql_query($qstr2);
	
	$result = "agent_id=null";
	while($agent = mysql_fetch_assoc($login)){
		$result = "agent_id=" . $agent['id'];
	}
	
	if($result == "agent_id=null"){
		while($agent = mysql_fetch_assoc($login2)){
			$result = "agent_id=" . $agent['id'];
		}
	}
	
	echo $result;
}


// retrieve agent data ----------

function getAgentData(){
	global $get;
	$id = $get['id'];
	
	$qstr = "SELECT * FROM agent WHERE id='" . $id . "'";
	$agent = mysql_query($qstr);
	
	while($data = mysql_fetch_assoc($agent)){
		foreach($data as $k => $v){
			$output .= "&" . $k . "=" . $v;
		}
	}
	
	echo $output;
}

function saveData(){
	global $get;
	global $user_props;
	
	$set_str = "";
	foreach($get as $k => $v){
		if($k != "id" and $k != "uname" and $k != "pword" and in_array($k,$user_props)){
			if($set_str != ""){
				$set_str .= ",";
			}
			
			$set_str .= $k . "='" . $v . "'";
		}
	}
	
	$qstr = "UPDATE agent SET " . $set_str . " WHERE id='" . $get['id'] . "'";
	$result = mysql_query($qstr);
	
//	echo $set_str . "<br />";
	
	if($result){
		echo "result=success";
	}
}
	
// ---------------------------------
$func = $get['func'];
require 'db.inc.php';
eval($func . "();");

?>