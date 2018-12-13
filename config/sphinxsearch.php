<?php
return array(
    'host'    => '127.0.0.1', //Такие же хост и порт у вас должны быть прописаны в конфиге Сфинкса
    'port'    => 3306, //для данной конфигурации соответственно listen = 192.168.10.10:9312
    'timeout' => 30,
    'indexes' => array(
        'index_name' => array ( 'table' => 'articles', 'column' => 'id' )
    )
);