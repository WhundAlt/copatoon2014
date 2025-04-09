ul.resp-tabs-list, p {
    margin: 0px;
    padding: 0px;
}

.resp-tabs-list li {
    display: inline-block;
    list-style: none;
    cursor: pointer;
    float: left;
}

.resp-tabs-container {
    padding: 0px;
    clear: left;
}

h2.resp-accordion {
    cursor: pointer;
    padding: 5px;
    display: none;
}

.resp-tab-content {
    display: none;
    padding: 15px;
}

.resp-tab-active {
	border-bottom: none;
}

.resp-tab-active {
    border-bottom: none;
    background-color: #fff;
}

.resp-content-active, .resp-accordion-active {
    display: block;
}

.resp-tab-content {
}

h2.resp-accordion {
    margin: 0px;
    padding: 10px 15px;
}

h2.resp-tab-active {
}

h2.resp-tab-title:last-child {
    background: blue;
}

/*-----------Vertical tabs-----------*/
.resp-vtabs ul.resp-tabs-list {
    float: left;
    width: 30%;
}

.resp-vtabs .resp-tabs-list li {
    display: block;
    padding: 15px 15px !important;
    margin: 0 0 4px;
    cursor: pointer;
    float: none;
}

.resp-vtabs .resp-tabs-container {
    padding: 0px;
    float: left;
    width: 68%;
    min-height: 250px;
    border-radius: 4px;
    clear: none;
}

.resp-vtabs .resp-tab-content {
    border: none;
    word-wrap: break-word;
}

.resp-vtabs li.resp-tab-active { 
position: relative;
z-index: 1;
margin-right: -1px !important;
padding: 14px 15px 15px 14px !important;
}

.resp-arrow {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -35px;

}

h2.resp-tab-active span.resp-arrow {
    border: none;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
}

/*-----------Accordion styles-----------*/
h2.resp-tab-active {
}

.resp-easy-accordion h2.resp-accordion {
    display: block;
}

.resp-easy-accordion .resp-tab-content {
}

.resp-easy-accordion .resp-tab-content:last-child {
}

.resp-jfit {
    width: 100%;
    margin: 0px;
}

.resp-tab-content-active {
    display: block;
}

h2.resp-accordion:first-child {
}

/*Here your can change the breakpoint to set the accordion, when screen resolution changed*/
@media only screen and (max-width: 991px) {
    ul.resp-tabs-list {
        display: none;
    }

    h2.resp-accordion {
        display: block;
    }

    .resp-vtabs .resp-tab-content {
        border: 1px solid #C1C1C1;
    }

    .resp-vtabs .resp-tabs-container {
        border: none;
        float: none;
        width: 100%;
        min-height: 100px;
        clear: none;
    }

    .resp-accordion-closed {
        display: none !important;
    }

    .resp-vtabs .resp-tab-content:last-child {
        border-bottom: 1px solid #c1c1c1 !important;
    }
}
/*! normalize.css v3.0.2 | MIT License | git.io/normalize */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0}mark{background:#ff0;color:#000}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{background:0 0!important;color:#000!important;box-shadow:none!important;text-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}blockquote,pre{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}select{background:#fff!important}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\2a"}.glyphicon-plus:before{content:"\2b"}.glyphicon-eur:before,.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before,.glyphicon-btc:before,.glyphicon-xbt:before{content:"\e227"}.glyphicon-jpy:before,.glyphicon-yen:before{content:"\00a5"}.glyphicon-rub:before,.glyphicon-ruble:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.small,small{font-size:85%}.mark,mark{background-color:#fcf8e3;padding:.2em}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:hover{color:#286090}.text-success{color:#3c763d}a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:hover{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ol,ul{margin-top:0;margin-bottom:10px}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none;margin-left:-5px}.list-inline>li{display:inline-block;padding-left:5px;padding-right:5px}dl{margin-top:0;margin-bottom:20px}dd,dt{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:992px){.dl-horizontal dt{float:left;width:160px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{margin-bottom:0}blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;border-right:5px solid #eee;border-left:0;text-align:right}.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;word-break:break-all;word-wrap:break-word;color:#333;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container,.container-fluid{margin-right:auto;margin-left:auto;padding-left:7.5px;padding-right:7.5px}@media (min-width:768px){.container{width:735px}}@media (min-width:992px){.container{width:955px}}@media (min-width:1200px){.container{width:1155px}}.row{margin-left:-7.5px;margin-right:-7.5px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-left:7.5px;padding-right:7.5px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}.table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*=col-]{position:static;float:none;display:table-column}table td[class*=col-],table th[class*=col-]{position:static;float:none;display:table-cell}.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{overflow-x:auto;min-height:.01%}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset{padding:0;margin:0;border:0;min-width:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date],input[type=time],input[type=datetime-local],input[type=month]{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-left:-20px;margin-top:4px \9}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;vertical-align:middle;font-weight:400;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}.checkbox-inline.disabled,.checkbox.disabled label,.radio-inline.disabled,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio label,fieldset[disabled] .radio-inline,fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.form-control-static{padding-top:7px;padding-bottom:7px;margin-bottom:0;min-height:34px}.form-control-static.input-lg,.form-control-static.input-sm{padding-left:0;padding-right:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.form-group-sm .form-control{height:30px;line-height:30px}select[multiple].form-group-sm .form-control,textarea.form-group-sm .form-control{height:auto}.form-group-sm .form-control-static{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;min-height:32px}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.form-group-lg .form-control{height:46px;line-height:46px}select[multiple].form-group-lg .form-control,textarea.form-group-lg .form-control{height:auto}.form-group-lg .form-control-static{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;min-height:38px}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;border-color:#3c763d;background-color:#dff0d8}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;border-color:#8a6d3b;background-color:#fcf8e3}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;border-color:#a94442;background-color:#f2dede}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{margin-top:0;margin-bottom:0;padding-top:7px}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-left:-7.5px;margin-right:-7.5px}@media (min-width:768px){.form-horizontal .control-label{text-align:right;margin-bottom:0;padding-top:7px}}.form-horizontal .has-feedback .form-control-feedback{right:7.5px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:14.33px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px}}.btn{display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.42857143;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}.btn.focus,.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn.active,.btn:active{outline:0;background-image:none;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;pointer-events:none;opacity:.65;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default.active,.btn-default.focus,.btn-default:active,.btn-default:focus,.btn-default:hover,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled,.btn-default.disabled.active,.btn-default.disabled.focus,.btn-default.disabled:active,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled],.btn-default[disabled].active,.btn-default[disabled].focus,.btn-default[disabled]:active,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default,fieldset[disabled] .btn-default.active,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:active,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary.active,.btn-primary.focus,.btn-primary:active,.btn-primary:focus,.btn-primary:hover,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled,.btn-primary.disabled.active,.btn-primary.disabled.focus,.btn-primary.disabled:active,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled],.btn-primary[disabled].active,.btn-primary[disabled].focus,.btn-primary[disabled]:active,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary,fieldset[disabled] .btn-primary.active,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:active,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.active,.btn-success.focus,.btn-success:active,.btn-success:focus,.btn-success:hover,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled,.btn-success.disabled.active,.btn-success.disabled.focus,.btn-success.disabled:active,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled],.btn-success[disabled].active,.btn-success[disabled].focus,.btn-success[disabled]:active,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success,fieldset[disabled] .btn-success.active,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:active,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info.active,.btn-info.focus,.btn-info:active,.btn-info:focus,.btn-info:hover,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled,.btn-info.disabled.active,.btn-info.disabled.focus,.btn-info.disabled:active,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled],.btn-info[disabled].active,.btn-info[disabled].focus,.btn-info[disabled]:active,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info,fieldset[disabled] .btn-info.active,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:active,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning.active,.btn-warning.focus,.btn-warning:active,.btn-warning:focus,.btn-warning:hover,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled,.btn-warning.disabled.active,.btn-warning.disabled.focus,.btn-warning.disabled:active,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled],.btn-warning[disabled].active,.btn-warning[disabled].focus,.btn-warning[disabled]:active,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning,fieldset[disabled] .btn-warning.active,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:active,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger.active,.btn-danger.focus,.btn-danger:active,.btn-danger:focus,.btn-danger:hover,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled,.btn-danger.disabled.active,.btn-danger.disabled.focus,.btn-danger.disabled:active,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled],.btn-danger[disabled].active,.btn-danger[disabled].focus,.btn-danger[disabled]:active,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger,fieldset[disabled] .btn-danger.active,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:active,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{color:#337ab7;font-weight:400;border-radius:0}.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#777;text-decoration:none}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-property:height,visibility;transition-property:height,visibility;-webkit-transition-duration:.35s;transition-duration:.35s;-webkit-transition-timing-function:ease;transition-timing-function:ease}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;background-color:transparent;cursor:not-allowed}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent;cursor:default}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{text-align:center;margin-bottom:5px}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{text-align:center;margin-bottom:5px}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-right-radius:0;border-top-left-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:992px){.navbar{border-radius:4px}}@media (min-width:992px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:7px;padding-left:7px;border-top:1px solid transparent;box-shadow:inset 0 1px 0 rgba(255,255,255,.1);-webkit-overflow-scrolling:touch}.navbar-collapse.in{overflow-y:auto}@media (min-width:992px){.navbar-collapse{width:auto;border-top:0;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-7px;margin-left:-7px}@media (min-width:992px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:992px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:992px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;padding:15px 7px;font-size:18px;line-height:20px;height:50px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:992px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-7px}}.navbar-toggle{position:relative;float:right;margin-right:7px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:992px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -7px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:991px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:992px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{margin:8px -7px;padding:10px 7px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:991px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:992px){.navbar-form{width:auto;border:0;margin-left:0;margin-right:0;padding-top:0;padding-bottom:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-right-radius:0;border-top-left-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-radius:4px 4px 0 0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:992px){.navbar-text{float:left;margin-left:7px;margin-right:7px}}@media (min-width:992px){.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-7px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:transparent;border-color:rgba(0,0,0,0)}.navbar-default .navbar-brand{color:#fff}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#e6e6e6;background-color:transparent}.navbar-default .navbar-nav>li>a,.navbar-default .navbar-text{color:#fff}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#000;background-color:#fff}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:transparent}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:transparent}.navbar-default .navbar-toggle .icon-bar{background-color:#c54a02}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:rgba(0,0,0,0)}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{background-color:#fff;color:#000}@media (max-width:991px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#fff}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:initial}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#000;background-color:#fff}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}.navbar-default .btn-link,.navbar-default .btn-link:focus,.navbar-default .btn-link:hover,.navbar-default .navbar-link,.navbar-default .navbar-link:hover{color:#fff}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{background-color:#080808;color:#fff}@media (max-width:991px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{zoom:1;overflow:hidden}.media-body{width:10000px}.media-object{display:block}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-body,.media-left,.media-right{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.carousel{position:relative}.carousel-inner{position:relative;overflow:hidden;width:100%}.carousel-inner>.item{display:none;position:relative;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-moz-transition:-moz-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000;-moz-perspective:1000;perspective:1000}.carousel-inner>.item.active.right,.carousel-inner>.item.next{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);left:0}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);left:0}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);left:0}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;left:0;bottom:0;width:15%;opacity:.5;filter:alpha(opacity=50);font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)}.carousel-control.right{left:auto;right:0;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)}.carousel-control:focus,.carousel-control:hover{outline:0;color:#fff;text-decoration:none;opacity:.9;filter:alpha(opacity=90)}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;margin-top:-10px;line-height:1;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;margin-left:-30%;padding-left:0;list-style:none;text-align:center}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;border:1px solid #fff;border-radius:10px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0)}.carousel-indicators .active{margin:0;width:12px;height:12px;background-color:#fff}.carousel-caption{position:absolute;left:15%;right:15%;bottom:20px;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-15px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-15px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-15px}.carousel-caption{left:20%;right:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.row:after,.row:before{content:" ";display:table}.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-print,.visible-print-block,.visible-print-inline,.visible-print-inline-block,.visible-sm,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}@media print{.visible-print{display:block!important}table.visible-print{display:table}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}@media print{.visible-print-block{display:block!important}}@media print{.visible-print-inline{display:inline!important}}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}@charset "UTF-8";.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes bounce{20%,53%,80%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1);-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}40%,43%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-30px,0);transform:translate3d(0,-30px,0)}70%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-15px,0);transform:translate3d(0,-15px,0)}90%{-webkit-transform:translate3d(0,-4px,0);transform:translate3d(0,-4px,0)}}@keyframes bounce{20%,53%,80%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1);-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}40%,43%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-30px,0);transform:translate3d(0,-30px,0)}70%{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06);-webkit-transform:translate3d(0,-15px,0);transform:translate3d(0,-15px,0)}90%{-webkit-transform:translate3d(0,-4px,0);transform:translate3d(0,-4px,0)}}.bounce{-webkit-animation-name:bounce;animation-name:bounce;-webkit-transform-origin:center bottom;transform-origin:center bottom}@-webkit-keyframes flash{50%,from,to{opacity:1}25%,75%{opacity:0}}@keyframes flash{50%,from,to{opacity:1}25%,75%{opacity:0}}.flash{-webkit-animation-name:flash;animation-name:flash}@-webkit-keyframes pulse{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}50%{-webkit-transform:scale3d(1.05,1.05,1.05);transform:scale3d(1.05,1.05,1.05)}}@keyframes pulse{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}50%{-webkit-transform:scale3d(1.05,1.05,1.05);transform:scale3d(1.05,1.05,1.05)}}.pulse{-webkit-animation-name:pulse;animation-name:pulse}@-webkit-keyframes rubberBand{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}30%{-webkit-transform:scale3d(1.25,.75,1);transform:scale3d(1.25,.75,1)}40%{-webkit-transform:scale3d(.75,1.25,1);transform:scale3d(.75,1.25,1)}50%{-webkit-transform:scale3d(1.15,.85,1);transform:scale3d(1.15,.85,1)}65%{-webkit-transform:scale3d(.95,1.05,1);transform:scale3d(.95,1.05,1)}75%{-webkit-transform:scale3d(1.05,.95,1);transform:scale3d(1.05,.95,1)}}@keyframes rubberBand{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}30%{-webkit-transform:scale3d(1.25,.75,1);transform:scale3d(1.25,.75,1)}40%{-webkit-transform:scale3d(.75,1.25,1);transform:scale3d(.75,1.25,1)}50%{-webkit-transform:scale3d(1.15,.85,1);transform:scale3d(1.15,.85,1)}65%{-webkit-transform:scale3d(.95,1.05,1);transform:scale3d(.95,1.05,1)}75%{-webkit-transform:scale3d(1.05,.95,1);transform:scale3d(1.05,.95,1)}}.rubberBand{-webkit-animation-name:rubberBand;animation-name:rubberBand}@-webkit-keyframes shake{from,to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}}@keyframes shake{from,to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}}.shake{-webkit-animation-name:shake;animation-name:shake}@-webkit-keyframes headShake{0%{-webkit-transform:translateX(0);transform:translateX(0)}6.5%{-webkit-transform:translateX(-6px) rotateY(-9deg);transform:translateX(-6px) rotateY(-9deg)}18.5%{-webkit-transform:translateX(5px) rotateY(7deg);transform:translateX(5px) rotateY(7deg)}31.5%{-webkit-transform:translateX(-3px) rotateY(-5deg);transform:translateX(-3px) rotateY(-5deg)}43.5%{-webkit-transform:translateX(2px) rotateY(3deg);transform:translateX(2px) rotateY(3deg)}50%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes headShake{0%{-webkit-transform:translateX(0);transform:translateX(0)}6.5%{-webkit-transform:translateX(-6px) rotateY(-9deg);transform:translateX(-6px) rotateY(-9deg)}18.5%{-webkit-transform:translateX(5px) rotateY(7deg);transform:translateX(5px) rotateY(7deg)}31.5%{-webkit-transform:translateX(-3px) rotateY(-5deg);transform:translateX(-3px) rotateY(-5deg)}43.5%{-webkit-transform:translateX(2px) rotateY(3deg);transform:translateX(2px) rotateY(3deg)}50%{-webkit-transform:translateX(0);transform:translateX(0)}}.headShake{-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-name:headShake;animation-name:headShake}@-webkit-keyframes swing{20%{-webkit-transform:rotate3d(0,0,1,15deg);transform:rotate3d(0,0,1,15deg)}40%{-webkit-transform:rotate3d(0,0,1,-10deg);transform:rotate3d(0,0,1,-10deg)}60%{-webkit-transform:rotate3d(0,0,1,5deg);transform:rotate3d(0,0,1,5deg)}80%{-webkit-transform:rotate3d(0,0,1,-5deg);transform:rotate3d(0,0,1,-5deg)}to{-webkit-transform:rotate3d(0,0,1,0deg);transform:rotate3d(0,0,1,0deg)}}@keyframes swing{20%{-webkit-transform:rotate3d(0,0,1,15deg);transform:rotate3d(0,0,1,15deg)}40%{-webkit-transform:rotate3d(0,0,1,-10deg);transform:rotate3d(0,0,1,-10deg)}60%{-webkit-transform:rotate3d(0,0,1,5deg);transform:rotate3d(0,0,1,5deg)}80%{-webkit-transform:rotate3d(0,0,1,-5deg);transform:rotate3d(0,0,1,-5deg)}to{-webkit-transform:rotate3d(0,0,1,0deg);transform:rotate3d(0,0,1,0deg)}}.swing{-webkit-transform-origin:top center;transform-origin:top center;-webkit-animation-name:swing;animation-name:swing}@-webkit-keyframes tada{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}}@keyframes tada{from,to{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}10%,20%{-webkit-transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);transform:scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);transform:scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)}}.tada{-webkit-animation-name:tada;animation-name:tada}@-webkit-keyframes wobble{from,to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}15%{-webkit-transform:translate3d(-25%,0,0) rotate3d(0,0,1,-5deg);transform:translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)}30%{-webkit-transform:translate3d(20%,0,0) rotate3d(0,0,1,3deg);transform:translate3d(20%,0,0) rotate3d(0,0,1,3deg)}45%{-webkit-transform:translate3d(-15%,0,0) rotate3d(0,0,1,-3deg);transform:translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)}60%{-webkit-transform:translate3d(10%,0,0) rotate3d(0,0,1,2deg);transform:translate3d(10%,0,0) rotate3d(0,0,1,2deg)}75%{-webkit-transform:translate3d(-5%,0,0) rotate3d(0,0,1,-1deg);transform:translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)}}@keyframes wobble{from,to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}15%{-webkit-transform:translate3d(-25%,0,0) rotate3d(0,0,1,-5deg);transform:translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)}30%{-webkit-transform:translate3d(20%,0,0) rotate3d(0,0,1,3deg);transform:translate3d(20%,0,0) rotate3d(0,0,1,3deg)}45%{-webkit-transform:translate3d(-15%,0,0) rotate3d(0,0,1,-3deg);transform:translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)}60%{-webkit-transform:translate3d(10%,0,0) rotate3d(0,0,1,2deg);transform:translate3d(10%,0,0) rotate3d(0,0,1,2deg)}75%{-webkit-transform:translate3d(-5%,0,0) rotate3d(0,0,1,-1deg);transform:translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)}}.wobble{-webkit-animation-name:wobble;animation-name:wobble}@-webkit-keyframes jello{11.1%,from,to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}22.2%{-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{-webkit-transform:skewX(6.25deg) skewY(6.25deg);transform:skewX(6.25deg) skewY(6.25deg)}44.4%{-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{-webkit-transform:skewX(-.78125deg) skewY(-.78125deg);transform:skewX(-.78125deg) skewY(-.78125deg)}77.7%{-webkit-transform:skewX(.390625deg) skewY(.390625deg);transform:skewX(.390625deg) skewY(.390625deg)}88.8%{-webkit-transform:skewX(-.1953125deg) skewY(-.1953125deg);transform:skewX(-.1953125deg) skewY(-.1953125deg)}}@keyframes jello{11.1%,from,to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}22.2%{-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{-webkit-transform:skewX(6.25deg) skewY(6.25deg);transform:skewX(6.25deg) skewY(6.25deg)}44.4%{-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{-webkit-transform:skewX(-.78125deg) skewY(-.78125deg);transform:skewX(-.78125deg) skewY(-.78125deg)}77.7%{-webkit-transform:skewX(.390625deg) skewY(.390625deg);transform:skewX(.390625deg) skewY(.390625deg)}88.8%{-webkit-transform:skewX(-.1953125deg) skewY(-.1953125deg);transform:skewX(-.1953125deg) skewY(-.1953125deg)}}.jello{-webkit-animation-name:jello;animation-name:jello;-webkit-transform-origin:center;transform-origin:center}@-webkit-keyframes bounceIn{20%,40%,60%,80%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes bounceIn{20%,40%,60%,80%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}.bounceIn{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-name:bounceIn;animation-name:bounceIn}.bounceOut,.flipOutX{-webkit-animation-duration:.75s}@-webkit-keyframes bounceInDown{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,-3000px,0);transform:translate3d(0,-3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,25px,0);transform:translate3d(0,25px,0)}75%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}90%{-webkit-transform:translate3d(0,5px,0);transform:translate3d(0,5px,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes bounceInDown{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,-3000px,0);transform:translate3d(0,-3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,25px,0);transform:translate3d(0,25px,0)}75%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}90%{-webkit-transform:translate3d(0,5px,0);transform:translate3d(0,5px,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.bounceInDown{-webkit-animation-name:bounceInDown;animation-name:bounceInDown}@-webkit-keyframes bounceInLeft{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(-3000px,0,0);transform:translate3d(-3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(25px,0,0);transform:translate3d(25px,0,0)}75%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}90%{-webkit-transform:translate3d(5px,0,0);transform:translate3d(5px,0,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes bounceInLeft{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(-3000px,0,0);transform:translate3d(-3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(25px,0,0);transform:translate3d(25px,0,0)}75%{-webkit-transform:translate3d(-10px,0,0);transform:translate3d(-10px,0,0)}90%{-webkit-transform:translate3d(5px,0,0);transform:translate3d(5px,0,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.bounceInLeft{-webkit-animation-name:bounceInLeft;animation-name:bounceInLeft}@-webkit-keyframes bounceInRight{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}from{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes bounceInRight{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}from{opacity:0;-webkit-transform:translate3d(3000px,0,0);transform:translate3d(3000px,0,0)}60%{opacity:1;-webkit-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}75%{-webkit-transform:translate3d(10px,0,0);transform:translate3d(10px,0,0)}90%{-webkit-transform:translate3d(-5px,0,0);transform:translate3d(-5px,0,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}@-webkit-keyframes bounceInUp{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}from{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes bounceInUp{60%,75%,90%,from,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}from{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp}@-webkit-keyframes bounceOut{20%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}to{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}}@keyframes bounceOut{20%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}to{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}}.bounceOut{animation-duration:.75s;-webkit-animation-name:bounceOut;animation-name:bounceOut}@-webkit-keyframes bounceOutDown{20%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}@keyframes bounceOutDown{20%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}.bounceOutDown{-webkit-animation-name:bounceOutDown;animation-name:bounceOutDown}@-webkit-keyframes bounceOutLeft{20%{opacity:1;-webkit-transform:translate3d(20px,0,0);transform:translate3d(20px,0,0)}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}@keyframes bounceOutLeft{20%{opacity:1;-webkit-transform:translate3d(20px,0,0);transform:translate3d(20px,0,0)}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}.bounceOutLeft{-webkit-animation-name:bounceOutLeft;animation-name:bounceOutLeft}@-webkit-keyframes bounceOutRight{20%{opacity:1;-webkit-transform:translate3d(-20px,0,0);transform:translate3d(-20px,0,0)}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}@keyframes bounceOutRight{20%{opacity:1;-webkit-transform:translate3d(-20px,0,0);transform:translate3d(-20px,0,0)}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}.bounceOutRight{-webkit-animation-name:bounceOutRight;animation-name:bounceOutRight}@-webkit-keyframes bounceOutUp{20%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,20px,0);transform:translate3d(0,20px,0)}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}@keyframes bounceOutUp{20%{-webkit-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0)}40%,45%{opacity:1;-webkit-transform:translate3d(0,20px,0);transform:translate3d(0,20px,0)}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}.bounceOutUp{-webkit-animation-name:bounceOutUp;animation-name:bounceOutUp}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}.fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn}@-webkit-keyframes fadeInDown{from{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInDown{from{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown}@-webkit-keyframes fadeInDownBig{from{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInDownBig{from{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInDownBig{-webkit-animation-name:fadeInDownBig;animation-name:fadeInDownBig}@-webkit-keyframes fadeInLeft{from{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInLeft{from{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInLeft{-webkit-animation-name:fadeInLeft;animation-name:fadeInLeft}@-webkit-keyframes fadeInLeftBig{from{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInLeftBig{from{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInLeftBig{-webkit-animation-name:fadeInLeftBig;animation-name:fadeInLeftBig}@-webkit-keyframes fadeInRight{from{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInRight{from{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInRight{-webkit-animation-name:fadeInRight;animation-name:fadeInRight}@-webkit-keyframes fadeInRightBig{from{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInRightBig{from{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInRightBig{-webkit-animation-name:fadeInRightBig;animation-name:fadeInRightBig}@-webkit-keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}@-webkit-keyframes fadeInUpBig{from{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes fadeInUpBig{from{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.fadeInUpBig{-webkit-animation-name:fadeInUpBig;animation-name:fadeInUpBig}@-webkit-keyframes fadeOut{from{opacity:1}to{opacity:0}}@keyframes fadeOut{from{opacity:1}to{opacity:0}}.fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOutDown{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}@keyframes fadeOutDown{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}.fadeOutDown{-webkit-animation-name:fadeOutDown;animation-name:fadeOutDown}@-webkit-keyframes fadeOutDownBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}@keyframes fadeOutDownBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,2000px,0);transform:translate3d(0,2000px,0)}}.fadeOutDownBig{-webkit-animation-name:fadeOutDownBig;animation-name:fadeOutDownBig}@-webkit-keyframes fadeOutLeft{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}@keyframes fadeOutLeft{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}.fadeOutLeft{-webkit-animation-name:fadeOutLeft;animation-name:fadeOutLeft}@-webkit-keyframes fadeOutLeftBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}@keyframes fadeOutLeftBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-2000px,0,0);transform:translate3d(-2000px,0,0)}}.fadeOutLeftBig{-webkit-animation-name:fadeOutLeftBig;animation-name:fadeOutLeftBig}@-webkit-keyframes fadeOutRight{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}@keyframes fadeOutRight{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}@-webkit-keyframes fadeOutRightBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}@keyframes fadeOutRightBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}}.fadeOutRightBig{-webkit-animation-name:fadeOutRightBig;animation-name:fadeOutRightBig}@-webkit-keyframes fadeOutUp{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}@keyframes fadeOutUp{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}.fadeOutUp{-webkit-animation-name:fadeOutUp;animation-name:fadeOutUp}@-webkit-keyframes fadeOutUpBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}@keyframes fadeOutUpBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0,-2000px,0);transform:translate3d(0,-2000px,0)}}.fadeOutUpBig{-webkit-animation-name:fadeOutUpBig;animation-name:fadeOutUpBig}@-webkit-keyframes flip{from{-webkit-transform:perspective(400px) rotate3d(0,1,0,-360deg);transform:perspective(400px) rotate3d(0,1,0,-360deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) scale3d(.95,.95,.95);transform:perspective(400px) scale3d(.95,.95,.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(400px);transform:perspective(400px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}@keyframes flip{from{-webkit-transform:perspective(400px) rotate3d(0,1,0,-360deg);transform:perspective(400px) rotate3d(0,1,0,-360deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);transform:perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) scale3d(.95,.95,.95);transform:perspective(400px) scale3d(.95,.95,.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(400px);transform:perspective(400px);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}.animated.flip{-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flip;animation-name:flip}@-webkit-keyframes flipInX{from{-webkit-transform:perspective(400px) rotate3d(1,0,0,90deg);transform:perspective(400px) rotate3d(1,0,0,90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotate3d(1,0,0,-20deg);transform:perspective(400px) rotate3d(1,0,0,-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotate3d(1,0,0,10deg);transform:perspective(400px) rotate3d(1,0,0,10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotate3d(1,0,0,-5deg);transform:perspective(400px) rotate3d(1,0,0,-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}@keyframes flipInX{from{-webkit-transform:perspective(400px) rotate3d(1,0,0,90deg);transform:perspective(400px) rotate3d(1,0,0,90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotate3d(1,0,0,-20deg);transform:perspective(400px) rotate3d(1,0,0,-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotate3d(1,0,0,10deg);transform:perspective(400px) rotate3d(1,0,0,10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotate3d(1,0,0,-5deg);transform:perspective(400px) rotate3d(1,0,0,-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}.flipInX{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipInX;animation-name:flipInX}.flipInY,.flipOutX{-webkit-backface-visibility:visible!important}@-webkit-keyframes flipInY{from{-webkit-transform:perspective(400px) rotate3d(0,1,0,90deg);transform:perspective(400px) rotate3d(0,1,0,90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotate3d(0,1,0,-20deg);transform:perspective(400px) rotate3d(0,1,0,-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotate3d(0,1,0,10deg);transform:perspective(400px) rotate3d(0,1,0,10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotate3d(0,1,0,-5deg);transform:perspective(400px) rotate3d(0,1,0,-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}@keyframes flipInY{from{-webkit-transform:perspective(400px) rotate3d(0,1,0,90deg);transform:perspective(400px) rotate3d(0,1,0,90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotate3d(0,1,0,-20deg);transform:perspective(400px) rotate3d(0,1,0,-20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotate3d(0,1,0,10deg);transform:perspective(400px) rotate3d(0,1,0,10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotate3d(0,1,0,-5deg);transform:perspective(400px) rotate3d(0,1,0,-5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}.flipInY{backface-visibility:visible!important;-webkit-animation-name:flipInY;animation-name:flipInY}@-webkit-keyframes flipOutX{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotate3d(1,0,0,-20deg);transform:perspective(400px) rotate3d(1,0,0,-20deg);opacity:1}to{-webkit-transform:perspective(400px) rotate3d(1,0,0,90deg);transform:perspective(400px) rotate3d(1,0,0,90deg);opacity:0}}@keyframes flipOutX{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotate3d(1,0,0,-20deg);transform:perspective(400px) rotate3d(1,0,0,-20deg);opacity:1}to{-webkit-transform:perspective(400px) rotate3d(1,0,0,90deg);transform:perspective(400px) rotate3d(1,0,0,90deg);opacity:0}}.flipOutX{animation-duration:.75s;-webkit-animation-name:flipOutX;animation-name:flipOutX;backface-visibility:visible!important}@-webkit-keyframes flipOutY{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotate3d(0,1,0,-15deg);transform:perspective(400px) rotate3d(0,1,0,-15deg);opacity:1}to{-webkit-transform:perspective(400px) rotate3d(0,1,0,90deg);transform:perspective(400px) rotate3d(0,1,0,90deg);opacity:0}}@keyframes flipOutY{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{-webkit-transform:perspective(400px) rotate3d(0,1,0,-15deg);transform:perspective(400px) rotate3d(0,1,0,-15deg);opacity:1}to{-webkit-transform:perspective(400px) rotate3d(0,1,0,90deg);transform:perspective(400px) rotate3d(0,1,0,90deg);opacity:0}}.flipOutY{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipOutY;animation-name:flipOutY}@-webkit-keyframes lightSpeedIn{from{-webkit-transform:translate3d(100%,0,0) skewX(-30deg);transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{-webkit-transform:skewX(20deg);transform:skewX(20deg);opacity:1}80%{-webkit-transform:skewX(-5deg);transform:skewX(-5deg);opacity:1}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}@keyframes lightSpeedIn{from{-webkit-transform:translate3d(100%,0,0) skewX(-30deg);transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{-webkit-transform:skewX(20deg);transform:skewX(20deg);opacity:1}80%{-webkit-transform:skewX(-5deg);transform:skewX(-5deg);opacity:1}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}.lightSpeedIn{-webkit-animation-name:lightSpeedIn;animation-name:lightSpeedIn;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes lightSpeedInLeft{from{-webkit-transform:translate3d(-100%,0,0) skewX(30deg);transform:translate3d(-100%,0,0) skewX(30deg);opacity:0}60%{-webkit-transform:skewX(-20deg);transform:skewX(-20deg);opacity:1}80%{-webkit-transform:skewX(5deg);transform:skewX(5deg);opacity:1}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}@keyframes lightSpeedInLeft{from{-webkit-transform:translate3d(-100%,0,0) skewX(30deg);transform:translate3d(-100%,0,0) skewX(30deg);opacity:0}60%{-webkit-transform:skewX(-20deg);transform:skewX(-20deg);opacity:1}80%{-webkit-transform:skewX(5deg);transform:skewX(5deg);opacity:1}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}.lightSpeedInLeft{-webkit-animation-name:lightSpeedInLeft;animation-name:lightSpeedInLeft;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes lightSpeedOut{from{opacity:1}to{-webkit-transform:translate3d(100%,0,0) skewX(30deg);transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}@keyframes lightSpeedOut{from{opacity:1}to{-webkit-transform:translate3d(100%,0,0) skewX(30deg);transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}.lightSpeedOut{-webkit-animation-name:lightSpeedOut;animation-name:lightSpeedOut;-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}@-webkit-keyframes rotateIn{from{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate3d(0,0,1,-200deg);transform:rotate3d(0,0,1,-200deg);opacity:0}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}@keyframes rotateIn{from{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate3d(0,0,1,-200deg);transform:rotate3d(0,0,1,-200deg);opacity:0}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}.rotateIn{-webkit-animation-name:rotateIn;animation-name:rotateIn}@-webkit-keyframes rotateInDownLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,-45deg);transform:rotate3d(0,0,1,-45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}@keyframes rotateInDownLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,-45deg);transform:rotate3d(0,0,1,-45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}.rotateInDownLeft{-webkit-animation-name:rotateInDownLeft;animation-name:rotateInDownLeft}@-webkit-keyframes rotateInDownRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}@keyframes rotateInDownRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}.rotateInDownRight{-webkit-animation-name:rotateInDownRight;animation-name:rotateInDownRight}@-webkit-keyframes rotateInUpLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}@keyframes rotateInUpLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}.rotateInUpLeft{-webkit-animation-name:rotateInUpLeft;animation-name:rotateInUpLeft}@-webkit-keyframes rotateInUpRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,-90deg);transform:rotate3d(0,0,1,-90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}@keyframes rotateInUpRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,-90deg);transform:rotate3d(0,0,1,-90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}}.rotateInUpRight{-webkit-animation-name:rotateInUpRight;animation-name:rotateInUpRight}@-webkit-keyframes rotateOut{from{-webkit-transform-origin:center;transform-origin:center;opacity:1}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate3d(0,0,1,200deg);transform:rotate3d(0,0,1,200deg);opacity:0}}@keyframes rotateOut{from{-webkit-transform-origin:center;transform-origin:center;opacity:1}to{-webkit-transform-origin:center;transform-origin:center;-webkit-transform:rotate3d(0,0,1,200deg);transform:rotate3d(0,0,1,200deg);opacity:0}}.rotateOut{-webkit-animation-name:rotateOut;animation-name:rotateOut}@-webkit-keyframes rotateOutDownLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);opacity:0}}@keyframes rotateOutDownLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,45deg);transform:rotate3d(0,0,1,45deg);opacity:0}}.rotateOutDownLeft{-webkit-animation-name:rotateOutDownLeft;animation-name:rotateOutDownLeft}@-webkit-keyframes rotateOutDownRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,-45deg);transform:rotate3d(0,0,1,-45deg);opacity:0}}@keyframes rotateOutDownRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,-45deg);transform:rotate3d(0,0,1,-45deg);opacity:0}}.rotateOutDownRight{-webkit-animation-name:rotateOutDownRight;animation-name:rotateOutDownRight}@-webkit-keyframes rotateOutUpLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,-45deg);transform:rotate3d(0,0,1,-45deg);opacity:0}}@keyframes rotateOutUpLeft{from{-webkit-transform-origin:left bottom;transform-origin:left bottom;opacity:1}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate3d(0,0,1,-45deg);transform:rotate3d(0,0,1,-45deg);opacity:0}}.rotateOutUpLeft{-webkit-animation-name:rotateOutUpLeft;animation-name:rotateOutUpLeft}@-webkit-keyframes rotateOutUpRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,90deg);transform:rotate3d(0,0,1,90deg);opacity:0}}@keyframes rotateOutUpRight{from{-webkit-transform-origin:right bottom;transform-origin:right bottom;opacity:1}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate3d(0,0,1,90deg);transform:rotate3d(0,0,1,90deg);opacity:0}}.rotateOutUpRight{-webkit-animation-name:rotateOutUpRight;animation-name:rotateOutUpRight}@-webkit-keyframes hinge{0%{-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate3d(0,0,1,80deg);transform:rotate3d(0,0,1,80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%,80%{-webkit-transform:rotate3d(0,0,1,60deg);transform:rotate3d(0,0,1,60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;opacity:1}to{-webkit-transform:translate3d(0,700px,0);transform:translate3d(0,700px,0);opacity:0}}@keyframes hinge{0%{-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate3d(0,0,1,80deg);transform:rotate3d(0,0,1,80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%,80%{-webkit-transform:rotate3d(0,0,1,60deg);transform:rotate3d(0,0,1,60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;opacity:1}to{-webkit-transform:translate3d(0,700px,0);transform:translate3d(0,700px,0);opacity:0}}.hinge{-webkit-animation-duration:2s;animation-duration:2s;-webkit-animation-name:hinge;animation-name:hinge}@-webkit-keyframes jackInTheBox{from{opacity:0;-webkit-transform:scale(.1) rotate(30deg);transform:scale(.1) rotate(30deg);-webkit-transform-origin:center bottom;transform-origin:center bottom}50%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}70%{-webkit-transform:rotate(3deg);transform:rotate(3deg)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@keyframes jackInTheBox{from{opacity:0;-webkit-transform:scale(.1) rotate(30deg);transform:scale(.1) rotate(30deg);-webkit-transform-origin:center bottom;transform-origin:center bottom}50%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}70%{-webkit-transform:rotate(3deg);transform:rotate(3deg)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}.jackInTheBox{-webkit-animation-name:jackInTheBox;animation-name:jackInTheBox}@-webkit-keyframes rollIn{from{opacity:0;-webkit-transform:translate3d(-100%,0,0) rotate3d(0,0,1,-120deg);transform:translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes rollIn{from{opacity:0;-webkit-transform:translate3d(-100%,0,0) rotate3d(0,0,1,-120deg);transform:translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)}to{opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.rollIn{-webkit-animation-name:rollIn;animation-name:rollIn}@-webkit-keyframes rollOut{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0) rotate3d(0,0,1,120deg);transform:translate3d(100%,0,0) rotate3d(0,0,1,120deg)}}@keyframes rollOut{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%,0,0) rotate3d(0,0,1,120deg);transform:translate3d(100%,0,0) rotate3d(0,0,1,120deg)}}.rollOut{-webkit-animation-name:rollOut;animation-name:rollOut}@-webkit-keyframes zoomIn{from{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}50%{opacity:1}}@keyframes zoomIn{from{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}50%{opacity:1}}.zoomIn{-webkit-animation-name:zoomIn;animation-name:zoomIn}@-webkit-keyframes zoomInDown{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInDown{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInDown{-webkit-animation-name:zoomInDown;animation-name:zoomInDown}@-webkit-keyframes zoomInLeft{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(10px,0,0);transform:scale3d(.475,.475,.475) translate3d(10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInLeft{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(10px,0,0);transform:scale3d(.475,.475,.475) translate3d(10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInLeft{-webkit-animation-name:zoomInLeft;animation-name:zoomInLeft}@-webkit-keyframes zoomInRight{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInRight{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInRight{-webkit-animation-name:zoomInRight;animation-name:zoomInRight}@-webkit-keyframes zoomInUp{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomInUp{from{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInUp{-webkit-animation-name:zoomInUp;animation-name:zoomInUp}@-webkit-keyframes zoomOut{from{opacity:1}50%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}to{opacity:0}}@keyframes zoomOut{from{opacity:1}50%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}to{opacity:0}}.zoomOut{-webkit-animation-name:zoomOut;animation-name:zoomOut}@-webkit-keyframes zoomOutDown{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomOutDown{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutDown{-webkit-animation-name:zoomOutDown;animation-name:zoomOutDown}@-webkit-keyframes zoomOutLeft{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(42px,0,0);transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(-2000px,0,0);transform:scale(.1) translate3d(-2000px,0,0);-webkit-transform-origin:left center;transform-origin:left center}}@keyframes zoomOutLeft{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(42px,0,0);transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(-2000px,0,0);transform:scale(.1) translate3d(-2000px,0,0);-webkit-transform-origin:left center;transform-origin:left center}}.zoomOutLeft{-webkit-animation-name:zoomOutLeft;animation-name:zoomOutLeft}@-webkit-keyframes zoomOutRight{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-42px,0,0);transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(2000px,0,0);transform:scale(.1) translate3d(2000px,0,0);-webkit-transform-origin:right center;transform-origin:right center}}@keyframes zoomOutRight{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(-42px,0,0);transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;-webkit-transform:scale(.1) translate3d(2000px,0,0);transform:scale(.1) translate3d(2000px,0,0);-webkit-transform-origin:right center;transform-origin:right center}}.zoomOutRight{-webkit-animation-name:zoomOutRight;animation-name:zoomOutRight}@-webkit-keyframes zoomOutUp{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}@keyframes zoomOutUp{40%{opacity:1;-webkit-transform:scale3d(.475,.475,.475) translate3d(0,60px,0);transform:scale3d(.475,.475,.475) translate3d(0,60px,0);-webkit-animation-timing-function:cubic-bezier(.55,.055,.675,.19);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;-webkit-transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(.175,.885,.32,1);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutUp{-webkit-animation-name:zoomOutUp;animation-name:zoomOutUp}@-webkit-keyframes slideInDown{from{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes slideInDown{from{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.slideInDown{-webkit-animation-name:slideInDown;animation-name:slideInDown}@-webkit-keyframes slideInLeft{from{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes slideInLeft{from{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.slideInLeft{-webkit-animation-name:slideInLeft;animation-name:slideInLeft}@-webkit-keyframes slideInRight{from{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes slideInRight{from{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.slideInRight{-webkit-animation-name:slideInRight;animation-name:slideInRight}@-webkit-keyframes slideInUp{from{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes slideInUp{from{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0);visibility:visible}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.slideInUp{-webkit-animation-name:slideInUp;animation-name:slideInUp}@-webkit-keyframes slideOutDown{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}@keyframes slideOutDown{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}}.slideOutDown{-webkit-animation-name:slideOutDown;animation-name:slideOutDown}@-webkit-keyframes slideOutLeft{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}@keyframes slideOutLeft{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}.slideOutLeft{-webkit-animation-name:slideOutLeft;animation-name:slideOutLeft}@-webkit-keyframes slideOutRight{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}@keyframes slideOutRight{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.slideOutRight{-webkit-animation-name:slideOutRight;animation-name:slideOutRight}@-webkit-keyframes slideOutUp{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}@keyframes slideOutUp{from{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}to{visibility:hidden;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}}.slideOutUp{-webkit-animation-name:slideOutUp;animation-name:slideOutUp}.animated.slow{-webkit-animation-duration: 2s;animation-duration: 2s;}.tns-outer{padding:0 !important}.tns-outer [hidden]{display:none !important}.tns-outer [aria-controls],.tns-outer [data-action]{cursor:pointer}.tns-slider{-webkit-transition:all 0s;-moz-transition:all 0s;transition:all 0s}.tns-slider>.tns-item{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.tns-horizontal.tns-subpixel{white-space:nowrap}.tns-horizontal.tns-subpixel>.tns-item{display:inline-block;vertical-align:top;white-space:normal}.tns-horizontal.tns-no-subpixel:after{content:'';display:table;clear:both}.tns-horizontal.tns-no-subpixel>.tns-item{float:left}.tns-horizontal.tns-carousel.tns-no-subpixel>.tns-item{margin-right:-100%}.tns-no-calc{position:relative;left:0}.tns-gallery{position:relative;left:0;min-height:1px}.tns-gallery>.tns-item{position:absolute;left:-100%;-webkit-transition:transform 0s, opacity 0s;-moz-transition:transform 0s, opacity 0s;transition:transform 0s, opacity 0s}.tns-gallery>.tns-slide-active{position:relative;left:auto !important}.tns-gallery>.tns-moving{-webkit-transition:all 0.25s;-moz-transition:all 0.25s;transition:all 0.25s}.tns-autowidth{display:inline-block}.tns-lazy-img{-webkit-transition:opacity 0.6s;-moz-transition:opacity 0.6s;transition:opacity 0.6s;opacity:0.6}.tns-lazy-img.loaded{opacity:1}.tns-ah{-webkit-transition:height 0s;-moz-transition:height 0s;transition:height 0s}.tns-ovh{overflow:hidden}.tns-visually-hidden{position:absolute;left:-10000em}.tns-transparent{opacity:0;visibility:hidden}.tns-fadeIn{opacity:1;filter:alpha(opacity=100);z-index:0}.tns-normal,.tns-fadeOut{opacity:0;filter:alpha(opacity=0);z-index:-1}.tns-t-subp2{margin:0 auto;width:310px;position:relative;height:10px;overflow:hidden}.tns-t-ct{width:2333.3333333%;width:-webkit-calc(100% * 70 / 3);width:-moz-calc(100% * 70 / 3);width:calc(100% * 70 / 3);position:absolute;right:0}.tns-t-ct:after{content:'';display:table;clear:both}.tns-t-ct>div{width:1.4285714%;width:-webkit-calc(100% / 70);width:-moz-calc(100% / 70);width:calc(100% / 70);height:10px;float:left}/*@font-face {font-family: 'Gibson-Light';src: url('webfonts/2815BF_0_0.eot');src: url('webfonts/2815BF_0_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_0_0.woff') format('woff'),url('webfonts/2815BF_0_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'Gibson-LightIt';src: url('webfonts/2815BF_1_0.eot');src: url('webfonts/2815BF_1_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_1_0.woff') format('woff'),url('webfonts/2815BF_1_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'Gibson-BoldItalic';src: url('webfonts/2815BF_2_0.eot');src: url('webfonts/2815BF_2_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_2_0.woff') format('woff'),url('webfonts/2815BF_2_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'Gibson-SemiboldIt';src: url('webfonts/2815BF_3_0.eot');src: url('webfonts/2815BF_3_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_3_0.woff') format('woff'),url('webfonts/2815BF_3_0.ttf') format('truetype');}*/
@font-face {font-family: 'Gibson-Bold';src: url('webfonts/2815BF_4_0.eot');src: url('webfonts/2815BF_4_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_4_0.woff') format('woff'),url('webfonts/2815BF_4_0.ttf') format('truetype');}
@font-face {font-family: 'Gibson-Regular';src: url('webfonts/2815BF_5_0.eot');src: url('webfonts/2815BF_5_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_5_0.woff') format('woff'),url('webfonts/2815BF_5_0.ttf') format('truetype');}
@font-face {font-family: 'Gibson-SemiBold';src: url('webfonts/2815BF_6_0.eot');src: url('webfonts/2815BF_6_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_6_0.woff') format('woff'),url('webfonts/2815BF_6_0.ttf') format('truetype');}
/*@font-face {font-family: 'Gibson-Italic';src: url('webfonts/2815BF_7_0.eot');src: url('webfonts/2815BF_7_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2815BF_7_0.woff') format('woff'),url('webfonts/2815BF_7_0.ttf') format('truetype');}*/

/*@font-face {font-family: 'EvelethShapes';src: url('webfonts/2F28F3_0_0.eot');src: url('webfonts/2F28F3_0_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_0_0.woff2') format('woff2'),url('webfonts/2F28F3_0_0.woff') format('woff'),url('webfonts/2F28F3_0_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethIcons';src: url('webfonts/2F28F3_1_0.eot');src: url('webfonts/2F28F3_1_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_1_0.woff2') format('woff2'),url('webfonts/2F28F3_1_0.woff') format('woff'),url('webfonts/2F28F3_1_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethThin';src: url('webfonts/2F28F3_2_0.eot');src: url('webfonts/2F28F3_2_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_2_0.woff2') format('woff2'),url('webfonts/2F28F3_2_0.woff') format('woff'),url('webfonts/2F28F3_2_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethCleanRegular';src: url('webfonts/2F28F3_3_0.eot');src: url('webfonts/2F28F3_3_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_3_0.woff2') format('woff2'),url('webfonts/2F28F3_3_0.woff') format('woff'),url('webfonts/2F28F3_3_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethShadow';src: url('webfonts/2F28F3_4_0.eot');src: url('webfonts/2F28F3_4_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_4_0.woff2') format('woff2'),url('webfonts/2F28F3_4_0.woff') format('woff'),url('webfonts/2F28F3_4_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethRegular';src: url('webfonts/2F28F3_5_0.eot');src: url('webfonts/2F28F3_5_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_5_0.woff2') format('woff2'),url('webfonts/2F28F3_5_0.woff') format('woff'),url('webfonts/2F28F3_5_0.ttf') format('truetype');}*/
@font-face {font-family: 'EvelethLight';src: url('webfonts/2F28F3_6_0.eot');src: url('webfonts/2F28F3_6_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_6_0.woff2') format('woff2'),url('webfonts/2F28F3_6_0.woff') format('woff'),url('webfonts/2F28F3_6_0.ttf') format('truetype');}
/*@font-face {font-family: 'EvelethCleanThin';src: url('webfonts/2F28F3_7_0.eot');src: url('webfonts/2F28F3_7_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_7_0.woff2') format('woff2'),url('webfonts/2F28F3_7_0.woff') format('woff'),url('webfonts/2F28F3_7_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethCleanShadow';src: url('webfonts/2F28F3_8_0.eot');src: url('webfonts/2F28F3_8_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_8_0.woff2') format('woff2'),url('webfonts/2F28F3_8_0.woff') format('woff'),url('webfonts/2F28F3_8_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethRegular-Bold';src: url('webfonts/2F28F3_9_0.eot');src: url('webfonts/2F28F3_9_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_9_0.woff2') format('woff2'),url('webfonts/2F28F3_9_0.woff') format('woff'),url('webfonts/2F28F3_9_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethDotRegular-Bold';src: url('webfonts/2F28F3_A_0.eot');src: url('webfonts/2F28F3_A_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_A_0.woff2') format('woff2'),url('webfonts/2F28F3_A_0.woff') format('woff'),url('webfonts/2F28F3_A_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethDotLight';src: url('webfonts/2F28F3_B_0.eot');src: url('webfonts/2F28F3_B_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_B_0.woff2') format('woff2'),url('webfonts/2F28F3_B_0.woff') format('woff'),url('webfonts/2F28F3_B_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethDotRegular';src: url('webfonts/2F28F3_C_0.eot');src: url('webfonts/2F28F3_C_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_C_0.woff2') format('woff2'),url('webfonts/2F28F3_C_0.woff') format('woff'),url('webfonts/2F28F3_C_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethSlantRegular-Bold';src: url('webfonts/2F28F3_D_0.eot');src: url('webfonts/2F28F3_D_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_D_0.woff2') format('woff2'),url('webfonts/2F28F3_D_0.woff') format('woff'),url('webfonts/2F28F3_D_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethSlantLight';src: url('webfonts/2F28F3_E_0.eot');src: url('webfonts/2F28F3_E_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_E_0.woff2') format('woff2'),url('webfonts/2F28F3_E_0.woff') format('woff'),url('webfonts/2F28F3_E_0.ttf') format('truetype');}*/
/*@font-face {font-family: 'EvelethSlantRegular';src: url('webfonts/2F28F3_F_0.eot');src: url('webfonts/2F28F3_F_0.eot?#iefix') format('embedded-opentype'),url('webfonts/2F28F3_F_0.woff2') format('woff2'),url('webfonts/2F28F3_F_0.woff') format('woff'),url('webfonts/2F28F3_F_0.ttf') format('truetype');}*/
@font-face {font-family: 'avenir'; src: url('webfonts/avenirltstd-book.otf');}


/*body .frontend,*/
/*html .frontend {*/
	/*font-family: 'Gibson-Regular';*/
	/*font-size: 14px;*/
	/*line-height: 18px;*/
/*}*/

/*html .frontend .bold{*/
	/*font-family: 'Gibson-SemiBold';*/
	/*font-weight: normal;*/
/*}*/

/*html.noscroll {*/
	/*position: fixed;*/
  /*overflow-y: scroll;*/
  /*width: 100%;*/
/*}*/

/*body{overflow-x: hidden;}*/

a,
a:focus,
a:hover,
a:active{
	outline: 0;
	text-decoration: none;
}

.frontend h2,
.frontend h3,
.frontend h4,
.frontend h5,
.frontend h6,
.frontend em,
.frontend .font,
.frontend .h2,
.frontend .h3,
.frontend .h4 {
	font-family: 'Gibson-SemiBold';
	font-weight: normal;
	margin: 0;
}

.full-no-space{
	min-height: 1px;
	width: 100%;
	float: left;
}

/*#page_bg{*/
	/*width: 100%;*/
	/*height: 100%;*/
	/*position: relative;*/
/*}*/

/*.page_bg_link{*/
	/*position: absolute;*/
	/*top: 0;*/
	/*left: 0;*/
	/*width: 0;*/
	/*height: 0;*/
	/*cursor: pointer;*/
	/*display: inline-block;*/
/*}*/
/*.page_bg_link.right{*/
	/*right: 0;*/
	/*left: auto;*/
/*}*/

#page_bg_sound {display: none;}

#hidden-area{display: none !important;}

.ui-loader,
#layer_wrapper{display: none;}

#touchgame{
	border:0;
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	margin:0;
	padding:0;
	z-index: 110;
}
#touchgameexit {
    background-color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: fixed;
    top: 3px;
    right: 3px;
    z-index: 111;
    cursor: pointer;
}
#touchgameexit:before,
#touchgameexit:after {
    content: "";
    display: block;
    width: 38px;
    height: 4px;
    border-radius: 120px;
    background-color: #f08600;
}
#touchgameexit:before {
    transform: rotate(45deg) translate(16px, -1.5px);
    transform-origin: 0 0;
}
#touchgameexit:after {
    transform: rotate(135deg) translate(44px, -7px);
    transform-origin: 100% 0%;
}

/*.container>.row{position: relative;}*/

.whiteborder{
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}

/* Extra small devices (phones, less than 768px) */
/* No media query since this is the default in Bootstrap */

/*!* Navi *!*/
/*.navbar>.container{position: relative;}*/
/*.navbar{margin-bottom: 10px;}*/
/*.navbar .navbar-collapse{*/
	/*border: none;*/
	/*top: 0;*/
	/*left: -255px;*/
	/*width: 250px;*/
	/*height: 100%;*/
	/*padding-top: 66px;*/
	/*position: fixed;*/
	/*z-index: 990;*/
	/*!* Bootstrap-Setting überschreiben; immer sichtbar *!*/
	/*display:block;*/
	/*background: url(https://media.toggo.de/imagestatic/mobile-bg.jpg) no-repeat scroll center bottom transparent;*/

	/*-webkit-transition: left ease 0.3s;*/
	/*-moz-transition: left ease 0.3s;*/
	/*-o-transition: left ease 0.3s;*/
	/*transition: left ease 0.3s;*/
/*}*/
/*.navbar .navbar-collapse.in{*/
	/*left: 0;*/
/*}*/
/*.container>div.navbar-header{*/
	/*text-align: center;*/
	/*margin: 0;*/
	/*position:fixed;*/
	/*z-index: 991;*/
	/*width: 100%;*/
	/*top: 0;*/
	/*left: 0;*/
	/*-webkit-box-shadow: 0px 3px 3px -1px rgba(128,128,128,0.75);*/
	/*-moz-box-shadow: 0px 3px 3px -1px rgba(128,128,128,0.75);*/
	/*box-shadow: 0px 3px 3px -1px rgba(128,128,128,0.75);*/
/*}*/
/*.container>div.navbar-header>.navbar-header-pattern{*/
	/*width: 100%;*/
	/*height: 100%;*/
	/*background: url(https://media.toggo.de/imagestatic/mobile_pattern.png) repeat scroll 0 0;*/
/*}*/

/*.navbar-toggle{*/
	/*margin: 0;*/
	/*padding: 5px 0 0 10px;*/
	/*float: left;*/
/*}*/
/*.navbar-toggle:after{*/
	/*content: '';*/
	/*display: inline-block;*/
	/*background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);*/
	/*background-repeat: no-repeat;*/
	/*background-position: -973px 0;*/
	/*width: 50px;*/
	/*height: 50px;*/
	/*!*position: absolute;*/
	/*left: 1px;*/
	/*top: 16px;*!*/
/*}*/
/*.navbar-toggle.in:after{*/
	/*background-position: -1044px 0;*/
/*}*/

/*.navbar-toggle .icon-bar{*/
	/*width: 35px;*/
	/*height: 6px;*/
	/*-webkit-border-radius: 3px;*/
	/*-moz-border-radius: 3px;*/
	/*border-radius: 3px;*/
/*}*/

/*.navbar-brand{*/
	/*float:none;*/
	/*height: auto;*/
	/*padding: 0;*/
	/*margin: 0 auto;*/
	/*display: block;*/
	/*width: 119px;*/
	/*height: 65px;*/
/*}*/
/*.navbar-brand>span{*/
  /*display: inline-block;*/
  /*width: 119px;*/
  /*height: 65px;*/
/*}*/
/*ul.navbar-nav,*/
/*.navbar-header,*/
/*.navbar-sticky-header {*/
	/*background: #ffffff;*/
	/*background: -moz-linear-gradient(top, #ffffff 0%, #eeeeee 100%);*/
	/*background: -webkit-linear-gradient(top, #ffffff 0%,#eeeeee 100%);*/
	/*background: linear-gradient(to bottom, #ffffff 0%,#eeeeee 100%);*/
	/*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );*/
/*}*/
/*.navbar-nav{*/
	/*margin-top:0;*/
	/*margin-bottom:10px;*/
/*}*/
/*.navbar-nav>li {*/
	/*text-align: center;*/
	/*background: url(https://media.toggo.de/imagestatic/mobile_pattern.png) repeat transparent;*/
	/*padding-top: 10px;*/
	/*border-top: 1px #f2f2f2 solid;*/
	/*border-bottom: 1px #dbdbdb solid;*/
/*}*/
/*.navbar-nav>li:hover:not(.active){*/
	/*background-color: transparent;*/
/*}*/
/*.navbar-nav>li>a{*/
	/*padding: 0 0 10px 30px;*/
	/*margin: 0;*/
	/*position: relative;*/
	/*display: inline-block;*/
	/*line-height: 1;*/
	/*width: 100%;*/
	/*height: 100%;*/
	/*background-color: transparent !important;*/
/*}*/
/*.navbar-nav>li>a:visited,*/
/*.navbar-nav>li>a:active,*/
/*.navbar-nav>li>a:focus,*/
/*.navbar-nav>li>a:hover{*/
	/*text-decoration: none;*/
/*}*/
/*.navbar-nav>li>a .nav-mobile {*/
	/*margin-top: 10px;*/
	/*display:table;*/
/*}*/
/*.navbar-nav>li>a .nav-mobile i,*/
/*.navbar-nav>li>a .nav-mobile .text {*/
	/*display:table-cell;*/
	/*vertical-align: middle;*/
/*}*/
/*.navbar-nav>li.active>a .nav-mobile i.ico-small {*/
	/*background-position: -326px -230px;*/
/*}*/
/*.navbar-nav>li>a .nav-mobile .text {*/
	/*text-transform: uppercase;*/
	/*font-family: 'Gibson-Bold';*/
	/*font-size: 22px;*/
/*}*/
/*.navbar-nav>li.active{*/
	/*background-image: none;*/
/*}*/
/*.navbar-nav>li.active .text{*/
	/*color: #fff;*/
/*}*/
/*.sticky-only {*/
	/*display:none;*/
/*}*/

/*.navbar-sticky-header {*/
	/*position:fixed;*/
	/*top:-70px;*/
	/*max-width:940px;*/
	/*width:100%;*/
	/*margin: 0 auto;*/
	/*display: inline-block;*/
	/*border-radius: 0 0 10px 10px;*/
	/*z-index: 900;*/
	/*-webkit-box-shadow: 0px 3px 3px -1px rgba(128,128,128,0.75);*/
	/*-moz-box-shadow: 0px 3px 3px -1px rgba(128,128,128,0.75);*/
	/*box-shadow: 0px 3px 3px -1px rgba(128,128,128,0.75);*/

	/*-webkit-transition: top ease 0.3s;*/
	/*-moz-transition: top ease 0.3s;*/
	/*-o-transition: top ease 0.3s;*/
	/*transition: top ease 0.3s;*/
/*}*/
/*.navbar-sticky-header.in {*/
	/*top:0;*/
/*}*/
/*.navbar-sticky-header>ul {*/
	/*background: url(https://media.toggo.de/imagestatic/mobile_pattern.png) repeat transparent;*/
	/*!*display: flex;*/
	/*flex-direction: row;*!*/
	/*display: table;*/
	/*margin: 0;*/
	/*padding: 0;*/
	/*width: 100%;*/
	/*table-layout: fixed;*/
/*}*/
/*.navbar-sticky-header>ul>li {*/
	/*list-style: none;*/
	/*flex-grow: 1;*/
	/*text-align: center;*/
	/*position: relative;*/
	/*padding: 0;*/
	/*border-left: 1px #f2f2f2 solid;*/
	/*border-right: 1px #dbdbdb solid;*/
	/*width: 17%;*/
	/*display: table-cell;*/
/*}*/
/*.navbar-sticky-header>ul>li:first-child { border-left: none; }*/
/*.navbar-sticky-header>ul>li:last-child { border-right: none; }*/
/*.navbar-sticky-header>ul>li>a {*/
	/*height: 30px;*/
	/*display: block;*/
	/*font-family: 'Gibson-Bold';*/
	/*text-transform: uppercase;*/
	/*font-size: 20px;*/
	/*background: none;*/
/*}*/
/*.navbar-sticky-header>ul>li>a>.sticky-only{*/
	/*display:block;*/
/*}*/
/*.navbar-sticky-header>ul>li:hover>a>.sticky-only,*/
/*.navbar-sticky-header>ul>li.active>a>.sticky-only {*/
	/*color: #ffffff !important;*/
/*}*/
/*.navbar-sticky-header>ul>li.branding>a {*/
	/*background: url(https://media.toggo.de/imagestatic/toggo-logo-sticky-navi.png) no-repeat center center;*/
	/*position: relative;*/
	/*top: 7px;*/
/*}*/

.bcWrapper{
	width: 910px;
	position: relative;
	margin: 0 auto;
}

/*.bc .bcWrapper .holder-ad {*/
    /*background-color: #d2e6e7;*/
    /*border: 4px solid #346166;*/
    /*position: relative;*/
    /*margin-top:10px;*/
    /*margin-bottom:10px;*/
    /*height: 258px;*/
    /*display: none;*/
/*}*/

.bcWrapper .bannerMakerBillboard.left
{
	display: inline-block;
    position: absolute;
    top: 25%;
    left: 6px;
}
.bcWrapper .bannerMakerBillboard.right
{
	display: inline-block;
    position: absolute;
    top: 25%;
    right: 6px;
}
/* Subnavi */
/*#subnav{*/
	/*position: relative;*/
	/*margin-top: -5px;*/
	/*height: 80px;*/
	/*-webkit-box-shadow: 3px 4px 5px -2px rgba(93,38,38,0.4);*/
	/*-moz-box-shadow: 3px 4px 5px -2px rgba(93,38,38,0.4);*/
	/*box-shadow: 3px 4px 5px -2px rgba(93,38,38,0.4);*/
	/*-webkit-border-radius: 10px;*/
	/*-moz-border-radius: 10px;*/
	/*border-radius: 10px;*/
	/*-webkit-border-top-right-radius: 35px;*/
	/*-moz-border-top-right-radius: 35px;*/
	/*border-top-right-radius: 35px;*/
	/*margin-top: 80px;*/
/*}*/
/*#subnav .arrow{*/
	/*width: 30px;*/
	/*height: 65px;*/
	/*position: absolute;*/
	/*bottom: 0;*/
	/*background-color: #fff;*/
	/*cursor: pointer;*/
/*}*/
/*#subnav .arrow.left{*/
	/*left: 0;*/
	/*-webkit-border-top-left-radius: 10px;*/
	/*-webkit-border-bottom-left-radius: 10px;*/
	/*-moz-border-radius-topleft: 10px;*/
	/*-moz-border-radius-bottomleft: 10px;*/
	/*border-top-left-radius: 10px;*/
	/*border-bottom-left-radius: 10px;*/
/*}*/
/*#subnav .arrow.right{*/
	/*right: 0;*/
	/*-webkit-border-top-right-radius: 10px;*/
	/*-webkit-border-bottom-right-radius: 10px;*/
	/*-moz-border-radius-topright: 10px;*/
	/*-moz-border-radius-bottomright: 10px;*/
	/*border-top-right-radius: 10px;*/
	/*border-bottom-right-radius: 10px;*/
/*}*/
/*#subnav .arrow:after{*/
	/*content: '';*/
	/*display: inline-block;*/
	/*position: absolute;*/
	/*background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);*/
	/*background-repeat: no-repeat;*/
	/*background-position: -398px 0;*/
	/*width: 27px;*/
	/*height: 33px;*/
	/*left: 1px;*/
	/*top: 16px;*/
/*}*/
/*#subnav .arrow.right:after{*/
	/*-webkit-transform: rotate(180deg);*/
	/*-ms-transform: rotate(180deg);*/
	/*transform: rotate(180deg);*/
/*}*/
/*#subnav .viewport{*/
	/*overflow: hidden;*/
	/*position: absolute;*/
	/*bottom: 0;*/
	/*left: 0;*/
	/*width: 100%;*/
	/*height: 80px;*/
	/*padding: 0 30px;*/
/*}*/
/*#subnav .map-wrapper{*/
	/*overflow: hidden;*/
	/*position: relative;*/
	/*width: 100%;*/
	/*height: 80px;*/
/*}*/
/*#subnav .map-wrapper:before{*/
	/*content: '';*/
	/*position: absolute;*/
	/*bottom: 0;*/
	/*left: 0;*/
	/*background-color: #fff;*/
	/*width: 100%;*/
	/*height: 65px;*/
/*}*/
/*#subnav .map-wrapper:after{*/
	/*content: '';*/
	/*position: absolute;*/
	/*left: 0;*/
	/*bottom: 0;*/
	/*overflow: hidden;*/
	/*position: relative;*/
	/*width: 100%;*/
	/*height: 70px;*/
/*}*/
/*#subnav .map{*/
	/*width: 9999999px;*/
	/*position: absolute;*/
	/*top: 0;*/
	/*left: 0;*/
/*}*/
/*#subnav .map a{*/
	/*display: block;*/
	/*float: left;*/
	/*position: relative;*/
	/*margin: -5px 10px 0 0;*/
/*}*/
/*#subnav .map a .normal,*/
/*#subnav .map a .hover{*/
	/*-webkit-transition: all ease 0.3s;*/
	/*-moz-transition: all ease 0.3s;*/
	/*-o-transition: all ease 0.3s;*/
	/*transition: all ease 0.3s;*/
/*}*/
/*#subnav .map a .hover{*/
	/*position: absolute;*/
	/*top: 0;*/
	/*left: 0;*/
	/*opacity: 0;*/
/*}*/
/*#subnav .map a:hover .normal{*/
	/*opacity: 0;*/
/*}*/
/*#subnav .map a:hover .hover{*/
	/*opacity: 1;*/
/*}*/

/*!* Breadcrumb *!*/
/*#breadcrumb{padding:0 3px;}*/
/*#breadcrumb>div{ float: left;}*/
/*#breadcrumb.white_breadcrumb .item a,*/
/*#breadcrumb.white_breadcrumb .item a:hover{*/
	/*color: #fff;*/
/*}*/
/*#breadcrumb .item a,*/
/*#breadcrumb .item a:hover{*/
	/*text-decoration: none;*/
	/*color: #E83F05;*/
	/*display: inline-block;*/
	/*margin-left: 10px;*/
/*}*/
/*#breadcrumb .item a:hover{*/
	/*text-decoration: underline;*/
/*}*/
/*#breadcrumb h2{*/
	/*font-size: 15px;*/
	/*font-family: 'Gibson-Regular';*/
/*}*/

/*#breadcrumb .item h2:before{*/
	/*content: '';*/
	/*width: 11px;*/
	/*height: 11px;*/
	/*background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);*/
	/*background-repeat: no-repeat;*/
	/*background-position: -376px -5px;*/
	/*display: inline-block;*/
	/*margin-right: 10px;*/
/*}*/
/*#breadcrumb.white_breadcrumb .item h2:before{*/
	/*background-position: -376px -50px;*/
/*}*/

/*#breadcrumb-l1>a:before{*/
	/*content: '';*/
	/*width: 18px;*/
	/*height: 18px;*/
	/*background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);*/
	/*background-repeat: no-repeat;*/
	/*background-position: -338px -3px;*/
	/*display: inline-block;*/
/*}*/

/*#breadcrumb.white_breadcrumb #breadcrumb-l1>a:before {*/
	/*background-position: -338px -48px;*/
/*}*/


/* Footer */
/*footer{*/
	/*position: relative;*/
	/*background-color: #f4cd68;*/
	/*background-image: url(https://media.toggo.de/imagestatic/footer-bg.jpg);*/
	/*background-repeat: no-repeat;*/
	/*background-position: bottom center;*/
	/*overflow-x: hidden;*/
/*}*/

.jsAnimateTop{cursor: pointer;}
/*.holder.rubric.toTop{*/
	/*background-image: url(https://media.toggo.de/imagestatic/spielekacheln.jpg);*/
	/*background-repeat: repeat;*/
	/*padding: 0!important;*/
	/*position: relative;*/
/*}*/
/*.holder.rubric.toTop h2{font-size: 20px;}*/
/*.holder.rubric.toTop h2{*/
	/*text-align: center;*/
	/*color:#fff;*/
	/*text-transform: uppercase;*/
	/*font-size: 33px;*/
	/*margin: 10px 0;*/
	/*text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);*/
/*}*/
/*.holder.rubric.toTop:before,*/
/*.holder.rubric.toTop:after {*/
	/*content: '';*/
	/*display: inline-block;*/
	/*position: absolute;*/
	/*background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);*/
	/*background-repeat: no-repeat;*/
	/*background-position: -750px 0;*/
	/*width: 35px;*/
	/*height: 27px;*/
	/*top: 50%;*/
	/*margin-top: -16px;*/
/*}*/
/*.holder.rubric.toTop:before {left: 15px;}*/
/*.holder.rubric.toTop:after {right: 15px;}*/

/*.footertext {padding: 20px 0 10px 0;}*/
/*.footertext>.container{position: relative;}*/
/*.footertext .row {padding: 15px 0;}*/
/*.footertext h1 {*/
	/*font-family: 'Gibson-Bold';*/
	/*font-weight: normal;*/
	/*color: #eb550f;*/
	/*text-align:center;*/
	/*text-transform: uppercase;*/
	/*font-size: 36px;*/
/*}*/
/*.footertext .container h1 + h2 {*/
	/*text-align: center;*/
	/*color: #eb550f;*/
	/*font-size: 24px;*/
/*}*/
/*.footerHide {*/
	/*display: none;*/
	/*font-size: 16px;*/
/*}*/
/*.footertext h2,*/
/*.footertext .h2,*/
/*.footerHide h3,*/
/*.footerHide .h3{*/
	/*color: #eb550f;*/
	/*line-height: 26px;*/
	/*margin-bottom: 25px;*/
/*}*/
/*.footerHide h3,*/
/*.footerHide .h3{*/
	/*font-size: 20px;*/
	/*font-weight: bold;*/
	/*text-shadow:none;*/
	/*margin-bottom: 0;*/
/*}*/
/*.show {display: block;}*/
/*.hide {display: none;}*/
/*.footertext a.footerTrigger{*/
	/*width: 100px;*/
	/*height: 100px;*/
	/*display: block;*/
	/*position: relative;*/
	/*margin: 0 auto;*/
/*}*/
/*.footertext a.footerTrigger:before,*/
/*.footertext a.footerTrigger:after{*/
	/*content:'';*/
	/*width: 100px;*/
	/*height: 100px;*/
	/*display: block;*/
	/*background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);*/
	/*background-repeat: no-repeat;*/
	/*position: absolute;*/
	/*top: 0;*/
	/*left: 0;*/
	/*-webkit-transition: opacity ease 0.3s;*/
	/*-moz-transition: opacity ease 0.3s;*/
	/*-o-transition: opacity ease 0.3s;*/
	/*transition: opacity ease 0.3s;*/

/*}*/
/*.footertext a.footerTrigger:before{*/
	/*opacity: 1;*/
	/*background-position: -104px 0;*/
/*}*/
/*.footertext a.footerTrigger:after{*/
	/*opacity: 0;*/
	/*background-position: -216px 0;*/
/*}*/
/*.footertext a.footerTrigger.activated:before{opacity: 0;}*/
/*.footertext a.footerTrigger.activated:after{opacity: 1;}*/
/*.footerSpacer{*/
	/*background: -moz-linear-gradient(left, rgba(255,205,2,0) 0%, rgba(255,121,29,1) 50%, rgba(255,205,2,0) 100%);*/
	/*background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,205,2,0)), color-stop(50%,rgba(255,121,29,1)), color-stop(100%,rgba(255,205,2,0)));*/
	/*background: -webkit-linear-gradient(left, rgba(255,205,2,0) 0%,rgba(255,121,29,1) 50%,rgba(255,205,2,0) 100%);*/
	/*background: -o-linear-gradient(left, rgba(255,205,2,0) 0%,rgba(255,121,29,1) 50%,rgba(255,205,2,0) 100%);*/
	/*background: -ms-linear-gradient(left, rgba(255,205,2,0) 0%,rgba(255,121,29,1) 50%,rgba(255,205,2,0) 100%);*/
	/*background: linear-gradient(to right, rgba(255,205,2,0) 0%,rgba(255,121,29,1) 50%,rgba(255,205,2,0) 100%);*/
	/*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffcd02', endColorstr='#00ffcd02',GradientType=1 );*/
	/*margin: 0 auto;*/
	/*max-width: 700px;*/
/*}*/
/*.footerSpacerSize2{height: 2px;}*/
/*.footerSpacerSize1{height: 1px;}*/
/*.footerBrand {padding: 10px 0 25px 0;}*/
/*.footerBrand ul {*/
	/*max-width: 600px;*/
	/*margin:0 auto;*/
	/*position: relative;*/
	/*padding: 0;*/
/*}*/
/*.footerBrand ul li {list-style: none;}*/
/*.footerBrand ul li a img {*/
	/*width: 100%;*/
	/*max-width: 147px;*/
/*}*/

/*.footerLinks {padding: 30px 0 70px 0;}*/
/*.footerLinks ul {*/
	/*padding: 0;*/
	/*display: inline-block;*/
	/*overflow: hidden;*/
/*}*/
/*.footerLinks ul li {*/
	/*list-style: none;*/
	/*float: none;*/
	/*margin-bottom: 10px;*/
/*}*/
/*.footerLinks ul li:last-child {margin:0;}*/
/*.footerLinks ul li a {*/
	/*font-size: 14px;*/
	/*color: #ff8d17;*/
	/*text-decoration: none;*/
/*}*/
/*.footerLinks ul li a:hover {text-decoration: underline;}*/
/*.footerLinks .copyright{*/
	/*color: #777;*/
	/*font-size: 12px;*/
/*}*/

/*.footerLinks .container {position: relative;}*/
/*footer .anchorToTop{*/
	/*position: absolute;*/
	/*top: 8px;*/
	/*right: 0;*/
/*}*/
/*footer .anchorToTop:before{*/
	/*content: '';*/
	/*display: block;*/
	/*width: 100px;*/
	/*height: 100px;*/
	/*background-repeat: no-repeat;*/
	/*background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);*/
	/*background-position: 0 0;*/
/*}*/

/* FadeArea */
.fadeitem,.fadesubhide{display: none;}
.fadeiteminvisible{opacity: 0;}

/* Rubric Container */
/*.holder.rubric{*/
	/*position: relative;*/
	/*background-repeat: repeat;*/
	/*background-position: top center;*/
	/*margin: 0;*/
	/*padding: 20px 0;*/
/*}*/

/*.holder.rubric .headline{*/
	/*margin: -20px 0;*/
	/*position: relative;*/
/*}*/
/*.holder.rubric .headline .bigicon{*/
	/*display: inline-block;*/
	/*-webkit-transform: scale(0.5);*/
	/*-ms-transform: scale(0.5);*/
	/*transform: scale(0.5);*/
	/*margin-left: -30px;*/
/*}*/
/*.holder.rubric .headline h2{*/
	/*font-family: "EvelethLight";*/
	/*color:#fff;*/
	/*line-height: 1;*/
	/*position: absolute;*/
	/*top: 0;*/
	/*bottom: 0;*/
	/*margin: auto 0;*/
	/*font-size: 40px;*/
	/*height: auto;*/
	/*left: 90px;*/
	/*margin-right: 90px;*/
	/*display: table;*/
	/*vertical-align: middle;*/
/*}*/
/*.holder.rubric .container{position: relative;}*/

.teaser_wrapper{
	position: relative;
}

.teaser_wrapper.float0{
	float: none;
}
.teaser_wrapper.float1{
	float: left;
}
.teaser_wrapper.float2{
	float: right;
}

/*section{overflow: hidden;}*/

/* Teaser-Space */
/*.holder{magin-bottom: 15px;}*/
/*.holder.nospace{margin-bottom: 0;}*/
.holder .row>div,
.holder .row>.fadearea>div,
.holder .row .subTile>div { margin: 5px 0; }

.holder .categoryTeaserWrapper .row>div,
.holder .categoryTeaserWrapper .row>.fadearea>div,
.holder .categoryTeaserWrapper .row .subTile>div { margin: 0 0 2.5px 0; }

/* Holder Rubric-Footer */
.holder.rubric-programm{
	position: relative;
	background-repeat: repeat;
	margin: 0;
	padding: 20px 0;
}
.holder.rubric-programm h2{
	text-align: center;
	color:#fff;
	text-transform: uppercase;
	font-size: 35px;
	margin: 10px 0;
	text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
}
.holder.rubric-programm{background-image: url(https://media.toggo.de/imagestatic/pattern_programm.jpg);}

/* JW-Player */
.sound {
	border-radius: 15px;
	overflow: hidden;
	border: 4px #ffffff solid;
}

.jwcontrols .jwdisplay .jwdisplayIcon {
	height: 99px !important;
	margin-top: -65px !important;
}

.tile_wrapper.col-sm-6 .jwcontrols .jwdisplay .jwdisplayIcon .jwicon {
	background-size: 50px !important;
	top: -5px;
}
.tile_wrapper.col-md-6 .jwcontrols .jwdisplay .jwdisplayIcon .jwicon {
	background-size: 60px 61px !important;
	top: -5px;
}

.jwcontrolbar {
	height: 58px !important;
	bottom: 5px !important;
	/*display: inline-block !important;
	opacity: 1 !important;*/
}

.jwbackground, .jwcapLeft, .jwcapRight:not(.jwtimeSliderBufferCapRight):not(.jwtimeSliderRailCapRight) {
	background: none transparent !important;
}

.jwgroup.jwleft {
	padding-top:7px !important;
}
.jwgroup.jwright{
	padding-top: 5px !important;
}
.jwgroup.jwcenter {
	padding-top:2px !important;
}
.jwmute {
	display:none;
}
.jwplay, .jwmute {
	width: 52px !important;
}
.jwtext.jwelapsed, .jwtext.jwduration {
	color: #EC5624 !important;
	font-size: 12px !important;
	padding-top: 11px !important;
}
.jwtext.jwduration {
	padding-top: 13px !important;
}

/* Video-Player */
.rtliVideoWrapper.full {
	border-radius: 15px;
}
.rtliVideoWrapper.border .mejs-mediaelement, .rtliVideoWrapper.full .mejs-mediaelement{
	border-radius: 15px;
	overflow: hidden;
	border: 4px solid;
	background-color: #ffffff;
	background-color: rgba(255,255,255,0.5);
}

.rtliVideoWrapper .mejs-container {
	background: none transparent;
}

.mejs-overlay-button {
	background: url(/img/2018/icons/icon_play.svg) no-repeat 0 0;
	width: 115px;
	height: 115px;
	z-index: 2;
}
/*.mejs-overlay-button:hover {*/
/*	background-position: 0 -115px;*/
/*}*/

.mejs-overlay-play .mejs-overlay-button {
	margin: -43px 0 0 -57px !important;
}
.mejs-overlay-play .play-background,
.mejs-overlay-play .play-background2 {
	width: 115px;
	height: 138px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -55px 0 0 -59px !important;
	border-radius: 20px;
	z-index:1;
	opacity: 0.75;
}
.mejs-overlay-play .play-background2
{
	margin: -55px 0 0 -47px !important;
}
.rtliVideoWrapper .mejs-video .mejs-controls {
	bottom: -40px !important;
	background: none transparent !important;
}
.rtliVideoWrapper .mejs-video.mejs-container-fullscreen .mejs-controls {
	bottom: 24px !important;
}

.rtliVideoWrapper .mejs-video .mejs-controls .mejs-button {
	width: 50px;
	height: 52px;
}
.rtliVideoWrapper .mejs-video .mejs-controls .mejs-button .small-background{
	border-radius: 80px;
	width: 32px;
	height: 37px;
	margin-left: 8px;
	margin-top: 5px;
}
.rtliVideoWrapper .mejs-video .mejs-controls .mejs-button button {
	width: 50px;
	height: 52px;
	background: transparent url(https://media.toggo.de/imagestatic/videoplayer/controls.png) no-repeat;
	margin: 0;
}
.rtliVideoWrapper .mejs-video .mejs-playpause-button.mejs-play button {
	background-position: 0 0;
}
.rtliVideoWrapper .mejs-video .mejs-playpause-button.mejs-play:hover button {
	background-position: -50px 0;
}
.rtliVideoWrapper .mejs-video .mejs-playpause-button.mejs-pause button {
	background-position: -100px 0;
}
.rtliVideoWrapper .mejs-video .mejs-playpause-button.mejs-pause:hover button {
	background-position: -150px 0;
}
.rtliVideoWrapper .mejs-video .mejs-stop-button.mejs-stop button {
	background-position: -200px 0;
}
.rtliVideoWrapper .mejs-video .mejs-stop-button.mejs-stop:hover button {
	background-position: 0 -52px;
}
.rtliVideoWrapper .mejs-video .mejs-volume-button.mejs-mute button {
	background-position: -50px -52px;
}
.rtliVideoWrapper .mejs-video .mejs-volume-button.mejs-mute:hover button {
	background-position: -100px -52px;
}
.rtliVideoWrapper .mejs-video .mejs-volume-button.mejs-unmute button {
	background-position: -150px -52px;
}
.rtliVideoWrapper .mejs-video .mejs-volume-button.mejs-unmute:hover button {
	background-position: -200px -52px;
}
.rtliVideoWrapper .mejs-video .mejs-button.mejs-fullscreen-button button {
	background-position: 0 -104px;
}
.rtliVideoWrapper .mejs-video .mejs-fullscreen-button:hover button {
	background-position: -50px -104px;
}
.rtliVideoWrapper .mejs-video .mejs-fullscreen-button.mejs-unfullscreen button {
	background-position: -100px -104px;
}
.rtliVideoWrapper .mejs-video .mejs-fullscreen-button.mejs-unfullscreen:hover button {
	background-position: -150px -104px;
}

.rtliVideoWrapper .mejs-video .mejs-controls div.mejs-time-rail {
	padding-top: 6px;
	height: 45px;
}

.rtliVideoWrapper .mejs-video .mejs-controls div.mejs-time-rail .mejs-time-total {
	background: url('https://media.toggo.de/imagestatic/videoplayer/timeline.png') repeat-x transparent;
	height: 25px;
	border-left: 4px outset #ffffff;
	border-right: 4px inset #ffffff;
}

.rtliVideoWrapper .mejs-video .mejs-controls div.mejs-time-rail .mejs-time-buffering,
.rtliVideoWrapper .mejs-video .mejs-controls div.mejs-time-rail .mejs-time-loaded {
	margin-top: 3px;
	height: 19px;
}

.rtliVideoWrapper .mejs-video .mejs-controls div.mejs-time-rail .mejs-time-current {
	background: url('https://media.toggo.de/imagestatic/videoplayer/timelineProgress.png') repeat-x transparent;
	height: 25px;
}

.rtliVideoWrapper .mejs-video .mejs-controls div.mejs-time {
	font-size: 16px;
	padding-top: 20px;
}

.rtliVideoWrapper .mejs-video .mejs-controls .mejs-volume-button .mejs-volume-slider {
	background: none transparent;
	left: 12px;
	width: 21px;
	border-top: 2px solid #F2EDFF;
	border-bottom: 2px solid #F2EDFF;
	height: 104px;
	top: -103px;

}
.rtliVideoWrapper .mejs-video .mejs-controls .mejs-volume-button .mejs-volume-total {
	background: url('https://media.toggo.de/imagestatic/videoplayer/volume.png') repeat-y transparent;
	width:21px;
	left: 0;
	top:0;
}
.rtliVideoWrapper .mejs-video .mejs-controls .mejs-volume-button .mejs-volume-current {
	background: url('https://media.toggo.de/imagestatic/videoplayer/volumeProgress.png') repeat-y transparent;
	width:21px;
	left: 0;
}
.rtliVideoWrapper .mejs-video .mejs-controls .mejs-volume-button .mejs-volume-handle {
	left: 3px;
	height: 3px;
	width: 15px;
	background: none #d03904;
}

/* urlOut */
#urlOut,
#codesecure{
	text-align:center;
	color:#000;
	padding:30px 15px 10px 15px;
	background-color:#fff;
	font-size:16px;
	line-height:20px;
}

#codesecure .center{
	margin:10px auto;
	width:250px;
}

#urlOut .button,
#codesecure .button{
	display: inline-block;
	position: relative;
	width: 100px;
}

#urlOut .button .textWrapper,
#codesecure .button .textWrapper{
	background-color: #ffbc00;
	font-size: 18px;
	padding: 12px;
	color: #fff;
	display: inline-block;
	border: 3px solid #fff;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	text-transform: uppercase;
	font-family: 'Gibson-SemiBold';
	line-height: 1.3;
	width:100%;
	cursor:pointer;
}

/* Animation */
.ease1{
	-webkit-transition: all ease 0.1s;
	-moz-transition: all ease 0.1s;
	-o-transition: all ease 0.1s;
	transition: all ease 0.1s;
}
.ease2{
	-webkit-transition: all ease 0.2s;
	-moz-transition: all ease 0.2s;
	-o-transition: all ease 0.2s;
	transition: all ease 0.2s;
}
.ease3{
	-webkit-transition: all ease 0.3s;
	-moz-transition: all ease 0.3s;
	-o-transition: all ease 0.3s;
	transition: all ease 0.3s;
}
.ease10{
	-webkit-transition: all ease 1s;
	-moz-transition: all ease 1s;
	-o-transition: all ease 1s;
	transition: all ease 1s;
}
.anim-hover-tilt-left:hover{
	-webkit-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	transform: rotate(-3deg);
}
.anim-hover-tilt-right:hover{
	-webkit-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	transform: rotate(-3deg);
}
.anim-hover-scale-1-05{
	-webkit-transform: perspective(100px);
	transform: perspective(100px);
}
.anim-hover-scale-1-05:hover{
	-ms-transform: scale(1.01);
	-webkit-transform: perspective(100px) translateZ(5px);
	transform: perspective(100px) translateZ(5px);
}
.anim-hover-scale-1-1{
	-webkit-transform: perspective(100px);
	transform: perspective(100px);
}
.anim-hover-scale-1-1:hover{
	-ms-transform: scale(1.1);
	-webkit-transform: perspective(100px) translateZ(10px);
	transform: perspective(100px) translateZ(10px);
}
.anim-pressed{
	-webkit-transform: perspective(100px);
	transform: perspective(100px);
}
.anim-pressed:hover{
	-ms-transform: scale(0.95);
	-webkit-transform: perspective(100px) translateZ(-5px);
	transform: perspective(100px) translateZ(-5px);
}
.anim-hover-spin360:hover{
	-webkit-animation: turn360 0.5s linear 1 !important;
	animation: turn360 0.5s linear 1 !important;
}
.anim-hover-shakeleftright:hover{
	-webkit-animation: shakeleftright 0.2s 3;
	animation: shakeleftright 0.2s 3;
}
.anim-shakeleftright{
	-webkit-animation: shakeleftright 0.2s 3;
	animation: shakeleftright 0.2s 3;
}

.anim-hover-moveleftright:hover{
	-webkit-animation: moveleftright 0.5s linear 1;
	animation: moveleftright 0.5s linear 1;
}

@-webkit-keyframes shakeleftright {
	0%{
		-webkit-transform: rotate(0);
		-ms-transform: rotate(0);
		transform: rotate(0);
	}
	25%{
		-webkit-transform: rotate(-3deg);
		-ms-transform: rotate(-3deg);
		transform: rotate(-3deg);
	}
	50%{
		-webkit-transform: rotate(0);
		-ms-transform: rotate(0);
		transform: rotate(0);
	}
	75%{
		-webkit-transform: rotate(3deg);
		-ms-transform: rotate(3deg);
		transform: rotate(3deg);
	}
	100%{
		-webkit-transform: rotate(0);
		-ms-transform: rotate(0);
		transform: rotate(0);
	}
}
@keyframes shakeleftright {
	0%{
		-webkit-transform: rotate(0);
		-ms-transform: rotate(0);
		transform: rotate(0);
	}
	25%{
		-webkit-transform: rotate(-3deg);
		-ms-transform: rotate(-3deg);
		transform: rotate(-3deg);
	}
	50%{
		-webkit-transform: rotate(0);
		-ms-transform: rotate(0);
		transform: rotate(0);
	}
	75%{
		-webkit-transform: rotate(3deg);
		-ms-transform: rotate(3deg);
		transform: rotate(3deg);
	}
	100%{
		-webkit-transform: rotate(0);
		-ms-transform: rotate(0);
		transform: rotate(0);
	}
}

@-webkit-keyframes scale0to1andturn {
	0%{
		-webkit-transform: rotate(0deg) scale(0);
		-ms-transform: rotate(0deg) scale(0);
		transform: rotate(0deg) scale(0);
	}
	50%{
		-webkit-transform: rotate(160deg) scale(0.5);
		-ms-transform: rotate(160deg) scale(0.5);
		transform: rotate(160deg) scale(0.5);
	}
	100%{
		-webkit-transform: rotate(360deg) scale(1);
		-ms-transform: rotate(360deg) scale(1);
		transform: rotate(360deg) scale(1);
	}
}
@keyframes scale0to1andturn {
	0%{
		-webkit-transform: rotate(0deg) scale(0);
		-ms-transform: rotate(0deg) scale(0);
		transform: rotate(0deg) scale(0);
	}
	50%{
		-webkit-transform: rotate(160deg) scale(0.5);
		-ms-transform: rotate(160deg) scale(0.5);
		transform: rotate(160deg) scale(0.5);
	}
	100%{
		-webkit-transform: rotate(360deg) scale(1);
		-ms-transform: rotate(360deg) scale(1);
		transform: rotate(360deg) scale(1);
	}
}

@-webkit-keyframes turn360 {
	0%{
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	50%{
		-webkit-transform: rotate(160deg);
		-ms-transform: rotate(160deg);
		transform: rotate(160deg);
	}
	100%{
		-webkit-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}
@keyframes turn360 {
	0%{
		-webkit-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	50%{
		-webkit-transform: rotate(160deg);
		-ms-transform: rotate(160deg);
		transform: rotate(160deg);
	}
	100%{
		-webkit-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

/* Medium Small (480px and up) */
@media (min-width: 480px) {
	/*#subnav .arrow{width: 46px;}*/
	/*#subnav .viewport{padding: 0 45px;}*/
	/*#subnav .arrow:after{left: 10px;}*/

	/*.footertext h1 {font-size: 50px;}*/
	/*.footerLinks ul li {*/
		/*float: left;*/
		/*margin-right: 12px;*/
	/*}*/

	.floatfix50{float: left;}

	.holder.rubric.toTop h2{font-size: 30px;}

	.holder.rubric .headline{margin: -10px 0;}
	.holder.rubric .headline .bigicon{
		margin-left: -25px;
		-webkit-transform: scale(0.6);
		-ms-transform: scale(0.6);
		transform: scale(0.6);
	}
	.holder.rubric .headline h2{
		font-size: 50px;
		left: 100px;
		margin-right: 100px;
	}

	.jwmute {
		display:inline;
	}
	.tile_wrapper.col-md-6 .jwcontrols .jwdisplay .jwdisplayIcon .jwicon {
		background-size: 96px 99px !important;
	}
}

@media (min-width: 650px) {
	/*.footerLinks ul li {*/
		/*float: left;*/
		/*margin-right: 50px;*/
	/*}*/
}

/* Landscape Phones */
@media (min-width: 480px) and (max-width: 767px) {
	.landphonefix.col-sm-6,.landphonefix.col-sm-3{
		width: 50%;
		float: left;
		position: relative;
		min-height: 1px;
		padding-left: 10px;
		padding-right: 10px;
	}
	.for_ads .landphonefix.col-sm-3{ width: 25%; }
}

@media (min-width: 480px)
{
	.for_ads .tile_wrapper.col-sm-3.right{float: right !important;}
}

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) {
	/*.footerLinks ul li {*/
		/*margin-right: 80px;*/
	/*}*/

	/*.footerBrand {padding: 40px 0;}*/
	/*.footerBrand ul li {*/
		/*float: left;*/
		/*width: 33%;*/
	/*}*/
	/*.footerBrand ul li:last-child {margin:0;}*/

	.holder.rubric .headline{margin: -5px 0;}
	.holder.rubric .headline .bigicon{
		margin-left: -10px;
		-webkit-transform: scale(0.7);
		-ms-transform: scale(0.7);
		transform: scale(0.7);
	}
	.holder.rubric .headline h2{
		font-size: 65px;
		left: 130px;
		margin-right: 130px;
	}

	/* Holder Rubric-Footer */
	.holder.rubric-programm h2{font-size: 50px;}
	.holder.rubric-programm .bigicon{
		width: 78px;
		height: 45px;
		margin-bottom: -5px;
		margin-right: 15px;
		background-position: -140px 0px;
	}

	/* Teaser-Space */
	.holder .row>div.col-md-6.right,
	.holder .row>.fadearea>div.col-md-6.right { margin-bottom:7px; }

	.holder .categoryTeaserWrapper .row>div.col-md-6.right,
	.holder .categoryTeaserWrapper .row>.fadearea>div.col-md-6.right { margin-bottom:4px; }

	.rtliVideoWrapper .mejs-video .mejs-controls div.mejs-time {
		font-size: 20px;
	}
}

/* Medium devices (desktops, 992px and up) */
@media (min-width: 992px) {
	.teaser_wrapper.position0{
		position: static;
	}
	.teaser_wrapper.position1{
		position: absolute;
	}
	.teaser_wrapper.position2{
		position: relative;
	}

	.tile_wrapper.right{float: right !important;}
	.tile_wrapper.absolute{position: absolute;}

	/* Navi */
	/*.navbar-brand {*/
		/*float:left;*/
		/*margin-right: 10px;*/
		/*width: auto;*/
		/*height: auto;*/
	/*}*/
	/*.navbar-brand>span{*/
		/*width: 180px;*/
		/*height: 99px;*/
	/*}*/
	/*ul.navbar-nav{*/
		/*background: none transparent;*/
		/*filter:none;*/
	/*}*/
	/*.navbar-nav{*/
		/*margin-top: 30px;*/
		/*margin-bottom: 0;*/
	/*}*/
	/*.navbar-nav>li {*/
		/*margin: 0 0 0 5px;*/
		/*background: none;*/
		/*padding-top: 0;*/
		/*border: none;*/
	/*}*/
	/*.navbar-nav>li>a{*/
		/*padding: 0;*/
		/*background-position: -395px -2px;*/
		/*width: 135px;*/
		/*height: 58px;*/
	/*}*/
	/*.navbar-nav>li.active>a,*/
	/*.navbar-nav>li>a:hover{*/
		/*background-position: -560px -2px;*/
		/*width: 135px;*/
		/*height: 58px;*/
	/*}*/

	/*.navbar-nav>li:first-child{margin: 0;}*/

	/*.navbar-nav>li:hover, .navbar-nav>li.active {*/
		/*background-color: transparent;*/
	/*}*/

	/*.navbar .navbar-collapse {*/
		/*height: auto;*/
		/*width: 100%;*/
		/*position: static;*/
		/*top: 0;*/
		/*padding-top: 0;*/
		/*margin-top: -25px;*/
		/*background: none;*/
		/*transform: none;;*/
		/*-webkit-box-shadow: none;*/
		/*-moz-box-shadow: none;*/
		/*box-shadow: none;*/
	/*}*/
	/*.navbar .navbar-collapse.in{*/
		/*transform: none;*/
	/*}*/
	/*.container>div.navbar-header {*/
		/*position: static;*/
		/*width: auto;*/
		/*background: none transparent;*/
		/*filter: none;*/
		/*-webkit-box-shadow: none;*/
		/*-moz-box-shadow: none;*/
		/*box-shadow: none;*/
	/*}*/

	/* Subnavi */
	/*#subnav{margin-top: 0;}*/
	#soundControl{
		position: absolute;
		width: 42px;
		height: 42px;
		top: 35px;
		right: 15px;
		background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);
		background-repeat: no-repeat;
		cursor: pointer;
	}
	#soundControl.soundnormal{background-position: -482px -6px;}
	#soundControl.soundnormal:hover{background-position: -617px -7px;}
	#soundControl.soundnormal.off{background-position: -551px -7px;}
	#soundControl.soundnormal.off:hover{background-position: -684px -7px;}
	#soundControl.soundwhite{background-position: -617px -7px;}
	#soundControl.soundwhite:hover{background-position: -482px -6px;}
	#soundControl.soundwhite.off{background-position: -684px -7px;}
	#soundControl.soundwhite.off:hover{background-position: -551px -7px;}

	/* Animation */
	.fadeFromLeft,.fadeFromRight{opacity: 0;}
	.fadeFromLeft.clientSeen,.fadeFromRight.clientSeen{opacity: 1;}
	.fadeFromLeft{left: -700px;}
	.fadeFromRight{right: -700px;}
	.fadeFromLeft.clientSeen{left: 0;}
	.fadeFromRight.clientSeen{right: 0;}

	.holder.rubric .headline{margin: 10px 0;}
	.holder.rubric .headline .bigicon{
		margin-left: 0;
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
	}

	.holder.rubric .headline h2{
		font-size: 80px;
		left: 160px;
		margin-right: 160px;
	}

	.tv-slider-wrapper{
		overflow: hidden;
		width: 955px;
	}

	.tv-slider{
		position: relative;
		margin-bottom: 10px !important;
		white-space: nowrap;
		width: 9999999999px;
	}

	.tv-slider img{
		width: 100%;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
	}

	.tv-slider .tvimg,
	.tv-slider .smallimg{
		float:left;
	}

	.tv-slider .tile4wrapper{
		width: 955px;
		float: left;
		position: relative;
	}

	.tv-slider .tvimg{
		position: relative;
		background-color: #ffffff;
		width: 100%;
	}

	.tv-slider .smallimg{
		position: relative;
		background-color: #ffffff;
		/*width: 262px;*/
	}
	.tv-slider .info{
		color: #e55701;
		position:relative;
	}
	.tv-slider .time {
		margin-top: 5px;
		margin-left: 10px;
		font-size: 20px;
		display:block;
		width: 90%;
		font-weight: bold;
	}
	.tv-slider .name {
		margin-top: 5px;
		margin-left: 10px;
		font-size: 20px;
		display:block;
		width: 90%;
		font-weight: bold;
	}
	.tv-slider .title {
		margin-top: 5px;
		margin-left: 10px;
		display:block;
		width: 90%;
	}
	.tv-slider .label {
		background-image: url("https://media.toggo.de/imagestatic/tvplanermobile_flyout_stoerer.png");
		background-repeat: no-repeat;
		background-size: 100% auto, 100% auto;
		height: 74px;
		right: -30px;
		position: absolute;
		top: -28px;
		width: 109px;
		z-index: 99;
		-webkit-transform:  rotate(30deg);
		-ms-transform:  rotate(30deg);
		transform:  rotate(30deg);
	}
	.tv-slider .tvimg .info{
		position: absolute;
		bottom: 0;
		background: #fff;
		width: 100%;
	}

	.tv-slider-wrapper .controls{
		background-color: #ffffff;
		display: inline-block;
		height: 65px;
		width: 46px;
		position: absolute;
		top: 50px;
		z-index: 99;
		cursor: pointer;
		-webkit-box-shadow: 3px 0px 8px -2px rgba(93,38,38,0.4);
		-moz-box-shadow: 3px 0px 8px -2px  rgba(93,38,38,0.4);
		box-shadow: 3px 0px 8px -2px  rgba(93,38,38,0.4);
	}
	.tv-slider-wrapper .controls.left {
		left: 8px;
		-webkit-border-radius: 0 10px 10px 0;
		-moz-border-radius: 0 10px 10px 0;
		border-radius: 0 10px 10px 0;
	}
	.tv-slider-wrapper .controls.right {
		right: 8px;
		-webkit-border-radius: 0 10px 10px 0;
		-moz-border-radius: 0 10px 10px 0;
		border-radius: 0 10px 10px 0;
	}
	.tv-slider-wrapper .controls:after{
		content: '';
		display: inline-block;
		position: absolute;
		background-image: url(https://media.toggo.de/imagestatic/sprite-main.png);
		background-repeat: no-repeat;
		background-position: -398px 0;
		width: 27px;
		height: 33px;
		left: 10px;
		top: 16px;
	}
	.tv-slider-wrapper .controls.right{
		-webkit-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		transform: rotate(180deg);
	}

	/*.footertext h1 {*/
		/*margin-left: 100px;*/
		/*margin-right: 100px;*/
	/*}*/

	.holder.rubric.rubricbgimgtv{
		background-image: url(https://media.toggo.de/imagestatic/bt_tv.jpg);
	}

	.fadearea + .col-xs-12{visibility: hidden;}
	.fadearea .fadesubhide{display: block !important;}

	.move-left .container { margin-left: auto; }
	.move-left .holder.rubric
	{
		background-position: top center;
	}

	#billboardMain
	{
		display: block;
		position:absolute;
		left: 56px;
		top: 4px;
	}
}
@media (min-width: 1300px) {
	.move-left .container { margin-left: 0px; }
	.move-left  .holder.rubric
	{
		background-position: -420px top;
	}
}

@media (min-width: 1490px) {
	.move-left .container { margin-left: auto; }
	.move-left .holder.rubric
	{
		background-position: top center;
	}
}

@media (max-width: 991px) {
	#billboardMain
	{
		display:none;
	}
}
/* Large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  /*!* Navi *!*/
  /*.navbar-brand>span{*/
		/*width: 210px;*/
		/*height: 115px;*/
  /*}*/
  /*.navbar-nav{margin-top: 30px;}*/
  /*.navbar-nav>li{margin: 0 0 0 0;}*/
  /*.navbar-nav>li>a{*/
	 /*background-position: -3px -2px;*/
	 /*width: 170px;*/
	 /*height: 58px;*/
  /*}*/
 /*.navbar-nav>li.active>a,*/
 /*.navbar-nav>li>a:hover{*/
	 /*background-position: -198px -2px;*/
	 /*width: 170px;*/
	 /*height: 58px;*/
 /*}*/
 /*.navbar-sticky-header{*/
	 /*max-width: 1140px;*/
 /*}*/

	/*#subnav{margin-top: -5px;}*/
	/*#soundControl{right:25px;}*/

	/* Footer */
	.footerBrand ul{max-width: 600px;}

	.tv-slider-wrapper{width: 1155px;}
	.tv-slider .tile4wrapper{width: 1155px;}
}

/* Layer */

#layer_wrapper{
	position:absolute;
	background: #bee6e4;
	border-radius: 8px;
	padding: 10px;
	border:  2px solid #346166;
	box-shadow: 2px 2px 15px rgba(0,0,0,0.6);
	display: none;
	width: 425px;
	height: 460px;
	z-index: 100;
	left: 0;
	right: 0;
	top: 500px;
	margin: auto;
}

#layer_wrapper .heading {
	float: left;
	font-size:11px;
	height:25px;
	line-height:25px;
	text-transform: uppercase;
	color: #346166;
}

#layer_wrapper .adclose {
	float: right;
	border-radius: 5px;
	height:25px;
	font-size:11px;
	line-height:15px;
	margin-bottom: 10px;
	padding: 5px 5px 5px 25px;
	text-transform: uppercase;
	color: #346166;
	background: url(/img/adlayer_close.png) no-repeat 5px center #ffffff;
	cursor:pointer;
}

#layer {
	clear: both;
	position:relative;
	width: 400px;
	height: 400px;
}

/* Overlay */
#overlay{
	position:fixed;
	left:0;
	top:0;
	width: 100vw;
	height:100vh;
	z-index: 9999999;
	display:none;
}

#overlay #grey{
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:#000;
	z-index:60;
	opacity:0.6;
}

#overlay #contentWrapper{
	position:relative;
	top:50%;
	left:50%;
	z-index:60;
	margin: 0 auto !important;
    -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
    display: inline-block;
}

#overlay #contentWrapper .layerDeko{
	position: absolute;
	width: 400px;
	height: 400px;
	background-repeat: no-repeat;
	background-position: 0 0;
	pointer-events: none;
}
#overlay #contentWrapper #layerDeko1{top:-200px;left:-200px;}
#overlay #contentWrapper #layerDeko2{top:-200px;right:-200px;background-position: -400px 0;}
#overlay #contentWrapper #layerDeko3{bottom:-200px;left:-200px;background-position: 0 -400px;}
#overlay #contentWrapper #layerDeko4{bottom:-200px;right:-200px;background-position: -400px -400px;}

#overlay #contentWrapper #close{
	position:absolute;
	top:-15px;
	right:-20px;
	cursor:pointer;
	z-index: 65;
	overflow: hidden;
	background-image: none !important;
    background-color: white;
    border-radius: 50%;
    width: 55px;
    height: 55px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -ms-flex-wrap: wrap;
		flex-wrap: wrap;
	filter:url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feGaussianBlur in="SourceAlpha" stdDeviation="4" /><feOffset dx="1" dy="2" result="offsetblur" /><feFlood flood-color="rgba(0,0,0,1)" /><feComposite in2="offsetblur" operator="in" /><feMerge><feMergeNode /><feMergeNode in="SourceGraphic" /></feMerge></filter></svg>#filter');
	-webkit-filter: drop-shadow(0px 1px 4px black);
			filter: drop-shadow(0px 1px 4px black);
	filter:progid:DXImageTransform.Microsoft.Glow(color=black,strength=0) progid:DXImageTransform.Microsoft.Shadow(color=black,strength=0);
}
#overlay #contentWrapper #close:before,
#overlay #contentWrapper #close:after {
	content: "";
    display: block;
    width: 65%;
    height: 5px;
  	border-radius: 80px;
 	background-color: #f18606;
}
#overlay #contentWrapper #close:before {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    position: absolute;
}#overlay #contentWrapper #close:after {
    -webkit-transform: rotate(45deg);
	transform: rotate(45deg);
}

#overlay #contentWrapper #layerContent {
	position:relative;
	min-width: 300px;
	overflow: hidden;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}

#overlay #contentWrapper #layerContent #content{
	line-height: 0;
}
#overlay #contentWrapper #layerContent #content iframe{
	border:none;
}

/* Werbung */
.adcontainer{
	position: relative;
}
#banner{
	text-align: left;
}
#banner_wrapper{
	position: relative;
	width: 100%;
}

#billboard{
	display: block;
	text-align: center;
}

@media (min-width: 768px){
	#billboard{display: none;}
}

#sky_wrapper{
	z-index: 899;
	position: absolute;
	top: 0;
	right: -180px;
	width: 160px;
}

@media (max-width: 1399px){
	#sky_wrapper { display: none; }
}

.mobilebanner_ad_marker,
.wallpaper_superbanner_marker,
.superbanner_ad_marker{
	position: absolute;
	top: 0;
	left: -17px;
	width: 16px;
	height: 54px !important;
	background-image: url(https://media.toggo.de/imagestatic/banner-marker.png);
	background-repeat: no-repeat;
}

.skyscraper_ad_marker {
	position: absolute;
	bottom: -17px;
	left: 0;
	width: 54px;
	height: 16px;
	background-image: url(https://media.toggo.de/imagestatic/sky-marker.png);
	background-repeat: no-repeat;
}

@media (max-width: 1490px) {
	.move-left .holder.rubric .container {
		margin-left: none;
		border: 1px solid red !important;
	}
}

#eoaleftad {
    transform: translateX(50vw);
	left: -745px;
	position: absolute;
    top: 387px;
    z-index: 2;
    width: 160px;
    height: 600px;
    cursor: pointer;
}
@media (max-width: 1490px) {
    #eoaleftad {
		display: none;
	}
}

/* Teaser-Space */
.holder.holder-ad.nospace { margin-bottom: 0; }
.holder.holder-ad .row>div,
.holder.holder-ad .row>.fadearea>div,
.holder.holder-ad .row .subTile>div { margin: 5px 0; }

/* Werbefooter */
.holder-ad.footer .werbe_container {
    margin: 10px auto;
}

.holder-ad.footer .werbe_container > div {
    float: left;
}
.holder-ad.footer .werbe_container > div:first-child {
    margin-right: 10px;
}

@media(max-width: 571px) {
    .holder-ad.footer .werbe_container > div:first-child {
        margin-right: 0;
    }

    .holder-ad.footer .werbe_container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
}

.toggoteaser {
    height: 100%;
}

#subNaviFixedOuter button[disabled] {
	display: none;
}*{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-font-smoothing:subpixel-antialiased}html{width:100%;height:100%;padding:0;margin:0;font-family:'Gibson Light';font-size:16px;line-height:27px}html body.frontend{width:100%;height:100%;background-color:#f08701;color:#656565;padding:0;margin:0;font-family:'Gibson Light';font-size:16px;line-height:27px;overflow-x:hidden;fill:#f08701;position:relative}@media (max-width:991px){html body.frontend .main-wrapper{margin-top:55px}}html body.frontend:not(.home){background-repeat:no-repeat;background-image:-webkit-radial-gradient(center, ellipse, #f9b100 0, #f9b100 35%, #f08700 65%, #f08700 100%);background-image:-o-radial-gradient(center, ellipse, #f9b100 0, #f9b100 35%, #f08700 65%, #f08700 100%);background-image:radial-gradient(ellipse at center, #f9b100 0, #f9b100 35%, #f08700 65%, #f08700 100%)}html body.frontend #page_bg{overflow:hidden}html body.frontend.hasBackground #page_bg>section .wavesBottom{display:none}html body.frontend.hasBackground #page_bg>section:nth-of-type(2n) .wavesBottom svg{margin:0}html body.frontend.hasBackground #page_bg>div section{background:transparent !important}html body.frontend.hasBackground #page_bg>div section .wavesBottom{display:none}html body.frontend section .content-box{display:block;background-color:rgba(255,255,255,0.75);border-radius:8px;padding:35px 12%}html body.frontend section .content-box .primary{color:#f08701 !important;margin:0 0 12px}html body.frontend section .content-box p{width:100%;color:#f08701 !important}html body.frontend section .content-box .smallText{font-size:14px;line-height:20px;color:#656565 !important}html body.frontend section h1,html body.frontend section h2,html body.frontend section h3,html body.frontend section h4,html body.frontend section h5,html body.frontend section h6{font-family:'Gibson SemiBold'}html body.frontend section h1.primary,html body.frontend section h2.primary,html body.frontend section h3.primary,html body.frontend section h4.primary,html body.frontend section h5.primary,html body.frontend section h6.primary{text-align:center;font-weight:bold}html body.frontend section h1.primary.orange,html body.frontend section h2.primary.orange,html body.frontend section h3.primary.orange,html body.frontend section h4.primary.orange,html body.frontend section h5.primary.orange,html body.frontend section h6.primary.orange{color:#f08701}@supports ((-webkit-mask: url("/img/2018/test.svg")) or (mask: url("/img/2018/test.svg"))){html body.frontend section h1.primary.orange.icon:before,html body.frontend section h2.primary.orange.icon:before,html body.frontend section h3.primary.orange.icon:before,html body.frontend section h4.primary.orange.icon:before,html body.frontend section h5.primary.orange.icon:before,html body.frontend section h6.primary.orange.icon:before{background-color:#f08701 !important}}html body.frontend section h1.primary.blue,html body.frontend section h2.primary.blue,html body.frontend section h3.primary.blue,html body.frontend section h4.primary.blue,html body.frontend section h5.primary.blue,html body.frontend section h6.primary.blue{color:#5b98da}@supports ((-webkit-mask: url("/img/2018/test.svg")) or (mask: url("/img/2018/test.svg"))){html body.frontend section h1.primary.blue.icon:before,html body.frontend section h2.primary.blue.icon:before,html body.frontend section h3.primary.blue.icon:before,html body.frontend section h4.primary.blue.icon:before,html body.frontend section h5.primary.blue.icon:before,html body.frontend section h6.primary.blue.icon:before{background-color:#5b98da !important}}@media (max-width:767px){html body.frontend section h1.primary.icon:before,html body.frontend section h2.primary.icon:before,html body.frontend section h3.primary.icon:before,html body.frontend section h4.primary.icon:before,html body.frontend section h5.primary.icon:before,html body.frontend section h6.primary.icon:before{width:50px !important;height:45px !important;padding:0}}html body.frontend section h1.primary>span,html body.frontend section h2.primary>span,html body.frontend section h3.primary>span,html body.frontend section h4.primary>span,html body.frontend section h5.primary>span,html body.frontend section h6.primary>span{display:block;width:100%;color:#656565;font-size:22px;line-height:24px;font-weight:bold;text-transform:none !important;font-family:"Gibson Bold"}html body.frontend h1,html body.frontend h2{font-size:24px;line-height:28px}html body.frontend h3,html body.frontend h4{font-size:20px;line-height:24px}html body.frontend p{margin:6px 0;font-size:16px;line-height:20px}html body.frontend p a{text-decoration:underline}html body.frontend a{color:white}html body.frontend a:hover{text-decoration:none}html body.frontend picture{display:block}html body.frontend .hoverShadow{-webkit-transition:-webkit-filter .4s ease-in-out,-webkit-box-shadow .4s ease-in-out;transition:-webkit-filter .4s ease-in-out,-webkit-box-shadow .4s ease-in-out;-o-transition:filter .4s ease-in-out,box-shadow .4s ease-in-out;transition:filter .4s ease-in-out,box-shadow .4s ease-in-out;transition:filter .4s ease-in-out,box-shadow .4s ease-in-out,-webkit-filter .4s ease-in-out,-webkit-box-shadow .4s ease-in-out}html body.frontend .hoverShadow:hover{-webkit-box-shadow:none !important;box-shadow:none !important;-webkit-filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5));filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5));cursor:pointer}html body.frontend img{max-width:100%;display:inline-block;height:auto;vertical-align:bottom}html body.frontend h1.primary{font-size:45px;line-height:50px;margin:18px 0 26px 0}html body.frontend h2.primary{font-size:35px;line-height:40px;font-weight:bold;margin:0}html body.frontend.lightBlue{background:#63b0fe}html body.frontend.lightBlue section:first-of-type{background-repeat:no-repeat;background-size:100% auto;background-position:center center;background-color:#63b0fe}html body.frontend.lightBlue section .primary{color:white}html body.frontend.lightBlue .last,html body.frontend.lightBlue section:first-of-type{fill:#90c4ff !important}html body.hasBackground .createPadding{display:none}header{width:100%;display:block;position:fixed;top:0;left:0;z-index:999990;padding:15px 0 0;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:padding .5s ease-in-out,margin .4s ease-in-out;-o-transition:padding .5s ease-in-out,margin .4s ease-in-out;transition:padding .5s ease-in-out,margin .4s ease-in-out}@media (max-width:992px){header{padding-top:0 !important;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important}}header.reduced{margin-top:0 !important}@media (max-width:992px){header.reduced .mainnav{height:calc(100vh - 55px) !important}}header .inner{padding:0;width:100%;max-width:1155px;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex}@media (min-width:992px) and (max-width:1199px){header .inner{max-width:900px}}@media (min-width:768px) and (max-width:991px){header .inner{padding:0 2%;max-width:910px}}@media (max-width:992px){header .inner{padding:0 !important;max-height:55px}}header .inner>div{max-height:100%}header .inner .logo{z-index:1000}@media (max-width:992px){header .inner .logo{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}}header .inner .logo a{display:inline-block}header .inner .logo a img{max-width:150px;-webkit-transition:max-width .5s ease-in-out;-o-transition:max-width .5s ease-in-out;transition:max-width .5s ease-in-out}@media (max-width:1199px){header .inner .logo a img{max-width:150px}}@media (min-width:992px){header .inner .logo{max-height:46px;height:46px;margin:20px 0 8px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;background-color:#ffffff;-webkit-box-sizing:content-box;box-sizing:content-box;-webkit-transition:border-radius .3s ease-in-out,padding .3s ease-in-out,margin .3s ease-in-out;-o-transition:border-radius .3s ease-in-out,padding .3s ease-in-out,margin .3s ease-in-out;transition:border-radius .3s ease-in-out,padding .3s ease-in-out,margin .3s ease-in-out;-webkit-box-shadow:3px 2px 5px rgba(0,0,0,0.3);box-shadow:3px 2px 5px rgba(0,0,0,0.3);padding:10px 14px 0;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}@supports ((-webkit-filter: drop-shadow(3px 2px 4px rgba(0,0,0,0.4))) or (filter: drop-shadow(3px 2px 4px rgba(0,0,0,0.4)))){header .inner .logo{-webkit-box-shadow:none !important;box-shadow:none !important;-webkit-filter:drop-shadow(3px 2px 4px rgba(0,0,0,0.4));filter:drop-shadow(3px 2px 4px rgba(0,0,0,0.4))}}header .inner .logo>a{margin-top:9px}header .inner .logo>a>img{-webkit-transition:-webkit-transform .32s ease-in-out;transition:-webkit-transform .32s ease-in-out;-o-transition:transform .32s ease-in-out;transition:transform .32s ease-in-out;transition:transform .32s ease-in-out, -webkit-transform .32s ease-in-out}header .inner .logo:hover{margin:15px 0 8px !important;border-radius:4px}header .inner .logo:hover>a>img{-webkit-transform:scale(.9) translateZ(0);transform:scale(.9) translateZ(0)}header .inner .logo:hover{padding:10px 14px 0 !important;min-height:56px}header .inner .logo:hover>a>img{max-width:150px}}header .inner .mainnav{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;padding:20px 0 8px;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:1;-ms-flex:1 1;flex:1 1;-webkit-transition:padding .5s ease-in-out;-o-transition:padding .5s ease-in-out;transition:padding .5s ease-in-out;z-index:999}@media (max-width:992px){header .inner .mainnav{padding:0}}header .inner .mainnav ul{list-style:none;padding:0;margin:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-flex:1;-ms-flex:1 1;flex:1 1;-webkit-transition:-webkit-transform .5s ease-in-out;transition:-webkit-transform .5s ease-in-out;-o-transition:transform .5s ease-in-out;transition:transform .5s ease-in-out;transition:transform .5s ease-in-out, -webkit-transform .5s ease-in-out;z-index:-1}@media (max-width:992px){header .inner .mainnav ul{height:100%;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}}header .inner .mainnav ul li{-webkit-transition:z-index .2s ease-in-out;-o-transition:z-index .2s ease-in-out;transition:z-index .2s ease-in-out;-webkit-box-flex:1;-ms-flex:1 1;flex:1 1}@media (max-width:992px){header .inner .mainnav ul li{display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;min-width:50px;-webkit-box-align:stretch !important;-ms-flex-align:stretch !important;align-items:stretch !important}}header .inner .mainnav ul li a{position:relative;padding:0px 20px;font-size:20px;line-height:20px;text-decoration:none;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:white;font-weight:bold;letter-spacing:1px;width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;min-height:45px}header .inner .mainnav ul li a:before,header .inner .mainnav ul li a:after{content:"";display:block;position:absolute;top:0;left:0;width:100%;height:100%;background-color:inherit;border-radius:4px;z-index:0;-webkit-transition:-webkit-transform .3s cubic-bezier(.4, 0, 1, 1);transition:-webkit-transform .3s cubic-bezier(.4, 0, 1, 1);-o-transition:transform .3s cubic-bezier(.4, 0, 1, 1);transition:transform .3s cubic-bezier(.4, 0, 1, 1);transition:transform .3s cubic-bezier(.4, 0, 1, 1), -webkit-transform .3s cubic-bezier(.4, 0, 1, 1);-webkit-transform:none;transform:none}header .inner .mainnav ul li a:after{-webkit-box-shadow:0 7px 8px -2px rgba(0,0,0,0.2);box-shadow:0 7px 8px -2px rgba(0,0,0,0.2)}header .inner .mainnav ul li a>img{z-index:12}header .inner .mainnav ul li a>span{position:relative;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;z-index:12;-webkit-transition:-webkit-transform .3s ease-in-out;transition:-webkit-transform .3s ease-in-out;-o-transition:transform .3s ease-in-out;transition:transform .3s ease-in-out;transition:transform .3s ease-in-out, -webkit-transform .3s ease-in-out}@media (min-width:991px){header .inner .mainnav ul li a>span{line-height:25px;-webkit-transform:none;transform:none;margin-left:63px}}@media (max-width:992px){header .inner .mainnav ul li a>span>span{display:block;width:1px;height:1px;margin:-1px 0 0 -1px;overflow:hidden;position:absolute;top:0;left:0;z-index:-1}}@media (min-width:991px){header .inner .mainnav ul li a:hover:before,header .inner .mainnav ul li a.active:before{-webkit-transform:translateY(-7px);transform:translateY(-7px)}header .inner .mainnav ul li a:hover:after,header .inner .mainnav ul li a.active:after{-webkit-transform:translateY(7px);transform:translateY(7px)}header .inner .mainnav ul li a:hover>span,header .inner .mainnav ul li a.active>span{-webkit-transform:scale(1.25);transform:scale(1.25)}}@media (max-width:992px){header .inner .mainnav ul li a:hover:after,header .inner .mainnav ul li a.active:after{-webkit-transform:translateY(10px);transform:translateY(10px)}header .inner .mainnav ul li a:hover>span,header .inner .mainnav ul li a.active>span{-webkit-transform:translateY(10px);transform:translateY(10px)}}header .inner .mainnav ul li:hover,header .inner .mainnav ul li.active{z-index:20}@media (min-width:992px){header .inner .mainnav ul li.menu-item:first-child a{padding-left:41px;border-bottom-left-radius:4px}}@media (min-width:991px) and (max-width:1199px){header .inner .mainnav ul li.menu-item:first-child a{padding-left:30px}}@media (max-width:992px){header .inner .mainnav ul li.menu-item:first-child a{padding:0}}@media (min-width:992px){header .inner .mainnav ul li.menu-item:last-of-type a{padding-right:41px !important;border-bottom-right-radius:4px}}@media (min-width:991px) and (max-width:1199px){header .inner .mainnav ul li.menu-item:last-of-type a{padding-right:30px}}@media (max-width:992px){header .inner .mainnav ul li.menu-item:last-of-type a{padding:0}}header .inner .mainnav ul li.menu-item.home{min-width:160px}header .inner .mainnav ul li.menu-item.home>a{padding:4px 22px;-webkit-box-sizing:border-box;box-sizing:border-box;background-color:white}@media (max-width:320px){header .inner .mainnav ul li.menu-item.home{min-width:140px}}header.scroll{padding:0}@media (min-width:992px){header.scroll .inner .logo{display:none}header.scroll .mainnav{margin-left:0}header.scroll .mainnav .home{display:block !important;line-height:0}header.scroll .mainnav .home a{padding:0 !important;background-color:white}header.scroll .mainnav .home img{height:45px}}@media (min-width:992px) and (min-width:991px){header.scroll .inner .mainnav{padding-top:0px;margin-top:-2px}}body ul li.icon{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}body ul li.icon a>span{position:relative}body ul li.icon a>span:before{content:"";display:block;width:48px;height:33px;background-position:center center;background-repeat:no-repeat;background-size:contain;position:absolute;top:50%;left:0;-webkit-transform:translate(-100%, -50%);transform:translate(-100%, -50%);-webkit-transform:translate(calc(-100% - 8px), -50%);transform:translate(calc(-100% - 8px), -50%)}@media (max-width:992px){body ul li.icon a>span:before{margin-right:8px !important;width:45px;height:45px}}@media (max-width:992px){body ul li.icon a>span:before{-webkit-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}}body ul li.icon.play a>span:before{background-image:url('/img/2018/icons/Icons_Video.svg')}body ul li.icon.games a>span:before{background-image:url('/img/2018/icons/Icons_Spiele.svg')}body ul li.icon.tv a>span:before{background-image:url('/img/2018/icons/Icons_TV.svg')}body ul li.icon.win a>span:before{background-image:url('/img/2018/icons/Icons_Gewinnen.svg')}body ul li.icon.toggoradio a>span:before{background-image:url('/img/radio/icon_note_white.svg')}body ul li.icon.clock a>span:before{background-image:url('/img/2018/icons/Icons_TV.svg')}body ul li.purple a{background-color:#af008e}body ul li.lila a{background-color:#f70c44}body ul li.yellow a{background-color:#fad71e}body ul li.orange a{background-color:#eb540f}body ul li.greenery a{background-color:#d7d700}body ul li.blueradio a{background-color:#0cbaea}@media (max-width:991px){.subHeaderOuter .inner{padding-left:0 !important;padding-right:0 !important}}.subHeaderOuter .inner .subHeader{position:relative;padding:90px 0 0;width:100%;max-width:1140px;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box}@media (min-width:768px) and (max-width:991px){.subHeaderOuter .inner .subHeader{max-width:700px}}@media (max-width:991px){.subHeaderOuter .inner .subHeader{padding-top:75px !important}}@media (max-width:991px){.subHeaderOuter .inner .subHeader{padding-left:0 !important;padding-right:0 !important}}#subNaviFixedOuter{width:100%;max-width:1140px;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}@media (min-width:992px) and (max-width:1199px){#subNaviFixedOuter{max-width:900px}}@media (min-width:768px) and (max-width:991px){#subNaviFixedOuter{max-width:700px}}@media (max-width:767px){#subNaviFixedOuter{max-width:100%;padding:0}}#subNaviFixed{position:fixed;bottom:0;-webkit-transform:translateY(60px);transform:translateY(60px);width:100%;max-width:1140px;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:212;border-top-left-radius:5px;border-top-right-radius:5px;padding:12px 14px 0 14px;background-color:#eb540f;-webkit-transition:-webkit-transform .25s ease-in-out;transition:-webkit-transform .25s ease-in-out;-o-transition:transform .25s ease-in-out;transition:transform .25s ease-in-out;transition:transform .25s ease-in-out, -webkit-transform .25s ease-in-out;-webkit-box-shadow:2px 2px 10px rgba(0,0,0,0.4);box-shadow:2px 2px 10px rgba(0,0,0,0.4)}@media (min-width:992px) and (max-width:1199px){#subNaviFixed{max-width:900px}}@media (min-width:768px) and (max-width:991px){#subNaviFixed{max-width:700px}}@media (max-width:767px){#subNaviFixed{max-width:100%;padding:0 3%}}@media (max-width:991px){#subNaviFixed{padding-left:0 !important;padding-right:0 !important}}#subNaviFixed a{position:relative;-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;-o-transition:transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out, -webkit-transform .2s ease-in-out;overflow:hidden}#subNaviFixed a:after{content:"";display:block;position:absolute;top:0;left:0;width:100%;height:100%;border:4px solid white;border-radius:5px;z-index:4;opacity:0;-webkit-transition:opacity .2s ease-in-out;-o-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}#subNaviFixed a.active{width:88%;-webkit-transform:scale(1.1);transform:scale(1.1);margin-top:5px}#subNaviFixed a.active:after{opacity:1}#subNaviFixed a.active img{-webkit-transform:scale(1.2, 1.2);transform:scale(1.2, 1.2)}#subNaviFixed a.active .stoerer_wrapper{bottom:4px;right:4px}#subNaviFixed a:hover{cursor:pointer;-webkit-transform:scale(1.1, 1.1);transform:scale(1.1, 1.1)}#subNaviFixed a .stoerer_wrapper{bottom:12px;right:12px;width:40px;height:40px;position:absolute;overflow:hidden;z-index:200}@media (max-width:1199px){#subNaviFixed a .stoerer_wrapper{bottom:9px;right:9px}}@media (max-width:991px){#subNaviFixed a .stoerer_wrapper{bottom:7px;right:7px;width:35px;height:35px}}@media (max-width:989px){#subNaviFixed a .stoerer_wrapper{bottom:12px;right:12px}}@media (max-width:659px){#subNaviFixed a .stoerer_wrapper{bottom:9%;right:9%}}#subNaviFixed a .stoerer_wrapper .stoerer.navitype4{background-color:#eb540f}#subNaviFixed a .stoerer_wrapper .stoerer.navitype6{background-color:#af008e}#subNaviFixed a .stoerer_wrapper .stoerer.navitype5{background-color:#fad71e}#subNaviFixed a .stoerer_wrapper .stoerer.navitype7{background-color:#d7d700}#subNaviFixed a .stoerer_wrapper .stoerer{display:block;width:80px;height:80px;border-radius:50%;z-index:201}#subNaviFixed a .stoerer_wrapper .stoerer::before{position:absolute;width:35px;height:35px;content:'';display:block;background-position:center center;background-size:contain;background-repeat:no-repeat;top:5px;left:5px}@media (max-width:992px){#subNaviFixed a .stoerer_wrapper .stoerer::before{width:30px;height:30px;top:7px;left:6px}}#subNaviFixed a .stoerer_wrapper .navitype4.stoerer{display:none}#subNaviFixed a .stoerer_wrapper .navitype6.stoerer::before{background-image:url('/img/2018/icons/Icons_Video.svg')}#subNaviFixed a .stoerer_wrapper .navitype5.stoerer::before{background-image:url('/img/2018/icons/Icons_Spiele.svg')}#subNaviFixed a .stoerer_wrapper .navitype7.stoerer::before{background-image:url('/img/2018/icons/Icons_Gewinnen.svg')}#subNaviFixed a .stoerer_wrapper img{border-top-left-radius:5px;border-top-right-radius:5px}@media (max-width:992px){#subNaviFixed:not(.full) a{pointer-events:none !important}}#subNaviFixed .tns-outer .tns-ovh{padding:0 !important}#subNaviFixed.mini{-webkit-transform:translateY(120px);transform:translateY(120px)}#subNaviFixed:hover,#subNaviFixed.full{-webkit-transform:translateY(0);transform:translateY(0)}.backgroundStripes{display:none}body:not(.hasBackground) .backgroundStripes{position:absolute !important;top:0;left:0;display:block;pointer-events:none}body:not(.hasBackground) .headerWrapper{background-image:-webkit-radial-gradient(center, ellipse, #d26900 0, #f08701 70%, #f08701 100%);background-image:-o-radial-gradient(center, ellipse, #d26900 0, #f08701 70%, #f08701 100%);background-image:radial-gradient(ellipse at center, #d26900 0, #f08701 70%, #f08701 100%);fill:#f08701}@-webkit-keyframes swipeInFromRight{0%{-webkit-transform:translateX(102%);transform:translateX(102%)}99%{-webkit-transform:translateX(0);transform:translateX(0)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes swipeInFromRight{0%{-webkit-transform:translateX(102%);transform:translateX(102%)}99%{-webkit-transform:translateX(0);transform:translateX(0)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@-webkit-keyframes swipeOutFromRight{0%{-webkit-transform:translateX(0);transform:translateX(0)}99%{-webkit-transform:translateX(102%);transform:translateX(102%)}100%{-webkit-transform:translateX(102%);transform:translateX(102%)}}@keyframes swipeOutFromRight{0%{-webkit-transform:translateX(0);transform:translateX(0)}99%{-webkit-transform:translateX(102%);transform:translateX(102%)}100%{-webkit-transform:translateX(102%);transform:translateX(102%)}}.createPadding{display:block;width:100%;height:0;padding-top:calc(1.8% + 15px)}section{width:100%;display:block;position:relative}@media (min-width:991px){}section>.inner{width:100%;max-width:1140px;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}@media (min-width:992px) and (max-width:1199px){section>.inner{max-width:900px}}@media (min-width:768px) and (max-width:991px){section>.inner{max-width:700px}}@media (max-width:767px){section>.inner{max-width:100%;padding:0 3%}}section>.inner>.content{width:100%;z-index:200}section>.inner>.content.head{z-index:1000 !important}section .wavesBottom{-webkit-transform:translateY(-100%);transform:translateY(-100%);height:0;overflow-y:visible;z-index:1;position:relative;width:100%;max-width:100vw}section .wavesBottom canvas{display:none}section .wavesBottom svg{width:100%}@media (max-width:767px){section .wavesBottom svg{min-width:1170px}}section:nth-of-type(2n) .wavesBottom svg{-webkit-transform:scaleX(-1);transform:scaleX(-1);margin:0}section svg{display:block}section.default .inner{padding-top:0px;padding-bottom:35px}section.default .inner .createPadding{display:none !important;padding:0 !important}section.default:not(.last) .wavesBottom{display:none !important}section.default.last{fill:inherit}section.noHpadding{padding-left:0 !important;padding-right:0 !important}section.noHpadding .inner{padding-left:0 !important;padding-right:0 !important}section.noVpadding{padding-top:0 !important;padding-bottom:0 !important}section.noVpadding .inner{padding-top:0 !important;padding-bottom:0 !important}section.bgWhite{fill:white;background-color:white}section.bgWhite .inner{background-color:white}section.transparent{fill:rgba(255,255,255,0) !important}section.transparent .inner{color:white}section.transparent .wavesBottom .black{fill:rgba(255,255,255,0) !important}section.bgPurple{fill:#8e1f72;background-color:#8e1f72;background:#8e1f72;background:-webkit-radial-gradient(center, ellipse, #ae008b 0%, #ae008b 35%, #8e1f72 65%, #8e1f72 100%);background:-o-radial-gradient(center, ellipse, #ae008b 0%, #ae008b 35%, #8e1f72 65%, #8e1f72 100%);background:radial-gradient(ellipse at center, #ae008b 0%, #ae008b 35%, #8e1f72 65%, #8e1f72 100%)}section.bgPurple .inner{color:white}section.bgPurple .inner .sign:before{background-color:#8e1f72 !important}section.bgRed{fill:#cd204a;background-color:#cd204a;background:#f40f4f;background:-webkit-radial-gradient(center, ellipse, #f40f4f 0%, #f40f4f 35%, #cd204a 65%, #cd204a 100%);background:-o-radial-gradient(center, ellipse, #f40f4f 0%, #f40f4f 35%, #cd204a 65%, #cd204a 100%);background:radial-gradient(ellipse at center, #f40f4f 0%, #f40f4f 35%, #cd204a 65%, #cd204a 100%)}section.bgRed .inner{color:white}section.bgRed .inner .sign:before{background-color:#f40f4f !important}section.bgOrange{fill:#f08700;background:#f08700;background:-webkit-radial-gradient(center, ellipse, #f9b100 0%, #f9b100 35%, #f08700 65%, #f08700 100%);background:-o-radial-gradient(center, ellipse, #f9b100 0%, #f9b100 35%, #f08700 65%, #f08700 100%);background:radial-gradient(ellipse at center, #f9b100 0%, #f9b100 35%, #f08700 65%, #f08700 100%)}section.bgOrange .inner{color:#eb540f}section.bgOrange .inner .sign:before{background-color:#f08701 !important}section.bgYellow{fill:#fdc41f;background:#fad61e;background:-webkit-radial-gradient(center, ellipse, #fad61e 0%, #fad61e 35%, #fdc41f 65%, #fdc41f 100%);background:-o-radial-gradient(center, ellipse, #fad61e 0%, #fad61e 35%, #fdc41f 65%, #fdc41f 100%);background:radial-gradient(ellipse at center, #fad61e 0%, #fad61e 35%, #fdc41f 65%, #fdc41f 100%)}section.bgYellow .inner{color:white}section.bgYellow .inner .sign:before{background-color:#fdc41f !important}section.bgGreen{fill:#306e52;background:#306e52;background:-webkit-radial-gradient(center, ellipse, #00a482 0%, #00a482 35%, #306e52 65%, #306e52 100%);background:-o-radial-gradient(center, ellipse, #00a482 0%, #00a482 35%, #306e52 65%, #306e52 100%);background:radial-gradient(ellipse at center, #00a482 0%, #00a482 35%, #306e52 65%, #306e52 100%)}section.bgGreen .inner{color:white}section.bgGreen .inner .sign:before{background-color:#306e52 !important}section .bgStreifen{background-position:bottom right;background-size:100% auto;background-repeat:no-repeat;mix-blend-mode:color-dodge}.content:not(.holder-ad) .tile_wrapper{padding:0 !important;margin:5px 0}.pane_wrapper:nth-of-type(even) section .wavesBottom svg{-webkit-transform:none !important;transform:none !important;margin-bottom:-1px}.pane_wrapper:nth-of-type(odd) section .wavesBottom svg{-webkit-transform:scaleX(-1) !important;transform:scaleX(-1) !important;margin:0}.divider{width:100%;height:2px;background-color:#b4b4af;border-radius:25px;margin:35px 0;display:block}.flexbox{display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-ms-flex-wrap:wrap;flex-wrap:wrap}.noWrap{-ms-flex-wrap:nowrap !important;flex-wrap:nowrap !important}.center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center;margin-right:auto;margin-left:auto}.vCenter{vertical-align:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.w100{width:100%;-webkit-box-sizing:border-box;box-sizing:border-box}.w50{width:100%;max-width:50%;-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;-webkit-box-flex:1;-ms-flex:1 1 50%;flex:1 1 50%}.w50:not(.noPadding){padding:0 2%}@media (max-width:767px){.w50{max-width:100% !important;-webkit-box-flex:1 !important;-ms-flex:1 1 100% !important;flex:1 1 100% !important}}.w75{width:100%;max-width:75%;-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;-webkit-box-flex:1;-ms-flex:1 1 75%;flex:1 1 75%}.w75:not(.noPadding){padding:0 2%}@media (max-width:767px){.w75{max-width:100% !important;-webkit-box-flex:1 !important;-ms-flex:1 1 100% !important;flex:1 1 100% !important}}.w25{width:100%;max-width:25%;-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;-webkit-box-flex:1;-ms-flex:1 1 25%;flex:1 1 25%}.w25:not(.noPadding){padding:0 2%}@media (max-width:767px){.w25{max-width:100% !important;-webkit-box-flex:1 !important;-ms-flex:1 1 100% !important;flex:1 1 100% !important}}.w33{width:100%;max-width:33%;-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;-webkit-box-flex:1;-ms-flex:1 1 33.33%;flex:1 1 33.33%}.w33:not(.noPadding){padding:0 2%}@media (min-width:560px) and (max-width:967px){.w33{max-width:50% !important;-webkit-box-flex:1 !important;-ms-flex:1 1 50% !important;flex:1 1 50% !important}}@media (max-width:559px){.w33{max-width:100% !important;-webkit-box-flex:1 !important;-ms-flex:1 1 100% !important;flex:1 1 100% !important}}.voting .vote-item{width:25%;padding:12px;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}@media (max-width:660px){.voting .vote-item{width:100%}}.voting .vote-item .image{display:inline-block;max-width:100%;border-radius:50%;-webkit-box-shadow:4px 4px 8px rgba(16,16,16,0.22);box-shadow:4px 4px 8px rgba(16,16,16,0.22);margin-bottom:8px;overflow:hidden}@supports ((-webkit-filter: drop-shadow(1px 1px 1px red)) or (filter: drop-shadow(1px 1px 1px red))){.voting .vote-item .image{-webkit-box-shadow:none !important;box-shadow:none !important;-webkit-filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5));filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5))}}@media (max-width:660px){.voting .vote-item .image{margin:0 auto 22px}}.voting .vote-item .image picture{display:inline-block;max-width:100%}.voting .vote-item .title{width:100%;background-color:white;padding:6px 6px 6px 18px;border-radius:120px;-webkit-box-shadow:3px 2px 8px rgba(49,49,49,0.6);box-shadow:3px 2px 8px rgba(49,49,49,0.6);-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;cursor:pointer;max-width:340px;margin:0  auto}.voting .vote-item .title:hover .indicator:after{opacity:.6}@media all and (hover:none){.voting .vote-item .title:hover .indicator:after{opacity:0 !important}}.voting .vote-item .title :before{content:"";-webkit-transition:min-width .3s ease-in-out;-o-transition:min-width .3s ease-in-out;transition:min-width .3s ease-in-out}.voting .vote-item .title .tag{-webkit-box-flex:1;-ms-flex:1 1;flex:1 1;font-size:14px;line-height:20px;font-weight:bold;text-transform:uppercase;-webkit-transition:visibility .2s ease-in-out;-o-transition:visibility .2s ease-in-out;transition:visibility .2s ease-in-out}.voting .vote-item .title .indicator{width:24px;height:24px;border:2px solid #656565;border-radius:50%;-webkit-transition:background-color .3s ease-in-out,border-color .3s ease-in-out,visibility .2s ease-in-out;-o-transition:background-color .3s ease-in-out,border-color .3s ease-in-out,visibility .2s ease-in-out;transition:background-color .3s ease-in-out,border-color .3s ease-in-out,visibility .2s ease-in-out}.voting .vote-item .title .indicator:after{content:"";width:6px;height:14px;border:2px solid #656565;border-width:0 3px 3px 0;display:block;-webkit-transform:rotate(45deg);transform:rotate(45deg);margin:2px 0 0 7px;opacity:0;-webkit-transition:opacity .2s ease-in-out,border-color .3s ease-in-out;-o-transition:opacity .2s ease-in-out,border-color .3s ease-in-out;transition:opacity .2s ease-in-out,border-color .3s ease-in-out;border-radius:4px}.voting .vote-item .title.statistics{position:relative;overflow:hidden}.voting .vote-item .title.statistics .tag,.voting .vote-item .title.statistics .indicator{visibility:hidden}.voting .vote-item .title.statistics:before{content:"";content:attr(data-percent) " %";display:-webkit-box;display:-ms-flexbox;display:flex;position:absolute;top:0;left:0;min-width:inherit;height:100%;background-color:#eb5410;color:white;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;padding:0 8px;-webkit-box-sizing:border-box;box-sizing:border-box;text-shadow:0 0 2px rgba(12,12,12,0.5)}.voting .vote-item.active .indicator{background-color:#eb540f;border-color:#eb540f}.voting .vote-item.active .indicator:after{opacity:1 !important;border-color:white}.absLeft{position:absolute;top:0;left:0;z-index:202;width:16%}.absLeft img,.absLeft picture{max-width:100%;width:100%}.absRight{position:absolute;top:0;right:0;z-index:202;width:16%}.absRight img,.absRight picture{max-width:100%;width:100%}.expandInDivider{margin:25px auto;-webkit-transform:translateY(-100%);transform:translateY(-100%);max-width:90px;background-color:#eaeaea;border-radius:50px}.expand{width:50px;height:50px;border-radius:50%;background-color:white;-webkit-box-shadow:4px 4px 21px #7d7d7d;box-shadow:4px 4px 21px #7d7d7d;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;cursor:pointer}.expand>span{display:block;background-color:#eb540f;width:40%;height:5px;border-radius:40px;position:relative;-webkit-transition:background-color .2s ease-in-out,-webkit-transform .2s ease-in-out;transition:background-color .2s ease-in-out,-webkit-transform .2s ease-in-out;-o-transition:background-color .2s ease-in-out,transform .2s ease-in-out;transition:background-color .2s ease-in-out,transform .2s ease-in-out;transition:background-color .2s ease-in-out,transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.expand>span>span{display:block;height:5px;border-radius:40px;position:absolute;top:0;left:0;right:0;width:100%;background-color:#eb540f !important;-webkit-transform:rotate(90deg);transform:rotate(90deg);-webkit-transition:background-color .2s ease-in-out,-webkit-transform .2s ease-in-out;transition:background-color .2s ease-in-out,-webkit-transform .2s ease-in-out;-o-transition:background-color .2s ease-in-out,transform .2s ease-in-out;transition:background-color .2s ease-in-out,transform .2s ease-in-out;transition:background-color .2s ease-in-out,transform .2s ease-in-out,-webkit-transform .2s ease-in-out}.expand.active>span>span{background-color:rgba(255,255,255,0);-webkit-transform:rotate(0deg) !important;transform:rotate(0deg) !important}@media (max-width:970px){.tv-planer-outer{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}}.tv-planer-outer.loading>div{-webkit-filter:blur(7px);filter:blur(7px)}.tv-planer-outer.loading:before{content:"Wird geladen ...";display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;font-size:24px;line-height:24px;position:absolute;left:0;top:0;width:100%;height:100%;padding-top:190px;z-index:25;color:white;font-weight:bold}.tv-planer-outer .programmSwitch{max-width:550px}@media (max-width:970px){.tv-planer-outer .programmSwitch{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2;max-width:220px !important;margin:12px 35px !important}}@media (max-width:590px){.tv-planer-outer .programmSwitch{margin:12px auto !important}}.tv-planer-outer .programmSwitch .tag{color:white;font-size:14px;line-height:18px;font-weight:bold;padding:4px 16px;-webkit-box-align:center;-ms-flex-align:center;align-items:center}@media (max-width:767px){.tv-planer-outer .programmSwitch .tag{display:none !important}}.tv-planer-outer .programmSwitch .switch{background-color:#eb540f;border-radius:250px;padding:3px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-shadow:inset 1px 3px 10px rgba(0,0,0,0.2);box-shadow:inset 1px 3px 10px rgba(0,0,0,0.2);margin:0;max-width:250px;width:100%}.tv-planer-outer .programmSwitch .switch .item{-webkit-box-flex:1;-ms-flex:1 1;flex:1 1;display:inline-block;padding:15px 25px;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:background-color .3s ease-in-out,-webkit-box-shadow .1s ease-in-out;transition:background-color .3s ease-in-out,-webkit-box-shadow .1s ease-in-out;-o-transition:background-color .3s ease-in-out,box-shadow .1s ease-in-out;transition:background-color .3s ease-in-out,box-shadow .1s ease-in-out;transition:background-color .3s ease-in-out,box-shadow .1s ease-in-out,-webkit-box-shadow .1s ease-in-out;text-align:center;border-radius:250px;-webkit-box-shadow:none;box-shadow:none}.tv-planer-outer .programmSwitch .switch .item img{max-height:35px;width:auto;display:inline-block;vertical-align:middle;cursor:pointer}.tv-planer-outer .programmSwitch .switch .item.active{background-color:white;-webkit-box-shadow:2px 2px 7px rgba(0,0,0,0.4);box-shadow:2px 2px 7px rgba(0,0,0,0.4);pointer-events:none}.tv-planer-outer .programmSwitch .switch .item:not(.active){-webkit-filter:grayscale(100%);filter:grayscale(100%)}@media (max-width:970px){.tv-planer-outer .timeline-outer{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}}@media (max-width:500px){.tv-planer-outer .timeline-outer{margin:25px auto !important}}.tv-planer-outer .timeline-outer .timeline{list-style:none;padding:8px 12px;margin:55px 0 25px 0;background-color:#f08701;border-radius:4px;-webkit-box-shadow:0 2px 18px rgba(0,0,0,0.5);box-shadow:0 2px 18px rgba(0,0,0,0.5)}@media (max-width:970px){.tv-planer-outer .timeline-outer .timeline:not(.active)>.active{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.tv-planer-outer .timeline-outer .timeline:not(.active)>.item:not(.active){-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}}.tv-planer-outer .timeline-outer .timeline .item{-webkit-box-flex:1;-ms-flex:1;flex:1;color:white;font-size:20px;text-transform:uppercase;font-weight:bold;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;cursor:pointer;-webkit-transition:font-size .4s ease-in-out;-o-transition:font-size .4s ease-in-out;transition:font-size .4s ease-in-out;-ms-flex-wrap:nowrap !important;flex-wrap:nowrap !important}.tv-planer-outer .timeline-outer .timeline .item.active{background-color:white;color:#f08701;margin:-18px 0 -18px 0;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border-radius:4px;padding:0 14px;font-size:24px;-webkit-box-shadow:0 2px 18px rgba(0,0,0,0.5);box-shadow:0 2px 18px rgba(0,0,0,0.5)}.tv-planer-outer .timeline-outer .timeline .item.active:before{content:"";background:url("/img/2018/icons/clock.svg") no-repeat center center;width:57px;height:40px;display:inline-block;vertical-align:middle;background-repeat:no-repeat;background-position:center center;background-size:contain;margin:-2px -6px 0 -6px}@supports ((-webkit-mask: url("/img/2018/icons/clock.svg")) or (mask: url("/img/2018/icons/clock.svg"))){.tv-planer-outer .timeline-outer .timeline .item.active:before{background:#f08701 !important;-webkit-mask:url("/img/2018/icons/clock.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/clock.svg") no-repeat 50% 50%}}.tv-planer-outer .timeline-outer .timeline .item.active:first-child{margin-left:-15px !important}@media (max-width:991px){.tv-planer-outer .timeline-outer{display:-webkit-box;display:-ms-flexbox;display:flex;max-width:250px;width:100%;margin:25px 0;position:relative}.tv-planer-outer .timeline-outer .timeline{padding:0;margin:0 -50px 0 0;position:absolute;top:0;left:0;width:100%;z-index:200;height:0;min-height:50px;overflow:hidden;-webkit-transition:height .4s ease-in-out;-o-transition:height .4s ease-in-out;transition:height .4s ease-in-out}.tv-planer-outer .timeline-outer .timeline:not('.active'){border-radius:120px !important}.tv-planer-outer .timeline-outer .timeline .item{min-height:50px;-webkit-box-flex:1!important;-ms-flex:1 1 100%!important;flex:1 1 100%!important;margin:0 !important;padding:8px 0 !important;-webkit-box-sizing:border-box;box-sizing:border-box}.tv-planer-outer .timeline-outer .timeline .item:before{display:none !important}}.tv-planer-outer .timeline-outer .mobilToggleOuter{width:100%;z-index:202}@media (max-width:991px){.tv-planer-outer .timeline-outer .mobilToggleOuter.active .mobilToggle>span{-webkit-transform:rotate(-135deg) !important;transform:rotate(-135deg) !important;margin:5px 0 0 1px !important}}.tv-planer-outer .timeline-outer .mobilToggleOuter .mobilToggle{display:none}@media (max-width:991px){.tv-planer-outer .timeline-outer .mobilToggleOuter .mobilToggle{width:45px;height:45px;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;background-color:#f08701;color:white;border-radius:50%;margin:3px 3px 0 auto;z-index:202}.tv-planer-outer .timeline-outer .mobilToggleOuter .mobilToggle>span{display:block;width:18px;height:18px;border:6px solid white;border-width:0 6px 6px 0;border-radius:3px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;margin:-3px 0 0 1px;-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;-o-transition:transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out, -webkit-transform .2s ease-in-out}}@media (max-width:970px){.tv-planer-outer .programm-plan{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3;width:100%}}.tv-planer-outer .programm-plan .item{position:relative;background-color:#eaeaea;margin-bottom:30px;border-radius:3px;overflow:hidden}.tv-planer-outer .programm-plan .item .sign{bottom:50%}.tv-planer-outer .programm-plan .item:first-child .image .now{display:inline-block !important}.tv-planer-outer .programm-plan .item .image{position:relative}@media (min-width:968px){.tv-planer-outer .programm-plan .item .image{min-height:230px}}.tv-planer-outer .programm-plan .item .image .now{display:none;background-color:#fab301;position:absolute;bottom:0;left:0;color:white;padding:11px 30px;font-size:32px;line-height:32px;font-weight:bold;text-transform:uppercase;letter-spacing:1px;border-radius:0 3px 0 0}.tv-planer-outer .programm-plan .item .image img{width:100%}.tv-planer-outer .programm-plan .item .pre-content{position:relative;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:0 5% !important}.tv-planer-outer .programm-plan .item .pre-content .inner{padding:8px 0;width:100%}@media (max-width:767px){.tv-planer-outer .programm-plan .item .pre-content .inner{padding:25px 0 !important}}.tv-planer-outer .programm-plan .item .pre-content .inner .time{width:100%;font-size:24px;line-height:22px}.tv-planer-outer .programm-plan .item .pre-content .inner .title{width:100%;margin:0 0 12px 0;color:#eb540f;font-size:24px;line-height:26px}.tv-planer-outer .programm-plan .item .pre-content .inner p{color:#656565;font-size:16px;line-height:24px}.tv-planer-outer .programm-plan .item .content{position:relative;height:0;-webkit-transition:height .5s;-o-transition:height .5s;transition:height .5s}.tv-planer-outer .programm-plan .item .content .inner{padding:25px 5%;-webkit-box-sizing:border-box;box-sizing:border-box;width:100%}@media (max-width:767px){.tv-planer-outer .programm-plan .item .content .inner{padding:0 5% !important}}.tv-planer-outer .programm-plan .item .content .inner p{font-size:16px;line-height:20px;font-weight:bold}.tv-planer-outer .programm-plan .item .content .inner .next{-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-top:25px}.tv-planer-outer .programm-plan .item .content .inner .next .clock{display:block;width:49px;height:34px;background:url("/img/2018/icons/clock.svg") no-repeat center center;background-repeat:no-repeat;background-size:contain;background-position:center center}@supports ((-webkit-mask: url("/img/2018/test.svg")) or (mask: url("/img/2018/test.svg"))){.tv-planer-outer .programm-plan .item .content .inner .next .clock{background:#f08701 !important;-webkit-mask:url("/img/2018/icons/clock.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/clock.svg") no-repeat 50% 50%}}.tv-planer-outer .programm-plan .item .content .inner .next .datetime{-webkit-box-flex:1;-ms-flex:1 1;flex:1 1;padding:0 8px}.tv-planer-outer .programm-plan .item .content .inner .next .datetime span{color:#656565;font-size:16px;line-height:18px;width:100%;display:block}.tv-planer-outer .programm-plan .item .content .inner .next .datetime span:nth-child(2){font-weight:bold}.tv-planer-outer .programm-plan .item .outerExpand{position:absolute;top:50%;left:0;-webkit-transform:translate(-50%, -50%);transform:translate(-50%, -50%)}@media (max-width:767px){.tv-planer-outer .programm-plan .item .outerExpand{top:0 !important;left:50% !important}}.tabedOuter{width:100%}.tabedOuter .tabedButtons button{margin-right:12px}.tabedOuter .tabContent{display:block;opacity:0;z-index:-1;max-height:0;overflow:hidden;-webkit-transition:opacity .4s ease-in-out;-o-transition:opacity .4s ease-in-out;transition:opacity .4s ease-in-out}.tabedOuter .tabContent.active{opacity:1 !important;z-index:21 !important;max-height:100% !important;overflow:visible !important}footer{background-color:#eaeaea;position:relative;padding-bottom:140px}@media (min-width:992px){footer{background-image:url('/img/2018/footer/bgFooter-deco-1.png'),url('/img/2018/footer/bgFooter-right-1.png');background-repeat:no-repeat;background-size:auto;background-position:left bottom, right top;background-position-x:12%, 88%;background-position-y:96%, 90%}}@media (min-width:1200px) and (max-width:1760px){footer{background-position-x:12%, 100% !important}}@media (min-width:861px) and (max-width:1200px){footer{background-position-x:0%, 100% !important}}@media (max-width:767px){footer{padding-bottom:25px}}footer .createPadding{padding-top:calc(1.8% + 60px)}footer .spriteAlvin{z-index:201 !important}footer h1,footer h2,footer h3,footer h4,footer h5,footer h6{color:#f08701}footer h1.primary,footer h2.primary,footer h3.primary,footer h4.primary,footer h5.primary,footer h6.primary{color:#f08701 !important;text-align:center;text-transform:uppercase;font-weight:bold}footer h1.primary>span,footer h2.primary>span,footer h3.primary>span,footer h4.primary>span,footer h5.primary>span,footer h6.primary>span{display:block;width:100%;color:#656565;font-size:22px;line-height:24px;font-weight:bold;text-transform:none !important;font-family:"Gibson Bold"}footer .inner,footer .inner_ad{width:100%;max-width:1140px;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;position:relative}@media (min-width:992px) and (max-width:1199px){footer .inner,footer .inner_ad{max-width:900px}}@media (min-width:768px) and (max-width:991px){footer .inner,footer .inner_ad{max-width:700px}}@media (max-width:767px){footer .inner,footer .inner_ad{max-width:100%;padding:0 8%}}footer .inner .absLeft,footer .inner_ad .absLeft{top:-20px !important;-webkit-transform:translate(-95%, -32%);transform:translate(-95%, -32%)}footer .inner .content,footer .inner_ad .content{width:100%;z-index:200;margin-top:20px;margin-bottom:20px}footer .inner_ad{background-color:#c7c5c5;margin:0;width:100vw;max-width:none}footer .subFooter{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin:25px 0}footer .subFooter>a{display:inline-block;margin:12px 35px;width:160px;height:80px;background-repeat:no-repeat;background-position-x:0}footer .subFooter>a.srtl{background-image:url('/img/2018/footer/srtl_sprite.png')}footer .subFooter>a.srtl:hover{background-position-x:100%}footer .subFooter>a.tplus{background-image:url('/img/2018/footer/tplus_sprite.png')}footer .subFooter>a.tplus:hover{background-position-x:100%}footer .subFooter>a.toggolino{background-image:url('/img/2018/footer/toggolino_sprite.png')}footer .subFooter>a.toggolino:hover{background-position-x:100%}footer .subNavigation{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;z-index:210 !important}footer .subNavigation nav{width:100%}footer .subNavigation nav ul{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;list-style:none;padding:0;margin:0 0 20px}footer .subNavigation nav ul li a{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;padding:0 10px;font-size:14px;line-height:14px;color:#656565;text-decoration:none}footer .subNavigation nav ul li a:hover{text-decoration:underline}footer .subNavigation nav ul li:not(:last-child) a{border-right:2px solid hsl(0,0%,85%)}footer .subNavigation .copyright{text-align:center;display:block;width:100%;font-size:14px;line-height:14px;margin:0;color:#656565;text-transform:uppercase}footer #cookieInformationFooter{width:100%;display:none;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}footer #cookieInformationFooter #cookieInformation{z-index:250;position:fixed;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;bottom:0;color:#333333;border-top-left-radius:25px;border-top-right-radius:25px;-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,0.4);box-shadow:0 0 15px 0 rgba(0,0,0,0.4);padding:20px;background:#f4f4f4;text-align:justify;font-size:16px;line-height:20px;min-height:20vh;max-width:95%}@media (max-width:767px){footer #cookieInformationFooter #cookieInformation{font-size:12px;line-height:15px}}footer #cookieInformationFooter #cookieInformation .cookieInformationLeft{max-width:600px}footer #cookieInformationFooter #cookieInformation .cookieInformationRight{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-left:15px;margin-top:15px;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}footer #cookieInformationFooter #cookieInformation .cookieInformationRight .cookieOK{width:150px;text-align:center;font-family:'Gibson-Regular';font-weight:bold;color:#fff;cursor:pointer;font-size:15px;text-transform:uppercase;padding:13px 20px 9px;border-radius:30px;-webkit-box-shadow:0 5px 15px 0 rgba(0,0,0,0.2);box-shadow:0 5px 15px 0 rgba(0,0,0,0.2);background-color:#ec6500}.toTop{max-width:108px;position:absolute;right:50px;background-color:rgba(0,0,0,0)}.toTop a.toTopLinkMobile{display:none;background-color:white;border-radius:50%;-webkit-box-shadow:4px 4px 21px #7d7d7d;box-shadow:4px 4px 21px #7d7d7d;width:45px;height:45px}.toTop a.toTopLinkMobile:before{content:"";width:14px;height:14px;border:6px solid #f08701;border-width:6px 6px 0 0;border-radius:4px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);position:absolute;top:15px;right:12px;z-index:117;-webkit-box-sizing:content-box;box-sizing:content-box}.toTop a.toTopLink{display:inline-block;padding-top:30px;text-decoration:none;position:relative;font-family:"Gibson SemiBold"}.toTop a.toTopLink:hover>span{width:90px;height:90px;-webkit-transition:100ms ease;-o-transition:100ms ease;transition:100ms ease}.toTop a.toTopLink:hover:after{bottom:7px;-webkit-transition:100ms ease;-o-transition:100ms ease;transition:100ms ease}.toTop a.toTopLink:after{content:"";display:block;width:50px;height:50px;position:absolute;right:-50%;bottom:0;background:rgba(0,0,0,0);border-radius:50%;-webkit-transform:translate(-32%, -26%);transform:translate(-32%, -26%);z-index:0;-webkit-box-shadow:4px 4px 21px #7d7d7d;box-shadow:4px 4px 21px #7d7d7d}.toTop a.toTopLink>span{height:75px;width:75px;background-color:#f08701;color:white;border-radius:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:16px;line-height:16px;font-weight:bold;line-break:auto;text-align:right;-webkit-box-shadow:4px 4px 21px #7d7d7d;box-shadow:4px 4px 21px #7d7d7d;position:relative;padding-right:12px;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:105}.toTop a.toTopLink>span:before{content:"";width:14px;height:14px;border:6px solid #f08701;border-width:6px 6px 0 0;border-radius:4px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);position:absolute;top:-9px;right:-4px;z-index:117;-webkit-box-sizing:content-box;box-sizing:content-box}.toTop a.toTopLink>span>span{z-index:100}.toTop a.toTopLink>span>span:before{content:"";position:absolute;top:-24px;right:-16px;background-color:white;color:#eb540f;width:45px;height:45px;border-radius:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;font-size:18px;line-height:16px;font-weight:bold;-webkit-transform:rotate(90deg);transform:rotate(90deg);-webkit-box-shadow:4px -1px 17px #7d7d7d;box-shadow:4px -1px 17px #7d7d7d;z-index:116}.toTop a.toTopLink>span>span:after{content:"";display:block;width:50px;height:50px;position:absolute;right:-50%;top:50%;background:#f08701;border-radius:50%;-webkit-transform:translate(-32%, -50%);transform:translate(-32%, -50%);z-index:-1}@media (max-width:992px){.toTop a.toTopLink{display:none}.toTop a.toTopLinkMobile{display:block}}hr.divider{display:block;visibility:hidden;width:100%}hr.divider.big{height:45px;margin:0;padding:0}hr.divider.mega{height:85px;margin:0;padding:0}hr.divider.visible{visibility:visible}.item .sign{position:absolute;top:-5px;right:40px;height:55px;width:55px}.item.video{position:relative}.item.video .sign:before{content:"";background-image:url('/img/2018/icons/video.svg');background-repeat:no-repeat;background-position:center center;background-size:36px 36px;width:40px;height:40px;display:block;-webkit-transform:rotate(-3deg);transform:rotate(-3deg);position:absolute;top:35px;right:-22px;z-index:180;border-radius:50%;background-color:#f08701}.item.screen{position:relative}.item.screen .sign:before{content:"";background-image:url('/img/2018/icons/screen.svg');background-repeat:no-repeat;background-position:center center;background-size:36px 36px;width:40px;height:40px;display:block;-webkit-transform:rotate(-3deg);transform:rotate(-3deg);position:absolute;top:35px;right:-22px;z-index:180;border-radius:50%;background-color:#f08701}.tns-outer{position:relative;-webkit-filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5));filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5))}.tns-outer .tns-ovh{padding:5px 0 5px !important}.tns-outer .tns-ovh .tns-inner .tns-slider .item{display:inline-block;text-align:center;padding:0 5px;-webkit-box-sizing:border-box;box-sizing:border-box}.tns-outer .tns-ovh .tns-inner .tns-slider .item a{display:inline-block;text-decoration:none;max-width:100%}.tns-outer .tns-ovh .tns-inner .tns-slider .item a img{max-width:100%;height:auto}.tns-outer .tns-ovh .tns-inner .tns-slider .item .sign>span{display:none}.tns-outer .tns-ovh .tns-inner .tns-slider .item.neu{position:relative}.tns-outer .tns-ovh .tns-inner .tns-slider .item.neu .sign{position:absolute;top:-5px;right:38px;height:55px;width:55px;z-index:0}.tns-outer .tns-ovh .tns-inner .tns-slider .item.neu .sign:after{content:"";display:block;width:35px;height:35px;position:absolute;right:-50%;bottom:0;background:rgba(0,0,0,0);border-radius:50%;-webkit-transform:translate(-32%, -26%);transform:translate(-32%, -26%);z-index:0;-webkit-box-shadow:4px 4px 21px #444444;box-shadow:4px 4px 21px #444444}.tns-outer .tns-ovh .tns-inner .tns-slider .item.neu .sign>span{position:relative;height:100%;width:100%;background-color:#f08701;color:white;border-radius:50%;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:16px;line-height:16px;font-weight:bold;line-break:auto;text-transform:uppercase;text-align:right;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:105}.tns-outer .tns-ovh .tns-inner .tns-slider .item.neu .sign>span>span{z-index:100;margin-right:-12px}.tns-outer .tns-ovh .tns-inner .tns-slider .item.neu .sign>span>span:after{content:"";display:block;width:35px;height:35px;position:absolute;right:-50%;top:50%;background:#f08701;border-radius:50%;-webkit-transform:translate(-32%, -50%);transform:translate(-32%, -50%);z-index:-1}.tns-outer .tns-controls button{outline:none;background-color:white;color:rgba(0,0,0,0);font-size:0px;width:42px;height:42px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;position:absolute;top:50%;z-index:99;border-color:rgba(255,255,255,0);border-radius:50%;-webkit-box-shadow:2px 2px 10px rgba(0,0,0,0.4);box-shadow:2px 2px 10px rgba(0,0,0,0.4)}.tns-outer .tns-controls button:after{content:"";display:block;width:10px !important;height:10px !important;border:6px solid #f08701;border-radius:4px;-webkit-transform:rotate(-45deg) translate(0, -70%);transform:rotate(-45deg) translate(0, -70%);position:absolute;top:50%;-webkit-box-sizing:content-box;box-sizing:content-box}.tns-outer .tns-controls button[data-controls="next"]{right:0;-webkit-transform:translate(10%, -50%);transform:translate(10%, -50%)}.tns-outer .tns-controls button[data-controls="next"]:after{border-width:0 6px 6px 0 !important;left:46%}@media (max-width:767px){.tns-outer .tns-controls button[data-controls="next"]{display:none !important}}.tns-outer .tns-controls button[data-controls="prev"]{left:0;-webkit-transform:translate(-10%, -50%);transform:translate(-10%, -50%)}.tns-outer .tns-controls button[data-controls="prev"]:after{border-width:6px 0 0 6px !important;left:54%}@media (max-width:767px){.tns-outer .tns-controls button[data-controls="prev"]{display:none !important}}.subHeaderOuter .inner .subHeader>.header-slider,#subNaviFixed>.header-slider{max-height:200px;overflow-y:hidden}.tns-outer .tns-inner .header-slider{margin-top:5px}@media (max-width:991px){.tns-outer .tns-inner .header-slider{margin-left:5% !important}}button[data-action="start"]{background-color:white;outline:none;-webkit-box-shadow:none;box-shadow:none;display:block;border:none;width:28px;height:28px;border-radius:50%;position:absolute;bottom:0;left:0;overflow:hidden;font-size:0;color:transparent;padding:0}button[data-action="start"]:after{content:">";content:"\25B6";font-size:14px;line-height:14px;margin-left:2px;position:absolute;top:0;left:0;bottom:0;right:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#f08701}button[data-action="stop"]{background-color:white;outline:none;-webkit-box-shadow:none;box-shadow:none;display:block;border:none;width:28px;height:28px;border-radius:50%;position:absolute;bottom:0;left:0;overflow:hidden;font-size:0;color:transparent;padding:0}button[data-action="stop"]:after{content:"||";content:"\25A0";font-size:20px;line-height:5px;position:absolute;top:0;left:0;bottom:0;right:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#f08701;margin:-3px -1px 0 0}.tns-nav{position:absolute;bottom:0;left:0;width:100%;display:block;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;min-height:22px;text-align:center}.tns-nav~div.tns-ovh .tns-inner{margin:22px 0}.tns-nav button{display:inline-block;width:12px;height:12px;border:2px solid white;outline:none;-webkit-box-shadow:none;box-shadow:none;background-color:rgba(255,255,255,0);border-radius:50%;padding:0;margin:2px 6px}.tns-nav button.tns-nav-active{background-color:#fff !important}#body .content-slider .item{width:100%}.hideSliderAutoplay .tns-outer button[data-action="start"],.hideSliderAutoplay .tns-outer button[data-action="stop"]{display:none}@-webkit-keyframes slideParallaxRight{from{-webkit-transform:translateX(0%);transform:translateX(0%);opacity:1}to{-webkit-transform:translateX(80%);transform:translateX(80%);opacity:0}}@keyframes slideParallaxRight{from{-webkit-transform:translateX(0%);transform:translateX(0%);opacity:1}to{-webkit-transform:translateX(80%);transform:translateX(80%);opacity:0}}@-webkit-keyframes slideParallaxLeft{from{-webkit-transform:translateX(0%);transform:translateX(0%)}to{-webkit-transform:translateX(-80%);transform:translateX(-80%)}}@keyframes slideParallaxLeft{from{-webkit-transform:translateX(0%);transform:translateX(0%)}to{-webkit-transform:translateX(-80%);transform:translateX(-80%)}}.teaser.slider,.teaser.btslider{position:relative;-webkit-box-shadow:2px 2px 5px rgba(0,0,0,0.5);box-shadow:2px 2px 5px rgba(0,0,0,0.5)}@supports ((-webkit-filter: drop-shadow(2px 2px 5px rgba(0,0,0,0.5))) or (filter: drop-shadow(2px 2px 5px rgba(0,0,0,0.5)))){.teaser.slider,.teaser.btslider{-webkit-box-shadow:none !important;box-shadow:none !important;-webkit-filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5));filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5))}}.teaser.slider .arrow,.teaser.btslider .arrow{outline:none !important;background-color:white !important;color:rgba(0,0,0,0);font-size:0px;width:42px;height:42px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;position:absolute;top:50%;z-index:99;border-color:rgba(255,255,255,0);border-radius:50%;-webkit-box-shadow:2px 2px 10px rgba(0,0,0,0.4);box-shadow:2px 2px 10px rgba(0,0,0,0.4);cursor:pointer}.teaser.slider .arrow:after,.teaser.btslider .arrow:after{content:"";display:block;width:10px !important;height:10px !important;border:6px solid #f08701;border-radius:4px !important;-webkit-transform:rotate(-45deg) translate(0, -70%) !important;transform:rotate(-45deg) translate(0, -70%) !important;position:absolute;top:50% !important;-webkit-box-sizing:content-box !important;box-sizing:content-box !important}.teaser.slider .arrow.right,.teaser.btslider .arrow.right{right:0 !important;-webkit-transform:translate(30%, -50%) !important;transform:translate(30%, -50%) !important}.teaser.slider .arrow.right:after,.teaser.btslider .arrow.right:after{border-width:0 6px 6px 0 !important;left:46% !important}.teaser.slider .arrow.left,.teaser.btslider .arrow.left{left:0 !important;-webkit-transform:translate(-30%, -50%) !important;transform:translate(-30%, -50%) !important}.teaser.slider .arrow.left:after,.teaser.btslider .arrow.left:after{border-width:6px 0 0 6px !important;left:54% !important}.teaser.slider .layer,.teaser.btslider .layer{border:none !important}.teaser.slider .sign>span,.teaser.btslider .sign>span{display:none}.teaser.slider.neu,.teaser.btslider.neu{position:relative}.teaser.slider.neu .sign,.teaser.btslider.neu .sign{position:absolute;top:-22px;right:40px;height:55px;width:55px}.teaser.slider.neu .sign:after,.teaser.btslider.neu .sign:after{content:"";display:block;width:35px;height:35px;position:absolute;right:-50%;bottom:0;background:rgba(0,0,0,0);border-radius:50%;-webkit-transform:translate(-32%, -26%);transform:translate(-32%, -26%);z-index:0;-webkit-box-shadow:4px 4px 21px #444444;box-shadow:4px 4px 21px #444444}.teaser.slider.neu .sign>span,.teaser.btslider.neu .sign>span{position:relative;height:100%;width:100%;background-color:#f08701;color:white;border-radius:50%;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:16px;line-height:16px;font-weight:bold;line-break:auto;text-transform:uppercase;text-align:right;-webkit-box-shadow:4px 4px 21px #444444;box-shadow:4px 4px 21px #444444;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:105}.teaser.slider.neu .sign>span>span,.teaser.btslider.neu .sign>span>span{z-index:100;margin-right:-12px}.teaser.slider.neu .sign>span>span:after,.teaser.btslider.neu .sign>span>span:after{content:"";display:block;width:35px;height:35px;position:absolute;right:-50%;top:50%;background:#f08701;border-radius:50%;-webkit-transform:translate(-32%, -50%);transform:translate(-32%, -50%);z-index:-1}@font-face{font-family:'Gibson SemiBold';font-weight:bold;font-style:normal;font-display:swap;src:url('/img/2018/fonts/gibson-semibold.woff2') format('woff2'),url('/img/2018/fonts/gibson-semibold.woff') format('woff')}@font-face{font-family:'Gibson Bold';font-weight:bold;font-style:normal;font-display:swap;src:url('/img/2018/fonts/gibson-semibold.woff') format('woff')}@font-face{font-family:'Gibson Light';font-weight:400;font-style:normal;font-display:swap;src:url('/img/2018/fonts/gibson_light1.woff') format('woff')}.flexform{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:25px 0}.flexform label{padding-bottom:20px !important;margin:0}.flexform label .input{display:block;width:100%;border:2px solid #656565;border-radius:120px;padding:8px 16px;-webkit-box-sizing:border-box;box-sizing:border-box;background-color:white;color:#656565;outline:none;-webkit-box-shadow:none;box-shadow:none;font-size:14px;line-height:16px;font-weight:bold}.flexform label .input::-webkit-input-placeholder{color:#ababab}.flexform label .input:-moz-placeholder{color:#ababab}.flexform label .input::-moz-placeholder{color:#ababab}.flexform label .input:-ms-input-placeholder{color:#ababab}.flexform label select.input{-moz-appearance:none;-webkit-appearance:none;appearance:none;position:relative;display:block}.flexform label.select{position:relative;background:rgba(255,255,255,0) !important}.flexform label.select.w33{margin-left:2%;margin-right:2%}@media (min-width:767px){.flexform label.select.w33{max-width:29% !important}}.flexform label.select.w50{margin-left:2%;margin-right:2%}@media (min-width:767px){.flexform label.select.w50{max-width:46% !important}}.flexform label.select.w25{margin-left:2%;margin-right:2%}@media (min-width:767px){.flexform label.select.w25{max-width:21% !important}}.flexform label.select:before{margin:0 auto;content:"";width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;height:65%;display:block;background-color:white;border-radius:120px;position:absolute;top:0;left:50%;z-index:0;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.flexform label.select select{background:rgba(255,255,255,0) !important;z-index:10;padding-right:32px}.flexform label.select select::-ms-expand{display:none !important}.flexform label.select .arrow{width:28px;height:28px;display:block;background-color:#f08701;color:white;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;border-radius:50%;position:absolute;top:4px;right:4px;z-index:0}.flexform label.select .arrow:after{content:"";width:8px;height:8px;border:6px solid white;border-radius:4px;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-width:0 5px 5px 0;margin-top:-2px}.flexform label .checkbox{appearance:none;-moz-appearance:none;-webkit-appearance:none;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;margin:0 12px 0 0;padding:2px;width:28px;min-width:28px;height:28px;background-color:transparent;border-radius:50%;outline:none;-webkit-box-shadow:none;box-shadow:none;color:white;cursor:pointer;border:2px solid #656565;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:border-color .2s ease-in-out,background-color .2s ease-in-out;-o-transition:border-color .2s ease-in-out,background-color .2s ease-in-out;transition:border-color .2s ease-in-out,background-color .2s ease-in-out}.flexform label .checkbox span{line-height:18px}.flexform label .checkbox:hover{background-color:#f08701;border-color:#f08701}@media all and (hover:none){.flexform label .checkbox:hover{background-color:transparent;border-color:#656565}}.flexform label .checkbox:hover:after{opacity:.4 !important}@media all and (hover:none){.flexform label .checkbox:hover:after{opacity:0 !important}}.flexform label .checkbox:checked{background-color:#f08701;border-color:#f08701}.flexform label .checkbox:checked:after{opacity:1 !important}.flexform label .checkbox:after{content:"";display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:6px;height:13px;border:2px solid white;border:5px solid white;border-width:0 4px 4px 0;-webkit-transform:rotate(27.5deg);transform:rotate(27.5deg);margin-left:5px;margin-top:1px;border-radius:4px;opacity:0;-webkit-transition:opacity .2s ease-in-out;-o-transition:opacity .2s ease-in-out;transition:opacity .2s ease-in-out}.flexform label a{margin:0 2px;display:inline-block;color:#f08701}body.mask h1.icon.ice:before,body.mask h2.icon.ice:before,body.mask h3.icon.ice:before,body.mask h4.icon.ice:before,body.mask h5.icon.ice:before,body.mask h6.icon.ice:before{background:white;-webkit-mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 46.7 126' enable-background='new 0 0 46.7 126'%3E%3Cstyle type='text/css'%3E.st0%7Bfill:%23201600;%7D .st1%7Bfill:%23656565;%7D%3C/style%3E%3Cpath d='M982 233.6c.1 0 .1-.2 0-.2-.2 0-.2.2 0 .2z' class='st0'/%3E%3Cpath d='M674.9 427.8c-1-.4-2-.7-2.9-1.1 0-.1 0-.3.1-.4 1.1.2 2.1.4 3.2.6-.2.3-.3.6-.4.9z'/%3E%3Cpath d='M46.5 8c-.1-2.6-.5-5.3-2.5-6.8-.3-.2-.7-.4-1.1-.5-.1 0-.2-.1-.3-.1C30-.2 17.5-.1 4.9.6c-.3 0-.5 0-.7 0 0 0 0 0-.1 0-.4 0-.7.2-1 .3-.1 0-.2.1-.4.2-.1.1-.2.2-.3.2 0 0 0 .1-.1.1-.1.1-.1.1-.1.1C.8 3.1.6 5.5.5 7.7 0 20.6-.1 33.6.1 46.5c0 2.5.1 5.1.5 7.6.2 1.7.9 3.6 2.3 4.5 0 4.8 0 9.5-.1 14.3C2.8 77.8 1.6 84.4 4 89c1.8 3.3 5.4 4.4 8.9 4.7 1.2.1 2.5.1 3.7.2-.2 7.2-.4 14.5.2 21.7.3 3.5.5 10.4 5.6 10.4 4.8 0 4.9-6.3 5-9.5.2-7.6.4-15.3.6-22.9 1.6-.1 3.2-.2 4.8-.3 3.7-.1 7.3-.4 9.7-3.6 2.5-3.5 2.3-8.3 2.3-12.4-.1-9.4-.2-18.9-.3-28.3.3-.2.6-.5.9-.8 1.2-1.7 1.3-3.9 1.3-6V9.4c-.2-.5-.2-.9-.2-1.4zM26 106.4c-.1 2.2-.1 4.4-.2 6.7 0 1.1 0 1.7-.1 2.8-.1 3 .2 3.4-.8 6.4-1 3.1-4.8 1.7-5.5-.3s-.8-5.3-.9-6.6c-.2-2.5-.3-4.9-.3-7.4-.1-4.7.1-9.4.2-14 2.7 0 5.3-.2 8-.3-.2 4.2-.3 8.4-.4 12.7zm11-15.2c-3.6.9-8 .5-11.7.6-3.4.1-6.7.3-10.1.4-3.6 0-7.8-.4-9.7-3.9-1.8-3.3-1.1-8.3-1-11.9 0-5.7 0-11.5.1-17.2 1.8-.1 3.3-2 3.7-3.8.5-2.2 0-4.4.3-6.6.1-.5.3-1.1.8-1.2.7-.1 1 .8 1.1 1.5.1 1.1 0 2.5.8 3.4 1 1.1 2.6 1.5 3.9.7 1.4-.8 2-2.5 2.2-4.1.1-1.3-.2-3.6.1-4.8.2-.8.9-.9 1.4-.3s.4 2.7.3 3.5c-.1 2.2-.2 4.5-.3 6.7-.1 1.5-.1 3.1.4 4.5.6 1.4 1.9 2.6 3.5 2.5 1.3-.1 2.4-1.2 2.8-2.4.5-1.2.5-2.5.6-3.8 0-1.4 0-2.8 0-4.2 0-1.1-.4-4.8.5-5.6 1.5-1.3 1.5 3.4 1.5 3.8.2 1.1 1 2.1 2 2.4 1 .4 2.2.1 3-.7 1.2-1.2 1.2-3.1 1.2-4.7-.1-1.5-.1-3-.2-4.5 0-1.1.2-2.6 1.3-2.7 1.5-.2 1.8 1.7 1.9 2.8.1 2.9.2 5.9.3 8.8 0 1 .1 2.1.6 2.9.5.9 1.6 1.5 2.5 1 1.6-.8 1-3.6 2-4.9.1 8.1.2 16.2.3 24.3 0 5.8 1.3 15.8-6.1 17.5zm7.8-46.6c0 .4-.1.9-.3 1.3-.3.5-1 .8-1.5 1.1-1 .6-1.6 1.5-2.1 2.5-.3.7-.3 3.6-1.3 2.7s-.4-3.3-.5-4.4c-.1-1.6-.2-3.2-.2-4.8 0-1.6.1-3.3-.9-4.6-.7-.9-1.9-1.4-3-1.2-1.1.2-2.1 1-2.5 2.1-.3.8-.2 1.7-.2 2.6.1 1.2.2 2.4.2 3.6.1 1.2.1 4.2-1.7 4.3-1 .1-1-1.6-1-2.2 0-.7-.1-1.5-.4-2.1-.5-1.2-1.7-2.1-2.9-1.8-1 .2-1.7 1.1-2 2.1s-.2 2-.1 3c.2 2.9 0 5.7-.4 8.6-.1.8-.5 2.1-1.3 2.5-1.4.7-2-1.1-2.1-2.1-.3-3.3-.3-6.7 0-10 .1-1.2.3-2.5-.1-3.7S19 41.9 17.8 42c-1.7.2-2.5 2.3-2.5 4s.5 3.6-.3 5.1c-.3.6-.9 1.1-1.5 1-.8 0-1.3-.8-1.5-1.6-.2-.8-.1-1.6-.3-2.4-.4-1.7-2.6-2.8-4-1.8-1.3.9-1.2 2.8-1.1 4.3 0 1.9-.2 3.7-.6 5.5-.1.4-.2.7-.4 1-.7.8-2.1.2-2.7-.7-1.2-1.7-1.3-3.9-1.2-5.9.1-13.6.1-27.2.2-40.8 0-2.3.1-4.7 1.4-6.6 0 0 0-.1.1-.1.1-.1.1-.1.2-.2.3-.3.7-.5 1.1-.5 12.5-.7 25.1-.7 37.6 0 .1 0 .2.1.3.2 2 1.1 2.2 3.8 2.2 6.1 0 10.2 0 20.3.1 30.5 0 1.8 0 3.7-.1 5.5zM7.6 10c.2-.5.4-1.1.7-1.6.4-1-1.2-1.6-1.6-.6-.2.6-.4 1.1-.7 1.7-.5 1 1.1 1.5 1.6.5zM16.3 13.1c.9.6 1.9-.7 1-1.4-1.1-.8-1.9-1.8-2.4-3-.4-1-2-.3-1.5.8.5 1.4 1.6 2.7 2.9 3.6zM8.1 20.2c.9-1.2 1.8-2.4 2.6-3.6.6-.9-.7-1.9-1.4-1-.9 1.2-1.8 2.5-2.7 3.7-.5.9.9 1.8 1.5.9zM17.7 23.5c-.7-.8-2 .3-1.3 1.1s1.3 1.5 2 2.3 2-.2 1.3-1.1c-.6-.7-1.3-1.5-2-2.3zM9.4 28.3c-.9 1.2-1.8 2.5-2.7 3.7-.6.9.8 1.8 1.4.9.9-1.2 1.8-2.4 2.7-3.6.6-.9-.8-1.9-1.4-1zM14.7 34.8c-.7-.8-1.9.3-1.2 1.2.5.7 1.1 1.3 1.6 2 .7.8 2-.3 1.3-1.1-.5-.7-1.1-1.4-1.7-2.1zM26.5 19.3c.9-1.6 1.7-3.1 2.6-4.7.5-.9-.8-1.9-1.4-1-.9 1.6-1.8 3.2-2.6 4.7-.5 1 .9 1.9 1.4 1zM22 7.2c-.7-.8-2 .3-1.3 1.1.8.9 1.5 1.8 2.3 2.6.7.8 2-.2 1.3-1.1-.7-.8-1.5-1.7-2.3-2.6zM34.6 5.4c0 1.2-.5 2.3-1.2 3.2s.7 1.8 1.4 1c.9-1.2 1.4-2.6 1.5-4.1 0-1.1-1.7-1.2-1.7-.1zM39.7 20.9c-1-1.1-2-2.2-3-3.4-.7-.8-2 .3-1.3 1.1 1 1.1 2 2.2 3 3.3.8.9 2.1-.2 1.3-1zM41 11.5c.3.9 1.9.4 1.6-.5-.2-.7-.4-1.3-.7-2-.1-.4-.5-.8-1-.6-.4.1-.8.6-.6 1 .2.6.4 1.3.7 2.1zM30.5 25.4c-1.5 1.5-2.9 2.9-4.3 4.4-.8.8.4 2 1.2 1.2 1.4-1.4 2.8-2.9 4.3-4.3.6-.8-.5-2.1-1.2-1.3zM41.8 31.5c.4-.2.6-.7.4-1.1-.4-.8-.9-1.6-1.4-2.4-.5-.9-2-.1-1.5.8.4.8.9 1.5 1.3 2.3.3.4.8.6 1.2.4zM26.7 36.2c-.3-.4-.9-.3-1.2 0-.4.3-.3.8 0 1.2.3.4.6.9 1 1.3.6.9 2-.2 1.3-1.1-.4-.5-.8-1-1.1-1.4zM42.1 37.7c-.5-1-2-.2-1.5.8.2.4.4.9.7 1.3.5 1 2 .2 1.5-.8-.2-.4-.4-.8-.7-1.3zM39.2 78.7c.2 4.7-1.1 8.5-6.1 9.4-1.1.2-.6 1.8.4 1.6 5.7-1 7.5-5.6 7.3-11 .1-1.1-1.6-1.1-1.6 0z' class='st1'/%3E%3C/svg%3E") no-repeat 50% 50% !important;mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 46.7 126' enable-background='new 0 0 46.7 126'%3E%3Cstyle type='text/css'%3E.st0%7Bfill:%23201600;%7D .st1%7Bfill:%23656565;%7D%3C/style%3E%3Cpath d='M982 233.6c.1 0 .1-.2 0-.2-.2 0-.2.2 0 .2z' class='st0'/%3E%3Cpath d='M674.9 427.8c-1-.4-2-.7-2.9-1.1 0-.1 0-.3.1-.4 1.1.2 2.1.4 3.2.6-.2.3-.3.6-.4.9z'/%3E%3Cpath d='M46.5 8c-.1-2.6-.5-5.3-2.5-6.8-.3-.2-.7-.4-1.1-.5-.1 0-.2-.1-.3-.1C30-.2 17.5-.1 4.9.6c-.3 0-.5 0-.7 0 0 0 0 0-.1 0-.4 0-.7.2-1 .3-.1 0-.2.1-.4.2-.1.1-.2.2-.3.2 0 0 0 .1-.1.1-.1.1-.1.1-.1.1C.8 3.1.6 5.5.5 7.7 0 20.6-.1 33.6.1 46.5c0 2.5.1 5.1.5 7.6.2 1.7.9 3.6 2.3 4.5 0 4.8 0 9.5-.1 14.3C2.8 77.8 1.6 84.4 4 89c1.8 3.3 5.4 4.4 8.9 4.7 1.2.1 2.5.1 3.7.2-.2 7.2-.4 14.5.2 21.7.3 3.5.5 10.4 5.6 10.4 4.8 0 4.9-6.3 5-9.5.2-7.6.4-15.3.6-22.9 1.6-.1 3.2-.2 4.8-.3 3.7-.1 7.3-.4 9.7-3.6 2.5-3.5 2.3-8.3 2.3-12.4-.1-9.4-.2-18.9-.3-28.3.3-.2.6-.5.9-.8 1.2-1.7 1.3-3.9 1.3-6V9.4c-.2-.5-.2-.9-.2-1.4zM26 106.4c-.1 2.2-.1 4.4-.2 6.7 0 1.1 0 1.7-.1 2.8-.1 3 .2 3.4-.8 6.4-1 3.1-4.8 1.7-5.5-.3s-.8-5.3-.9-6.6c-.2-2.5-.3-4.9-.3-7.4-.1-4.7.1-9.4.2-14 2.7 0 5.3-.2 8-.3-.2 4.2-.3 8.4-.4 12.7zm11-15.2c-3.6.9-8 .5-11.7.6-3.4.1-6.7.3-10.1.4-3.6 0-7.8-.4-9.7-3.9-1.8-3.3-1.1-8.3-1-11.9 0-5.7 0-11.5.1-17.2 1.8-.1 3.3-2 3.7-3.8.5-2.2 0-4.4.3-6.6.1-.5.3-1.1.8-1.2.7-.1 1 .8 1.1 1.5.1 1.1 0 2.5.8 3.4 1 1.1 2.6 1.5 3.9.7 1.4-.8 2-2.5 2.2-4.1.1-1.3-.2-3.6.1-4.8.2-.8.9-.9 1.4-.3s.4 2.7.3 3.5c-.1 2.2-.2 4.5-.3 6.7-.1 1.5-.1 3.1.4 4.5.6 1.4 1.9 2.6 3.5 2.5 1.3-.1 2.4-1.2 2.8-2.4.5-1.2.5-2.5.6-3.8 0-1.4 0-2.8 0-4.2 0-1.1-.4-4.8.5-5.6 1.5-1.3 1.5 3.4 1.5 3.8.2 1.1 1 2.1 2 2.4 1 .4 2.2.1 3-.7 1.2-1.2 1.2-3.1 1.2-4.7-.1-1.5-.1-3-.2-4.5 0-1.1.2-2.6 1.3-2.7 1.5-.2 1.8 1.7 1.9 2.8.1 2.9.2 5.9.3 8.8 0 1 .1 2.1.6 2.9.5.9 1.6 1.5 2.5 1 1.6-.8 1-3.6 2-4.9.1 8.1.2 16.2.3 24.3 0 5.8 1.3 15.8-6.1 17.5zm7.8-46.6c0 .4-.1.9-.3 1.3-.3.5-1 .8-1.5 1.1-1 .6-1.6 1.5-2.1 2.5-.3.7-.3 3.6-1.3 2.7s-.4-3.3-.5-4.4c-.1-1.6-.2-3.2-.2-4.8 0-1.6.1-3.3-.9-4.6-.7-.9-1.9-1.4-3-1.2-1.1.2-2.1 1-2.5 2.1-.3.8-.2 1.7-.2 2.6.1 1.2.2 2.4.2 3.6.1 1.2.1 4.2-1.7 4.3-1 .1-1-1.6-1-2.2 0-.7-.1-1.5-.4-2.1-.5-1.2-1.7-2.1-2.9-1.8-1 .2-1.7 1.1-2 2.1s-.2 2-.1 3c.2 2.9 0 5.7-.4 8.6-.1.8-.5 2.1-1.3 2.5-1.4.7-2-1.1-2.1-2.1-.3-3.3-.3-6.7 0-10 .1-1.2.3-2.5-.1-3.7S19 41.9 17.8 42c-1.7.2-2.5 2.3-2.5 4s.5 3.6-.3 5.1c-.3.6-.9 1.1-1.5 1-.8 0-1.3-.8-1.5-1.6-.2-.8-.1-1.6-.3-2.4-.4-1.7-2.6-2.8-4-1.8-1.3.9-1.2 2.8-1.1 4.3 0 1.9-.2 3.7-.6 5.5-.1.4-.2.7-.4 1-.7.8-2.1.2-2.7-.7-1.2-1.7-1.3-3.9-1.2-5.9.1-13.6.1-27.2.2-40.8 0-2.3.1-4.7 1.4-6.6 0 0 0-.1.1-.1.1-.1.1-.1.2-.2.3-.3.7-.5 1.1-.5 12.5-.7 25.1-.7 37.6 0 .1 0 .2.1.3.2 2 1.1 2.2 3.8 2.2 6.1 0 10.2 0 20.3.1 30.5 0 1.8 0 3.7-.1 5.5zM7.6 10c.2-.5.4-1.1.7-1.6.4-1-1.2-1.6-1.6-.6-.2.6-.4 1.1-.7 1.7-.5 1 1.1 1.5 1.6.5zM16.3 13.1c.9.6 1.9-.7 1-1.4-1.1-.8-1.9-1.8-2.4-3-.4-1-2-.3-1.5.8.5 1.4 1.6 2.7 2.9 3.6zM8.1 20.2c.9-1.2 1.8-2.4 2.6-3.6.6-.9-.7-1.9-1.4-1-.9 1.2-1.8 2.5-2.7 3.7-.5.9.9 1.8 1.5.9zM17.7 23.5c-.7-.8-2 .3-1.3 1.1s1.3 1.5 2 2.3 2-.2 1.3-1.1c-.6-.7-1.3-1.5-2-2.3zM9.4 28.3c-.9 1.2-1.8 2.5-2.7 3.7-.6.9.8 1.8 1.4.9.9-1.2 1.8-2.4 2.7-3.6.6-.9-.8-1.9-1.4-1zM14.7 34.8c-.7-.8-1.9.3-1.2 1.2.5.7 1.1 1.3 1.6 2 .7.8 2-.3 1.3-1.1-.5-.7-1.1-1.4-1.7-2.1zM26.5 19.3c.9-1.6 1.7-3.1 2.6-4.7.5-.9-.8-1.9-1.4-1-.9 1.6-1.8 3.2-2.6 4.7-.5 1 .9 1.9 1.4 1zM22 7.2c-.7-.8-2 .3-1.3 1.1.8.9 1.5 1.8 2.3 2.6.7.8 2-.2 1.3-1.1-.7-.8-1.5-1.7-2.3-2.6zM34.6 5.4c0 1.2-.5 2.3-1.2 3.2s.7 1.8 1.4 1c.9-1.2 1.4-2.6 1.5-4.1 0-1.1-1.7-1.2-1.7-.1zM39.7 20.9c-1-1.1-2-2.2-3-3.4-.7-.8-2 .3-1.3 1.1 1 1.1 2 2.2 3 3.3.8.9 2.1-.2 1.3-1zM41 11.5c.3.9 1.9.4 1.6-.5-.2-.7-.4-1.3-.7-2-.1-.4-.5-.8-1-.6-.4.1-.8.6-.6 1 .2.6.4 1.3.7 2.1zM30.5 25.4c-1.5 1.5-2.9 2.9-4.3 4.4-.8.8.4 2 1.2 1.2 1.4-1.4 2.8-2.9 4.3-4.3.6-.8-.5-2.1-1.2-1.3zM41.8 31.5c.4-.2.6-.7.4-1.1-.4-.8-.9-1.6-1.4-2.4-.5-.9-2-.1-1.5.8.4.8.9 1.5 1.3 2.3.3.4.8.6 1.2.4zM26.7 36.2c-.3-.4-.9-.3-1.2 0-.4.3-.3.8 0 1.2.3.4.6.9 1 1.3.6.9 2-.2 1.3-1.1-.4-.5-.8-1-1.1-1.4zM42.1 37.7c-.5-1-2-.2-1.5.8.2.4.4.9.7 1.3.5 1 2 .2 1.5-.8-.2-.4-.4-.8-.7-1.3zM39.2 78.7c.2 4.7-1.1 8.5-6.1 9.4-1.1.2-.6 1.8.4 1.6 5.7-1 7.5-5.6 7.3-11 .1-1.1-1.6-1.1-1.6 0z' class='st1'/%3E%3C/svg%3E") no-repeat 50% 50% !important}body.mask h1.icon.games:before,body.mask h2.icon.games:before,body.mask h3.icon.games:before,body.mask h4.icon.games:before,body.mask h5.icon.games:before,body.mask h6.icon.games:before{background:white !important;-webkit-mask:url("/img/2018/icons/games.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/games.svg") no-repeat 50% 50%}body.mask h1.icon.videos:before,body.mask h2.icon.videos:before,body.mask h3.icon.videos:before,body.mask h4.icon.videos:before,body.mask h5.icon.videos:before,body.mask h6.icon.videos:before{background:white !important;-webkit-mask:url("/img/2018/icons/video.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/video.svg") no-repeat 50% 50%}body.mask h1.icon.screen:before,body.mask h2.icon.screen:before,body.mask h3.icon.screen:before,body.mask h4.icon.screen:before,body.mask h5.icon.screen:before,body.mask h6.icon.screen:before{background:white !important;-webkit-mask:url("/img/2018/icons/screen.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/screen.svg") no-repeat 50% 50%}body.mask h1.icon.win:before,body.mask h2.icon.win:before,body.mask h3.icon.win:before,body.mask h4.icon.win:before,body.mask h5.icon.win:before,body.mask h6.icon.win:before{background:white !important;-webkit-mask:url("/img/2018/icons/win.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/win.svg") no-repeat 50% 50%}body.mask h1.icon.clock:before,body.mask h2.icon.clock:before,body.mask h3.icon.clock:before,body.mask h4.icon.clock:before,body.mask h5.icon.clock:before,body.mask h6.icon.clock:before{background:white !important;-webkit-mask:url("/img/2018/icons/clock.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/clock.svg") no-repeat 50% 50%}body.mask h1.icon.check:before,body.mask h2.icon.check:before,body.mask h3.icon.check:before,body.mask h4.icon.check:before,body.mask h5.icon.check:before,body.mask h6.icon.check:before{background:white !important;-webkit-mask:url("/img/2018/icons/check.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/check.svg") no-repeat 50% 50%}body.mask h1.icon.toggoplus:before,body.mask h2.icon.toggoplus:before,body.mask h3.icon.toggoplus:before,body.mask h4.icon.toggoplus:before,body.mask h5.icon.toggoplus:before,body.mask h6.icon.toggoplus:before{background:white !important;-webkit-mask:url("/img/2018/icons/toggoplus.svg") no-repeat 50% 50%;mask:url("/img/2018/icons/toggoplus.svg") no-repeat 50% 50%}h1.icon:before,h2.icon:before,h3.icon:before,h4.icon:before,h5.icon:before,h6.icon:before{content:"";width:100px;height:85px;display:inline-block;vertical-align:middle;background-repeat:no-repeat;background-position:center center;background-size:contain}h1.icon.ice:before,h2.icon.ice:before,h3.icon.ice:before,h4.icon.ice:before,h5.icon.ice:before,h6.icon.ice:before{background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 46.7 126' enable-background='new 0 0 46.7 126'%3E%3Cstyle type='text/css'%3E.st0%7Bfill:%23201600;%7D .st1%7Bfill:%23656565;%7D%3C/style%3E%3Cpath d='M982 233.6c.1 0 .1-.2 0-.2-.2 0-.2.2 0 .2z' class='st0'/%3E%3Cpath d='M674.9 427.8c-1-.4-2-.7-2.9-1.1 0-.1 0-.3.1-.4 1.1.2 2.1.4 3.2.6-.2.3-.3.6-.4.9z'/%3E%3Cpath d='M46.5 8c-.1-2.6-.5-5.3-2.5-6.8-.3-.2-.7-.4-1.1-.5-.1 0-.2-.1-.3-.1C30-.2 17.5-.1 4.9.6c-.3 0-.5 0-.7 0 0 0 0 0-.1 0-.4 0-.7.2-1 .3-.1 0-.2.1-.4.2-.1.1-.2.2-.3.2 0 0 0 .1-.1.1-.1.1-.1.1-.1.1C.8 3.1.6 5.5.5 7.7 0 20.6-.1 33.6.1 46.5c0 2.5.1 5.1.5 7.6.2 1.7.9 3.6 2.3 4.5 0 4.8 0 9.5-.1 14.3C2.8 77.8 1.6 84.4 4 89c1.8 3.3 5.4 4.4 8.9 4.7 1.2.1 2.5.1 3.7.2-.2 7.2-.4 14.5.2 21.7.3 3.5.5 10.4 5.6 10.4 4.8 0 4.9-6.3 5-9.5.2-7.6.4-15.3.6-22.9 1.6-.1 3.2-.2 4.8-.3 3.7-.1 7.3-.4 9.7-3.6 2.5-3.5 2.3-8.3 2.3-12.4-.1-9.4-.2-18.9-.3-28.3.3-.2.6-.5.9-.8 1.2-1.7 1.3-3.9 1.3-6V9.4c-.2-.5-.2-.9-.2-1.4zM26 106.4c-.1 2.2-.1 4.4-.2 6.7 0 1.1 0 1.7-.1 2.8-.1 3 .2 3.4-.8 6.4-1 3.1-4.8 1.7-5.5-.3s-.8-5.3-.9-6.6c-.2-2.5-.3-4.9-.3-7.4-.1-4.7.1-9.4.2-14 2.7 0 5.3-.2 8-.3-.2 4.2-.3 8.4-.4 12.7zm11-15.2c-3.6.9-8 .5-11.7.6-3.4.1-6.7.3-10.1.4-3.6 0-7.8-.4-9.7-3.9-1.8-3.3-1.1-8.3-1-11.9 0-5.7 0-11.5.1-17.2 1.8-.1 3.3-2 3.7-3.8.5-2.2 0-4.4.3-6.6.1-.5.3-1.1.8-1.2.7-.1 1 .8 1.1 1.5.1 1.1 0 2.5.8 3.4 1 1.1 2.6 1.5 3.9.7 1.4-.8 2-2.5 2.2-4.1.1-1.3-.2-3.6.1-4.8.2-.8.9-.9 1.4-.3s.4 2.7.3 3.5c-.1 2.2-.2 4.5-.3 6.7-.1 1.5-.1 3.1.4 4.5.6 1.4 1.9 2.6 3.5 2.5 1.3-.1 2.4-1.2 2.8-2.4.5-1.2.5-2.5.6-3.8 0-1.4 0-2.8 0-4.2 0-1.1-.4-4.8.5-5.6 1.5-1.3 1.5 3.4 1.5 3.8.2 1.1 1 2.1 2 2.4 1 .4 2.2.1 3-.7 1.2-1.2 1.2-3.1 1.2-4.7-.1-1.5-.1-3-.2-4.5 0-1.1.2-2.6 1.3-2.7 1.5-.2 1.8 1.7 1.9 2.8.1 2.9.2 5.9.3 8.8 0 1 .1 2.1.6 2.9.5.9 1.6 1.5 2.5 1 1.6-.8 1-3.6 2-4.9.1 8.1.2 16.2.3 24.3 0 5.8 1.3 15.8-6.1 17.5zm7.8-46.6c0 .4-.1.9-.3 1.3-.3.5-1 .8-1.5 1.1-1 .6-1.6 1.5-2.1 2.5-.3.7-.3 3.6-1.3 2.7s-.4-3.3-.5-4.4c-.1-1.6-.2-3.2-.2-4.8 0-1.6.1-3.3-.9-4.6-.7-.9-1.9-1.4-3-1.2-1.1.2-2.1 1-2.5 2.1-.3.8-.2 1.7-.2 2.6.1 1.2.2 2.4.2 3.6.1 1.2.1 4.2-1.7 4.3-1 .1-1-1.6-1-2.2 0-.7-.1-1.5-.4-2.1-.5-1.2-1.7-2.1-2.9-1.8-1 .2-1.7 1.1-2 2.1s-.2 2-.1 3c.2 2.9 0 5.7-.4 8.6-.1.8-.5 2.1-1.3 2.5-1.4.7-2-1.1-2.1-2.1-.3-3.3-.3-6.7 0-10 .1-1.2.3-2.5-.1-3.7S19 41.9 17.8 42c-1.7.2-2.5 2.3-2.5 4s.5 3.6-.3 5.1c-.3.6-.9 1.1-1.5 1-.8 0-1.3-.8-1.5-1.6-.2-.8-.1-1.6-.3-2.4-.4-1.7-2.6-2.8-4-1.8-1.3.9-1.2 2.8-1.1 4.3 0 1.9-.2 3.7-.6 5.5-.1.4-.2.7-.4 1-.7.8-2.1.2-2.7-.7-1.2-1.7-1.3-3.9-1.2-5.9.1-13.6.1-27.2.2-40.8 0-2.3.1-4.7 1.4-6.6 0 0 0-.1.1-.1.1-.1.1-.1.2-.2.3-.3.7-.5 1.1-.5 12.5-.7 25.1-.7 37.6 0 .1 0 .2.1.3.2 2 1.1 2.2 3.8 2.2 6.1 0 10.2 0 20.3.1 30.5 0 1.8 0 3.7-.1 5.5zM7.6 10c.2-.5.4-1.1.7-1.6.4-1-1.2-1.6-1.6-.6-.2.6-.4 1.1-.7 1.7-.5 1 1.1 1.5 1.6.5zM16.3 13.1c.9.6 1.9-.7 1-1.4-1.1-.8-1.9-1.8-2.4-3-.4-1-2-.3-1.5.8.5 1.4 1.6 2.7 2.9 3.6zM8.1 20.2c.9-1.2 1.8-2.4 2.6-3.6.6-.9-.7-1.9-1.4-1-.9 1.2-1.8 2.5-2.7 3.7-.5.9.9 1.8 1.5.9zM17.7 23.5c-.7-.8-2 .3-1.3 1.1s1.3 1.5 2 2.3 2-.2 1.3-1.1c-.6-.7-1.3-1.5-2-2.3zM9.4 28.3c-.9 1.2-1.8 2.5-2.7 3.7-.6.9.8 1.8 1.4.9.9-1.2 1.8-2.4 2.7-3.6.6-.9-.8-1.9-1.4-1zM14.7 34.8c-.7-.8-1.9.3-1.2 1.2.5.7 1.1 1.3 1.6 2 .7.8 2-.3 1.3-1.1-.5-.7-1.1-1.4-1.7-2.1zM26.5 19.3c.9-1.6 1.7-3.1 2.6-4.7.5-.9-.8-1.9-1.4-1-.9 1.6-1.8 3.2-2.6 4.7-.5 1 .9 1.9 1.4 1zM22 7.2c-.7-.8-2 .3-1.3 1.1.8.9 1.5 1.8 2.3 2.6.7.8 2-.2 1.3-1.1-.7-.8-1.5-1.7-2.3-2.6zM34.6 5.4c0 1.2-.5 2.3-1.2 3.2s.7 1.8 1.4 1c.9-1.2 1.4-2.6 1.5-4.1 0-1.1-1.7-1.2-1.7-.1zM39.7 20.9c-1-1.1-2-2.2-3-3.4-.7-.8-2 .3-1.3 1.1 1 1.1 2 2.2 3 3.3.8.9 2.1-.2 1.3-1zM41 11.5c.3.9 1.9.4 1.6-.5-.2-.7-.4-1.3-.7-2-.1-.4-.5-.8-1-.6-.4.1-.8.6-.6 1 .2.6.4 1.3.7 2.1zM30.5 25.4c-1.5 1.5-2.9 2.9-4.3 4.4-.8.8.4 2 1.2 1.2 1.4-1.4 2.8-2.9 4.3-4.3.6-.8-.5-2.1-1.2-1.3zM41.8 31.5c.4-.2.6-.7.4-1.1-.4-.8-.9-1.6-1.4-2.4-.5-.9-2-.1-1.5.8.4.8.9 1.5 1.3 2.3.3.4.8.6 1.2.4zM26.7 36.2c-.3-.4-.9-.3-1.2 0-.4.3-.3.8 0 1.2.3.4.6.9 1 1.3.6.9 2-.2 1.3-1.1-.4-.5-.8-1-1.1-1.4zM42.1 37.7c-.5-1-2-.2-1.5.8.2.4.4.9.7 1.3.5 1 2 .2 1.5-.8-.2-.4-.4-.8-.7-1.3zM39.2 78.7c.2 4.7-1.1 8.5-6.1 9.4-1.1.2-.6 1.8.4 1.6 5.7-1 7.5-5.6 7.3-11 .1-1.1-1.6-1.1-1.6 0z' class='st1'/%3E%3C/svg%3E") no-repeat 50% 50%}h1.icon.games:before,h2.icon.games:before,h3.icon.games:before,h4.icon.games:before,h5.icon.games:before,h6.icon.games:before{background:url("/img/2018/icons/games.svg") no-repeat center center}h1.icon.videos:before,h2.icon.videos:before,h3.icon.videos:before,h4.icon.videos:before,h5.icon.videos:before,h6.icon.videos:before{background:url("/img/2018/icons/video.svg") no-repeat center center}h1.icon.screen:before,h2.icon.screen:before,h3.icon.screen:before,h4.icon.screen:before,h5.icon.screen:before,h6.icon.screen:before{background:url("/img/2018/icons/screen.svg") no-repeat center center}h1.icon.win:before,h2.icon.win:before,h3.icon.win:before,h4.icon.win:before,h5.icon.win:before,h6.icon.win:before{background:url("/img/2018/icons/win.svg") no-repeat center center}h1.icon.clock:before,h2.icon.clock:before,h3.icon.clock:before,h4.icon.clock:before,h5.icon.clock:before,h6.icon.clock:before{background:url("/img/2018/icons/clock.svg") no-repeat center center}h1.icon.check:before,h2.icon.check:before,h3.icon.check:before,h4.icon.check:before,h5.icon.check:before,h6.icon.check:before{margin-top:-7px;background:url("/img/2018/icons/check.svg") no-repeat center center}h1.icon.toggoplus:before,h2.icon.toggoplus:before,h3.icon.toggoplus:before,h4.icon.toggoplus:before,h5.icon.toggoplus:before,h6.icon.toggoplus:before{margin-top:-7px;background:url("/img/2018/icons/toggoplus.svg") no-repeat center center}.ticker{background-color:#d80028;color:white;padding:4px 25px;-webkit-box-sizing:border-box;box-sizing:border-box;width:100%;border-radius:6px;-webkit-box-shadow:2px 2px 8px rgba(0,0,0,0.5);box-shadow:2px 2px 8px rgba(0,0,0,0.5);position:relative}.ticker .serie{-webkit-box-flex:1;-ms-flex:1 1;flex:1 1;padding-right:4px;min-width:225px}.ticker .serie .title{color:white;font-size:20px;font-family:"Gibson SemiBold"}.ticker .next{color:white;font-size:14px;line-height:16px;font-family:"Gibson Light"}.ticker .next>span{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;padding:0 3px}.ticker .next .clock{display:inline-block;width:46px;height:46px;margin:-16px 8px;background:#f08701;border-radius:50%;-webkit-box-shadow:2px 1px 8px rgba(0,0,0,0.5);box-shadow:2px 1px 8px rgba(0,0,0,0.5);background-image:url('/media/icons/clock.svg');background-size:40px 40px;background-position:center center;background-repeat:no-repeat}@media (max-width:767px){.ticker .next .clock{width:35px !important;height:35px !important;margin:2px 8px !important}}@media (max-width:500px){.ticker .next .clock{display:none !important}}.ticker .next .datetime{font-family:"Gibson SemiBold";font-size:13px;line-height:15px;letter-spacing:.2px}.singleImage{width:100%;padding:0 1% 2% 1%;-webkit-box-sizing:border-box;box-sizing:border-box}@media (max-width:559px){.singleImage.w33 .inner{max-width:350px}}.singleImage .inner{border-radius:6px;overflow:hidden;-webkit-box-shadow:1px 4px 6px rgba(0,0,0,0.4);box-shadow:1px 4px 6px rgba(0,0,0,0.4)}@supports ((-webkit-filter: drop-shadow(1px 1px 1px red)) or (filter: drop-shadow(1px 1px 1px red))){.singleImage .inner{-webkit-box-shadow:none !important;box-shadow:none !important;-webkit-filter:drop-shadow(1px 4px 6px rgba(0,0,0,0.4));filter:drop-shadow(1px 4px 6px rgba(0,0,0,0.4))}}.singleImage .inner .image{width:100%}.singleImage .inner .image img{max-width:100%}.singleImage .inner .subContent{width:100%;padding:14px 22px;-webkit-box-sizing:border-box;box-sizing:border-box;background-color:white;border-radius:0 0 6px 6px}.singleImage .inner .subContent .title{margin:0 0 8px 0;color:#f08701}.singleImage .inner .subContent p{margin:0;color:#656565}.singleImage a{display:inline-block;vertical-align:bottom}body.ie.ie11 section .inner .createPadding{padding-top:45px !important}body.ie.ie11 section .wavesBottom{padding-top:0px !important;position:relative;-webkit-transform:none !important;transform:none !important;height:auto !important}body.ie.ie11 section .wavesBottom canvas{display:block !important;width:100%}body.ie.ie11 section .wavesBottom svg{width:100%;position:absolute;bottom:-98%;left:0}body.ie:not(.ie11) section .inner .createPadding{padding-top:45px !important}body.ie:not(.ie11) section .wavesBottom{display:none !important}.responsiveAd{position:relative;width:100%;height:0px;padding-bottom:47.998%;margin:20px 0;overflow:hidden}.responsiveAd iframe{position:absolute;width:100%;height:100%;margin:0;padding:0;left:0;border:none}.adBanner{width:100%;padding:8px 12px;-webkit-box-sizing:border-box;box-sizing:border-box;background-color:white;-webkit-filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5));filter:drop-shadow(2px 2px 5px rgba(0,0,0,0.5));z-index:32}.adBanner .title{padding:0;color:#346166;font-size:14px;line-height:16px;font-weight:bold;margin:0;text-transform:uppercase}section.werbung{fill:#c7c5c5;background-color:#c7c5c5}section.werbung h6{color:#346166 !important;font-size:14px;line-height:16px;font-weight:bold;margin:0;text-transform:uppercase}section.bgWhite{fill:white;background-color:white}section.bgWhite h6{color:#346166 !important;font-size:14px;line-height:16px;font-weight:bold;margin:0;text-transform:uppercase}.holder-ad.footer{fill:#c7c5c5;background-color:#c7c5c5}.holder-ad.footer h6{color:#346166 !important;font-size:14px;line-height:16px;font-weight:bold;margin:0;text-transform:uppercase}.headerAd{width:100%}.headerAd .inner{padding:0;width:100%;max-width:1140px;margin:0 auto;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.headerAd .inner .responsiveAdHeader{display:inline-block;margin:0 auto;padding:0 !important}.ad-area .gujAd{filter:url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feGaussianBlur in="SourceAlpha" stdDeviation="6" /><feOffset dx="1" dy="1" result="offsetblur" /><feFlood flood-color="rgba(0,0,0,0.6)" /><feComposite in2="offsetblur" operator="in" /><feMerge><feMergeNode /><feMergeNode in="SourceGraphic" /></feMerge></filter></svg>#filter');-webkit-filter:drop-shadow(0 0 6px rgba(0,0,0,0.6));filter:drop-shadow(0 0 6px rgba(0,0,0,0.6));filter:progid:DXImageTransform.Microsoft.Glow(color=rgba(0,0,0,0.6), strength=0) progid:DXImageTransform.Microsoft.Shadow(color=rgba(0,0,0,0.6), strength=0)}.container .content a{text-decoration:none !important}.holder.rubric .headline a,.holder.rubric .headline a:hover{color:#fff}.holder.rubric h2::before{content:"";display:inline-block;position:relative;top:12px}.holder.rubric h2.primary{margin-bottom:5px}.containerbg{position:absolute;z-index:0}.containerbg img,.containerbg picture{max-width:100%;width:100%}.containerbg.left{left:5%;z-index:2;top:-5%}.containerbg.right{right:5%;z-index:2;top:-5%}@media (max-width:1199px){.containerbg.left,.containerbg.right{width:16%}}#admin .pane_wrapper section>.inner>.content{z-index:inherit !important}#admin .pane_wrapper .teaserLayer{z-index:9999 !important}#admin .pane_wrapper .wavesBottom{display:none !important;z-index:-1 !important}#admin .fixHeadline{z-index:99999 !important}#admin~#layerwrapper{z-index:999999 !important}
.ico-plus::before     { background-position:    -1px    -85px; width:  70px; height:  70px;}
 .ico-minus::before    { background-position:  -90px  -85px; width:  70px; height:  70px;}
 .ico-close::before    { background-position: -180px  -85px; width:  70px; height:  70px;}
 .ico-pause::before    { background-position: -270px  -85px; width:  70px; height:  70px;}
 .ico-play::before     { background-position:   -3px -230px; width:  70px; height:  70px;}
 .ico-corner-xl::before { background-position: -352px  -86px; width:  70px; height:  70px;}
 .ico-corner-md::before { background-position: -435px  -87px; width:  50px; height:  50px;}
 .ico-big::before      { background-position: -505px  -90px; width: 160px; height: 120px;}
 .ico-anchor::before   { background-position:  -95px -235px; width:  75px; height:  60px;}
 .ico-small::before    { background-position: -200px -230px; width: 40px;  height:  30px;}
 .ico-medium::before   { background-position: -250px -225px; width: 65px;  height:  50px;}
 .ico-medium_white::before   { background-position: -375px -225px; width: 65px;  height:  50px;}
 .ico-small_white::before   { background-position: -325px -225px; width: 40px;  height:  30px;}

.theme1c{color:#f08701 !important;}
 .theme1bg{background-color:#f08701 !important;}
 .theme1hbg:hover, .theme1hbg.active { background-color: #f08701; }
 .theme1bc{border-color:#f08701 !important;}
 .theme1sprite::before {background-image: url(/media/icon-1-13111.png);}
 
 .navi-1-bg:after{background-image: url(/media/icon-1-13111.png);}
 .navbar-nav>li:hover .navi-1-bg:after,
 .navbar-nav>li.active .navi-1-bg:after{background-color: #f08701;}
 
 /* Layer */
 #overlay #contentWrapper.theme1  #layerContent{border-color: #f08701;}
 #inlineAd.theme1  div:nth-child(2) div:first-child > div:first-child{border-color: #f08701;}

.theme2c{color:#f70e50 !important;}
 .theme2bg{background-color:#f70e50 !important;}
 .theme2hbg:hover, .theme2hbg.active { background-color: #f70e50; }
 .theme2bc{border-color:#f70e50 !important;}
 .theme2sprite::before {background-image: url(/media/icon-2-13115.png);}
 
 .navi-2-bg:after{background-image: url(/media/icon-2-13115.png);}
 .navbar-nav>li:hover .navi-2-bg:after,
 .navbar-nav>li.active .navi-2-bg:after{background-color: #f70e50;}
 
 /* Layer */
 #overlay #contentWrapper.theme2  #layerContent{border-color: #f70e50;}
 #inlineAd.theme2  div:nth-child(2) div:first-child > div:first-child{border-color: #f70e50;}

.theme3c{color:#fad71e !important;}
 .theme3bg{background-color:#fad71e !important;}
 .theme3hbg:hover, .theme3hbg.active { background-color: #fad71e; }
 .theme3bc{border-color:#fad71e !important;}
 .theme3sprite::before {background-image: url(/media/icon-3-13117.png);}
 
 .navi-3-bg:after{background-image: url(/media/icon-3-13117.png);}
 .navbar-nav>li:hover .navi-3-bg:after,
 .navbar-nav>li.active .navi-3-bg:after{background-color: #fad71e;}
 
 /* Layer */
 #overlay #contentWrapper.theme3  #layerContent{border-color: #fad71e;}
 #inlineAd.theme3  div:nth-child(2) div:first-child > div:first-child{border-color: #fad71e;}

.theme4c{color:#af008e !important;}
 .theme4bg{background-color:#af008e !important;}
 .theme4hbg:hover, .theme4hbg.active { background-color: #af008e; }
 .theme4bc{border-color:#af008e !important;}
 .theme4sprite::before {background-image: url(/media/icon-4-13117.png);}
 
 .navi-4-bg:after{background-image: url(/media/icon-4-13117.png);}
 .navbar-nav>li:hover .navi-4-bg:after,
 .navbar-nav>li.active .navi-4-bg:after{background-color: #af008e;}
 
 /* Layer */
 #overlay #contentWrapper.theme4  #layerContent{border-color: #af008e;}
 #inlineAd.theme4  div:nth-child(2) div:first-child > div:first-child{border-color: #af008e;}

.theme5c{color:#d7d700 !important;}
 .theme5bg{background-color:#d7d700 !important;}
 .theme5hbg:hover, .theme5hbg.active { background-color: #d7d700; }
 .theme5bc{border-color:#d7d700 !important;}
 .theme5sprite::before {background-image: url(/media/icon-5-13117.png);}
 
 .navi-5-bg:after{background-image: url(/media/icon-5-13117.png);}
 .navbar-nav>li:hover .navi-5-bg:after,
 .navbar-nav>li.active .navi-5-bg:after{background-color: #d7d700;}
 
 /* Layer */
 #overlay #contentWrapper.theme5  #layerContent{border-color: #d7d700;}
 #inlineAd.theme5  div:nth-child(2) div:first-child > div:first-child{border-color: #d7d700;}

.theme6c{color:#ff6108 !important;}
 .theme6bg{background-color:#ff6108 !important;}
 .theme6hbg:hover, .theme6hbg.active { background-color: #ff6108; }
 .theme6bc{border-color:#ff6108 !important;}
 .theme6sprite::before {background-image: url(/media/icon-6-13118.png);}
 
 .navi-6-bg:after{background-image: url(/media/icon-6-13118.png);}
 .navbar-nav>li:hover .navi-6-bg:after,
 .navbar-nav>li.active .navi-6-bg:after{background-color: #ff6108;}
 
 /* Layer */
 #overlay #contentWrapper.theme6  #layerContent{border-color: #ff6108;}
 #inlineAd.theme6  div:nth-child(2) div:first-child > div:first-child{border-color: #ff6108;}

.theme7c{color:#356164 !important;}
 .theme7bg{background-color:#356164 !important;}
 .theme7hbg:hover, .theme7hbg.active { background-color: #356164; }
 .theme7bc{border-color:#356164 !important;}
 .theme7sprite::before {background-image: url(/media/icon-7-13110.png);}
 
 .navi-7-bg:after{background-image: url(/media/icon-7-13110.png);}
 .navbar-nav>li:hover .navi-7-bg:after,
 .navbar-nav>li.active .navi-7-bg:after{background-color: #356164;}
 
 /* Layer */
 #overlay #contentWrapper.theme7  #layerContent{border-color: #356164;}
 #inlineAd.theme7  div:nth-child(2) div:first-child > div:first-child{border-color: #356164;}

.theme8c{color:#1b98de !important;}
 .theme8bg{background-color:#1b98de !important;}
 .theme8hbg:hover, .theme8hbg.active { background-color: #1b98de; }
 .theme8bc{border-color:#1b98de !important;}
 .theme8sprite::before {background-image: url(/media/icon-8-13111.png);}
 
 .navi-8-bg:after{background-image: url(/media/icon-8-13111.png);}
 .navbar-nav>li:hover .navi-8-bg:after,
 .navbar-nav>li.active .navi-8-bg:after{background-color: #1b98de;}
 
 /* Layer */
 #overlay #contentWrapper.theme8  #layerContent{border-color: #1b98de;}
 #inlineAd.theme8  div:nth-child(2) div:first-child > div:first-child{border-color: #1b98de;}

.theme9c{color:#dc2402 !important;}
 .theme9bg{background-color:#dc2402 !important;}
 .theme9hbg:hover, .theme9hbg.active { background-color: #dc2402; }
 .theme9bc{border-color:#dc2402 !important;}
 .theme9sprite::before {background-image: url(/media/icon-9-13110.png);}
 
 .navi-9-bg:after{background-image: url(/media/icon-9-13110.png);}
 .navbar-nav>li:hover .navi-9-bg:after,
 .navbar-nav>li.active .navi-9-bg:after{background-color: #dc2402;}
 
 /* Layer */
 #overlay #contentWrapper.theme9  #layerContent{border-color: #dc2402;}
 #inlineAd.theme9  div:nth-child(2) div:first-child > div:first-child{border-color: #dc2402;}

.theme10c{color:#007377 !important;}
 .theme10bg{background-color:#007377 !important;}
 .theme10hbg:hover, .theme10hbg.active { background-color: #007377; }
 .theme10bc{border-color:#007377 !important;}
 .theme10sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-10-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-10-bg:after,
 .navbar-nav>li.active .navi-10-bg:after{background-color: #007377;}
 
 /* Layer */
 #overlay #contentWrapper.theme10  #layerContent{border-color: #007377;}
 #inlineAd.theme10  div:nth-child(2) div:first-child > div:first-child{border-color: #007377;}

.theme12c{color:#000000 !important;}
 .theme12bg{background-color:#000000 !important;}
 .theme12hbg:hover, .theme12hbg.active { background-color: #000000; }
 .theme12bc{border-color:#000000 !important;}
 .theme12sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-12-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-12-bg:after,
 .navbar-nav>li.active .navi-12-bg:after{background-color: #000000;}
 
 /* Layer */
 #overlay #contentWrapper.theme12  #layerContent{border-color: #000000;}
 #inlineAd.theme12  div:nth-child(2) div:first-child > div:first-child{border-color: #000000;}

.theme13c{color:#FFFFFF !important;}
 .theme13bg{background-color:#FFFFFF !important;}
 .theme13hbg:hover, .theme13hbg.active { background-color: #FFFFFF; }
 .theme13bc{border-color:#FFFFFF !important;}
 .theme13sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-13-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-13-bg:after,
 .navbar-nav>li.active .navi-13-bg:after{background-color: #FFFFFF;}
 
 /* Layer */
 #overlay #contentWrapper.theme13  #layerContent{border-color: #FFFFFF;}
 #inlineAd.theme13  div:nth-child(2) div:first-child > div:first-child{border-color: #FFFFFF;}

.theme15c{color:#336c50 !important;}
 .theme15bg{background-color:#336c50 !important;}
 .theme15hbg:hover, .theme15hbg.active { background-color: #336c50; }
 .theme15bc{border-color:#336c50 !important;}
 .theme15sprite::before {background-image: url(/media/icon-15-13112.png);}
 
 .navi-15-bg:after{background-image: url(/media/icon-15-13112.png);}
 .navbar-nav>li:hover .navi-15-bg:after,
 .navbar-nav>li.active .navi-15-bg:after{background-color: #336c50;}
 
 /* Layer */
 #overlay #contentWrapper.theme15  #layerContent{border-color: #336c50;}
 #inlineAd.theme15  div:nth-child(2) div:first-child > div:first-child{border-color: #336c50;}

.theme16c{color:#008a8c !important;}
 .theme16bg{background-color:#008a8c !important;}
 .theme16hbg:hover, .theme16hbg.active { background-color: #008a8c; }
 .theme16bc{border-color:#008a8c !important;}
 .theme16sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-16-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-16-bg:after,
 .navbar-nav>li.active .navi-16-bg:after{background-color: #008a8c;}
 
 /* Layer */
 #overlay #contentWrapper.theme16  #layerContent{border-color: #008a8c;}
 #inlineAd.theme16  div:nth-child(2) div:first-child > div:first-child{border-color: #008a8c;}

.theme17c{color:#770a07 !important;}
 .theme17bg{background-color:#770a07 !important;}
 .theme17hbg:hover, .theme17hbg.active { background-color: #770a07; }
 .theme17bc{border-color:#770a07 !important;}
 .theme17sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-17-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-17-bg:after,
 .navbar-nav>li.active .navi-17-bg:after{background-color: #770a07;}
 
 /* Layer */
 #overlay #contentWrapper.theme17  #layerContent{border-color: #770a07;}
 #inlineAd.theme17  div:nth-child(2) div:first-child > div:first-child{border-color: #770a07;}

.theme18c{color:#0071bb !important;}
 .theme18bg{background-color:#0071bb !important;}
 .theme18hbg:hover, .theme18hbg.active { background-color: #0071bb; }
 .theme18bc{border-color:#0071bb !important;}
 .theme18sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-18-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-18-bg:after,
 .navbar-nav>li.active .navi-18-bg:after{background-color: #0071bb;}
 
 /* Layer */
 #overlay #contentWrapper.theme18  #layerContent{border-color: #0071bb;}
 #inlineAd.theme18  div:nth-child(2) div:first-child > div:first-child{border-color: #0071bb;}

.theme19c{color:#004f9a !important;}
 .theme19bg{background-color:#004f9a !important;}
 .theme19hbg:hover, .theme19hbg.active { background-color: #004f9a; }
 .theme19bc{border-color:#004f9a !important;}
 .theme19sprite::before {background-image: url(/media/icon-19-13111.png);}
 
 .navi-19-bg:after{background-image: url(/media/icon-19-13111.png);}
 .navbar-nav>li:hover .navi-19-bg:after,
 .navbar-nav>li.active .navi-19-bg:after{background-color: #004f9a;}
 
 /* Layer */
 #overlay #contentWrapper.theme19  #layerContent{border-color: #004f9a;}
 #inlineAd.theme19  div:nth-child(2) div:first-child > div:first-child{border-color: #004f9a;}

.theme20c{color:#00a79e !important;}
 .theme20bg{background-color:#00a79e !important;}
 .theme20hbg:hover, .theme20hbg.active { background-color: #00a79e; }
 .theme20bc{border-color:#00a79e !important;}
 .theme20sprite::before {background-image: url(/media/icon-20-13111.png);}
 
 .navi-20-bg:after{background-image: url(/media/icon-20-13111.png);}
 .navbar-nav>li:hover .navi-20-bg:after,
 .navbar-nav>li.active .navi-20-bg:after{background-color: #00a79e;}
 
 /* Layer */
 #overlay #contentWrapper.theme20  #layerContent{border-color: #00a79e;}
 #inlineAd.theme20  div:nth-child(2) div:first-child > div:first-child{border-color: #00a79e;}

.theme21c{color:#141b3f !important;}
 .theme21bg{background-color:#141b3f !important;}
 .theme21hbg:hover, .theme21hbg.active { background-color: #141b3f; }
 .theme21bc{border-color:#141b3f !important;}
 .theme21sprite::before {background-image: url(/media/icon-21-13111.png);}
 
 .navi-21-bg:after{background-image: url(/media/icon-21-13111.png);}
 .navbar-nav>li:hover .navi-21-bg:after,
 .navbar-nav>li.active .navi-21-bg:after{background-color: #141b3f;}
 
 /* Layer */
 #overlay #contentWrapper.theme21  #layerContent{border-color: #141b3f;}
 #inlineAd.theme21  div:nth-child(2) div:first-child > div:first-child{border-color: #141b3f;}

.theme22c{color:#441a1a !important;}
 .theme22bg{background-color:#441a1a !important;}
 .theme22hbg:hover, .theme22hbg.active { background-color: #441a1a; }
 .theme22bc{border-color:#441a1a !important;}
 .theme22sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-22-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-22-bg:after,
 .navbar-nav>li.active .navi-22-bg:after{background-color: #441a1a;}
 
 /* Layer */
 #overlay #contentWrapper.theme22  #layerContent{border-color: #441a1a;}
 #inlineAd.theme22  div:nth-child(2) div:first-child > div:first-child{border-color: #441a1a;}

.theme23c{color:#682176 !important;}
 .theme23bg{background-color:#682176 !important;}
 .theme23hbg:hover, .theme23hbg.active { background-color: #682176; }
 .theme23bc{border-color:#682176 !important;}
 .theme23sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-23-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-23-bg:after,
 .navbar-nav>li.active .navi-23-bg:after{background-color: #682176;}
 
 /* Layer */
 #overlay #contentWrapper.theme23  #layerContent{border-color: #682176;}
 #inlineAd.theme23  div:nth-child(2) div:first-child > div:first-child{border-color: #682176;}

.theme24c{color:#FFFFFF !important;}
 .theme24bg{background-color:#FFFFFF !important;}
 .theme24hbg:hover, .theme24hbg.active { background-color: #FFFFFF; }
 .theme24bc{border-color:#FFFFFF !important;}
 .theme24sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-24-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-24-bg:after,
 .navbar-nav>li.active .navi-24-bg:after{background-color: #FFFFFF;}
 
 /* Layer */
 #overlay #contentWrapper.theme24  #layerContent{border-color: #FFFFFF;}
 #inlineAd.theme24  div:nth-child(2) div:first-child > div:first-child{border-color: #FFFFFF;}

.theme25c{color:#3b6383 !important;}
 .theme25bg{background-color:#3b6383 !important;}
 .theme25hbg:hover, .theme25hbg.active { background-color: #3b6383; }
 .theme25bc{border-color:#3b6383 !important;}
 .theme25sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-25-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-25-bg:after,
 .navbar-nav>li.active .navi-25-bg:after{background-color: #3b6383;}
 
 /* Layer */
 #overlay #contentWrapper.theme25  #layerContent{border-color: #3b6383;}
 #inlineAd.theme25  div:nth-child(2) div:first-child > div:first-child{border-color: #3b6383;}

.theme26c{color:#ee7202 !important;}
 .theme26bg{background-color:#ee7202 !important;}
 .theme26hbg:hover, .theme26hbg.active { background-color: #ee7202; }
 .theme26bc{border-color:#ee7202 !important;}
 .theme26sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-26-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-26-bg:after,
 .navbar-nav>li.active .navi-26-bg:after{background-color: #ee7202;}
 
 /* Layer */
 #overlay #contentWrapper.theme26  #layerContent{border-color: #ee7202;}
 #inlineAd.theme26  div:nth-child(2) div:first-child > div:first-child{border-color: #ee7202;}

.theme27c{color:#ee1717 !important;}
 .theme27bg{background-color:#ee1717 !important;}
 .theme27hbg:hover, .theme27hbg.active { background-color: #ee1717; }
 .theme27bc{border-color:#ee1717 !important;}
 .theme27sprite::before {background-image: url(/media/icon-27-13111.png);}
 
 .navi-27-bg:after{background-image: url(/media/icon-27-13111.png);}
 .navbar-nav>li:hover .navi-27-bg:after,
 .navbar-nav>li.active .navi-27-bg:after{background-color: #ee1717;}
 
 /* Layer */
 #overlay #contentWrapper.theme27  #layerContent{border-color: #ee1717;}
 #inlineAd.theme27  div:nth-child(2) div:first-child > div:first-child{border-color: #ee1717;}

.theme28c{color:#573468 !important;}
 .theme28bg{background-color:#573468 !important;}
 .theme28hbg:hover, .theme28hbg.active { background-color: #573468; }
 .theme28bc{border-color:#573468 !important;}
 .theme28sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-28-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-28-bg:after,
 .navbar-nav>li.active .navi-28-bg:after{background-color: #573468;}
 
 /* Layer */
 #overlay #contentWrapper.theme28  #layerContent{border-color: #573468;}
 #inlineAd.theme28  div:nth-child(2) div:first-child > div:first-child{border-color: #573468;}

.theme29c{color:#522583 !important;}
 .theme29bg{background-color:#522583 !important;}
 .theme29hbg:hover, .theme29hbg.active { background-color: #522583; }
 .theme29bc{border-color:#522583 !important;}
 .theme29sprite::before {background-image: url(/media/icon-29-13111.png);}
 
 .navi-29-bg:after{background-image: url(/media/icon-29-13111.png);}
 .navbar-nav>li:hover .navi-29-bg:after,
 .navbar-nav>li.active .navi-29-bg:after{background-color: #522583;}
 
 /* Layer */
 #overlay #contentWrapper.theme29  #layerContent{border-color: #522583;}
 #inlineAd.theme29  div:nth-child(2) div:first-child > div:first-child{border-color: #522583;}

.theme30c{color:#492174 !important;}
 .theme30bg{background-color:#492174 !important;}
 .theme30hbg:hover, .theme30hbg.active { background-color: #492174; }
 .theme30bc{border-color:#492174 !important;}
 .theme30sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-30-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-30-bg:after,
 .navbar-nav>li.active .navi-30-bg:after{background-color: #492174;}
 
 /* Layer */
 #overlay #contentWrapper.theme30  #layerContent{border-color: #492174;}
 #inlineAd.theme30  div:nth-child(2) div:first-child > div:first-child{border-color: #492174;}

.theme31c{color:#5497b2 !important;}
 .theme31bg{background-color:#5497b2 !important;}
 .theme31hbg:hover, .theme31hbg.active { background-color: #5497b2; }
 .theme31bc{border-color:#5497b2 !important;}
 .theme31sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-31-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-31-bg:after,
 .navbar-nav>li.active .navi-31-bg:after{background-color: #5497b2;}
 
 /* Layer */
 #overlay #contentWrapper.theme31  #layerContent{border-color: #5497b2;}
 #inlineAd.theme31  div:nth-child(2) div:first-child > div:first-child{border-color: #5497b2;}

.theme32c{color:#2d4570 !important;}
 .theme32bg{background-color:#2d4570 !important;}
 .theme32hbg:hover, .theme32hbg.active { background-color: #2d4570; }
 .theme32bc{border-color:#2d4570 !important;}
 .theme32sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-32-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-32-bg:after,
 .navbar-nav>li.active .navi-32-bg:after{background-color: #2d4570;}
 
 /* Layer */
 #overlay #contentWrapper.theme32  #layerContent{border-color: #2d4570;}
 #inlineAd.theme32  div:nth-child(2) div:first-child > div:first-child{border-color: #2d4570;}

.theme33c{color:#273588 !important;}
 .theme33bg{background-color:#273588 !important;}
 .theme33hbg:hover, .theme33hbg.active { background-color: #273588; }
 .theme33bc{border-color:#273588 !important;}
 .theme33sprite::before {background-image: url(/media/icon-33-13111.png);}
 
 .navi-33-bg:after{background-image: url(/media/icon-33-13111.png);}
 .navbar-nav>li:hover .navi-33-bg:after,
 .navbar-nav>li.active .navi-33-bg:after{background-color: #273588;}
 
 /* Layer */
 #overlay #contentWrapper.theme33  #layerContent{border-color: #273588;}
 #inlineAd.theme33  div:nth-child(2) div:first-child > div:first-child{border-color: #273588;}

.theme34c{color:#75540f !important;}
 .theme34bg{background-color:#75540f !important;}
 .theme34hbg:hover, .theme34hbg.active { background-color: #75540f; }
 .theme34bc{border-color:#75540f !important;}
 .theme34sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-34-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-34-bg:after,
 .navbar-nav>li.active .navi-34-bg:after{background-color: #75540f;}
 
 /* Layer */
 #overlay #contentWrapper.theme34  #layerContent{border-color: #75540f;}
 #inlineAd.theme34  div:nth-child(2) div:first-child > div:first-child{border-color: #75540f;}

.theme35c{color:#af9f00 !important;}
 .theme35bg{background-color:#af9f00 !important;}
 .theme35hbg:hover, .theme35hbg.active { background-color: #af9f00; }
 .theme35bc{border-color:#af9f00 !important;}
 .theme35sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-35-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-35-bg:after,
 .navbar-nav>li.active .navi-35-bg:after{background-color: #af9f00;}
 
 /* Layer */
 #overlay #contentWrapper.theme35  #layerContent{border-color: #af9f00;}
 #inlineAd.theme35  div:nth-child(2) div:first-child > div:first-child{border-color: #af9f00;}

.theme36c{color:#000000 !important;}
 .theme36bg{background-color:#000000 !important;}
 .theme36hbg:hover, .theme36hbg.active { background-color: #000000; }
 .theme36bc{border-color:#000000 !important;}
 .theme36sprite::before {background-image: url(/media/icon-36-13111.png);}
 
 .navi-36-bg:after{background-image: url(/media/icon-36-13111.png);}
 .navbar-nav>li:hover .navi-36-bg:after,
 .navbar-nav>li.active .navi-36-bg:after{background-color: #000000;}
 
 /* Layer */
 #overlay #contentWrapper.theme36  #layerContent{border-color: #000000;}
 #inlineAd.theme36  div:nth-child(2) div:first-child > div:first-child{border-color: #000000;}

.theme37c{color:#02d3cc !important;}
 .theme37bg{background-color:#02d3cc !important;}
 .theme37hbg:hover, .theme37hbg.active { background-color: #02d3cc; }
 .theme37bc{border-color:#02d3cc !important;}
 .theme37sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-37-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-37-bg:after,
 .navbar-nav>li.active .navi-37-bg:after{background-color: #02d3cc;}
 
 /* Layer */
 #overlay #contentWrapper.theme37  #layerContent{border-color: #02d3cc;}
 #inlineAd.theme37  div:nth-child(2) div:first-child > div:first-child{border-color: #02d3cc;}

.theme38c{color:#00e0d3 !important;}
 .theme38bg{background-color:#00e0d3 !important;}
 .theme38hbg:hover, .theme38hbg.active { background-color: #00e0d3; }
 .theme38bc{border-color:#00e0d3 !important;}
 .theme38sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-38-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-38-bg:after,
 .navbar-nav>li.active .navi-38-bg:after{background-color: #00e0d3;}
 
 /* Layer */
 #overlay #contentWrapper.theme38  #layerContent{border-color: #00e0d3;}
 #inlineAd.theme38  div:nth-child(2) div:first-child > div:first-child{border-color: #00e0d3;}

.theme39c{color:#e2007a !important;}
 .theme39bg{background-color:#e2007a !important;}
 .theme39hbg:hover, .theme39hbg.active { background-color: #e2007a; }
 .theme39bc{border-color:#e2007a !important;}
 .theme39sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-39-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-39-bg:after,
 .navbar-nav>li.active .navi-39-bg:after{background-color: #e2007a;}
 
 /* Layer */
 #overlay #contentWrapper.theme39  #layerContent{border-color: #e2007a;}
 #inlineAd.theme39  div:nth-child(2) div:first-child > div:first-child{border-color: #e2007a;}

.theme40c{color:#415e63 !important;}
 .theme40bg{background-color:#415e63 !important;}
 .theme40hbg:hover, .theme40hbg.active { background-color: #415e63; }
 .theme40bc{border-color:#415e63 !important;}
 .theme40sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-40-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-40-bg:after,
 .navbar-nav>li.active .navi-40-bg:after{background-color: #415e63;}
 
 /* Layer */
 #overlay #contentWrapper.theme40  #layerContent{border-color: #415e63;}
 #inlineAd.theme40  div:nth-child(2) div:first-child > div:first-child{border-color: #415e63;}

.theme41c{color:#961808 !important;}
 .theme41bg{background-color:#961808 !important;}
 .theme41hbg:hover, .theme41hbg.active { background-color: #961808; }
 .theme41bc{border-color:#961808 !important;}
 .theme41sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-41-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-41-bg:after,
 .navbar-nav>li.active .navi-41-bg:after{background-color: #961808;}
 
 /* Layer */
 #overlay #contentWrapper.theme41  #layerContent{border-color: #961808;}
 #inlineAd.theme41  div:nth-child(2) div:first-child > div:first-child{border-color: #961808;}

.theme42c{color:#4fb8ff !important;}
 .theme42bg{background-color:#4fb8ff !important;}
 .theme42hbg:hover, .theme42hbg.active { background-color: #4fb8ff; }
 .theme42bc{border-color:#4fb8ff !important;}
 .theme42sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-42-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-42-bg:after,
 .navbar-nav>li.active .navi-42-bg:after{background-color: #4fb8ff;}
 
 /* Layer */
 #overlay #contentWrapper.theme42  #layerContent{border-color: #4fb8ff;}
 #inlineAd.theme42  div:nth-child(2) div:first-child > div:first-child{border-color: #4fb8ff;}

.theme43c{color:#000000 !important;}
 .theme43bg{background-color:#000000 !important;}
 .theme43hbg:hover, .theme43hbg.active { background-color: #000000; }
 .theme43bc{border-color:#000000 !important;}
 .theme43sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-43-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-43-bg:after,
 .navbar-nav>li.active .navi-43-bg:after{background-color: #000000;}
 
 /* Layer */
 #overlay #contentWrapper.theme43  #layerContent{border-color: #000000;}
 #inlineAd.theme43  div:nth-child(2) div:first-child > div:first-child{border-color: #000000;}

.theme44c{color:#d73a2c !important;}
 .theme44bg{background-color:#d73a2c !important;}
 .theme44hbg:hover, .theme44hbg.active { background-color: #d73a2c; }
 .theme44bc{border-color:#d73a2c !important;}
 .theme44sprite::before {background-image: url(/media/icon-44-13111.png);}
 
 .navi-44-bg:after{background-image: url(/media/icon-44-13111.png);}
 .navbar-nav>li:hover .navi-44-bg:after,
 .navbar-nav>li.active .navi-44-bg:after{background-color: #d73a2c;}
 
 /* Layer */
 #overlay #contentWrapper.theme44  #layerContent{border-color: #d73a2c;}
 #inlineAd.theme44  div:nth-child(2) div:first-child > div:first-child{border-color: #d73a2c;}

.theme45c{color:#4f3430 !important;}
 .theme45bg{background-color:#4f3430 !important;}
 .theme45hbg:hover, .theme45hbg.active { background-color: #4f3430; }
 .theme45bc{border-color:#4f3430 !important;}
 .theme45sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-45-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-45-bg:after,
 .navbar-nav>li.active .navi-45-bg:after{background-color: #4f3430;}
 
 /* Layer */
 #overlay #contentWrapper.theme45  #layerContent{border-color: #4f3430;}
 #inlineAd.theme45  div:nth-child(2) div:first-child > div:first-child{border-color: #4f3430;}

.theme46c{color:#7f0e57 !important;}
 .theme46bg{background-color:#7f0e57 !important;}
 .theme46hbg:hover, .theme46hbg.active { background-color: #7f0e57; }
 .theme46bc{border-color:#7f0e57 !important;}
 .theme46sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-46-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-46-bg:after,
 .navbar-nav>li.active .navi-46-bg:after{background-color: #7f0e57;}
 
 /* Layer */
 #overlay #contentWrapper.theme46  #layerContent{border-color: #7f0e57;}
 #inlineAd.theme46  div:nth-child(2) div:first-child > div:first-child{border-color: #7f0e57;}

.theme47c{color:#419f89 !important;}
 .theme47bg{background-color:#419f89 !important;}
 .theme47hbg:hover, .theme47hbg.active { background-color: #419f89; }
 .theme47bc{border-color:#419f89 !important;}
 .theme47sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-47-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-47-bg:after,
 .navbar-nav>li.active .navi-47-bg:after{background-color: #419f89;}
 
 /* Layer */
 #overlay #contentWrapper.theme47  #layerContent{border-color: #419f89;}
 #inlineAd.theme47  div:nth-child(2) div:first-child > div:first-child{border-color: #419f89;}

.theme48c{color:#bd236a !important;}
 .theme48bg{background-color:#bd236a !important;}
 .theme48hbg:hover, .theme48hbg.active { background-color: #bd236a; }
 .theme48bc{border-color:#bd236a !important;}
 .theme48sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-48-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-48-bg:after,
 .navbar-nav>li.active .navi-48-bg:after{background-color: #bd236a;}
 
 /* Layer */
 #overlay #contentWrapper.theme48  #layerContent{border-color: #bd236a;}
 #inlineAd.theme48  div:nth-child(2) div:first-child > div:first-child{border-color: #bd236a;}

.theme49c{color:#371b06 !important;}
 .theme49bg{background-color:#371b06 !important;}
 .theme49hbg:hover, .theme49hbg.active { background-color: #371b06; }
 .theme49bc{border-color:#371b06 !important;}
 .theme49sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-49-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-49-bg:after,
 .navbar-nav>li.active .navi-49-bg:after{background-color: #371b06;}
 
 /* Layer */
 #overlay #contentWrapper.theme49  #layerContent{border-color: #371b06;}
 #inlineAd.theme49  div:nth-child(2) div:first-child > div:first-child{border-color: #371b06;}

.theme50c{color:#47567d !important;}
 .theme50bg{background-color:#47567d !important;}
 .theme50hbg:hover, .theme50hbg.active { background-color: #47567d; }
 .theme50bc{border-color:#47567d !important;}
 .theme50sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-50-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-50-bg:after,
 .navbar-nav>li.active .navi-50-bg:after{background-color: #47567d;}
 
 /* Layer */
 #overlay #contentWrapper.theme50  #layerContent{border-color: #47567d;}
 #inlineAd.theme50  div:nth-child(2) div:first-child > div:first-child{border-color: #47567d;}

.theme51c{color:#0070bb !important;}
 .theme51bg{background-color:#0070bb !important;}
 .theme51hbg:hover, .theme51hbg.active { background-color: #0070bb; }
 .theme51bc{border-color:#0070bb !important;}
 .theme51sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-51-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-51-bg:after,
 .navbar-nav>li.active .navi-51-bg:after{background-color: #0070bb;}
 
 /* Layer */
 #overlay #contentWrapper.theme51  #layerContent{border-color: #0070bb;}
 #inlineAd.theme51  div:nth-child(2) div:first-child > div:first-child{border-color: #0070bb;}

.theme52c{color:#1e6f33 !important;}
 .theme52bg{background-color:#1e6f33 !important;}
 .theme52hbg:hover, .theme52hbg.active { background-color: #1e6f33; }
 .theme52bc{border-color:#1e6f33 !important;}
 .theme52sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-52-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-52-bg:after,
 .navbar-nav>li.active .navi-52-bg:after{background-color: #1e6f33;}
 
 /* Layer */
 #overlay #contentWrapper.theme52  #layerContent{border-color: #1e6f33;}
 #inlineAd.theme52  div:nth-child(2) div:first-child > div:first-child{border-color: #1e6f33;}

.theme53c{color:#99bc48 !important;}
 .theme53bg{background-color:#99bc48 !important;}
 .theme53hbg:hover, .theme53hbg.active { background-color: #99bc48; }
 .theme53bc{border-color:#99bc48 !important;}
 .theme53sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-53-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-53-bg:after,
 .navbar-nav>li.active .navi-53-bg:after{background-color: #99bc48;}
 
 /* Layer */
 #overlay #contentWrapper.theme53  #layerContent{border-color: #99bc48;}
 #inlineAd.theme53  div:nth-child(2) div:first-child > div:first-child{border-color: #99bc48;}

.theme54c{color:#004f9a !important;}
 .theme54bg{background-color:#004f9a !important;}
 .theme54hbg:hover, .theme54hbg.active { background-color: #004f9a; }
 .theme54bc{border-color:#004f9a !important;}
 .theme54sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-54-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-54-bg:after,
 .navbar-nav>li.active .navi-54-bg:after{background-color: #004f9a;}
 
 /* Layer */
 #overlay #contentWrapper.theme54  #layerContent{border-color: #004f9a;}
 #inlineAd.theme54  div:nth-child(2) div:first-child > div:first-child{border-color: #004f9a;}

.theme55c{color:#c3ff1a !important;}
 .theme55bg{background-color:#c3ff1a !important;}
 .theme55hbg:hover, .theme55hbg.active { background-color: #c3ff1a; }
 .theme55bc{border-color:#c3ff1a !important;}
 .theme55sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-55-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-55-bg:after,
 .navbar-nav>li.active .navi-55-bg:after{background-color: #c3ff1a;}
 
 /* Layer */
 #overlay #contentWrapper.theme55  #layerContent{border-color: #c3ff1a;}
 #inlineAd.theme55  div:nth-child(2) div:first-child > div:first-child{border-color: #c3ff1a;}

.theme56c{color:#009ac3 !important;}
 .theme56bg{background-color:#009ac3 !important;}
 .theme56hbg:hover, .theme56hbg.active { background-color: #009ac3; }
 .theme56bc{border-color:#009ac3 !important;}
 .theme56sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-56-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-56-bg:after,
 .navbar-nav>li.active .navi-56-bg:after{background-color: #009ac3;}
 
 /* Layer */
 #overlay #contentWrapper.theme56  #layerContent{border-color: #009ac3;}
 #inlineAd.theme56  div:nth-child(2) div:first-child > div:first-child{border-color: #009ac3;}

.theme57c{color:#dc2402 !important;}
 .theme57bg{background-color:#dc2402 !important;}
 .theme57hbg:hover, .theme57hbg.active { background-color: #dc2402; }
 .theme57bc{border-color:#dc2402 !important;}
 .theme57sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-57-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-57-bg:after,
 .navbar-nav>li.active .navi-57-bg:after{background-color: #dc2402;}
 
 /* Layer */
 #overlay #contentWrapper.theme57  #layerContent{border-color: #dc2402;}
 #inlineAd.theme57  div:nth-child(2) div:first-child > div:first-child{border-color: #dc2402;}

.theme58c{color:#fa6900 !important;}
 .theme58bg{background-color:#fa6900 !important;}
 .theme58hbg:hover, .theme58hbg.active { background-color: #fa6900; }
 .theme58bc{border-color:#fa6900 !important;}
 .theme58sprite::before {background-image: url(/media/icon-58-13111.png);}
 
 .navi-58-bg:after{background-image: url(/media/icon-58-13111.png);}
 .navbar-nav>li:hover .navi-58-bg:after,
 .navbar-nav>li.active .navi-58-bg:after{background-color: #fa6900;}
 
 /* Layer */
 #overlay #contentWrapper.theme58  #layerContent{border-color: #fa6900;}
 #inlineAd.theme58  div:nth-child(2) div:first-child > div:first-child{border-color: #fa6900;}

.theme59c{color:#c3ff1a !important;}
 .theme59bg{background-color:#c3ff1a !important;}
 .theme59hbg:hover, .theme59hbg.active { background-color: #c3ff1a; }
 .theme59bc{border-color:#c3ff1a !important;}
 .theme59sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-59-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-59-bg:after,
 .navbar-nav>li.active .navi-59-bg:after{background-color: #c3ff1a;}
 
 /* Layer */
 #overlay #contentWrapper.theme59  #layerContent{border-color: #c3ff1a;}
 #inlineAd.theme59  div:nth-child(2) div:first-child > div:first-child{border-color: #c3ff1a;}

.theme60c{color:#ca0103 !important;}
 .theme60bg{background-color:#ca0103 !important;}
 .theme60hbg:hover, .theme60hbg.active { background-color: #ca0103; }
 .theme60bc{border-color:#ca0103 !important;}
 .theme60sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-60-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-60-bg:after,
 .navbar-nav>li.active .navi-60-bg:after{background-color: #ca0103;}
 
 /* Layer */
 #overlay #contentWrapper.theme60  #layerContent{border-color: #ca0103;}
 #inlineAd.theme60  div:nth-child(2) div:first-child > div:first-child{border-color: #ca0103;}

.theme61c{color:#ffc501 !important;}
 .theme61bg{background-color:#ffc501 !important;}
 .theme61hbg:hover, .theme61hbg.active { background-color: #ffc501; }
 .theme61bc{border-color:#ffc501 !important;}
 .theme61sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-61-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-61-bg:after,
 .navbar-nav>li.active .navi-61-bg:after{background-color: #ffc501;}
 
 /* Layer */
 #overlay #contentWrapper.theme61  #layerContent{border-color: #ffc501;}
 #inlineAd.theme61  div:nth-child(2) div:first-child > div:first-child{border-color: #ffc501;}

.theme62c{color:#0d9ccb !important;}
 .theme62bg{background-color:#0d9ccb !important;}
 .theme62hbg:hover, .theme62hbg.active { background-color: #0d9ccb; }
 .theme62bc{border-color:#0d9ccb !important;}
 .theme62sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-62-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-62-bg:after,
 .navbar-nav>li.active .navi-62-bg:after{background-color: #0d9ccb;}
 
 /* Layer */
 #overlay #contentWrapper.theme62  #layerContent{border-color: #0d9ccb;}
 #inlineAd.theme62  div:nth-child(2) div:first-child > div:first-child{border-color: #0d9ccb;}

.theme63c{color:#00a8d6 !important;}
 .theme63bg{background-color:#00a8d6 !important;}
 .theme63hbg:hover, .theme63hbg.active { background-color: #00a8d6; }
 .theme63bc{border-color:#00a8d6 !important;}
 .theme63sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-63-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-63-bg:after,
 .navbar-nav>li.active .navi-63-bg:after{background-color: #00a8d6;}
 
 /* Layer */
 #overlay #contentWrapper.theme63  #layerContent{border-color: #00a8d6;}
 #inlineAd.theme63  div:nth-child(2) div:first-child > div:first-child{border-color: #00a8d6;}

.theme64c{color:#ee7413 !important;}
 .theme64bg{background-color:#ee7413 !important;}
 .theme64hbg:hover, .theme64hbg.active { background-color: #ee7413; }
 .theme64bc{border-color:#ee7413 !important;}
 .theme64sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-64-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-64-bg:after,
 .navbar-nav>li.active .navi-64-bg:after{background-color: #ee7413;}
 
 /* Layer */
 #overlay #contentWrapper.theme64  #layerContent{border-color: #ee7413;}
 #inlineAd.theme64  div:nth-child(2) div:first-child > div:first-child{border-color: #ee7413;}

.theme65c{color:#443c17 !important;}
 .theme65bg{background-color:#443c17 !important;}
 .theme65hbg:hover, .theme65hbg.active { background-color: #443c17; }
 .theme65bc{border-color:#443c17 !important;}
 .theme65sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-65-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-65-bg:after,
 .navbar-nav>li.active .navi-65-bg:after{background-color: #443c17;}
 
 /* Layer */
 #overlay #contentWrapper.theme65  #layerContent{border-color: #443c17;}
 #inlineAd.theme65  div:nth-child(2) div:first-child > div:first-child{border-color: #443c17;}

.theme66c{color:#ec6500 !important;}
 .theme66bg{background-color:#ec6500 !important;}
 .theme66hbg:hover, .theme66hbg.active { background-color: #ec6500; }
 .theme66bc{border-color:#ec6500 !important;}
 .theme66sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-66-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-66-bg:after,
 .navbar-nav>li.active .navi-66-bg:after{background-color: #ec6500;}
 
 /* Layer */
 #overlay #contentWrapper.theme66  #layerContent{border-color: #ec6500;}
 #inlineAd.theme66  div:nth-child(2) div:first-child > div:first-child{border-color: #ec6500;}

.theme67c{color:#92acd8 !important;}
 .theme67bg{background-color:#92acd8 !important;}
 .theme67hbg:hover, .theme67hbg.active { background-color: #92acd8; }
 .theme67bc{border-color:#92acd8 !important;}
 .theme67sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-67-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-67-bg:after,
 .navbar-nav>li.active .navi-67-bg:after{background-color: #92acd8;}
 
 /* Layer */
 #overlay #contentWrapper.theme67  #layerContent{border-color: #92acd8;}
 #inlineAd.theme67  div:nth-child(2) div:first-child > div:first-child{border-color: #92acd8;}

.theme68c{color:#0796dc !important;}
 .theme68bg{background-color:#0796dc !important;}
 .theme68hbg:hover, .theme68hbg.active { background-color: #0796dc; }
 .theme68bc{border-color:#0796dc !important;}
 .theme68sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-68-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-68-bg:after,
 .navbar-nav>li.active .navi-68-bg:after{background-color: #0796dc;}
 
 /* Layer */
 #overlay #contentWrapper.theme68  #layerContent{border-color: #0796dc;}
 #inlineAd.theme68  div:nth-child(2) div:first-child > div:first-child{border-color: #0796dc;}

.theme69c{color:#c0d817 !important;}
 .theme69bg{background-color:#c0d817 !important;}
 .theme69hbg:hover, .theme69hbg.active { background-color: #c0d817; }
 .theme69bc{border-color:#c0d817 !important;}
 .theme69sprite::before {background-image: url(/media/icon-69-13111.png);}
 
 .navi-69-bg:after{background-image: url(/media/icon-69-13111.png);}
 .navbar-nav>li:hover .navi-69-bg:after,
 .navbar-nav>li.active .navi-69-bg:after{background-color: #c0d817;}
 
 /* Layer */
 #overlay #contentWrapper.theme69  #layerContent{border-color: #c0d817;}
 #inlineAd.theme69  div:nth-child(2) div:first-child > div:first-child{border-color: #c0d817;}

.theme70c{color:#ffaa00 !important;}
 .theme70bg{background-color:#ffaa00 !important;}
 .theme70hbg:hover, .theme70hbg.active { background-color: #ffaa00; }
 .theme70bc{border-color:#ffaa00 !important;}
 .theme70sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-70-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-70-bg:after,
 .navbar-nav>li.active .navi-70-bg:after{background-color: #ffaa00;}
 
 /* Layer */
 #overlay #contentWrapper.theme70  #layerContent{border-color: #ffaa00;}
 #inlineAd.theme70  div:nth-child(2) div:first-child > div:first-child{border-color: #ffaa00;}

.theme71c{color:#e46281 !important;}
 .theme71bg{background-color:#e46281 !important;}
 .theme71hbg:hover, .theme71hbg.active { background-color: #e46281; }
 .theme71bc{border-color:#e46281 !important;}
 .theme71sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-71-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-71-bg:after,
 .navbar-nav>li.active .navi-71-bg:after{background-color: #e46281;}
 
 /* Layer */
 #overlay #contentWrapper.theme71  #layerContent{border-color: #e46281;}
 #inlineAd.theme71  div:nth-child(2) div:first-child > div:first-child{border-color: #e46281;}

.theme72c{color:#be0000 !important;}
 .theme72bg{background-color:#be0000 !important;}
 .theme72hbg:hover, .theme72hbg.active { background-color: #be0000; }
 .theme72bc{border-color:#be0000 !important;}
 .theme72sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-72-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-72-bg:after,
 .navbar-nav>li.active .navi-72-bg:after{background-color: #be0000;}
 
 /* Layer */
 #overlay #contentWrapper.theme72  #layerContent{border-color: #be0000;}
 #inlineAd.theme72  div:nth-child(2) div:first-child > div:first-child{border-color: #be0000;}

.theme73c{color:#be0000 !important;}
 .theme73bg{background-color:#be0000 !important;}
 .theme73hbg:hover, .theme73hbg.active { background-color: #be0000; }
 .theme73bc{border-color:#be0000 !important;}
 .theme73sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-73-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-73-bg:after,
 .navbar-nav>li.active .navi-73-bg:after{background-color: #be0000;}
 
 /* Layer */
 #overlay #contentWrapper.theme73  #layerContent{border-color: #be0000;}
 #inlineAd.theme73  div:nth-child(2) div:first-child > div:first-child{border-color: #be0000;}

.theme74c{color:#019201 !important;}
 .theme74bg{background-color:#019201 !important;}
 .theme74hbg:hover, .theme74hbg.active { background-color: #019201; }
 .theme74bc{border-color:#019201 !important;}
 .theme74sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-74-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-74-bg:after,
 .navbar-nav>li.active .navi-74-bg:after{background-color: #019201;}
 
 /* Layer */
 #overlay #contentWrapper.theme74  #layerContent{border-color: #019201;}
 #inlineAd.theme74  div:nth-child(2) div:first-child > div:first-child{border-color: #019201;}

.theme75c{color:#336671 !important;}
 .theme75bg{background-color:#336671 !important;}
 .theme75hbg:hover, .theme75hbg.active { background-color: #336671; }
 .theme75bc{border-color:#336671 !important;}
 .theme75sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-75-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-75-bg:after,
 .navbar-nav>li.active .navi-75-bg:after{background-color: #336671;}
 
 /* Layer */
 #overlay #contentWrapper.theme75  #layerContent{border-color: #336671;}
 #inlineAd.theme75  div:nth-child(2) div:first-child > div:first-child{border-color: #336671;}

.theme76c{color:#89be00 !important;}
 .theme76bg{background-color:#89be00 !important;}
 .theme76hbg:hover, .theme76hbg.active { background-color: #89be00; }
 .theme76bc{border-color:#89be00 !important;}
 .theme76sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-76-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-76-bg:after,
 .navbar-nav>li.active .navi-76-bg:after{background-color: #89be00;}
 
 /* Layer */
 #overlay #contentWrapper.theme76  #layerContent{border-color: #89be00;}
 #inlineAd.theme76  div:nth-child(2) div:first-child > div:first-child{border-color: #89be00;}

.theme77c{color:#346794 !important;}
 .theme77bg{background-color:#346794 !important;}
 .theme77hbg:hover, .theme77hbg.active { background-color: #346794; }
 .theme77bc{border-color:#346794 !important;}
 .theme77sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-77-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-77-bg:after,
 .navbar-nav>li.active .navi-77-bg:after{background-color: #346794;}
 
 /* Layer */
 #overlay #contentWrapper.theme77  #layerContent{border-color: #346794;}
 #inlineAd.theme77  div:nth-child(2) div:first-child > div:first-child{border-color: #346794;}

.theme78c{color:#aa2c2c !important;}
 .theme78bg{background-color:#aa2c2c !important;}
 .theme78hbg:hover, .theme78hbg.active { background-color: #aa2c2c; }
 .theme78bc{border-color:#aa2c2c !important;}
 .theme78sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-78-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-78-bg:after,
 .navbar-nav>li.active .navi-78-bg:after{background-color: #aa2c2c;}
 
 /* Layer */
 #overlay #contentWrapper.theme78  #layerContent{border-color: #aa2c2c;}
 #inlineAd.theme78  div:nth-child(2) div:first-child > div:first-child{border-color: #aa2c2c;}

.theme79c{color:#0f5dcc !important;}
 .theme79bg{background-color:#0f5dcc !important;}
 .theme79hbg:hover, .theme79hbg.active { background-color: #0f5dcc; }
 .theme79bc{border-color:#0f5dcc !important;}
 .theme79sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-79-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-79-bg:after,
 .navbar-nav>li.active .navi-79-bg:after{background-color: #0f5dcc;}
 
 /* Layer */
 #overlay #contentWrapper.theme79  #layerContent{border-color: #0f5dcc;}
 #inlineAd.theme79  div:nth-child(2) div:first-child > div:first-child{border-color: #0f5dcc;}

.theme80c{color:#388a96 !important;}
 .theme80bg{background-color:#388a96 !important;}
 .theme80hbg:hover, .theme80hbg.active { background-color: #388a96; }
 .theme80bc{border-color:#388a96 !important;}
 .theme80sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-80-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-80-bg:after,
 .navbar-nav>li.active .navi-80-bg:after{background-color: #388a96;}
 
 /* Layer */
 #overlay #contentWrapper.theme80  #layerContent{border-color: #388a96;}
 #inlineAd.theme80  div:nth-child(2) div:first-child > div:first-child{border-color: #388a96;}

.theme81c{color:#D64055 !important;}
 .theme81bg{background-color:#D64055 !important;}
 .theme81hbg:hover, .theme81hbg.active { background-color: #D64055; }
 .theme81bc{border-color:#D64055 !important;}
 .theme81sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-81-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-81-bg:after,
 .navbar-nav>li.active .navi-81-bg:after{background-color: #D64055;}
 
 /* Layer */
 #overlay #contentWrapper.theme81  #layerContent{border-color: #D64055;}
 #inlineAd.theme81  div:nth-child(2) div:first-child > div:first-child{border-color: #D64055;}

.theme82c{color:#0F265C !important;}
 .theme82bg{background-color:#0F265C !important;}
 .theme82hbg:hover, .theme82hbg.active { background-color: #0F265C; }
 .theme82bc{border-color:#0F265C !important;}
 .theme82sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-82-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-82-bg:after,
 .navbar-nav>li.active .navi-82-bg:after{background-color: #0F265C;}
 
 /* Layer */
 #overlay #contentWrapper.theme82  #layerContent{border-color: #0F265C;}
 #inlineAd.theme82  div:nth-child(2) div:first-child > div:first-child{border-color: #0F265C;}

.theme84c{color:#f6a200 !important;}
 .theme84bg{background-color:#f6a200 !important;}
 .theme84hbg:hover, .theme84hbg.active { background-color: #f6a200; }
 .theme84bc{border-color:#f6a200 !important;}
 .theme84sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-84-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-84-bg:after,
 .navbar-nav>li.active .navi-84-bg:after{background-color: #f6a200;}
 
 /* Layer */
 #overlay #contentWrapper.theme84  #layerContent{border-color: #f6a200;}
 #inlineAd.theme84  div:nth-child(2) div:first-child > div:first-child{border-color: #f6a200;}

.theme85c{color:#2747A3 !important;}
 .theme85bg{background-color:#2747A3 !important;}
 .theme85hbg:hover, .theme85hbg.active { background-color: #2747A3; }
 .theme85bc{border-color:#2747A3 !important;}
 .theme85sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-85-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-85-bg:after,
 .navbar-nav>li.active .navi-85-bg:after{background-color: #2747A3;}
 
 /* Layer */
 #overlay #contentWrapper.theme85  #layerContent{border-color: #2747A3;}
 #inlineAd.theme85  div:nth-child(2) div:first-child > div:first-child{border-color: #2747A3;}

.theme86c{color:#2A7BD7 !important;}
 .theme86bg{background-color:#2A7BD7 !important;}
 .theme86hbg:hover, .theme86hbg.active { background-color: #2A7BD7; }
 .theme86bc{border-color:#2A7BD7 !important;}
 .theme86sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-86-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-86-bg:after,
 .navbar-nav>li.active .navi-86-bg:after{background-color: #2A7BD7;}
 
 /* Layer */
 #overlay #contentWrapper.theme86  #layerContent{border-color: #2A7BD7;}
 #inlineAd.theme86  div:nth-child(2) div:first-child > div:first-child{border-color: #2A7BD7;}

.theme87c{color:#f6a200 !important;}
 .theme87bg{background-color:#f6a200 !important;}
 .theme87hbg:hover, .theme87hbg.active { background-color: #f6a200; }
 .theme87bc{border-color:#f6a200 !important;}
 .theme87sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-87-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-87-bg:after,
 .navbar-nav>li.active .navi-87-bg:after{background-color: #f6a200;}
 
 /* Layer */
 #overlay #contentWrapper.theme87  #layerContent{border-color: #f6a200;}
 #inlineAd.theme87  div:nth-child(2) div:first-child > div:first-child{border-color: #f6a200;}

.theme88c{color:#1ab8d1 !important;}
 .theme88bg{background-color:#1ab8d1 !important;}
 .theme88hbg:hover, .theme88hbg.active { background-color: #1ab8d1; }
 .theme88bc{border-color:#1ab8d1 !important;}
 .theme88sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-88-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-88-bg:after,
 .navbar-nav>li.active .navi-88-bg:after{background-color: #1ab8d1;}
 
 /* Layer */
 #overlay #contentWrapper.theme88  #layerContent{border-color: #1ab8d1;}
 #inlineAd.theme88  div:nth-child(2) div:first-child > div:first-child{border-color: #1ab8d1;}

.theme89c{color:#dc0269 !important;}
 .theme89bg{background-color:#dc0269 !important;}
 .theme89hbg:hover, .theme89hbg.active { background-color: #dc0269; }
 .theme89bc{border-color:#dc0269 !important;}
 .theme89sprite::before {background-image: url(/media/icon-89-13111.png);}
 
 .navi-89-bg:after{background-image: url(/media/icon-89-13111.png);}
 .navbar-nav>li:hover .navi-89-bg:after,
 .navbar-nav>li.active .navi-89-bg:after{background-color: #dc0269;}
 
 /* Layer */
 #overlay #contentWrapper.theme89  #layerContent{border-color: #dc0269;}
 #inlineAd.theme89  div:nth-child(2) div:first-child > div:first-child{border-color: #dc0269;}

.theme90c{color:#4c1e00 !important;}
 .theme90bg{background-color:#4c1e00 !important;}
 .theme90hbg:hover, .theme90hbg.active { background-color: #4c1e00; }
 .theme90bc{border-color:#4c1e00 !important;}
 .theme90sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-90-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-90-bg:after,
 .navbar-nav>li.active .navi-90-bg:after{background-color: #4c1e00;}
 
 /* Layer */
 #overlay #contentWrapper.theme90  #layerContent{border-color: #4c1e00;}
 #inlineAd.theme90  div:nth-child(2) div:first-child > div:first-child{border-color: #4c1e00;}

.theme91c{color:#d35105 !important;}
 .theme91bg{background-color:#d35105 !important;}
 .theme91hbg:hover, .theme91hbg.active { background-color: #d35105; }
 .theme91bc{border-color:#d35105 !important;}
 .theme91sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-91-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-91-bg:after,
 .navbar-nav>li.active .navi-91-bg:after{background-color: #d35105;}
 
 /* Layer */
 #overlay #contentWrapper.theme91  #layerContent{border-color: #d35105;}
 #inlineAd.theme91  div:nth-child(2) div:first-child > div:first-child{border-color: #d35105;}

.theme92c{color:#3c2f8f !important;}
 .theme92bg{background-color:#3c2f8f !important;}
 .theme92hbg:hover, .theme92hbg.active { background-color: #3c2f8f; }
 .theme92bc{border-color:#3c2f8f !important;}
 .theme92sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-92-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-92-bg:after,
 .navbar-nav>li.active .navi-92-bg:after{background-color: #3c2f8f;}
 
 /* Layer */
 #overlay #contentWrapper.theme92  #layerContent{border-color: #3c2f8f;}
 #inlineAd.theme92  div:nth-child(2) div:first-child > div:first-child{border-color: #3c2f8f;}

.theme93c{color:#eec707 !important;}
 .theme93bg{background-color:#eec707 !important;}
 .theme93hbg:hover, .theme93hbg.active { background-color: #eec707; }
 .theme93bc{border-color:#eec707 !important;}
 .theme93sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-93-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-93-bg:after,
 .navbar-nav>li.active .navi-93-bg:after{background-color: #eec707;}
 
 /* Layer */
 #overlay #contentWrapper.theme93  #layerContent{border-color: #eec707;}
 #inlineAd.theme93  div:nth-child(2) div:first-child > div:first-child{border-color: #eec707;}

.theme94c{color:#d08626 !important;}
 .theme94bg{background-color:#d08626 !important;}
 .theme94hbg:hover, .theme94hbg.active { background-color: #d08626; }
 .theme94bc{border-color:#d08626 !important;}
 .theme94sprite::before {background-image: url(/media/icon-94-13111.png);}
 
 .navi-94-bg:after{background-image: url(/media/icon-94-13111.png);}
 .navbar-nav>li:hover .navi-94-bg:after,
 .navbar-nav>li.active .navi-94-bg:after{background-color: #d08626;}
 
 /* Layer */
 #overlay #contentWrapper.theme94  #layerContent{border-color: #d08626;}
 #inlineAd.theme94  div:nth-child(2) div:first-child > div:first-child{border-color: #d08626;}

.theme95c{color:#ff8200 !important;}
 .theme95bg{background-color:#ff8200 !important;}
 .theme95hbg:hover, .theme95hbg.active { background-color: #ff8200; }
 .theme95bc{border-color:#ff8200 !important;}
 .theme95sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-95-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-95-bg:after,
 .navbar-nav>li.active .navi-95-bg:after{background-color: #ff8200;}
 
 /* Layer */
 #overlay #contentWrapper.theme95  #layerContent{border-color: #ff8200;}
 #inlineAd.theme95  div:nth-child(2) div:first-child > div:first-child{border-color: #ff8200;}

.theme96c{color:#ef4f96 !important;}
 .theme96bg{background-color:#ef4f96 !important;}
 .theme96hbg:hover, .theme96hbg.active { background-color: #ef4f96; }
 .theme96bc{border-color:#ef4f96 !important;}
 .theme96sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-96-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-96-bg:after,
 .navbar-nav>li.active .navi-96-bg:after{background-color: #ef4f96;}
 
 /* Layer */
 #overlay #contentWrapper.theme96  #layerContent{border-color: #ef4f96;}
 #inlineAd.theme96  div:nth-child(2) div:first-child > div:first-child{border-color: #ef4f96;}

.theme97c{color:#33aa38 !important;}
 .theme97bg{background-color:#33aa38 !important;}
 .theme97hbg:hover, .theme97hbg.active { background-color: #33aa38; }
 .theme97bc{border-color:#33aa38 !important;}
 .theme97sprite::before {background-image: url(/media/icon-97-13110.png);}
 
 .navi-97-bg:after{background-image: url(/media/icon-97-13110.png);}
 .navbar-nav>li:hover .navi-97-bg:after,
 .navbar-nav>li.active .navi-97-bg:after{background-color: #33aa38;}
 
 /* Layer */
 #overlay #contentWrapper.theme97  #layerContent{border-color: #33aa38;}
 #inlineAd.theme97  div:nth-child(2) div:first-child > div:first-child{border-color: #33aa38;}

.theme98c{color:#565c24 !important;}
 .theme98bg{background-color:#565c24 !important;}
 .theme98hbg:hover, .theme98hbg.active { background-color: #565c24; }
 .theme98bc{border-color:#565c24 !important;}
 .theme98sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-98-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-98-bg:after,
 .navbar-nav>li.active .navi-98-bg:after{background-color: #565c24;}
 
 /* Layer */
 #overlay #contentWrapper.theme98  #layerContent{border-color: #565c24;}
 #inlineAd.theme98  div:nth-child(2) div:first-child > div:first-child{border-color: #565c24;}

.theme99c{color:#fab400 !important;}
 .theme99bg{background-color:#fab400 !important;}
 .theme99hbg:hover, .theme99hbg.active { background-color: #fab400; }
 .theme99bc{border-color:#fab400 !important;}
 .theme99sprite::before {background-image: url(/media/icon-99-13110.png);}
 
 .navi-99-bg:after{background-image: url(/media/icon-99-13110.png);}
 .navbar-nav>li:hover .navi-99-bg:after,
 .navbar-nav>li.active .navi-99-bg:after{background-color: #fab400;}
 
 /* Layer */
 #overlay #contentWrapper.theme99  #layerContent{border-color: #fab400;}
 #inlineAd.theme99  div:nth-child(2) div:first-child > div:first-child{border-color: #fab400;}

.theme100c{color:#3f3f3f !important;}
 .theme100bg{background-color:#3f3f3f !important;}
 .theme100hbg:hover, .theme100hbg.active { background-color: #3f3f3f; }
 .theme100bc{border-color:#3f3f3f !important;}
 .theme100sprite::before {background-image: url(/media/icon-100-13110.png);}
 
 .navi-100-bg:after{background-image: url(/media/icon-100-13110.png);}
 .navbar-nav>li:hover .navi-100-bg:after,
 .navbar-nav>li.active .navi-100-bg:after{background-color: #3f3f3f;}
 
 /* Layer */
 #overlay #contentWrapper.theme100  #layerContent{border-color: #3f3f3f;}
 #inlineAd.theme100  div:nth-child(2) div:first-child > div:first-child{border-color: #3f3f3f;}

.theme101c{color:#1b657b !important;}
 .theme101bg{background-color:#1b657b !important;}
 .theme101hbg:hover, .theme101hbg.active { background-color: #1b657b; }
 .theme101bc{border-color:#1b657b !important;}
 .theme101sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-101-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-101-bg:after,
 .navbar-nav>li.active .navi-101-bg:after{background-color: #1b657b;}
 
 /* Layer */
 #overlay #contentWrapper.theme101  #layerContent{border-color: #1b657b;}
 #inlineAd.theme101  div:nth-child(2) div:first-child > div:first-child{border-color: #1b657b;}

.theme102c{color:#e9560d !important;}
 .theme102bg{background-color:#e9560d !important;}
 .theme102hbg:hover, .theme102hbg.active { background-color: #e9560d; }
 .theme102bc{border-color:#e9560d !important;}
 .theme102sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-102-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-102-bg:after,
 .navbar-nav>li.active .navi-102-bg:after{background-color: #e9560d;}
 
 /* Layer */
 #overlay #contentWrapper.theme102  #layerContent{border-color: #e9560d;}
 #inlineAd.theme102  div:nth-child(2) div:first-child > div:first-child{border-color: #e9560d;}

.theme103c{color:#cc2026 !important;}
 .theme103bg{background-color:#cc2026 !important;}
 .theme103hbg:hover, .theme103hbg.active { background-color: #cc2026; }
 .theme103bc{border-color:#cc2026 !important;}
 .theme103sprite::before {background-image: url(/media/icon-103-13110.png);}
 
 .navi-103-bg:after{background-image: url(/media/icon-103-13110.png);}
 .navbar-nav>li:hover .navi-103-bg:after,
 .navbar-nav>li.active .navi-103-bg:after{background-color: #cc2026;}
 
 /* Layer */
 #overlay #contentWrapper.theme103  #layerContent{border-color: #cc2026;}
 #inlineAd.theme103  div:nth-child(2) div:first-child > div:first-child{border-color: #cc2026;}

.theme104c{color:#1a895e !important;}
 .theme104bg{background-color:#1a895e !important;}
 .theme104hbg:hover, .theme104hbg.active { background-color: #1a895e; }
 .theme104bc{border-color:#1a895e !important;}
 .theme104sprite::before {background-image: url(/media/icon-104-13111.png);}
 
 .navi-104-bg:after{background-image: url(/media/icon-104-13111.png);}
 .navbar-nav>li:hover .navi-104-bg:after,
 .navbar-nav>li.active .navi-104-bg:after{background-color: #1a895e;}
 
 /* Layer */
 #overlay #contentWrapper.theme104  #layerContent{border-color: #1a895e;}
 #inlineAd.theme104  div:nth-child(2) div:first-child > div:first-child{border-color: #1a895e;}

.theme105c{color:#ffb31f !important;}
 .theme105bg{background-color:#ffb31f !important;}
 .theme105hbg:hover, .theme105hbg.active { background-color: #ffb31f; }
 .theme105bc{border-color:#ffb31f !important;}
 .theme105sprite::before {background-image: url(/media/icon-105-13110.png);}
 
 .navi-105-bg:after{background-image: url(/media/icon-105-13110.png);}
 .navbar-nav>li:hover .navi-105-bg:after,
 .navbar-nav>li.active .navi-105-bg:after{background-color: #ffb31f;}
 
 /* Layer */
 #overlay #contentWrapper.theme105  #layerContent{border-color: #ffb31f;}
 #inlineAd.theme105  div:nth-child(2) div:first-child > div:first-child{border-color: #ffb31f;}

.theme106c{color:#9c1a6d !important;}
 .theme106bg{background-color:#9c1a6d !important;}
 .theme106hbg:hover, .theme106hbg.active { background-color: #9c1a6d; }
 .theme106bc{border-color:#9c1a6d !important;}
 .theme106sprite::before {background-image: url(/media/icon-106-13110.png);}
 
 .navi-106-bg:after{background-image: url(/media/icon-106-13110.png);}
 .navbar-nav>li:hover .navi-106-bg:after,
 .navbar-nav>li.active .navi-106-bg:after{background-color: #9c1a6d;}
 
 /* Layer */
 #overlay #contentWrapper.theme106  #layerContent{border-color: #9c1a6d;}
 #inlineAd.theme106  div:nth-child(2) div:first-child > div:first-child{border-color: #9c1a6d;}

.theme107c{color:#0090e5 !important;}
 .theme107bg{background-color:#0090e5 !important;}
 .theme107hbg:hover, .theme107hbg.active { background-color: #0090e5; }
 .theme107bc{border-color:#0090e5 !important;}
 .theme107sprite::before {background-image: url(/media/icon-107-13110.png);}
 
 .navi-107-bg:after{background-image: url(/media/icon-107-13110.png);}
 .navbar-nav>li:hover .navi-107-bg:after,
 .navbar-nav>li.active .navi-107-bg:after{background-color: #0090e5;}
 
 /* Layer */
 #overlay #contentWrapper.theme107  #layerContent{border-color: #0090e5;}
 #inlineAd.theme107  div:nth-child(2) div:first-child > div:first-child{border-color: #0090e5;}

.theme108c{color:#eb1c39 !important;}
 .theme108bg{background-color:#eb1c39 !important;}
 .theme108hbg:hover, .theme108hbg.active { background-color: #eb1c39; }
 .theme108bc{border-color:#eb1c39 !important;}
 .theme108sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-108-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-108-bg:after,
 .navbar-nav>li.active .navi-108-bg:after{background-color: #eb1c39;}
 
 /* Layer */
 #overlay #contentWrapper.theme108  #layerContent{border-color: #eb1c39;}
 #inlineAd.theme108  div:nth-child(2) div:first-child > div:first-child{border-color: #eb1c39;}

.theme109c{color:#dd368f !important;}
 .theme109bg{background-color:#dd368f !important;}
 .theme109hbg:hover, .theme109hbg.active { background-color: #dd368f; }
 .theme109bc{border-color:#dd368f !important;}
 .theme109sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-109-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-109-bg:after,
 .navbar-nav>li.active .navi-109-bg:after{background-color: #dd368f;}
 
 /* Layer */
 #overlay #contentWrapper.theme109  #layerContent{border-color: #dd368f;}
 #inlineAd.theme109  div:nth-child(2) div:first-child > div:first-child{border-color: #dd368f;}

.theme110c{color:#1cb5e8 !important;}
 .theme110bg{background-color:#1cb5e8 !important;}
 .theme110hbg:hover, .theme110hbg.active { background-color: #1cb5e8; }
 .theme110bc{border-color:#1cb5e8 !important;}
 .theme110sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-110-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-110-bg:after,
 .navbar-nav>li.active .navi-110-bg:after{background-color: #1cb5e8;}
 
 /* Layer */
 #overlay #contentWrapper.theme110  #layerContent{border-color: #1cb5e8;}
 #inlineAd.theme110  div:nth-child(2) div:first-child > div:first-child{border-color: #1cb5e8;}

.theme111c{color:#ec7812 !important;}
 .theme111bg{background-color:#ec7812 !important;}
 .theme111hbg:hover, .theme111hbg.active { background-color: #ec7812; }
 .theme111bc{border-color:#ec7812 !important;}
 .theme111sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-111-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-111-bg:after,
 .navbar-nav>li.active .navi-111-bg:after{background-color: #ec7812;}
 
 /* Layer */
 #overlay #contentWrapper.theme111  #layerContent{border-color: #ec7812;}
 #inlineAd.theme111  div:nth-child(2) div:first-child > div:first-child{border-color: #ec7812;}

.theme112c{color:#e30e18 !important;}
 .theme112bg{background-color:#e30e18 !important;}
 .theme112hbg:hover, .theme112hbg.active { background-color: #e30e18; }
 .theme112bc{border-color:#e30e18 !important;}
 .theme112sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-112-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-112-bg:after,
 .navbar-nav>li.active .navi-112-bg:after{background-color: #e30e18;}
 
 /* Layer */
 #overlay #contentWrapper.theme112  #layerContent{border-color: #e30e18;}
 #inlineAd.theme112  div:nth-child(2) div:first-child > div:first-child{border-color: #e30e18;}

.theme113c{color:#ed1c24 !important;}
 .theme113bg{background-color:#ed1c24 !important;}
 .theme113hbg:hover, .theme113hbg.active { background-color: #ed1c24; }
 .theme113bc{border-color:#ed1c24 !important;}
 .theme113sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-113-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-113-bg:after,
 .navbar-nav>li.active .navi-113-bg:after{background-color: #ed1c24;}
 
 /* Layer */
 #overlay #contentWrapper.theme113  #layerContent{border-color: #ed1c24;}
 #inlineAd.theme113  div:nth-child(2) div:first-child > div:first-child{border-color: #ed1c24;}

.theme114c{color:#385827 !important;}
 .theme114bg{background-color:#385827 !important;}
 .theme114hbg:hover, .theme114hbg.active { background-color: #385827; }
 .theme114bc{border-color:#385827 !important;}
 .theme114sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-114-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-114-bg:after,
 .navbar-nav>li.active .navi-114-bg:after{background-color: #385827;}
 
 /* Layer */
 #overlay #contentWrapper.theme114  #layerContent{border-color: #385827;}
 #inlineAd.theme114  div:nth-child(2) div:first-child > div:first-child{border-color: #385827;}

.theme115c{color:#b7e329 !important;}
 .theme115bg{background-color:#b7e329 !important;}
 .theme115hbg:hover, .theme115hbg.active { background-color: #b7e329; }
 .theme115bc{border-color:#b7e329 !important;}
 .theme115sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-115-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-115-bg:after,
 .navbar-nav>li.active .navi-115-bg:after{background-color: #b7e329;}
 
 /* Layer */
 #overlay #contentWrapper.theme115  #layerContent{border-color: #b7e329;}
 #inlineAd.theme115  div:nth-child(2) div:first-child > div:first-child{border-color: #b7e329;}

.theme116c{color:#00a7ff !important;}
 .theme116bg{background-color:#00a7ff !important;}
 .theme116hbg:hover, .theme116hbg.active { background-color: #00a7ff; }
 .theme116bc{border-color:#00a7ff !important;}
 .theme116sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-116-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-116-bg:after,
 .navbar-nav>li.active .navi-116-bg:after{background-color: #00a7ff;}
 
 /* Layer */
 #overlay #contentWrapper.theme116  #layerContent{border-color: #00a7ff;}
 #inlineAd.theme116  div:nth-child(2) div:first-child > div:first-child{border-color: #00a7ff;}

.theme117c{color:#7e9501 !important;}
 .theme117bg{background-color:#7e9501 !important;}
 .theme117hbg:hover, .theme117hbg.active { background-color: #7e9501; }
 .theme117bc{border-color:#7e9501 !important;}
 .theme117sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-117-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-117-bg:after,
 .navbar-nav>li.active .navi-117-bg:after{background-color: #7e9501;}
 
 /* Layer */
 #overlay #contentWrapper.theme117  #layerContent{border-color: #7e9501;}
 #inlineAd.theme117  div:nth-child(2) div:first-child > div:first-child{border-color: #7e9501;}

.theme118c{color:#1b98de !important;}
 .theme118bg{background-color:#1b98de !important;}
 .theme118hbg:hover, .theme118hbg.active { background-color: #1b98de; }
 .theme118bc{border-color:#1b98de !important;}
 .theme118sprite::before {background-image: url(/media/icon-118-13111.png);}
 
 .navi-118-bg:after{background-image: url(/media/icon-118-13111.png);}
 .navbar-nav>li:hover .navi-118-bg:after,
 .navbar-nav>li.active .navi-118-bg:after{background-color: #1b98de;}
 
 /* Layer */
 #overlay #contentWrapper.theme118  #layerContent{border-color: #1b98de;}
 #inlineAd.theme118  div:nth-child(2) div:first-child > div:first-child{border-color: #1b98de;}

.theme119c{color:#ffd200 !important;}
 .theme119bg{background-color:#ffd200 !important;}
 .theme119hbg:hover, .theme119hbg.active { background-color: #ffd200; }
 .theme119bc{border-color:#ffd200 !important;}
 .theme119sprite::before {background-image: url(/media/icon-119-13110.png);}
 
 .navi-119-bg:after{background-image: url(/media/icon-119-13110.png);}
 .navbar-nav>li:hover .navi-119-bg:after,
 .navbar-nav>li.active .navi-119-bg:after{background-color: #ffd200;}
 
 /* Layer */
 #overlay #contentWrapper.theme119  #layerContent{border-color: #ffd200;}
 #inlineAd.theme119  div:nth-child(2) div:first-child > div:first-child{border-color: #ffd200;}

.theme120c{color:#6c2794 !important;}
 .theme120bg{background-color:#6c2794 !important;}
 .theme120hbg:hover, .theme120hbg.active { background-color: #6c2794; }
 .theme120bc{border-color:#6c2794 !important;}
 .theme120sprite::before {background-image: url(/media/icon-120-13110.png);}
 
 .navi-120-bg:after{background-image: url(/media/icon-120-13110.png);}
 .navbar-nav>li:hover .navi-120-bg:after,
 .navbar-nav>li.active .navi-120-bg:after{background-color: #6c2794;}
 
 /* Layer */
 #overlay #contentWrapper.theme120  #layerContent{border-color: #6c2794;}
 #inlineAd.theme120  div:nth-child(2) div:first-child > div:first-child{border-color: #6c2794;}

.theme121c{color:#ffc501 !important;}
 .theme121bg{background-color:#ffc501 !important;}
 .theme121hbg:hover, .theme121hbg.active { background-color: #ffc501; }
 .theme121bc{border-color:#ffc501 !important;}
 .theme121sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-121-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-121-bg:after,
 .navbar-nav>li.active .navi-121-bg:after{background-color: #ffc501;}
 
 /* Layer */
 #overlay #contentWrapper.theme121  #layerContent{border-color: #ffc501;}
 #inlineAd.theme121  div:nth-child(2) div:first-child > div:first-child{border-color: #ffc501;}

.theme122c{color:#34397d !important;}
 .theme122bg{background-color:#34397d !important;}
 .theme122hbg:hover, .theme122hbg.active { background-color: #34397d; }
 .theme122bc{border-color:#34397d !important;}
 .theme122sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-122-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-122-bg:after,
 .navbar-nav>li.active .navi-122-bg:after{background-color: #34397d;}
 
 /* Layer */
 #overlay #contentWrapper.theme122  #layerContent{border-color: #34397d;}
 #inlineAd.theme122  div:nth-child(2) div:first-child > div:first-child{border-color: #34397d;}

.theme123c{color:#7b51ba !important;}
 .theme123bg{background-color:#7b51ba !important;}
 .theme123hbg:hover, .theme123hbg.active { background-color: #7b51ba; }
 .theme123bc{border-color:#7b51ba !important;}
 .theme123sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-123-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-123-bg:after,
 .navbar-nav>li.active .navi-123-bg:after{background-color: #7b51ba;}
 
 /* Layer */
 #overlay #contentWrapper.theme123  #layerContent{border-color: #7b51ba;}
 #inlineAd.theme123  div:nth-child(2) div:first-child > div:first-child{border-color: #7b51ba;}

.theme124c{color:#e19106 !important;}
 .theme124bg{background-color:#e19106 !important;}
 .theme124hbg:hover, .theme124hbg.active { background-color: #e19106; }
 .theme124bc{border-color:#e19106 !important;}
 .theme124sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-124-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-124-bg:after,
 .navbar-nav>li.active .navi-124-bg:after{background-color: #e19106;}
 
 /* Layer */
 #overlay #contentWrapper.theme124  #layerContent{border-color: #e19106;}
 #inlineAd.theme124  div:nth-child(2) div:first-child > div:first-child{border-color: #e19106;}

.theme125c{color:#7f6ecb !important;}
 .theme125bg{background-color:#7f6ecb !important;}
 .theme125hbg:hover, .theme125hbg.active { background-color: #7f6ecb; }
 .theme125bc{border-color:#7f6ecb !important;}
 .theme125sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-125-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-125-bg:after,
 .navbar-nav>li.active .navi-125-bg:after{background-color: #7f6ecb;}
 
 /* Layer */
 #overlay #contentWrapper.theme125  #layerContent{border-color: #7f6ecb;}
 #inlineAd.theme125  div:nth-child(2) div:first-child > div:first-child{border-color: #7f6ecb;}

.theme126c{color:#ff7600 !important;}
 .theme126bg{background-color:#ff7600 !important;}
 .theme126hbg:hover, .theme126hbg.active { background-color: #ff7600; }
 .theme126bc{border-color:#ff7600 !important;}
 .theme126sprite::before {background-image: url(/media/icon-126-13111.png);}
 
 .navi-126-bg:after{background-image: url(/media/icon-126-13111.png);}
 .navbar-nav>li:hover .navi-126-bg:after,
 .navbar-nav>li.active .navi-126-bg:after{background-color: #ff7600;}
 
 /* Layer */
 #overlay #contentWrapper.theme126  #layerContent{border-color: #ff7600;}
 #inlineAd.theme126  div:nth-child(2) div:first-child > div:first-child{border-color: #ff7600;}

.theme127c{color:#4a9413 !important;}
 .theme127bg{background-color:#4a9413 !important;}
 .theme127hbg:hover, .theme127hbg.active { background-color: #4a9413; }
 .theme127bc{border-color:#4a9413 !important;}
 .theme127sprite::before {background-image: url(/media/icon-127-13110.png);}
 
 .navi-127-bg:after{background-image: url(/media/icon-127-13110.png);}
 .navbar-nav>li:hover .navi-127-bg:after,
 .navbar-nav>li.active .navi-127-bg:after{background-color: #4a9413;}
 
 /* Layer */
 #overlay #contentWrapper.theme127  #layerContent{border-color: #4a9413;}
 #inlineAd.theme127  div:nth-child(2) div:first-child > div:first-child{border-color: #4a9413;}

.theme128c{color:#ff5d29 !important;}
 .theme128bg{background-color:#ff5d29 !important;}
 .theme128hbg:hover, .theme128hbg.active { background-color: #ff5d29; }
 .theme128bc{border-color:#ff5d29 !important;}
 .theme128sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-128-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-128-bg:after,
 .navbar-nav>li.active .navi-128-bg:after{background-color: #ff5d29;}
 
 /* Layer */
 #overlay #contentWrapper.theme128  #layerContent{border-color: #ff5d29;}
 #inlineAd.theme128  div:nth-child(2) div:first-child > div:first-child{border-color: #ff5d29;}

.theme129c{color:#326ab3 !important;}
 .theme129bg{background-color:#326ab3 !important;}
 .theme129hbg:hover, .theme129hbg.active { background-color: #326ab3; }
 .theme129bc{border-color:#326ab3 !important;}
 .theme129sprite::before {background-image: url(/media/icon-129-13111.png);}
 
 .navi-129-bg:after{background-image: url(/media/icon-129-13111.png);}
 .navbar-nav>li:hover .navi-129-bg:after,
 .navbar-nav>li.active .navi-129-bg:after{background-color: #326ab3;}
 
 /* Layer */
 #overlay #contentWrapper.theme129  #layerContent{border-color: #326ab3;}
 #inlineAd.theme129  div:nth-child(2) div:first-child > div:first-child{border-color: #326ab3;}

.theme131c{color:#ffffff !important;}
 .theme131bg{background-color:#ffffff !important;}
 .theme131hbg:hover, .theme131hbg.active { background-color: #ffffff; }
 .theme131bc{border-color:#ffffff !important;}
 .theme131sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-131-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-131-bg:after,
 .navbar-nav>li.active .navi-131-bg:after{background-color: #ffffff;}
 
 /* Layer */
 #overlay #contentWrapper.theme131  #layerContent{border-color: #ffffff;}
 #inlineAd.theme131  div:nth-child(2) div:first-child > div:first-child{border-color: #ffffff;}

.theme132c{color:#e74300 !important;}
 .theme132bg{background-color:#e74300 !important;}
 .theme132hbg:hover, .theme132hbg.active { background-color: #e74300; }
 .theme132bc{border-color:#e74300 !important;}
 .theme132sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-132-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-132-bg:after,
 .navbar-nav>li.active .navi-132-bg:after{background-color: #e74300;}
 
 /* Layer */
 #overlay #contentWrapper.theme132  #layerContent{border-color: #e74300;}
 #inlineAd.theme132  div:nth-child(2) div:first-child > div:first-child{border-color: #e74300;}

.theme133c{color:#f18712 !important;}
 .theme133bg{background-color:#f18712 !important;}
 .theme133hbg:hover, .theme133hbg.active { background-color: #f18712; }
 .theme133bc{border-color:#f18712 !important;}
 .theme133sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-133-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-133-bg:after,
 .navbar-nav>li.active .navi-133-bg:after{background-color: #f18712;}
 
 /* Layer */
 #overlay #contentWrapper.theme133  #layerContent{border-color: #f18712;}
 #inlineAd.theme133  div:nth-child(2) div:first-child > div:first-child{border-color: #f18712;}

.theme134c{color:#e73916 !important;}
 .theme134bg{background-color:#e73916 !important;}
 .theme134hbg:hover, .theme134hbg.active { background-color: #e73916; }
 .theme134bc{border-color:#e73916 !important;}
 .theme134sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-134-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-134-bg:after,
 .navbar-nav>li.active .navi-134-bg:after{background-color: #e73916;}
 
 /* Layer */
 #overlay #contentWrapper.theme134  #layerContent{border-color: #e73916;}
 #inlineAd.theme134  div:nth-child(2) div:first-child > div:first-child{border-color: #e73916;}

.theme135c{color:#c667c9 !important;}
 .theme135bg{background-color:#c667c9 !important;}
 .theme135hbg:hover, .theme135hbg.active { background-color: #c667c9; }
 .theme135bc{border-color:#c667c9 !important;}
 .theme135sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-135-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-135-bg:after,
 .navbar-nav>li.active .navi-135-bg:after{background-color: #c667c9;}
 
 /* Layer */
 #overlay #contentWrapper.theme135  #layerContent{border-color: #c667c9;}
 #inlineAd.theme135  div:nth-child(2) div:first-child > div:first-child{border-color: #c667c9;}

.theme136c{color:#bfd730 !important;}
 .theme136bg{background-color:#bfd730 !important;}
 .theme136hbg:hover, .theme136hbg.active { background-color: #bfd730; }
 .theme136bc{border-color:#bfd730 !important;}
 .theme136sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-136-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-136-bg:after,
 .navbar-nav>li.active .navi-136-bg:after{background-color: #bfd730;}
 
 /* Layer */
 #overlay #contentWrapper.theme136  #layerContent{border-color: #bfd730;}
 #inlineAd.theme136  div:nth-child(2) div:first-child > div:first-child{border-color: #bfd730;}

.theme137c{color:#0f66df !important;}
 .theme137bg{background-color:#0f66df !important;}
 .theme137hbg:hover, .theme137hbg.active { background-color: #0f66df; }
 .theme137bc{border-color:#0f66df !important;}
 .theme137sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-137-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-137-bg:after,
 .navbar-nav>li.active .navi-137-bg:after{background-color: #0f66df;}
 
 /* Layer */
 #overlay #contentWrapper.theme137  #layerContent{border-color: #0f66df;}
 #inlineAd.theme137  div:nth-child(2) div:first-child > div:first-child{border-color: #0f66df;}

.theme138c{color:#004f55 !important;}
 .theme138bg{background-color:#004f55 !important;}
 .theme138hbg:hover, .theme138hbg.active { background-color: #004f55; }
 .theme138bc{border-color:#004f55 !important;}
 .theme138sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-138-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-138-bg:after,
 .navbar-nav>li.active .navi-138-bg:after{background-color: #004f55;}
 
 /* Layer */
 #overlay #contentWrapper.theme138  #layerContent{border-color: #004f55;}
 #inlineAd.theme138  div:nth-child(2) div:first-child > div:first-child{border-color: #004f55;}

.theme139c{color:#2a2a2a !important;}
 .theme139bg{background-color:#2a2a2a !important;}
 .theme139hbg:hover, .theme139hbg.active { background-color: #2a2a2a; }
 .theme139bc{border-color:#2a2a2a !important;}
 .theme139sprite::before {background-image: url(/media/icon-139-13110.png);}
 
 .navi-139-bg:after{background-image: url(/media/icon-139-13110.png);}
 .navbar-nav>li:hover .navi-139-bg:after,
 .navbar-nav>li.active .navi-139-bg:after{background-color: #2a2a2a;}
 
 /* Layer */
 #overlay #contentWrapper.theme139  #layerContent{border-color: #2a2a2a;}
 #inlineAd.theme139  div:nth-child(2) div:first-child > div:first-child{border-color: #2a2a2a;}

.theme140c{color:#016cb5 !important;}
 .theme140bg{background-color:#016cb5 !important;}
 .theme140hbg:hover, .theme140hbg.active { background-color: #016cb5; }
 .theme140bc{border-color:#016cb5 !important;}
 .theme140sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-140-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-140-bg:after,
 .navbar-nav>li.active .navi-140-bg:after{background-color: #016cb5;}
 
 /* Layer */
 #overlay #contentWrapper.theme140  #layerContent{border-color: #016cb5;}
 #inlineAd.theme140  div:nth-child(2) div:first-child > div:first-child{border-color: #016cb5;}

.theme141c{color:#1cb7c8 !important;}
 .theme141bg{background-color:#1cb7c8 !important;}
 .theme141hbg:hover, .theme141hbg.active { background-color: #1cb7c8; }
 .theme141bc{border-color:#1cb7c8 !important;}
 .theme141sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-141-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-141-bg:after,
 .navbar-nav>li.active .navi-141-bg:after{background-color: #1cb7c8;}
 
 /* Layer */
 #overlay #contentWrapper.theme141  #layerContent{border-color: #1cb7c8;}
 #inlineAd.theme141  div:nth-child(2) div:first-child > div:first-child{border-color: #1cb7c8;}

.theme144c{color:#d23c37 !important;}
 .theme144bg{background-color:#d23c37 !important;}
 .theme144hbg:hover, .theme144hbg.active { background-color: #d23c37; }
 .theme144bc{border-color:#d23c37 !important;}
 .theme144sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-144-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-144-bg:after,
 .navbar-nav>li.active .navi-144-bg:after{background-color: #d23c37;}
 
 /* Layer */
 #overlay #contentWrapper.theme144  #layerContent{border-color: #d23c37;}
 #inlineAd.theme144  div:nth-child(2) div:first-child > div:first-child{border-color: #d23c37;}

.theme145c{color:#e8450c !important;}
 .theme145bg{background-color:#e8450c !important;}
 .theme145hbg:hover, .theme145hbg.active { background-color: #e8450c; }
 .theme145bc{border-color:#e8450c !important;}
 .theme145sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-145-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-145-bg:after,
 .navbar-nav>li.active .navi-145-bg:after{background-color: #e8450c;}
 
 /* Layer */
 #overlay #contentWrapper.theme145  #layerContent{border-color: #e8450c;}
 #inlineAd.theme145  div:nth-child(2) div:first-child > div:first-child{border-color: #e8450c;}

.theme146c{color:#fc9806 !important;}
 .theme146bg{background-color:#fc9806 !important;}
 .theme146hbg:hover, .theme146hbg.active { background-color: #fc9806; }
 .theme146bc{border-color:#fc9806 !important;}
 .theme146sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-146-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-146-bg:after,
 .navbar-nav>li.active .navi-146-bg:after{background-color: #fc9806;}
 
 /* Layer */
 #overlay #contentWrapper.theme146  #layerContent{border-color: #fc9806;}
 #inlineAd.theme146  div:nth-child(2) div:first-child > div:first-child{border-color: #fc9806;}

.theme147c{color:#230033 !important;}
 .theme147bg{background-color:#230033 !important;}
 .theme147hbg:hover, .theme147hbg.active { background-color: #230033; }
 .theme147bc{border-color:#230033 !important;}
 .theme147sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-147-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-147-bg:after,
 .navbar-nav>li.active .navi-147-bg:after{background-color: #230033;}
 
 /* Layer */
 #overlay #contentWrapper.theme147  #layerContent{border-color: #230033;}
 #inlineAd.theme147  div:nth-child(2) div:first-child > div:first-child{border-color: #230033;}

.theme148c{color:#691f82 !important;}
 .theme148bg{background-color:#691f82 !important;}
 .theme148hbg:hover, .theme148hbg.active { background-color: #691f82; }
 .theme148bc{border-color:#691f82 !important;}
 .theme148sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-148-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-148-bg:after,
 .navbar-nav>li.active .navi-148-bg:after{background-color: #691f82;}
 
 /* Layer */
 #overlay #contentWrapper.theme148  #layerContent{border-color: #691f82;}
 #inlineAd.theme148  div:nth-child(2) div:first-child > div:first-child{border-color: #691f82;}

.theme149c{color:#00D2E6 !important;}
 .theme149bg{background-color:#00D2E6 !important;}
 .theme149hbg:hover, .theme149hbg.active { background-color: #00D2E6; }
 .theme149bc{border-color:#00D2E6 !important;}
 .theme149sprite::before {background-image: url(/media/icon-149-13111.png);}
 
 .navi-149-bg:after{background-image: url(/media/icon-149-13111.png);}
 .navbar-nav>li:hover .navi-149-bg:after,
 .navbar-nav>li.active .navi-149-bg:after{background-color: #00D2E6;}
 
 /* Layer */
 #overlay #contentWrapper.theme149  #layerContent{border-color: #00D2E6;}
 #inlineAd.theme149  div:nth-child(2) div:first-child > div:first-child{border-color: #00D2E6;}

.theme151c{color:#00a0da !important;}
 .theme151bg{background-color:#00a0da !important;}
 .theme151hbg:hover, .theme151hbg.active { background-color: #00a0da; }
 .theme151bc{border-color:#00a0da !important;}
 .theme151sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-151-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-151-bg:after,
 .navbar-nav>li.active .navi-151-bg:after{background-color: #00a0da;}
 
 /* Layer */
 #overlay #contentWrapper.theme151  #layerContent{border-color: #00a0da;}
 #inlineAd.theme151  div:nth-child(2) div:first-child > div:first-child{border-color: #00a0da;}

.theme153c{color:#FC7A06 !important;}
 .theme153bg{background-color:#FC7A06 !important;}
 .theme153hbg:hover, .theme153hbg.active { background-color: #FC7A06; }
 .theme153bc{border-color:#FC7A06 !important;}
 .theme153sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-153-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-153-bg:after,
 .navbar-nav>li.active .navi-153-bg:after{background-color: #FC7A06;}
 
 /* Layer */
 #overlay #contentWrapper.theme153  #layerContent{border-color: #FC7A06;}
 #inlineAd.theme153  div:nth-child(2) div:first-child > div:first-child{border-color: #FC7A06;}

.theme155c{color:#73b843 !important;}
 .theme155bg{background-color:#73b843 !important;}
 .theme155hbg:hover, .theme155hbg.active { background-color: #73b843; }
 .theme155bc{border-color:#73b843 !important;}
 .theme155sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-155-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-155-bg:after,
 .navbar-nav>li.active .navi-155-bg:after{background-color: #73b843;}
 
 /* Layer */
 #overlay #contentWrapper.theme155  #layerContent{border-color: #73b843;}
 #inlineAd.theme155  div:nth-child(2) div:first-child > div:first-child{border-color: #73b843;}

.theme156c{color:#00a5a7 !important;}
 .theme156bg{background-color:#00a5a7 !important;}
 .theme156hbg:hover, .theme156hbg.active { background-color: #00a5a7; }
 .theme156bc{border-color:#00a5a7 !important;}
 .theme156sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-156-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-156-bg:after,
 .navbar-nav>li.active .navi-156-bg:after{background-color: #00a5a7;}
 
 /* Layer */
 #overlay #contentWrapper.theme156  #layerContent{border-color: #00a5a7;}
 #inlineAd.theme156  div:nth-child(2) div:first-child > div:first-child{border-color: #00a5a7;}

.theme157c{color:#a49ccc !important;}
 .theme157bg{background-color:#a49ccc !important;}
 .theme157hbg:hover, .theme157hbg.active { background-color: #a49ccc; }
 .theme157bc{border-color:#a49ccc !important;}
 .theme157sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-157-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-157-bg:after,
 .navbar-nav>li.active .navi-157-bg:after{background-color: #a49ccc;}
 
 /* Layer */
 #overlay #contentWrapper.theme157  #layerContent{border-color: #a49ccc;}
 #inlineAd.theme157  div:nth-child(2) div:first-child > div:first-child{border-color: #a49ccc;}

.theme158c{color:#071d49 !important;}
 .theme158bg{background-color:#071d49 !important;}
 .theme158hbg:hover, .theme158hbg.active { background-color: #071d49; }
 .theme158bc{border-color:#071d49 !important;}
 .theme158sprite::before {background-image: url(/media/icon-158-13111.png);}
 
 .navi-158-bg:after{background-image: url(/media/icon-158-13111.png);}
 .navbar-nav>li:hover .navi-158-bg:after,
 .navbar-nav>li.active .navi-158-bg:after{background-color: #071d49;}
 
 /* Layer */
 #overlay #contentWrapper.theme158  #layerContent{border-color: #071d49;}
 #inlineAd.theme158  div:nth-child(2) div:first-child > div:first-child{border-color: #071d49;}

.theme159c{color:#d81a16 !important;}
 .theme159bg{background-color:#d81a16 !important;}
 .theme159hbg:hover, .theme159hbg.active { background-color: #d81a16; }
 .theme159bc{border-color:#d81a16 !important;}
 .theme159sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-159-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-159-bg:after,
 .navbar-nav>li.active .navi-159-bg:after{background-color: #d81a16;}
 
 /* Layer */
 #overlay #contentWrapper.theme159  #layerContent{border-color: #d81a16;}
 #inlineAd.theme159  div:nth-child(2) div:first-child > div:first-child{border-color: #d81a16;}

.theme160c{color:#ffbc00 !important;}
 .theme160bg{background-color:#ffbc00 !important;}
 .theme160hbg:hover, .theme160hbg.active { background-color: #ffbc00; }
 .theme160bc{border-color:#ffbc00 !important;}
 .theme160sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-160-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-160-bg:after,
 .navbar-nav>li.active .navi-160-bg:after{background-color: #ffbc00;}
 
 /* Layer */
 #overlay #contentWrapper.theme160  #layerContent{border-color: #ffbc00;}
 #inlineAd.theme160  div:nth-child(2) div:first-child > div:first-child{border-color: #ffbc00;}

.theme161c{color:#FA6900 !important;}
 .theme161bg{background-color:#FA6900 !important;}
 .theme161hbg:hover, .theme161hbg.active { background-color: #FA6900; }
 .theme161bc{border-color:#FA6900 !important;}
 .theme161sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-161-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-161-bg:after,
 .navbar-nav>li.active .navi-161-bg:after{background-color: #FA6900;}
 
 /* Layer */
 #overlay #contentWrapper.theme161  #layerContent{border-color: #FA6900;}
 #inlineAd.theme161  div:nth-child(2) div:first-child > div:first-child{border-color: #FA6900;}

.theme162c{color:#471c59 !important;}
 .theme162bg{background-color:#471c59 !important;}
 .theme162hbg:hover, .theme162hbg.active { background-color: #471c59; }
 .theme162bc{border-color:#471c59 !important;}
 .theme162sprite::before {background-image: url(/media/icon-162-13110.png);}
 
 .navi-162-bg:after{background-image: url(/media/icon-162-13110.png);}
 .navbar-nav>li:hover .navi-162-bg:after,
 .navbar-nav>li.active .navi-162-bg:after{background-color: #471c59;}
 
 /* Layer */
 #overlay #contentWrapper.theme162  #layerContent{border-color: #471c59;}
 #inlineAd.theme162  div:nth-child(2) div:first-child > div:first-child{border-color: #471c59;}

.theme163c{color:#d71a11 !important;}
 .theme163bg{background-color:#d71a11 !important;}
 .theme163hbg:hover, .theme163hbg.active { background-color: #d71a11; }
 .theme163bc{border-color:#d71a11 !important;}
 .theme163sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-163-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-163-bg:after,
 .navbar-nav>li.active .navi-163-bg:after{background-color: #d71a11;}
 
 /* Layer */
 #overlay #contentWrapper.theme163  #layerContent{border-color: #d71a11;}
 #inlineAd.theme163  div:nth-child(2) div:first-child > div:first-child{border-color: #d71a11;}

.theme164c{color:#57113e !important;}
 .theme164bg{background-color:#57113e !important;}
 .theme164hbg:hover, .theme164hbg.active { background-color: #57113e; }
 .theme164bc{border-color:#57113e !important;}
 .theme164sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-164-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-164-bg:after,
 .navbar-nav>li.active .navi-164-bg:after{background-color: #57113e;}
 
 /* Layer */
 #overlay #contentWrapper.theme164  #layerContent{border-color: #57113e;}
 #inlineAd.theme164  div:nth-child(2) div:first-child > div:first-child{border-color: #57113e;}

.theme165c{color:#4c3042 !important;}
 .theme165bg{background-color:#4c3042 !important;}
 .theme165hbg:hover, .theme165hbg.active { background-color: #4c3042; }
 .theme165bc{border-color:#4c3042 !important;}
 .theme165sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-165-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-165-bg:after,
 .navbar-nav>li.active .navi-165-bg:after{background-color: #4c3042;}
 
 /* Layer */
 #overlay #contentWrapper.theme165  #layerContent{border-color: #4c3042;}
 #inlineAd.theme165  div:nth-child(2) div:first-child > div:first-child{border-color: #4c3042;}

.theme166c{color:#57113e !important;}
 .theme166bg{background-color:#57113e !important;}
 .theme166hbg:hover, .theme166hbg.active { background-color: #57113e; }
 .theme166bc{border-color:#57113e !important;}
 .theme166sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-166-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-166-bg:after,
 .navbar-nav>li.active .navi-166-bg:after{background-color: #57113e;}
 
 /* Layer */
 #overlay #contentWrapper.theme166  #layerContent{border-color: #57113e;}
 #inlineAd.theme166  div:nth-child(2) div:first-child > div:first-child{border-color: #57113e;}

.theme167c{color:#512842 !important;}
 .theme167bg{background-color:#512842 !important;}
 .theme167hbg:hover, .theme167hbg.active { background-color: #512842; }
 .theme167bc{border-color:#512842 !important;}
 .theme167sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-167-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-167-bg:after,
 .navbar-nav>li.active .navi-167-bg:after{background-color: #512842;}
 
 /* Layer */
 #overlay #contentWrapper.theme167  #layerContent{border-color: #512842;}
 #inlineAd.theme167  div:nth-child(2) div:first-child > div:first-child{border-color: #512842;}

.theme168c{color:#00599e !important;}
 .theme168bg{background-color:#00599e !important;}
 .theme168hbg:hover, .theme168hbg.active { background-color: #00599e; }
 .theme168bc{border-color:#00599e !important;}
 .theme168sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-168-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-168-bg:after,
 .navbar-nav>li.active .navi-168-bg:after{background-color: #00599e;}
 
 /* Layer */
 #overlay #contentWrapper.theme168  #layerContent{border-color: #00599e;}
 #inlineAd.theme168  div:nth-child(2) div:first-child > div:first-child{border-color: #00599e;}

.theme169c{color:#f6e0c1 !important;}
 .theme169bg{background-color:#f6e0c1 !important;}
 .theme169hbg:hover, .theme169hbg.active { background-color: #f6e0c1; }
 .theme169bc{border-color:#f6e0c1 !important;}
 .theme169sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-169-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-169-bg:after,
 .navbar-nav>li.active .navi-169-bg:after{background-color: #f6e0c1;}
 
 /* Layer */
 #overlay #contentWrapper.theme169  #layerContent{border-color: #f6e0c1;}
 #inlineAd.theme169  div:nth-child(2) div:first-child > div:first-child{border-color: #f6e0c1;}

.theme170c{color:#a80004 !important;}
 .theme170bg{background-color:#a80004 !important;}
 .theme170hbg:hover, .theme170hbg.active { background-color: #a80004; }
 .theme170bc{border-color:#a80004 !important;}
 .theme170sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-170-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-170-bg:after,
 .navbar-nav>li.active .navi-170-bg:after{background-color: #a80004;}
 
 /* Layer */
 #overlay #contentWrapper.theme170  #layerContent{border-color: #a80004;}
 #inlineAd.theme170  div:nth-child(2) div:first-child > div:first-child{border-color: #a80004;}

.theme171c{color:#E20A5D !important;}
 .theme171bg{background-color:#E20A5D !important;}
 .theme171hbg:hover, .theme171hbg.active { background-color: #E20A5D; }
 .theme171bc{border-color:#E20A5D !important;}
 .theme171sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-171-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-171-bg:after,
 .navbar-nav>li.active .navi-171-bg:after{background-color: #E20A5D;}
 
 /* Layer */
 #overlay #contentWrapper.theme171  #layerContent{border-color: #E20A5D;}
 #inlineAd.theme171  div:nth-child(2) div:first-child > div:first-child{border-color: #E20A5D;}

.theme172c{color:#8dcd1e !important;}
 .theme172bg{background-color:#8dcd1e !important;}
 .theme172hbg:hover, .theme172hbg.active { background-color: #8dcd1e; }
 .theme172bc{border-color:#8dcd1e !important;}
 .theme172sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-172-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-172-bg:after,
 .navbar-nav>li.active .navi-172-bg:after{background-color: #8dcd1e;}
 
 /* Layer */
 #overlay #contentWrapper.theme172  #layerContent{border-color: #8dcd1e;}
 #inlineAd.theme172  div:nth-child(2) div:first-child > div:first-child{border-color: #8dcd1e;}

.theme173c{color:#A11780 !important;}
 .theme173bg{background-color:#A11780 !important;}
 .theme173hbg:hover, .theme173hbg.active { background-color: #A11780; }
 .theme173bc{border-color:#A11780 !important;}
 .theme173sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-173-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-173-bg:after,
 .navbar-nav>li.active .navi-173-bg:after{background-color: #A11780;}
 
 /* Layer */
 #overlay #contentWrapper.theme173  #layerContent{border-color: #A11780;}
 #inlineAd.theme173  div:nth-child(2) div:first-child > div:first-child{border-color: #A11780;}

.theme174c{color:#445472 !important;}
 .theme174bg{background-color:#445472 !important;}
 .theme174hbg:hover, .theme174hbg.active { background-color: #445472; }
 .theme174bc{border-color:#445472 !important;}
 .theme174sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-174-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-174-bg:after,
 .navbar-nav>li.active .navi-174-bg:after{background-color: #445472;}
 
 /* Layer */
 #overlay #contentWrapper.theme174  #layerContent{border-color: #445472;}
 #inlineAd.theme174  div:nth-child(2) div:first-child > div:first-child{border-color: #445472;}

.theme175c{color:#c76100 !important;}
 .theme175bg{background-color:#c76100 !important;}
 .theme175hbg:hover, .theme175hbg.active { background-color: #c76100; }
 .theme175bc{border-color:#c76100 !important;}
 .theme175sprite::before {background-image: url(/media/icon-175-13111.png);}
 
 .navi-175-bg:after{background-image: url(/media/icon-175-13111.png);}
 .navbar-nav>li:hover .navi-175-bg:after,
 .navbar-nav>li.active .navi-175-bg:after{background-color: #c76100;}
 
 /* Layer */
 #overlay #contentWrapper.theme175  #layerContent{border-color: #c76100;}
 #inlineAd.theme175  div:nth-child(2) div:first-child > div:first-child{border-color: #c76100;}

.theme176c{color:#0070bb !important;}
 .theme176bg{background-color:#0070bb !important;}
 .theme176hbg:hover, .theme176hbg.active { background-color: #0070bb; }
 .theme176bc{border-color:#0070bb !important;}
 .theme176sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-176-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-176-bg:after,
 .navbar-nav>li.active .navi-176-bg:after{background-color: #0070bb;}
 
 /* Layer */
 #overlay #contentWrapper.theme176  #layerContent{border-color: #0070bb;}
 #inlineAd.theme176  div:nth-child(2) div:first-child > div:first-child{border-color: #0070bb;}

.theme177c{color:#4f3430 !important;}
 .theme177bg{background-color:#4f3430 !important;}
 .theme177hbg:hover, .theme177hbg.active { background-color: #4f3430; }
 .theme177bc{border-color:#4f3430 !important;}
 .theme177sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-177-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-177-bg:after,
 .navbar-nav>li.active .navi-177-bg:after{background-color: #4f3430;}
 
 /* Layer */
 #overlay #contentWrapper.theme177  #layerContent{border-color: #4f3430;}
 #inlineAd.theme177  div:nth-child(2) div:first-child > div:first-child{border-color: #4f3430;}

.theme178c{color:#849501 !important;}
 .theme178bg{background-color:#849501 !important;}
 .theme178hbg:hover, .theme178hbg.active { background-color: #849501; }
 .theme178bc{border-color:#849501 !important;}
 .theme178sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-178-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-178-bg:after,
 .navbar-nav>li.active .navi-178-bg:after{background-color: #849501;}
 
 /* Layer */
 #overlay #contentWrapper.theme178  #layerContent{border-color: #849501;}
 #inlineAd.theme178  div:nth-child(2) div:first-child > div:first-child{border-color: #849501;}

.theme179c{color:#ed1c24 !important;}
 .theme179bg{background-color:#ed1c24 !important;}
 .theme179hbg:hover, .theme179hbg.active { background-color: #ed1c24; }
 .theme179bc{border-color:#ed1c24 !important;}
 .theme179sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-179-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-179-bg:after,
 .navbar-nav>li.active .navi-179-bg:after{background-color: #ed1c24;}
 
 /* Layer */
 #overlay #contentWrapper.theme179  #layerContent{border-color: #ed1c24;}
 #inlineAd.theme179  div:nth-child(2) div:first-child > div:first-child{border-color: #ed1c24;}

.theme180c{color:#eccf00 !important;}
 .theme180bg{background-color:#eccf00 !important;}
 .theme180hbg:hover, .theme180hbg.active { background-color: #eccf00; }
 .theme180bc{border-color:#eccf00 !important;}
 .theme180sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-180-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-180-bg:after,
 .navbar-nav>li.active .navi-180-bg:after{background-color: #eccf00;}
 
 /* Layer */
 #overlay #contentWrapper.theme180  #layerContent{border-color: #eccf00;}
 #inlineAd.theme180  div:nth-child(2) div:first-child > div:first-child{border-color: #eccf00;}

.theme181c{color:#0c3254 !important;}
 .theme181bg{background-color:#0c3254 !important;}
 .theme181hbg:hover, .theme181hbg.active { background-color: #0c3254; }
 .theme181bc{border-color:#0c3254 !important;}
 .theme181sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-181-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-181-bg:after,
 .navbar-nav>li.active .navi-181-bg:after{background-color: #0c3254;}
 
 /* Layer */
 #overlay #contentWrapper.theme181  #layerContent{border-color: #0c3254;}
 #inlineAd.theme181  div:nth-child(2) div:first-child > div:first-child{border-color: #0c3254;}

.theme182c{color:#BD0000 !important;}
 .theme182bg{background-color:#BD0000 !important;}
 .theme182hbg:hover, .theme182hbg.active { background-color: #BD0000; }
 .theme182bc{border-color:#BD0000 !important;}
 .theme182sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-182-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-182-bg:after,
 .navbar-nav>li.active .navi-182-bg:after{background-color: #BD0000;}
 
 /* Layer */
 #overlay #contentWrapper.theme182  #layerContent{border-color: #BD0000;}
 #inlineAd.theme182  div:nth-child(2) div:first-child > div:first-child{border-color: #BD0000;}

.theme183c{color:#e74300 !important;}
 .theme183bg{background-color:#e74300 !important;}
 .theme183hbg:hover, .theme183hbg.active { background-color: #e74300; }
 .theme183bc{border-color:#e74300 !important;}
 .theme183sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-183-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-183-bg:after,
 .navbar-nav>li.active .navi-183-bg:after{background-color: #e74300;}
 
 /* Layer */
 #overlay #contentWrapper.theme183  #layerContent{border-color: #e74300;}
 #inlineAd.theme183  div:nth-child(2) div:first-child > div:first-child{border-color: #e74300;}

.theme184c{color:#138E6F !important;}
 .theme184bg{background-color:#138E6F !important;}
 .theme184hbg:hover, .theme184hbg.active { background-color: #138E6F; }
 .theme184bc{border-color:#138E6F !important;}
 .theme184sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-184-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-184-bg:after,
 .navbar-nav>li.active .navi-184-bg:after{background-color: #138E6F;}
 
 /* Layer */
 #overlay #contentWrapper.theme184  #layerContent{border-color: #138E6F;}
 #inlineAd.theme184  div:nth-child(2) div:first-child > div:first-child{border-color: #138E6F;}

.theme185c{color:#e8dc97 !important;}
 .theme185bg{background-color:#e8dc97 !important;}
 .theme185hbg:hover, .theme185hbg.active { background-color: #e8dc97; }
 .theme185bc{border-color:#e8dc97 !important;}
 .theme185sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-185-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-185-bg:after,
 .navbar-nav>li.active .navi-185-bg:after{background-color: #e8dc97;}
 
 /* Layer */
 #overlay #contentWrapper.theme185  #layerContent{border-color: #e8dc97;}
 #inlineAd.theme185  div:nth-child(2) div:first-child > div:first-child{border-color: #e8dc97;}

.theme186c{color:#eb540f !important;}
 .theme186bg{background-color:#eb540f !important;}
 .theme186hbg:hover, .theme186hbg.active { background-color: #eb540f; }
 .theme186bc{border-color:#eb540f !important;}
 .theme186sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-186-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-186-bg:after,
 .navbar-nav>li.active .navi-186-bg:after{background-color: #eb540f;}
 
 /* Layer */
 #overlay #contentWrapper.theme186  #layerContent{border-color: #eb540f;}
 #inlineAd.theme186  div:nth-child(2) div:first-child > div:first-child{border-color: #eb540f;}

.theme187c{color:#000000 !important;}
 .theme187bg{background-color:#000000 !important;}
 .theme187hbg:hover, .theme187hbg.active { background-color: #000000; }
 .theme187bc{border-color:#000000 !important;}
 .theme187sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-187-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-187-bg:after,
 .navbar-nav>li.active .navi-187-bg:after{background-color: #000000;}
 
 /* Layer */
 #overlay #contentWrapper.theme187  #layerContent{border-color: #000000;}
 #inlineAd.theme187  div:nth-child(2) div:first-child > div:first-child{border-color: #000000;}

.theme188c{color:#f51125 !important;}
 .theme188bg{background-color:#f51125 !important;}
 .theme188hbg:hover, .theme188hbg.active { background-color: #f51125; }
 .theme188bc{border-color:#f51125 !important;}
 .theme188sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-188-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-188-bg:after,
 .navbar-nav>li.active .navi-188-bg:after{background-color: #f51125;}
 
 /* Layer */
 #overlay #contentWrapper.theme188  #layerContent{border-color: #f51125;}
 #inlineAd.theme188  div:nth-child(2) div:first-child > div:first-child{border-color: #f51125;}

.theme189c{color:#3379c5 !important;}
 .theme189bg{background-color:#3379c5 !important;}
 .theme189hbg:hover, .theme189hbg.active { background-color: #3379c5; }
 .theme189bc{border-color:#3379c5 !important;}
 .theme189sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-189-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-189-bg:after,
 .navbar-nav>li.active .navi-189-bg:after{background-color: #3379c5;}
 
 /* Layer */
 #overlay #contentWrapper.theme189  #layerContent{border-color: #3379c5;}
 #inlineAd.theme189  div:nth-child(2) div:first-child > div:first-child{border-color: #3379c5;}

.theme191c{color:#008ED6 !important;}
 .theme191bg{background-color:#008ED6 !important;}
 .theme191hbg:hover, .theme191hbg.active { background-color: #008ED6; }
 .theme191bc{border-color:#008ED6 !important;}
 .theme191sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-191-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-191-bg:after,
 .navbar-nav>li.active .navi-191-bg:after{background-color: #008ED6;}
 
 /* Layer */
 #overlay #contentWrapper.theme191  #layerContent{border-color: #008ED6;}
 #inlineAd.theme191  div:nth-child(2) div:first-child > div:first-child{border-color: #008ED6;}

.theme192c{color:#192274 !important;}
 .theme192bg{background-color:#192274 !important;}
 .theme192hbg:hover, .theme192hbg.active { background-color: #192274; }
 .theme192bc{border-color:#192274 !important;}
 .theme192sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-192-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-192-bg:after,
 .navbar-nav>li.active .navi-192-bg:after{background-color: #192274;}
 
 /* Layer */
 #overlay #contentWrapper.theme192  #layerContent{border-color: #192274;}
 #inlineAd.theme192  div:nth-child(2) div:first-child > div:first-child{border-color: #192274;}

.theme193c{color:#dd5900 !important;}
 .theme193bg{background-color:#dd5900 !important;}
 .theme193hbg:hover, .theme193hbg.active { background-color: #dd5900; }
 .theme193bc{border-color:#dd5900 !important;}
 .theme193sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-193-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-193-bg:after,
 .navbar-nav>li.active .navi-193-bg:after{background-color: #dd5900;}
 
 /* Layer */
 #overlay #contentWrapper.theme193  #layerContent{border-color: #dd5900;}
 #inlineAd.theme193  div:nth-child(2) div:first-child > div:first-child{border-color: #dd5900;}

.theme194c{color:#43357c !important;}
 .theme194bg{background-color:#43357c !important;}
 .theme194hbg:hover, .theme194hbg.active { background-color: #43357c; }
 .theme194bc{border-color:#43357c !important;}
 .theme194sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-194-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-194-bg:after,
 .navbar-nav>li.active .navi-194-bg:after{background-color: #43357c;}
 
 /* Layer */
 #overlay #contentWrapper.theme194  #layerContent{border-color: #43357c;}
 #inlineAd.theme194  div:nth-child(2) div:first-child > div:first-child{border-color: #43357c;}

.theme195c{color:#004891 !important;}
 .theme195bg{background-color:#004891 !important;}
 .theme195hbg:hover, .theme195hbg.active { background-color: #004891; }
 .theme195bc{border-color:#004891 !important;}
 .theme195sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-195-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-195-bg:after,
 .navbar-nav>li.active .navi-195-bg:after{background-color: #004891;}
 
 /* Layer */
 #overlay #contentWrapper.theme195  #layerContent{border-color: #004891;}
 #inlineAd.theme195  div:nth-child(2) div:first-child > div:first-child{border-color: #004891;}

.theme196c{color:#0cbaea !important;}
 .theme196bg{background-color:#0cbaea !important;}
 .theme196hbg:hover, .theme196hbg.active { background-color: #0cbaea; }
 .theme196bc{border-color:#0cbaea !important;}
 .theme196sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-196-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-196-bg:after,
 .navbar-nav>li.active .navi-196-bg:after{background-color: #0cbaea;}
 
 /* Layer */
 #overlay #contentWrapper.theme196  #layerContent{border-color: #0cbaea;}
 #inlineAd.theme196  div:nth-child(2) div:first-child > div:first-child{border-color: #0cbaea;}

.theme197c{color:#FFFFFF !important;}
 .theme197bg{background-color:#FFFFFF !important;}
 .theme197hbg:hover, .theme197hbg.active { background-color: #FFFFFF; }
 .theme197bc{border-color:#FFFFFF !important;}
 .theme197sprite::before {background-image: url(/media/icon-1-14110.png);}
 
 .navi-197-bg:after{background-image: url(/media/icon-1-14110.png);}
 .navbar-nav>li:hover .navi-197-bg:after,
 .navbar-nav>li.active .navi-197-bg:after{background-color: #FFFFFF;}
 
 /* Layer */
 #overlay #contentWrapper.theme197  #layerContent{border-color: #FFFFFF;}
 #inlineAd.theme197  div:nth-child(2) div:first-child > div:first-child{border-color: #FFFFFF;}
