<body id="body">


    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">

        <div class="intro-content">
            <?php foreach($sekolah as $s): ?>
            <h2><?php echo $s->nama ?></h2>
            <div>
                <a href="#" data-toggle="modal" data-target="#daftarModal" class="btn-get-started scrollto">Daftar</a>
            </div>
            <?php endforeach; ?>
        </div>

        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url('img/intro-carousel/1.png');"></div>

        </div>

    </section><!-- #intro -->

    <main id="main">
        <!--==========================
      Testimonials Section
    ============================-->
        <section id="testimonials" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Alumni </h2>
                    
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <?php foreach($alumni as $a): ?>
                    <div class="testimonial-item">
                        <p>
                            <img src="<?php echo base_url();?>assets/img/quote-sign-left.png" class="quote-sign-left"
                                alt=""><?php echo $a->kutipan ?>
                            <img src="<?php echo base_url();?>assets/img/quote-sign-right.png" class="quote-sign-right"
                                alt="">
                        </p>
                        <img  src="<?php echo base_url();?>upload/alumni/<?php echo $a->gambar ?>"
                            class="testimonial-img" alt="">
                        <h3><?php echo $a->nama ?></h3>
                        <h4><?php echo $a->titel ?></h4>
                    </div>

                    <?php endforeach; ?>

                </div>

            </div>
        </section>

        <section id="pengumuman" class="row fadeInUp pengumuman">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Pengumuman Seleksi</h3>
                        <?php if ($pengumuman != "Tutup") {?>
                        <form action="<?php echo base_url('pages/detailPengumuman'); ?>" method="post" role="form">
                            <div class="form-group">
                                <label style="color:white" for="kode">Masukkan NISN</label>
                                <input type="char" class="form-control" name="nisn" id="nisn" aria-describedby="nisn"
                                    placeholder="Nomor Indusk Siswa">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <h5 class="border border-danger" style="text-align:center; font-weight:bold; color:red">
                                <?php echo $this->session->flashdata('pendaftar');?></h5>
                            <button type="submit" class="btn btn-primary">Lihat</button>
                        </form>
                        <?php

                        }else{?>
                        <?php foreach($sekolah as $s): ?>
                        <h3 style="color:white"><?php echo $s->pengumuman ?></h3>
                        <?php endforeach ?>
                        <?php
                        } ?>
                    </div>

                </div>

            </div>
        </section>


        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="row fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Kontak</h2>
                </div>

                <div class="row contact-info">
                    <?php foreach($sekolah as $s): ?>

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Alamat</h3>
                            <address><?php echo $s->alamat ?></address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Nomor Telp</h3>
                            <p><?php echo $s->nomor ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><?php echo $s->email?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="container mb-4">
                <?php foreach($maps as $m): ?>         
                <iframe
                    src="<?php echo $m->link ?>"
                    width="<?php echo $m->width ?>%" height="<?php echo $m->height ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <?php endforeach; ?>
            </div>


            <div class="container">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="<?php echo base_url('admin/email/kirim'); ?>" method="post" role="form"
                        class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Judul"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="pesan" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Pesan"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button data-toggle="modal" data-target="#cekEmail" type="submit">Kirim
                                Email</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>