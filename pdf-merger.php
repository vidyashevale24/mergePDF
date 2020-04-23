<?php
//set document root for the script
$root = __DIR__;

//Hide or display errors
error_reporting(0);

//set max execution time
ini_set('max_execution_time', 0);

//Store links to the array

$urls=array(
	"https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD107312205540085000-1731220554008500.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338486.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338426.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338357.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559338279.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/404-9012833-0137142_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-5056321-1155509_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/403-4455185-5905913_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559295457.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559295397.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559295340.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559295281.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559295213.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559286706.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559286693.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/403-5506700-5794751_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/402-4536622-4767528_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/402-9149230-0170747_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/403-9633108-6061921_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559249400.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559249311.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2539270821-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2539288415-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19807895696-SLP1140616899.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19807845682-SLP1140616862.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19807815705-SLP1140616841.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD207311672227236000-2731167222723602.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD507311505021513000-5731150502151300.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/403-6599938-0889938_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/404-7625042-4821125_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559208176.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559208092.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559208008.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559207919.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559199008.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559199002.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2539129367-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2539114325-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/402-0303287-1511553_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/403-2326605-6486768_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-5395774-3458768_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD507311467562657000-5731146756265700.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-9537812-3735564_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-6492784-8589133_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559172288.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559171802.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/402-0857298-7415525_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2539053587-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2539010985-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538984393-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538958727-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD607311237362051000-6731123736205100.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19805275520-SLP1140421224.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559148777.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559148776.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559148775.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559148770.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19805014659-SLP1140406657.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19803429605-SLP1140286741.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-7456146-3809129_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559131926.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559131850.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538921681-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538853123-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-9284133-0781116_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19801906394-SLP1140178106.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-5670213-6464363_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559087648.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/171-0998013-5440314_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/402-3428884-0889148_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/403-3179019-2162765_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/402-2892189-3625157_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559045947.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559045879.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559045815.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD107310867834425001-1731086783442500.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/402-9459255-6661948_shippinglabel.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538638382-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538630871-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538512662-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538508341-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/flipkartShippingLabel_OD107310694756347000-1731069475634700.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19799680099-SLP1140008175.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19799407603-SLP1139999699.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19798917481-SLP1139967832.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19798845649-SLP1139957984.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559010233.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559010142.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559010038.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/paytm_packing_slip_order_559007311.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19799239237-SLP1139987041.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19798716880-SLP1139950403.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19787010456-SLP1139961489.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19797915979-SLP1139887878.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538385725-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538361501-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538330738-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/ebayShippinglabel_2538321921-15242.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/SnapDealLabel_19798049434-SLP1139897601.pdf",
    "https://btesimages.s3.amazonaws.com/PdfLabelFiles/jabong_161010359170961_ship_label_path.pdf"
);

//set default time zone and show staring date and time 
date_default_timezone_set("Asia/Kolkata");
$tstart = 0;
$tend = 0;
$finalTime = 0;

//make directory to download the files
$dirDownload = mkdir($root.'/download/');
if($dirDownload){
	$save_to = $root.'/download/' ;
	$mh = curl_multi_init();
	
	//Call to timer_starts function to get started time of fetching PDF and call curl method to fetch PDF
	timer_starts("Starting PDF Fetching at: ");
	foreach ($urls as $i => $url) {
	    $g=$save_to.basename($url);
	    if(!is_file($g)){
	        $conn[$i]=curl_init($url);
	        $fp[$i]=fopen ($g, "w");
	        curl_setopt ($conn[$i], CURLOPT_FILE, $fp[$i]);
	        curl_setopt ($conn[$i], CURLOPT_HEADER ,0);
	        curl_setopt($conn[$i],CURLOPT_CONNECTTIMEOUT,60);
	        curl_multi_add_handle ($mh,$conn[$i]);
	    }
	}
	do {
	    $n=curl_multi_exec($mh,$active);
	}
	while ($active);
	foreach ($urls as $i => $url) {
	    curl_multi_remove_handle($mh,$conn[$i]);
	    curl_close($conn[$i]);
	    fclose ($fp[$i]);
	}
	timer_ends("PDF Fetch completed at: ");
	$fetchTime = timer_calc();
	print('It took '.$fetchTime.'ms to fetch 100 PDFs'."<br>");
	curl_multi_close($mh);

	//include pdf merger library in to the script
	require_once("PDFMerger.php");
	$pdf = new PDFMerger;

	//scan directory to get files to mearge
	$dir = $root."/download";

	// Open a directory, and read its contents
	$scannedFiles = scandir($dir);

	//Call to timer_starts function to get started time of Mearging PDF
	timer_starts("<br>Starting PDF Mearging at: ");
	foreach ($scannedFiles as $file) {
	    if (!in_array(trim($file), ['.', '..'])) {
	    	//add file to the pdf object
	    	$pdf->addPDF($dir.'/'.$file);
	    }
	}

	//mearge all files into single file
	$pdf->merge('file', $root.'/merged_pdf.pdf');
	//Call to timer_ends function to get completed time of Mearging PDF
	timer_ends("Completed PDF merging at: ");
	$meargeTime = timer_calc();
	print('It took '.($fetchTime+$meargeTime).'ms to fetch and merge 100 PDFs'."<br>");

	//Remove creted directory after mearging
	deleteDirectory($root."/download");
}else{
	echo "something went wrong";
}

function timer_starts($msg){
	global $tstart;
	echo $msg.date('Y-m-d H:i:s')."<br>";
	$tstart=microtime(true);
}

function timer_ends($msg){
	global $tend;
	echo $msg.date('Y-m-d H:i:s')."<br>";
	$tend=microtime(true); 
}

function timer_calc(){
	global $tstart,$tend,$finalTime;
	return (round($tend - $tstart,2)*1000);
}
function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }
    if (!is_dir($dir)) {
        return unlink($dir);
    }
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
       if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }
   return rmdir($dir);
}
?>