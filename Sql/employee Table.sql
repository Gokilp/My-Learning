 -- Create a employee Table 

 CREATE TABLE Employee (
    EmployeeId VARCHAR(20) PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Address1 VARCHAR(100),
    Address2 VARCHAR(100),
    City VARCHAR(50),
    State VARCHAR(50),
    Country VARCHAR(50),
    Pincode VARCHAR(10),
    Joining_Date DATE,
    Department_Id INT
);



--  Create a Department  Table 

CREATE TABLE Department (
    Department_Id INT PRIMARY KEY,
    Department_Name VARCHAR(50),
    Rights_Id INT
);

--  Create a Table Right Table 

CREATE TABLE Rights (
    Rights_Id INT PRIMARY KEY,
    Rights_Name VARCHAR(50)
);

-- Create Table Attadance 
CREATE TABLE Attendance (
    EmployeeId VARCHAR(20),
    Days_Worked INT,
    Days_Absent INT,
    FOREIGN KEY (EmployeeId) REFERENCES Employee(EmployeeId)
);


--  Create SalaryPer Hour 

CREATE TABLE SalaryPerHour (
    Salary_Id INT PRIMARY KEY,
    Department_Id INT,
    Salary_Per_Hour DECIMAL(10, 2),
    FOREIGN KEY (Department_Id) REFERENCES Department(Department_Id)
);



-- insert a value  Employee 

INSERT INTO Employee (EmployeeId, FirstName, LastName, Address1, Address2, City, State, Country, Pincode, Joining_Date, Department_Id) 
VALUES 
('Jpencil20240001', 'Gokil', 'P', '123 Main St', '', 'New York', 'NY', 'USA', '10001', '2023-06-01', 1),
('Jpencil20240002', 'Ram', 'Kumar', '456 Elm St', '', 'Los Angeles', 'CA', 'USA', '90001', '2023-06-02', 1),
('Jpencil20240003', 'Krihna', 'Kumar', '789 Maple St', '', 'Chicago', 'IL', 'USA', '60001', '2023-06-03', 1),
('Jpencil20240004', 'Roshini', 'Kumari', '321 Oak St', '', 'Houston', 'TX', 'USA', '77001', '2023-06-04', 1),
('Jpencil20240005', 'David', 'Brown', '654 Pine St', '', 'Philadelphia', 'PA', 'USA', '19001', '2023-06-05', 1),
('Jpencil20240006', 'Chris', 'Evans', '321 Walnut St', '', 'San Francisco', 'CA', 'USA', '94101', '2023-06-06', 2),
('Jpencil20240007', 'Sara', 'Parker', '876 Cedar St', '', 'Boston', 'MA', 'USA', '02101', '2023-06-07', 2),
('Jpencil20240008', 'Jessica', 'Green', '654 Birch St', '', 'Seattle', 'WA', 'USA', '98101', '2023-06-08', 2),
('Jpencil20240009', 'James', 'White', '123 Willow St', '', 'Miami', 'FL', 'USA', '33101', '2023-06-09', 2),
('Jpencil20240010', 'Laura', 'Black', '456 Palm St', '', 'Dallas', 'TX', 'USA', '75201', '2023-06-10', 2);



-- Insert a value Attendence 

INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240001', 20, 2);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240002', 18, 4);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240003', 21, 1);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240004', 22, 0);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240005', 19, 3);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240006', 22, 0);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240007', 18, 4);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240008', 21, 1);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240009', 20, 2);
INSERT INTO Attendance (EmployeeId, Days_Worked, Days_Absent) VALUES ('Jpencil20240010', 19, 3);


-- SalaryPerHour 

INSERT INTO SalaryPerHour (Salary_Id, Department_Id, Salary_Per_Hour) VALUES (1, 1, 25.00);
INSERT INTO SalaryPerHour (Salary_Id, Department_Id, Salary_Per_Hour) VALUES (2, 2, 30.00);
INSERT INTO SalaryPerHour (Salary_Id, Department_Id, Salary_Per_Hour) VALUES (3, 3, 28.00);
INSERT INTO SalaryPerHour (Salary_Id, Department_Id, Salary_Per_Hour) VALUES (4, 4, 26.00);
INSERT INTO SalaryPerHour (Salary_Id, Department_Id, Salary_Per_Hour) VALUES (5,5,40.00); 


-- Department

INSERT INTO Department (Department_Id, Department_Name, Rights_Id) VALUES (1, 'HR', 1);
INSERT INTO Department (Department_Id, Department_Name, Rights_Id) VALUES (2, 'IT', 2);
INSERT INTO Department (Department_Id, Department_Name, Rights_Id) VALUES (3, 'Finance', 3);
INSERT INTO Department (Department_Id, Department_Name, Rights_Id) VALUES (4, 'Marketing', 4);
INSERT INTO Department (Department_Id, Department_Name, Rights_Id) VALUES (5, 'Sales', 5);

-- Rights 

INSERT INTO Rights (Rights_Id, Rights_Name) VALUES (1, 'Admin');
INSERT INTO Rights (Rights_Id, Rights_Name) VALUES (2, 'User');
INSERT INTO Rights (Rights_Id, Rights_Name) VALUES (3, 'Manager');
INSERT INTO Rights (Rights_Id, Rights_Name) VALUES (4, 'Employee');
INSERT INTO Rights (Rights_Id, Rights_Name) VALUES (5, 'Guest');


-- Using Joins 

SELECT 
    CONCAT(e.FirstName, ' ', e.LastName) AS EmployeeName,
    d.Department_Name AS Department,
    a.Days AS TotalWorkingDays,
    (31 - a.Days) AS LeaveDays, 
    (a.Days * s.Salary_per_hour) AS SalaryOfLastMonth,
    ((31 - a.Days) * s.Salary_per_hour) AS Deduction,
    ((a.Days * s.Salary_per_hour) * 0.075) AS PFAmount,
    ((a.Days * s.Salary_per_hour) - ((31 - a.Days) * s.Salary_per_hour) - ((a.Days * s.Salary_per_hour) * 0.075)) AS GrandTotal
FROM 
    Employee e
JOIN 
    Department d ON e.Department_Id = d.Department_Id
JOIN 
    Attendance a ON e.EmployeeId = a.EmployeeId
JOIN 
    SalaryPerHour s ON e.Department_Id = s.Department_Id						
