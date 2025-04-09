<?xml version="1.0"?>
<config>
	<!-- <server url="http://dzh6bbgbz2u3w.cloudfront.net/"/> -->
	<server url="http://files.windosill.com/"/>
	<build version="1.0" path="builds/icarus/"/>
	<manager file="RoomManager_r184.swf"/> 
	<applicationData>
		<securityData ipLogged="IP_LOGGED_TOKEN"/>
		<settings>
			<setting id="demoLimit" val="4"/> 
			<setting id="bustCache" val="false"/>  
			<setting id="doIntroSequence" val="true"/>  
		</settings>
		<controls>
			<!--<control index="0" type="home" mode="onlineDemo,onlineFull,demo,full" label="Visit the Windosill homepage"/>-->
			<control index="0" type="about" mode="onlineDemo,onlineFull,demo,full" label="About Windosill"/>
			<control index="1" type="ipad" mode="onlineDemo,onlineFull,demo,full" label="Get Windosill for the iPad"/>
			<control index="2" type="sound" mode="onlineDemo,onlineFull,demo,full" label="toggle sounds"/>
			<!-- <control index="3" type="fullscreen" mode="onlineDemo,onlineFull,demo,full" label="toggle fullscreen (may slow down performance)"/> -->
			<!-- <control index="4" type="mailingList" mode="onlineDemo,onlineFull,demo,full" label="join our mailing list (opens a new window)"/> -->
			<!-- <control index="5" type="bug" mode="onlineFull,full" label="submit a bug"/> -->
			<!-- <control index="6" type="share" mode="onlineDemo,onlineFull,demo,full" label="send to a friend"/> -->
			<control index="4" type="reset" mode="onlineDemo,onlineFull,demo,full" label="reset windosill"/>
			<control index="5" type="download" mode="onlineDemo,onlineFull" label="download windosill for better performance"/>
			<control index="6" type="upgrade" mode="onlineDemo,demo" label="activate windosill to unlock the second half"/>
			<control index="7" type="warp" mode="onlineFull,full,onlineDemo,demo" label="warp to\rany room"/>
		</controls>
		<modules basePath="">
			<module index="0" tag="cabinet" file="modules/CabinetModule_r9.swf" sounds="sounds/cabinetSounds.swf"/>
			<module index="1" tag="title" file="modules/TitleModule_r8.swf" sounds="sounds/titleSounds.swf"/>
			<module index="2" tag="tycho" file="modules/TychoModule_r7.swf" sounds="sounds/tychoSounds.swf"/>
			<module index="3" tag="garden" file="modules/GardenModule_r12.swf" sounds="sounds/gardenSounds.swf"/>
			<module index="4" tag="chimney" file="modules/ChimneyModule_r5.swf" sounds="sounds/chimneySounds.swf"/>
			<module index="5" tag="city" file="modules/CityModule_r13.swf" sounds="sounds/citySounds.swf"/>
			<module index="6" tag="waves" file="modules/WavesModule_r24.swf" sounds="sounds/wavesSounds_r1.swf"/>
			<module index="7" tag="moon" file="modules/MoonModule_r31.swf" sounds="sounds/moonSounds.swf"/>
			<module index="8" tag="beast" file="modules/BeastModule_r8.swf" sounds="sounds/beastSounds.swf"/>
			<module index="9" tag="tower" file="modules/TowerModule_r15.swf" sounds="sounds/towerSounds.swf"/>
		</modules>
		<assets basePath="">
			<asset index="0" file="classes/common_r58.swf"/>
			<asset index="1" file="classes/models_r17.swf"/> 
			<asset index="2" file="classes/shared_r27.swf"/>
			<asset index="3" file="sounds/sharedSounds_r1.swf"/>
			<asset index="4" file="sharedAssets_r1.swf"/>
		</assets>
		<purchaseData url="http://windosill.com/config/getPurchaseInfo.php"/>
		<strings>
			<string id="registrationExpired" val="This registration key is invalid.&#13;You can continue playing the trial version.&#13;Please contact support@windosill.com&#13;if you believe this is a mistake."/>
			<string id="invalidKey" val="I'm sorry, that&#13;code is invalid.&#13;Please try again."/>
			<string id="activated" val="Activation successful.&#13;Thank you!"/>
			<string id="activationNeeded" val="You must activate&#13;Windosill to continue&#13;your journey."/>
			<string id="promptUpgrade" val="Press this button&#13;when you're ready&#13;to activate Windosill."/>
			<string id="alreadyActivated" val="Your copy of&#13;WINDOSILL&#13;has already&#13;been activated."/>
			<string id="couldntReachBugs" val="Couldn't connect to bug server.&#13;Please try again later"/>
			<string id="couldntValidate" val="Couldn't connect to validation server.&#13;Please try again later"/>
			<string id="couldntReachMailingList" val="Couldn't connect to mailing list.&#13;Please try again later!"/>
			<string id="assetLoadFailure1" val="Unable to load required assets.&#13;Make sure you are connected&#13;to the internet, and click to try again."/>
			<string id="assetLoadFailure2" val="Still unable to load assets.&#13;Please visit status.windosill.com for server status."/>
			<string id="badXml" val="Invalid XML!&#13;Please notify&#13;support@windosill.com"/>
			<string id="messageSent" val="An email has been sent to your friend!&#13;Click to continue Windosill."/>
			<string id="sendBadEmail" val="One of the email addresses you entered is an invalid format.&#13;Correct any errors and try again."/>
			<string id="couldntSendToFriend" val="Sorry, we couldn't send your message at this time.&#13;Please try again later."/>
			<string id="bugSubmitted" val="Your bug was submitted.&#13;Thank you for helping us&#13;improve Windosill!"/>
			<string id="demoExplain0" val="Welcome to&#13;Windosill!"/>
			<string id="demoExplain1" val="This free version&#13;contains the first half&#13;of the game."/>
			<string id="demoExplain2" val="You can continue&#13;playing online..."/>
			<string id="promptDownload" val="...or you can&#13;download&#13;Windosill&#13;for better&#13;performance"/>
			<string id="beginPrompt" val="Click to begin."/>
		</strings>
		<links>
			<link id="vectorpark" val="http://vectorpark.com"/>
			<link id="home" val="http://windosill.com"/>
			<link id="mailingList" val="http://vectorpark.com/mailingList.php"/>
			<link id="validate" val="http://windosill.com/validation/verifyKeyXML.php"/>
			<link id="ipLookup" val="http://windosill.com/validation/lookUpIP.php"/>
			<link id="bugs" val="http://windosill.com/bugs/submitBug.php"/>
			<link id="sendEmail" val="http://windosill.com/sendEmail/sendEmail.php"/>
			<link id="dragonClip" val="http://files.windosill.com/builds/icarus/extras/dragonClip_r2.swf"/>
			<link id="iPadVersion" val="http://vectorpark.com/Windosill-iPad"/>
		</links>
	</applicationData>
</config>