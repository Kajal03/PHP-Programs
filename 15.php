<?php //php 7.0.8
function print_even($x)
{
    for($y=1;$y<=$x;$y++)
    {
        if($y%2==0)
            echo $y." ";
    }
    echo "\n";
}
print_even(77);
?>
