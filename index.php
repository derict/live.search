<html>
  <head>
    <title>Live Search Using typeahead (twitter)</title>
    <script src='jquery.min.js'></script>
    <script src='typeahead.min.js'></script>
    <script>
    $(document).ready(function(){
      $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?col=actress&key=%QUERY',
        limit : 10
      });
    });
    </script>
  </head>
  <body>
	<form action=index.php method='post'>
     		<input type='text' name='typeahead' class='typeahead tt-query' autocomplete='off' spellcheck='false'>
		<input type='submit'>
	</form>
  </body>
</html>

<?php

include 'connect.php';

if(isset($_POST['typeahead'])){
	$input = $_POST['typeahead'];
	$sql = "INSERT INTO actress (name) VALUES ('$input')";
	mysqli_query($conn, $sql);
}

?>
