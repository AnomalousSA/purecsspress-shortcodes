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
                title : 'Add a Grid Unit',  
                image : url+'/column.png',  
                onclick : function() {  
                     ed.selection.setContent('[pure-u standard="1" small="" medium="" large="" xlarge="" class=""]' + ed.selection.getContent() + '[/pure-u]');  

                }  
            }); 
            
            ed.addButton('thebutton', {  
                title : 'Add a button',  
                image : url+'/button.png',  
                onclick : function() {  
                     ed.selection.setContent('[button href="" class=""]' + ed.selection.getContent() + '[/button]');  

                }  
            }); 

			
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('rowfluid', tinymce.plugins.rowfluid);  
})();