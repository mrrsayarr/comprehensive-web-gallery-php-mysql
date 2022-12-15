
<?php 
function go($url,$time=0){ //   default time değeri 0 dır.
    if($time != 0){
        header("Refresh:$time;url=$url");
    }
    else {
        header("Location:$url");
    }
}

function comeBack($time=0){
    $url=$_SERVER["HTTP_REFERER"];
    if($time != 0){
        header("Refresh:$time;url=$url");
    }
    else{
        header("Location:$url");
    }
}

?>