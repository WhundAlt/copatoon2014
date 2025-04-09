<?php
$parent = dirname(__DIR__) . '/httpsmynk.ninjakiwi.com';
require_once $parent . '/sleekdb/sleekDB.php';

$dataDir = $parent . '/database/';

$userDB = \SleekDB\SleekDB::store('userdata', $dataDir);
$userDB->deleteAllCache();

$result = $userDB->keepConditions()->where('mynk_user', '=', 'flashpoint');

$userData = $result->fetch()[0];

if(isset($_POST) && isset($_POST['btn_submit'])) {
	if(!$userData) {
		die('you can not buy coins without a user! Try to load the game first');
	}
	$currentPremium = $userData['premium'];
	
	// no cheating, we check the buy amount
	$buyAmount = 0;
	switch($_POST['btn_submit']){
		case 50:
			$buyAmount = 50;
			break;
		case 105:
			$buyAmount = 105;
			break;
		case 220:
			$buyAmount = 220;
			break;
		case 575:
			$buyAmount = 575;
			break;
		case 1200:
			$buyAmount = 1200;
			break;
		case 2500:
			$buyAmount = 2500;
			break;
		default:
			$buyAmount = 0;
			break;
	}
	
	$currentPremium['koins'] += $buyAmount;
	$result->update(['premium' => $currentPremium]);
	
	$userData = $result->fetch()[0];
	
	$message = "You bought $buyAmount coins!";
}



$awesome = 0;
$coins = 0;

if($userData) {
	$awesome = $userData['premium']['points'];
	$coins = $userData['premium']['koins'];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Get COINS for BSM2</title>
<style>
body{color:#ababab;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-size:.875rem;line-height:1.5;background-color:rgba(0,0,0,.7);background-size:auto;background-position:0 0;background-image:none;background-repeat:repeat}.wrapper{width:100%;min-width:41.875rem;max-width:53.125rem;margin-left:auto;margin-right:auto}fixed-layout{display:-webkit-flex;display:flex;-webkit-flex-direction:column;flex-direction:column;-webkit-justify-content:space-between;justify-content:space-between;height:100%;overflow-y:hidden;position:relative;background:0 0;background-size:100% 100%;width:100%}x-header{display:block;color:#fff}fixed-layout fixed-layout-content{display:-webkit-flex;display:flex;-webkit-flex-direction:column;flex-direction:column;-webkit-flex:1 0 12rem;flex:1 0 12rem;overflow:hidden;position:relative;background:0 0}div[ui-view],div[ui-view]>*{display:-webkit-flex;display:flex;-webkit-flex:inherit;flex:inherit;min-height:0}x-desktop-pricepoint-state{display:-webkit-flex;display:flex;-webkit-flex:inherit;flex:inherit;min-height:0}.content:not(:empty){display:-webkit-flex;display:flex;-webkit-flex-direction:column;flex-direction:column;-webkit-flex:1;flex:1}fixed-layout fixed-layout-scrollable{display:-webkit-flex;display:flex;-webkit-flex-direction:column;flex-direction:column;-webkit-flex:1;flex:1;overflow:auto;overflow-x:hidden;-webkit-overflow-scrolling:touch;min-height:100%}.content:not(:empty) section{min-width:46.875rem}.page-pricepoint>section{max-width:53.125rem;margin-left:auto;margin-right:auto;padding-left:1.25rem;padding-right:1.25rem}x-page-header{display:-webkit-flex;display:flex;-webkit-justify-content:space-between;justify-content:space-between;-webkit-align-items:center;align-items:center;padding:.75rem 0;border-bottom:1px solid #3b3b3b;min-height:3rem;margin-bottom:1.5rem;color:#fff}x-page-header .page-header-title{-webkit-flex-grow:1;flex-grow:1;text-align:left}.page-pricepoint>section .ui-content{display:block;width:100%}x-pricepoint-list{display:block;text-align:center}x-pricepoint-list .pricepoint-list.pricepoint-list__3n{max-width:36.25rem}x-pricepoint-list .pricepoint-list.pricepoint-list__3n x-pricepoint-grid-option{width:31.03448%;margin-right:3.44828%}x-pricepoint-list .pricepoint-list x-pricepoint-grid-option{float:left;margin:0}x-pricepoint-grid-option{display:inline-block;width:100%}.pricepoint-option.pricepoint-option__grid-layout{border:1px solid #7a7a7a;border-radius:4px;background:rgba(100,100,100,.4);display:inline-block;position:relative;width:9rem;margin:0 1.25rem 1.5rem 0;vertical-align:top;text-align:center;background-color:rgba(100,100,100,.4);width:100%}.pricepoint-option{box-shadow:none}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-label{min-height:.875rem;visibility:hidden}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-label+.pricepoint-option-wrapper{padding-top:.25rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-wrapper{padding-top:.75rem;padding-bottom:1.125rem;padding-left:.5rem;padding-right:.5rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-image__visible{visibility:visible;min-height:3.75rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-image{min-height:0;position:relative;overflow:hidden;margin-bottom:.375rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-quantity{color:#fff;margin-bottom:.875rem}x-formatted-currency{display:inline-block}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-quantity-amount{font-weight:400;font-size:1.5rem;line-height:1.875rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-quantity-space{display:none}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-quantity-currency{font-size:.8125rem;word-break:break-word;line-height:.875rem;display:block;color:#fff}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-description{font-size:.75rem;line-height:1rem;margin-bottom:.75rem;color:#ffcb4b}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-offer-info{margin-bottom:.75rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-offer-info{font-size:.8125rem;line-height:.875rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-offer-info{color:#ffcb4b}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-price-current{white-space:nowrap}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-price-current-amount,.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-price-current-currency{font-size:1rem;color:#fff}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-old-price,.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-old-price-amount{display:block;text-decoration:line-through;color:#565656;text-shadow:1px 1px 1px transparent;font-size:.875rem;margin-top:.25rem;margin-bottom:.25rem;margin-left:.75rem;margin-right:.75rem}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-button{display:-webkit-flex;display:flex;-webkit-justify-content:center;justify-content:center}.pricepoint-option.pricepoint-option__grid-layout .pricepoint-option-button button{max-width:100%;min-width:5rem}.pricepoint-option.pricepoint-option__grid-layout{border:1px solid #7a7a7a;border-radius:4px;background:rgba(100,100,100,.4);display:inline-block;position:relative;width:9rem;margin:0 1.25rem 1.5rem 0;vertical-align:top;text-align:center;background-color:rgba(100,100,100,.4);width:100%}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled .pricepoint-option-label{height:2.125rem;font-size:.875rem;position:relative}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled .pricepoint-option-label{visibility:visible}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled .pricepoint-option-label-wrapper{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;position:absolute;left:0;right:0;bottom:0;height:1.5625rem;line-height:1.5625rem;overflow:hidden;text-align:center;margin-left:-4px;margin-right:-4px;padding-left:4px;padding-right:4px;z-index:1}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled__custom .pricepoint-option-label-wrapper,.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled__recommended .pricepoint-option-label-wrapper{background-color:#87b0ce;background-image:linear-gradient(to bottom,#87b0ce,#75a4c7);color:#fff}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled .pricepoint-option-label-wrapper{border-radius:2px 2px 0 0}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled .pricepoint-option-label-desc{display:inline;vertical-align:middle;line-height:normal}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled__best-deal{border:1px solid #809efc;box-shadow:none}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled__custom,.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled__recommended{border:1px solid #75a4c7;box-shadow:none}.pricepoint-option.pricepoint-option__grid-layout.pricepoint-option__labeled__best-deal .pricepoint-option-label-wrapper{background-color:#99b1fd;background-image:linear-gradient(to bottom,#99b1fd,#809efc);color:#fff}
</style>
</head>
<body>

<div class="wrapper wrapper__layout-fixed">
<fixed-layout-scrollable class="content page-pricepoint">
   <section class="">
      <x-page-header>
         
         <h3 class="page-header-title"><span>Virtual Currency</span><span class="page-header-title-extended"></span></h3>
         <div class="page-header-panel">
			<?php
			if(!$userData) {
				echo 'No userdata found. Try to load the game first!';
			} else {
				echo "<page-header-navigation-panel>Coins: $coins | Koins: $awesome </page-header-navigation-panel>";
			}
			?>
         </div>
      </x-page-header>
      <div class="ui-content ui-content__pricepoint-list">
	  <?php if($message) {
		echo "<h1 style=\"color:yellow\">$message</h1>";
	  }
	  ?>
		<form action="getcoins.php" method="post">
         <x-pricepoint-list>
            <div class="pricepoint-list pricepoint-list__grid-layout pricepoint-list__3n">
               <x-pricepoint-grid-option>
                  <div class="pricepoint-option pricepoint-option__grid-layout">
                     <div class="pricepoint-option-label" style="min-height: 34px;">
                        
                     </div>
                     <div class="pricepoint-option-wrapper">
                        <div class="pricepoint-option-image pricepoint-option-image__visible" style="min-height: 60px;"><img src="//assets.nkstatic.com/556456f4bc13ac881ff925b538409160.png"></div>
                        <x-formatted-currency class="pricepoint-option-quantity" style="min-height: 44px;">
                           <span class="pricepoint-option-quantity-amount">50</span><span class="pricepoint-option-quantity-space"> </span><span class="pricepoint-option-quantity-currency" title="NK Coins">NK Coins</span>
                        </x-formatted-currency>
                        <div class="pricepoint-option-description" style="min-height: 32px;">
                           <span>50 NK Coins!</span>
                        </div>
                        <div class="pricepoint-option-price" style="min-height: 24px;">
                           <x-formatted-discount>
                              <x-formatted-currency class="pricepoint-option-price-current">
                                 <span class="pricepoint-option-price-current-amount"><span dir="ltr"><b>FREE</b></span></span>
                              </x-formatted-currency>
                           </x-formatted-discount>
                        </div>
                        <div class="pricepoint-option-old-price" style="min-height: 0px;">
                           
                        </div>
                        <div class="pricepoint-option-button">
                           <button class="btn btn-secondary btn-flat btn-xs" name="btn_submit" value="50">
                              <span class="btn-text">Buy Package</span>
                           </button>
                           
                        </div>
                     </div>
                  </div>
               </x-pricepoint-grid-option>
               <x-pricepoint-grid-option>
                  <div class="pricepoint-option pricepoint-option__grid-layout">
                     <div class="pricepoint-option-label" style="min-height: 34px;">
                        
                     </div>
                     <div class="pricepoint-option-wrapper">
                        <div class="pricepoint-option-image pricepoint-option-image__visible" style="min-height: 60px;"><img src="//assets.nkstatic.com/556456f4bc13ac881ff925b538409160.png"></div>
                        <x-formatted-currency class="pricepoint-option-quantity" style="min-height: 44px;">
                           <span class="pricepoint-option-quantity-amount">105</span><span class="pricepoint-option-quantity-space"> </span><span class="pricepoint-option-quantity-currency" title="NK Coins">NK Coins</span>
                        </x-formatted-currency>
                        <div class="pricepoint-option-description" style="min-height: 32px;">
                           <span>Get 100 NK Coins + 5 Bonus NK Coins!</span>
                        </div>
                        <div class="pricepoint-option-price" style="min-height: 24px;">
                           
                           <x-formatted-discount>
                              
                              <x-formatted-currency class="pricepoint-option-price-current">
                                 <span class="pricepoint-option-price-current-amount"><span dir="ltr"><b>FREE</b></span></span>
                              </x-formatted-currency>
                           </x-formatted-discount>
                        </div>
                        <div class="pricepoint-option-old-price" style="min-height: 0px;">
                           
                        </div>
                        <div class="pricepoint-option-button">
                           <button class="btn btn-secondary btn-flat btn-xs" name="btn_submit" value="105">
                              <span class="btn-text">Buy Package</span>
                           </button>
                           
                        </div>
                     </div>
                  </div>
               </x-pricepoint-grid-option>
               <x-pricepoint-grid-option>
                  <div class="pricepoint-option pricepoint-option__grid-layout pricepoint-option__labeled pricepoint-option__labeled__recommended">
                     <div class="pricepoint-option-label" style="min-height: 34px;">
                        
                        <div class="pricepoint-option-label-wrapper">
                           <div class="pricepoint-option-label-desc">Most Popular</div>
                        </div>
                     </div>
                     <div class="pricepoint-option-wrapper">
                        <div class="pricepoint-option-image pricepoint-option-image__visible" style="min-height: 60px;"><img src="//assets.nkstatic.com/2cfa874a0bc119146fb6d5a5a8f3165c.png"></div>
                        <x-formatted-currency class="pricepoint-option-quantity" style="min-height: 44px;">
                           <span class="pricepoint-option-quantity-amount">220</span><span class="pricepoint-option-quantity-space"> </span><span class="pricepoint-option-quantity-currency" title="NK Coins">NK Coins</span>
                        </x-formatted-currency>
                        <div class="pricepoint-option-description" style="min-height: 32px;">
                           <span>200 NK Coins + 20 Bonus NK Coins!</span>
                        </div>
                        <div class="pricepoint-option-price" style="min-height: 24px;">
                           
                           <x-formatted-discount>
                              
                              <x-formatted-currency class="pricepoint-option-price-current">
                                 <span class="pricepoint-option-price-current-amount"><span dir="ltr"><b>FREE</b></span></span>
                              </x-formatted-currency>
                           </x-formatted-discount>
                        </div>
                        <div class="pricepoint-option-old-price" style="min-height: 0px;">
                           
                        </div>
                        <div class="pricepoint-option-button">
                           <button class="btn btn-secondary btn-flat btn-xs" name="btn_submit" value="220">
                              <span class="btn-text">Buy Package</span>
                           </button>
                           
                        </div>
                     </div>
                  </div>
               </x-pricepoint-grid-option>
               <x-pricepoint-grid-option>
                  <div class="pricepoint-option pricepoint-option__grid-layout">
                     <div class="pricepoint-option-label" style="min-height: 34px;">
                        
                     </div>
                     <div class="pricepoint-option-wrapper">
                        <div class="pricepoint-option-image pricepoint-option-image__visible" style="min-height: 60px;"><img src="//assets.nkstatic.com/2cfa874a0bc119146fb6d5a5a8f3165c.png"></div>
                        <x-formatted-currency class="pricepoint-option-quantity" style="min-height: 44px;">
                           <span class="pricepoint-option-quantity-amount">575</span><span class="pricepoint-option-quantity-space"> </span><span class="pricepoint-option-quantity-currency" title="NK Coins">NK Coins</span>
                        </x-formatted-currency>
                        <div class="pricepoint-option-description" style="min-height: 32px;">
                           <span>500 NK Coins + 75 Bonus NK Coins!</span>
                        </div>
                        <div class="pricepoint-option-price" style="min-height: 24px;" name="btn_submit" value="500">
                           
                           <x-formatted-discount>
                              
                              <x-formatted-currency class="pricepoint-option-price-current">
                                 <span class="pricepoint-option-price-current-amount"><span dir="ltr"><b>FREE</b></span></span>
                              </x-formatted-currency>
                           </x-formatted-discount>
                        </div>
                        <div class="pricepoint-option-old-price" style="min-height: 0px;">
                           
                        </div>
                        <div class="pricepoint-option-button">
                           <button class="btn btn-secondary btn-flat btn-xs" name="btn_submit" value="575">
                              <span class="btn-text">Buy Package</span>
                           </button>
                           
                        </div>
                     </div>
                  </div>
               </x-pricepoint-grid-option>
               <x-pricepoint-grid-option>
                  <div class="pricepoint-option pricepoint-option__grid-layout">
                     <div class="pricepoint-option-label" style="min-height: 34px;">
                        
                     </div>
                     <div class="pricepoint-option-wrapper">
                        <div class="pricepoint-option-image pricepoint-option-image__visible" style="min-height: 60px;"><img src="//assets.nkstatic.com/2924b9b92df14294c6a31ff2ca5301c0.png"></div>
                        <x-formatted-currency class="pricepoint-option-quantity" style="min-height: 44px;">
                           <span class="pricepoint-option-quantity-amount">1200</span><span class="pricepoint-option-quantity-space"> </span><span class="pricepoint-option-quantity-currency" title="NK Coins">NK Coins</span>
                        </x-formatted-currency>
                        <div class="pricepoint-option-description" style="min-height: 32px;">
                           <span>1000 NK Coins + 200 Bonus NK Coins!</span>
                        </div>
                        <div class="pricepoint-option-price" style="min-height: 24px;">
                           
                           <x-formatted-discount>
                              
                              <x-formatted-currency class="pricepoint-option-price-current">
                                 <span class="pricepoint-option-price-current-amount"><span dir="ltr"><b>FREE</b></span></span>
                              </x-formatted-currency>
                           </x-formatted-discount>
                        </div>
                        <div class="pricepoint-option-old-price" style="min-height: 0px;">
                           
                        </div>
                        <div class="pricepoint-option-button">
                           <button class="btn btn-secondary btn-flat btn-xs" name="btn_submit" value="1200">
                              <span class="btn-text">Buy Package</span>
                           </button>
                           
                        </div>
                     </div>
                  </div>
               </x-pricepoint-grid-option>
               <x-pricepoint-grid-option>
                  <div class="pricepoint-option pricepoint-option__grid-layout pricepoint-option__labeled pricepoint-option__labeled__best-deal">
                     <div class="pricepoint-option-label" style="min-height: 34px;">
                        
                        <div class="pricepoint-option-label-wrapper">
                           <div class="pricepoint-option-label-desc">Best Value</div>
                        </div>
                     </div>
                     <div class="pricepoint-option-wrapper">
                        <div class="pricepoint-option-image pricepoint-option-image__visible" style="min-height: 60px;"><img src="//assets.nkstatic.com/2924b9b92df14294c6a31ff2ca5301c0.png"></div>
                        <x-formatted-currency class="pricepoint-option-quantity" style="min-height: 44px;">
                           <span class="pricepoint-option-quantity-amount">2500</span><span class="pricepoint-option-quantity-space"> </span><span class="pricepoint-option-quantity-currency" title="NK Coins">NK Coins</span>
                        </x-formatted-currency>
                        <div class="pricepoint-option-description" style="min-height: 32px;">
                           <span>2000 NK Coins + 500 Bonus NK Coins!</span>
                        </div>
                        <div class="pricepoint-option-price" style="min-height: 24px;">
                           
                           <x-formatted-discount>
                              
                              <x-formatted-currency class="pricepoint-option-price-current">
                                 <span class="pricepoint-option-price-current-amount"><span dir="ltr"><b>FREE</b></span></span>
                              </x-formatted-currency>
                           </x-formatted-discount>
                        </div>
                        <div class="pricepoint-option-old-price" style="min-height: 0px;">
                           
                        </div>
                        <div class="pricepoint-option-button">
                           <button class="btn btn-secondary btn-flat btn-xs" name="btn_submit" value="2500">
                              <span class="btn-text">Buy Package</span>
                           </button>
                           
                        </div>
                     </div>
                  </div>
               </x-pricepoint-grid-option>
            </div>
         </x-pricepoint-list>
		 </form>
      </div>
   </section>
</fixed-layout-scrollable>
</div>
   </body>
</html>

