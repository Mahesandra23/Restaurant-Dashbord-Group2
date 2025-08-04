# 🍽️ Restoran

It is a simulation of a restaurant website with full functionality for both **Admin** and **Customer** roles.

---

## 👥 Created by Group 2

---

## 🎯 Project Objectives

- Apply web programming skills (HTML, CSS, PHP, MySQL)
- Build a dynamic, secure, and interactive restaurant website
- Enable both **Admin** and **User** roles with specific features
- Secure the system from SQL Injection and provide a responsive user experience

---

## 🛠️ Technologies Used

- **HTML, CSS, Bootstrap, JavaScript** – Front-end structure and behavior
- **PHP (Native)** – Back-end logic
- **MySQL** – Database

---

## 🌐 Main Features

### 🧑‍🍳 Admin Panel
- 🔐 Login & Logout with validation and CAPTCHA
- 📋 View, add, edit, delete food & drink menus
- 🖼️ Each menu item has image, name, description, price, category
- 🧾 Menu displayed in table with edit/delete/tambah buttons
- ❌ Secure login (protected from SQL Injection)

### 👤 Customer Features
- 🔐 Login & Register (required for ordering)
- 👁️ View menu by category (Appetizer, Dessert, Drink, etc.)
- 📋 Click image or name to see details (price, description)
- 🛒 Place orders after login (or redirected to login if not)
- 📝 View list of orders with total price
- 🧾 Registration includes full name, username/email, password, gender, birthdate

### 🔐 Authentication Features
- CAPTCHA in login page (mix of numbers and letters)
- Warning for incorrect/empty username or password
- Prevent SQL injection on login form

---

## ✅ Project Flow Summary

1. **Homepage** accessible by all (Admin & Customer)
2. **Menus** can be browsed freely without login
3. **Admin Login** is required to do CRUD on menus
4. **Customer Login** is required to place orders
5. If not registered → redirected to **Sign Up page**

---

## 📦 How to Run This Project

> 📝 Make sure your local server is running (XAMPP, Laragon, etc.)

1. Clone or download this repository
2. Import the database file (`database.sql`) to your MySQL server
3. Place the project folder in your `htdocs` directory
4. Access via browser at `http://localhost/restoran-if330`
5. Start from `index.php`

