<?php
// $dict = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789';
function DecTo62($Numdec){
    $dict = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789';
    $res ='';
    while($Numdec>=62){
        $res = sprintf('%s%s', $dict[$Numdec%62], $res);
        $j = $Numdec/62;
        $Numdec/=62;
    }
    $res = sprintf('%s%s', $dict[intval($j)], $res);
    return $res;
}
function ToDec($Num62){
    $dict = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789';
    $res=0;
    for ($i = 0;$i<strLen($Num62);$i++){
         $res+=strpos($dict,$Num62[$i])*pow(62,(strLen($Num62)-$i-1));
    }
    return $res;
}
// #var_dump($dict);
// #echo DecTo62(3844).PHP_EOL;
// echo ToDec(DecTo62(3884));
?>
