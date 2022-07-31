<?php

function clean($str) {
    $str = preg_replace("/[^a-zA-ZА-Яа-я0-9\s]/", '', $str);
    $str = preg_replace("/[0-9]m/", '', $str);
    return $str;
}

if(isset($_POST['method']) && isset($_POST['name'])){
    $method = $_POST['method'];
    $name = $_POST['name'];
    if($method == 'add'){
        exec('echo '.$name.' | pivpn -a', $output);
        exec('sudo chmod 644 configs/'.$name.'.conf');
        echo clean($output[0]);
    }
    if($method == 'disable'){
        exec('echo '.$name.' | pivpn -off -y', $output);
        echo clean(end($output));
    }
    if($method == 'enable'){
        exec('echo '.$name.' | pivpn -on -y', $output);
        echo clean(end($output));
    }
    if($method == 'delete'){
        exec('echo '.$name.' | pivpn -r -y', $output);
        echo clean(end($output));
    }
};