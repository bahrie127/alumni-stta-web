<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!-- News Content -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row">
            <!-- Profile Sidebar -->
            <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                <!-- User Image -->
                <div class="u-block-hover g-pos-rel">
                    <figure>
                        <?php if($mhs2->foto=='' || $mhs2->foto==null){?>
                            <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo $resource_path ?>images/user.png" alt="image" style="height: 231px; width: 257px">
                        <?php }else{?>
                            <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo $resource_path ?>uploads/files/foto/<?php echo $mhs2->foto?>" alt="<?php echo $mhs->nama?>" style="height: 231px; width: 257px">
                        <?php }?>
                    </figure>
                </div>
                <!-- User Image -->

                <!-- Sidebar Navigation -->
                <div class="list-group list-group-border-0 g-mb-40">
                    <!-- Overall -->
                    <a href="<?php echo $base_url?>/tracer/home" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i>Home</span>
                    </a>
                    <!-- End Overall -->

                    <a href="<?php echo $base_url?>/tracer/kuisioner" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i>Kuisioner</span>
                    </a>

                    <!-- Profile -->
                    <a href="<?php echo $base_url?>/tracer/edit_profil" class="list-group-item active justify-content-between">
                        <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i>Edit Profile</span>
                    </a>
                    <!-- End Profile -->

                    <!-- Users Contacts -->
<!--                    <a href="--><?php //echo $base_url?><!--/tracer/teman" class="list-group-item list-group-item-action justify-content-between">-->
<!--                        <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i>Teman Seangkatan</span>-->
<!--                    </a>-->
                    <!-- End Users Contacts -->
                    <a href="<?php echo $base_url?>/tracer/upload_foto" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i>Upload Foto</span>
                    </a>
                    <!-- Comments -->
                    <a href="<?php echo $base_url?>/tracer/pesan" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i>Lihat Pesan</span>
                    </a>
                    <!-- End Comments -->

                    <!-- Settings -->
                    <a href="<?php echo $base_url?>/tracer/logout" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>Logout</span>
                    </a>
                    <!-- End Settings -->
                </div>
                <!-- End Sidebar Navigation -->

            </div>
            <!-- End Profile Sidebar -->

            <!-- Profle Content -->
            <div class="col-lg-9">
                <?php if($update_status!=""):?>
                <div class="alert alert-dismissible fade show g-bg-teal g-color-white rounded-0" role="alert">
                    <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="media">
    <span class="d-flex g-mr-10 g-mt-5">
      <i class="icon-check g-font-size-25"></i>
    </span>
        <span class="media-body align-self-center">
      <strong><?php echo $update_status?></strong>
    </span>
                    </div>
                </div>
                <?php endif; ?>
                <div class="text-center">
                    <h2>EDIT PROFIL ALUMNI</h2>
                </div>
                <div id="shortcode6">
                    <div class="shortcode-html">
                        <!-- Horizontal Forms (using the grid) -->
                        <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="<?php echo $base_url?>/tracer/update_alumni" method="post">
                            <h4><strong>IDENTITAS ALUMNI</strong></h4>
                            <hr>
                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" value="<?php echo $mhs2->nama?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="jurusan" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="jurusan" value="<?php echo $mhs2->tmp_lahir?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="angkatan" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="angkatan" value="<?php echo $mhs2->tgl_lahir?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="username" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="username" value="<?php echo $mhs2->jk?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="inputPassword3" value="<?php echo $mhs2->kewarganegaraan?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="inputEmail3" value="<?php echo $mhs2->agama?>" readonly>
                                </div>
                            </div>

                            <hr class="g-brd-gray-light-v4 g-mx-minus-30">

                            <h4><strong>DATA AKADEMIK</strong></h4>
                            <hr>
                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">a. Jurusan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" value="<?php echo $mhs->nm_prodi?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="jurusan" class="col-sm-3 col-form-label">b. NIM</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="jurusan" value="<?php echo $mhs2->nim?>"  name="nim" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="angkatan" class="col-sm-3 col-form-label">c. Strata/Jenjang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="angkatan" value="Strata 1" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="lahir" class="col-sm-3 col-form-label">d. Angkatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="lahir" value="20<?php echo substr($mhs2->nim,0,2)?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="username" class="col-sm-3 col-form-label">Tahun Lulus</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="username" value="<?php echo $mhs->tahun?>" readonly>
                                </div>
                            </div>

                            <hr class="g-brd-gray-light-v4 g-mx-minus-30">

                            <h4><strong>DATA KARIR</strong></h4>
                            <hr>
                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Instansi/Perusahaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="instansi" value="<?php echo $mhs2->instansi?>">
                                </div>
                            </div>
                            <div class="form-group row g-mb-15">
                                <label for="exampleTextarea" class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control form-control-md rounded-0" id="exampleTextarea" rows="4" name="alamatp"><?php echo $mhs2->alamatp?></textarea>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Kota</label>
                                <div class="col-sm-9">
                                    <select name="kabupaten">
                                        <?php foreach($kabupaten as $row):?>
                                        <option value="<?php echo $row->id_kabupaten?>" <?php if($row->id_kabupaten == $mhs2->kabupaten) echo 'selected'?>><?php echo $row->nama_kabupaten?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Provinsi</label>
                                <div class="col-sm-9">
                                    <select name="provinsi">
                                        <?php foreach($provinsi as $row):?>
                                            <option value="<?php echo $row->id_provinsi?>" <?php if($row->id_provinsi == $mhs2->provinsi) echo 'selected'?>><?php echo $row->nama_provinsi?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Negara</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="negara" value="<?php echo $mhs2->negara?>">
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="kodepos" value="<?php echo $mhs2->kodepos?>">
                                </div>
                            </div>
                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="notlp" value="<?php echo $mhs2->notlp?>">
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="jabatan" value="<?php echo $mhs2->jabatan?>">
                                </div>
                            </div>
                            <div class="form-group row g-mb-15">
                                <label for="exampleSelect1" class="col-sm-3 col-form-label">Kesesuaian Disiplin Ilmu</label>
                                <div class="col-sm-9">
                                <select class="form-control rounded-0" id="exampleSelect1" name="kesesuaian">
                                    <option value="Ya" <?php if($mhs2->kesesuaian == 'Ya') echo 'selected'?>>Ya</option>
                                    <option value="Tidak" <?php if($mhs2->kesesuaian == 'Tidak') echo 'selected'?>>Tidak</option>
                                </select>
                                </div>
                            </div>

<!--                            <hr class="g-brd-gray-light-v4 g-mx-minus-30">-->
<!--                            <h4><strong>PHOTO</strong></h4>-->
<!--                            <hr>-->
<!--                            <div class="form-group row g-mb-15">-->
<!--                                <label for="exampleInputFile" class="col-sm-3 col-form-label">Upload Photo</label>-->
<!--                                <div class="col-sm-9">-->
<!--                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">-->
<!--                                </div>-->
<!--                            </div>-->

                            <hr class="g-brd-gray-light-v4 g-mx-minus-30">
                            <h4><strong>DATA PRIBADI</strong></h4>
                            <hr>
                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">a. Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="alamats" value="<?php echo $mhs2->alamats?>">
                                </div>
                            </div>
                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">b. Kota</label>
                                <div class="col-sm-9">
                                    <select name="kabupaten1">
                                        <?php foreach($kabupaten as $row):?>
                                            <option value="<?php echo $row->id_kabupaten?>" <?php if($row->id_kabupaten == $mhs2->kabupaten1) echo 'selected'?>><?php echo $row->nama_kabupaten?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">b. Kode Pos</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="kode_post" value="<?php echo $mhs2->kode_post?>">
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">d. Provinsi</label>
                                <div class="col-sm-9">
                                    <select name="provinsi1">
                                        <?php foreach($provinsi as $row):?>
                                            <option value="<?php echo $row->id_provinsi?>" <?php if($row->id_provinsi == $mhs2->provinsi1) echo 'selected'?>><?php echo $row->nama_provinsi?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">e. Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="tlp1" value="<?php echo $mhs2->tlp1?>">
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">f. Handphone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="hp" value="<?php echo $mhs2->hp?>">
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">g. Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-md rounded-0" id="nama" name="email" value="<?php echo $mhs2->email?>">
                                </div>
                            </div>

                            <div class="form-group row g-mb-15">
                                <label for="nama" class="col-sm-3 col-form-label">h. Tentang Saya</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control form-control-md rounded-0" id="exampleTextarea" rows="4" name="ttgsaya"><?php echo $mhs2->ttgsaya?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-md u-btn-primary rounded-0">Send</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Horizontal Forms (using the grid) -->
                    </div>
                </div>

            </div>
            <!-- End Profle Content -->
        </div>
    </div>
</section>
<!-- End News Content -->