<?
// Create a curl handle
$ch = curl_init('http://lotto.mthai.com/');

// Set curl options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute
$ret = curl_exec($ch);

// Return

preg_match('/<span class="">(.*)<\/span>/',  $ret, $hh);

preg_match_all('/<span>(.*)<\/span>/', $ret, $title); 




$hk1 = str_replace("<span class=\"\">", "", $hh);
$hk2 = str_replace("</span>", "", $hk1);



/*$i=0;
$datalotto = array();
foreach ($title[1] as $realtitle) {
	
	$datalotto[$i] = $realtitle;
	$i++;
	
    echo "ลำดับที่ $i ".$realtitle . "\n";
	$i++;
}*/


$tt = array();
$ir = 0;
foreach ($title[1] as $realtitle) {
	
	$k1 = str_replace("<span>", "", $realtitle);
	$k2 = str_replace("</span>", "", $k1);
	
	$tt[$ir] = $k2;
	$ir ++;	

}




// Close handle
curl_close($ch);






?>