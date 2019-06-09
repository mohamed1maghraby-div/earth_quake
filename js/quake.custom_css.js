jQuery(document).ready(function($){
	$("#generalinfoad").keydown(function(){
		var generalinfoad = $("#generalinfoad").val();
		$(".genralinfo1").html(generalinfoad);
	});
	$("#generalinfocity").keydown(function(){
		var generalinfoad = $("#generalinfocity").val();
		$(".genralinfo2").html(generalinfoad);
	});
	$("#generalinfocoun").keydown(function(){
		var generalinfoad = $("#generalinfocoun").val();
		$(".genralinfo3").html(generalinfoad);
	});
	$("#generalinfoemail").keydown(function(){
		var generalinfoad = $("#generalinfoemail").val();
		$(".genralinfo4").html(generalinfoad);
	});
	$("#generalinfophone").keydown(function(){
		var generalinfoad = $("#generalinfophone").val();
		$(".genralinfo5").html(generalinfoad);
	});
$("#generalinfofax").keydown(function(){
		var generalinfoad = $("#generalinfofax").val();
		$(".genralinfo6").html(generalinfoad);
	});
});
/*
 ===============   
    ace data
 ===============   
*/
jQuery(document).ready(function($){
var editor = ace.edit('customCss');
var textarea = $('textarea[name="quake_css"]');
editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
    });
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/css");
});


jQuery(document).ready(function($){
var editor = ace.edit('customHtml');
var textarea = $('textarea[name="quake_html"]');
editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
    });
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/html");
});


jQuery(document).ready(function($){
var editor = ace.edit('customJs');
var textarea = $('textarea[name="quake_js"]');
editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
    });
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/javascript");
});

/*
 ============================== 
    fade textarea html css js
 ==============================  
*/
jQuery(document).ready(function($){
    $(".custom_html h1").on("click", function(){
        $(this).next().slideToggle(1000);
        $('.quake_change_1').toggleClass('glyphicon-plus');
        $('.quake_change_1').toggleClass('glyphicon-minus');
    });
    $(".custom_css h1").on("click", function(){
        $(this).next().slideToggle(1000);
        $('.quake_change_2').toggleClass('glyphicon-minus');
        $('.quake_change_2').toggleClass('glyphicon-plus');
    });
    $(".custom_js h1").on("click", function(){
        $(this).next().slideToggle(1000);
        $('.quake_change_3').toggleClass('glyphicon-minus');
        $('.quake_change_3').toggleClass('glyphicon-plus');
    });
    $(".iris-picker-inner ").on("mouseup", function(){
    var medo = $('#logo_color_preview_send').val();
    $('#logo_color_preview').css('background', medo);
        
        });
    $(".iris-picker-inner ").on("mouseup", function(){
    var medo1 = $('#main_color_preview_send_general').val();
    $('#main_color_preview_general').css('background', medo1 );
        });
               var beforeclick = $('#width_scroll_bar_sender').val();
                $('#width_scroll_bar_reciver').val(beforeclick);
        $(".width_scroll_bar").on("mouseup", function(){
               var afterclick = $('#width_scroll_bar_sender').val();
                    $('#width_scroll_bar_reciver').val(afterclick);
        });
    
});


