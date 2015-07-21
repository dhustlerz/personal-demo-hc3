jQuery(document).ready(function(){

    /* PROGGRESS START */
    jQuery.mpb("show",{value: [0,50],speed: 5});
    /* END PROGGRESS START */

    var html_click_avail = true;

    jQuery("html").on("click", function(){
        if(html_click_avail)
            jQuery(".x-navigation-horizontal li,.x-navigation-minimized li").removeClass('active');
    });

    jQuery(".x-navigation-horizontal .panel").on("click",function(e){
        e.stopPropagation();
    });


    x_navigation();
});



jQuery(window).resize(function(){
    x_navigation_onresize();
    page_content_onresize();
});
 function getcontent() {

        jQuery.ajax({
             type: "GET",
             url: 'includes/content-diabetes.inc.php',
             //data: "id=" + id, // appears as $_GET['id'] @ your backend side
             success: function(data) {
                   // data is ur summary
                   //$( "div" ).remove( ".page-content" );
                   if(googlecharts() == true) {
                    alert('chart loaded');
                   }
                   else
                   {
                    alert ('error');
                   }
                  jQuery('.page-content').html(data);

             }
        });


 }

function onload(){
    x_navigation_onresize();
    page_content_onresize();
}

function page_content_onresize(){
    jQuery(".page-content,.content-frame-body,.content-frame-right,.content-frame-left").css("width","").css("height","");

    var content_minus = 0;
    content_minus = (jQuery(".page-container-boxed").length > 0) ? 40 : content_minus;
    content_minus += (jQuery(".page-navigation-top-fixed").length > 0) ? 50 : 0;

    var content = jQuery(".page-content");
    var sidebar = jQuery(".page-sidebar");

    if(content.height() < jQuery(document).height() - content_minus){
        content.height(jQuery(document).height() - content_minus);
    }

    if(sidebar.height() > content.height()){
        content.height(sidebar.height());
    }

    if(jQuery(window).width() > 1024){

        if(jQuery(".page-sidebar").hasClass("scroll")){
            if(jQuery("body").hasClass("page-container-boxed")){
                var doc_height = jQuery(document).height() - 40;
            }else{
                var doc_height = jQuery(window).height();
            }
           jQuery(".page-sidebar").height(doc_height);

       }

        if(jQuery(".content-frame-body").height() < jQuery(document).height()-162){
            jQuery(".content-frame-body,.content-frame-right,.content-frame-left").height(jQuery(document).height()-162);
        }else{
            jQuery(".content-frame-right,.content-frame-left").height(jQuery(".content-frame-body").height());
        }

        jQuery(".content-frame-left").show();
        jQuery(".content-frame-right").show();
    }else{
        jQuery(".content-frame-body").height(jQuery(".content-frame").height()-80);

        if(jQuery(".page-sidebar").hasClass("scroll"))
           jQuery(".page-sidebar").css("height","");
    }

    if(jQuery(window).width() < 1200){
        if(jQuery("body").hasClass("page-container-boxed")){
            jQuery("body").removeClass("page-container-boxed").data("boxed","1");
        }
    }else{
        if(jQuery("body").data("boxed") === "1"){
            jQuery("body").addClass("page-container-boxed").data("boxed","");
        }
    }
}

/* PANEL FUNCTIONS */
// function panel_fullscreen(panel){

//     if(panel.hasClass("panel-fullscreened")){
//         panel.removeClass("panel-fullscreened").unwrap();
//         panel.find(".panel-body,.chart-holder").css("height","");
//         panel.find(".panel-fullscreen .fa").removeClass("fa-compress").addClass("fa-expand");

//         jQuery(window).resize();
//     }else{
//         var head    = panel.find(".panel-heading");
//         var body    = panel.find(".panel-body");
//         var footer  = panel.find(".panel-footer");
//         var hplus   = 30;

//         if(body.hasClass("panel-body-table") || body.hasClass("padding-0")){
//             hplus = 0;
//         }
//         if(head.length > 0){
//             hplus += head.height()+21;
//         }
//         if(footer.length > 0){
//             hplus += footer.height()+21;
//         }

//         panel.find(".panel-body,.chart-holder").height(jQuery(window).height() - hplus);


//         panel.addClass("panel-fullscreened").wrap('<div class="panel-fullscreen-wrap"></div>');
//         panel.find(".panel-fullscreen .fa").removeClass("fa-expand").addClass("fa-compress");

//         jQuery(window).resize();
//     }
// }

// function panel_collapse(panel,action,callback){

//     if(panel.hasClass("panel-toggled")){
//         panel.removeClass("panel-toggled");

//         panel.find(".panel-collapse .fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");

//         if(action && action === "shown" && typeof callback === "function")
//             callback();

//         onload();

//     }else{
//         panel.addClass("panel-toggled");

//         panel.find(".panel-collapse .fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");

//         if(action && action === "hidden" && typeof callback === "function")
//             callback();

//         onload();

//     }
// }
// function panel_refresh(panel,action,callback){
//     if(!panel.hasClass("panel-refreshing")){
//         panel.append('<div class="panel-refresh-layer"><img src="img/loaders/default.gif"/></div>');
//         panel.find(".panel-refresh-layer").width(panel.width()).height(panel.height());
//         panel.addClass("panel-refreshing");

//         if(action && action === "shown" && typeof callback === "function")
//             callback();
//     }else{
//         panel.find(".panel-refresh-layer").remove();
//         panel.removeClass("panel-refreshing");

//         if(action && action === "hidden" && typeof callback === "function")
//             callback();
//     }
//     onload();
// }
// function panel_remove(panel,action,callback){
//     if(action && action === "before" && typeof callback === "function")
//         callback();

//     panel.animate({'opacity':0},200,function(){
//         panel.parent(".panel-fullscreen-wrap").remove();
//         jQuery(this).remove();
//         if(action && action === "after" && typeof callback === "function")
//             callback();


//         onload();
//     });
// }
/* EOF PANEL FUNCTIONS */

/* X-NAVIGATION CONTROL FUNCTIONS */
function x_navigation_onresize(){

    var inner_port = window.innerWidth || jQuery(document).width();

    if(inner_port < 1025){
        jQuery(".page-sidebar .x-navigation").removeClass("x-navigation-minimized");
        jQuery(".page-container").removeClass("page-container-wide");
        jQuery(".page-sidebar .x-navigation li.active").removeClass("active");


        jQuery(".x-navigation-horizontal").each(function(){
            if(!jQuery(this).hasClass("x-navigation-panel")){
                jQuery(".x-navigation-horizontal").addClass("x-navigation-h-holder").removeClass("x-navigation-horizontal");
            }
        });


    }else{
        if(jQuery(".page-navigation-toggled").length > 0){
            x_navigation_minimize("close");
        }

        jQuery(".x-navigation-h-holder").addClass("x-navigation-horizontal").removeClass("x-navigation-h-holder");
    }

}

function x_navigation_minimize(action){

    if(action == 'open'){
        jQuery(".page-container").removeClass("page-container-wide");
        jQuery(".page-sidebar .x-navigation").removeClass("x-navigation-minimized");
        jQuery(".x-navigation-minimize").find(".fa").removeClass("fa-indent").addClass("fa-dedent");
        jQuery(".page-sidebar.scroll").mCustomScrollbar("update");
    }

    if(action == 'close'){
        jQuery(".page-container").addClass("page-container-wide");
        jQuery(".page-sidebar .x-navigation").addClass("x-navigation-minimized");
        jQuery(".x-navigation-minimize").find(".fa").removeClass("fa-dedent").addClass("fa-indent");
        jQuery(".page-sidebar.scroll").mCustomScrollbar("disable",true);
    }

    jQuery(".x-navigation li.active").removeClass("active");

}

function x_navigation(){

    jQuery(".x-navigation-control").click(function(){
        jQuery(this).parents(".x-navigation").toggleClass("x-navigation-open");

        onresize();

        return false;
    });

    if(jQuery(".page-navigation-toggled").length > 0){
        x_navigation_minimize("close");
    }

    jQuery(".x-navigation-minimize").click(function(){

        if(jQuery(".page-sidebar .x-navigation").hasClass("x-navigation-minimized")){
            jQuery(".page-container").removeClass("page-navigation-toggled");
            x_navigation_minimize("open");
        }else{
            jQuery(".page-container").addClass("page-navigation-toggled");
            x_navigation_minimize("close");
        }

        onresize();

        return false;
    });

    jQuery(".x-navigation  li > a").click(function(){

        var li = jQuery(this).parent('li');
        var ul = li.parent("ul");

        ul.find(" > li").not(li).removeClass("active");

    });

    jQuery(".x-navigation li").click(function(event){
        event.stopPropagation();

        var li = jQuery(this);

            if(li.children("ul").length > 0 || li.children(".panel").length > 0 || jQuery(this).hasClass("xn-profile") > 0){
                if(li.hasClass("active")){
                    li.removeClass("active");
                    li.find("li.active").removeClass("active");
                }else
                    li.addClass("active");

                onresize();

                if(jQuery(this).hasClass("xn-profile") > 0)
                    return true;
                else
                    return false;
            }
    });

    /* XN-SEARCH */
    jQuery(".xn-search").on("click",function(){
        jQuery(this).find("input").focus();
    })
    /* END XN-SEARCH */

}
/* EOF X-NAVIGATION CONTROL FUNCTIONS */

/* PAGE ON RESIZE WITH TIMEOUT */
function onresize(timeout){
    timeout = timeout ? timeout : 200;

    setTimeout(function(){
        page_content_onresize();
    },timeout);
}
/* EOF PAGE ON RESIZE WITH TIMEOUT */



/* NEW OBJECT(GET SIZE OF ARRAY) */
Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};







