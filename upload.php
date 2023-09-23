<?php
if (isset($_POST['upload_profile'])) {
    $target_dir = "uploads/"; // Direktori tempat Anda ingin menyimpan gambar
    $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Memeriksa apakah file gambar
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }

    // Memeriksa ukuran file
    if ($_FILES["profile_image"]["size"] > 500000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Izinkan hanya format gambar tertentu (misalnya, JPG, PNG)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Maaf, hanya file JPG, JPEG, dan PNG yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Maaf, gambar profil tidak dapat diunggah.";
    } else {
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            // Simpan lokasi file gambar profil di database
            $profile_image = basename($_FILES["profile_image"]["name"]);
            $query = "UPDATE users SET profile_image='$profile_image' WHERE username='$username'";
            mysqli_query($db, $query);
            echo "Gambar profil berhasil diunggah.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah gambar.";
        }
    }
}

?>