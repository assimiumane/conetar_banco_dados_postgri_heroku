<?php 
    $host = "ec2-52-1-20-236.compute-1.amazonaws.com";
    $usernma = "ewkyvtgeowqfjf";
    $passwoed = "ca14347bd00152ed05d076f7e80b1cb957c7d3105c7a6193d2e0c23f9797334e";
    $data_base = "dvf1fou4dmq2s";
    $conecao = "";
    try {
        $conecao =
            new PDO("pgsql:host=$host;port=5432;dbname=$data_base", $usernma,$passwoed, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
            if ($_SERVER["POST"]) {
                $image = $_POST["image"];
                $past = "updata/nome.jpg";
                file_put_contents($past, base64_decode($image));
                echo json_encode('response'=>'Image Sucesso');
            }
        
    }catch (PDOException $e){
        echo $e->getMessage();
    }

?>
