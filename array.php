<!DOCTYPE html>
<html>
    <head>
        <title> Pemrograman PHP dengan Array </title>
    </head>
    <body>
        <?php 
        // Penulisan array dapat dibuat seperti berikut:
        $nama[] = "Kartono Soebari";
        $nama[] = "Brian";
        $nama[] = "Firmansyah";
        echo $nama[1] . $nama[2] . $nama[0]; // Menampilkan teks "Brian Firmansyah Kartono Soebari"
        echo "<br>"; // Ganti baris
        // Menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array; // Menampilkan teks "jumlah elemen array = 3"
        ?>
    </body>
</html>