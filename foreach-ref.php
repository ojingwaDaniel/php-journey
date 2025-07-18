<?php
$generatedData = range(1,1_000_000) ;
$startTime = microtime(true);
$startMemory = memory_get_usage();
$outPut = [];
foreach( $generatedData as$value ){
    $outPut[] = $value;
    
}
$endtime = microtime(true);
$endMemory = memory_get_usage();
echo "Time : " . ($endtime - $startTime) . "seconds\n";
echo "Memory : " . round(($endMemory - $startMemory) / 1024 / 1024) . "Mbs\n";
