<?php
require_once (__DIR__."/../config/db.php");
require_once (__DIR__."/../entities/product.php");
class ProductService {
    public function insert($product) {
        $db = new Db();
    
        // Prepare the SQL statement
        $SQL = "INSERT INTO product (productID, productName, unit, price, `desc`, img) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->connect()->prepare($SQL);
    
        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        $id = $product->getProductID();
        $name = $product->getProductName();
        $unit = $product->getUnit();
        $price = $product->getPrice();
        $img = $product->getImg();
        $desc = $product->getDesc();
        
        // Bind parameters
        $stmt->bind_param("sssdss", $id, $name, $unit, $price, $desc, $img);
    
        // Execute the statement
        $result = $stmt->execute();
    
        // Close the statement
        $stmt->close();
    
        return $result;
    }

    public function delete($id) {
        $db = new Db();

        $SQL = "DELETE FROM product WHERE productID = ?";
        $stmt = $db->connect()->prepare($SQL);

        if (!$stmt) {
            return false;
        }

        $stmt->bind_param("s", $id); 

        $result = $stmt->execute();

        $stmt->close();

        return $result;
    }

    public function update($product) {
        $db = new Db();

        // Prepare the SQL statement
        $SQL = "UPDATE product SET productName = ?, unit = ?, price = ?, `desc` = ?, img = ? WHERE productID = ?";
        $stmt = $db->connect()->prepare($SQL);

        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        $id = $product->getProductID();
        $name = $product->getProductName();
        $unit = $product->getUnit();
        $price = $product->getPrice();
        $img = $product->getImg();
        $desc = $product->getDesc();

        // Bind parameters
        $stmt->bind_param("ssdsss", $name, $unit, $price, $desc, $img, $id);

        // Execute the statement
        $result = $stmt->execute();

        // Close the statement
        $stmt->close();

        return $result;
    }

    public function selectByID($id) {
        $db = new Db();

        // Prepare the SQL statement
        $SQL = "SELECT * FROM product WHERE productID = ?";
        $stmt = $db->connect()->prepare($SQL);

        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }

        // Bind parameter
        $stmt->bind_param("s", $id);

        // Execute the statement
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Fetch user data
        $productData = $result->fetch_assoc();

        // Close the statement
        $stmt->close();

        if ($productData) {
            $product = new Product($productData['productID'], $productData['productName'], $productData['unit'], $productData['price'], $productData['desc'], $productData['img'], $productData['updatedAt'], $productData['createdAt']);
            return $product;
        } else {
            // User not found
            return null;
        }
    }

    public function selectAll() {
        $db = new Db();
    
        // Prepare the SQL statement
        $SQL = "SELECT * FROM product";
        $stmt = $db->connect()->prepare($SQL);
    
        // Check if prepare was successful
        if (!$stmt) {
            // Handle prepare error, log or return a message
            return false;
        }
    
        // Execute the statement
        $stmt->execute();
    
        // Get the result set
        $result = $stmt->get_result();
    
        // Initialize an array to store products
        $products = [];
    
        // Fetch all products
        while ($productData = $result->fetch_assoc()) {
            $product = new Product($productData['productID'], $productData['productName'], $productData['unit'], $productData['price'], $productData['desc'], $productData['img'], $productData['updatedAt'], $productData['createdAt']);
            $products[] = $product;
        }
    
        // Close the statement
        $stmt->close();
    
        return $products;
    }
}
?>