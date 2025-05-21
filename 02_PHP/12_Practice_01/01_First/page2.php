<?php 

if(!isset($_POST['Number'])){
    die("Invalid access.Please Submit the form first.");
}
// echo ($_POST['Number']);
$numOfPeoples = $_POST['Number'];
echo "<h1>Enter Details of $numOfPeoples Peoples</h1>";

echo "<form action='page3.php' method='POST'>";
for($i=1;$i<=$numOfPeoples;$i++){
?> 
   <input type="text" name="Name[]" required placeholder="Enter Name of Person">
   <input type="text" name="Age[]" required placeholder="Enter Age of Person">
   <br>
   <br>
   
  <?php 
}
echo "<input type='submit' value='Submit'>";
echo "</form>";


?>