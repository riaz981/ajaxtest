<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getAll(){
    include 'connect.php';
    $query = "Select * from orders";
    $result= $con->query($query);
    echo "<table border='1'>";
    echo "<th>Order Number</th><th>Product Name</th><th>Product Status</th>";
    foreach($result as $res){
        
        echo "<tr><td>".$res['order_number']."</td><td>".$res['product_name']."</td><td>".$res['product_status']."</td></tr>";
        
        
    }
    echo "</table>";
    
}

function updateRecord($ordernumber,$status){
    include 'connect.php';
    $statuschange=$status;
    $orderchange=$ordernumber;
    $query="UPDATE orders SET product_status='$statuschange' where order_number='$orderchange'";
    $result=$con->exec($query);
    if($result){
        echo "Done";
    }
    else{
        echo "Error: Either <strong>order number</strong> does not exist or <strong>status</strong> was already the one speciefied";
    }
}
?>

                                            