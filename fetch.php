<style>

  td {padding:5px; border:1px solid black;};
  

</style>

<?php 

 /* $sql = "INSERT INTO data (product_name, product_link, dimage, mimage, utm, height)
VALUES ('Panasonic Lumix DC-GH5', 'https://www.adorama.com/ipcdcgh5.html', 'https://www.adorama.com/images/XLarge/ipcdcgh5_2.jpg', 
        'https://www.adorama.com/images/XLarge/ipcdcgh5_2.jpg', 'testutm', '984')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); */

$sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border:1px solid black; padding:5px;'>
    <tr>
    <th>Product Name</th>
    <th>Link</th>
    <th>Desktop Image</th>
    <th>Mobile Image</th>
    <th>Utm</th>
    <th>Height</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["product_name"]."</td><td>".$row["product_link"]."</td><td>".$row["dimage"]."</td><td>".$row["mimage"]."</td><td>".$row["utm"]."</td><td>".$row["height"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();


?>