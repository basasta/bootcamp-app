<!DOCTYPE html>
<html>
    
    <head>
    <meta charset="utf-8">
    <title>GETTING STARTED WITH BRACKETS</title>
    </head>
    <body>    
         <form action="Comment.php" method="POST">
             <label for="urname"> Your name: </label>
                    <input type="text" name="name" id="urname" value = "" /><br />
                    <label for="comment"> Stay a comment: </label><br />
                    <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br />
             <button type="submit">Log in</button>
                 <?php
  
$username = "homestead";
$password = "secret";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br />";

//select a database to work with
$selected = mysqli_select_db($dbhandle,"bootcamp")
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysqli_query($dbhandle,"SELECT id, user, comment FROM comments");

//fetch tha data from the database
while ($row = mysqli_fetch_array($result)) {
   echo "ID:".$row{'id'}."<br />"." USER'S NAME:".$row{'user'}."<br />"."COMMENT: ". //display the results
   $row{'comment'}."<br />";
}
//close the connection
mysqli_close($dbhandle);
  
                          
             ?>
         </form>
    </body>
</html>
