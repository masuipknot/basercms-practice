<?php
Configure::write('Security.salt', 'kRkLImY1mCKdkb4UZAkYd9DGkLggE5i0h2f1fgNZ');
Configure::write('Security.cipherSeed', '43546652025272963958756692286');
Configure::write('Cache.disable', false);
Configure::write('Cache.check', true);
Configure::write('BcEnv.siteUrl', 'http://basercms-practice.localhost:8888/');
Configure::write('BcEnv.sslUrl', '');
Configure::write('BcEnv.mainDomain', '');
Configure::write('BcApp.adminSsl', false);
Configure::write('BcApp.allowedPhpOtherThanAdmins', false);
Cache::config('default', array('engine' => 'File'));
Configure::write('debug', 0);
