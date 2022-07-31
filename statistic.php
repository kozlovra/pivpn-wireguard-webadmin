<?php
$name = $_GET['name'];
function clean($str) {
    $str = preg_replace("/[^a-zA-ZА-Яа-я0-9.:\s]/", '', $str);
    $str = preg_replace("/[0-9]m/", '', $str);
    return $str;
}
exec('echo '.$name.' | pivpn -c', $clients);
foreach ($clients as $key => $value){
    if (stripos($value, $name) !== false) {
        $client = str_replace('not yet', 'none', $clients[$key]);
        $clientStat = explode(' ', $client);
        $personalStat = array_values(array_filter($clientStat));
        echo 'Конфигурация: '.$name.'.conf<br>';
        if (clean($personalStat[0]) == 'disabled'){
            echo 'Статус: Заблокирован';
        }else{ 
            echo 'Удаленный IP: '.clean($personalStat[1]).'<br>';
            echo 'Виртуальный IP: '.clean($personalStat[2]).'<br>';
            echo 'Получено: '.clean($personalStat[3]).'<br>';
            echo 'Передано: '.clean($personalStat[4]).'<br>';
            if(isset($personalStat[6])){
                $date = clean($personalStat[5]).' '.clean($personalStat[6]).' '.clean($personalStat[7]);
                echo 'Последний вход: '.date("d.m.Y", strtotime($date)).' в '.clean($personalStat[9]).'<br>';

            }else{
                echo 'Последний вход: '.clean($personalStat[5]).'<br>';

            }
        }
    }
}