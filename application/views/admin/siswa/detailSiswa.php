<?php foreach ($detailSiswa as $d): ?>
<div class="panel panel-default ">
    <div class="panel-heading">
        <h4 style="font-family:roboto; font-weight:bold">Detail Data Siswa (<?php echo $d->nama_siswa ?>) </h4>
    </div>


    <div class="panel-body">
        <form action="<?php echo base_url('admin/siswa/detailSiswa'); ?>" method="post" role="form">
            <div class="table-responsive">
                <table class="table table-stdiped table-bordered table-hover">
                    <?php foreach ($detailSiswa as $s): ?>
                    <label class="control-label">Diterima / Tidak Diterima / Belum Verivikasi</label>
                    <select style="height:35px" class="form-control" name="status_pendaftaran" id="status_pendaftaran">
                        <option value="<?php echo $s->status_pendaftaran ?>"><?php echo $s->status_pendaftaran ?>
                        </option>
                        <option value="Diterima">Diterima</option>
                        <option value="Belum Diverifikasi">Belum Diverifikasi</option>
                        <option value="Tidak Diterima">Tidak Diterima</option>
                    </select><br>


                    <tbody>

                        <tr>
                            <td width="200">Nomor Registrasi</td>
                            <td><b>00
                                    <?php echo $s->nisn;?>/SMK-PPDB/
                                    <?php echo date("y");?></b></td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>DATA SISWA</b></td>
                        </tr>

                        <tr>
                            <td>ID</td>
                            <td>
                                <input type="text" name="id" required="required" class="form-control"
                                    value="<?php echo $s->id;?>" placeholder="ID" readonly />
                            </td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>
                                <input maxlength="10" type="text" name="nisn" required="required" class="form-control"
                                    placeholder="Masukkan NISN" value="<?php echo $s->nisn ?>"
                                    onKeyPress="return hanyaAngka(event);" />
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>
                                <input maxlength="100" type="text" name="nama_siswa" required="required"
                                    class="form-control" value="<?php echo $s->nama_siswa;?>"
                                    placeholder="Nama Siswa" />
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select style="height:35px" class="form-control" name="jenis_kelamin" type="text"
                                    name="jenis_kelamin" id="jenis_kelamin" required>
                                    <option value="<?php echo $s->jenis_kelamin; ?>"><?php echo $s->jenis_kelamin; ?>
                                    </option>
                                    <option value="Laki - laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>

                                <input type="text" name="tempat_lahir" required="required" class="form-control"
                                    value="<?php echo $s->tempat_lahir;?>" placeholder="Tempat Lahir" />
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>

                                <input type="date" name="tanggal_lahir" required="required" class="date form-control"
                                    value="<?php echo $s->tanggal_lahir;?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Agama Siswa</td>
                            <td>

                                <select style="height:35px" class="form-control" name="agama" id="" required
                                    type="text">
                                    <option value="<?php echo $s->agama;?>"><?php echo $s->agama;?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Status Keluarga</td>
                            <td>

                                <select style="height:35px" class="form-control" name="status_keluarga"
                                    id="status_keluarga" required>
                                    <option value="<?php echo $s->status_keluarga;?>"><?php echo $s->status_keluarga;?>
                                    </option>
                                    <option value="Anak Kandung">Anak Kandung</option>
                                    <option value="Anak Angkat">Anak Angkat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Siswa</td>
                            <td>

                                <textarea id="alamat_siswa" name="alamat_siswa" class="form-control" minlength="10"
                                    rows="3" required="required"
                                    placeholder="Masukan Alamat Siswa"><?php echo $s->alamat_siswa;?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>HP</td>
                            <td>

                                <input maxlength="100" type="text" name="nomor_siswa" class="form-control"
                                    onKeyPress="return hanyaAngka(event);" value="<?php echo $s->nomor_siswa;?>"
                                    placeholder="Masukkan Nomor Handphone" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>DATA ORANGTUA / WALI</b></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td>
                                <input maxlength="200" type="text" name="nama_ayah" value="<?php echo $s->nama_ayah;?>"
                                    class="form-control" placeholder="Nama Ayah" />
                            </td>
                        </tr>
                        <tr>
                            <td>Pendidikan Ayah</td>
                            <td>

                                <select style="height:35px" class="form-control" name="pendidikan_ayah"
                                    id="pendidikan_ayah" maxlength="20" >
                                    <option value="<?php echo $s->pendidikan_ayah;?>"><?php echo $s->pendidikan_ayah;?>
                                    </option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD/MI">SD/MI</option>
                                    <option value="SMP/MTs">SMP/MTs</option>
                                    <option value="SMK/SMA/MA">SMK/SMA/MA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ayah</td>
                            <td>

                                <select style="height:35px" class="form-control" name="pekerjaan_ayah"
                                    id="pekerjaan_ayah" maxlength="20" >
                                    <option value="<?php echo $s->pekerjaan_ayah;?>"><?php echo $s->pekerjaan_ayah;?>
                                    </option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Tani">Tani</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Polri/TNI">Polri/TNI</option>
                                    <option value="Perangkat Desa">Perangkat Desa</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Penghasilan Ayah</td>
                            <td>

                                <select style="height:35px" class="form-control" name="penghasilan_ayah"
                                    id="penghasilan_ayah" maxlength="20" >
                                    <option value="<?php echo $s->penghasilan_ayah;?>">
                                        <?php echo $s->penghasilan_ayah;?></option>
                                    <option value="-500rb">-500rb</option>
                                    <option value="500-1jt">500-1jt</option>
                                    <option value="1jt-3jt">1jt-3jt</option>
                                    <option value="3jt-5jt">3jt-5jt</option>
                                    <option value="5jt-10jt">5jt-10jt</option>
                                    <option value="10jt+">10jt+</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tlp/HP Ayah</td>
                            <td>

                                <input maxlength="200" type="text" name="nomor_ayah"
                                    class="form-control" value="<?php echo $s->nomor_ayah;?>"
                                    onKeyPress="return hanyaAngka(event);" placeholder="Masukan Nomor Handphone" />
                            </td>
                        </tr>
                        <td>Nama Ibu</td>
                        <td>



                            <input maxlength="200" type="text" name="nama_ibu" value="<?php echo $s->nama_ibu;?>"
                                class="form-control" placeholder="Nama Ibu" />
                        </td>
                        </tr>
                        <tr>
                            <td>Pendidikan Ibu</td>
                            <td>

                                <select style="height:35px" class="form-control" name="pendidikan_ibu"
                                    id="pendidikan_ibu" >
                                    <option value="<?php echo $s->pendidikan_ibu;?>"><?php echo $s->pendidikan_ibu;?>
                                    </option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD/MI">SD/MI</option>
                                    <option value="SMP/MTs">SMP/MTs</option>
                                    <option value="SMK/SMA/MA">SMK/SMA/MA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ibu</td>
                            <td>

                                <select style="height:35px" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu"
                                    >
                                    <option value="<?php echo $s->pekerjaan_ibu;?>"><?php echo $s->pekerjaan_ibu;?>
                                    </option>
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
                            </td>
                        </tr>
                        <tr>
                            <td>Penghasilan Ibu</td>
                            <td>

                                <select style="height:35px" class="form-control" name="penghasilan_ibu"
                                    id="penghasilan_ibu" >
                                    <option value="<?php echo $s->penghasilan_ibu;?>"><?php echo $s->penghasilan_ibu;?>
                                    </option>
                                    <option value="-500rb">-500rb</option>
                                    <option value="500-1jt">500-1jt</option>
                                    <option value="1jt-3jt">1jt-3jt</option>
                                    <option value="3jt-5jt">3jt-5jt</option>
                                    <option value="5jt-10jt">5jt-10jt</option>
                                    <option value="10jt+">10jt+</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tlp/HP Ibu</td>
                            <td>

                                <input maxlength="100" type="text" name="nomor_ibu"
                                    class="form-control" value="<?php echo $s->nomor_ibu;?>"
                                    onKeyPress="return hanyaAngka(event);" placeholder="Masukkan Nomor Handphone" />
                            </td>
                        </tr>
                        <td>Nama Wali</td>
                        <td>

                            <input maxlength="200" type="text" name="nama_wali" value="<?php echo $s->nama_wali;?>"
                                 class="form-control" placeholder="Nama Wali" />
                        </td>
                        </tr>
                        <tr>
                            <td>Pendidikan Wali</td>
                            <td>

                                <select style="height:35px" class="form-control" name="pendidikan_wali"
                                    id="pendidikan_wali">
                                    <option value="<?php echo $s->pendidikan_wali;?>"><?php echo $s->pendidikan_wali;?>
                                    </option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD/MI">SD/MI</option>
                                    <option value="SMP/MTs">SMP/MTs</option>
                                    <option value="SMK/SMA/MA">SMK/SMA/MA</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Wali</td>
                            <td>

                                <select style="height:35px" class="form-control" name="pekerjaan_wali"
                                    id="pekerjaan_wali">
                                    <option value="<?php echo $s->pekerjaan_wali;?>"><?php echo $s->pekerjaan_wali;?>
                                    </option>
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
                            </td>
                        </tr>
                        <tr>
                            <td>Penghasilan Wali</td>
                            <td>

                                <select style="height:35px" class="form-control" name="penghasilan_wali"
                                    id="penghasilan_wali">
                                    <option value="<?php echo $s->penghasilan_wali;?>">
                                        <?php echo $s->penghasilan_wali;?></option>
                                    <option value="-500rb">-500rb</option>
                                    <option value="500-1jt">500-1jt</option>
                                    <option value="1jt-3jt">1jt-3jt</option>
                                    <option value="3jt-5jt">3jt-5jt</option>
                                    <option value="5jt-10jt">5jt-10jt</option>
                                    <option value="10jt+">10jt+</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>Tlp/HP Wali</td>
                            <td>

                                <input maxlength="100" type="text" name="nomor_wali"
                                    value="<?php echo $s->nomor_wali;?>" class="form-control"
                                    onKeyPress="return hanyaAngka(event);" placeholder="Masukkan Nomor Handphone" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>DATA ASAL SEKOLAH</b></td>
                        </tr>
                        <tr>
                            <td>NPSN Sekolah</td>
                            <td>

                                <input maxlength="200" type="text" name="npsn_sekolah" required="required"
                                    class="form-control" value="<?php echo $s->npsn_sekolah; ?>"
                                    placeholder="Masukkan Nomor NPSN Sekolah" onKeyPress="return hanyaAngka(event);" />
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Sekolah</td>
                            <td>

                                <input maxlength="200" type="text" name="nama_sekolah" required="required"
                                    class="form-control" value="<?php echo $s->nama_sekolah; ?>"
                                    placeholder="Asal Sekolah" />
                            </td>
                        </tr>
                        <tr>
                            <td>Status Sekolah</td>
                            <td>
                                <select style="height:35px" class="form-control" name="status_sekolah"
                                    id="status_sekolah" minlength="3" maxlength="20" required="">
                                    <option value="<?php echo $s->status_sekolah; ?>"><?php echo $s->status_sekolah; ?>
                                    </option>
                                    <option value="Negeri">Negeri</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                            </td>
                        </tr>
                        <td>Alamat Sekolah</td>
                        <td>

                            <textarea id="alamat_sekolah" name="alamat_sekolah" class="form-control" maxlength="100"
                                minlength="3" rows="3" required="required"
                                placeholder="Masukan Alamat Sekolah"><?php echo $s->alamat_sekolah; ?></textarea>
                        </td>
                        </tr>
                        </tr>
                        <td>Tahun Lulus</td>
                        <td>

                            <input maxlength="4" type="text" name="tahun_lulus" value="<?php echo $s->tahun_lulus; ?>"
                                required="required" class="form-control" placeholder="Tahun Lulus" onKeyPress="return hanyaAngka(event);" />
                        </td>
                        </tr>
                        <td>Tanggal Pendaftaran</td>
                        <td>
                            <input maxlength="200" type="text" name="tanggal_pendaftaran"
                                value="<?php echo $s->tanggal_pendaftaran; ?>" required="required" class="form-control"
                                readonly />
                        </td>
                        </tr>


                    </tbody>


                </table>
                <tr>
                    <td>
                        <button type="submit" style="font-family:roboto ; margin-right: 40px;"
                            class="btn btn-success pull-right">Simpan</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="<?php echo site_url('admin/siswa/delete/'.$s->id) ?>" class="btn btn-danger pull-left">
                            Hapus</a>
                    </td>
                </tr>
            </div>

            <?php endforeach; ?>

        </form>
        <!-- /.table-responsive -->
    </div>
    <div class="panel-footer">
        SMK Bina Utama Kendal
    </div>

</div><br><br><br><br>

<?php endforeach; ?>