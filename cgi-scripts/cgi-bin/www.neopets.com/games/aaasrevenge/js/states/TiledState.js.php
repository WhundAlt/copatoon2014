
var AAARevenge = AAARevenge || {};

AAARevenge.TiledState = function () {
    "use strict";
    Phaser.State.call(this);
    
    this.prefab_classes = {
        "player": AAARevenge.Player.prototype.constructor,
        "enemy": AAARevenge.Enemy.prototype.constructor,
        "king": AAARevenge.King.prototype.constructor,
        "power_life": AAARevenge.PowerLife.prototype.constructor,
        "power_score": AAARevenge.PowerScore.prototype.constructor
    };
 };

AAARevenge.TiledState.prototype = Object.create(Phaser.State.prototype);
AAARevenge.TiledState.prototype.constructor = AAARevenge.TiledState;

AAARevenge.TiledState.prototype.init = function (level_data) {
    "use strict";
        
    var tileset_index;
    this.level_data = level_data;
    
   this.scale.scaleMode = Phaser.ScaleManager.SHOW_ALL;
   this.scale.pageAlignHorizontally = true;
   this.scale.pageAlignVertically = true;
    
    // start physics system
    this.game.physics.startSystem(Phaser.Physics.P2JS);
    this.game.physics.p2.gravity.y = 0;
    
    this.game.physics.p2.setBoundsToWorld(true, true, true, true, false);

    // create map and set tileset
    this.map = this.game.add.tilemap(level_data.map.key);
    tileset_index = 0;
    this.map.tilesets.forEach(function (tileset) {
        this.map.addTilesetImage(tileset.name, level_data.map.tilesets[tileset_index]);
        tileset_index += 1;
    }, this);
    
    if (this.level_data.first_level) {
        localStorage.clear();
    }
    
    this.mousePointerX = 0;
    this.mousePointerY = 0;
    
    this.game.physics.p2.setPostBroadphaseCallback(this.checkCollision, this);
    this.game.input.addMoveCallback(this.updateMousePointer, this);
    
    this.collidingBodies = null;
    
    this.currentPowers = [];
  
    this.isGameActivated = false;
    
    this.game.physics.p2.setImpactEvents(true);
    
    this.game.input.keyboard.start();
    
    this.allowInput = false;
};

AAARevenge.TiledState.prototype.showGameOverModal = function(){
    var scoreVal = "Score: " + this.prefabs["player"].score;
    this.reg.modal.updateModalValue(scoreVal, "modal3", 3); 
     if(this.prefabs["player"].score == 0){
    	var submitBtn = this.reg.modal.getModalItem("modal3", 5);
    	submitBtn.visible = false;
    	submitBtn.alpha = 0;
    }
    this.reg.modal.showModal("modal3");
   
    this.sfxGameOver.play();
    return "modal3";
};

AAARevenge.TiledState.prototype.initModal = function(){
    this.reg.modal.createModal({
            type:"modal1",
            includeBackground: true,
            modalCloseOnInput: true,
            itemsArr: [
               	{
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "overlay.png",
                    contentScale: 1
                }, 
                {
                    type: "text",
                    content: "Success!",
                    fontFamily: "Arial",
                    fontSize: 22,
                    color: "0xffffff",
                    offsetY: -80
                },
                {
                    type: "text",
                    content: "Earned NP : 0",
                    fontFamily: "Arial",
                    fontSize: 15,
                    color: "0xffffff",
                    offsetY: -35
                },                
                {
                    type: "text",
                    content: "Your NP : 0",
                    fontFamily: "Arial",
                    fontSize: 15,
                    color: "0xffffff",
                    offsetY: -15
                },
                {
                    type: "text",
                    content: "Your High Score : 0",
                    fontFamily: "Arial",
                    fontSize: 15,
                    color: "0xffffff",
                    offsetY: 5
                },
                {
                    type: "text",
                    content: "Plays Today : 0",
                    fontFamily: "Arial",
                    fontSize: 15,
                    color: "0xffffff",
                    offsetY: 25
                },
                {
                    type: "sprite",
                    content: "ok.png",
                    atlasParent: "atlas1",
                    offsetY: 70,
                    contentScale: 0.6,
                    callback: this.exitToMainMenu.bind(this)
                }
            ]
        });
       
       this.reg.modal.createModal({
            type:"modal5",
            includeBackground: true,
            modalCloseOnInput: false,
            itemsArr: [
                {
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "overlay.png",
                    contentScale: 1
                }, 
                {
                    type: "text",
                    content: "Please Wait...",
                    fontFamily: "Arial",
                    fontSize: 22,
                    color: "0xffffff",
                    offsetY: -20
                }
            ]
        });
        
     this.reg.modal.createModal({
            type:"modal2",
            includeBackground: true,
            modalCloseOnInput: true,
            itemsArr: [
              {
                    type: "sprite",
                    content: "overlay.png",
                    atlasParent: "atlas1",
                    contentScale: 1
                }, 
                {
                    type: "text",
                    content: "Failed!",
                    fontFamily: "Arial",
                    fontSize: 22,
                    color: "0xffffff",
                    offsetY: -80
                },
                 {
                    type: "text",
                    content: "Error",
                    fontFamily: "Arial",
                    fontSize: 15,
                    color: "0xffffff",
                    offsetY: -35
                },
                {
                    type: "sprite",
                    content: "ok.png",
                    atlasParent: "atlas1",
                    offsetY: 70,
                    contentScale: 0.6,
                    callback: this.exitToMainMenu.bind(this)
                }
            ]
        });
    
    ///////// modal 3 //////////
   this.reg.modal.createModal({
            type:"modal3",
            includeBackground: true,
            modalCloseOnInput: false,
            itemsArr: [
                {
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "img_gameover.png",
                    offsetY: -170,
                    offsetX: -10,
                    contentScale: 0.6
                },
                {
                    type: "text",
                    content: "Score : 0",
                    fontFamily: "Arial",
                    fontSize: 25,
                    color: "0xffffff",
                    offsetY: -100,
                    offsetX: -10
                }, 
                {
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "exittomainmenu.png",
                    offsetY: -40,
                    offsetX: -10,
                    contentScale: 0.6,
                    callback: this.exitToMainMenu.bind(this)
                },
                {
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "no.png",
                    offsetY: 18,
                    offsetX: -10,
                    contentScale: 0.6,
                    callback: this.submitScore.bind(this)
                },
                {
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "yes.png",
                    offsetY: 80,
                    offsetX: -10,
                    contentScale: 0.6,
                    callback: this.restart_level.bind(this)
                }                
            ]
        });
      /////// modal 4 //////////
    this.reg.modal.createModal({
            type:"modal4",
            includeBackground: true,
            modalCloseOnInput: false,
            itemsArr: [
                {
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "cuf.png",
                    contentScale: 1,
                    callback: this.closeInstructions.bind(this)
                }, 
                {
                    type : "text",
                    content: "X",
                    fontSize: 25,
                    color: "0xffffff",
                    offsetY: -130,
                    offsetX: 215,
                    callback: this.closeInstructions.bind(this)
                }
            ]
        });
    /////// modal 7 //////////
    this.reg.modal.createModal({
            type:"modal7",
            includeBackground: true,
            modalCloseOnInput: false,
            itemsArr: [
                {
                    type: "sprite",
                    atlasParent: "atlas1",
                    content: "cuf_mobile.png",
                    contentScale: 1,
                    callback: this.closeInstructions.bind(this)
                }, 
                {
                    type : "text",
                    content: "X",
                    fontSize: 25,
                    color: "0xffffff",
                    offsetY: -130,
                    offsetX: 215,
                    callback: this.closeInstructions.bind(this)
                }
            ]
        });
};

AAARevenge.TiledState.prototype.closeInstructions = function(){
    "use strict"
    if(!this.isMute){
        this.game.sound.mute = false;
        this.music.play();
        this.sfxKingSleeping.play();
    }
    if(this.game.device.desktop) this.reg.modal.hideModal("modal4");
    else this.reg.modal.hideModal("modal7");
    
    this.allowInput = true;
};

AAARevenge.TiledState.prototype.exitToMainMenu = function(){
    this.game.input.keyboard.stop();
    this.music.stop();
    this.game.state.start("MainMenuState", true, false, this.level_data);
};

AAARevenge.TiledState.prototype.submitScore = function(){
    this.sfxKingSleeping.stop();
    this.music.stop();
    var score = this.prefabs['player'].getScore();
	var goth = "37e6ce120efcf2a9192a5bb51de40576";
    var data = {'action': 'scorepad', 'score':score, 'goth':goth};
    $.post('ajax/scoring.php', data, this.scoreSubmissionSuccess1.bind(this));
    this.reg.modal.showModal("modal5");
};

AAARevenge.TiledState.prototype.scoreSubmissionSuccess1 = function(response){
	if(response.success){
		var session_key = document.getElementById('sessionKey').value;
   		var session_hash = document.getElementById('sessionHash').value;
    	var game_id = document.getElementById('gameID').value;
    	var data = {'gmdt_g': response.escore, 'sh_g':session_hash, 'sk_g':session_key, 'gmd_g': game_id, 'scr':response.score, 'gmd_t' : 'php'};
		$.post('/high_scores/process_flash_score.phtml', data, this.scoreSubmissionSuccess2.bind(this));   		
		//$.post('/high_scores/process_score_test.phtml', data, this.scoreSubmissionSuccess2.bind(this));   		
	}
	
	/*if(response.success){
		
		
    	this.reg.modal.showModal("modal1");
    }else{
        this.reg.modal.showModal("modal2");
    }*/
};

AAARevenge.TiledState.prototype.formatWithCommas = function(num){
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
};

AAARevenge.TiledState.prototype.scoreSubmissionSuccess2 = function(response){
		
	// stringify response to see if valid json
	var isValid = this.isJSON(response);
	
	if(isValid){
		var obj = JSON.parse(response);
		
		if(obj.success && obj.errcode == 0){
    		this.reg.modal.hideModal("modal5");
			this.reg.modal.showModal("modal1");
			//var npCurrent = $('#npanchor').text();
   			var regex = new RegExp(',', 'g');
			
			//var npCurrentNum = npCurrent.replace(regex, '');
			var objNPEarned = obj.user_np;
			//var npUpdatedNum = objNP.replace(regex, '');
			var npEarnedNum = objNPEarned;
			
			var npEarned = "Earned NP: " + this.formatWithCommas(npEarnedNum);
			this.reg.modal.updateModalValue(npEarned, "modal1", 4);
			
			var npValue = "Your NP : " + obj.np;
			this.reg.modal.updateModalValue(npValue, "modal1", 5); 
			
			var playsToday = "Plays Today : " + obj.plays;
			this.reg.modal.updateModalValue(playsToday, "modal1", 7);
			
			var highScore = "Your Highscore : " + obj.month;
			this.reg.modal.updateModalValue(highScore, "modal1", 6);
			
			Neo.setNp(obj.np); // update HUD

			if(obj.call_url){
				window.open('http://www.neopets.com/games/display_avatar.phtml?id=465','_blank', 'width=600, height=200');
			}
		}
	}else{
		var convertedJSON = this.queryStringToJSON(response);
		
		this.reg.modal.hideModal("modal5");
		this.reg.modal.showModal("modal2");
		
		if(convertedJSON.errcode == 1140){
			this.reg.modal.updateModalValue("Max Plays : 3 / 3", "modal2", 4);	
		}else{
			var errorVal = "Error Code: " + convertedJSON.errcode 
			this.reg.modal.updateModalValue(errorVal, "modal2", 4);
		}
	}
};

AAARevenge.TiledState.prototype.queryStringToJSON = function(qs){
	 qs = qs || location.search.slice(1);

    var pairs = qs.split('&');
    var result = {};
    pairs.forEach(function(pair) {
        var pair = pair.split('=');
        var key = pair[0];
        var value = decodeURIComponent(pair[1] || '');

        if( result[key] ) {
            if( Object.prototype.toString.call( result[key] ) === '[object Array]' ) {
                result[key].push( value );
            } else {
                result[key] = [ result[key], value ];
            }
        } else {
            result[key] = value;
        }
    });

    return JSON.parse(JSON.stringify(result));
};

AAARevenge.TiledState.prototype.isJSON = function(jsonTest){
	try {
        var strJSON = JSON.stringify(jsonTest);
        var isQSArray = strJSON.split('&');
        
        if(isQSArray.length > 1){
        	return false;
        }
        
        var parsedJSON = JSON.parse(jsonTest);
        
        if(typeof(jsonTest) == 'string')
            if(jsonTest.length == 0)
                return false;
    }
    catch(e){
        return false;
    }
    
    return true;
};

AAARevenge.TiledState.prototype.updateMousePointer = function(pointer, x, y, isDown) {

    this.mousePointerX = x;
    this.mousePointerY = y;
};

AAARevenge.TiledState.prototype.create = function () {
    "use strict";

    var group_name, object_layer, collision_tiles;
    
    this.music = game.add.audio('bgm');

    this.music.loop = true;
    
    this.initSFX();  
    
    this.powerSpawnTiles = {};
    
    game.input.keyboard.disable = false;
    
    game.time.advancedTiming = true;
    game.physics.p2.world.defaultContactMaterial.friction = 0;
    game.physics.p2.world.setGlobalStiffness(1e5);
        
    // create game constants
    this.game_constants = {};
    var i = 0;
    this.level_data.gameconstants.forEach(function (gameConstant) {
        var gameConstantObject = new AAARevenge.GameStateConstants(gameConstant);
        this.game_constants[i] = gameConstantObject;
        i++;
    }, this);
        
    
    this.currentGameConstantIndex = 0;
    this.currentGameConstant = this.game_constants[this.currentGameConstantIndex];
    
    // create collision groups
    this.collision_groups = {};
    this.level_data.collisiongroups.forEach(function (cg_name) {
        this.collision_groups[cg_name] = this.game.physics.p2.createCollisionGroup();
    }, this);
    
    // for line of sight
    this.collision_groups["lineofsight"] = this.game.physics.p2.createCollisionGroup();
    
    this.groups = {};
    this.prefabs = {};
    
    this.groups["background"] = this.game.add.group();

    // bg
    var backgroundPos = new Phaser.Point(game.world.centerX, game.world.centerY);
    var backgroundProperties = {group: "background", texture: "atlas2", frame: "mapbg.png"};
    this.background = new AAARevenge.Prefab(this, "background", backgroundPos, backgroundProperties);
    this.background.anchor.setTo(0.5);
    
    // create map layers
    this.layers = [];
    
    this.walls = {};
    this.map.layers.forEach(function (layer) {
        this.layers[layer.name] = this.map.createLayer(layer.name);
        this.layers[layer.name].renderSettings.enableScrollDelta = false;
        if (layer.properties.collision) { // collision layer
            collision_tiles = [];
            layer.data.forEach(function (data_row) { // find tiles used in the layer
                data_row.forEach(function (tile) {
                    // check if it's a valid tile index and isn't already in the list
                    if (tile.index > 0 && collision_tiles.indexOf(tile.index) === -1) {
                        collision_tiles.push(tile.index);
                    }
                }, this);
            }, this);
            
            this.map.setCollision(collision_tiles, true, layer.name);
            this.walls = this.game.physics.p2.convertTilemap(this.map, this.layers[layer.name]);
                
            for(var i=0; i<this.walls.length; i++){
                this.game.physics.p2.enable(this.walls[i]);
                this.walls[i].setCollisionGroup(this.collision_groups["wallCG"]);
                this.walls[i].collides(this.collision_groups["playerCG"]);
                this.walls[i].collides(this.collision_groups["enemyCG"]);
                this.walls[i].collides(this.collision_groups["lineofsightCG"]);
               // this.walls[i].collides(this.collision_groups["yoyoCG"]);
            }
        }
        
        if(layer.properties.allow_spawn){
            var i = 0;
            layer.data.forEach(function (data_row) { // find tiles used in the layer
                data_row.forEach(function (tile) {
                    // check if it's a valid tile index and isn't already in the list
                    if (tile.index > 0) {
                        var tileObj = {"tileX" : tile.x, "tileY" : tile.y, "occupied": false};
                        tile.alpha = false;
                        this.powerSpawnTiles[i] = tileObj;
                        i++;
                    }
                   
                }, this);
            }, this);            
        }
    }, this);
        
    // resize the world to be the size of the current layer
    this.layers[this.map.layer.name].resizeWorld();
    
    // create groups
    this.groups = {};
    this.level_data.groups.forEach(function (group_name) {
        this.groups[group_name] = this.game.add.group();
        if(group_name != "enemies" && group_name != "players" && group_name != "hud" 
        	&&	group_name != 'yoyo'){
            this.groups[group_name].add(this.layers[group_name]);
        }
    }, this);
        
    
    for (object_layer in this.map.objects) {
        if (this.map.objects.hasOwnProperty(object_layer)) {
            // create layer objects
            this.map.objects[object_layer].forEach(this.create_object, this);
        }
    }
    
    this.game_over_panel = null;
   
    this.scorePrefab = null;
    
    this.init_hud();
    
    this.updateGameStateConstants(true);
    
      //modal 
    this.reg = {};
    this.reg.modal = new gameModal(this.game);
    this.initModal();
    
    if(this.level_data.muteSound){
        this.isMute = false;
    }else{
        this.isMute = true;
    }
    this.toggleSound();
    
    if(this.level_data.showCUF){
    	if(this.game.device.desktop) this.reg.modal.showModal("modal4");
    	else this.reg.modal.showModal("modal7");
    	
        this.allowInput = false;
        this.game.sound.mute = true;
    }else{
        this.allowInput = true;
        if(!this.level_data.muteSound){
            this.music.play();
            this.sfxKingSleeping.play();
        }
    }
};

AAARevenge.TiledState.prototype.initSFX = function(){
  "use strict";
    this.sfxYoyo = game.add.audio('yoyo');
    this.sfxHit = game.add.audio('hit');
    this.sfxPower = game.add.audio('power');
    this.sfxPowerTimeout = game.add.audio('powertimeout');
    this.sfxSiren = game.add.audio('siren');
    this.sfxGameOver = game.add.audio('gameover');
    this.sfxKingSemiAlert = game.add.audio('kingsemialert');
    this.sfxKingSleeping = game.add.audio('kingsleeping');
    this.sfxProgressUp = game.add.audio('progressup');
    this.sfxWokeUp = game.add.audio('hit_alt');
};

AAARevenge.TiledState.prototype.update = function () {
    "use strict";
};

AAARevenge.TiledState.prototype.init_hud = function () {
    "use strict";
    var lives_position, lives_properties, lives;
    
    // create the lives prefab
    lives_position = new Phaser.Point(0.2 * this.game.world.width, 0.01 * this.game.world.height);
    lives_properties = {group: "hud", texture: "", lives: 4};
    lives = new AAARevenge.Lives(this, "lives", lives_position, lives_properties);
    
    var score_position, score_properties;
    
    // create the score prefab
    score_position = new Phaser.Point(0.9 * this.game.world.width, 0.01 * this.game.world.height + 10);
    score_properties = {group: "hud", texture: "", score: 0};
    this.scorePrefab = new AAARevenge.Score(this, "score", score_position, score_properties);
    
    var restartBtnPos = new Phaser.Point(this.game.world.width - 16, 20);
    var restartBtnStyle = {font: "34px Arial", fill: "#f0f"};
    var restartBtnProperties = {group: "hud", texture: "atlas1", frame: "reset.png"};
    this.restartBtn = new AAARevenge.Prefab(this, "restartBtn", restartBtnPos, restartBtnProperties);
    this.restartBtn.anchor.setTo(0.5);
    this.restartBtn.inputEnabled = true;
    this.restartBtn.events.onInputUp.add(this.game_over.bind(this));
    
    var soundBtnPos = new Phaser.Point(this.game.world.width - 16, 60);
    var soundBtnStyle = {font: "34px Arial", fill: "#f0f"};
    var soundBtnProperties = {group: "hud", texture: "volume_toggle"};
    this.soundBtn = new AAARevenge.Prefab(this, "soundBtn", soundBtnPos, soundBtnProperties);
    this.soundBtn.anchor.setTo(0.5);
    this.soundBtn.inputEnabled = true;
    this.soundBtn.frame = 0;
    this.soundBtn.events.onInputUp.add(this.toggleSound.bind(this));
    
    this.isMute = false;
    
    if(!this.game.device.desktop){
      // Shoot Button
        var shootBtnPos = new Phaser.Point(this.game.world.width - 75, 545);
        var shootBtnStyle = {font: "34px Arial", fill: "#f0f"};
        var shootBtnProperties = {group: "hud", texture: "atlas1", frame: "shoot.png"};
        this.shootBtn = new AAARevenge.Prefab(this, "shootBtn", shootBtnPos, shootBtnProperties);
        this.shootBtn.anchor.setTo(0.5);
        this.shootBtn.inputEnabled = true;
        this.shootBtn.events.onInputUp.add(this.shootYoYo.bind(this));

         // Left Button
        var leftBtnPos = new Phaser.Point(this.game.world.width - 490, 545);
        var leftBtnStyle = {font: "34px Arial", fill: "#f0f"};
        var leftBtnProperties = {group: "hud", texture: "atlas1", frame: "leftarrow.png"};
        this.leftBtn = new AAARevenge.Prefab(this, "leftButton", leftBtnPos, leftBtnProperties);
        this.leftBtn.anchor.setTo(0.5);
        this.leftBtn.inputEnabled = true;
        this.leftBtn.events.onInputUp.add(this.movePlayerLeft.bind(this));

         // Right Button
        var rightBtnPos = new Phaser.Point(this.game.world.width - 370, 545);
        var rightBtnStyle = {font: "34px Arial", fill: "#f0f"};
        var rightBtnProperties = {group: "hud", texture: "atlas1", frame: "rightarrow.png"};
        this.rightBtn = new AAARevenge.Prefab(this, "rightButton", rightBtnPos, rightBtnProperties);
        this.rightBtn.anchor.setTo(0.5);
        this.rightBtn.inputEnabled = true;
        this.rightBtn.events.onInputUp.add(this.movePlayerRight.bind(this));    
    }    
};

AAARevenge.TiledState.prototype.toggleSound = function(){
    if(!this.isMute){
        this.soundBtn.frame = 1;
        this.isMute = true;
        this.game.sound.mute = true;
        this.level_data.muteSound = true;
    }else{
        this.soundBtn.frame = 0;
        this.isMute = false;
        this.game.sound.mute = false;
        this.level_data.muteSound = false;
        if(!this.music.isPlaying){
            this.music.play();
        }
    }
};

AAARevenge.TiledState.prototype.movePlayerLeft = function(){
    this.prefabs["player"].movePlayerOnTouch("left");
};

AAARevenge.TiledState.prototype.movePlayerRight = function(){
    this.prefabs["player"].movePlayerOnTouch("right");
};

AAARevenge.TiledState.prototype.shootYoYo = function(){
    this.prefabs["player"].beginAction();  
};

AAARevenge.TiledState.prototype.showPauseMenu = function(){
    // When the pause button is pressed, we pause the game
   /* game.paused = true;
    var pos, pbitmap, style;

    // create a bitmap do show the pause screen
    pos = new Phaser.Point(0, 200);
    pbitmap = this.add.bitmapData(game.world.width, game.world.height);
    pbitmap.ctx.fillStyle = "#000";
    pbitmap.ctx.fillRect(0, 0, game.world.width, game.world.height);
    style = {header: {font: "32px Arial", fill: "#FFF"},
                   unpause_text: {font: "20px Arial", fill: "#FFF"},
                   restart_text: {font: "18px Arial", fill: "#FFF"}};

    // create the screen
    this.pauseMenu = new AAARevenge.PauseMenu(this, "pause_menu", pos, {texture: pbitmap, group: "hud", text_style: style, animation_time: 500});

    this.groups.hud.add(this.pauseMenu);
    game.input.keyboard.stop();
    this.music.stop();*/
};

AAARevenge.TiledState.prototype.create_object = function (object) {
    "use strict";
    var object_y, position, prefab;
    // tiled coordinates starts in the bottom left corner
    object_y = (object.gid) ? object.y - (this.map.tileHeight / 2) : object.y + (object.height / 2);
    position = {"x": object.x + (this.map.tileHeight / 2), "y": object_y};
    // create object according to its type
    if (this.prefab_classes.hasOwnProperty(object.type)) {
        prefab = new this.prefab_classes[object.type](this, object.name, position, object.properties);
    }
    this.prefabs[object.name] = prefab;
};

AAARevenge.TiledState.prototype.beginPlay = function(){
    "use strict"
    
    if(this.isGameActivated) return;
    
    // activate los for all the soldiers
    for(var i=1; i<5; i++){
        var soldierName = "soldier"+i;
        this.prefabs[soldierName].activateLoS();
    }
    
    // update king's animation
    this.prefabs["king"].playAnimForDuration(1, 2, 2);
    this.sfxWokeUp.play();
    
    this.isGameActivated = true;
};

AAARevenge.TiledState.prototype.setGameStateConstantObj = function(){
    var score = this.prefabs["player"].getScore();
    var currentIndex = this.currentGameConstantIndex;
    var nextIndex = currentIndex + 1;
    
    var len = Object.keys(this.game_constants).length;
    
    if(nextIndex >= len) return false;
    
    // speed up?
    if(nextIndex < len && score >= this.game_constants[nextIndex].score){
        
        //this.sfxProgressUp.play();
        
        // find the range where the current score fits in
        for(var i=nextIndex; i<len; i++){
            if(score >= this.game_constants[i].score && 
               score < this.game_constants[i+1].score){
                    this.currentGameConstant = this.game_constants[i];
                    this.currentGameConstantIndex = i;
                    return true;
            }
        }
    }
    
    return false;
};

AAARevenge.TiledState.prototype.updateGameStateConstants = function(init){
    var gameConstant = true;
    
    if(init == false){
        gameConstant = this.setGameStateConstantObj();
    }
    
    if(gameConstant){
        for(var i=1; i<=4; i++){
            var soldier = "soldier"+i;
            this.prefabs[soldier].updateGameStateConstants();
        }        
        this.prefabs["player"].updateGameStateConstants(init);        
        var powers = this.currentGameConstant.powers;
        this.spawnRandomPower(powers);
     }else{
         var newScore = this.prefabs["player"].score;
         if(newScore > 200 && newScore % 10 == 0){
             var allPowers = ["power_score", "power_life", "power_freeze"];
             this.spawnRandomPower(allPowers);             
         } // read from game constants         
     }    
    // @todo: cleanup (Last min addition)    
};

AAARevenge.TiledState.prototype.spawnRandomPower = function(powerArray){
    var len = powerArray.length;
        
    var rndPowerIndex = this.getRandomInt(0, len-1);
        
    var powerSpawnPos = this.getPowerSpawnPosIndex();
    this.spawnPower(powerSpawnPos, powerArray[rndPowerIndex]);
};

AAARevenge.TiledState.prototype.checkCollision = function (body1, body2) {
    "use strict";
    
    if((body1 != null && body1.sprite != null && body1.sprite.key === 'player') || 
        (body2 != null && body2.sprite != null && body2.sprite.key === 'player')){
        return true;
    }
    
    // vision == LoS
    
    // yoyo with king
    if((body1 != null && body1.sprite != null && body1.sprite.key === 'king_sleep')
      || (body2 != null && body2.sprite != null && body2.sprite.key === 'king_sleep')) {
        if(body1 && body1.sprite && body1.sprite.key === 'yoyohead' || 
          body2 && body2.sprite && body2.sprite.key === 'yoyohead'){
            this.prefabs["player"].retractYoYo();
            this.prefabs["player"].updateScore();
            
            return true;
        }
        return true;
    }
    // yoyo with powers
    if((body1 != null && body1.sprite != null && body1.sprite.key.indexOf('power') > -1) &&    (body2 && body2.sprite && body2.sprite.key === 'yoyohead')){
        body1.sprite.collect_power();
        return false; 
    } else if((body2 != null && body2.sprite != null && 
               body2.sprite.key.indexOf('power') > -1) && 
              (body1 && body1.sprite && body1.sprite.key === 'yoyohead')){
        body2.sprite.collect_power();
        //this.prefabs["player"].terminateTween();
        return false; 
    }
    
    // power with vision / soldiers
    if((body2 != null && body2.sprite != null && 
               body2.sprite.key.indexOf('power') > -1) && 
              (body1 && body1.sprite && body1.sprite.key === 'vision') ||
             (body1 != null && body1.sprite != null && 
               body1.sprite.key.indexOf('power') > -1) && 
              (body2 && body2.sprite && body2.sprite.key === 'vision')){
        return false;
    }
    
    if((body2 != null && body2.sprite != null && 
               body2.sprite.key.indexOf('power') > -1) && 
              (body1 && body1.sprite &&  body1.sprite.key.indexOf('soldier') > -1) ||
             (body1 != null && body1.sprite != null && 
               body1.sprite.key.indexOf('power') > -1) && 
              (body2 && body2.sprite && body2.sprite.key.indexOf('soldier') > -1)){
        return false;
    }
    
    // yoyo with vision
    if((body1 != null && body1.sprite != null && body1.sprite.key === 'yoyohead')
      || (body2 != null && body2.sprite != null && body2.sprite.key === 'yoyohead')) {
        
        if((body1 && body1.sprite && body1.sprite.key === 'vision') || 
          (body2 && body2.sprite && body2.sprite.key === 'vision')){
           
            for(var k=1; k<5; k++){
                var soldierName = "soldier"+k;
                var soldierLoSBody = this.prefabs[soldierName].getLoSP2Body();
                var yoyoBody = this.prefabs["player"].yoyohead.body;
            
                var yoyoPos = new Phaser.Point(yoyoBody.x, yoyoBody.y)
                var collisionBody = this.game.physics.p2.hitTest(yoyoPos, [ soldierLoSBody ]);
                               
                if((collisionBody.length > 0) && (collisionBody[0] == body1.data || collisionBody[0] == body2.data)){
                    this.prefabs[soldierName].setCaughtPlayer();
                    this.prefabs["player"].setCaught();
                }
            }
            return false;
        }else if(body1 && body1.sprite && body1.sprite.key === 'player' || 
            body2 && body2.sprite && body2.sprite.key === 'player'){
            this.prefabs["player"].resetYoYo();
            return false;
        }else if(body1.sprite == null || body2.sprite == null){
           // console.log("body1 " + body1.sprite);
            //console.log("body2 " + body2.sprite);
           // this.prefabs["player"].retractYoYo();
            return false;
        }   
    }    
    
    // vision with soldiers
    if((body1 != null && body1.sprite != null && body1.sprite.key === 'vision')
      || (body2 != null && body2.sprite != null && body2.sprite.key === 'vision')) {
        
        if(body1 && body1.sprite && body1.sprite.key === 'vision'){
            if(body2 && body2.sprite && body2.sprite.key === 'soldier_walk' || body2 && body2.sprite && body2.sprite.key === 'vision'){
                return false;
            }
            // vision with walls
            for(var k=1; k<5; k++){
                var soldierName = "soldier"+k;
                if(this.prefabs[soldierName].getLoSP2Body() == body1){
                    this.prefabs[soldierName].reverseRotationDirection();
                    return false;
                }
            }
        }
        else if(body2 && body2.sprite && body2.sprite.key === 'vision'){
            if(body1 && body1.sprite && body1.sprite.key === 'soldier_walk' || 
               body1 && body1.sprite && body1.sprite.key === 'vision'){
                return false;
            }
            // vision with walls
            for(var k=1; k<5; k++){
                var soldierName = "soldier"+k;
                if(this.prefabs[soldierName].getLoSP2Body() == body2){
                    this.prefabs[soldierName].reverseRotationDirection();
                    return false;
                }
            }            
        }
    }
    // soldiers with walls
    if((body1 != null && body1.sprite != null && body1.sprite.key.indexOf('soldier') > -1)
      || (body2 != null && body2.sprite != null && body2.sprite.key.indexOf('soldier') > -1)) {   
        if((body1 && body1.sprite && body1.sprite.key === 'yoyohead') || 
           (body2 && body2.sprite     && body2.sprite.key === 'yoyohead')){
            return false;
        }
        
        if(body1 && body1.sprite && body1.sprite.key.indexOf('soldier') > -1){
            body1.sprite.switch_direction();
        }
        else if(body2 && body2.sprite && body2.sprite.key.indexOf('soldier') > -1){
            body2.sprite.switch_direction();
        }
        return false;
    }
};

AAARevenge.TiledState.prototype.render = function () {
    "use strict";
   // var timer = this.prefabs["player"].countdownTimer;
    //this.game.debug.text("FPS : " + this.game.time.fps, 2, 524, "#00ff00");
   //this.game.debug.text("Timer : " + timer, 2, 524, "#00ff00");
    
   // this.pauseBtn.text = "Time Left: " + timer + " s";
    
    //this.game.debug.text("Countdowntimer :" + timer, 2, 604, "00ff00");
   // this.game.debug.text("X : " + this.mousePointerX + " Y: " + this.mousePointerY, 2, 624, "#00ff00");
    
    this.prefabs["player"].render();    
}

AAARevenge.TiledState.prototype.next_level = function () {
    "use strict";

    this.game.state.start("BootState", true, false, this.level_data.next_level, "TiledState");
};

AAARevenge.TiledState.prototype.game_over = function () {
    "use strict";
        
    this.game_over_panel = this.showGameOverModal();
    
    this.game.input.keyboard.stop();
    this.music.stop();
    this.sfxKingSleeping.stop();
};

AAARevenge.TiledState.prototype.restart_level = function () {
    "use strict";
    this.game.input.keyboard.start();
    this.game_over_panel = null;
    this.level_data.showCUF = false;
    this.game.state.restart(true, false, this.level_data);
    
    //this.music.resume();
};

AAARevenge.TiledState.prototype.getRandomInt = function(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
};

AAARevenge.TiledState.prototype.getInitPlayerPosition = function(){
    var tilePos = [[4, 0, 0], [8, 0, 0], [13, 0, 0], 
                   [17, 4, 8], [17, 8, 8], [17, 13, 8], 
                   [13, 17, 4], [8, 17, 4], [4, 17, 4], 
                   [0, 13, 12], [0, 8, 12], [0, 4, 12]];
    
    // get random index
    var index = this.getRandomInt(0, 11);
    
    return this.getWorldPosition(tilePos[index]);
};

AAARevenge.TiledState.prototype.getNextTilePosition = function(currentX, currentY){
   var tilePos = [[4, 0, 0], [8, 0, 0], [13, 0, 0], 
                   [17, 4, 8], [17, 8, 8], [17, 13, 8], 
                   [13, 17, 4], [8, 17, 4], [4, 17, 4], 
                   [0, 13, 12], [0, 8, 12], [0, 4, 12]];
    
    var i = 0;
    var foundIndex = -1;
    for(i=0; i<tilePos.length; i++){
        var pos = tilePos[i];
        
        if(pos[0] == currentX && pos[1] == currentY){
            foundIndex = i;
            break;
        }
    }
    
    var nextIndex = foundIndex + 1;
    if(foundIndex == tilePos.length - 1){
        nextIndex = 0;
    }
    
    return tilePos[nextIndex];
};

AAARevenge.TiledState.prototype.getNextTile = function(currentX, currentY){
    return this.getWorldPosition(this.getNextTilePosition(currentX, currentY));
};

AAARevenge.TiledState.prototype.getPrevTilePosition = function(currentX, currentY){
    var tilePos = [[4, 0, 0], [8, 0, 0], [13, 0, 0], 
                   [17, 4, 8], [17, 8, 8], [17, 13, 8], 
                   [13, 17, 4], [8, 17, 4], [4, 17, 4], 
                   [0, 13, 12], [0, 8, 12], [0, 4, 12]];
    
    var i = 0;
    var foundIndex = -1;
    for(i=0; i<tilePos.length; i++){
        var pos = tilePos[i];
        
        if(pos[0] == currentX && pos[1] == currentY){
            foundIndex = i;
            break;
        }
    }
    
    var prevIndex = foundIndex - 1;
    if(foundIndex == 0){
        prevIndex = tilePos.length - 1;
    }
    
    return tilePos[prevIndex];
    
};

AAARevenge.TiledState.prototype.getPrevTile = function(currentX, currentY){
    return this.getWorldPosition(this.getPrevTilePosition(currentX, currentY));
};

AAARevenge.TiledState.prototype.searchPosIndex = function(startPos, direction){
    var positions = [0, 4, 8, 13, 17];
    var index = positions.indexOf(startPos);
    
    if(direction > 0){
        if(index < positions.length - 1) index += 1;
    }else{
        if(index > 0) index -= 1;
    }
    
    //console.log("Pos " + index);
    return positions[index];
};

AAARevenge.TiledState.prototype.getASWDTile = function(currentX, currentY, xDir, yDir){
    var tilePos = [[4, 0, 0], [8, 0, 0], [13, 0, 0], 
                   [17, 4, 8], [17, 8, 8], [17, 13, 8], 
                   [13, 17, 4], [8, 17, 4], [4, 17, 4], 
                   [0, 13, 12], [0, 8, 12], [0, 4, 12]];
     
    var nextX = currentX;
    var nextY = currentY; 
    
    if(xDir != 0){
        nextX = this.searchPosIndex(currentX, xDir);
    }else{
        nextY = this.searchPosIndex(currentY, yDir);
    }
    
    var i = 0;
    var foundIndex = -1;
    
    for(i=0; i<tilePos.length; i++){
        var pos = tilePos[i];
        
        if(pos[0] == nextX && pos[1] == nextY){
            foundIndex = i;
            break;
        }
    }
    
   // console.log("Found = " + foundIndex);
    
    if(foundIndex == -1){
        // check the previous tile
        var prevTilePos = this.getPrevTilePosition(currentX, currentY);
        var nextTilePos = this.getNextTilePosition(currentX, currentY);
        
        if(yDir != 0) {
             if(prevTilePos[1] == nextY){
                 return this.getWorldPosition(prevTilePos);
            }else if(nextTilePos[1] == nextY){
                 return this.getWorldPosition(nextTilePos);
            } 
        }else if(xDir != 0){
             if(prevTilePos[0] == nextX){
                return this.getWorldPosition(prevTilePos);
            }else if(nextTilePos[0] == nextX){
                return this.getWorldPosition(nextTilePos);
            } 
        }
    }else{
         return this.getWorldPosition(tilePos[foundIndex]);
    }
     
    return this.getPrevTile(currentX, currentY); // should never come here
};

AAARevenge.TiledState.prototype.getWorldPosition = function(tilePos){
    var xPos = tilePos[0] * 32 + 16;
    var yPos = tilePos[1] * 32 + 16;
    
    var animFrame = tilePos[2];
    
    var worldPos = {x:xPos, y:yPos, tilePosX:tilePos[0], tilePosY:tilePos[1], frame: animFrame};
    
    return worldPos;
};

AAARevenge.TiledState.prototype.getPowerSpawnPosIndex = function(){
    var randomTileIndex = -1;
    while(true){
        var len = Object.keys(this.powerSpawnTiles).length;
        randomTileIndex = this.getRandomInt(0, len - 1); 
        if(!this.powerSpawnTiles[randomTileIndex].occupied){
            break;
        }
    }
 
    if(randomTileIndex != -1){ 
        this.powerSpawnTiles[randomTileIndex].occupied = true;
        return randomTileIndex;
    }   
};

AAARevenge.TiledState.prototype.spawnPower = function (tileIndex, type) {
    "use strict";
    
    this.sfxPowerTimeout.play();
    
    var power, name, position, properties;
    
    // get the first dead power from the pool
    var posX = this.powerSpawnTiles[tileIndex].tileX * 32 + 16;
    var posY = this.powerSpawnTiles[tileIndex].tileY * 32 + 16;
    
    var fadeAwayTime = this.currentGameConstant.power_fade_away_time;
    name = type;
    var frameName = type + ".png";
    position = new Phaser.Point(posX, posY);
    properties = {"texture": type, "group": "power", "tile_index": tileIndex, "fade_away_time": fadeAwayTime};
        
    if(type === "power_life"){
        power = AAARevenge.create_prefab_from_pool(this.groups.power, AAARevenge.PowerLife.prototype.constructor, this, name, position, properties);  
    }else if(type === "power_score"){
        power = AAARevenge.create_prefab_from_pool(this.groups.power, AAARevenge.PowerScore.prototype.constructor, this, name, position, properties);    
    }else if(type === "power_freeze"){
        power = AAARevenge.create_prefab_from_pool(this.groups.power, AAARevenge.PowerFreeze.prototype.constructor, this, name, position, properties);    
    }
        
    this.currentPowers.push(tileIndex);    
};
