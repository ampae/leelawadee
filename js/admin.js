


jQuery(function($) {

var orig_send_to_editor = window.send_to_editor;

 $('.qt-theme-media-upload-button').click(function() {
     formfield = $(this).prev('input');
         tb_show('Add Media', 'media-upload.php?type=file&amp;TB_iframe=true');

         window.send_to_editor = function(html) {
             imgurl = $('img',html).attr('src');
             if($(imgurl).length == 0) {
                 imgurl = $(html).attr('href'); // We do this to get Links like PDF's
             }
             formfield.val(imgurl);
             tb_remove();
                    $('#'+formfield.attr('name')).val(imgurl);


             window.send_to_editor = orig_send_to_editor;
         }

         return false;
     });
});
