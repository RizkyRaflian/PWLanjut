<?php
include 'conn.php';
include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>TOKO ABC</title>
<link rel="stylesheet" type="text/css"
href="assets/css/css.css">
</head>
<body>
<div class="top-gray"></div>
<div class="header">
<div class="big-logo">ABC</div>
<?php include 'menu.php';?>
</div>
<div class="content"><div class="container">
<?php
if(!is_null(get('p'))){
switch (get('p')) {
case 'home':
inc('home');
break;
case 'toko':
switch (get('m')) {
case 'home':
inc('tampilan/toko/all');
break;
case 'add':
inc('tampilan/toko/add');
break;
case 'edit':
inc('tampilan/toko/edit');
break;
default:
inc('tampilan/toko/all');
break;
}
break;
default:
inc('home');
break;
}
}else{ inc('home'); } ?>
</div></div>
</body>
</html>