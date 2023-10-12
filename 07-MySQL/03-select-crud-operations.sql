/*
In SQL, the SELECT statement is used to retrieve data from a
database. It is one of the most fundamental and commonly used SQL commands.
The SELECT statement allows you to specify the columns you want to retrieve
and the conditions that the rows must meet to be included in the result set.


SELECT column1, column2, ...
AS ...
FROM table_name
WHERE condition;
*/

# Retrieving Specific Columns:
SELECT first_name, last_name
FROM employees;

# Filtering Data:
SELECT product_name, price
FROM products
WHERE price > 50;

# Sorting Data:
SELECT product_name, price
FROM products
ORDER BY price DESC;

# Aggregation
SELECT department, COUNT(*) AS total_employees
FROM employees
GROUP BY department;

# Joining Tables:
SELECT customers.first_name, orders.order_date
FROM customers
JOIN orders ON customers.customer_id = orders.customer_id;
# This query retrieves the first name of customers along with their
# order dates by joining the "customers" and "orders" tables.

# Subqueries
SELECT product_name
FROM products
WHERE category_id IN
    (SELECT category_id FROM categories
        WHERE category_name = 'Electronics');

# Aliasing
SELECT employee_id AS ID, last_name AS Last_Name
FROM employees;

# Combining Results with UNION:
SELECT product_name FROM products
UNION
SELECT service_name FROM services;

# Pagination
SELECT product_name
FROM products
LIMIT 10 OFFSET 20;

# Distinct Values:
SELECT DISTINCT city
FROM customers;
# This query retrieves a list of unique city names from the
# "customers" table.

# Conditional Logic with CASE:
SELECT order_id, order_date,
       CASE
           WHEN total_amount > 1000 THEN 'High Value'
           WHEN total_amount > 500 THEN 'Medium Value'
           ELSE 'Low Value'
           END AS order_value
FROM orders;



# ***   CRUD    ***

# Create (INSERT):
INSERT INTO students (name, age)
    VALUES
        ('Melih Saraç', 22),
        ('Mammed Doğan', 21),
        ('Svoboden Mahluk', 43);

# Read (SELECT):
SELECT * FROM students;

# Update (UPDATE):
UPDATE students
SET age = 21
WHERE id = 1;

# Delete (DELETE):
DELETE FROM students
WHERE id = 2;

# ***   ORDER & LIMIT   ***

# ORDER BY:
SELECT * FROM employees
ORDER BY last_name, first_name;
# ascending
SELECT * FROM products
ORDER BY price DESC;
# descending

# LIMIT:
# The LIMIT clause is used to restrict
# the number of rows returned by a SELECT query.
SELECT * FROM orders
LIMIT 10;

SELECT * FROM customers
LIMIT 5 OFFSET 10;
# This query retrieves 5 rows from the "customers" table
# starting from the 11th row (offset of 10).
