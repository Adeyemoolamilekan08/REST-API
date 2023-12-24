# REST-API

## Purpose

This PHP script retrieves a list of customers from a MySQL database and provides it as a JSON response.

## Files

index.php: The main script that handles requests and calls the getCustomerList() function.
function.php: (if applicable) Contains additional functions used by the script.
inc/config.php: Stores database connection credentials and configuration settings.
## Dependencies

PHP with MySQLi extension
A MySQL database with a "customers" table (or adjust table name as needed)
## Usage

Set up database connection:
Edit inc/config.php and replace placeholders with your database credentials.
Access the script:
Send a GET request to the URL where the script is located (e.g., http://example.com/index.php).
## Responses

Success (200 OK): Returns a JSON object containing:
status: 200
message: "Customer List Fetched Successfully"
data: An array of customer data
No Customers Found (404 Not Found): Returns a JSON object with:
status: 404
message: "No Customer Found"
Internal Server Error (500 Internal Server Error): Indicates a problem with the script or database connection. Check server logs for details.
