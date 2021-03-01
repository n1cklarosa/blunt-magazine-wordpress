(function($) {
"use strict";

$(document).ready(function(){

	//display the social icons in social menu
  social_menu();

  //search menu open
  search_popup();

  //higlighted post fix
  $('#article-list .row.al').children(':eq(1)').after('<div class="cf"></div>');

  //sidebar side definition
  $('#content .row:first-of-type div').first().addClass("element-left").next().addClass("element-right");

  //mobile menu
  mobile_menu();

  //split archive title
  archive_title();    

})
/*
-----------------------------------------
FUNCTIONS
-----------------------------------------
*/

function social_menu(){
  var vmi = '';
  
  $("#social-menu li a").on().each(function(){
    vmi = $(this).text();
    if(  vmi === "500px" || vmi === "adn" || vmi === "amazon" || vmi === "android" || vmi === "angellist" || vmi === "apple" || vmi === "bandcamp" || vmi === "behance" || vmi === "bitbucket" || vmi === "btc" || vmi === "black-tie" || vmi === "bluetooth" || vmi === "buysellads" || vmi === "cc-amex" || vmi === "cc-diners-club" || vmi === "cc-discover" || vmi === "cc-jcb" || vmi === "cc-mastercard" || vmi === "cc-paypal" || vmi === "cc-stripe" || vmi === "cc-visa" || vmi === "chrome" || vmi === "codepen" || vmi === "codiepie" || vmi === "connectdevelop" || vmi === "contao" || vmi === "css3" || vmi === "dashcube" || vmi === "delicious" || vmi === "deviantart" || vmi === "digg" || vmi === "dribbble" || vmi === "dropbox" || vmi === "drupal" || vmi === "edge" || vmi === "eercast" || vmi === "empire" || vmi === "envira" || vmi === "etsy" || vmi === "expeditedssl" || vmi === "font-awesome" || vmi === "facebook" || vmi === "firefox" || vmi === "first-order" || vmi === "flickr" || vmi === "font-awesome" || vmi === "fonticons" || vmi === "fort-awesome" || vmi === "forumbee" || vmi === "foursquare" || vmi === "free-code-camp" || vmi === "get-pocket" || vmi === "gg" || vmi === "git" || vmi === "github" || vmi === "gitlab" || vmi === "glide" || vmi === "google" || vmi === "google-plus" || vmi === "google-wallet" || vmi === "gratipay" || vmi === "grav" || vmi === "hacker-news" || vmi === "houzz" || vmi === "html5" || vmi === "imdb" || vmi === "instagram" || vmi === "internet-explorer" || vmi === "ioxhost" || vmi === "joomla" || vmi === "jsfiddle" || vmi === "lastfm" || vmi === "leanpub" || vmi === "linkedin" || vmi === "linode" || vmi === "linux" || vmi === "maxcdn" || vmi === "meanpath" || vmi === "medium" || vmi === "meetup" || vmi === "mixcloud" || vmi === "modx" || vmi === "odnoklassniki" || vmi === "opencart" || vmi === "openid" || vmi === "opera" || vmi === "optin-monster" || vmi === "pagelines" || vmi === "paypal" || vmi === "pied-piper" || vmi === "pinterest" || vmi === "product-hunt" || vmi === "qq" || vmi === "quora" || vmi === "ravelry" || vmi === "rebel" || vmi === "reddit" || vmi === "renren" || vmi === "rebel" || vmi === "safari" || vmi === "scribd" || vmi === "sellsy" || vmi === "shirtsinbulk" || vmi === "simplybuilt" || vmi === "skyatlas" || vmi === "skype" || vmi === "slack" || vmi === "slideshare" || vmi === "snapchat" || vmi === "soundcloud" || vmi === "spotify" || vmi === "stack-exchange" || vmi === "stack-overflow" || vmi === "steam" || vmi === "steam-square" || vmi === "stumbleupon" || vmi === "superpowers" || vmi === "telegram" || vmi === "tencent-weibo" || vmi === "themeisle" || vmi === "trello" || vmi === "tripadvisor " || vmi === "tumblr" || vmi === "twitch" || vmi === "twitter" || vmi === "usb" || vmi === "viacoin" || vmi === "viadeo" || vmi === "vimeo" || vmi === "vine" || vmi === "vk" || vmi === "wechat " || vmi === "weibo" || vmi === "whatsapp" || vmi === "wikipedia-w" || vmi === "windows" || vmi === "wordpress" || vmi === "wpbeginner" || vmi === "wpexplorer" || vmi === "wpforms" || vmi === "xing" || vmi === "yahoo" || vmi === "yelp" || vmi === "yoast" || vmi === "youtube" ){
      $(this).empty();
      $(this).append('<i class="fa fa-'+vmi+'"></i>');
    }else{
      $(this).parent().remove();
    }
  })
  $("#footer-social-menu li a").on().each(function(){
    vmi = $(this).text();
    if(  vmi === "500px" || vmi === "adn" || vmi === "amazon" || vmi === "android" || vmi === "angellist" || vmi === "apple" || vmi === "bandcamp" || vmi === "behance" || vmi === "bitbucket" || vmi === "btc" || vmi === "black-tie" || vmi === "bluetooth" || vmi === "buysellads" || vmi === "cc-amex" || vmi === "cc-diners-club" || vmi === "cc-discover" || vmi === "cc-jcb" || vmi === "cc-mastercard" || vmi === "cc-paypal" || vmi === "cc-stripe" || vmi === "cc-visa" || vmi === "chrome" || vmi === "codepen" || vmi === "codiepie" || vmi === "connectdevelop" || vmi === "contao" || vmi === "css3" || vmi === "dashcube" || vmi === "delicious" || vmi === "deviantart" || vmi === "digg" || vmi === "dribbble" || vmi === "dropbox" || vmi === "drupal" || vmi === "edge" || vmi === "eercast" || vmi === "empire" || vmi === "envira" || vmi === "etsy" || vmi === "expeditedssl" || vmi === "font-awesome" || vmi === "facebook" || vmi === "firefox" || vmi === "first-order" || vmi === "flickr" || vmi === "font-awesome" || vmi === "fonticons" || vmi === "fort-awesome" || vmi === "forumbee" || vmi === "foursquare" || vmi === "free-code-camp" || vmi === "get-pocket" || vmi === "gg" || vmi === "git" || vmi === "github" || vmi === "gitlab" || vmi === "glide" || vmi === "google" || vmi === "google-plus" || vmi === "google-wallet" || vmi === "gratipay" || vmi === "grav" || vmi === "hacker-news" || vmi === "houzz" || vmi === "html5" || vmi === "imdb" || vmi === "instagram" || vmi === "internet-explorer" || vmi === "ioxhost" || vmi === "joomla" || vmi === "jsfiddle" || vmi === "lastfm" || vmi === "leanpub" || vmi === "linkedin" || vmi === "linode" || vmi === "linux" || vmi === "maxcdn" || vmi === "meanpath" || vmi === "medium" || vmi === "meetup" || vmi === "mixcloud" || vmi === "modx" || vmi === "odnoklassniki" || vmi === "opencart" || vmi === "openid" || vmi === "opera" || vmi === "optin-monster" || vmi === "pagelines" || vmi === "paypal" || vmi === "pied-piper" || vmi === "pinterest" || vmi === "product-hunt" || vmi === "qq" || vmi === "quora" || vmi === "ravelry" || vmi === "rebel" || vmi === "reddit" || vmi === "renren" || vmi === "rebel" || vmi === "safari" || vmi === "scribd" || vmi === "sellsy" || vmi === "shirtsinbulk" || vmi === "simplybuilt" || vmi === "skyatlas" || vmi === "skype" || vmi === "slack" || vmi === "slideshare" || vmi === "snapchat" || vmi === "soundcloud" || vmi === "spotify" || vmi === "stack-exchange" || vmi === "stack-overflow" || vmi === "steam" || vmi === "steam-square" || vmi === "stumbleupon" || vmi === "superpowers" || vmi === "telegram" || vmi === "tencent-weibo" || vmi === "themeisle" || vmi === "trello" || vmi === "tripadvisor " || vmi === "tumblr" || vmi === "twitch" || vmi === "twitter" || vmi === "usb" || vmi === "viacoin" || vmi === "viadeo" || vmi === "vimeo" || vmi === "vine" || vmi === "vk" || vmi === "wechat " || vmi === "weibo" || vmi === "whatsapp" || vmi === "wikipedia-w" || vmi === "windows" || vmi === "wordpress" || vmi === "wpbeginner" || vmi === "wpexplorer" || vmi === "wpforms" || vmi === "xing" || vmi === "yahoo" || vmi === "yelp" || vmi === "yoast" || vmi === "youtube" ){
      $(this).prepend('<i class="fa fa-'+vmi+'"></i>');
    }else{
      $(this).parent().remove();
    }
  })

  if ( $('ul.menu').children().length === 0 ){
    $(this).remove();
  }
}//end

function search_popup(){
	$("#menu-search").click(function(){
		$("#search_popup").fadeIn(200);
	});
	$("#search_popup .close").click(function(){
		$("#search_popup").fadeOut(200);
	})
}//end

function archive_title(){
  var data =$('#article-list .page-title').text();
  var arr = data.split(':');
  if(arr[1]){
    $("#article-list .page-title").html("<span class='meta'>"+arr[0] + "</span><br>" + arr[1] ); 
  }else{
    $("#article-list .page-title").html("<span class='padding-vertical block'>"+arr[0] + "</span>"); 
  }
}//end

function mobile_menu(){
  $('#menu-container .meanmenu').meanmenu({
    meanMenuContainer: "#menu-container",
    meanMenuClose: "<i class='fa fa-times' aria-hidden='true'></i>",
    meanMenuCloseSize: "18px",
    meanMenuOpen: "<i class='fa fa-bars' aria-hidden='true'></i>",
    meanRevealPosition: "left",
    meanRevealPositionDistance: "0",
    meanRevealColour: "transparent",
    meanScreenWidth: "768", //480
    meanNavPush: "0px",
    meanShowChildren: true,
    meanExpandableChildren: true,
    meanExpand: "+",
    meanContract: "-",
    meanRemoveAttrs: false,
    onePage: false,
    removeElements: "",
    meanDisplay: "block"
  });
}//end

})(jQuery);//end of document ready