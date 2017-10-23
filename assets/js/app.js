    function captureDiv() { 
	$('#targetDiv').html2canvas({ 
		 onrendered: function (canvas) { 
                      Canvas2Image.saveAsPNG(canvas);  			 
                 }
	}); 
 }