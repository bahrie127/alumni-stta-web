<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!-- News Content -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row">
            <!-- Articles Content -->
            <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                <article class="g-mb-60">
                    <header class="g-mb-30">
                        <h2 class="h1 g-mb-15">TRACER STUDY </h2>
                    </header>

                    <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                        <h4>Pencarian</h4>
                        <div id="shortcode6">
                            <div class="shortcode-html">
                                <!-- Horizontal Forms (using the grid) -->
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="<?php echo $base_url?>/tracer/search_result" method="post">
                                    <div class="form-group row g-mb-25">
                                        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" name="nama" id="namalengkap" placeholder="Nama Lengkap">
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <select class="form-control rounded-0" id="jurusan" name="jurusan">
                                                <option value="all">Semua Jurusan</option>
                                                <option value="40201">Teknik Penerbangan</option>
                                                <option value="55201">Teknik Informatika</option>
                                                <option value="21201">Teknik Mesin</option>
                                                <option value="26201">Teknik Industri</option>
                                                <option value="20201">Teknik Elektro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                                        <div class="col-sm-10">
                                            <select class="form-control rounded-0" id="angkatan" name="angkatan">
                                                <option value="all">Semua Angkatan</option>
                                                <option value="02">2002</option>
                                                <option value="03">2003</option>
                                                <option value="04">2004</option>
                                                <option value="05">2005</option>
                                                <option value="06">2006</option>
                                                <option value="07">2007</option>
                                                <option value="08">2008</option>
                                                <option value="09">2009</option>
                                                <option value="10">2010</option>
                                                <option value="11">2011</option>
                                                <option value="12">2012</option>
                                                <option value="13">2013</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-md u-btn-primary rounded-0">Cari</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Horizontal Forms (using the grid) -->
                            </div>
                        </div>

                        <div class="text-center">
                            <h4>
                                Daftar Nama Alumni
                            </h4>
                        </div>

                        <div id="shortcode5">
                            <div class="shortcode-html">
                                <?php if($is_found){?>
                                <!-- Table Bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Angkatan</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach($alumni as $row):?>
                                        <tr>
                                            <td>
                                                <button class="btn btn-md u-btn-primary rounded-0" onclick="window.location.href='<?php echo $base_url?>/tracer/validate/<?php echo $row->nim?>'">Daftar</button>
                                            </td>
                                            <td><?php echo $row->nim?></td>
                                            <td><a href="<?php echo $base_url ?>/tracer/profil/<?php echo $row->nim?>"><?php echo $row->nama?></a></td>
                                            <td><?php echo $row->nm_prodi?></td>
                                            <td>20<?php echo substr($row->nim,0,2)?></td>
                                        </tr>
                                        <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table Bordered -->
                                <?php }else{?>
                                    <div class="alert alert-danger" role="alert">
                                        <p class="text-center">Nama alumni tidak ditemukan</p>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                    </div>

                </article>

            </div>
            <!-- End Articles Content -->

            <?php $this->load->view("client/content/sidebar") ?>

        </div>
    </div>
</section>
<!-- End News Content -->