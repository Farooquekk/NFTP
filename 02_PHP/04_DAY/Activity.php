<?php 

$english  = 98;
$math     = 67;
$science  = 95;
$computer = 87;

$total_marks = $english + $math + $science + $computer;

 $percentage = $total_marks / 400 * 100;
if( $percentage > 80  ){
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

<table border="1">
    <tr>
        <td>English</td>
        <td> <?php echo  $english;?></td>
    </tr>
    <tr>
        <td>Math</td>
        <td> <?php echo  $math;?></td>
    </tr>
    <tr>
        <td>Computer</td>
        <td> <?php echo  $computer;?></td>
    </tr>
    <tr>
        <td>Science</td>
        <td> <?php echo  $science;?></td>
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