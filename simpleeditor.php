<!DOCTYPE html>
<html>
    <head>
    	<script src="jquery.min.js"></script>
	</head>
	<body>
		<script>
		 $(function(){
		 var textarea = document.getElementById("textarea");
       //  textarea.style.display = "none";
         var iframe = document.createElement("iframe");
         iframe.style.width = "390px";
         iframe.style.height = "100px";
         iframe.frameBorder=0;
         textarea.parentNode.insertBefore(iframe,textarea);
         var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
         iframeDocument.designMode = "on";
         iframeDocument.open();
         iframeDocument.write('<html><head><style type="text/css">body{ font-family:arial; font-size:13px;background:#DDF3FF }</style></head></html>');
         iframeDocument.close();

       

      
		 $($("iframe")[0].contentWindow).blur(function(){
		 	

		 		$("#textarea").val($("iframe").contents().find("body").html());


		 });




         $("#textarea").blur(function(){
         	
             $("iframe").contents().find("body").html($("#textarea").val());
         });


     });
		</script>
		<textarea id="textarea"></textarea>
		
	</body>
</html>
