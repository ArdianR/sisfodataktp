<?php
        if($_GET) 
          {
            switch($_GET['hal']) 
              {
                case 'list-berita' :
                  if(!file_exists("pages/blog-title.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/blog-title.php" ?>

              <?php 
                break;
                case 'lihat':
                  if(!file_exists("pages/view-title.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/view-title.php" ?>
            
              <?php 
                break;
                case 'layanan':
                  if(!file_exists("pages/layanan-title.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-title.php" ?>

                <?php 
                break;
                case 'layanan-kategori':
                  if(!file_exists("pages/layanan-kattitle.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-kattitle.php" ?>

                <?php 
                break;
                case 'tentang':
                  if(!file_exists("pages/tentang-title.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/tentang-title.php" ?>


            
              <?php 
                break;
                case 'detail' :
                  if(!file_exists("pages/detlayanan-title.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/detlayanan-title.php" ?>
                
              <?php 
                break;

                
                case 'home':
                  if(!file_exists("../dulor/pages/bread-dash.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-dash.php" ?>
            
              <?php 
                break;
                case 'user':
                  if(!file_exists("../dulor/pages/bread-user.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-user.php" ?>

                <?php 
                break;
                case 'tambah-user':
                  if(!file_exists("../dulor/pages/bread-user.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-user.php" ?>

                <?php 
                break;
                case 'edit-user':
                  if(!file_exists("../dulor/pages/bread-user.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-user.php" ?>

                <?php 
                break;
                case 'ubah-user':
                  if(!file_exists("../dulor/pages/bread-user.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-user.php" ?>


                            
              <?php 
                break;
                case 'pengaturan':
                  if(!file_exists("../dulor/pages/bread-set.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-set.php" ?>
                            
              <?php 
                break;
                case 'kategori':
                  if(!file_exists("../dulor/pages/bread-cat.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-cat.php" ?>
                            
              <?php 
                break;
                case 'tambah-kategori':
                  if(!file_exists("../dulor/pages/bread-cat.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-cat.php" ?>

                <?php 
                break;
                case 'ubah-kategori':
                  if(!file_exists("../dulor/pages/bread-cat.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-cat.php" ?>

                            
              <?php 
                break;
                case 'tambah-layanan':
                  if(!file_exists("../dulor/pages/bread-layanan.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-layanan.php" ?>

                <?php 
                break;
                case 'xlayanan':
                  if(!file_exists("../dulor/pages/bread-layanan.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-layanan.php" ?>

                 <?php 
                break;
                case 'ubah-layanan':
                  if(!file_exists("../dulor/pages/bread-layanan.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-layanan.php" ?>


              <?php 
                break;
                case 'lihat-layanan':
                  if(!file_exists("../dulor/pages/bread-layv.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-layv.php" ?>

              <?php 
                break;
                case 'tambah-berita':
                  if(!file_exists("../dulor/pages/bread-berita.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-berita.php" ?>

                <?php 
                break;
                case 'berita':
                  if(!file_exists("../dulor/pages/bread-berita.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-berita.php" ?>

                <?php 
                break;
                case 'ubah-berita':
                  if(!file_exists("../dulor/pages/bread-berita.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/bread-berita.php" ?>
                

              <?php 
                break;
                case '0x61/0x64/0x6e/0x73/0x6e':
                  if(!file_exists("pages/lap-ctf.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/lap-ctf.php" ?>

             

                            
              <?php 
                break;
              }
          }
              ?>