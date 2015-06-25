<!DOCTYPE html>
<html>
    <head>
    	<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
        <script>
        $(function(){

             var i,j=5;
             for(i=0;i<j;i++){
             
                $("<iframe id='Frame"+i+"' frameBorder=0></iframe>").appendTo('#editorzone');  
                $("<textarea id='Text"+i+"' name='Text"+i+"'></textarea><br/><br/>").appendTo('#editorzone');

                var iframe=$("#Frame"+i)[0];
                var text=$("#Text"+i)[0];
                var iframei=$("iframe")[i];
                var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
                iframeDocument.designMode = "on";
                iframeDocument.open();
                iframeDocument.write('<html><head><style type="text/css">body{ font-family:arial; font-size:13px;background:#DDF3FF }</style></head></html>');
                iframeDocument.close();
                binding(i);
             }
             



              function binding(i){
                var frameselector="#Frame"+i;
                var textselector="#Text"+i;

                 $($("iframe")[i].contentWindow).blur(function(){
            
                     $(textselector).val($(frameselector).contents().find("body").html());
                 });


                  $(textselector).blur(function(){
            
                  $(frameselector).contents().find("body").html($(textselector).val());
                  });

              }

        })
       
       
        </script>
        <style>
        textarea,iframe{
            width:400px;
            height:200px;
            margin-right:20px;
        }
        </style>
	</head>
	<body>
        多组编辑器 两两一组
       
		<div id="editorzone">
        </div>




	</body>
</html>
