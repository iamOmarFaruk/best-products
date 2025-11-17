# Product Management System

A comprehensive full-stack product management application built with Laravel 12, demonstrating proficiency in backend development, database design, and modern UI/UX principles.

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=flat&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Railway-4479A1?style=flat&logo=mysql)

## 🎯 Project Overview

This project showcases a complete CRUD (Create, Read, Update, Delete) application for managing products with a clean, professional interface inspired by macOS design principles. Built as part of a Laravel Query Builder assignment, it demonstrates practical implementation of core web development concepts.

**Live Demo:** [View Application](#)

## ✨ Key Features

- **Full CRUD Operations**: Create, read, update, and delete products seamlessly
- **Image Management**: Upload and store product images with automatic file handling
- **Database Integration**: Connected to Railway MySQL cloud database for production-ready deployment
- **Responsive Design**: Clean, modern UI that works across all devices
- **Custom Modal Dialogs**: Professional confirmation modals with smooth animations
- **Toast Notifications**: Non-intrusive success/error messages
- **Pagination**: Efficiently handles large product catalogs
- **Form Validation**: Server-side validation ensuring data integrity

## 🛠️ Technical Stack

**Backend:**
- Laravel 12.x (PHP Framework)
- Laravel Query Builder (Raw database queries - No Eloquent ORM)
- PHP 8.4

**Frontend:**
- Blade Templating Engine
- Custom CSS with Google Fonts (Inter)
- Vanilla JavaScript for interactivity

**Database:**
- MySQL (Railway Cloud Database)
- Structured migrations with proper indexing

**Deployment Ready:**
- Railway Platform configuration
- Environment-based configuration
- Production-grade error handling

## 📋 Database Schema

```sql
products
├── id (Primary Key)
├── product_id (Unique, Auto-generated)
├── name (Required)
├── description (Optional)
├── price (Decimal, Required)
├── stock (Integer, Optional)
├── image (Required)
├── created_at (Timestamp)
└── updated_at (Timestamp)
```

## 🚀 Installation & Setup

```bash
# Clone the repository
git clone https://github.com/iamOmarFaruk/best-products.git
cd best-products

# Install dependencies
composer install

# Configure environment
cp .env.example .env
php artisan key:generate

# Set up database in .env
DB_CONNECTION=mysql
DB_HOST=your-railway-host
DB_PORT=your-railway-port
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=your-password

# Run migrations
php artisan migrate

# Start development server
php artisan serve
```

Visit `http://127.0.0.1:8000` to view the application.

## 💡 What I Learned

### Backend Development
- **Laravel Query Builder**: Implemented all CRUD operations using raw query builder instead of Eloquent ORM, demonstrating understanding of SQL and database interactions
- **File Upload Handling**: Managed image uploads with proper validation, storage, and deletion
- **Database Migrations**: Created structured database schemas with proper data types and constraints
- **Form Validation**: Implemented server-side validation with custom error messages
- **RESTful Routing**: Utilized Laravel's resource controllers for clean, organized routes

### Frontend Development
- **Blade Templating**: Created reusable layouts with dynamic content sections
- **CSS Architecture**: Built a complete design system with consistent styling patterns
- **JavaScript Interactions**: Implemented custom modals, toast notifications, and animations without frameworks
- **Responsive Design**: Ensured cross-device compatibility with flexbox and modern CSS

### DevOps & Deployment
- **Cloud Database Integration**: Connected application to Railway MySQL for production-ready setup
- **Git Version Control**: Maintained clean commit history with descriptive messages
- **Environment Configuration**: Managed sensitive credentials using environment variables

### UI/UX Design
- **macOS Design System**: Replicated Apple's clean, minimal aesthetic
- **User Feedback**: Implemented non-intrusive notifications and confirmation dialogs
- **Accessibility**: Ensured proper contrast, font sizing, and interactive elements

## 📁 Project Structure

```
best-products/
├── app/
│   └── Http/Controllers/
│       └── ProductController.php    # All CRUD logic
├── database/
│   └── migrations/
│       └── create_products_table.php
├── public/
│   └── images/products/             # Product image storage
├── resources/
│   └── views/
│       ├── layouts/app.blade.php    # Main layout
│       └── products/
│           ├── index.blade.php      # Product listing
│           ├── create.blade.php     # Create form
│           ├── edit.blade.php       # Edit form
│           └── show.blade.php       # Product details
└── routes/
    └── web.php                      # Application routes
```

## 🎨 Design Highlights

- **Inter Font Family**: Modern, professional typography
- **Custom Modal System**: Smooth slide-down animations with backdrop blur
- **Consistent Button Styling**: Uniform sizing and styling across all actions
- **Toast Notifications**: Slide-in animations with auto-dismiss
- **Sticky Footer**: Properly positioned footer with dynamic year
- **Product Cards**: Clean, organized display with image thumbnails

## 📊 Technical Decisions

**Why Query Builder over Eloquent?**
- Assignment requirement to demonstrate SQL understanding
- More control over database queries
- Better learning experience for database fundamentals

**Why Public Storage for Images?**
- Simple, straightforward approach for this project scope
- Direct URL access without symbolic links
- Easy to understand and maintain

**Why Custom CSS over Frameworks?**
- Demonstrates CSS proficiency
- Lightweight and performant
- Full control over design system

## 🔄 API Routes

```php
GET    /products              # List all products (paginated)
GET    /products/create       # Show create form
POST   /products              # Store new product
GET    /products/{id}         # Show product details
GET    /products/{id}/edit    # Show edit form
PUT    /products/{id}         # Update product
DELETE /products/{id}         # Delete product
```

## 🎓 Skills Demonstrated

✅ Laravel Framework Architecture  
✅ Database Design & Migrations  
✅ Query Builder & Raw SQL  
✅ File Upload & Management  
✅ Form Validation & Error Handling  
✅ RESTful API Design  
✅ Blade Templating Engine  
✅ Custom CSS & Responsive Design  
✅ JavaScript DOM Manipulation  
✅ Git Version Control  
✅ Cloud Database Integration  
✅ UI/UX Design Principles  

## 👨‍💻 Author

**Omar Faruk**

- GitHub: [@iamOmarFaruk](https://github.com/iamOmarFaruk)
- Portfolio: [omarfaruk.dev](https://omarfaruk.dev/)
- LinkedIn: [omar-expert-webdeveloper](https://www.linkedin.com/in/omar-expert-webdeveloper/)

## 📝 License

This project is open-sourced under the MIT License.

## 🙏 Acknowledgments

Built as part of Laravel Query Builder assignment to demonstrate full-stack development capabilities with modern web technologies and best practices.
