<?php

	$param = $_REQUEST['d'];
	$param2 = $_REQUEST['t'];
	
	$resource = "";
	if ($param == 'mVznRe5Be8wqB0b2fNw2A0zkTW0hT6L9KE3dEsVcQEC6usGpU6wniBMqsR16rHIvjlDDJ5eiNfo7x1Zp7R6CbV-065bxKMF07uzS0FhRyteEH9kOyvQhZk9mTyBx28WQrW1fuC_nb4oFLuyKVRc9CTYb-Ov2k4in79jJRZbUlht5_u2-0') {
		$resource = '1';
	} else if ($param == 'A63a6yJBiLurDPDTpsdfiqcpovvx36Pc2oSSRCK5SRUQltBzf9BcJVJmUh4b_OU4McpAuT-Zq9ODgHYMTkmi-suT2FT9RcEHeRPTzIC58O4Xe1fcsnMD9QnVEcvUSfLnoAW_WziAhHA-JWDmbZ7V63v9CRikQL9yanY4hABQbvc2w1cY0') {
		$resource = '2';
	} else if ($param == 'fHVnSgKfCPj714lYI4stmi_H3ZH8I4ptxHaRTJ1p2M7y8Jw42kzoLwMVrWZeOVoefFGBpZKwgnFNizAp378qps44F3B6KNZSY2_E_T4Hv5L5QhjCXIfYjJlPNNMmSpQYsN9kOA2') {
		$resource = '3';
	}
	
	echo file_get_contents($resource . '.txt');