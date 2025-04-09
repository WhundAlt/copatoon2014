<div id="home">
  <div id="twitter-emotions">
          <div class="emotion colere"></div>
          <div class="emotion joie"></div>
          <div class="emotion degout"></div>
          <div class="emotion peur"></div>
          <div class="emotion amour"></div>
          <div class="emotion surprise"></div>
          <div class="emotion tristesse"></div>
          <div class="emotion folie"></div>
          <div class="title">Les émotions les plus tweetées</div>
          <div id="over-colere" class="tooltip">Colère</div>
          <div id="over-joie" class="tooltip">Joie</div>
          <div id="over-degout" class="tooltip">Dégoût</div>
          <div id="over-peur" class="tooltip">Peur</div>
          <div id="over-amour" class="tooltip">Amour</div>
          <div id="over-surprise" class="tooltip">Surprise</div>
          <div id="over-tristesse" class="tooltip">Tristesse</div>
          <div id="over-folie" class="tooltip">Folie</div>
      </div>
  <div id="ib-main-wrapper" class="ib-main-wrapper">
      <div class="ib-main">
            
                                  <a class="ib-content item item-1 count-1" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-21 count-2" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-7 count-3" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-2 count-4" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-20 count-5" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-10 count-6" href="javascript:void(0);"></a>
             
                                  <div class="ib-content item logo count-7 centre">
               <a href="javascript:void(0);" class="icon icon-1" onclick="showMenu(1)"><img src="img/menu-temoignages.png" alt="Témoignages"/></a>
               <a href="javascript:void(0);" class="icon icon-2" onclick="showMenu(2)"><img src="img/menu-emotions.png" alt="Émotions"/></a>
               <a href="javascript:void(0);" class="icon icon-3" onclick="showMenu(3)"><img src="img/menu-lieux.png" alt="Lieux"/></a>
               <a href="javascript:void(0);" class="icon icon-4" onclick="showMenu(4)"><img src="img/menu-pays.png" alt="Pays"/></a>
               <a href="javascript:void(0);" class="reset hide" onclick="resetFilters()"><img src="img/reset.png" alt="Annuler" class="reset-img"/></a>
            </div>
            <div class="menu-item menu-1 item menu-hide"><div class="menu-content"><a class="link-temoignages" href="javascript:void(0);" onclick="goToPage('temoignages');">Découvrez les gens <br/>dans tous leurs états.</a></div><a href="javascript:void(0);" class="icon icon-1" onclick="showMenu(1)"><img src="img/menu-temoignages.png" alt="Témoignages"/></a></div>
            <div class="menu-item menu-2 item menu-hide"><div class="menu-content"><ul></ul></div><a href="javascript:void(0);" class="icon icon-2" onclick="showMenu(2)"><img src="img/menu-emotions.png" alt="Émotions"/></a></div>
            <div class="menu-item menu-3 item menu-hide"><div class="menu-content"><ul></ul></div><a href="javascript:void(0);" class="icon icon-3" onclick="showMenu(3)"><img src="img/menu-lieux.png" alt="Lieux"/></a></div>
            <div class="menu-item menu-4 item menu-hide"><div class="menu-content"><ul class="col-1"></ul><ul class="col-2"></ul></div><a href="javascript:void(0);" class="icon icon-4" onclick="showMenu(4)"><img src="img/menu-pays.png" alt="Pays"/></a></div>
             
                                  <a class="ib-content item item-3 count-8 move-left" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-12 count-9" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-5 count-10" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-15 count-11" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-4 count-12" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-14 count-13" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-8 count-14" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-6 count-15" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-17 count-16" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-9 count-17" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-16 count-18" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-11 count-19" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-19 count-20" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-18 count-21" href="javascript:void(0);"></a>
             
                                  <a class="ib-content item item-13 count-22" href="javascript:void(0);"></a>
             
                    <a class="ib-content item item-22 count-22 no-click" href="javascript:void(0);"></a>
          <a class="ib-content item item-23 count-23 no-click" href="javascript:void(0);"></a>
      </div><!-- ib-main -->
  </div><!-- ib-main-wrapper -->
  
</div>

<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="js/tympanus.boxes.js"></script>
<script>
$(document).ready(function(){
  $.onf_nfb.stats.log('Mosaique', '_begin', 1000);
  initHome();
  
  $(window).resize(function(){resizeImages(5)});

  $('.custom-link').each(function(){
    $(this).removeClass('no-opacity');
  });
      $('#twitter-emotions .colere').trackStar( {displayID: 'over-colere', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .joie').trackStar( {displayID: 'over-joie', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .degout').trackStar( {displayID: 'over-degout', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .peur').trackStar( {displayID: 'over-peur', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .amour').trackStar( {displayID: 'over-amour', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .surprise').trackStar( {displayID: 'over-surprise', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .tristesse').trackStar( {displayID: 'over-tristesse', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .folie').trackStar( {displayID: 'over-folie', color: 'black', yOffset: 30, xOffset: 10} );
    
  setTimeout(function() {
    if (!navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
  		$(".ib-main").after('<div id="menu-over-1" class="tooltip">Témoignages</div><div id="menu-over-2" class="tooltip">Émotions</div><div id="menu-over-3" class="tooltip">Lieux</div><div id="menu-over-4" class="tooltip">Pays</div>');
  	  $('.icon-1 img').trackStar( {displayID: 'menu-over-1', color: 'white'} );
      $('.icon-2 img').trackStar( {displayID: 'menu-over-2', color: 'white'} );
      $('.icon-3 img').trackStar( {displayID: 'menu-over-3', color: 'white'} );
      $('.icon-4 img').trackStar( {displayID: 'menu-over-4', color: 'white'} );
  	}
  }, 125*25);

  if(navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
      $(".menu-item a").click(function(){
          console.log("menu-click");
      });
  }
});

</script>

</div>