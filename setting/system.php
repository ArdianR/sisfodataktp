<?php
        if($_GET) 
          {
            switch($_GET['hal']) 
              {
                case 'list-berita' :
                  if(!file_exists("pages/blog.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/blog.php" ?>
                
              <?php 
                break;
                case 'lihat':
                  if(!file_exists("pages/blog-view.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/blog-view.php" ?>
                            
              <?php 
                break;
                case 'layanan':
                  if(!file_exists("pages/layanan.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan.php" ?>

                <?php 
                break;
                case 'layanan-kategori':
                  if(!file_exists("pages/layanan-kategori.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-kategori.php" ?>
            
              <?php 
                break;
                case 'detail':
                  if(!file_exists("pages/layanan-detail.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/layanan-detail.php" ?>

                <?php 
                break;
                case 'tentang':
                  if(!file_exists("pages/tentang.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/tentang.php" ?>
            
              <?php 
                break;
                case 'home':
                  if(!file_exists("../dulor/pages/dashboard.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/dashboard.php" ?>
            
              <?php 
                break;
                case 'user' :
                  if(!file_exists("../dulor/pages/user.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "../dulor/pages/user.php" ?>
                
              <?php 
                break; 
                case 'tambah-user':
                  if(!file_exists("../dulor/pages/user-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/user-add.php" ?>
            
              <?php 
                break;
                case 'edit-user':
                  if(!file_exists("../dulor/pages/user-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/user-edit.php" ?>
                            
              <?php 
                break;
                case 'pengaturan':
                  if(!file_exists("../dulor/pages/setting.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/setting.php" ?>
                            
              <?php 
                break;
                case 'kategori':
                  if(!file_exists("../dulor/pages/kategori.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/kategori.php" ?>
                            
              <?php 
                break;
                case 'tambah-kategori':
                  if(!file_exists("../dulor/pages/kategori-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/kategori-add.php" ?>
                            
              <?php 
                break;
                case 'ubah-kategori':
                  if(!file_exists("../dulor/pages/kategori-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/kategori-edit.php" ?>


              <?php 
                break;
                case 'tambah-layanan':
                  if(!file_exists("../dulor/pages/layanan-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/layanan-add.php" ?>

              

              <?php 
                break;
                case 'xlayanan':
                  if(!file_exists("../dulor/pages/layanan.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/layanan.php" ?>

               <?php 
                break;
                case 'lihat-layanan':
                  if(!file_exists("../dulor/pages/layanan-view.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/layanan-view.php" ?>

                <?php 
                break;
                case 'ubah-layanan':
                  if(!file_exists("../dulor/pages/layanan-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/layanan-edit.php" ?>

              <?php 
                break;
                case 'tambah-berita':
                  if(!file_exists("../dulor/pages/berita-add.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/berita-add.php" ?>

                <?php 
                break;
                case 'berita':
                  if(!file_exists("../dulor/pages/berita.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/berita.php" ?>

                <?php 
                break;
                case 'ubah-berita':
                  if(!file_exists("../dulor/pages/berita-edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/pages/berita-edit.php" ?>


                            
              <?php 
                break;
              }
          }
              ?>