<?php

class User {
    protected $id;
    protected $username;
    protected $email;
    protected $password;

    public function __construct($id, $username, $email, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->setEmail($email); // Use setEmail method for email validation
        $this->password = $password;
    }

    protected function setEmail($email) {
        // Basic email validation
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new Exception("Invalid email format");
        }
    }
}

class Admin extends User {
    public function uploadProduct($productName, $productImage) {
        // Simulate product upload
        echo "Admin {$this->username} uploaded product: {$productName} with image: {$productImage}";
    }
}

class Customer extends User {
    public function viewProduct() {
        // Simulate product viewing
        echo "Customer {$this->username} viewed a product";
    }
}

?>
