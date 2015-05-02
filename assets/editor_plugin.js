(function() {  
    tinymce.create('tinymce.plugins.rowfluid', {  
        init : function(ed, url) {  
            ed.addButton('rowfluid', {  
                title : 'Add a Grid Row',  
                image : url+'/row.png',  
                onclick : function() {  
                     ed.selection.setContent('[pure-g]' + ed.selection.getContent() + '[/pure-g]');  

                }  
            });
			ed.addButton('column', {  
                title : 'Add a Column',  
                image : url+'/column.png',  
                onclick : function() {  
                     ed.selection.setContent('[col xsmall="" small="" medium="" large="" class=""]' + ed.selection.getContent() + '[/col]');  

                }  
            }); 

			
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('rowfluid', tinymce.plugins.rowfluid);  
})();