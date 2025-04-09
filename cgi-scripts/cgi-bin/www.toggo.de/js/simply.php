dyntag.tags = [];
var activateImageIconHovertext=function(){var els=$('.teaser.singleImage');els.each(function(){var el=$(this);el.hover(function(){var rand=Math.round(Math.random(),0);if(rand){el.addClass('goRight');}else{el.addClass('goLeft');}},function(){el.removeClass('goRight');el.removeClass('goLeft');});el.find('a').not('[data-nolink=true]').on('click',function(ev){debug("Click singleImage",ev);ev.preventDefault();trackTeaserAction('imageIconHovertext','linkClick',{'teaser':el,'link':$(this)});window.location=$(this).attr("href");});});}
var activateWiggleTeaser=function(){$('.holder.rubric').each(function(){var items=$('.wiggleteaser');if(items.length>0){var startShake=function(){items.addClass('anim-shakeleftright');setTimeout(function(){items.removeClass('anim-shakeleftright');setTimeout(startShake,3000);},0.2*3*1000);}
setTimeout(startShake,1000);}});}
activateImageIconHovertext();activateWiggleTeaser();$(function(){var iconSrc='';if(iconSrc!=''){$("<style type='text/css'>\
      .frontend .rubricbg107432 .content h2::before { \
      background-image: url('"+iconSrc+"');\
      background-position: 0 0;\
      background-repeat: no-repeat;\
    </style>").appendTo("head");}});var activateImageAdTeaser=function(){var els=$('.teaser.image-ad');els.each(function(){var el=$(this);var tid=el.parent().data().teaserid;el.find('a').not('[data-nolink=true]').on('click',function(){trackTeaserAction('imageAdTeaser','linkClick',{'teaser':el,'link':$(this)});});});}
activateImageAdTeaser();var adSlider=function(){debug('AdSlider Init');var running=false;var autoSlideTo=false;var container=$('.holder.holder-ad');var anzAds=container.find('.for_ads > .tile_wrapper').size();var adHeight=0;var getAdHeight=function(){return container.find('.for_ads > .tile_wrapper:nth-child(1)').outerHeight(true);}
var sendView=function(){var curTiles=container.find('.for_ads > .tile_wrapper');var el1=curTiles.first().find('.teaser_wrapper .teaser');var el2=curTiles.first().next().find('.teaser_wrapper .teaser');trackTeaserAction('imageAdTeaserView','view',{'elements':[el1[0],el2[0]]});}
var initialViewsSend=false;var resizeevent=function(){container.find('.tile_wrapper').css('width','');if(window.innerWidth<=480){adHeight=getAdHeight();container.find('.tiles_wrapper.for_ads').css('height',(adHeight*2)+"px");startAutoTo();if(!initialViewsSend){initialViewsSend=true;sendView();}}else{var tiles=container.find('.tiles_wrapper.tiles_wrapper.for_ads .tile_wrapper').detach();tiles.sort(function(a,b){return $(a).attr('data-pos')-$(b).attr('data-pos');});tiles.css('top',0);var holder=container.find('.tiles_wrapper.tiles_wrapper.for_ads');holder.css('height','auto');holder.append(tiles);}}
var upClick=function(){if(!running){running=true;adHeight=getAdHeight();var count=1;var newTopPos=container.find('.for_ads .tile_wrapper:nth-child(1)').css('top').replace('px','')-adHeight;container.find('.for_ads .tile_wrapper').animate({top:newTopPos+"px"},1000/150*adHeight,"linear",function(){if(count==1)
{var singleAd=container.find('.for_ads .tile_wrapper:nth-child(1)').detach();singleAd.appendTo(container.find('.for_ads'));sendView();count++;}
container.find('.for_ads .tile_wrapper').css("top","0px");running=false;startAutoTo();});}}
var downClick=function(){if(!running){var count=1;running=true;adHeight=getAdHeight();var singleAd=container.find('.for_ads .tile_wrapper:nth-child('+anzAds+')').detach();singleAd.prependTo(container.find('.for_ads'));container.find('.for_ads .tile_wrapper').css('top',adHeight*-1);container.find('.for_ads .tile_wrapper').animate({top:0},1000/150*adHeight,"linear",function(){if(count==1)
{sendView();count++;}
running=false;startAutoTo();});}}
var startAutoTo=function(){clearTimeout(autoSlideTo);autoSlideTo=setTimeout(function(){if(window.innerWidth<=480){upClick();}},2000);}
var bindEvents=function(){$(window).resize(function(){resizeevent();});container.find('img').on('load',function(){resizeevent();});resizeevent();container.find('.scrollUpButton').click(function(){downClick();});container.find('.scrollDownButton').click(function(){upClick();});}
var init=function(){var tiles=container.find('.for_ads .tile_wrapper');tiles.css("top","0px");tiles.each(function(index,value){$(value).attr('data-pos',index);});if(anzAds>2)
{adHeight=getAdHeight();bindEvents();}else{container.find('.scrollDownButton').remove();container.find('.scrollUpButton').remove();container.addClass('noSlider');}}
init();}
adSlider();
(function(){var active=false;var $doc=$(document);var $window=$(window);var el=$('.spriteAlvin');var curFrame=0;var frameWidth=340;var then2=Date.now();var width=window.innerWidth;var leftFrame=0;var run=function(){if(!active){width=window.innerWidth;active=true;leftFrame=-30;jumpIn();}}
var jumpIn=function(){if(active){var destination=$('.subFooter').offset().left+200;if(Modernizr.csstransitions&&Modernizr.csstransforms){el[0].style.transition="transform 1s ease-out";el[0].style.transform="translateX("+destination+"px)";}else{el.animate({left:destination},{duration:1000,easing:'easeOutQuart'});}
setTimeout(jump,1100);}}
var jump=function(){if(active){var interval=1000/15;var now=Date.now();var delta=now-then2;if(delta>interval){then2=now-(delta%interval);curFrame++;el.css('background-position',(curFrame*frameWidth*-1)+'px 0');if(curFrame>=34){el.css('background-position','-11560px 0');return;}}
window.requestAnimationFrame(jump);}}
var destroy=function(){active=false;curFrame=0;el.stop();el.css({'background-position':'0 0','left':'-345px'});}
var wh=function(){return $window.height();}
var st=function(){return $doc.scrollTop();}
var bh=function(){return $doc.height();}
var checkRun=function(){if('lg'.indexOf(elex.grid.currentName())>-1){if(wh()+st()>bh()-200){run();}else if(wh()+st()<bh()-500){destroy();}}else{destroy();}}
if(el.length>0){$(window).on('scroll',checkRun);$(window).on('resize',checkRun);checkRun();}})();