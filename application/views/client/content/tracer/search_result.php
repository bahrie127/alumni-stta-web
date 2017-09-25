<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
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
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
                                    <div class="form-group row g-mb-25">
                                        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="namalengkap" placeholder="Nama Lengkap">
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <select class="form-control rounded-0" id="jurusan">
                                                <option value="semua">Semua Jurusan</option>
                                                <option value="Teknik Penerbangan">Teknik Penerbangan</option>
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                                <option value="Teknik Elektro">Teknik Elektro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                                        <div class="col-sm-10">
                                            <select class="form-control rounded-0" id="jurusan">
                                                <option value="semua">Semua Angkatan</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-md u-btn-primary rounded-0" >Cari</button>
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
                                <!-- Table Bordered -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Angkatan</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>08030035</td>
                                            <td><a href="<?php echo $base_url ?>/tracer/profil">SAIFUL BAHRI</a></td>
                                            <td>TF</td>
                                            <td>2008</td>
                                            <td>
                                                <button class="btn btn-md u-btn-primary rounded-0" onclick="window.location.href='<?php echo $base_url?>/tracer/validate'">Daftar</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>09050083</td>
                                            <td><a href="<?php echo $base_url ?>/tracer/profil">SAIFUL BAHRI</a></td>
                                            <td>TP</td>
                                            <td>2009</td>
                                            <td>
                                                <button class="btn btn-md u-btn-primary rounded-0" onclick="window.location.href='<?php echo $base_url?>/tracer/validate'">Daftar</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table Bordered -->
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