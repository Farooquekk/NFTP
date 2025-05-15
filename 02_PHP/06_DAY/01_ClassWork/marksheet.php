
<link rel="stylesheet" href="style.css">
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

<?php  if(   $_POST[ 'english' ] != "" ){ ?>

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

        $subject = "";

        if( $computer < 0 || $computer >100 ){
            $subject = "computer";
        }
        if( $english < 0 || $english >100 ){
            $subject = "english";
        }
        if( $science < 0 || $science >100 ){
            $subject = "science";
        }
        if( $math < 0 || $math >100 ){
            $subject = "math";
        }

        /*    echo $subject;
         header( 'Location:form.php?error=1&subject=<?php echo $subject?>' );
*/
         $url =  'Location:form.php?error=1&subject='.$subject;
        header($url);

      
        
        
        
    }


}   
    /*


*/
?>



