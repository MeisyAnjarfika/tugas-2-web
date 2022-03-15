<?php
    $a = array(9,8,7,6,5,4,3,2,1);
    $j = count ($a);
    $k = 5;

    for ($l=1;$l<=$j;$l++)
    {
        for ($i=0;$i<=$j-1;$i++)
        {
            if ($i<$j-1)
            {
                if($a[$i] > $a[$i+1])
            {
                $b      = $a[$i] + $a [$i+1];
                $a[$i]  = $b - $a[$i];
                $a[$i+1] = $b - $a[$i+1];
            }
            }
        }
    }

print_r ($a);
?>