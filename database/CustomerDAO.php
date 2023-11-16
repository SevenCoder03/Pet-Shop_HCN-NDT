<?php
    require "D:\Web Project\Pet-Shop_HCN-NDT\src\models\Customer.php";
    require "D:\Web Project\Pet-Shop_HCN-NDT\database\Database.php";
    Class CustomerDAO {
        
        public function selectAll() {
            Database::connect();

            // SQL query
            $query = "SELECT * FROM Customer";

            // Create prepared statement
            $stmt = Database::$link->prepare($query);

            if ($stmt === false) {
                die("Error in query preparation: ".Database::$link->error);
            }

            // Execute query
            $stmt->execute();

            // Get result
            $result = $stmt->get_result();
            
            $customers = array();
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $customer = new Customer($row['customerID'], $row['customerName'], $row['dob'], $row['gender'], $row['email'], $row['phoneNumber'], $row['address'], $row['username'], $row['psw']);
                    $customers[] = $customer;
                }
            }
            
            // Close prepared statement
            $stmt->close();

            // Close the database connection
            Database::close();

            return  $customers;
        }
        public function selectByID($username) {
            Database::connect();
        
            // SQL query
            $query = "SELECT * FROM Customer WHERE username=?";
        
            // Prepare statement
            $stmt = Database::$link->prepare($query);
        
            if ($stmt === false) {
                die("Error in query preparation: " . Database::$link->error);
            }
        
            // Bind param
            $stmt->bind_param('s', $username);
        
            // Execute query
            $stmt->execute();
        
            // Get result
            $result = $stmt->get_result();
        
            if ($result === false) {
                die("Error in executing query: " . $stmt->error);
            }
        
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $customer = new Customer(
                    $row['customerID'],
                    $row['customerName'],
                    $row['dob'],
                    $row['gender'],
                    $row['email'],
                    $row['phoneNumber'],
                    $row['address'],
                    $row['username'],
                    $row['psw']);  
            } else {
                $customer = null;
            }
            
            // Close prepared statement
            $stmt->close();

            // Close the database connection
            Database::close();
        
            return $customer;
        }
        public function insert($customer) {
            Database::connect();
        
            // SQL query
            $query = "INSERT INTO Customer (customerID, customerName, dob, gender, email, phoneNumber, address, username, psw) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        
            // Prepare statement
            $stmt = Database::$link->prepare($query);
        
            if ($stmt == false) {
                die("Error in executing query: " . $stmt->error);
            }

            $customerID = $customer->getCustomerID();
            $customerName = $customer->getCustomerName();
            $dob = $customer->getDOB();
            $gender = $customer->getGender();
            $email = $customer->getEmail();
            $phoneNumber = $customer->getPhoneNumber();
            $address = $customer->getAddress();
            $username = $customer->getUsername();
            $psw = $customer->getPSW();
        
            // Bind params
            $stmt->bind_param('ississsss',
                $customerID,
                $customerName,
                $dob,
                $gender,
                $email,
                $phoneNumber,
                $address,
                $username,
                $psw
            );
        
            // Execute query
            $stmt->execute();
        
            // Close prepared statement
            $stmt->close();

            // Close the database connection
            Database::close();
        }        
        public function insertAll() {

        }
        public function update($customer) {
            Database::connect();

            // SQL query
            $query = "UPDATE Customer
            SET customerName = ?, dob = ?, gender = ?, email = ?, phoneNumber = ?, address = ?, username = ?, psw = ?  
            WHERE customerID = ?";

            // Prepare statement
            $stmt = Database::$link->prepare($query);

            if ($stmt == false) {
                die("Error in executing query: " . $stmt->error);
            }
            $customerID = $customer->getCustomerID();
            $customerName = $customer->getCustomerName();
            $dob = $customer->getDOB();
            $gender = $customer->getGender();
            $email = $customer->getEmail();
            $phoneNumber = $customer->getPhoneNumber();
            $address = $customer->getAddress();
            $username = $customer->getUsername();
            $psw = $customer->getPSW();

            $stmt->bind_param("ssisssssi", 
                $customerName,
                $dob,
                $gender,
                $email,
                $phoneNumber,
                $address,
                $username,
                $psw,
                $customerID
            );

            // Execute statement
            $stmt->execute();

           // Close prepared statement
            $stmt->close();

            // Close the database connection
            Database::close();
        }
        public function delete($customerID) {
            Database::connect();

            // SQL query
            $query = "DELETE FROM Customer WHERE customerID = ?";

            // Prepare statement
            $stmt = Database::$link->prepare($query);

            if ($stmt == false) {
                echo "Error in executing query: ". $stmt->error;
            }
            
            // Bind parameters
            $stmt->bind_param('i',$customerID);

            // Execute query
            $stmt->execute();

            // Close prepared statement
            $stmt->close();

            // Close the database connection
            Database::close();
        }
        public function deleteAll() {
            Database::connect();

            // SQL query
            $query = "DELETE FROM Customer";

            // Prepare statement
            $stmt = Database::$link->prepare($query);

            $stmt->execute();

            // Close prepared statement
            $stmt->close();

            // Close the database connection
            Database::close();
        }
    }
    // $customerDAO = new CustomerDAO();
    // $customer = new Customer (1, "Tran Doan Truc Giang", "2004/10/18", 0, "trucgiang18102004@gmail.com", "0905323576", "abc", "gigi", "Gigi_181004");
    // $customerDAO->delete(3);
?>