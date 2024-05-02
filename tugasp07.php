<!DOCTYPE html>
<html>
<head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black; 
        padding: 8px;
        text-align: left;
        background-color: pink; 
    }
        
    th {
        background-color: black;
        color: white;
    }
</style>
</head>
<body>

<table>
    <tr>
        <th>Mahasiswa</th>
        <th>IPK</th>
        <th>Keterangan</th>
    </tr>
    
    <?php
    $mahasiswa = array(
        array("Mahasiswa ke 1", 3.8),
        array("Mahasiswa ke 2", 2.9),
        array("Mahasiswa ke 3", 3.9),
        array("Mahasiswa ke 4", 1.8),
        array("Mahasiswa ke 5", 4)
    );

    foreach ($mahasiswa as $mhs) {
        $nama_mhs = $mhs[0];
        $ipk = $mhs[1];
        $keterangan = '';
        
        if ($ipk >= 3.5) {
            $keterangan = "Cum Laude";
        } elseif ($ipk >= 3.0) {
            $keterangan = "Sangat Baik";
        } elseif ($ipk >= 2.5) {
            $keterangan = "Baik";
        } elseif ($ipk >= 2.0) {
            $keterangan = "Cukup";
        } else {
            $keterangan = "Perlu Perbaikan";
        }
        
        echo "<tr>";
        echo "<td>$nama_mhs</td>";
        echo "<td>$ipk</td>";
        echo "<td>$keterangan</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
