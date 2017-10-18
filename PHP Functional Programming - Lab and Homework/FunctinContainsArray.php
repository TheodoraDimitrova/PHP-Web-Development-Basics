<?php
declare(strict_types=1);
$arr=array('Teddy','Medy','Betty');
$searching='teddy';
if( contains($arr,$searching)){
    echo "exist";
}else{
    echo "not exist";
}
function contains(array $arrayToSearch,string $searchingValue ): bool {
    foreach ($arrayToSearch as $key){
        if($key===$searchingValue){
            return true;
            break;
        }
    }

    return  false;
}
