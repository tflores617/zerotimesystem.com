<?php 
    include 'conn.php';

    $stmt = "none";
    if ($stmt = mysqli_prepare($link, "SELECT * FROM posts WHERE approved=true;")) { //
        echo "prepared";
        if (mysqli_stmt_execute($stmt)) { //'statement execution was successful'
            echo "executed";
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_bind_result($stmt, $id, $body, $email, $name, $order_number, $title, $approved)) { //'results bind was successful'
            echo 'results bind was successful';
            }
        }
    }



    if  (($stmt == false) or ($stmt == null)){ // In the case that the execution threw an error(?)
        echo "error";
    } elseif(mysqli_stmt_num_rows($stmt) == "0") { // In the case that no rows were returned
        echo "0 rows";
    } else { // There are more than 0 rows
        while (mysqli_stmt_fetch($stmt)) {
            echo "<div style=\"display: block;\">". $body. " ". $email. " ". $name. " ". $order_number. " ". $title. "</div>";
        }
    }

?>

