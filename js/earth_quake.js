$(".navbar-fixed").css("width","80%");
$(document).ready(function(){function a(b){var c=$(b).find(".item.active").find(".next-image-preview").data("image"),a=$(b).find(".item.active").find(".prev-image-preview").data("image");$(b).find(".right.carousel-control").find(".thumbnail-container").css({"background-image":"url("+c+")"});$(b).find(".left.carousel-control").find(".thumbnail-container").css({"background-image":"url("+a+")"})}function k(){$('[data-toggle="tooltip"]').tooltip();$('[data-toggle="popover"]').popover();var b=$("article:not(.reveal)"),
c=0;setInterval(function(){if(c>=b.length)return!1;$(b[c]).addClass("reveal").find(".quake-carousel-thumb").carousel();c++},200)}$(".login").mouseenter(function(){$(".total_price_play").css("display","block")});$(".login").mouseleave(function(){$(".total_price_play").css("display","none")});$(".total_price").mouseenter(function(){$(".total_price_label").css("display","block")});$(".total_price").mouseleave(function(){$(".total_price_label").css("display","none")});$(window).scroll(function(){50>$(window).scrollTop()&&
($(".main_manu").removeClass("navbar-fixed"),$(".main_manu").removeClass("main_manu_navbar_fixed"),$(".right_manu").removeClass("right_manu_fiexed"));50<$(window).scrollTop()&&($(".main_manu").addClass("navbar-fixed"),$(".main_manu").addClass("main_manu_navbar_fixed"),$(".right_manu").addClass("right_manu_fiexed"))});k();var f=0;$(document).on("click",".quake-carousel-thumb",function(){var b=$("#"+$(this).attr("id"));$(b).on("slid.bs.carousel",function(){a(b)})});$(document).on("mouseenter",".quake-carousel-thumb",
function(){var b=$("#"+$(this).attr("id"));a(b)});$(document).on("click",".quake-load-more:not(.loading)",function(){var b=$(this),c=$(this).data("page"),a=c+1,g=b.data("url"),d=b.data("prev"),h=b.data("archive"),f=jQuery(".search_form_resoule form").find('input[name="s"]').val();"undefined"===typeof d&&(d=0);"undefined"===typeof h&&(h=0);b.addClass("loading").find(".text").slideUp(320);b.find(".quake-icon").addClass("spin");$.ajax({url:g,type:"post",data:{page:c,prev:d,archive:h,search:f,action:"quake_load_more"},
error:function(b){console.log(b)},success:function(e){0==e?($(".quake-posts-container").append('<h3 class="load_more_center">You rached the end ot the line!</h3><p class="load_more_center">No more posts to load.</p>'),$(".load_more_buttom").slideUp(320)):setTimeout(function(){1==d?($(".quake-posts-container").prepend(e),a=c-1):$(".quake-posts-container").append(e);1==a?$(".load_more_top").slideUp(320):(b.data("page",a),b.removeClass("loading").find(".text").slideDown(320),b.find(".quake-icon").removeClass("spin"));
k()},1E3)}})});$(window).scroll(function(){var b=$(window).scrollTop();Math.abs(b-f)>.1*$(window).height()&&(f=b,$(".page-limit").each(function(b){var a=$(this);b=$(window).scrollTop();var c=$(window).height(),d=$(a).offset().top;a=$(a).height();if(d+a-.25*a>b&&d<b+.5*c)return b=$(this).attr("data-page"),history.replaceState(null,null,b),!1}))});$("#quakeContactForm").on("submit",function(b){b.preventDefault();$(".has-error").removeClass("has-error");$(".js-show-feedback").removeClass("js-show-feedback");
var a=$(this);b=a.find("#name").val();var e=a.find("#email").val(),g=a.find("#message").val(),d=a.data("url");""===b?$("#name").parent(".form-group").addClass("has-error"):""===e?$("#email").parent(".form-group").addClass("has-error"):""===g?$("#message").parent(".form-group").addClass("has-error"):(a.find("input, button, textarea").attr("disabled","disabled"),$(".js-form-submission").addClass("js-show-feedback"),$.ajax({url:d,type:"post",data:{name:b,email:e,message:g,action:"quake_save_user_contact_form"},
error:function(b){$(".js-form-submission").removeClass("js-show-feedback");$(".js-form-error").addClass("js-show-feedback");a.find("input, button, textarea").removeAttr("disabled")},success:function(b){0==b?setTimeout(function(){$(".js-form-submission").removeClass("js-show-feedback");$(".js-form-error").addClass("js-show-feedback");a.find("input, button, textarea").removeAttr("disabled")},1E3):setTimeout(function(){$(".js-form-submission").removeClass("js-show-feedback");$(".js-form-success").addClass("js-show-feedback");
a.find("input, button, textarea").removeAttr("disabled").val("")},1E3)}}))});$("#quakeEmailForm").on("submit",function(b){b.preventDefault();$(".has-error").removeClass("has-error");$(".js-show-feedback").removeClass("js-show-feedback");var a=$(this);b=a.find("#emailList").val();var e=a.data("url");""===b?$("#emailList").parent(".form-group").addClass("has-error"):(a.find("input, button").attr("disabled","disabled"),$(".js-form-submission").addClass("js-show-feedback"),$.ajax({url:e,type:"post",data:{email:b,
action:"quake_save_user_email_form"},error:function(b){$(".js-form-submission").removeClass("js-show-feedback");$(".js-form-error").addClass("js-show-feedback");a.find("input, button").removeAttr("disabled")},success:function(b){0==b?setTimeout(function(){$(".js-form-submission").removeClass("js-show-feedback");$(".js-form-error").addClass("js-show-feedback");a.find("input, button").removeAttr("disabled")},1E3):setTimeout(function(){$(".js-form-submission").removeClass("js-show-feedback");$(".js-form-success").addClass("js-show-feedback");
a.find("input, button").removeAttr("disabled").val("")},1E3)}}))})});jQuery(document).ready(function(a){a(".js-togglesidebar").on("click",function(){a(".varical_menu_icon").fadeOut(320,function(){a("#vm_open").css("top",630);a("#mySidenav").css("top",0);a("#main").animate({marginLeft:"20%"},1E3,function(){a("#mySidenav").css("overflow-y","scroll");a("html").css("overflow-y","hidden");a("#vartical_menu_fade_in").animate({left:"0"},320)})})})});
jQuery(document).ready(function(a){a(".closebtn").on("click",function(){a("#vartical_menu_fade_in").animate({left:"-3000"},320,function(){a("#mySidenav").css("top",-635);a("#vm_open").css("top",0);a("#main").animate({marginLeft:0},1E3,function(){a(".varical_menu_icon").delay(400).fadeIn(320);a("#mySidenav").css("overflow-y","hidden");a("html").css("overflow-y","scroll")})})});a(".quake_query_button").click(function(){a(".quake-sidebar").toggleClass("quake_sidebar_dispaly")})});
$(".quake-bars-icon").click(function(){$(".quake_main_manu_query").toggleClass("quake_main_manu_query_display");$(".main_manu").toggleClass("main_manu_query_display")});