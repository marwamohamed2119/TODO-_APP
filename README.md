# 📝 Todo List Project (PHP & MySQL)

A simple and efficient task management system built with PHP and MySQL. This project was developed as part of the EraaSoft Backend Diploma.

## 🚀 Features
* Create: Add new tasks with a title and priority level.
* Read: View all tasks in a dynamic table fetched from the database.
* Prioritization: Assign different priority levels (High, Medium, Low) to tasks.
* Persistence: All data is stored permanently in a MySQL database.

## 🛠 Tech Stack
* Backend: PHP (OOP principles applied).
* Database: MySQL.
* Frontend: Bootstrap 5, HTML5, CSS3.
* Local Server: XAMPP / Apache.

## 📂 Project Structure
- index.php: The main dashboard displaying the task list.
- create_task.php: The form page to add a new task.
- store-task.php: Handles the POST request and inserts data into the database.
- dp.php: Database connection configuration.
- img/: Directory for project assets and logos.

## 🗄️ Database Schema
To set up the database, run the following SQL command in your phpMyAdmin:

`sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    priority ENUM('low', 'medium', 'high') DEFAULT 'medium',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
