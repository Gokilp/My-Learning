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

# Realtional Data Base

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

**SQL stands for Structured Query Language** and \**\*\*is a computer language that we use to interact with a relational database. SQL is a tool for *organizing*, *managing*, and *retrieving\* archived data from a computer database. The original name was given by IBM as Structured English Query Language, abbreviated by the acronym SEQUEL.

When data needs to be retrieved from a database, SQL is used to make the request. The DBMS processes the SQL query retrieves the requested data and returns it to us. Rather, SQL statements describe how a collection of data should be organized or what data should be extracted or added to the database.
