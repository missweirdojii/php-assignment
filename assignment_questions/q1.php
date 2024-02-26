<?php
$price= 5999;
if ($price>=5000)
{
    $d_price=$price-($price*0.1);
}
else
{
$d_price=$price;
}
echo "Total price to be given".$d_price;
?>