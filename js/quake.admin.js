//display mediauploader
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-button').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#profile-picture').val(attachment.url);
            $('#profile-picture-preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove-picture' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#profile-picture').val('');
            $('.quake-general-form').submit();
        }
        return;
    });
});

//display mediauploader main background
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-main-background').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#main-background-picture').val(attachment.url);
            $('#main-background-picture-preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove-main-background' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#main-background-picture').val('');
            $('.general_form').submit();
        }
        return;
    });
});


//display mediauploader logo
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-logo').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#quake_logo').val(attachment.url);
            $('#quake_logo_preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove_logo' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#quake_logo').val('');
            $('.general_form').submit();
        }
        return;
    });
});

//display mediauploader header background
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-header-background').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#header-background-picture').val(attachment.url);
            $('#header-background-picture-preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove-header-background' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#header-background-picture').val('');
            $('.general_form').submit();
        }
        return;
    });
});

//page1
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-page1-background').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#page1-background-picture').val(attachment.url);
            $('#page1-background-picture-preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove-page1-background' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#page1-background-picture').val('');
            $('.general_form').submit();
        }
        return;
    });
});

//display mediauploader submenu background
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-submenu-background').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#submenu-background-picture').val(attachment.url);
            $('#submenu-background-picture-preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove-submenu-background' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#submenu-background-picture').val('');
            $('.general_form').submit();
        }
        return;
    });
});

//display mediauploader footer background
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-footer-background-src').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#footer-background-picture').val(attachment.url);
            $('#footer-background-picture-preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove-footer-background' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#footer-background-picture').val('');
            $('.general_form').submit();
        }
        return;
    });
});
//display mediauploader footer logo
jQuery(document).ready( function($){
    var mediaUploader;
    $('#upload-footer-logo').on('click', function(e) {
        e.preventDefault();
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose a Profile Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#quake_footer_logo').val(attachment.url);
            $('#quake_footer_logo_preview').css('background-image', 'url(' + attachment.url +')');
        });
        mediaUploader.open();
    });
    $( '#remove_footer_logo' ).on('click', function(e){
        e.preventDefault();
        var answer = confirm("Are you sure you want to remove your profile picture?");
        if( answer == true ){
           $('#quake_footer_logo').val('');
            $('.general_form').submit();
        }
        return;
    });
});
(function( $ ) {
    $(function() {
         
        // Add Color Picker to all inputs that have 'color-field' class
        $( '.cpa-color-picker' ).wpColorPicker();
         
    });
})( jQuery );