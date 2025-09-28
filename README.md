# MJ Final - Laravel Project

A Laravel 10 application with Filament admin panel for managing articles, categories, and documents.

## 🚀 Features

- **Laravel 10** with PHP 8.4+ support
- **Filament Admin Panel** for content management
- **Articles Management** system
- **Categories & Documents** functionality
- **Livewire** components for dynamic frontend
- **Tailwind CSS** for styling
- **SQLite** database (easy setup, no MySQL required)

## 📋 Requirements

- PHP 8.1 or higher
- Composer
- Node.js & npm
- Git

## 🛠️ Quick Setup (Lazy Mode)

Run the setup script and you're done:

```bash
chmod +x setup.sh
./setup.sh
```

That's it! The script will handle everything automatically.

## 📖 Manual Setup

If you prefer to set things up manually:

### 1. Clone & Install Dependencies

```bash
git clone https://github.com/gouzidev/mj_final.git
cd mj_final
composer update
npm install
```

### 2. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database Setup

The project uses SQLite for simplicity:

```bash
touch database/database.sqlite
php artisan migrate
```

### 4. Create Admin User

```bash
php artisan make:filament-user
```

Enter your admin credentials when prompted.

### 5. Build Assets

```bash
npm run build
```

### 6. Start Development Server

```bash
php artisan serve
```

## 🌐 Access URLs

- **Frontend**: http://127.0.0.1:8000
- **Admin Panel**: http://127.0.0.1:8000/admin

## 👨‍💼 Admin Access

Use the credentials you created during setup to access the admin panel at `/admin`.

## 🔧 What the Setup Does (Detailed Explanation)

The setup scripts handle several common issues automatically:

### **PHP 8.4 Compatibility**
- **Issue**: PHP 8.4 shows deprecation warnings from vendor packages
- **Fix**: Added `error_reporting()` suppression in `artisan`, `bootstrap/app.php`, and `public/index.php`
- **Result**: Clean server startup without warning spam

### **Admin Access (403 Forbidden Fix)**
- **Issue**: Users created with `php artisan make:filament-user` have `is_admin = 0` by default
- **Problem**: Filament requires `is_admin = 1` for admin panel access
- **Fix**: Setup automatically runs `User::query()->update(['is_admin' => true])`
- **Result**: All users can access `/admin` without 403 errors

### **Asset Compilation**
- **Issue**: Missing CSS/JS files in Vite manifest
- **Fix**: Updated `vite.config.js` to include all required assets:
  - `resources/css/article.css`
  - `resources/css/custom.css` 
  - `resources/css/document.css`
  - `resources/js/slider.js`
  - `resources/js/document_slider.js`
  - `resources/js/navbar.js`
  - `resources/js/animateOnScroll.js`
- **Result**: All frontend assets load properly

### **Database Setup**
- **Configuration**: Uses SQLite by default (no MySQL setup needed)
- **Location**: `database/database.sqlite`
- **Benefits**: Zero configuration, portable, perfect for development

## 🗂️ Project Structure

```
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Http/Controllers/       # Controllers
│   ├── Http/Livewire/         # Livewire components
│   └── Models/                # Eloquent models
├── resources/
│   ├── css/                   # Stylesheets
│   ├── js/                    # JavaScript files
│   └── views/                 # Blade templates
├── database/
│   └── migrations/            # Database migrations
└── public/                    # Public assets
```

## 🔧 Development

### Watch for Changes (Development)

```bash
npm run dev
```

### Build for Production

```bash
npm run build
```

### Clear Caches

```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## ⚠️ Known Issues

### PHP 8.4 Deprecation Warnings

You might see deprecation warnings from vendor packages. These are harmless and don't affect functionality:

```
Deprecated: Filament\Notifications\Testing\assertNotified(): Implicitly marking parameter...
```

These warnings are from third-party packages and will be fixed when they update for PHP 8.4 compatibility.

## 🗄️ Database

The project uses SQLite by default, stored in `database/database.sqlite`. No MySQL setup required!

To switch to MySQL, update your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 📦 Key Packages

- **Laravel Framework**: 10.x
- **Filament**: Admin panel
- **Livewire**: Dynamic components
- **Tailwind CSS**: Styling
- **Alpine.js**: JavaScript framework

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🆘 Troubleshooting

### **Common Issues & Solutions**

#### **403 Forbidden on /admin** 🚫
**Problem**: Can't log into admin panel, getting 403 error  
**Cause**: User doesn't have `is_admin = 1` in database  
**Solution**:
```bash
./dev.sh fix-admin
# OR manually:
php artisan tinker --execute="App\Models\User::query()->update(['is_admin' => true]);"
```

#### **Deprecation Warnings Spam** ⚠️
**Problem**: Terminal shows lots of deprecation warnings  
**Cause**: PHP 8.4 strict typing with older vendor packages  
**Solution**: Already fixed in setup! Warnings are suppressed in:
- `artisan` file
- `bootstrap/app.php` 
- `public/index.php`

#### **Vite Manifest Errors** 📦
**Problem**: "Unable to locate file in Vite manifest"  
**Cause**: CSS/JS files not included in Vite build  
**Solution**: Already fixed! `vite.config.js` includes all assets
```bash
npm run build  # Rebuild if needed
```

#### **Port Already in Use** 🔌
**Problem**: "Failed to listen on 127.0.0.1:8000 (reason: Address in use)"  
**Solution**:
```bash
# Use different port
php artisan serve --port=8001

# OR kill existing process
sudo lsof -ti:8000 | xargs kill -9
php artisan serve
```

### **Standard Troubleshooting**

#### Assets not loading?
```bash
npm run build
php artisan config:clear
```

#### Database issues?
```bash
php artisan migrate:fresh
./dev.sh admin  # Creates admin user with proper permissions
```

#### Permission errors?
```bash
chmod -R 775 storage bootstrap/cache
```

#### Need to reset everything?
```bash
./dev.sh fresh    # Fresh database
./dev.sh admin    # Create new admin
./dev.sh build    # Rebuild assets
./dev.sh clear    # Clear caches
```

---

Made with ❤️ by [gouzidev](https://github.com/gouzidev)

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
