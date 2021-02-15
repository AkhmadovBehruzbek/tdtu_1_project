<?php
    include_once("config.php");

    function royxat($table, $menu, $ustun=array()) {
        global $conn;

        $sql = "SELECT * FROM $table";
        $r = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if (mysqli_num_rows($r) > 0) {
            echo "<table class='table'>";
            $i=1;
            while ($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>{$i}</td>";
                foreach ($ustun as $u) {
                    echo "<td>" .$row[$u]. "</td>";
                }
                echo "</tr>";
                $i++;
                echo "</table>";
            }
        }
    }
?>