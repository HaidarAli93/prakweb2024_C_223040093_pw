<?php
    require 'functions.php';
//    phpinfo();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
	<meta name"viewport" content="width=device-width, initial-scale=1">
        <title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
	<div class="container-fluid">
        <?php
            initDB();
	    echo "<table class='table table-striped'>";
	    echo "<tr><th>ID Buku</th><th>Judul Buku</th><th>Penulis Buku</th></tr>";
	    class TableRows extends RecursiveIteratorIterator {
	        function __construct($it) {
		    parent::__construct($it, self::LEAVES_ONLY);
	        }

	        function current() {
		    return "<td>" . parent::current() . "</td>";
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
	?>
	</div>
    </body>
</html>
