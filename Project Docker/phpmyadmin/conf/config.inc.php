<?php
/* PhpMyAdmin Configuration */

/* Secret untuk enkripsi cookie */
$cfg['blowfish_secret'] = '123456789123456789123456789123456789';

/* Server Configuration */
$i = 0;
$i++;
$cfg['Servers'][$i]['host'] = 'mysql'; // Host MySQL (nama layanan dalam docker-compose.yml)
$cfg['Servers'][$i]['port'] = '3306'; // Port MySQL
$cfg['Servers'][$i]['user'] = 'user'; // Nama pengguna MySQL
$cfg['Servers'][$i]['password'] = 'userpassword'; // Kata sandi MySQL
$cfg['Servers'][$i]['AllowNoPassword'] = false; // Jangan izinkan login tanpa kata sandi

/* Direktori Temp */
$cfg['TempDir'] = '/tmp';

/* Pengaturan default */
$cfg['DefaultLang'] = 'en';
$cfg['DefaultCharset'] = 'utf-8';

/* Pengaturan Advanced */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['CheckConfigurationPermissions'] = false;
?>