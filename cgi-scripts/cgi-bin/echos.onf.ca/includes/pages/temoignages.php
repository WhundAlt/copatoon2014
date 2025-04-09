<div id="temoignages">
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
                    <div class="ib-content item count-1 back centre">
             <a href="javascript:void(0);" onclick="goToPage('mosaique', 'null')" class="reset" title="Accueil"><img src="img/reset.png" alt="Annuler"/></a>
          </div>
        
                        <a class="ib-content item item-17 count-2" href="#"></a>
                        <a class="ib-content item item-5 count-3" href="#"></a>
                        <a class="ib-content item item-1 count-4" href="#"></a>
                        <a class="ib-content item item-26 count-5" href="#"></a>
                        <a class="ib-content item item-31 count-6" href="#"></a>
                        <a class="ib-content item item-3 count-7" href="#"></a>
                        <a class="ib-content item item-24 count-8" href="#"></a>
                        <a class="ib-content item item-25 count-9" href="#"></a>
                        <a class="ib-content item item-46 count-10" href="#"></a>
                        <a class="ib-content item item-12 count-11" href="#"></a>
                        <a class="ib-content item item-42 count-12" href="#"></a>
                        <a class="ib-content item item-2 count-13" href="#"></a>
                        <a class="ib-content item item-21 count-14" href="#"></a>
                        <a class="ib-content item item-13 count-15" href="#"></a>
                        <a class="ib-content item item-35 count-16" href="#"></a>
                        <a class="ib-content item item-41 count-17" href="#"></a>
                        <a class="ib-content item item-19 count-18" href="#"></a>
                        <a class="ib-content item item-37 count-19" href="#"></a>
                        <a class="ib-content item item-44 count-20" href="#"></a>
                        <a class="ib-content item item-45 count-21" href="#"></a>
                        <a class="ib-content item item-15 count-22" href="#"></a>
                        <a class="ib-content item item-47 count-23" href="#"></a>
                        <a class="ib-content item item-8 count-24" href="#"></a>
                        <a class="ib-content item item-23 count-25" href="#"></a>
                        <a class="ib-content item item-40 count-26" href="#"></a>
                        <a class="ib-content item item-43 count-27" href="#"></a>
                        <a class="ib-content item item-20 count-28" href="#"></a>
                        <a class="ib-content item item-7 count-29" href="#"></a>
                        <a class="ib-content item item-36 count-30" href="#"></a>
                        <a class="ib-content item item-11 count-31" href="#"></a>
                        <a class="ib-content item item-29 count-32" href="#"></a>
                        <a class="ib-content item item-6 count-33" href="#"></a>
                        <a class="ib-content item item-33 count-34" href="#"></a>
                        <a class="ib-content item item-22 count-35" href="#"></a>
                        <a class="ib-content item item-30 count-36" href="#"></a>
                        <a class="ib-content item item-38 count-37" href="#"></a>
                        <a class="ib-content item item-9 count-38" href="#"></a>
                        <a class="ib-content item item-14 count-39" href="#"></a>
                        <a class="ib-content item item-34 count-40" href="#"></a>
                        <a class="ib-content item item-4 count-41" href="#"></a>
                        <a class="ib-content item item-16 count-42" href="#"></a>
                        <a class="ib-content item item-28 count-43" href="#"></a>
                        <a class="ib-content item item-18 count-44" href="#"></a>
                        <a class="ib-content item item-39 count-45" href="#"></a>
                        <a class="ib-content item item-27 count-46" href="#"></a>
                        <a class="ib-content item item-10 count-47" href="#"></a>
                        <a class="ib-content item item-32 count-48" href="#"></a>
                    
          <div class="ib-content item count-49 next centre">
            <div class="nav">
                              
                 <a href="javascript:void(0);" onclick="goToPage('temoignages', '1')" title="Page suivante"><img src="img/next.png" alt="Suivant"/></a>
                            <span>Page 1 de 15</span>
            </div>
          </div>
          
      </div><!-- ib-main -->
  </div><!-- ib-main-wrapper -->

</div>

<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="js/tympanus.boxes.js"></script>
<script>
$(document).ready(function(){
  $('.custom-link').each(function(){
    $(this).removeClass('no-opacity');
  });
  initTemoignages(undefined, 1, 47, null);
  $(window).resize(function(){resizeImagesPortrait(7)});
      $('#twitter-emotions .colere').trackStar( {displayID: 'over-colere', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .joie').trackStar( {displayID: 'over-joie', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .degout').trackStar( {displayID: 'over-degout', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .peur').trackStar( {displayID: 'over-peur', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .amour').trackStar( {displayID: 'over-amour', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .surprise').trackStar( {displayID: 'over-surprise', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .tristesse').trackStar( {displayID: 'over-tristesse', color: 'black', yOffset: 30, xOffset: 10} );
      $('#twitter-emotions .folie').trackStar( {displayID: 'over-folie', color: 'black', yOffset: 30, xOffset: 10} );
  });

</script>
</div>