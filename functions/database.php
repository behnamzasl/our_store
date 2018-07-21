<?php

$users_table = Array(////
    'name' => 'varchar(255) ' ,
    'lastname' => 'varchar(255) ',
    'username' => 'varchar(255) ',
    'password' => 'varchar(255) not null',
    'email' => 'varchar(255) not null',
    'created_at' => 'varchar(255)',
    'phone_num' => 'varchar(255) ',
    'invitation_code' => 'varchar(255) '
);

$store_table = Array(/////
    'name' => 'varchar(255)' ,
    'lastname' => 'varchar(255)',
    'store_name' => 'varchar(255) not null',
    'username' => 'varchar(255) not null',
    'password' => 'varchar(255) not null',
    'email' => 'varchar(255) not null',
    'has_permission' => 'bool',
    // 'created_at' => 'varchar(256) not null',
    'pics_folder' => 'varchar(256) not null',
    'address' => 'varchar(256) not null',
    'type' => 'varchar(256) not null'
);

$store_brand_table = array(/////
    'store_id' => 'int(11) not null',
    'brand_id' => 'int(11) not null',
    'product_type' => 'varchar(256) not null'
);

$brands_table = array(/////
    'name' => 'varchar(256) not null',
    'brand_pic' => 'varchar(256) not null',
    'persian_name' => 'varchar(256) not null'
);

$copons_table = Array(/////
    'store_id' => 'int(11) not null',
    'price' => 'int(11) not null',
    'p_price' => 'varchar(256) not null',
    'value' => 'int(11) not null',
    'p_value' => 'varchar(256)'
);

$users_copon_table = Array(///////
    'copon_id' => 'int(11) not null',
    'user_id' => 'int(11) not null',
    'quantity' => 'int(11)'
);


$addresses = Array(//////
    'store_id' => 'int(11) not null',
    'location' => 'text not null',
    'title' => 'varchar(255)'
);

// level 1 == superadministrator  level 2 == administrator level 3 == general level 4 == demo

function createTable ($name, $data) {
    global $db;
    //$q = "CREATE TABLE $name (id INT(9) UNSIGNED PRIMARY KEY NOT NULL";
    $db->rawQuery("DROP TABLE IF EXISTS $name");
    $q = "CREATE TABLE `$name` (id INT(15) UNSIGNED PRIMARY KEY AUTO_INCREMENT";
    foreach ($data as $k => $v) {
        $q .= ", `$k` $v";
    }
    $q .= ");";
    // echo $q;
    // echo "<br>";
    $db->rawQuery($q);
}
?>