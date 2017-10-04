<form >
    <input type="text" name="num"/>
    <input type="submit"/>
</form>

<?php
if(isset($_GET['num'])){
    $num=intval($_GET['num']);
    if($num < 1 || $num > 100){
        echo "Please enter an integer in range[1..100]";
        die;
    }
    echo  "You entered valid number: $num.";
}