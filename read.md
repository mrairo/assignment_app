# Project Overview

This project is a simple web application that provides basic functionalities for managing users and viewing products. The application consists of several HTML and PHP files, organized into two main folders: `html` and `includes`.

## html Folder

The `html` folder contains the following files:

### admin.html

This file is the HTML template for the admin page. It includes a navigation bar and a container for displaying admin-specific content.

### customer.html

This file is the HTML template for the customer page. It includes a navigation bar and a container for displaying customer-specific content.

### viewproducts.html

This file is the HTML template for the product viewing page. It includes a navigation bar and a container for displaying product information.

## includes Folder

The `includes` folder contains the following PHP files:

### db.php

This file contains the database connection configuration. It includes the database host, username, password, and database name.

### process.php

This file contains the PHP functions for processing user input and interacting with the database. It includes functions for adding users, logging in users, and retrieving product information.

### users.php

This file contains the PHP functions for handling user authentication and authorization. It includes functions for checking if a user is logged in, checking if a user has admin privileges, and logging out users.

### Example Usage

To use this code, you would typically set up a web server with PHP support, such as Apache or Nginx. You would then place the `html` and `includes` folders in a directory accessible by the web server. Users would access the admin and customer pages through their web browsers, and the PHP files would handle the server-side processing.

For example, if the `html` and `includes` folders were placed in a directory called `myapp`, a user could access the admin page by navigating to `http://localhost/myapp/html/admin.html` in their web browser.

Please note that this is a basic example and may not be suitable for production use. It is recommended to follow security best practices, such as using HTTPS, secure passwords, and proper input validation, when developing web applications.```