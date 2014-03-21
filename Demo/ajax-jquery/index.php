<input type="button" id="send" value="Ajax获取">
<h2>下面是获取内容：</h2>
<div id="resText" style="color:red"></div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script>
	$(function() {
		$("#send").click(function(){
			$("#resText").load("test.html");
		});
	});
</script>