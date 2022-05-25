<?php
// konek ke DB
$cnn = mysqli_connect("localhost","root","","kemahasiswaan");
// ambil data 
function query($query){
    global $cnn;
    $hasil = mysqli_query($cnn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($hasil)){
            $rows[]=$row;
        }
        return $rows;
}

// fungsi tambah data
function tambahprodi($post){
    global $cnn;
    // ambil data form
    $kd_prodi = $post["kd_prodi"];
    $nama_prodi = $post["nama_prodi"];
    $kaprodi = $post["kaprodi"];

    // query tambah data
    $query = "INSERT INTO prodi
                VALUES
                ('$kd_prodi','$nama_prodi','$kaprodi')";
    mysqli_query($cnn,$query);

    return mysqli_affected_rows($cnn);
}

// fungsi hapus
function hapusprodi($kd_prodi){
    global $cnn;
    mysqli_query($cnn,"DELETE FROM prodi WHERE kd_prodi = $kd_prodi ");
    return mysqli_affected_rows($cnn);
}


// fungsi update
function updateprodi($post){
    global $cnn;

    $kd_prodi = $post["kd_prodi"];
    $nama_prodi = $post["nama_prodi"];
    $kaprodi = $post["kaprodi"];

    $query = "UPDATE prodi SET
                kd_prodi = '$kd_prodi',
                nama_prodi = '$nama_prodi',
                kaprodi = '$kaprodi'
                WHERE kd_prodi = '$kd_prodi' ";

    mysqli_query($cnn, $query);
    return mysqli_affected_rows($cnn);
}


// fungsi tambah data mahasiswa
function tambahmhs($post){
    global $cnn;
    // ambil data form
    $nim = $post["nim"];
    $nama_mahasiswa = $post["nama_mahasiswa"];
    $kd_prodi = $post["kd_prodi"];
    $kontak = $post["kontak"];
    $alamat = $post["alamat"];

    // query tambah data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('$nim','$nama_mahasiswa','$kd_prodi','$kontak','$alamat')";
    mysqli_query($cnn,$query);

    return mysqli_affected_rows($cnn);
}

// fungsi hapus
function hapusmhs($nim){
    global $cnn;

    mysqli_query($cnn, "DELETE FROM mahasiswa WHERE nim = '$nim'");
    return mysqli_affected_rows($cnn);
}

// fungsi update mahasiswa
function updatemhs($post){
    global $cnn;

    $nim = $post["nim"];
    $nama_mahasiswa = $post["nama_mahasiswa"];
    $kd_prodi = $post["kd_prodi"];
    $kontak = $post["kontak"];
    $alamat = $post["alamat"];

    $querymhs = "UPDATE mahasiswa SET
                nim = '$nim',
                nama_mahasiswa = '$nama_mahasiswa',
                kd_prodi = '$kd_prodi',
                kontak = '$kontak',
                alamat = '$alamat'
                WHERE nim = '$nim' ";

    mysqli_query($cnn, $querymhs);
    return mysqli_affected_rows($cnn);
}

?>