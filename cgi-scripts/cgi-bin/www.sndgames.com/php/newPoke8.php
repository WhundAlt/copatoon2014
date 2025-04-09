<?php
	
	//	Pass	darkmoe
	//	ver		750
	//	Email	darkmoe@darkmoe.com
	//	Action	createAccount

	$action = $_REQUEST['Action'];
	
	if ($action == 'createAccount') {
		echo 'p1_hs=0&p1_numPoke=0&p2_hs=0&p2_numPoke=0&p3_hs=0&p3_numPoke=0&p1_numItem=0&p2_numItem=0&p3_numItem=0&dex1=0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&dex1Shiny=0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&dex1Shadow=0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&Result=Success&Reason=LoggedIn&Challenge1=0&Challenge2=0&Challenge3=0&Advanced1=0&Advanced2=0&Advanced3=0&Advanced1_a=0&Advanced2_a=0&Advanced3_a=0&TrainerID=73680&ProfileID=kgkmlfff&Nickname1=Satoshi&Nickname2=Satoshi&Nickname3=Satoshi&Badges1=0&Badges2=0&Badges3=0&Money1=0&Money2=0&Money3=0&Version1=0&Version2=0&Version3=0&NPCTrade1=0&NPCTrade2=0&NPCTrade3=0&shinyHunt1=0&shinyHunt2=0&shinyHunt3=0&Classic1=0&Classic2=0&Classic3=0&Classic1_a=0&Classic2_a=0&Classic3_a=0&avatar1=none&avatar2=none&avatar3=none&accNickname=Satoshi&CurrentSave=15b189ee44bb0b';
	
	} else if ($action == 'loadAccount') {
		echo 'p1_hs=0&p1_numPoke=0&p2_hs=0&p2_numPoke=0&p3_hs=0&p3_numPoke=0&p1_numItem=0&p2_numItem=0&p3_numItem=0&dex1=0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&dex1Shiny=0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&dex1Shadow=0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000&Result=Success&Reason=LoggedIn&Challenge1=0&Challenge2=0&Challenge3=0&Advanced1=0&Advanced2=0&Advanced3=0&Advanced1_a=0&Advanced2_a=0&Advanced3_a=0&TrainerID=45546&ProfileID=efhlekek&Nickname1=Satoshi&Nickname2=Satoshi&Nickname3=Satoshi&Badges1=0&Badges2=0&Badges3=0&Money1=0&Money2=0&Money3=0&Version1=0&Version2=0&Version3=0&NPCTrade1=0&NPCTrade2=0&NPCTrade3=0&shinyHunt1=0&shinyHunt2=0&shinyHunt3=0&Classic1=0&Classic2=0&Classic3=0&Classic1_a=0&Classic2_a=0&Classic3_a=0&avatar1=none&avatar2=none&avatar3=none&accNickname=Satoshi&CurrentSave=15b18a110ba6b6';
		
	} else if ($action == 'saveAccount') {
		$saveString = $_REQUEST['saveString'];
		
		echo 'ServerResponce=true&newPokePos_1=472538155&CaptureDone=true&Result=Success&Reason=ProfileUpdated&newSave=15b18a2583b5b1';
	}
	