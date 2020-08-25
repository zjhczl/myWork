<!DOCTYPE html>
<html lang="zh-hans">
<head>
 <meta charset="utf-8">
	<title>pdo.php</title>
</head>
<body>
 <?php 
    try{
    	$pdo=new PDO('mysql:host=localhost;dbname=zj','root','');
        $pdo->query('set names utf8');
    }
    catch(PDOException $e)
    {
    	$output='连接不到sql服务器';
    	echo $output;
    	exit();
    }
 ?>
</body>
</html>