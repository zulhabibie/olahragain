        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 float-right-style">
          <!-- col lanjutan menu -->


        <section class="htc__product__area shop__page ptb--20 bg__white">
          <div class="container">
            <div class="htc__product__container">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter__menu__container">
                                <div class="product__menu">
                                    <button data-filter="*"  class="is-checked">All</button>
                                    <button data-filter=".cat--1">Menu Control 1</button>
                                    <button data-filter=".cat--2">Menu Control 2</button>
                                    <button data-filter=".cat--3">Menu Control 3</button>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="row">
            <div class="product__list another-product-style">

            <div class="col-md-12 single__pro col-lg-12 cat--1 col-sm-12 col-xs-12">
            <div class="product foo">
            <h1><strong> Menu Control 1 </strong></h1><br>
            <h3><strong> Navbar & Side Control Menu </strong></h3><br>
            <div class="row">
              <div class="col-lg-12">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Tambah Menu Baru</a>
                <div><br></div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Menu</th>
                      <th scope="col">Controller</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach($menu as $m) : ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $m['menu']; ?></td>
                      <td><?= $m['url']; ?></td>
                      <td><?= $m['icon']; ?></td>
                      <td><?= $m['is_active']; ?></td>
                      <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
            




            <div class="col-md-12 single__pro col-lg-12 col-sm-12 col-xs-12 cat--2">
            <div class="product foo">
            <h1><strong> Menu Control 2 </strong></h1><br>
            <h3><strong> Navbar Icon Menu & Side Menu </strong></h3><br>
            <div class="row">
              <div class="col-lg-12">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Tambah Menu Baru</a>
                <div><br></div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Menu</th>
                      <th scope="col">Controller</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach($menu2 as $m2) : ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $m2['menu']; ?></td>
                      <td><?= $m2['url']; ?></td>
                      <td><?= $m2['icon']; ?></td>
                      <td><?= $m2['is_active']; ?></td>
                      <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>




            <div class="col-md-12 single__pro col-lg-12 col-sm-12 col-xs-12 cat--3">
            <div class="product foo">
            <h1><strong> Menu Control 3 </strong></h1><br>
            <h3><strong> List Menu Inside Side Menu </strong></h3><br>
            <div class="row">
              <div class="col-lg-12">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal3">Tambah Menu Baru</a>
                <div><br></div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Menu</th>
                      <th scope="col">Controller</th>
                      <th scope="col">Icon</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach($menu3 as $m3) : ?>
                    <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $m3['menu']; ?></td>
                      <td><?= $m3['url']; ?></td>
                      <td><?= $m3['icon']; ?></td>
                      <td><?= $m3['is_active']; ?></td>
                      <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>



              
            </div>
          </div>
        </div>
      </div>
    </section>



          <!-- Modal1 -->
          <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Menu 1 Baru</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form action="">
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

          

          <!-- Modal2 -->
          <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Menu 2 Baru</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form action="">
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

         

          <!-- Modal3 -->
          <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Menu 3 Baru</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form action="">
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>

              </div>
            </div>
          </div>




<!-- penutup col menu -->
</div>
<!-- penutup menu -->
</div>
</div>
</div><br>
</section>