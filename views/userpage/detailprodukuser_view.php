<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url('assets/img/cabean.jpg');?>) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title" style="color: white;">Product Details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html" style="color: white;">Home</a>
                                  <span class="brd-separetor" style="color: white;">/</span>
                                  <span class="breadcrumb-item active" style="color: white;">Product Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details -->
        <section class="htc__product__details pt--120 pb--100 bg__white">
            <div class="container">
                <div class="row">

                    <?php foreach ($detailcabe as $detail): ?>

                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="product__details__container">

                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
                                        <img src="<?php echo base_url().'/upload/'.$detail->img ?>" alt="full-image">
                                        <input class="hidden" type="text" name="txtGambar" id="txtGambar" value="<?php echo $detail->img ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                        <div id="konfirmasi"></div>
                        <div class="htc__product__details__inner">
                            <div class="pro__detl__title">
                                <h2><strong><?php echo $detail->nama_cabe ?></strong></h2>
                                <input class="hidden" type="text" name="txtNamaCabe" id="txtNamaCabe" value="<?php echo $detail->nama_cabe ?>">
                            </div>
                            
                            <div class="pro__details">
                                <h6>"<?php echo $detail->nama_cabe ?> adalah produk cabe asli yang di panen dari kebun hidroponik dan 100% halal. "</h6>
                            </div>

                            <div class="pro__details">
                                <h5>Stok Tersedia : <?php echo $detail->stok ?> </h5>
                            </div>

                            <ul class="pro__dtl__prize">
                                <li>Rp. <?php echo number_format($detail->harga,0,',','.')  ?></li>
                                <input class="hidden" type="text" name="txtHarga" id="txtHarga" value="<?php echo $detail->harga ?>">
                            </ul>

                            <div class="product-action-wrap">
                                <div class="prodict-statas"><span>Jumlah :</span></div>
                                <div class="product-quantity">
                                    <form id='myform' method='POST' action='#'>
                                        <div class="product-quantity">
                                            <div>
                                                <input class="cart-plus-minus-box" type="number" class="text-center" name="txtJumlah" id="txtJumlah" value="1" max="<?php echo $detail->stok ?>" min="1">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <form class="login">
                                    <input type="text" placeholder="Masukkkan Alamat Pengiriman">
                                </form>
                            </div><br>
                            <ul class="pro__dtl__btn">
                                <a href="<?php echo site_url ('auth') ?>"><button class="btn btn-primary">BELI SEKARANG</button></a>
                                <a href="<?php echo base_url('shopuser');?>"><button class="btn btn-danger">KEMBALI</button></a>
                            </ul>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>