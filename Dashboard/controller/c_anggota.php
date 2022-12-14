<?php
// define = definisi
define("BASE", "http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_anggota.php?aksi=");

$aksi = $_GET["aksi"];
require_once("../models/model_anggota.php");
require_once("../app/helper/form_helpers.php");
require_once("../models/user/function.php");


// perintah jika memilih dashboard 
if ($aksi == "dashboard") {
    header("Location: http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi");
}

// perintah jika memilih aksi list
elseif ($aksi == "list") {
    $data = getAllData();
    $sess = setsession();
    require_once("../views/data_anggota/list_data.php");
}

// perintah jika memilih aksi detail
elseif ($aksi == "detail") {
    $id = $_GET["id"];
    $data = getData($id);
    $sess = setsession();
    require_once("../views/data_anggota/detail_data.php");
}

// perintah jika memilih aksi tambah
elseif ($aksi == "tambah") {
    $sess = setsession();
    require_once("../views/data_anggota/tambah_data.php");
}

// aksi prosestambah
elseif ($aksi == "prosestambah") {
    $proses = tambahData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        echo "<script>window.location='c_anggota.php?aksi=list'</script>";
    } else {
        echo "<script>alert('Data tidak berhasil ditambahkan')</script>";
        echo "<script>window.history.back()</script>";
    }
}

// perintah jika memilih aksi hapus
elseif ($aksi == "hapus") {
    $id = $_GET["id"];
    hapusData($id);
    echo "<script>alert('Data berhasil dihapus')</script>";
    echo "<script>window.location='c_anggota.php?aksi=list'</script>";
}

// perintah jika memilih aksi edit
elseif ($aksi == "edit") {
    $id = $_GET["id"];
    $data = getData($id);
    $sess = setsession();
    require_once("../views/data_anggota/edit_data.php");
    require_once("../app/helper/form_helper.php");
}

// aksi prosesedit
elseif ($aksi == "prosesedit") {
    $proses = editData($_POST);
    if ($proses) {
        echo "<script>alert('Data berhasil diedit')</script>";
        echo "<script>window.location='c_anggota.php?aksi=list'</script>";
    } else {
        echo "<script>alert('Data tidak berhasil diedit')</script>";
        echo "<script>window.history.back()</script>";
    }
}

// perintah jika memilih aksi login
elseif ($aksi == "login") {
    require_once("../models/user/login.php");
}

// perintah jika memilih logout
elseif ($aksi == "logout") {
    require_once("../models/user/logout.php");
}

// perintah jika memilih register
elseif ($aksi == "register") {
    require_once("../models/user/register.php");
}
