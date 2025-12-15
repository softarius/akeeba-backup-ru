<?php
echo $argv[1];
$eng = parse_ini_file($argv[1]);
$rus = parse_ini_file($argv[2]);
$res=array_merge($eng, $rus);
$res=array_intersect_key($res, $eng);
foreach ($res as $key=> $val){
    echo "$key=\"$val\"\n";
}
?>