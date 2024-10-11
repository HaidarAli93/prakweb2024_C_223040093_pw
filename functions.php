<?php
    date_default_timezone_set('Asia/Jakarta');
    //fungsi untuk koneksi ke database
    function condb() {
        // bagian koneksi ke database
//        $con = new mysqli("localhost", "root", "admin", "prakweb_2024_C_223040093");

//        // mengecek apakah telah terkoneksi ke db atau belum
//        if ($con->connect_error) {
//            # code...
//            echo '<script>alert("Connection failed : ' . $con->connect_error . '...")</script>';
//        } else {
//            echo '<h3>Connection Successfully</h3>';
//        }
        
        $con = new PDO("mysql:host=localhost;dbname=prakweb_2024_C_223040093", "ocak", "");

        try {
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "\n";
        }

        return $con;
    }
    
    function sql($query) {
        $con = condb();
        $output = mysqli_query($con, $query);
        
        $rows = [];
        while ($row = mysqli_fetch_assoc($output)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function show() {
	echo "<table style='border: solid 1px black;'>";
	echo "<tr><th>ID Buku</th><th>Judul Buku</th><th>Penulis Buku</th></tr>";
	class TableRows extends RecursiveIteratorIterator {
	    function __construct($it) {
		parent::__construct($it, self::LEAVES_ONLY);
	    }

	    function current() {
		return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
	    }

	    function beginChildren() {
		echo "<tr>";
	    }

	    function endChildren() {
		echo "</tr>" . "\n";
	    }
	}

	try {
	    $con = condb();
	    $buku = $con->prepare("select * from prakweb_2024_C_223040093.Buku;");
	    $buku->execute();

	    $output = $buku->setFetchMode(PDO::FETCH_ASSOC);
	    foreach(new TableRows(new RecursiveArrayIterator($buku->fetchAll())) as $k => $v) {
	        echo $v;
	    }
	} catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	echo "</table>";
    }
    
    function initDB() {
        $command = "mariadb -h 'localhost' -u 'ocak' -p '' < '/home/peano/nb/akdmk/kbm/smt5/pw/prakweb_2024_C_223040093/initDB.sql'";
        shell_exec($command);
    }
?>
