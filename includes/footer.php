</div>
<script src="js/js/jquery-1.10.2.js"></script>
	  <script src="js/js/jquery-ui.js"></script>
	  <link rel="stylesheet" href="js/development-bundle/demos/demos.css">
	  <script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
	  
	  </script>

	  <script>
		/*$(document).ready(function(){
			$("#checkAll").click(function() {
				$(".checkbox").attr("checked", "checked");

			});
		});*/

		function selectFunction (checkall,field)
			{
			    if(checkall.checked==true){
			        for (i = 0; i < field.length; i++)
			            field[i].checked = true ;
			    }else{
			        for (i = 0; i < field.length; i++)
			            field[i].checked = false ;
			    }
			}
	  </script>

  	

</body>
</html>