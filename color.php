<html>
 <head>
 <title>DropDownList</title>
 </head>
 <body>

 <h1>Add DropDownList into Database</h1>
 <form action ="wptask3.php" method ="POST">
 <label> Enter Your Name </label>
 <input type="text" name ="name" placeholder = "Enter Your Name"/><br><br>
 <label> Enter Your Email </label>
 <input type="text" name ="email" placeholder = "Enter Your Name"/><br><br>
 <label>Select Color Name </label>
 <select name="color">
 <option value="">Select</option>
 <option value="Red">Red</option>
 <option value="Blue">Blue</option>
 <option value="Black">Black</option>
 <option value="White">White</option>
 </select><br><br>
 <input type="submit" name="insert" value="Submit"/>
 </form>
 </body>
 </html>
