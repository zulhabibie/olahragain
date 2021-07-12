<!-- Scrapping -->
<?php

require('simple_html_dom.php');

// //cabe ijo
// $ch2 = curl_init();
// curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
// curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch2, CURLOPT_REFERER, 'https://tokoalatolahraga.com/');
// curl_setopt($ch2, CURLOPT_URL, 'https://tokoalatolahraga.com/');

// $data2 = curl_exec($ch2);
// curl_close($ch2);

// $output = array();

// $html2 = str_get_html($data2);

// $bahanc2 = $html2->find('div[id=topbox]', 0);

// $kotakc2 = $bahanc2->find('div[class=box smart_pdbox mini-desk]');
// //cabe ijo


// $ch1 = curl_init();
// curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 0);
// curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch1, CURLOPT_REFERER, 'https://tokoalatolahraga.com/?s=barbel');
// curl_setopt($ch1, CURLOPT_URL, 'https://tokoalatolahraga.com/?s=barbel');

// $data1 = curl_exec($ch1);
// curl_close($ch1);

// $output1 = array();

// $html1 = str_get_html($data1);

// $bahanc1 = $html1->find('div[id=topbox]', 0);

// $kotakc1 = $bahanc1->find('div[class=box smart_pdbox mini-desk]');



// $ch3 = curl_init();
// curl_setopt($ch3, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 0);
// curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch3, CURLOPT_REFERER, 'https://tokoalatolahraga.com/?s=basket');
// curl_setopt($ch3, CURLOPT_URL, 'https://tokoalatolahraga.com/?s=basket');

// $data3 = curl_exec($ch3);
// curl_close($ch3);

// $output2 = array();

// $html3 = str_get_html($data3);

// $bahanc3 = $html3->find('div[id=topbox]', 0);

// $kotakc3 = $bahanc3->find('div[class=box smart_pdbox mini-desk]');




// $ch4 = curl_init();
// curl_setopt($ch4, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, 0);
// curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch4, CURLOPT_REFERER, 'https://tokoalatolahraga.com/?s=bola');
// curl_setopt($ch4, CURLOPT_URL, 'https://tokoalatolahraga.com/?s=bola');

// $data4 = curl_exec($ch4);
// curl_close($ch4);

// $output4 = array();

// $html4 = str_get_html($data4);

// $bahanc4 = $html4->find('div[id=topbox]', 0);

// $kotakc4 = $bahanc4->find('div[class=box smart_pdbox mini-desk]');


// $ch5 = curl_init();
// curl_setopt($ch5, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch5, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch5, CURLOPT_FOLLOWLOCATION, 0);
// curl_setopt($ch5, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch5, CURLOPT_REFERER, 'https://tokoalatolahraga.com/?s=futsal');
// curl_setopt($ch5, CURLOPT_URL, 'https://tokoalatolahraga.com/?s=futsal');

// $data5 = curl_exec($ch5);
// curl_close($ch5);

// $output5 = array();

// $html5 = str_get_html($data5);

// $bahanc5 = $html5->find('div[id=topbox]', 0);

// $kotakc5 = $bahanc5->find('div[class=box smart_pdbox mini-desk]');

//OLAHRAGA AIR
//pelampung
$ch8 = curl_init();
curl_setopt($ch8, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch8, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch8, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch8, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch8, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-air/renang/jaket-pelampung/');
curl_setopt($ch8, CURLOPT_URL, 'https://iprice.co.id/olahraga-air/renang/jaket-pelampung/');

$data8 = curl_exec($ch8);
curl_close($ch8);

$products9 = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $products9[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//Jetski
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-air/jet-ski/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-air/jet-ski/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsJetski = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsJetski[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//Kayak
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-air/kayak/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-air/kayak/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsKayak = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsKayak[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//Renang
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-air/renang/?page=2&so=8');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-air/renang/?page=2&so=8');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsRenang = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsRenang[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}
// Scuba Diving
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-air/scuba-diving/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-air/scuba-diving/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsDiving = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsDiving[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}
//Surfing
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-air/surfing/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-air/surfing/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsSurfing = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsSurfing[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//OLAHRAGA BEREGU
	// Sepak Bola
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-tim/sepakbola/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-tim/sepakbola/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsSepakbola = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsSepakbola[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}
//Basket
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-tim/basket/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-tim/basket/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsBasket = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsBasket[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//VOLI
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/search/?term=Voli+Lapangan');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/search/?term=Voli+Lapangan');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsVoli = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsVoli[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-tim/bola-voli/');
curl_setopt($ch, CURLOPT_URL, 'https://iprice.co.id/olahraga-tim/bola-voli/');

//html
$data = curl_exec($ch);
curl_close($ch);

//array output
$productsBolaVoli = array();

//include simple html dom

// html to string
$html = str_get_html($data);

//bahan olahan
$bahan = $html->find('div[class=pk cN lQ kF]', 0);

//ambil bahan
$kotak = $bahan->find('a[class=cN nW oT ki eZ oz h bu cu d e1 kF ra]');

//ekstrak kotak
foreach($kotak as $key => $val){
	//mengambil isi data dari web scrap
	$divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
	$img = $divimg->find('amp-img',0)->src;

	$link = $val->href;

	$divtitle = $val->find('span[class=dT dS bc]',0);
	$title = $divtitle->find('span',0)->innertext;

	$divharga = $val->find('div[class=bc cs]',0);
	$harga = $divharga->find('span',0)->innertext;

	$logo = $val->find('amp-img[layout=fixed]',0)->src;


	$productsBolaVoli[] = array(
		'img' => $img,
		'title' => $title,
		'link' => $link,
		'harga' => $harga,
		'logo' => $logo
	);
} 

// TAKRAW
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-tim/sepak-takraw/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-tim/sepak-takraw/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsTakraw = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsTakraw[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}
//JERSEY FUTSAL DAN SEPATU FUTSAL
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/search/?term=jersey+futsal');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/search/?term=jersey+futsal');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsFutsal = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsFutsal[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//SEPATU FUTSAL
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/search/?term=futsal');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/search/?term=futsal');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsFutsal1 = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsFutsal1[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//OLAHRAGA PERORANGAN
//SEPEDA
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-aksi/sepeda/');
curl_setopt($ch, CURLOPT_URL, 'https://iprice.co.id/olahraga-aksi/sepeda/');

//html
$data = curl_exec($ch);
curl_close($ch);

//array output
$products10 = array();

//include simple html dom

// html to string
$html = str_get_html($data);

//bahan olahan
$bahan = $html->find('div[class=pk cN lQ kF]', 0);

//ambil bahan
$kotak = $bahan->find('div[class=pu kF oT cM iq iU iV uu]');

//ekstrak kotak
foreach($kotak as $key => $val){
	//mengambil isi data dari web scrap
	$divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
	$img = $divimg->find('amp-img',0)->src;
	$link = $val->find('a',0)->href;

	$divtitle = $val->find('div[class=l bc]',0);
	$title = $divtitle->find('span',0)->innertext;

	$divharga = $val->find('div[class=gM uu a0 fl ei kp b db h65]',0);
	$harga = $divharga->find('div',0)->innertext;

	 $logo = $val->find('amp-img[layout=fixed]',0)->src;

	$products10[] = array(
		'img' => $img,
		'title' => $title,
		'link' => $link,
		'harga' => $harga,
		'logo' => $logo
	);
}

//HOVER BOARD
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-aksi/hover-board/');
curl_setopt($ch, CURLOPT_URL, 'https://iprice.co.id/olahraga-aksi/hover-board/');

//html
$data = curl_exec($ch);
curl_close($ch);

//array output
$productsHoverBoard = array();

//include simple html dom

// html to string
$html = str_get_html($data);

//bahan olahan
$bahan = $html->find('div[class=pk cN lQ kF]', 0);

//ambil bahan
$kotak = $bahan->find('a[class=cN nW oT ki eZ oz h bu cu d e1 kF ra]');

//ekstrak kotak
foreach($kotak as $key => $val){
	//mengambil isi data dari web scrap
	$divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
	$img = $divimg->find('amp-img',0)->src;

	$link = $val->href;

	$divtitle = $val->find('span[class=dT dS bc]',0);
	$title = $divtitle->find('span',0)->innertext;

	$divharga = $val->find('div[class=bc cs]',0);
	$harga = $divharga->find('span',0)->innertext;

	$logo = $val->find('amp-img[layout=fixed]',0)->src;


	$productsHoverBoard[] = array(
		'img' => $img,
		'title' => $title,
		'link' => $link,
		'harga' => $harga,
		'logo' => $logo
	);
} 

//SEPATU RODA
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-aksi/sepatu-roda/');
curl_setopt($ch, CURLOPT_URL, 'https://iprice.co.id/olahraga-aksi/sepatu-roda/');

//html
$data = curl_exec($ch);
curl_close($ch);

//array output
$productsSepatuRoda = array();

//include simple html dom

// html to string
$html = str_get_html($data);

//bahan olahan
$bahan = $html->find('div[class=pk cN lQ kF]', 0);

//ambil bahan
$kotak = $bahan->find('a[class=cN nW oT ki eZ oz h bu cu d e1 kF ra]');

//ekstrak kotak
foreach($kotak as $key => $val){
	//mengambil isi data dari web scrap
	$divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
	$img = $divimg->find('amp-img',0)->src;

	$link = $val->href;

	$divtitle = $val->find('span[class=dT dS bc]',0);
	$title = $divtitle->find('span',0)->innertext;

	$divharga = $val->find('div[class=bc cs]',0);
	$harga = $divharga->find('span',0)->innertext;

	$logo = $val->find('amp-img[layout=fixed]',0)->src;


	$productsSepatuRoda[] = array(
		'img' => $img,
		'title' => $title,
		'link' => $link,
		'harga' => $harga,
		'logo' => $logo
	);
} 

//SKIPING
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://iprice.co.id/search/?term=lompat+tali');
curl_setopt($ch, CURLOPT_URL, 'https://iprice.co.id/search/?term=lompat+tali');

//html
$data = curl_exec($ch);
curl_close($ch);

//array output
$productsLompatTali = array();

//include simple html dom

// html to string
$html = str_get_html($data);

//bahan olahan
$bahan = $html->find('div[class=pk cN lQ kF]', 0);

//ambil bahan
$kotak = $bahan->find('a[class=cN nW oT ki eZ oz h bu cu d e1 kF ra]');

//ekstrak kotak
foreach($kotak as $key => $val){
	//mengambil isi data dari web scrap
	$divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
	$img = $divimg->find('amp-img',0)->src;

	$link = $val->href;

	$divtitle = $val->find('span[class=dT dS bc]',0);
	$title = $divtitle->find('span',0)->innertext;

	$divharga = $val->find('div[class=bc cs]',0);
	$harga = $divharga->find('span',0)->innertext;

	$logo = $val->find('amp-img[layout=fixed]',0)->src;


	$productsLompatTali[] = array(
		'img' => $img,
		'title' => $title,
		'link' => $link,
		'harga' => $harga,
		'logo' => $logo
	);
} 

//OLAHRAGA RAKET
//BULU TANGKIS
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-raket/bulu-tangkis/');
curl_setopt($ch, CURLOPT_URL, 'https://iprice.co.id/olahraga-raket/bulu-tangkis/');

//html
$data = curl_exec($ch);
curl_close($ch);

//array output
$products11 = array();

//include simple html dom

// html to string
$html = str_get_html($data);

//bahan olahan
$bahan = $html->find('div[class=pk cN lQ kF]', 0);

//ambil bahan
$kotak = $bahan->find('div[class=pu kF oT cM iq iU iV uu]');

//ekstrak kotak
foreach($kotak as $key => $val){
	//mengambil isi data dari web scrap
	$divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
	$img = $divimg->find('amp-img',0)->src;
	$link = $val->find('a',0)->href;

	$divtitle = $val->find('div[class=l bc]',0);
	$title = $divtitle->find('span',0)->innertext;

	$divharga = $val->find('div[class=gM uu a0 fl ei kp b db h65]',0);
	$harga = $divharga->find('div',0)->innertext;

	 $logo = $val->find('amp-img[layout=fixed]',0)->src;

	$products11[] = array(
		'img' => $img,
		'title' => $title,
		'link' => $link,
		'harga' => $harga,
		'logo' => $logo
	);
}

// SQUASH
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-raket/squash/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-raket/squash/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsSquash = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsSquash[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//TENIS
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/search/?term=raket+tenis+');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/search/?term=raket+tenis+');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsTenis = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsTenis[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}

//OLAHRAGA REKREASI
// HIKING
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-rekreasi/hiking/');
curl_setopt($ch, CURLOPT_URL, 'https://iprice.co.id/olahraga-rekreasi/hiking/');

//html
$data = curl_exec($ch);
curl_close($ch);

//array output
$productsHiking = array();

//include simple html dom

// html to string
$html = str_get_html($data);

//bahan olahan
$bahan = $html->find('div[class=pk cN lQ kF]', 0);

//ambil bahan
$kotak = $bahan->find('a[class=cN nW oT ki eZ oz h bu cu d e1 kF ra]');

//ekstrak kotak
foreach($kotak as $key => $val){
	//mengambil isi data dari web scrap
	$divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
	$img = $divimg->find('amp-img',0)->src;

	$link = $val->href;

	$divtitle = $val->find('span[class=dT dS bc]',0);
	$title = $divtitle->find('span',0)->innertext;

	$divharga = $val->find('div[class=bc cs]',0);
	$harga = $divharga->find('span',0)->innertext;

	$logo = $val->find('amp-img[layout=fixed]',0)->src;


	$productsHiking[] = array(
		'img' => $img,
		'title' => $title,
		'link' => $link,
		'harga' => $harga,
		'logo' => $logo
	);
} 

//GOLF
$ch9 = curl_init();
curl_setopt($ch9, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_REFERER, 'https://iprice.co.id/olahraga-rekreasi/golf/');
curl_setopt($ch9, CURLOPT_URL, 'https://iprice.co.id/olahraga-rekreasi/golf/');

$data8 = curl_exec($ch9);
curl_close($ch9);

$productsGolf = array();

$html8 = str_get_html($data8);

$bahanc8 = $html8->find('div[id=shop]', 0);

$kotakc8 = $bahanc8->find('div[class=pu kF oT cM iq iU iV uu]');

foreach($kotakc8 as $key => $val){
    //mengambil isi data dari web scrap
    $divimg = $val->find('div[class=dR cN nW kF ra c dQ dP bc eK]',0);
    $img = $divimg->find('amp-img',0)->src;
    $link = $val->find('a',0)->href;

    $divtitle = $val->find('span[class=dT dS bc]',0);
    $title = $divtitle->find('span[class=truncate-2 db webkit-box-ns ra co kM b]',0)->innertext;

    $divharga = $val->find('div[class=bc cs]',0);
    $harga = $divharga->find('span',0)->innertext;

    $logo = $val->find('amp-img[layout=fixed]',0)->src;

    $productsGolf[] = array(
        'img' => $img,
        'link' => $link,
        'title' => $title,
        'harga' => $harga,
        'logo' => $logo
  );
}
?>
<!-- // Scrapping -->