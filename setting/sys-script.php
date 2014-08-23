<?php
        if($_GET) 
          {
            switch($_GET['hal']) 
              {
                case 'user' :
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "../dulor/library/script-1.php" ?>
                
              <?php 
                break;

                
                case 'tambah-user':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>
            
              <?php 
                break;
                case 'home':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'edit-user':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>


                            
              <?php 
                break;
                case 'pengaturan':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'kategori':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'tambah-kategori':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'ubah-kategori':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'tambah-layanan':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'xlayanan':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'lihat-layanan':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'ubah-layanan':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                 <?php 
                break;
                case 'tambah-berita':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'berita':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>

                <?php 
                break;
                case 'ubah-berita':
                  if(!file_exists("../dulor/library/script-1.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "../dulor/library/script-1.php" ?>


              

                            
              <?php 
                break;
              }
          }
              ?>