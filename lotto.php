<?
// Create a curl handle
$ch = curl_init('http://lotto.mthai.com/');

// Set curl options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute
$ret = curl_exec($ch);

// Return



preg_match_all('/<span>(.*)<\/span>/', $ret, $title); 


/*
$i=0;
$datalotto = array();
foreach ($title[1] as $realtitle) {
	
	$datalotto[$i] = $realtitle;
	$i++;
	*/
/*    echo "ลำดับที่ $i ".$realtitle . "\n";
	$i++;*/
//}

$tt = array();
$ir = 0;
foreach ($title[1] as $realtitle) {
	
	$k1 = str_replace("<span>", "", $realtitle);
	$k2 = str_replace("</span>", "", $k1);
	
	$tt[$ir] = $k2;
	$ir ++;	

}


/*echo "รางวัลที่ 1 ".$title[1][0]."<br>";
echo "เลขท้าย 2 ตัว ".$title[1][1]."<br>";
echo "เลขหน้า 3 ตัว ".$title[1][2]."<br>";
echo "เลขท้าย 3 ตัว ".$title[1][3]."<br>";
echo "รางวัลข้างเคียงรางวัลที่ 1 ".$title[1][4]."<br>";*/

//print 'return = ' . $ret . "\n";
//echo $ret;


// Close handle
curl_close($ch);
?>