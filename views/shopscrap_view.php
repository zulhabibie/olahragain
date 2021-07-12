<?php  
require('scrap.php'); ?>
    
    <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/gambar5.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Shop Page</h2>
                                <nav class="bradcaump-inner">
                                  <!-- <a  style="color: white;" class="breadcrumb-item" href="<?php echo site_url ('userpage') ?>">Home</a>
                                  <span style="color: white;" class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Shop Page</span> -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header gambar -->

        
        <section class="htc__product__area shop__page ptb--130 bg__white"><!-- Section -->
            <div class="container"><!-- container awal -->
                <div class="htc__product__container"><!-- product container -->
                    
                    <!-- Filter -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    
                                    <button data-filter="*"  class="is-checked">Semua Kategori</button>
                                    <div class="dropdown">
                                      <button class="mainmenubtn">Olahraga Air</button>
                                      <div class="dropdown-child">
                                        <button  class="buttonku"data-filter=".cat--jaketpelampung">Jaket Pelampung</button>
                                        <button class="buttonku" data-filter=".cat--jetski">Jetski </button>
                                         <button class="buttonku" data-filter=".cat--kayak">Kayak </button>
                                          <button class="buttonku" data-filter=".cat--renang">Renang </button>
                                          <button class="buttonku" data-filter=".cat--diving">Scuba Diving</button>
                                          <button class="buttonku" data-filter=".cat--surfing">Surfing</button>
                                       
                                      </div>
                                    </div>

                                     <div class="dropdown">
                                      <button class="mainmenubtn">Olahraga Beregu</button>
                                      <div class="dropdown-child">
                                        <button  class="buttonku"data-filter=".cat--sepakbola">Sepak Bola</button>
                                        <button class="buttonku" data-filter=".cat--basket">Basket </button>
                                         <button class="buttonku" data-filter=".cat--takraw">Rugby </button>
                                        <button class="buttonku" data-filter=".cat--futsal">Futsal </button>
                                         <button class="buttonku" data-filter=".cat--voli">Voli </button>
                                        
                                      </div>
                                    </div>
                                    

                                    <div class="dropdown">
                                      <button class="mainmenubtn">Olahraga Perorangan</button>
                                      <div class="dropdown-child">
                                        <button  class="buttonku"data-filter=".cat--sepeda">Sepeda</button>
                                        <button class="buttonku" data-filter=".cat--hoverboard">Hover Board</button>
                                        <button class="buttonku" data-filter=".cat--sepaturoda">Sepatu Roda</button>
                                        <button class="buttonku" data-filter=".cat--lompattali">Lompat Tali</button>
                                      </div>
                                    </div>

                                    <div class="dropdown">
                                      <button class="mainmenubtn">Olahraga Raket</button>
                                      <div class="dropdown-child">
                                        <button  class="buttonku"data-filter=".cat--bulutangkis">Bulu Tangkis</button>
                                        <button class="buttonku" data-filter=".cat--squash">Squash</button>
                                        <button class="buttonku" data-filter=".cat--tenis">Tenis</button>
                                        
                                      </div>
                                    </div>

                                    <div class="dropdown">
                                      <button class="mainmenubtn">Olahraga Rekreasi </button>
                                      <div class="dropdown-child">
                                        <button  class="buttonku"data-filter=".cat--hiking">Hiking</button>
                                        <button class="buttonku" data-filter=".cat--golf">Golf
                                      </div>
                                    </div>





                                  <!--   <button data-filter=".cat--1">Rompi Cakram</button>
                                    <button data-filter=".cat--2">Barbel</button>
                                    <button data-filter=".cat--3">Basket</button>
                                    <button data-filter=".cat--4">Bola Sepak</button>
                                    <button data-filter=".cat--5">Futsal</button>
                                    <button data-filter=".cat--6">Sepeda</button>
                                    <button data-filter=".cat--jaketpelampung">Jaket Pelampung</button>
                                    <button data-filter=".cat--8">Bulu Tangkis</button>
                                    <button data-filter=".cat--Jetski">Jetski</button> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filter -->


                    <div class="row"><!-- row product list -->
                        <div class="product__list another-product-style"><!-- product list -->

                           
                            <!-- BASKET -->
                            
                              <!-- kat2 --><?php foreach ($productsBasket as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--basket col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>


                            

                            <!-- kat2 --><?php foreach ($productsSepakbola as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--sepakbola col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank"href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                 </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>
                            
                            <!-- FUTSAL -->
                        

                             <!-- kat2 --><?php foreach ($productsFutsal as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--futsal col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>
                            
                            <!-- kat2 --><?php foreach ($productsFutsal1 as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--futsal col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- VOLI -->
                             <!-- kat2 --><?php foreach ($productsBolaVoli as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--voli col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                             <!-- kat2 --><?php foreach ($productsVoli as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--voli col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                                 <!-- kat2 --><?php foreach ($productsTakraw as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--takraw col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>



                            

                            <!-- OLAHRAGA AIR -->
                             <!-- kat2 --><?php foreach ($products9 as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--jaketpelampung col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- OLAHRAGA PERORANGAN -->
                            <!-- SEPEDA -->
                             <!-- kat2 --><?php foreach ($products10 as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--sepeda col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- HOVER BOARD -->
                            <!-- kat2 --><?php foreach ($productsHoverBoard as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--hoverboard col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            
                            <!-- SEPATU RODA -->
                            <!-- kat2 --><?php foreach ($productsLompatTali as $product) : ?><!-- Ekomers besar -->
                                <div class="col-md-3 single__pro col-lg-3 cat--lompattali col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>


                            <!-- OLAHRAGA RAKET -->
                            <!-- BULU TANGKIS -->
                            <!-- kat2 --><?php foreach ($products11 as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--bulutangkis col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- SQUASH -->
                            <!-- kat2 --><?php foreach ($productsSquash as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--squash col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- TENIS -->
                            <!-- kat2 --><?php foreach ($productsTenis as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--tenis col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>





                              <!-- kat2 --><?php foreach ($productsJetski as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--jetski col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                               <!-- kat2 --><?php foreach ($productsKayak as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--kayak col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                             <!-- kat2 --><?php foreach ($productsRenang as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--renang col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                             <!-- kat2 --><?php foreach ($productsDiving as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--diving col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- SURFING -->
                             <!-- kat2 --><?php foreach ($productsSurfing as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--surfing col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- OLAHRAGA REKREASI -->
                            <!-- HIKING -->
                             <!-- kat2 --><?php foreach ($productsHiking as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--hiking col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>

                            <!-- GOLF -->
                            <!-- kat2 --><?php foreach ($productsGolf as $product) : ?><!-- Ekomers besar -->
                            <div class="col-md-3 single__pro col-lg-3 cat--golf col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><img style="width: 300px; height: 200px;" src="<?= $product['img'] ?>" alt="product images"></a>
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><?= $product['title'] ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price"><?= $product['harga'] ?></li>
                                            <li><img style="width: 70px; text-align: right;" src="<?= $product['logo'] ?>"></li>
                                        </ul>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-primary">Tambah ke keranjang</button></a>
                                        <a target="_blank" href="https://iprice.co.id<?= $product['link'] ?>"><button class="btn btn-success">Detail</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- kat2 --><?php endforeach; ?>


                           







                            

                            
                            <!-- kat4 -->

                        </div><!-- product list -->
                    </div><!-- row product list -->

                </div><!-- product container -->
            </div><!-- container awal -->
        </section><!-- Section -->