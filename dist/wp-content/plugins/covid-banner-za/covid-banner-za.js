jQuery(document).ready(function ($) {

    $('<div id="covid-banner"><a href="https://sacoronavirus.co.za/" target="_blank" ><img src="https://d1p1qm1c1kel77.cloudfront.net/adminout/images/flagsmallza.png" alt="sa-flag" align="left"/>For all official information and updates regarding COVID-19, visit the South African Department of Health\'s website at www.SAcoronavirus.co.za</a></div>')
        .prependTo('body');

    var bodyPaddingLeft = $('body').css('padding-left')
    var bodyPaddingRight = $('body').css('padding-right')

    if (bodyPaddingLeft != "0px") {
        $('head').append('<style type="text/css" media="screen">#covid-banner{margin-left:-' + bodyPaddingLeft + ';padding-left:' + bodyPaddingLeft + ';}</style>');
    }
    if (bodyPaddingRight != "0px") {
        $('head').append('<style type="text/css" media="screen">#covid-banner{margin-right:-' + bodyPaddingRight + ';padding-right:' + bodyPaddingRight + ';}</style>');
    }
});
