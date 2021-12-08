<?php

$name = "images";

if(!is_dir($name)){

mkdir($name);

echo"criado com sucesso";

}

else{

    rmdir($name);

    echo " ja existe o diretorio: $name foi removido";

}



?>