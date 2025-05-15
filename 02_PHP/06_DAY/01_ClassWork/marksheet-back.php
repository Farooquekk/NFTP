
<style>
    .fail{
        color: red;
        font-weight: bold;
    }
    .warning{
        width: 200px;
        padding: 10px;
        border: solid 2px red;
        text-align: center;
        box-shadow: 2px 4px lightcoral;
        border-radius: 10px;
    }
</style>
<?php 



$array_length =  count( $_POST );


if( $array_length > 0 ){

$english  = $_POST[ 'english' ];
$math     = $_POST[ 'math' ];
$science  = $_POST[ 'science' ];
$computer = $_POST[ 'computer' ];


if( $english > 0 && $english <= 100  
    && $math > 0 && $math <= 100 
    && $computer > 0 && $computer <= 100 
    && $science > 0 && $science <= 100   ){
        $total_marks = $english + $math + $science + $computer;

 $percentage = $total_marks / 400 * 100;
if( $percentage >= 80  ){
    $grade = "A1";
}
if( $percentage >= 70 && $percentage < 80 ){
    $grade = "A";
}
if( $percentage >= 60 && $percentage < 70 ){
    $grade = "B";
}
if( $percentage >= 50 && $percentage < 60 ){
    $grade = "C";
}
if( $percentage < 50 ){
    $grade = "F";
}

if( $english  >= 50 && $math >= 40 && $science >= 40 && $computer >= 40 ){
     

}else{
    $grade = "F";
    
}


?>

<?php  if(   $_POST[ 'english' ] != "" ){ 
    ?>

<table border="1">
    <tr>
        <td>English</td>
        <?php 
        if( $english >= 50 ){
            ?>
            <td > <?php echo  $english;?></td>
            
            <?php
        }else{
            ?>
            <td class="fail"> <?php echo  $english;?></td>
            
            <?php
        }
        
        ?>
    </tr>
    <tr>
        <td>Math</td>
        
        <td class="<?php if( $math < 50 ){ echo "fail";}?>  " > <?php echo  $math;?></td>
       
    </tr>
    <tr>
        <td>Computer</td>
        <td class="<?php if( $computer < 50 ){ echo "fail";}?>  "> <?php echo  $computer;?></td>
    </tr>
    <tr>
        <td>Science</td>
        <td class="<?php if( $science < 50 ){ echo "fail";}?>  "> <?php echo  $science;?></td>
    </tr>
    <tr>
        <td>
            Total Obtain Marks
        </td>
        <td>
            <?php echo $total_marks; ?>
        </td>
    </tr>
    <tr>
        <td>
            Percentage
        </td>
        <td>
            <?php echo $percentage; ?>%
        </td>
    </tr>
    <tr>
        <td>
            Grade
        </td>
        <td>
            <?php echo $grade; ?>
        </td>
    </tr>
</table>

<?php 
}

    }else{

       
        ?>
        <div class="warning">Invalid Marsk Entered.</div>
        <?php
        
    }


}   
    /*


*/
?>

<?php 

$name = "Naeem";
?>


<form action="" method="post">
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
    <a href="form.php?name=Muhammad&n=<?php echo $array_length;?>">Go to Form</a>
</form>