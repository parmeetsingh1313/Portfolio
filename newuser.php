<html>
    <head>
    <link rel ="stylesheet" type="text/css" href="css/mystyles.css">
    </head>

<div align="center";>
<form action="newuserserver.php" method="post" class="contact">
   <fieldset style="height:500 ; width:400;border:7px solid black; background-color:blue;" >
       <legend>Register Yourself:</legend><BR><BR>
	   <h1> Regiser Now!!!</h1>
	   
       	  <tr><td>
		   Name:<td><input type="text" name="name"></td></tr>
		  <BR><BR><BR>
	   
          <label for="password">Password:</label>                        
		<input type="password" name="password" id="password" /><BR><BR><BR>
		
        <label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="example@gmail.com" /><BR><BR><BR>
        
		
		<label for="dob">DOB:</label>
		<input type="date"  name="dob" id="dob" /><BR><BR><BR>
		
		
		<label for="add">Address:</label>
		<input type="textarea" name="address" id="add" /><BR><BR><BR>
		
		<label for="gender" >Gender:</label>
		<input type="radio" name="gender" value="Female">Female</input>
		<input type="radio" name="gender" value="Male" >Male</input><BR><BR><BR>
		
        <div class="button">
	
        <button type="submit">Register </button>
		<input type="reset" value="reset/clear" />
</div> 
  
	    </fieldset>	
</form>
</div>
</html>