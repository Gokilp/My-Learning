# **Database**

A database is an organized collection of structured information or data, typically stored electronically in a computer system. Let me provide you with more details:

## **Definition:**

A database consists of data that is logically organized and efficiently managed. It can store various types of information, such as text, numbers, images, and more. Databases are usually controlled by a Database Management System (DBMS).

## **Key Features:**

Structured Data: Data within databases is typically modeled in rows and columns, organized into tables for efficient processing and querying.
Access and Management: Databases allow easy access, modification, and organization of data.
SQL: Most databases use Structured Query Language (SQL) for writing and querying data.

## **Evolution of Databases:**

1. **960s - Hierarchical Databases:** Organized data in tree-like structures (e.g., IBM's IMS).
2. **Late 1960s to early 1970s - Network Databases:** Introduced many-to-many relationships (network model).
3. **1970s - Relational Databases:** Edgar F. Codd's relational model with tables, keys, and relationships (e.g., Oracle, MySQL).
4. **1970s - SQL (Structured Query Language):** Standard language for relational databases.
5. **1980s to 1990s - Object-Oriented Databases:** Stored data in objects (OODBMS).
6. **2000s onwards - NoSQL Databases:** Scalable, flexible solutions for unstructured data (e.g., MongoDB, Cassandra).
7. **2010s onwards - NewSQL Databases:** Blend of SQL and NoSQL features for high-throughput workloads.
8. **Present - Cloud and Serverless Databases:** Scalable, managed solutions in the cloud with serverless options (e.g., AWS RDS, Azure SQL Database, Google Cloud Spanner).

## **Difference Between Databases and Spreadsheets:**

Databases:

- Designed for large collections of organized information.
- Allow multiple users simultaneous access using complex logic and language.
  Spreadsheets (e.g., Microsoft Excel):
- Originally designed for single users.
- Suitable for simpler data manipulation.

# **DBMS**

- Database Management System (DBMS) acts as an interface between the database and end-users.
- It is software used to store, retrieve, define, and manage data in a database.
- Supports easy CRUD operations (Create, Read, Update, Delete).
- Manages authentication, concurrency, logging, backup, optimization, etc.

## **Types of Databases:**

- **[Hierarchical databases](https://www.geeksforgeeks.org/hierarchical-model-in-dbms/)**
- **[Network databases](https://www.geeksforgeeks.org/network-model-in-dbms/)**
- **[Object-oriented databases](https://www.geeksforgeeks.org/difference-between-rdbms-and-oodbms/)**
- **[Relational databases](https://www.geeksforgeeks.org/relational-model-in-dbms/)**
- **[Cloud Database](https://www.geeksforgeeks.org/introduction-to-nosql-cloud-database-services/)**
- **[Centralized Database](https://www.geeksforgeeks.org/comparison-centralized-decentralized-and-distributed-systems/)**
- **[Operational Database](https://www.geeksforgeeks.org/differences-between-operational-database-systems-and-data-warehouse/)**
- **[NoSQL databases](https://www.geeksforgeeks.org/introduction-to-nosql/)**

# Relational Data Base

A Relational Database is a type of database that organizes data into tables with predefined relationships between them. This type of database follows the relational model, which was first proposed by Edgar F. Codd in 1970. Relational databases are based on the principles of relational algebra and use Structured Query Language (SQL) for querying and managing data.

Key features of relational databases include:

1. **Tables**: Data is stored in tables, where each table represents an entity (e.g., customers, products, orders) and consists of rows and columns. Each row in a table represents a record or instance of the entity, and each column represents an attribute or property of the entity.
2. **Relationships**: Relational databases establish relationships between tables using keys. The primary key uniquely identifies each record in a table, while foreign keys establish links between related tables. Common types of relationships include one-to-one, one-to-many, and many-to-many.
3. **Normalization**: Relational databases use normalization techniques to reduce redundancy and improve data integrity. Normalization involves organizing data into multiple related tables to avoid data duplication and inconsistencies.
4. **ACID Properties**: Relational databases adhere to the ACID properties, which ensure data consistency, reliability, and atomicity. ACID stands for Atomicity, Consistency, Isolation, and Durability.
5. **Structured Query Language (SQL)**: Relational databases use SQL for querying and manipulating data. SQL allows users to perform operations such as selecting, inserting, updating, and deleting data, as well as defining database structures and constraints.

Examples of popular relational database management systems (RDBMS) include:

- MySQL: An open-source RDBMS widely used for web applications and small to medium-sized databases.
- PostgreSQL: An open-source RDBMS known for its advanced features, scalability, and extensibility.
- Oracle Database: A commercial RDBMS known for its robustness, scalability, and enterprise-level capabilities.
- Microsoft SQL Server: A commercial RDBMS developed by Microsoft, commonly used in Windows-based environments and enterprise applications.
- SQLite: A lightweight, embedded RDBMS suitable for mobile apps, IoT devices, and small-scale applications.

# SQL?

- **SQL stands for Structured Query Language** and \**\*\*is a computer language that we use to interact with a relational database. SQL is a tool for *organizing*, *managing*, and *retrieving\* archived data from a computer database. The original name was given by IBM as Structured English Query Language, abbreviated by the acronym SEQUEL.

- When data needs to be retrieved from a database, SQL is used to make the request. The DBMS processes the SQL query retrieves the requested data and returns it to us. Rather, SQL statements describe how a collection of data should be organized or what data should be extracted or added to the database.

## SQL Data Base

- Mysql ⇒ Open Source
- SQL Server ⇒ Microsoft
- Oracle ⇒ IBM
- PostgreSQL ⇒ Opensource

# SQL REQUIRES

```java
/*
  multiline command

 /*

 -- single line command

```

# DataTypes

## Character Data

**char** - eg:char(5) stores fixed length string of length 5. Max 255 bytes.

**varchar** - eg:varchar(5) stores variable length string of length 5. Max 65535 bytes.

```sql
SHOW CHARACTER SET; -- shows various character sets that are supported.
```

latin1 is the default character set. We can also choose a specific character set like below,

```sql
varchar(10) character set utf8    -- the particular column is set to utf8
create database foreign_sales character set utf8;   -- entire database is set to utf8
```

## Text Data

All images in the section are from Learning SQL by Alan Beaulieu

![Untitled](https://prod-files-secure.s3.us-west-2.amazonaws.com/2603bb63-fafb-446c-b8a4-918eec11024e/f1879307-f804-4c4f-a8ab-d8ddc21ed525/Untitled.png)

**BLOB** - Binary Large Object File → TinyBlob, Blob, MediumBlob, LongBlob

## Numerical Data

**Whole Numbers:**

![Untitled](https://prod-files-secure.s3.us-west-2.amazonaws.com/2603bb63-fafb-446c-b8a4-918eec11024e/0ad702d3-1df6-47dc-91f5-3f9138046019/Untitled.png)

Tinyint is used to store Bool or Boolean \*\*\*\*

**Decimal Numbers:**

![Untitled](https://prod-files-secure.s3.us-west-2.amazonaws.com/2603bb63-fafb-446c-b8a4-918eec11024e/7852ed89-95ba-4b8e-beb5-bab9a0ee31fe/Untitled.png)

## Temporal Data

![Untitled](https://prod-files-secure.s3.us-west-2.amazonaws.com/2603bb63-fafb-446c-b8a4-918eec11024e/6cd5ee5d-b207-46d1-9a1d-4dbc2ba5847e/Untitled.png)

# Basic Query

```sql
show databases;   // show all the database
```

Create a database

```sql
create database (Databasename);  // create a database
```

Delete a database

```sql
drop database code;  // delete a data base

drop schema (Databasename);// delete a data base

drop schema if exists (Databasename);// already delete shown an warning on console
```

use data base

```sql
USE (Data base name) ;
SHOW TABLES;  // show all the tables

```

## Table - Create,Delete,Alter

primary key - uniquely identifies a row in a table

```sql
//creating a table
CREATE TABLE student(
	id INT PRIMARY KEY,
    name VARCHAR(30),
    gpa DECIMAL(3,2)
);
-- ----or-----
CREATE TABLE student(
	id INT,
    name VARCHAR(30),
    gpa DECIMAL(3,2),
    PRIMARY KEY(id)
);

DROP TABLE student; -- drops the table

DESCRIBE student; -- describes the columns in the table student

ALTER TABLE student ADD department VARCHAR(5); -- Adds a new column department to the student table

ALTER TABLE student DROP COLUMN department; -- drops the department column from student table
-- ---or---
ALTER TABLE student DROP department; -- same as above

```

## Inserting Data

```sql
INSERT INTO student VALUES(1,"Aarthi",7.6);
INSERT INTO student VALUES(2,"Anitha",8.5); -- inserts a row. give values in column order

INSERT INTO student VALUES
(3,"Anitha",8.5),
(4,"Arul",8.2),
(5,"Ashwin",7.6); -- inserts more than one row

INSERT INTO student(id,name) VALUES(5,"Balaji"),(6,"Chandru"); -- inserts specific columns.

```

## Select

```sql
SELECT * FROM student; -- displays all rows and columns in the student table
SELECT id,name FROM student; -- displays specific columns
```

Example

```sql

create database Employee;
use Employee;
create table emp(
 emp_id Int primary key,
 emp_name Varchar(20),
 job_desc varchar(30),
 salary  Int
);

INSERT INTO emp VALUES(001,"Gokil","SoftwareEng",25000);
insert into emp values(002,"kalai","account",10000);
insert into emp values (003,"vani","engineer",5000);
insert  into emp values(004,"poorni","Datascience",500000);
insert into emp values(005,"jana","throwball", 9000);
insert into emp values(006,"Raja","painter",200000);
insert into emp values(007,"roja","sqldev",15000);
insert into emp values(008,"Ramu","webdev",1000000);
insert into emp values(009,"Ramesh","andriod",60000);
insert into emp values(010,"Raghul","carparenter",50000);

select * from emp;
```

# Where Clause and Conditions

where is used to filter the records. The rows are filtered based on conditions.

- **Query for Employee table** (click the initial arrow to expand)

  ```sql
  CREATE TABLE employee (
  emp_id INT PRIMARY KEY,
  ename VARCHAR(30),
  job_desc VARCHAR(20),
  salary INT );

  INSERT INTO employee VALUES(1,'Ram','ADMIN',1000000);
  INSERT INTO employee VALUES(2,'Harini','MANAGER',2500000);
  INSERT INTO employee VALUES(3,'George','SALES',2000000);
  INSERT INTO employee VALUES(4,'Ramya','SALES',1300000);
  INSERT INTO employee VALUES(5,'Meena','HR',2000000);
  INSERT INTO employee VALUES(6,'Ashok','MANAGER',3000000);
  INSERT INTO employee VALUES(7,'Abdul','HR',2000000);
  INSERT INTO employee VALUES(8,'Ramya','ENGINEER',1000000);
  INSERT INTO employee VALUES(9,'Raghu','CEO',8000000);
  INSERT INTO employee VALUES(10,'Arvind','MANAGER',2800000);
  INSERT INTO employee VALUES(11,'Akshay','ENGINEER',1000000);
  INSERT INTO employee VALUES(12,'John','ADMIN',2200000);
  INSERT INTO employee VALUES(13,'Abinaya','ENGINEER',2100000);
  ```

```sql
SELECT column1, column2, ...
FROM table_name
WHERE condition;
```

Following can be used within the condition.

# |

|
Equal
|
| --- | --- |
|

> |
> Greater than
> |
> |
> <
> |
> Less than
> |
> |
> =
> |
> Greater than or equal
> |
> |
> <=
> |
> Less than or equal
> |
> |
> <>
> |
> Not equal. Note: In some versions of SQL
> this operator may be written as !=
> |
> |
> BETWEEN
> |
> Between a certain range
> |
> | LIKE | Search for a pattern |
> | IN | To specify multiple possible values for a column |
> | NOT | negation |

| Operator | Description                                                                  |     |
| -------- | ---------------------------------------------------------------------------- | --- |
| =        | Equal                                                                        |     |
| >        | Greater than                                                                 |     |
| <        | Less than                                                                    |     |
| >=       | Greater than or equal                                                        |     |
| <=       | Less than or equal                                                           |     |
| <> or != | Not equal. Note: In some versions of SQL, this operator may be written as != |     |
| BETWEEN  | Between a certain range                                                      |     |
| LIKE     | Search for a pattern                                                         |     |
| IN       | To specify multiple possible values for a column                             |     |
| NOT      | Negation                                                                     |     |

## **Usage Examples**

- **Equal**: **`column_name = value`**
- **Greater than**: **`column_name > value`**
- **Less than**: **`column_name < value`**
- **Greater than or equal**: **`column_name >= value`**
- **Less than or equal**: **`column_name <= value`**
- **Not equal**: **`column_name <> value`** or **`column_name != value`**
- **Between a certain range**: **`column_name BETWEEN value1 AND value2`**
- **Search for a pattern**: **`column_name LIKE 'pattern'`**
- **Specify multiple possible values**: **`column_name IN (value1, value2, ...)`**
- **Negation**: **`NOT condition`**

AND/OR can be used to combine the relational operators.

```sql
SELECT * FROM employee
WHERE ename = 'Ramya';

SELECT emp_id,ename,salary FROM employee
WHERE salary>2000000;

SELECT emp_id,ename,salary FROM employee
WHERE salary<2600000 AND job_desc = 'MANAGER';

SELECT * FROM employee
WHERE job_desc='ADMIN' OR job_desc='HR'; -- though this works next command is a much better choice

SELECT * FROM employee
WHERE job_desc IN ('ADMIN','HR');

SELECT * FROM employee
WHERE job_desc NOT IN ('MANAGER','CEO');

SELECT * FROM employee
WHERE salary BETWEEN 2000000 AND 3000000
LIMIT 5; --limits the records shown

SELECT * FROM employee
LIMIT 5;  -- Different syntax in oracle/sql server
```

## **Using Like and wildcards**

LIKE is used with WHERE clause for searching a specific pattern in a column. It is used along with the following wild cards

% represents zero or more characters

\_ represents exactly one character

```sql
-- Filters names starting with 'A'
SELECT * FROM employee
WHERE ename LIKE 'A%';

-- Filters names ending with 'A'
SELECT * FROM employee
WHERE ename LIKE '%A';

-- Filters names starting with 'R' and ending with 'a'
SELECT * FROM employee
WHERE ename LIKE 'R%a';

-- Filters names containing 'I'
SELECT * FROM employee
WHERE ename LIKE '%I%';

-- Filters names with 'i' as the third character
SELECT * FROM employee
WHERE ename LIKE '__I%';

-- Filters names starting with 'R%'
SELECT * FROM employee
WHERE ename LIKE 'R\%';

-- Additional examples for clarity
SELECT * FROM Customer
WHERE CustomerName LIKE 'a%'; -- Finds any values that start with "a"

SELECT * FROM Customer
WHERE CustomerName LIKE '%a'; -- Finds any values that end with "a"

SELECT * FROM Customer
WHERE CustomerName LIKE '%or%'; -- Finds any values that have "or" in any position

SELECT * FROM Customer
WHERE CustomerName LIKE '_r%'; -- Finds any values that have "r" in the second position

SELECT * FROM Customer
WHERE CustomerName LIKE 'a_%_%'; -- Finds any values that start with "a" and are at least 3 characters in length

SELECT * FROM Customer
WHERE ContactName LIKE 'a%o'; -- Finds any values that start with "a" and end with "o"

```

## Update and Delete

```sql
UPDATE employee
SET job_desc = "Analyst"; -- updates all job_desc of all rows to "Analyst" when safe update not enabled

UPDATE employee
SET job_desc = "Analyst"
WHERE job_desc = "Engineer"; -- changes Engineer to Analyst in all applicable rows

UPDATE employee
SET job_desc = "Analyst"
WHERE emp_id=1;

DELETE FROM employee; -- deletes all rows

DELETE from employee
WHERE emp_id = 12;
```
