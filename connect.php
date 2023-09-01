<?php
$conn = mysqli_connect( "localhost", "root", "", "rocket-order" ) or die( "Connection failed" );

if ( $_POST['type'] == "" )
    {
    $sql = "SELECT * FROM categories";

    $query = mysqli_query( $conn, $sql ) or die( "Query Unsuccessful" );

    $str = "";
    while ( $row = mysqli_fetch_assoc( $query ) )
        {
        $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
        }
    } else if ( $_POST['type'] == "productData" )
    {
    $sql = "SELECT * FROM products WHERE category = {$_POST['id']}";

    $query = mysqli_query( $conn, $sql ) or die( "Query Unsuccessful" );

    $str = "";
    while ( $row = mysqli_fetch_assoc( $query ) )
        {
        $str .= "<option value='{$row['p_id']}'>{$row['p_name']}</option>";
        }
    };

echo $str;









?>