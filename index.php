<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PiVPN Wireguard Web Admin</title>   
    <link rel="stylesheet" href="assets/css/bootstrap.css">    
    <link rel="stylesheet" href="assets/css/app.css?v=3.4.1">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar"><div class="sidebar-wrapper"></div></div>
        <div id="main">                
<div class="main-content container-fluid">
    <div class="page-title">
        <img class="pivpn_logo" src="assets/images/pivpn_logo.png" width="52">
        <h3>PiVPN</h3>
        <p class="text-subtitle text-muted">Wireguard Web Admin</p>
        <a href="#" class="btn icon icon-left btn-secondary btn-add" data-bs-toggle="modal" data-bs-target="#addConfigPopUp"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#FFFFFF" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60.364 60.364" style="enable-background:new 0 0 60.364 60.364;" xml:space="preserve"><g><path d="M54.454,23.18l-18.609-0.002L35.844,5.91C35.845,2.646,33.198,0,29.934,0c-3.263,0-5.909,2.646-5.909,5.91v17.269   L5.91,23.178C2.646,23.179,0,25.825,0,29.088c0.002,3.264,2.646,5.909,5.91,5.909h18.115v19.457c0,3.267,2.646,5.91,5.91,5.91   c3.264,0,5.909-2.646,5.91-5.908V34.997h18.611c3.262,0,5.908-2.645,5.908-5.907C60.367,25.824,57.718,23.178,54.454,23.18z"/></g></svg> 
        Создать конфигурацию</a>
    </div>
    <section id="content-types">
        <div class="row">
        <?php
        $file = scandir('./configs');
        array_splice($file, 0, 2);
        $disabled = shell_exec('echo '.$name.' | pivpn -c');
foreach ($file as $key => $value){
    $name = substr($value,0,-5);
    print_r($ifDisabling);
    echo '<div class="col-md-4">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 style="cursor:pointer" class="card-title" data-bs-toggle="modal" data-bs-target="#statisticPopUp" onclick="get_stat(\''.$name.'\');">';
    echo $name;
    if (stripos($disabled, '[disabled]   '.$name) !== false) {
        echo '<span class="badge bg-light onblock">Заблокирован</span>';
    }
    echo '</h4>
    <div class="dropdown">
    <button class="btn dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#475f7b" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 32.055 32.055" style="enable-background:new 0 0 32.055 32.055;" xml:space="preserve"><g><path d="M3.968,12.061C1.775,12.061,0,13.835,0,16.027c0,2.192,1.773,3.967,3.968,3.967c2.189,0,3.966-1.772,3.966-3.967   C7.934,13.835,6.157,12.061,3.968,12.061z M16.233,12.061c-2.188,0-3.968,1.773-3.968,3.965c0,2.192,1.778,3.967,3.968,3.967   s3.97-1.772,3.97-3.967C20.201,13.835,18.423,12.061,16.233,12.061z M28.09,12.061c-2.192,0-3.969,1.774-3.969,3.967   c0,2.19,1.774,3.965,3.969,3.965c2.188,0,3.965-1.772,3.965-3.965S30.278,12.061,28.09,12.061z"/></g></svg>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">';
    if (stripos($disabled, '[disabled]   '.$name) !== false) {
        echo '<button type="button" id="enableBtn" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#enableConfigPopUp" onclick="$(\'#confenableName\').val(\''.$name.'\');$(\'#confenableNameSpan\').html(\''.$name.'\')">Разблокировать</button>';
    }else{
        echo '<button type="button" id="disableBtn" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#disableConfigPopUp" onclick="$(\'#confDisableName\').val(\''.$name.'\');$(\'#confDisableNameSpan\').html(\''.$name.'\')">Заблокировать</button>';
    }  
    echo '<button type="button" id="deleteBtn" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteConfigPopUp" onclick="$(\'#confDeleteName\').val(\''.$name.'\');$(\'#confDeleteNameSpan\').html(\''.$name.'\')">Удалить</button></div>
    </div>
    <div class="form-actions d-flex justify-content-start">
        <div class="buttons">
            <a href="./configs/'.$value.'" download class="btn icon icon-left btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 459.999 459.999" style="enable-background:new 0 0 459.999 459.999;" fill="#FFFFFF"  xml:space="preserve"><g><g><g><path d="M212.991,249.518c9.767,9.66,25.508,9.624,35.25-0.1l74.888-74.887c9.763-9.763,9.763-25.592,0-35.355     c-9.762-9.763-25.591-9.763-35.355,0l-32.21,32.209V47.596c0-13.808-11.193-25-25-25s-25,11.192-25,25v123.79l-32.21-32.209     c-9.764-9.764-25.593-9.764-35.355,0c-9.763,9.764-9.763,25.593,0,35.355C139.121,175.656,211.868,248.403,212.991,249.518z"/>			<path d="M431.654,312.404H28.346C12.691,312.404,0,325.094,0,340.75v68.307c0,15.655,12.691,28.346,28.346,28.346h403.307     c15.655,0,28.346-12.691,28.346-28.346V340.75C460,325.094,447.309,312.404,431.654,312.404z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg> 
                Скачать конфигурацию</a>
            <a href="qrcode.php?name='.$name.'" download class="btn icon icon-left btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-labelledby="qrIconTitle" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" color="#FFFFFF"> <title id="qrIconTitle">QR Code</title> <rect x="10" y="3" width="7" height="7" transform="rotate(90 10 3)"/> <rect width="1" height="1" transform="matrix(-1 0 0 1 7 6)"/> <rect x="10" y="14" width="7" height="7" transform="rotate(90 10 14)"/> <rect x="6" y="17" width="1" height="1"/> <rect x="14" y="20" width="1" height="1"/> <rect x="17" y="17" width="1" height="1"/> <rect x="14" y="14" width="1" height="1"/> <rect x="20" y="17" width="1" height="1"/> <rect x="20" y="14" width="1" height="1"/> <rect x="20" y="20" width="1" height="1"/> <rect x="21" y="3" width="7" height="7" transform="rotate(90 21 3)"/> <rect x="17" y="6" width="1" height="1"/> </svg> 
                Скачать QR-код</a>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>';
}
?>
        </div>
    </section>
</div>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; PiVPN Wireguard Web Admin</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class='text-danger'>❤</span> by <a href="https://newul.ru">Newul</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>

<div class="modal fade text-left" id="addConfigPopUp" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
<div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title" id="myModalLabel33">Создать конфигурацию </h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    </div>
    <form id="addConfig" action="functions.php" method="post">
    <div class="modal-body">
        <div class="form-group">
            <input type="text" name="method" value="add" hidden>
        <input type="text" placeholder="Название" class="form-control" name="name">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-secondary ml-1">
        <span>Создать</span>
        </button>
    </div>
    </form>
</div>
</div>
</div>

<div class="modal fade text-left" id="deleteConfigPopUp" tabindex="-1" aria-labelledby="myModalLabel34" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
<div class="modal-content">
    <div class="modal-header bg-danger">
    <h4 class="modal-title white" id="myModalLabel34">Удалить конфигурацию </h4>
    <button type="button" class="close white" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    </div>
    <form id="deleteConfig" action="functions.php" method="post">
    <div class="modal-body">
        <div class="form-group">
            <input type="text" name="method" value="delete" hidden>
            <input type="text" name="name" id="confDeleteName" hidden>
            <p>Удалить конфигурацию <span id="confDeleteNameSpan"></span>?</p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-light ml-1" data-bs-dismiss="modal">
        <span>Отмена</span>
        </button>
        <button type="submit" class="btn btn-danger ml-1">
        <span>Удалить</span>
        </button>
    </div>
    </form>
</div>
</div>
</div>

<div class="modal fade text-left" id="disableConfigPopUp" tabindex="-1" aria-labelledby="myModalLabel35" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
<div class="modal-content">
    <div class="modal-header bg-warning">
    <h4 class="modal-title white" id="myModalLabel35">Заблокировать конфигурацию </h4>
    <button type="button" class="close white" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    </div>
    <form id="disableConfig" action="functions.php" method="post">
    <div class="modal-body">
        <div class="form-group">
            <input type="text" name="method" value="disable" hidden>
            <input type="text" name="name" id="confDisableName" hidden>
            <p>Заблокировать конфигурацию <span id="confDisableNameSpan"></span>?</p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-light ml-1" data-bs-dismiss="modal">
        <span>Отмена</span>
        </button>
        <button type="submit" class="btn btn-warning ml-1">
        <span>Заблокировать</span>
        </button>
    </div>
    </form>
</div>
</div>
</div>

<div class="modal fade text-left" id="enableConfigPopUp" tabindex="-1" aria-labelledby="myModalLabel36" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
<div class="modal-content">
    <div class="modal-header bg-warning">
    <h4 class="modal-title white" id="myModalLabel36">Разблокировать конфигурацию </h4>
    <button type="button" class="close white" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    </div>
    <form id="enableConfig" action="functions.php" method="post">
    <div class="modal-body">
        <div class="form-group">
            <input type="text" name="method" value="enable" hidden>
            <input type="text" name="name" id="confenableName" hidden>
            <p>Разблокировать конфигурацию <span id="confenableNameSpan"></span>?</p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-light ml-1" data-bs-dismiss="modal">
        <span>Отмена</span>
        </button>
        <button type="submit" class="btn btn-warning ml-1">
        <span>Разблокировать</span>
        </button>
    </div>
    </form>
</div>
</div>
</div>


<div class="modal fade text-left" id="statisticPopUp" tabindex="-1" aria-labelledby="myModalLabel37" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
<div class="modal-content">
    <div class="modal-header bg-warning">
    <h4 class="modal-title white" id="myModalLabel37">Статистика</h4>
    <button type="button" class="close white" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
    </div>
    <form id="statisticPopUpLabels" action="functions.php" method="post">
    <div class="modal-body">
        <div class="form-group">
            <p id="statNamePersonal" style="font-family: monospace;"></p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-light ml-1" data-bs-dismiss="modal" onclick="$('#statNamePersonal').html('');">
        <span>Закрыть</span>
        </button>
    </div>
    </form>
</div>
</div>
</div>


    <script src="assets/js/app.js?v=3.4.11"></script>
</body>
</html>
