<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br><br>
<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Data Siswa</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Data Orang Tua</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Data Wali</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Data Sekolah</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p>Data Nilai</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                <p>Langkah 6</p>
            </div>
        </div>
    </div>



    <form action="<?php echo base_url('admin/siswa/addPeserta'); ?>" method="post" role="form">


            <!-- Form Pertama -->

            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div>
                        <h3>DATA SISWA</h3><br>
                        <div class="form-group col-md-2 ">
                            <label class="control-label">NISN : *</label>
                            <input maxlength=10 minlength=10 type="text" name="nisn" required="required" class="form-control"
                                placeholder="Masukkan NISN" onKeyPress="return hanyaAngka(event);" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Nama Siswa : *</label>
                            <input maxlength="100" type="text" name="nama_siswa" required="required"
                                class="form-control" placeholder="Nama Siswa" />
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Jenis Kelamin : *</label>
                            <select style="height:35px" class="form-control" name="jenis_kelamin" type="text"
                                name="jenis_kelamin" id="jenis_kelamin" required>
                                <option value="Laki - laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>


                        </div>

                        <div class="form-group col-md-12">
                            <label class="control-label">Tempat Lahir : *</label>
                            <input type="text" name="tempat_lahir" required="required" class="form-control"
                                placeholder="Tempat Lahir" />
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Tanggal Lahir : *</label>
                            <input type="date" name="tanggal_lahir" required="required" class="date form-control"
                                placeholder="Contoh : 1996-05-08" />
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Agama : *</label>
                            <select style="height:35px" class="form-control" name="agama" id=""  type="text">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Status Dalam Keluarga : *</label>
                            <select style="height:35px" class="form-control" name="status_keluarga" id="status_keluarga">
                                <option value="">Pilih</option>
                                <option value="Anak Kandung">Anak Kandung</option>
                                <option value="Anak Angkat">Anak Angkat</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">No . HP Siswa : *</label>
                            <input maxlength="14" type="text" name="nomor_siswa" class="form-control"
                                onKeyPress="return hanyaAngka(event);" required="required" placeholder="Masukkan Nomor Handphone" />
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Alamat Siswa : *</label>
                            <textarea id="alamat_siswa" name="alamat_siswa" class="form-control" minlength="3" rows="3"
                                required="required" placeholder="Masukan Alamat Siswa"></textarea>

                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                </div>
            </div>

            <!-- Form Kedua -->
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3>DATA ORANG TUA</h3><br>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nama Ayah :</label>
                            <input maxlength="200" type="text" name="nama_ayah" class="form-control"
                                placeholder="Nama Ayah" />
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Pendidikan Ayah :</label>
                            <select style="height:35px" class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                                <option value="">Pilih</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD/MI">SD/MI</option>
                                <option value="SMP/MTs">SMP/MTs</option>
                                <option value="SMK/SMA/MA">SMK/SMA/MA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Pekerjanan Ayah :</label>
                            <select style="height:35px" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah"
                                maxlength="20" >
                                <option value="">Pilih</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Tani">Tani</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="PNS">PNS</option>
                                <option value="Polri/TNI">Polri/TNI</option>
                                <option value="Perangkat Desa">Perangkat Desa</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Penghasilan Ayah :</label>
                            <select style="height:35px" class="form-control" name="penghasilan_ayah"
                                id="penghasilan_ayah" maxlength="20" >
                                <option value="">Pilih</option>
                                <option value="-500rb">-500rb</option>
                                <option value="500-1jt">500-1jt</option>
                                <option value="1jt-3jt">1jt-3jt</option>
                                <option value="3jt-5jt">3jt-5jt</option>
                                <option value="5jt-10jt">5jt-10jt</option>
                                <option value="10jt+">10jt+</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">No. Telp / HP Ayah :</label>
                            <input maxlength="14" type="text" name="nomor_ayah"
                                class="form-control" onKeyPress="return hanyaAngka(event);"
                                placeholder="Masukan Nomor Handphone" />
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nama Ibu : </label>
                            <input maxlength="200" type="text" name="nama_ibu"  class="form-control"
                                placeholder="Nama Ibu" />
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Pendidikan Ibu : </label>
                            <select style="height:35px" class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                                <option value="">Pilih</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD/MI">SD/MI</option>
                                <option value="SMP/MTs">SMP/MTs</option>
                                <option value="SMK/SMA/MA">SMK/SMA/MA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Pekerjaan Ibu : </label>
                            <select style="height:35px" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                                <option value="">Pilih</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Tani">Tani</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="PNS">PNS</option>
                                <option value="Polri/TNI">Polri/TNI</option>
                                <option value="Perangkat Desa">Perangkat Desa</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Penghasilan Ibu : </label>
                            <select style="height:35px" class="form-control" name="penghasilan_ibu" id="penghasilan_ibu">
                                <option value="">Pilih</option>
                                <option value="-500rb">-500rb</option>
                                <option value="500-1jt">500-1jt</option>
                                <option value="1jt-3jt">1jt-3jt</option>
                                <option value="3jt-5jt">3jt-5jt</option>
                                <option value="5jt-10jt">5jt-10jt</option>
                                <option value="10jt+">10jt+</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">No. Telp / HP Ibu</label>
                            <input maxlength="14" type="text" name="nomor_ibu" class="form-control"
                                onKeyPress="return hanyaAngka(event);" placeholder="Masukkan Nomor Handphone" />
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                </div>
            </div>

            <!-- Form Ketiga -->

            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3>DATA WALI</h3><br>
                        <p>Jika ada wali data diisi, jika tidak ada tidak perlu di isi.</p>
                        <div class="form-group col-md-12">
                            <label class="control-label">Nama Wali :</label>
                            <input maxlength="200" type="text" name="nama_wali" class="form-control"
                                placeholder="Nama Wali" />
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Pendidikan Wali</label>
                            <select style="height:35px" class="form-control" name="pendidikan_wali"
                                id="pendidikan_wali">
                                <option value="">Pilih</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD/MI">SD/MI</option>
                                <option value="SMP/MTs">SMP/MTs</option>
                                <option value="SMK/SMA/MA">SMK/SMA/MA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Pekerjaan Wali</label>
                            <select style="height:35px" class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
                                <option value="">Pilih</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Tani">Tani</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="PNS">PNS</option>
                                <option value="Polri/TNI">Polri/TNI</option>
                                <option value="Perangkat Desa">Perangkat Desa</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Penghasilan Wali</label>
                            <select style="height:35px" class="form-control" name="penghasilan_wali"
                                id="penghasilan_wali">
                                <option value="">Pilih</option>
                                <option value="-500rb">-500rb</option>
                                <option value="500-1jt">500-1jt</option>
                                <option value="1jt-3jt">1jt-3jt</option>
                                <option value="3jt-5jt">3jt-5jt</option>
                                <option value="5jt-10jt">5jt-10jt</option>
                                <option value="10jt+">10jt+</option>
                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">No. Telp / HP Wali</label>
                            <input maxlength="100" type="text" name="nomor_wali" 
                                class="form-control" onKeyPress="return hanyaAngka(event);"
                                placeholder="Masukkan Nomor Handphone" />
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                </div>
            </div>

            <!-- Form Keempat -->

            <div class="row setup-content" id="step-4">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3>DATA SEKOLAH</h3><br>
                        <div class="form-group col-md-4">
                            <label class="control-label">NPSN Sekolah : *</label>
                            <input maxlength="8" minlength="8" type="text" name="npsn_sekolah" required="required"
                                class="form-control" placeholder="Masukkan Nomor NPSN Sekolah"
                                onKeyPress="return hanyaAngka(event);" />
                        </div>

                        <div class="form-group col-md-4">
                            <label class="control-label">Status Sekolah : *</label>
                            <select style="height:35px" class="form-control" name="status_sekolah" id="status_sekolah">
                                <option value="">Pilih</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Tahun Lulus : *</label>
                            <input maxlength="4" minlength="4" type="text" name="tahun_lulus" required="required"
                                class="form-control" placeholder="Tahun Lulus" onKeyPress="return hanyaAngka(event);" />
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Asal Sekolah : *</label>
                            <input maxlength="200" type="text" name="nama_sekolah" required="required"
                                class="form-control" placeholder="Asal Sekolah" />
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Alamat Sekolah : *</label>
                            <textarea id="alamat_sekolah" name="alamat_sekolah" class="form-control" required="required"
                                placeholder="Masukan Alamat Sekolah"></textarea>
                        </div>
                        
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                </div>
            </div>

            <!-- Form Kelima -->

            <div class="row setup-content" id="step-5">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3>Data Nilai Ujian Sekolah</h3><br>
                        <div class="form-group col-md-6">
                            <label class="control-label">IPA : *</label>
                            <input maxlength="3" type="text" name="ipa" required="required" class="form-control"
                                placeholder="Masukkan Nilai" onKeyPress="return hanyaAngka(event);" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Matematika : *</label>
                            <input maxlength="3" type="text" name="matematika" required="required" class="form-control"
                                placeholder="Masukkan Nilai" onKeyPress="return hanyaAngka(event);" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Bahasa Indonesia : *</label>
                            <input maxlength="3" type="text" name="bahasa_indonesia" required="required"
                                class="form-control" placeholder="Masukkan Nilai"
                                onKeyPress="return hanyaAngka(event);" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Bahasa Inggris : *</label>
                            <input maxlength="3" type="text" name="bahasa_inggris" required="required"
                                class="form-control" placeholder="Masukkan Nilai"
                                onKeyPress="return hanyaAngka(event);" />
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                </div>
            </div>

            <!-- Form Finish -->

            <div class="row setup-content" id="step-6">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3>Langkah 6</h3>
                        <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                    </div>
                </div>
            </div>
        </form>

</div>