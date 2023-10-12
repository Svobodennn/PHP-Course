/*

   ***   Like:  ***
"LIKE" is an SQL operator used to search for text-based data based on a
specific pattern or text pattern in database queries. It is commonly used
when querying text columns to find data that matches a specific pattern.
*/

SELECT * FROM users WHERE mail LIKE "%mel%";
# Brings all the results contains "mel" inside.

SELECT * FROM users WHERE mail LIKE "mel%";
# Brings all the results starting with "mel".

SELECT * FROM users WHERE mail LIKE "%mel";
# Brings all the results ending with "mel".

/*
    *** SUM, MIN, MAX, COUNT, GROUP, HAVING:    ***
These are SQL aggregation functions used to perform calculations on grouped
data. Here are their translations:
*/

# SUM: Calculates the total of grouped data.
SELECT SUM(id) FROM test;
# MIN: Finds the minimum value within grouped data.
SELECT MIN(id) FROM test;

# MAX: Finds the maximum value within grouped data.
SELECT MAX(id) FROM test;

# COUNT: Counts the number of rows within grouped data.
SELECT COUNT(id) FROM test;
SELECT COUNT(DISTINCT surname) FROM test;
# GROUP BY: Groups data based on specific columns.
SELECT COUNT(id) summary, surname FROM test GROUP BY surname;

# HAVING: Used in conjunction with GROUP BY to perform conditional
#         operations on groups.
SELECT COUNT(id) summary, surname FROM test GROUP BY surname HAVING summary > 5

/*
    *** IN, NOT IN: ***
"IN" and "NOT IN" are SQL operators used to search for specific values within
a list. Here are their translations:
IN: Searches for values within a specified list.
NOT IN: Searches for values that are not within a specified list.
*/
SELECT * FROM test WHERE id IN (1,2,3);
SELECT * FROM test WHERE id NOT IN (1,2,3);

/*
    ***     FIND_IN_SET:    ***
"FIND_IN_SET" is an SQL function used to search for a value within a comma-separated list.
*/
SELECT * FROM test WHERE FIND_IN_SET('B', subscriptions);
Select *, if(find_in_set('A',group), 'in A group', 'Not') as a_group from users;
/*
   ***      Between:    ***
"BETWEEN" is an SQL operator used to select data within a specified range.
*/
SELECT * FROM test WHERE id BETWEEN 2 AND 5;
SELECT * FROM test WHERE id NOT BETWEEN 2 AND 5;
