# Employee Information Management System

This project is a secure and efficient employee information management system developed using a **MySQL database**. The system allows storing, managing, and securing employee data such as personal details and login credentials. It aims to provide a user-friendly interface for employees to log in, view, and update their profiles while maintaining data integrity, security, and privacy.

## Project Overview

### Objective
The main objective of this project is to develop a robust web application that allows secure management of employee data, with the following core functionalities:
- **User Authentication:** Encrypted password storage and account suspension after multiple failed attempts.
- **Profile Management:** Employees can securely view and update their personal information.
- **Data Security:** Sensitive data is encrypted, and regular encrypted backups are created.

### Technologies Used
- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Security:** OpenSSL for encrypted backups using AES-256 encryption.

## Features

### 1. User Authentication
- Passwords are encrypted using AES-256 before being stored in the database.
- Login attempts are tracked and accounts are suspended after a set number of failed attempts to prevent brute force attacks.
  
### 2. Role-Based Access Control
- Different roles (e.g., employees, managers) have distinct permissions for accessing and modifying data.
  
### 3. Backup and Restore System
- Regular encrypted backups are created using AES-256-CBC encryption.
- Encrypted backup files can be decrypted and restored securely.

### 4. SQL Injection Prevention
- SQL queries are parameterized to protect against SQL injection attacks.

### 5. Login and Logout History
- Login and logout times are recorded in the database for monitoring user activity.

## Security Measures
1. **AES-256 Encryption:** Passwords and backup files are encrypted to ensure the security of sensitive information.
2. **Role-Based Access Control:** Each user has permissions based on their role (e.g., manager, employee).
3. **Prepared Statements:** Used to prevent SQL injection attacks.
4. **Encrypted Backups:** Critical files and databases are backed up securely using encryption.
5. **Audit Logs:** Changes to user profiles and sensitive actions are tracked for accountability.

## Threat Modeling
- **SQL Injection Protection:** SQL queries are parameterized to prevent unauthorized access.
- **Brute Force Attack Prevention:** Login attempts are limited and tracked, and accounts are suspended after too many failed attempts.
- **DoS Attack Resistance:** Systems are designed to manage server load effectively.

## Compliance with PDPA2010
The application complies with the **Personal Data Protection Act (PDPA) 2010**, covering:
- Data collection, processing, storage, and disposal.
- Secure data usage and protection from unauthorized access.

## Installation Instructions
1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo-name.git
   cd your-repo-name
