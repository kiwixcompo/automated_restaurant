# Automated Restaurant

A web-based restaurant management system for handling menu, orders, and reservations. Built with PHP and MySQL, it provides an admin dashboard for managing food, drinks, desserts, soups, and customer reservations.

## Features
- Admin login and dashboard
- Add, edit, and delete menu items (food, drinks, desserts, soups)
- View and manage customer orders
- View and manage seat reservations
- Responsive and styled UI

## Requirements
- PHP 5.4+
- MySQL 5.6+
- Apache/Nginx web server
- Composer (optional, for dependency management)

## Setup Instructions
1. **Clone the repository:**
   ```
   git clone <your-repo-url>
   cd automated_restaurant
   ```
2. **Import the database:**
   - Use `restaurant.sql` to create the database and tables in your MySQL server.
   - Example using phpMyAdmin or MySQL CLI:
     ```
     mysql -u root -p < restaurant.sql
     ```
3. **Configure database connection:**
   - Edit `db.php` if your MySQL credentials differ from the default (`root`/no password).
4. **Run the app:**
   - Place the project folder in your web server's root directory (e.g., `www` or `htdocs`).
   - Access the app via `http://localhost/automated_restaurant` in your browser.

## Demo Admin Login
- **Username:** admin
- **Password:** login

## File Structure
- `index.php` - Main landing and admin login page
- `dashboard.php` - Admin dashboard
- `add_*.php`, `edit_*.php`, `delete_*.php` - CRUD for menu items
- `view_orders.php`, `view_reservations.php` - Manage orders and reservations
- `restaurant.sql` - Database schema
- `css/`, `js/`, `images/` - Assets and resources

## License
This project is for demonstration and educational purposes. 