

(function() {
    tinymce.create('tinymce.plugins.paralax', {
        init : function(ed, url) {
            ed.addButton('paralax', {
                title : 'Paralax',
                image : url+'/images/paralax.png',
                onclick : function() {
                     ed.selection.setContent('[paralax img1="" img2="" img3="" speed1="" speed="2" speed="3"]' + ed.selection.getContent() + '[/paralax]');

                }
            });


            /* add new button */

        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('paralax', tinymce.plugins.paralax);
})();