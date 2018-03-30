<?php
require "../models/ConnectDB.php";
if(isset($_GET['query'])){
    $ten_phim = $_GET['query'];

    $database_onfilm = new DatabaseOnFilm();
    $conn = $database_onfilm ->connect();
    $database_name = "id4938575_onfilm";
    $table_film = "film";
    mysqli_select_db($conn,$database_name);

    $sql = "SELECT * FROM $table_film WHERE tenphim LIKE '%$ten_phim%'";
    $result = mysqli_query($conn,$sql);
    if($result) {
        while ($row = $result->fetch_assoc()){
            echo $row['tenphim'];
        }
    }
    $sql -> close();
}

class Film{
    var $id;
    var $theloai;
    var $link;
    var $tenphim;
    var $iframe;

    function Film($id, $theloai, $link, $tenphim, $iframe){
        $this->id = $id;
        $this->theloai = $theloai;
        $this->link = $link;
        $this->tenphim = $tenphim;
        $this->iframe = $iframe;
    }
}