<form action = "<?php echo($_SERVER['PHP_SELF']);?>" method="post" >
 <p>
 <label>Choose genre</label> 
 <select name="genre">
 	<option value="adventure" selected>Adventure</option>
 	<option value="fiction">Fiction</option>
 </select>
 
 
 <input type="submit" value="submit genre" name ="submitGenre"/>
</p>
</form>