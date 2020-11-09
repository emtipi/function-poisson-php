define('exponential', 2.71828182845904523536028747135266249775724709369995957496696762772407663035354759457138217852516642742746); 

$numerator = 0; 
$dominator = 0; 
 function fact($x) {
        if($x==0) {
            return 1;
        }
        return $x * fact($x-1);
        }


        function poisson($k, $landa)
{
        $exponential = 2;
        $exponentialPower = pow($exponential, -$landa);
        $landaPowerK = pow($landa,$k);
        $numerator = $exponentialPower * $landaPowerK;

        $dominator = fact($k);

        echo ($numerator / $dominator);
}

//Test formule:
poisson(1,2);
