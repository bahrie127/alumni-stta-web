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

                    <a href="<?php echo $base_url?>/tracer/kuisioner" class="list-group-item active justify-content-between">
                        <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i>Kuisioner</span>
                    </a>

                    <!-- Profile -->
                    <a href="<?php echo $base_url?>/tracer/edit_profil" class="list-group-item list-group-item-action justify-content-between">
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
                <!-- User Block -->
                <div class="text-center">
                    <h2>KUESIONER PELACAKAN ALUMNI</h2>
                </div>
                <div id="shortcode1">
                    <div class="shortcode-html">
                        <!-- General Controls -->
                        <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="<?php echo $base_url?>/tracer/kuisioner_submit" method="POST">

                            <h4><strong>Data Diri</strong></h4>

                            <div class="form-group g-mb-15">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="nim" name="nim" value="<?php echo $mhs2->nim?>" readonly>
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="nama">Password</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="nama" value="<?php echo $mhs->nama?>" readonly>
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="noHp">Nomor HP</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="noHp" value="<?php echo $mhs2->hp ?>" readonly>
                            </div>

                            <hr class="g-brd-gray-light-v4 g-mx-minus-30">

                            <h4><strong>BAGIAN I Perusahaan/Instansi Pertama Kali</strong></h4>

                            <div class="form-group g-mb-15">
                                <label for="tahunlulus">1. Tahun anda Lulus ?</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="tahunlulus" name="bag1_tahun_lulus" value="<?php if(isset($kuis)) echo $kuis->bag1_tahun_lulus;?>">
                            </div>
                            <div class="form-group g-mb-15">
                                <label for="perusahaan1">2. Nama perusahaan/instansi ?</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="perusahaan1" name="bag1_nama_instansi" value="<?php if(isset($kuis)) echo $kuis->bag1_nama_instansi;?>">
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="posisi1">3. Posisi/jabatan ?</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="posisi1" name="bag1_posisi_jabatan" value="<?php if(isset($kuis)) echo $kuis->bag1_posisi_jabatan;?>">
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="tunggu1">4. Waktu tunggu memperoleh pekerjaan(dalam bulan) ?</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="tunggu1" name="bag1_waktu_tunggu_pek" value="<?php if(isset($kuis)) echo $kuis->bag1_waktu_tunggu_pek;?>">
                            </div>

                            <fieldset class="form-group g-mb-25">
                                <legend class="g-font-size-default">5. Gaji pertama yang diterima ?</legend>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag1_gaji_pertama" id="gaji1" value="lebih kecil 1 juta" <?php if(isset($kuis)) {if($kuis->bag1_gaji_pertama=='lebih kecil 1 juta') echo 'checked';}?>> Lebih Kecil RP 1 Juta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag1_gaji_pertama" id="gaji1" value="1-2 juta" <?php if(isset($kuis)) {if($kuis->bag1_gaji_pertama=='1-2 juta') echo 'checked';}?>> Rp 1 juta - Rp 2 juta
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag1_gaji_pertama" id="gaji1" value="2-3 juta" <?php if(isset($kuis)) {if($kuis->bag1_gaji_pertama=='2-3 juta') echo 'checked';}?>> Rp 2 juta - Rp 3 juta
                                    </label>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag1_gaji_pertama" id="gaji1" value="lebih besar 3 juta" <?php if(isset($kuis)) {if($kuis->bag1_gaji_pertama=='lebih besar 3 juta') echo 'checked';}?>> Lebih Besar Rp 3 juta
                                    </label>
                                </div>

                            </fieldset>

                            <fieldset class="form-group g-mb-25">
                                <legend class="g-font-size-default">6. Bidang pekerjaan ?</legend>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag1_bidang_pek" id="bidang1" value="sesuai pendidikan" <?php if(isset($kuis)) {if($kuis->bag1_bidang_pek=='sesuai pendidikan') echo 'checked';}?>> Sesuai Jurusan/Pendidikan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag1_bidang_pek" id="bidang1" value="tidak sesuai pendidikan" <?php if(isset($kuis)) {if($kuis->bag1_bidang_pek=='tidak sesuai pendidikan') echo 'checked';}?>> Tidak Sesuai Jurusan/Pendidikan
                                    </label>
                                </div>
                            </fieldset>

                            <hr class="g-brd-gray-light-v4 g-mx-minus-30">

                            <h4><strong>BAGIAN II Perusahaan/Instansi Saat Ini</strong></h4>

                            <div class="form-group g-mb-15">
                                <label for="perusahaan2">7. Nama perusahaan/instansi</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="perusahaan2" name="bag2_nama_instansi" value="<?php if(isset($kuis)) echo $kuis->bag2_nama_instansi;?>">
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="jabatan2">8. Posisi/jabatan</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="jabatan2" name="bag2_posisi_jabatan" value="<?php if(isset($kuis)) echo $kuis->bag2_posisi_jabatan;?>">
                            </div>

                            <fieldset class="form-group g-mb-25">
                                <legend class="g-font-size-default">9. Bidang pekerjaan ?</legend>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag2_bidang_pek" id="bidang2" value="sesuai pendidikan" <?php if(isset($kuis)) {if($kuis->bag2_bidang_pek=='sesuai pendidikan') echo 'checked';}?>> Sesuai Jurusan/Pendidikan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag2_bidang_pek" id="bidang2" value="tidak sesuai pendidikan" <?php if(isset($kuis)) {if($kuis->bag2_bidang_pek=='tidak sesuai pendidikan') echo 'checked';}?>> Tidak Sesuai Jurusan/Pendidikan
                                    </label>
                                </div>
                            </fieldset>

                            <hr class="g-brd-gray-light-v4 g-mx-minus-30">

                            <h4><strong>BAGIAN III Informasi UMUM</strong></h4>

                            <fieldset class="form-group g-mb-25">
                                <legend class="g-font-size-default">10. Kategori pekerjaan saat ini?</legend>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="Lembaga pemerintah" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='Lembaga pemerintah') echo 'checked';}?>> Lembaga Pemerintah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="Perusahaan asing" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='Perusahaan asing') echo 'checked';}?>> Perusahaan Asing
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="BUMN" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='BUMN') echo 'checked';}?>> BUMN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="LSM" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='LSM') echo 'checked';}?>> LSM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="Wiraswasta" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='Wiraswasta') echo 'checked';}?>> Wiraswasta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="Perusahaan Nasional" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='Perusahaan Nasional') echo 'checked';}?>> Perusahaan Nasional
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="Pendidikan" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='Pendidikan') echo 'checked';}?>> Pendidikan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_kategori_pek_sekarang" id="kategori" value="Wirausaha" <?php if(isset($kuis)) {if($kuis->bag3_kategori_pek_sekarang=='Wirausaha') echo 'checked';}?>> Wirausaha
                                    </label>
                                </div>
                            </fieldset>

                            <fieldset class="form-group g-mb-25">
                                <legend class="g-font-size-default">11. Apakah penguasaan Bahasa Asing (Bhs.Inggris) menjadi syarat utama bagi karyawan di tempat Anda?</legend>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_syarat_bhs_asing" id="inggris" value="Ya" <?php if(isset($kuis)) {if($kuis->bag3_syarat_bhs_asing=='Ya') echo 'checked';}?>> Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input mr-1" name="bag3_syarat_bhs_asing" id="inggris" value="Tidak" <?php if(isset($kuis)) {if($kuis->bag3_syarat_bhs_asing=='Tidak') echo 'checked';}?>> Tidak
                                    </label>
                                </div>
                            </fieldset>

                            <div class="form-group g-mb-15">
                                <label for="yaInggris">Apabila Ya, Tuliskan alasannya</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="yaInggris" name="bag3_alasan_bhs_asing" value="<?php if(isset($kuis)) echo $kuis->bag3_alasan_bhs_asing;?>">
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="matkul">12. Sebutkan 3 ilmu dari matakuliah apa yang paling banyak diterapkan selama bekerja di perusahaan ini.</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="matkul" name="bag3_matkul_1" value="<?php if(isset($kuis)) echo $kuis->bag3_matkul_1;?>">
                                <input type="text" class="form-control form-control-md rounded-0" id="matkul" name="bag3_matkul_2" value="<?php if(isset($kuis)) echo $kuis->bag3_matkul_2;?>">
                                <input type="text" class="form-control form-control-md rounded-0" id="matkul" name="bag3_matkul_3" value="<?php if(isset($kuis)) echo $kuis->bag3_matkul_3;?>">
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="materi">13. Materi apa yang harus ditambah untuk peningkatan kemampuan lulusan STTA?</label>
                                <input type="text" class="form-control form-control-md rounded-0" id="materi" name="bag3_materi_1" value="<?php if(isset($kuis)) echo $kuis->bag3_materi_1;?>">
                                <input type="text" class="form-control form-control-md rounded-0" id="materi" name="bag3_materi_2" value="<?php if(isset($kuis)) echo $kuis->bag3_materi_2;?>">
                                <input type="text" class="form-control form-control-md rounded-0" id="materi" name="bag3_materi_3" value="<?php if(isset($kuis)) echo $kuis->bag3_materi_3;?>">
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="saranstta">14. Apa saran Anda untuk perbaikan kurikulum Jurusan di STTA</label>
                                <textarea class="form-control form-control-md rounded-0" id="saranstta" name="saran_stta"><?php if(isset($kuis)) echo $kuis->saran_stta;?></textarea>
                            </div>

                            <div class="form-group g-mb-15">
                                <label for="saranstudi">15. Apa saran Anda untuk perbaikan pengelolaan program studi?</label>
                                <textarea class="form-control form-control-md rounded-0" id="saranstudi" name="saran_prodi"><?php if(isset($kuis)) echo $kuis->saran_prodi;?></textarea>
                            </div>

                            <button type="submit" class="btn btn-md u-btn-primary rounded-0">Send</button>
                            <button type="reset" class="btn btn-md u-btn-primary rounded-0">Reset</button>
                        </form>
                        <!-- End General Controls -->
                    </div>
                </div>

            </div>
            <!-- End Profle Content -->
        </div>
    </div>
</section>
<!-- End News Content -->