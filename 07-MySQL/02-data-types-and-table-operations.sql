/*
    *** Data Types  ***

    *** Numeric Data Types  ***

TINYINT(size): It can take values between -128 and 127. If declared as
unsigned (only positive values allowed), it can range from 0 to 255.
"Size" can be used to specify the limit it can take.
It occupies 1 byte in memory.

SMALLINT(size): It ranges from -32,768 to 32,767. When declared as unsigned,
the range is from 0 to 65,535. "Size" can be used to specify the limit
it can take. It occupies 2 bytes in memory.

MEDIUMINT(size): It ranges from -8,388,608 to 8,388,607. When declared
as unsigned, the range is from 0 to 16,777,215. "Size" can be used
to specify the limit it can take. It occupies 3 bytes in memory.

INT(size): It can take values between -2,147,483,648 and 2,147,483,647.
When declared as unsigned, the range is from 0 to 4,294,967,295.
"Size" can be used to specify the limit it can take.
It occupies 4 bytes in memory.

BIGINT(size): It ranges from -9,223,372,036,854,775,808 to
9,223,372,036,854,775,807. "Size" can be used to specify the limit
it can take. It occupies 8 bytes in memory.

FLOAT(size, d): The value ranges from -3.402823466E+38 to -1.175494351E-38,
zero, and 1.175494351E-38 to 3.402823466E+38. It is used for small fractional
numbers. "Size" specifies the maximum amount the number can take, including
the fractional part, and "d" specifies the number of digits after the
decimal point. For example, to store the number 32.658 in a float type column,
you would define it as FLOAT(5,3). The 5 here represents the total length of
the number (without the decimal point), and the 3 represents the number of
digits after the decimal point. In float data type, if the decimal part is
longer, the number may be rounded. The size value can be up to 23.
They do not work as unsigned. It occupies 4 bytes in memory.

DOUBLE(size, d): Used for large fractional numbers. "Size" specifies the
maximum amount the number can take, including the fractional part,
and "d" specifies the number of digits after the decimal point.
The size value can be up to 53. They do not work as unsigned.
It occupies 8 bytes in memory.

DECIMAL(size, d): Used for fractional numbers when DOUBLE is not enough.
"Size" specifies the maximum amount the number can take, including the
fractional part, and "d" specifies the number of digits after the decimal
point. The size value can be up to 65. The memory usage varies.



    *** Text Data Types ***

CHAR(size): It holds a fixed number of characters (letters, numbers, or
special characters). The size in parentheses indicates the length. If you
define CHAR(5) for a field and enter a 2-character data, it reserves 5 bytes,
which is the size you specified. It can hold a maximum of 255 characters.
Repeated spaces are removed when values are retrieved. It stores up to 8,000
characters.

VARCHAR(size): It holds a variable number of characters. It can store
up to 8,000 characters. If you define VARCHAR(5) for a field and enter
2 characters of data, it reserves 2 bytes. The difference between VARCHAR
and CHAR is that CHAR reserves the size you define, while VARCHAR reserves
space according to the entered character size.

TINYTEXT: It can hold up to 255 characters, including spaces.

TEXT: It can store data of up to 65,535 characters, including spaces.
BLOB: Binary Long Objects – Used for storing binary data. It can store
up to 65,535 bytes (approximately 64 KB) of data.

MEDIUMTEXT: It can store textual data of up to 16,777,215 characters.

LONGTEXT: It can store textual data of up to 4,294,967,295 characters.

ENUM: It can store string values, each of which can be up to a maximum of
65,535 characters long. It is suitable for probabilistic entries, and
entries are sorted based on input priority. Example of the entry
format: ENUM('X','Y','Z','F').

SET: It is similar in structure to ENUM but can have up to 64 entries.

    *** Date and Time Data Types    ***

DATE: Supported range is from '1000-01-01' to '9999-12-31'.
MySQL represents dates in the YYYY-MM-DD format.

DATETIME: Supported range is from '1000-01-01 00:00:00' to
'9999-12-31 23:59:59'. MySQL represents DATETIME values in the
'YYYY-MM-DD HH:MM:SS' format.

TIMESTAMP: Supported range is from '1970-01-01 00:00:00' to any time in
the year 2037. MySQL TIMESTAMP values are represented as YYYYMMDDHHMMSS.
The storage format is the same as DATETIME(). However, you don't manually
send data to this field through your program. It automatically adds the
current date and time, making it useful for insert and update operations.
If you need to manually add a date-time, use DATETIME data type.

TIME: It is used solely for storing time values. The supported range is
from '-838:59:59' to '838:59:59'. MySQL TIME values are represented
as 'HH:MM:SS'.
YEAR: It is used to store 2 or 4-digit year information. In four-digit data,
values from 1901 to 2155 are stored, while two-digit data stores values
from 70 to 69 (1970 to 2069).
*/

#   *** TABLE OPERATIONS ***

# Table Creation
CREATE TABLE db_name
(
    id INT(11)
);

# List Tables
SHOW TABLES;

# Get Information About a Table
EXPLAIN db_name;

# Rename a Table
RENAME TABLE db_name TO new_db_name;

# Drop a Table
DROP TABLE db_name;

# Add a Column to a Table
ALTER TABLE db_name
    ADD COLUMN name VARCHAR(100);

# Add Multiple Columns to a Table
ALTER TABLE db_name
    ADD COLUMN (
        surname VARCHAR(50),
        salary DECIMAL(10, 2)
        );

# Add a Column to a Specific Position in the Table
ALTER TABLE db_name
    ADD COLUMN phone VARCHAR(50) AFTER surname;

# Add a Column to the Beginning of the Table
ALTER TABLE db_name
    ADD COLUMN mail VARCHAR(50) FIRST;

# Delete a Column from a Table
ALTER TABLE db_name
    DROP COLUMN mail;

# Rename a Column
ALTER TABLE db_name
    CHANGE surname username VARCHAR(150);

# Create a Table with a Primary Key
CREATE TABLE test1
(
    id   int(11),
    name VARCHAR(100),
    PRIMARY KEY (id)
);

# Create a Table with a Composite Primary Key
CREATE TABLE test2
(
    id   int(11),
    name VARCHAR(100),
    PRIMARY KEY (id, name)
);

# Drop a Primary Key
ALTER TABLE test2
    DROP PRIMARY KEY;

# Add a Primary Key
ALTER TABLE test2
    ADD PRIMARY KEY (id);

# Drop Multiple Tables
DROP
TABLE test, test1, test2;

# AUTO_INCREMENT
CREATE TABLE test
(
    id   INT(11) AUTO_INCREMENT,
    name VARCHAR(50),
    PRIMARY KEY (id)
);

# NOT NULL
CREATE TABLE test
(
    id      INT(11) AUTO_INCREMENT,
    name    VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

# Charset Setting
CREATE TABLE test
(
    id      INT(11) AUTO_INCREMENT,
    name    VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    surname VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci       NOT NULL,
    PRIMARY KEY (id)
);

# Charset and NOT NULL Update
ALTER TABLE test
    CHANGE name name VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL;

# Set a Default Value
ALTER TABLE test
    CHANGE name name VARCHAR(50)
        CHARACTER SET utf8 COLLATE utf8_turkish_ci
        NULL DEFAULT 'unnamed-person';

# Column Description
ALTER TABLE test
    CHANGE name name VARCHAR(50)
        CHARACTER SET utf8 COLLATE utf8_turkish_ci
        NULL DEFAULT 'unnamed-person';



















