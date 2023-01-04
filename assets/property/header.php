<?php

require '../../adm/dkc/adm/f/fungsi/fungsi.php';

?>

<style type="text/css">
  #preloader{overflow:hidden;background-color:#fff;height:100%;left:0;position:fixed;top:0;width:100%;z-index:999999;}
.classy-load{-webkit-animation:2000ms linear 0s normal none infinite running classy-load;animation:2000ms linear 0s normal none infinite running classy-load;background:transparent none repeat scroll 0 0;border-color:#dddddd #dddddd #111111;border-radius:50%;border-style:solid;border-width:2px;height:40px;left:calc(50% - 20px);position:relative;top:calc(50% - 20px);width:40px;z-index:9;}
@-webkit-keyframes classy-load{
    0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);}
}
@keyframes classy-load{
    0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);}
    100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);}
}

.navigation{width:100%;height:10px;display:table;position:relative;font-family:inherit;background-color: #2d5986;}
.navigation *{box-sizing:border-box;-webkit-tap-highlight-color:transparent}
.navigation-portrait{height:10px; padding-top: 20px; padding-bottom: 20px;}
.navigation-fixed{position:fixed;top:0;left:0;z-index:19998}
.navigation-hidden{width:0!important;height:0!important;margin:0!important;padding:0!important}
.align-to-right{float:right}
.nav-header{float:left}
.navigation-hidden .nav-header{display:none}
.nav-brand{line-height:70px;padding:0;color:#343a40;font-size:24px;text-decoration:none!important}
.nav-brand:hover,.nav-brand:focus{color:#343a40}
.navigation-portrait .nav-brand{font-size:18px;line-height:48px}
.nav-logo>img{height:48px;margin:11px auto;padding:0 15px;float:left}
.nav-logo:focus>img{outline:initial}
.navigation-portrait .nav-logo>img{height:36px;margin:6px auto 6px 15px;padding:0}
.nav-toggle{width:30px;height:30px;padding:6px 2px 0;position:absolute;top:50%;margin-top:-14px;right:15px;display:none;cursor:pointer}
.nav-toggle:before{content:"";position:absolute;width:24px;height:2px;background-color:#343a40;border-radius:10px;box-shadow:0 .5em 0 0 #343a40,0 1em 0 0 #343a40}
.navigation-portrait .nav-toggle{display:block}
.navigation-portrait .nav-menus-wrapper{width:320px;height:100%;top:0;left:-400px;position:fixed;background-color:white; z-index:20000;overflow-y:auto;-webkit-overflow-scrolling:touch;-webkit-transition-duration:.2s;transition-duration:.2s;-webkit-transition-timing-function:ease;transition-timing-function:ease;}
.navigation-portrait .nav-menus-wrapper.nav-menus-wrapper-right{left:auto;right:-400px}
.navigation-portrait .nav-menus-wrapper.nav-menus-wrapper-open{left:0}
.navigation-portrait .nav-menus-wrapper.nav-menus-wrapper-right.nav-menus-wrapper-open{left:auto;right:0}
.nav-menus-wrapper-close-button{width:30px;height:40px;margin:10px 7px;display:none;float:right;color:#343a40;font-size:26px;cursor:pointer}
.navigation-portrait .nav-menus-wrapper-close-button{display:block}
.nav-menu{margin:0;padding:0;list-style:none;line-height:normal;font-size:0}
.navigation-portrait .nav-menu{width:100%}
.navigation-landscape .nav-menu.nav-menu-centered{float:none;text-align:center}
.navigation-landscape .nav-menu.nav-menu-centered>li{float:none}
.nav-menu>li{display:inline-block;float:left;text-align:left}
.navigation-portrait .nav-menu>li{width:100%;position:relative;border-top:solid 1px #f0f0f0}
.navigation-portrait .nav-menu>li:last-child{border-bottom:solid 1px #f0f0f0}
.nav-menu+.nav-menu>li:first-child{border-top:none}
.nav-menu>li>a{height:70px;padding:26px 15px;display:inline-block;text-decoration:none;font-size:14px;color:#343a40;-webkit-transition:color .3s,background .3s;transition:color .3s,background .3s}
.navigation-portrait .nav-menu>li>a{width:100%;height:auto;padding:12px 15px 12px 26px}
.nav-menu>li:hover>a,.nav-menu>li.active>a,.nav-menu>li.focus>a{color:#27ae60}
.nav-menu>li>a>i,.nav-menu>li>a>[class*=ion-]{width:18px;height:16px;line-height:16px;-webkit-transform:scale(1.4);transform:scale(1.4)}
.nav-menu>li>a>[class*=ion-]{width:16px;display:inline-block;-webkit-transform:scale(1.8);transform:scale(1.8)}
.navigation-portrait .nav-menu.nav-menu-social{width:100%;text-align:center}
.nav-menu.nav-menu-social>li{text-align:center;float:none;border:none!important}
.navigation-portrait .nav-menu.nav-menu-social>li{width:auto}
.nav-menu.nav-menu-social>li>a>[class*=ion-]{font-size:12px}
.nav-menu.nav-menu-social>li>a>.fa{font-size:14px}
.navigation-portrait .nav-menu.nav-menu-social>li>a{padding:15px}
.submenu-indicator{margin-left:6px;margin-top:6px;float:right;-webkit-transition:all .2s;transition:all .2s}
.navigation-portrait .submenu-indicator{width:54px;height:44px;margin-top:0;position:absolute;top:0;right:0;text-align:center;z-index:20000}
.submenu-indicator-chevron{height:6px;width:6px;display:block;border-style:solid;border-width:0 1px 1px 0;border-color:transparent #70798b #70798b transparent;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-transition:border .2s;transition:border .2s}
.navigation-portrait .submenu-indicator-chevron{position:absolute;top:18px;left:24px}
.nav-menu>li:hover>a .submenu-indicator-chevron,.nav-menu>.active>a .submenu-indicator-chevron,.nav-menu>.focus>a .submenu-indicator-chevron{border-color:transparent #967adc #967adc transparent}
.navigation-portrait .submenu-indicator.submenu-indicator-up{-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}
.nav-overlay-panel{width:100%;height:100%;top:0;left:0;position:fixed;display:none;z-index:19999}
.no-scroll{width:100%;height:100%;overflow:hidden}
.nav-search{height:70px;float:right;z-index:19998}
.navigation-portrait .nav-search{height:48px;padding:0 10px;margin-right:52px}
.navigation-hidden .nav-search{display:none}
.nav-search-button{width:70px;height:70px;line-height:70px;text-align:center;cursor:pointer;background-color:#fbfcfd}
.navigation-portrait .nav-search-button{width:50px;height:48px;line-height:46px;font-size:22px}
.nav-search-icon{width:14px;height:14px;margin:2px 8px 8px 4px;display:inline-block;vertical-align:middle;position:relative;color:#343a40;text-align:left;text-indent:-9999px;border:2px solid;border-radius:50%;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}
.nav-search-icon:after,.nav-search-icon:before{content:'';pointer-events:none}
.nav-search-icon:before{width:2px;height:11px;top:11px;position:absolute;left:50%;border-radius:0 0 1px 1px;box-shadow:inset 0 0 0 32px;-webkit-transform:translateX(-50%);transform:translateX(-50%)}
.nav-search-button:hover .nav-search-icon{color:#27ae60}
.nav-search>form{width:100%;height:100%;padding:0 auto;display:none;position:absolute;left:0;top:0;background-color:#fff;z-index:99}
.nav-search-inner{width:70%;height:70px;margin:auto;display:table}
.navigation-portrait .nav-search-inner{height:48px}
.nav-search-inner input[type=text],.nav-search-inner input[type=search]{height:70px;width:100%;margin:0;padding:0 12px;font-size:26px;text-align:center;color:#343a40;outline:none;line-height:70px;border:none;background-color:transparent;-webkit-transition:all .3s;transition:all .3s}
.navigation-portrait .nav-search-inner input[type=text],.navigation-portrait .nav-search-inner input[type=search]{height:48px;font-size:18px;line-height:48px}
.nav-search-close-button{width:28px;height:28px;display:block;position:absolute;right:20px;top:20px;line-height:normal;color:#343a40;font-size:20px;cursor:pointer;text-align:center}
.navigation-portrait .nav-search-close-button{top:10px;right:14px}
.nav-button{margin:18px 15px 0;padding:8px 14px;display:inline-block;color:#fff;font-size:14px;text-align:center;text-decoration:none;border-radius:4px}
.nav-button:hover,.nav-button:focus{color:#fff;text-decoration:none}
.navigation-portrait .nav-button{width:calc(100% - 52px);margin:17px 26px}
.nav-text{margin:25px 15px;display:inline-block;color:#343a40;font-size:14px}
.navigation-portrait .nav-text{width:calc(100% - 52px);margin:12px 26px 0}
.navigation-portrait .nav-text+ul{margin-top:15px}
.nav-dropdown{min-width:180px;margin:0;padding:0;display:none;position:absolute;list-style:none;z-index:98;white-space:nowrap}
.navigation-portrait .nav-dropdown{width:100%;position:static;left:0}
.nav-dropdown .nav-dropdown{left:100%}
.nav-menu>li>.nav-dropdown{border-top:solid 1px #f0f0f0}
.nav-dropdown>li{width:100%;float:left;clear:both;position:relative;text-align:left}
.nav-dropdown>li>a{width:100%;padding:16px 20px;display:inline-block;text-decoration:none;float:left;font-size:13px;color:#343a40;background-color:#fdfdfd;}
.nav-dropdown>li:hover>a,.nav-dropdown>li.focus>a{color:#27ae60}
.nav-dropdown.nav-dropdown-left{right:0}
.nav-dropdown>li>.nav-dropdown-left{left:auto;right:100%}
.navigation-landscape .nav-dropdown.nav-dropdown-left>li>a{text-align:right}
.navigation-portrait .nav-dropdown>li>a{padding:12px 20px 12px 30px}
.navigation-portrait .nav-dropdown>li>ul>li>a{padding-left:50px}
.navigation-portrait .nav-dropdown>li>ul>li>ul>li>a{padding-left:70px}
.navigation-portrait .nav-dropdown>li>ul>li>ul>li>ul>li>a{padding-left:90px}
.navigation-portrait .nav-dropdown>li>ul>li>ul>li>ul>li>ul>li>a{padding-left:110px}
.nav-dropdown .submenu-indicator{right:15px;top:10px;position:absolute}
.navigation-portrait .nav-dropdown .submenu-indicator{right:0;top:0}
.nav-dropdown .submenu-indicator .submenu-indicator-chevron{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}
.navigation-portrait .nav-dropdown .submenu-indicator .submenu-indicator-chevron{-webkit-transform:rotate(45deg);transform:rotate(45deg)}
.nav-dropdown>li:hover>a .submenu-indicator-chevron,.nav-dropdown>.focus>a .submenu-indicator-chevron{border-color:transparent #27ae60 #27ae60 transparent}
.navigation-landscape .nav-dropdown.nav-dropdown-left .submenu-indicator{left:10px}
.navigation-landscape .nav-dropdown.nav-dropdown-left .submenu-indicator .submenu-indicator-chevron{-webkit-transform:rotate(135deg);transform:rotate(135deg)}
.nav-dropdown-horizontal{width:100%;left:0;background-color:#fdfdfd;border-top:solid 1px #f0f0f0}
.nav-dropdown-horizontal .nav-dropdown-horizontal{width:100%;top:100%;left:0}
.navigation-portrait .nav-dropdown-horizontal .nav-dropdown-horizontal{border-top:none}
.nav-dropdown-horizontal>li{width:auto;clear:none;position:static}
.navigation-portrait .nav-dropdown-horizontal>li{width:100%}
.nav-dropdown-horizontal>li>a{position:relative}
.nav-dropdown-horizontal .submenu-indicator{height:18px;top:11px;-webkit-transform:rotate(90deg);transform:rotate(90deg)}
.navigation-portrait .nav-dropdown-horizontal .submenu-indicator{height:42px;top:0;-webkit-transform:rotate(0deg);transform:rotate(0deg)}
.navigation-portrait .nav-dropdown-horizontal .submenu-indicator.submenu-indicator-up{-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}
.megamenu-panel{width:100%;padding:15px;display:none;position:absolute;font-size:14px;z-index:98;text-align:left;color:inherit;border-top:solid 1px #f0f0f0;background-color:#fdfdfd;box-shadow:0 10px 20px rgba(0,0,0,.075)}
.navigation-portrait .megamenu-panel{padding:25px;position:static;display:block}
.megamenu-panel [class*=container]{width:100%}
.megamenu-panel [class*="container"] [class*="col-"]{padding:0}
.megamenu-panel-half{width:50%}
.megamenu-panel-quarter{width:25%}
.navigation-portrait .megamenu-panel-half,.navigation-portrait .megamenu-panel-quarter{width:100%}
.megamenu-panel-row{width:100%}
.megamenu-panel-row:before,.megamenu-panel-row:after{display:table;content:"";line-height:0}
.megamenu-panel-row:after{clear:both}
.megamenu-panel-row [class*=col-]{display:block;min-height:20px;float:left;margin-left:3%}
.megamenu-panel-row [class*=col-]:first-child{margin-left:0}
.navigation-portrait .megamenu-panel-row [class*=col-]{float:none;display:block;width:100%!important;margin-left:0;margin-top:15px}
.navigation-portrait .megamenu-panel-row:first-child [class*=col-]:first-child{margin-top:0}
.megamenu-panel-row .col-1{width:5.583333333333%}
.megamenu-panel-row .col-2{width:14.166666666666%}
.megamenu-panel-row .col-3{width:22.75%}
.megamenu-panel-row .col-4{width:31.333333333333%}
.megamenu-panel-row .col-5{width:39.916666666667%}
.megamenu-panel-row .col-6{width:48.5%}
.megamenu-panel-row .col-7{width:57.083333333333%}
.megamenu-panel-row .col-8{width:65.666666666667%}
.megamenu-panel-row .col-9{width:74.25%}
.megamenu-panel-row .col-10{width:82.833333333334%}
.megamenu-panel-row .col-11{width:91.416666666667%}
.megamenu-panel-row .col-12{width:100%}
.megamenu-tabs{width:100%;float:left;display:block}
.megamenu-tabs-nav{width:20%;margin:0;padding:0;float:left;list-style:none}
.navigation-portrait .megamenu-tabs-nav{width:100%}
.megamenu-tabs-nav>li>a{width:100%;padding:10px 16px;float:left;font-size:13px;text-decoration:none;color:#343a40;border:solid 1px #eff0f2;outline:0;background-color:#fff}
.megamenu-tabs-nav>li.active a,.megamenu-tabs-nav>li:hover a{background-color:#f5f5f5}
.megamenu-tabs-pane{width:80%;min-height:30px;padding:20px;float:right;display:none;font-size:13px;color:#343a40;border:solid 1px #eff0f2;background-color:#fff}
.megamenu-tabs-pane.active{display:block}
.navigation-portrait .megamenu-tabs-pane{width:100%}
.megamenu-lists{width:100%;display:table}
.megamenu-list{width:100%;margin:0 0 15px;padding:0;display:inline-block;float:left;list-style:none}
.megamenu-list:last-child{margin:0;border:none}
.navigation-landscape .megamenu-list{margin:-15px 0;padding:20px 0;border-right:solid 1px #f0f0f0}
.navigation-landscape .megamenu-list:last-child{border:none}
.megamenu-list>li>a{width:100%;padding:10px 15px;display:inline-block;color:#343a40;text-decoration:none;font-size:13px;}
.megamenu-list>li>a:hover{background-color:#27ae60;color:#fff}
.megamenu-list>li.megamenu-list-title>a{font-size:12px;font-weight:600;color:#343a40}
.megamenu-list>li.megamenu-list-title>a:hover{background-color:transparent}
.navigation-landscape .list-col-2{width:50%}
.navigation-landscape .list-col-3{width:33%}
.navigation-landscape .list-col-4{width:25%}
.navigation-landscape .list-col-5{width:20%}
.nav-menu > li > a{color:#343a40;}
.nav-dropdown > li > a{color:#343a40;padding:10px 20px;border-bottom:1px solid #f6f6f6;}
.nav-dropdown > li > a:hover,.nav-dropdown > li > a:focus{color:#27ae60;}
.main_header_area.sticky{width:100%;position:fixed;top:0;left:0;background-color:#fff;z-index:9999;box-shadow:0 5px 30px rgba(0,0,0,0.1);}
.transparent-menu{position:absolute;width:100%;left:0;top:0;z-index:99;}
.navigation-portrait .nav-menu > li > a{width:100%;height:auto;padding:10px 10px 10px 30px;}
@media only screen and (min-width:320px) and (max-width:767px){
  .nav-dropdown > li > a,.megamenu-list > li > a{width:65%}
}
</style>

<header class="header_area" style="box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45); border-radius: 0 0 30px 30px; height: 120px; background-color: white;">
  <div class="main_header_area animated">
    <div class="container">
      <nav id="navigation1" style="padding-top: 20px;">
        <!-- Logo Area Start -->
        <div class="nav-header">
          <a class="nav-brand" href="<?= url(); ?>beranda/"><img src="<?= url(); ?>assets/img/pramukakabbogor.png" style="width: 175px;"></a>
          <div class="nav-toggle"></div>
        </div>
        <!-- Main Menus Wrapper -->
        <div class="nav-menus-wrapper">
          <ul class="nav-menu align-to-right">
            <li><a href="<?= url(); ?>beranda/" style="color: black;"><b><i class="fa fa-home"></i> BERANDA</b></a></li>
            <li><a href="#" style="color: black;"><b><i class="fa fa-address-book"></i> TENTANG</b></a>
              <ul class="nav-dropdown">
                <li><a href="<?= url(); ?>tentang/visimisi.php">VISI & MISI</a></li>
                <li><a href="<?= url(); ?>tentang/prestasi.php">PRESTASI</a></li>
                <li><a href="<?= url(); ?>tentang/potensitd.php">POTENSI T/D</a></li>
              </ul>
            </li>
            <li><a href="#" style="color: black;"><b><i class="fa fa-user-circle-o"></i> DKC</b></a>
              <ul class="nav-dropdown">
                <li><a href="<?= url(); ?>dkc/sambutan.php">SAMBUTAN KETUA DKC</a></li>
                <li><a href="<?= url(); ?>dkc/profil.php">PROFIL PENGURUS</a></li>
                <li><a href="<?= url(); ?>dkc/struktur.php">STRUKTUR ORGANISASI</a></li>
                <li><a href="<?= url(); ?>dkc/programkerja.php">PROGRAM KERJA</a></li>
                <li><a href="<?= url(); ?>dkc/korwil.php">KOORDINATOR WILAYAH</a></li>
              </ul>
            </li>
            <li><a href="<?= url(); ?>dkr/" style="color: black"><b><i class="fa fa-users"></i> DKR</b></a></li>
            <li><a href="#" style="color: black"><b><i class="fa fa-bookmark"></i> ATURAN & JUKLAK</b></a>
              <ul class="nav-dropdown">
                <li><a href="<?= url(); ?>aturan/gerakanpramuka.php">UU GERAKAN PRAMUKA</a></li>
                <li><a href="<?= url(); ?>aturan/adart.php">AD ART</a></li>
                <li><a href="<?= url(); ?>aturan/juklak.php">JUKLAK</a></li>
              </ul>
            </li>
            <li><a href="<?= url(); ?>fasilitas/" style="color: black"><b><i class="fa fa-book"></i> FASILITAS</b></a></li>
            <li><a href="<?= url(); ?>hubungikami/" style="color: black;"><b><i class="fa fa-phone"></i> HUBUNGI KAMI</b></a></li>
            <li><a href="<?= url(); ?>user/" style="color: black;"><b><i class="fa fa-user"></i> LOGIN</b></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

<br>
<br>

<script type="text/javascript">
  !(function(n, i, e, a) {
  (n.navigation = function(t, s) {
    var o = {
        responsive: !0,
        mobileBreakpoint: 991,
        showDuration: 200,
        hideDuration: 200,
        showDelayDuration: 0,
        hideDelayDuration: 0,
        submenuTrigger: "hover",
        effect: "fade",
        submenuIndicator: !0,
        submenuIndicatorTrigger: !1,
        hideSubWhenGoOut: !0,
        visibleSubmenusOnMobile: !1,
        fixed: !1,
        overlay: !0,
        overlayColor: "rgba(0, 0, 0, 0.5)",
        hidden: !1,
        hiddenOnMobile: !1,
        offCanvasSide: "left",
        offCanvasCloseButton: !0,
        animationOnShow: "",
        animationOnHide: "",
        onInit: function() {},
        onLandscape: function() {},
        onPortrait: function() {},
        onShowOffCanvas: function() {},
        onHideOffCanvas: function() {}
      },
      r = this,
      u = Number.MAX_VALUE,
      d = 1,
      l = "click.nav touchstart.nav",
      f = "mouseenter focusin",
      c = "mouseleave focusout";
    r.settings = {};
    var t = (n(t), t);
    n(t).find(".nav-search").length > 0 &&
      n(t)
        .find(".nav-search")
        .find("form")
        .prepend(
          "<span class='nav-search-close-button' tabindex='0'>&#10005;</span>"
        ),
      (r.init = function() {
        (r.settings = n.extend({}, o, s)),
          r.settings.offCanvasCloseButton &&
            n(t)
              .find(".nav-menus-wrapper")
              .prepend(
                "<span class='nav-menus-wrapper-close-button'>&#10005;</span>"
              ),
          "right" == r.settings.offCanvasSide &&
            n(t)
              .find(".nav-menus-wrapper")
              .addClass("nav-menus-wrapper-right"),
          r.settings.hidden &&
            (n(t).addClass("navigation-hidden"),
            (r.settings.mobileBreakpoint = 99999)),
          v(),
          r.settings.fixed && n(t).addClass("navigation-fixed"),
          n(t)
            .find(".nav-toggle")
            .on("click touchstart", function(n) {
              n.stopPropagation(),
                n.preventDefault(),
                r.showOffcanvas(),
                s !== a && r.callback("onShowOffCanvas");
            }),
          n(t)
            .find(".nav-menus-wrapper-close-button")
            .on("click touchstart", function() {
              r.hideOffcanvas(), s !== a && r.callback("onHideOffCanvas");
            }),
          n(t)
            .find(".nav-search-button, .nav-search-close-button")
            .on("click touchstart keydown", function(i) {
              i.stopPropagation(), i.preventDefault();
              var e = i.keyCode || i.which;
              "click" === i.type ||
              "touchstart" === i.type ||
              ("keydown" === i.type && 13 == e)
                ? r.toggleSearch()
                : 9 == e && n(i.target).blur();
            }),
          n(t).find(".megamenu-tabs").length > 0 && y(),
          n(i).resize(function() {
            r.initNavigationMode(C()), O(), r.settings.hiddenOnMobile && m();
          }),
          r.initNavigationMode(C()),
          r.settings.hiddenOnMobile && m(),
          s !== a && r.callback("onInit");
      });
    var h = function() {
        n(t)
          .find(".nav-submenu")
          .hide(0),
          n(t)
            .find("li")
            .removeClass("focus");
      },
      v = function() {
        n(t)
          .find("li")
          .each(function() {
            n(this).children(".nav-dropdown,.megamenu-panel").length > 0 &&
              (n(this)
                .children(".nav-dropdown,.megamenu-panel")
                .addClass("nav-submenu"),
              r.settings.submenuIndicator &&
                n(this)
                  .children("a")
                  .append(
                    "<span class='submenu-indicator'><span class='submenu-indicator-chevron'></span></span>"
                  ));
          });
      },
      m = function() {
        n(t).hasClass("navigation-portrait")
          ? n(t).addClass("navigation-hidden")
          : n(t).removeClass("navigation-hidden");
      };
    (r.showSubmenu = function(i, e) {
      C() > r.settings.mobileBreakpoint &&
        n(t)
          .find(".nav-search")
          .find("form")
          .fadeOut(),
        "fade" == e
          ? n(i)
              .children(".nav-submenu")
              .stop(!0, !0)
              .delay(r.settings.showDelayDuration)
              .fadeIn(r.settings.showDuration)
              .removeClass(r.settings.animationOnHide)
              .addClass(r.settings.animationOnShow)
          : n(i)
              .children(".nav-submenu")
              .stop(!0, !0)
              .delay(r.settings.showDelayDuration)
              .slideDown(r.settings.showDuration)
              .removeClass(r.settings.animationOnHide)
              .addClass(r.settings.animationOnShow),
        n(i).addClass("focus");
    }),
      (r.hideSubmenu = function(i, e) {
        "fade" == e
          ? n(i)
              .find(".nav-submenu")
              .stop(!0, !0)
              .delay(r.settings.hideDelayDuration)
              .fadeOut(r.settings.hideDuration)
              .removeClass(r.settings.animationOnShow)
              .addClass(r.settings.animationOnHide)
          : n(i)
              .find(".nav-submenu")
              .stop(!0, !0)
              .delay(r.settings.hideDelayDuration)
              .slideUp(r.settings.hideDuration)
              .removeClass(r.settings.animationOnShow)
              .addClass(r.settings.animationOnHide),
          n(i)
            .removeClass("focus")
            .find(".focus")
            .removeClass("focus");
      });
    var p = function() {
        n("body").addClass("no-scroll"),
          r.settings.overlay &&
            (n(t).append("<div class='nav-overlay-panel'></div>"),
            n(t)
              .find(".nav-overlay-panel")
              .css("background-color", r.settings.overlayColor)
              .fadeIn(300)
              .on("click touchstart", function(n) {
                r.hideOffcanvas();
              }));
      },
      g = function() {
        n("body").removeClass("no-scroll"),
          r.settings.overlay &&
            n(t)
              .find(".nav-overlay-panel")
              .fadeOut(400, function() {
                n(this).remove();
              });
      };
    (r.showOffcanvas = function() {
      p(),
        "left" == r.settings.offCanvasSide
          ? n(t)
              .find(".nav-menus-wrapper")
              .css("transition-property", "left")
              .addClass("nav-menus-wrapper-open")
          : n(t)
              .find(".nav-menus-wrapper")
              .css("transition-property", "right")
              .addClass("nav-menus-wrapper-open");
    }),
      (r.hideOffcanvas = function() {
        n(t)
          .find(".nav-menus-wrapper")
          .removeClass("nav-menus-wrapper-open")
          .on(
            "webkitTransitionEnd moztransitionend transitionend oTransitionEnd",
            function() {
              n(t)
                .find(".nav-menus-wrapper")
                .css("transition-property", "none")
                .off();
            }
          ),
          g();
      }),
      (r.toggleOffcanvas = function() {
        C() <= r.settings.mobileBreakpoint &&
          (n(t)
            .find(".nav-menus-wrapper")
            .hasClass("nav-menus-wrapper-open")
            ? (r.hideOffcanvas(), s !== a && r.callback("onHideOffCanvas"))
            : (r.showOffcanvas(), s !== a && r.callback("onShowOffCanvas")));
      }),
      (r.toggleSearch = function() {
        "none" ==
        n(t)
          .find(".nav-search")
          .find("form")
          .css("display")
          ? (n(t)
              .find(".nav-search")
              .find("form")
              .fadeIn(200),
            n(t)
              .find(".nav-search")
              .find("input")
              .focus())
          : (n(t)
              .find(".nav-search")
              .find("form")
              .fadeOut(200),
            n(t)
              .find(".nav-search")
              .find("input")
              .blur());
      }),
      (r.initNavigationMode = function(i) {
        r.settings.responsive
          ? (i <= r.settings.mobileBreakpoint &&
              u > r.settings.mobileBreakpoint &&
              (n(t)
                .addClass("navigation-portrait")
                .removeClass("navigation-landscape"),
              S(),
              s !== a && r.callback("onPortrait")),
            i > r.settings.mobileBreakpoint &&
              d <= r.settings.mobileBreakpoint &&
              (n(t)
                .addClass("navigation-landscape")
                .removeClass("navigation-portrait"),
              k(),
              g(),
              r.hideOffcanvas(),
              s !== a && r.callback("onLandscape")),
            (u = i),
            (d = i))
          : (n(t).addClass("navigation-landscape"),
            k(),
            s !== a && r.callback("onLandscape"));
      });
    var b = function() {
        n("html").on("click.body touchstart.body", function(i) {
          0 === n(i.target).closest(".navigation").length &&
            (n(t)
              .find(".nav-submenu")
              .fadeOut(),
            n(t)
              .find(".focus")
              .removeClass("focus"),
            n(t)
              .find(".nav-search")
              .find("form")
              .fadeOut());
        });
      },
      C = function() {
        return (
          i.innerWidth || e.documentElement.clientWidth || e.body.clientWidth
        );
      },
      w = function() {
        n(t)
          .find(".nav-menu")
          .find("li, a")
          .off(l)
          .off(f)
          .off(c);
      },
      O = function() {
        if (C() > r.settings.mobileBreakpoint) {
          var i = n(t).outerWidth(!0);
          n(t)
            .find(".nav-menu")
            .children("li")
            .children(".nav-submenu")
            .each(function() {
              n(this)
                .parent()
                .position().left +
                n(this).outerWidth() >
              i
                ? n(this).css("right", 0)
                : n(this).css("right", "auto");
            });
        }
      },
      y = function() {
        function i(i) {
          var e = n(i)
              .children(".megamenu-tabs-nav")
              .children("li"),
            a = n(i).children(".megamenu-tabs-pane");
          n(e).on("click.tabs touchstart.tabs", function(i) {
            i.stopPropagation(),
              i.preventDefault(),
              n(e).removeClass("active"),
              n(this).addClass("active"),
              n(a)
                .hide(0)
                .removeClass("active"),
              n(a[n(this).index()])
                .show(0)
                .addClass("active");
          });
        }
        if (n(t).find(".megamenu-tabs").length > 0)
          for (var e = n(t).find(".megamenu-tabs"), a = 0; a < e.length; a++)
            i(e[a]);
      },
      k = function() {
        w(),
          h(),
          navigator.userAgent.match(/Mobi/i) ||
          navigator.maxTouchPoints > 0 ||
          "click" == r.settings.submenuTrigger
            ? n(t)
                .find(".nav-menu, .nav-dropdown")
                .children("li")
                .children("a")
                .on(l, function(e) {
                  if (
                    (r.hideSubmenu(
                      n(this)
                        .parent("li")
                        .siblings("li"),
                      r.settings.effect
                    ),
                    n(this)
                      .closest(".nav-menu")
                      .siblings(".nav-menu")
                      .find(".nav-submenu")
                      .fadeOut(r.settings.hideDuration),
                    n(this).siblings(".nav-submenu").length > 0)
                  ) {
                    if (
                      (e.stopPropagation(),
                      e.preventDefault(),
                      "none" ==
                        n(this)
                          .siblings(".nav-submenu")
                          .css("display"))
                    )
                      return (
                        r.showSubmenu(n(this).parent("li"), r.settings.effect),
                        O(),
                        !1
                      );
                    if (
                      (r.hideSubmenu(n(this).parent("li"), r.settings.effect),
                      "_blank" === n(this).attr("target") ||
                        "blank" === n(this).attr("target"))
                    )
                      i.open(n(this).attr("href"));
                    else {
                      if (
                        "#" === n(this).attr("href") ||
                        "" === n(this).attr("href") ||
                        "javascript:void(0)" === n(this).attr("href")
                      )
                        return !1;
                      i.location.href = n(this).attr("href");
                    }
                  }
                })
            : n(t)
                .find(".nav-menu")
                .find("li")
                .on(f, function() {
                  r.showSubmenu(this, r.settings.effect), O();
                })
                .on(c, function() {
                  r.hideSubmenu(this, r.settings.effect);
                }),
          r.settings.hideSubWhenGoOut && b();
      },
      S = function() {
        w(),
          h(),
          r.settings.visibleSubmenusOnMobile
            ? n(t)
                .find(".nav-submenu")
                .show(0)
            : (n(t)
                .find(".submenu-indicator")
                .removeClass("submenu-indicator-up"),
              r.settings.submenuIndicator && r.settings.submenuIndicatorTrigger
                ? n(t)
                    .find(".submenu-indicator")
                    .on(l, function(i) {
                      return (
                        i.stopPropagation(),
                        i.preventDefault(),
                        r.hideSubmenu(
                          n(this)
                            .parent("a")
                            .parent("li")
                            .siblings("li"),
                          "slide"
                        ),
                        r.hideSubmenu(
                          n(this)
                            .closest(".nav-menu")
                            .siblings(".nav-menu")
                            .children("li"),
                          "slide"
                        ),
                        "none" ==
                        n(this)
                          .parent("a")
                          .siblings(".nav-submenu")
                          .css("display")
                          ? (n(this).addClass("submenu-indicator-up"),
                            n(this)
                              .parent("a")
                              .parent("li")
                              .siblings("li")
                              .find(".submenu-indicator")
                              .removeClass("submenu-indicator-up"),
                            n(this)
                              .closest(".nav-menu")
                              .siblings(".nav-menu")
                              .find(".submenu-indicator")
                              .removeClass("submenu-indicator-up"),
                            r.showSubmenu(
                              n(this)
                                .parent("a")
                                .parent("li"),
                              "slide"
                            ),
                            !1)
                          : (n(this)
                              .parent("a")
                              .parent("li")
                              .find(".submenu-indicator")
                              .removeClass("submenu-indicator-up"),
                            void r.hideSubmenu(
                              n(this)
                                .parent("a")
                                .parent("li"),
                              "slide"
                            ))
                      );
                    })
                : n(t)
                    .find(".nav-menu, .nav-dropdown")
                    .children("li")
                    .children("a")
                    .on(l, function(e) {
                      if (
                        (e.stopPropagation(),
                        e.preventDefault(),
                        r.hideSubmenu(
                          n(this)
                            .parent("li")
                            .siblings("li"),
                          r.settings.effect
                        ),
                        r.hideSubmenu(
                          n(this)
                            .closest(".nav-menu")
                            .siblings(".nav-menu")
                            .children("li"),
                          "slide"
                        ),
                        "none" ==
                          n(this)
                            .siblings(".nav-submenu")
                            .css("display"))
                      )
                        return (
                          n(this)
                            .children(".submenu-indicator")
                            .addClass("submenu-indicator-up"),
                          n(this)
                            .parent("li")
                            .siblings("li")
                            .find(".submenu-indicator")
                            .removeClass("submenu-indicator-up"),
                          n(this)
                            .closest(".nav-menu")
                            .siblings(".nav-menu")
                            .find(".submenu-indicator")
                            .removeClass("submenu-indicator-up"),
                          r.showSubmenu(n(this).parent("li"), "slide"),
                          !1
                        );
                      if (
                        (n(this)
                          .parent("li")
                          .find(".submenu-indicator")
                          .removeClass("submenu-indicator-up"),
                        r.hideSubmenu(n(this).parent("li"), "slide"),
                        "_blank" === n(this).attr("target") ||
                          "blank" === n(this).attr("target"))
                      )
                        i.open(n(this).attr("href"));
                      else {
                        if (
                          "#" === n(this).attr("href") ||
                          "" === n(this).attr("href") ||
                          "javascript:void(0)" === n(this).attr("href")
                        )
                          return !1;
                        i.location.href = n(this).attr("href");
                      }
                    }));
      };
    (r.callback = function(n) {
      s[n] !== a && s[n].call(t);
    }),
      r.init();
  }),
    (n.fn.navigation = function(i) {
      return this.each(function() {
        if (a === n(this).data("navigation")) {
          var e = new n.navigation(this, i);
          n(this).data("navigation", e);
        }
      });
    });
})(jQuery, window, document);



(function ($) {
    'use strict';

    var $window = $(window);

    if ($.fn.navigation) {
        $("#navigation1").navigation();
        $("#always-hidden-nav").navigation({
            hidden: true
        });
    }

            $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

})(jQuery);
</script>

<script>
  document.getElementById("url").innerHTML = "//localhost/dkk/"
</script>