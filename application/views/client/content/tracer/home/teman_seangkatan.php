<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!-- News Content -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row">
            <!-- Profile Sidebar -->
            <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                <!-- User Image -->
                <div class="u-block-hover g-pos-rel">
                    <figure>
                        <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo $resource_path ?>images/img5.jpg" alt="Image User">
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
                    <a href="<?php echo $base_url?>/tracer/edit_profil" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i>Edit Profile</span>
                    </a>
                    <!-- End Profile -->

                    <!-- Users Contacts -->
                    <a href="<?php echo $base_url?>/tracer/teman" class="list-group-item active justify-content-between">
                        <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i>Teman Seangkatan</span>
                    </a>
                    <!-- End Users Contacts -->

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
                <div class="text-center">
                    <h2>DAFTAR TEMAN SEANGKATAN SEJURUSAN</h2>
                </div>
                <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>NO</td>
                        <th>NIM</td>
                        <th>NAMA</td>
                    </tr>
                    </thead>
                        <tbody>
                        <tr>
                            <td><font type=dauphin size=2>1</td>
                            <td align=center><font type=dauphin size=2>08030001</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030001&action=temanangkatan>HIZKIA ALPRIANTA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>2</td>
                            <td align=center><font type=dauphin size=2>08030002</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030002&action=temanangkatan>ZHULFA ARIF HIDAYAT</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>3</td>
                            <td align=center><font type=dauphin size=2>08030003</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030003&action=temanangkatan>SURYONO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>4</td>
                            <td align=center><font type=dauphin size=2>08030005</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030005&action=temanangkatan>WAWAN QURNIAWAN</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>5</td>
                            <td align=center><font type=dauphin size=2>08030006</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030006&action=temanangkatan>EKO SURYANTO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>6</td>
                            <td align=center><font type=dauphin size=2>08030008</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030008&action=temanangkatan>CHRIS TRI WIDYARTO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>7</td>
                            <td align=center><font type=dauphin size=2>08030009</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030009&action=temanangkatan>ATIKA RINA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>8</td>
                            <td align=center><font type=dauphin size=2>08030010</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030010&action=temanangkatan>OSCAR YUDEA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>9</td>
                            <td align=center><font type=dauphin size=2>08030011</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030011&action=temanangkatan>NI KADEK CERYNA DEWI</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>10</td>
                            <td align=center><font type=dauphin size=2>08030012</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030012&action=temanangkatan>MEGA LESYA MUKTI</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>11</td>
                            <td align=center><font type=dauphin size=2>08030013</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030013&action=temanangkatan>BAGINDA SURYANTO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>12</td>
                            <td align=center><font type=dauphin size=2>08030014</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030014&action=temanangkatan>INDRA USMANAN</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>13</td>
                            <td align=center><font type=dauphin size=2>08030018</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030018&action=temanangkatan>ADITYA WISNU PRATAMA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>14</td>
                            <td align=center><font type=dauphin size=2>08030020</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030020&action=temanangkatan>IFRISIMA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>15</td>
                            <td align=center><font type=dauphin size=2>08030023</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030023&action=temanangkatan>PRAYITNO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>16</td>
                            <td align=center><font type=dauphin size=2>08030029</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030029&action=temanangkatan>WIDHI MAULA ARSYADANI</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>17</td>
                            <td align=center><font type=dauphin size=2>08030030</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030030&action=temanangkatan>DANNY MARTA SAPUTRA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>18</td>
                            <td align=center><font type=dauphin size=2>08030032</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030032&action=temanangkatan>SINTA TRI PAMUNGKAS</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>19</td>
                            <td align=center><font type=dauphin size=2>08030035</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030035&action=temanangkatan>SAIFUL BAHRI</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>20</td>
                            <td align=center><font type=dauphin size=2>08030036</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030036&action=temanangkatan>WAHYUDI APRIADI</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>21</td>
                            <td align=center><font type=dauphin size=2>08030037</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030037&action=temanangkatan>AKBAR MAULANA TIRTA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>22</td>
                            <td align=center><font type=dauphin size=2>08030042</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030042&action=temanangkatan>HERU CHRISTIANTO WARDIO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>23</td>
                            <td align=center><font type=dauphin size=2>08030044</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030044&action=temanangkatan>AGNI AKHBAR</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>24</td>
                            <td align=center><font type=dauphin size=2>08030045</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030045&action=temanangkatan>GIDEON PANDU WINATA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>25</td>
                            <td align=center><font type=dauphin size=2>08030047</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030047&action=temanangkatan>KHAIRUR RAZIKIN</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>26</td>
                            <td align=center><font type=dauphin size=2>08030050</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030050&action=temanangkatan>SIGIT WIRANTO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>27</td>
                            <td align=center><font type=dauphin size=2>08030051</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030051&action=temanangkatan>MUHAMMAD ZAINAL MUTTAQIN</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>28</td>
                            <td align=center><font type=dauphin size=2>08030054</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030054&action=temanangkatan>FEBY ROCHMAN ARIDHO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>29</td>
                            <td align=center><font type=dauphin size=2>08030055</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030055&action=temanangkatan>NGADIYONO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>30</td>
                            <td align=center><font type=dauphin size=2>08030056</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030056&action=temanangkatan>RICKY ADITYA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>31</td>
                            <td align=center><font type=dauphin size=2>08030057</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030057&action=temanangkatan>AGHNIYATUN NAFINGAH</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>32</td>
                            <td align=center><font type=dauphin size=2>08030058</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030058&action=temanangkatan>AGUS BUDI CHRISNAWAN</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>33</td>
                            <td align=center><font type=dauphin size=2>08030060</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030060&action=temanangkatan>WAHYU IRAWAN</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>34</td>
                            <td align=center><font type=dauphin size=2>08030061</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030061&action=temanangkatan>RAFFLIAN YHUNATA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>35</td>
                            <td align=center><font type=dauphin size=2>08030062</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030062&action=temanangkatan>KRISTIN VERONICA MANTERO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>36</td>
                            <td align=center><font type=dauphin size=2>08030066</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030066&action=temanangkatan>ASTIKA AYUNING TYAS</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>37</td>
                            <td align=center><font type=dauphin size=2>08030067</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030067&action=temanangkatan>RIFDAN MUNTAQI</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>38</td>
                            <td align=center><font type=dauphin size=2>08030070</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030070&action=temanangkatan>WAHYU HERMAWAN</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>39</td>
                            <td align=center><font type=dauphin size=2>08030073</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08030073&action=temanangkatan>SUWITO</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>40</td>
                            <td align=center><font type=dauphin size=2>08130071</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08130071&action=temanangkatan>RESTI ADELISA</a></td>
                        </tr>
                        <tr>
                            <td><font type=dauphin size=2>41</td>
                            <td align=center><font type=dauphin size=2>08130076</td>
                            <td><font type=dauphin size=2><a href=<?php echo $base_url ?>/tracer/profil?nim=08130076&action=temanangkatan>GILANG SONAR AMANU</a></td>
                        </tr>
                        </tbody>
                </table>
                </div>

            </div>
            <!-- End Profle Content -->
        </div>
    </div>
</section>
<!-- End News Content -->