# SD-3101 [Computer Repair Shop Management System]

## Table of Contents
- [Introduction](#introduction)
- [Project Overview](#project-overview)
- [Objectives](#objectives)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup and Installation](#setup-and-installation)
- [Usage Instructions](#usage-instructions)
- [Project Structure](#project-structure)
- [Contributors](#contributors)
- [Chagelog](#changelog)
- [Acknowledgments](#acknowledgments)
- [License](#license)


## Introduction

The **Computer Repair Shop Management System** is a web-based application built with PHP that helps computer repair shops manage their day-to-day operations efficiently. This system streamlines customer and repair job management, making it easier to track repairs, customers, payments, and more. 

## Project Overview

This project is designed to facilitate the management of computer repair shops, providing a user-friendly system to manage customer details, track jobs, and handle invoicing.

## Objectives

- Simplify repair tracking and job management.
- Streamline invoicing and payments.
- Provide an intuitive interface for admins, technicians, and customers.

## Features

- **Customer Management**: Add, edit, and delete customer records.
- **Job Management**: Track repairs, assign jobs, update statuses.
- **Invoice Generation**: Create and print invoices for completed repairs.
- **Inventory Management**: Keep track of parts and supplies.
- **Admin Panel**: Admin dashboard to manage overall system settings.
- **User Roles**: Separate access for Admins, Technicians, and Customers.

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Others**: jQuery, AJAX

## Setup and Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/ad4mny/computer-repair-shop-management-system.git
2. **Server Setup**:
    Ensure you have XAMPP, WAMP, or any other LAMP stack installed.
3. **Database Setup**:
- Import the SQL file located in the /db folder into your MySQL database.
- Update the config.php file with your database credentials.
4. **Run the Application**:
- Start your local server (Apache and MySQL).
- Navigate to the project folder in your browser.
- You should now be able to access the system.

## Usage Instructions

- **Admin** : The admin has complete control over the system, including customer management, job assignments, invoice generation, and system settings.
- **Technicians** : Technicians can update job statuses and track assigned tasks.
- **Customers** : Customers can log in to check their job statuses.

[UI Placeholder](./assets/img/UI.png)

[UI Placeholder](./assets/img/UII.png)

## Project Structure
.
├── application/
│   ├── cache
│   ├── config
│   ├── controllers
│   ├── core
│   ├── helpers
│   ├── hooks
│   ├── language
│   ├── libraries
│   ├── log
│   ├── models
│   ├── third_party
│   └── views
├── assets/
│   ├── css
│   ├── img
│   ├── jquery
│   ├── js
│   └── webfonts
├── database/
│   └── dcrsdb
├── system/
│   ├── core
│   ├── database
│   ├── fonts
│   ├── helpers
│   ├── language
│   └── libraries
├── editorconfig
├── index
└── readme

## Contributor

   - **Eulice Mage Gonzales**: Lead Developer, Backend Developer
   - **Christian James Lumbre**: Frontend Developer, UI/UX Designer
   - **Gerald Villaran**: Project Manager, Tester

## Project Timeline

Outline the project timeline, including milestones or deliverables. Example:

- **Week 1-2**: Research and project planning.
- **Week 3-5**: Design and setup.
- **Week 6-10**: Implementation.
- **Week 11-12**: Testing and debugging.
- **Week 13-14**: Final presentation and documentation.

## Change Log

   ### [Version 1.0.0] - 2024-09-07
   - Initial release of the project.
   - Added basic functionality for [Feature 1], [Feature 2], and [Feature 3].

   ### [Version 1.1.0] - 2024-09-14
   - Improved user interface for [Feature 1].
   - Fixed bugs related to [Feature 2].
   - Updated project documentation with setup instructions.

   ### [Version 1.2.0] - 2024-09-21
   - Added new functionality for [Feature 4].
   - Refactored codebase for better performance.
   - Added unit tests for [Feature 3] and [Feature 4].

## Acknowledgements

   This project was built from [computer-repair-shop-management-system](https://github.com/ad4mny/computer-repair-shop-management-system), created by [ad4mny]. You can view the original repository [here](https://github.com/ad4mny/computer-repair-shop-management-system).

## License

   This project is open-source and available under the MIT License.

