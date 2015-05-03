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
            
            ed.addButton('table', {  
                title : 'Add a table',  
                image : url+'/table.png',  
                onclick : function() {  
                     ed.selection.setContent('[table class=""]<br>\n\
 [thead]<br>\n\
[theadcol]Header 1[/theadcol]\n\
[theadcol]Header 2[/theadcol]\n\
[theadcol]Header 3[/theadcol]<br>\n\
[/thead]<br>\n\
[tbody]<br>\n\
[tbodyrow]\n\
[tbodycol]Content1[/tbodycol]\n\
[tbodycol]Content2[/tbodycol]\n\
[tbodycol]Content3[/tbodycol]\n\
[/tbodyrow]<br>\n\
[/tbody]<br>\n\
[/table]');  

                }  
            }); 
            ed.addButton('thead', {  
                title : 'Add a table head',  
                image : url+'/table.png',  
                onclick : function() {  
                     ed.selection.setContent('[thead class=""]' + ed.selection.getContent() + '[/thead]');  

                }  
            }); 
			
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('rowfluid', tinymce.plugins.rowfluid);  
})();