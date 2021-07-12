
                <!-- search bar --><section>
                <div class="container">
                <h1 style="text-align: center;">Cari</h1>

                <div>

                <?php echo form_open('shop/cari');?>
                  <div class="form-group">
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Produk">
                  </div>
                  <button type="submit" class="btn btn-primary form-control" id="btnCari" name="btnCari">Cari</button>
                <?php echo form_close();?>

                </div>
                <!-- search bar -->

                <hr><br>


<section class="htc__product__area shop__page ptb--50 bg__white">
                <?php foreach ($produk as $cb) : ?>

                            <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                <div class="product foo">
                                    <div class="product__inner">
                                        <div class="pro__thumb">
                                                <img src="<?php echo base_url().'/assets3/img/'.$cb->img ;?>" alt="product images">
                                        </div>
                                    </div>
                                    <div class="product__details">
                                        <h2><a href="product-details.html"><?php echo $cb->nama_cabe ?></a></h2>
                                        <ul class="product__price">
                                            <li class="new__price">Rp. <?php echo number_format($cb->harga,0,',','.') ?></li>
                                        </ul><p>Stok Tersedia : <?php echo $cb->stok ?></p><br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalbeli1<?php echo $cb->kode_cabe; ?>">Tambah ke keranjang</button>
                                        <?php echo anchor('shop/detailproduk/'.$cb->kode_cabe,'<button class="btn btn-success">Detail</button>') ?>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>
                          </section>


                </div>
                </section>