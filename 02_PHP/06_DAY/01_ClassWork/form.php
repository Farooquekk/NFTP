<link rel="stylesheet" href="style.css">

<?php
$errroCode = 0;
if( isset($_GET[ 'error' ])  && $_GET[ 'error' ] > 0){
     $errroCode = $_GET[ 'error' ];
}

if( $errroCode == 1 ){
    ?>
     <div class="warning">Invalid Marsk Entered.</div>
    <?php
}
?>


<form action="marksheet.php" method="post">
    <h1>Enter Subject Makrs</h1>
    <table>
        <tr>
            <td>Enter English Marks</td>
            <td><input type="text" name="english" value="<?php echo $english;?>" id=""></td>
            <td>
            <?php 
           

           if( $english < 0 || $english >100 ){
               echo "Invalid marks";
           }
           ?>
            </td>
        </tr>
        <tr>
            <td>Enter Math Marks</td>
            <td><input type="text" name="math" value="<?php echo $math;?>" id=""></td>
            <td>
            <?php 
           

           if( $math < 0 || $math >100 ){
               echo "Invalid marks";
           }
           ?>
            </td>
           
        </tr>
        <tr>
            <td>Enter Science Marks</td>
            <td><input type="text" name="science" value="<?php echo $science;?>" id=""></td>
            <td>
            <?php 
           

           if( $science < 0 || $science >100 ){
               echo "Invalid marks";
           }
           ?>
            </td>
        </tr>
        <tr>
            <td>Enter Computer Marks</td>
            <td><input type="text" name="computer" value="<?php echo $computer;?>" id=""></td>
            <td>
            <?php 
           
           if( $computer < 0 || $computer >100 ){
               echo "Invalid marks";
           }
           ?>
            </td>
        </tr>
       
    </table>
    <input type="submit" value="Generate">
   
</form>
<p></p>
<a href="marksheet.php">Back to Marksheet</a>