@echo off
REM MJ Final Laravel Project Setup Script for Windows
REM For lazy people who don't want to run commands manually 😎

setlocal enabledelayedexpansion

echo.
echo ╔══════════════════════════════════════════════════════╗
echo ║                MJ Final Setup Script                 ║
echo ║              For Lazy Developers 😴                  ║
echo ╚══════════════════════════════════════════════════════╝
echo.

echo [INFO] Starting project setup...

REM Check if PHP exists
php --version >nul 2>&1
if errorlevel 1 (
    echo [ERROR] PHP is not installed or not in PATH
    echo Please install PHP and try again.
    pause
    exit /b 1
) else (
    echo [SUCCESS] PHP found
)

REM Check if Composer exists
composer --version >nul 2>&1
if errorlevel 1 (
    echo [ERROR] Composer is not installed or not in PATH
    echo Please install Composer and try again.
    pause
    exit /b 1
) else (
    echo [SUCCESS] Composer found
)

REM Check if Node.js exists
node --version >nul 2>&1
if errorlevel 1 (
    echo [ERROR] Node.js is not installed or not in PATH
    echo Please install Node.js and try again.
    pause
    exit /b 1
) else (
    echo [SUCCESS] Node.js found
)

REM Check if npm exists
npm --version >nul 2>&1
if errorlevel 1 (
    echo [ERROR] npm is not installed or not in PATH
    echo Please install npm and try again.
    pause
    exit /b 1
) else (
    echo [SUCCESS] npm found
)

echo.
echo [INFO] 📦 Installing/updating Composer dependencies...
composer update --no-interaction
if errorlevel 1 (
    echo [ERROR] Failed to install Composer dependencies
    pause
    exit /b 1
)
echo [SUCCESS] Composer dependencies installed

echo.
echo [INFO] 📦 Installing npm dependencies...
npm install
if errorlevel 1 (
    echo [ERROR] Failed to install npm dependencies
    pause
    exit /b 1
)
echo [SUCCESS] npm dependencies installed

echo.
echo [INFO] 🔧 Setting up environment configuration...
if not exist .env (
    copy .env.example .env >nul
    if errorlevel 1 (
        echo [ERROR] Failed to create environment file
        pause
        exit /b 1
    )
    echo [SUCCESS] Environment file created
) else (
    echo [WARNING] Environment file already exists, skipping...
)

echo.
echo [INFO] 🔑 Generating application key...
php artisan key:generate --no-interaction
if errorlevel 1 (
    echo [ERROR] Failed to generate application key
    pause
    exit /b 1
)
echo [SUCCESS] Application key generated

echo.
echo [INFO] 🗄️ Setting up SQLite database...
if not exist database\database.sqlite (
    type nul > database\database.sqlite
    echo [SUCCESS] SQLite database file created
) else (
    echo [WARNING] Database file already exists, skipping...
)

echo.
echo [INFO] 🚀 Running database migrations...
php artisan migrate --no-interaction
if errorlevel 1 (
    echo [ERROR] Failed to run migrations
    pause
    exit /b 1
)
echo [SUCCESS] Database migrations completed

echo.
echo [INFO] 🎨 Building frontend assets...
npm run build
if errorlevel 1 (
    echo [ERROR] Failed to build assets
    pause
    exit /b 1
)
echo [SUCCESS] Assets built successfully

echo.
echo [INFO] 👨‍💼 Creating admin user...
echo Please enter admin user details:
php artisan make:filament-user
if errorlevel 1 (
    echo [ERROR] Failed to create admin user
    pause
    exit /b 1
)
echo [SUCCESS] Admin user created

echo.
echo [INFO] 🔧 Ensuring admin access for all users...
php artisan tinker --execute="App\Models\User::query()->update(['is_admin' => true]); echo 'Admin access granted';" >nul 2>&1
echo [SUCCESS] Admin access configured

echo.
echo ╔══════════════════════════════════════════════════════╗
echo ║                  🎉 SETUP COMPLETE! 🎉               ║
echo ║                                                      ║
echo ║  Your Laravel application is ready to use!          ║
echo ║                                                      ║
echo ║  To start the development server, run:              ║
echo ║  php artisan serve                                  ║
echo ║                                                      ║
echo ║  Then visit:                                         ║
echo ║  🌐 Frontend: http://127.0.0.1:8000                 ║
echo ║  ⚙️  Admin Panel: http://127.0.0.1:8000/admin        ║
echo ║                                                      ║
echo ║  Happy coding! 🚀                                   ║
echo ╚══════════════════════════════════════════════════════╝
echo.

set /p start_server="Would you like to start the development server now? (y/N): "
if /i "%start_server%"=="y" (
    echo [INFO] Starting development server...
    echo Press Ctrl+C to stop the server
    php artisan serve
) else (
    echo [INFO] You can start the server later with: php artisan serve
)

pause