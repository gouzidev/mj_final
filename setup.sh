#!/bin/bash

# MJ Final Laravel Project Setup Script
# For lazy people who don't want to run commands manually 😎

set -e  # Exit on any error

# Colors for pretty output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

print_success() {
    echo -e "${GREEN}[SUCCESS]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

print_header() {
    echo -e "${BLUE}
╔══════════════════════════════════════════════════════╗
║                MJ Final Setup Script                 ║
║              For Lazy Developers 😴                  ║
╚══════════════════════════════════════════════════════╝${NC}"
}

# Check if command exists
command_exists() {
    command -v "$1" >/dev/null 2>&1
}

# Check requirements
check_requirements() {
    print_status "Checking system requirements..."
    
    local missing_deps=()
    
    if ! command_exists php; then
        missing_deps+=("PHP")
    else
        PHP_VERSION=$(php -r "echo PHP_VERSION;")
        print_success "PHP $PHP_VERSION found"
    fi
    
    if ! command_exists composer; then
        missing_deps+=("Composer")
    else
        print_success "Composer found"
    fi
    
    if ! command_exists node; then
        missing_deps+=("Node.js")
    else
        NODE_VERSION=$(node --version)
        print_success "Node.js $NODE_VERSION found"
    fi
    
    if ! command_exists npm; then
        missing_deps+=("npm")
    else
        NPM_VERSION=$(npm --version)
        print_success "npm $NPM_VERSION found"
    fi
    
    if [ ${#missing_deps[@]} -ne 0 ]; then
        print_error "Missing dependencies: ${missing_deps[*]}"
        echo "Please install the missing dependencies and run this script again."
        exit 1
    fi
}

# Main setup function
setup_project() {
    print_header
    
    check_requirements
    
    print_status "Starting project setup..."
    
    # Step 1: Update Composer dependencies
    print_status "📦 Installing/updating Composer dependencies..."
    if composer update --no-interaction; then
        print_success "Composer dependencies installed"
    else
        print_error "Failed to install Composer dependencies"
        exit 1
    fi
    
    # Step 2: Install npm dependencies
    print_status "📦 Installing npm dependencies..."
    if npm install; then
        print_success "npm dependencies installed"
    else
        print_error "Failed to install npm dependencies"
        exit 1
    fi
    
    # Step 3: Setup environment file
    print_status "🔧 Setting up environment configuration..."
    if [ ! -f .env ]; then
        if cp .env.example .env; then
            print_success "Environment file created"
            
            # Configure SQLite database
            print_status "🔧 Configuring SQLite database..."
            sed -i 's/DB_CONNECTION=mysql/DB_CONNECTION=sqlite/' .env
            sed -i 's/DB_HOST=127.0.0.1/#DB_HOST=127.0.0.1/' .env
            sed -i 's/DB_PORT=3306/#DB_PORT=3306/' .env
            sed -i 's/DB_DATABASE=laravel/DB_DATABASE=\/absolute\/path\/to\/database.sqlite/' .env
            sed -i 's/DB_USERNAME=root/#DB_USERNAME=root/' .env
            sed -i 's/DB_PASSWORD=/#DB_PASSWORD=/' .env
            
            # Set the correct absolute path for SQLite
            CURRENT_DIR=$(pwd)
            sed -i "s|DB_DATABASE=\/absolute\/path\/to\/database.sqlite|DB_DATABASE=${CURRENT_DIR}/database/database.sqlite|" .env
            
            print_success "SQLite configuration applied"
        else
            print_error "Failed to create environment file"
            exit 1
        fi
    else
        print_warning "Environment file already exists, skipping..."
    fi
    
    # Step 4: Generate application key
    print_status "🔑 Generating application key..."
    if php artisan key:generate --no-interaction; then
        print_success "Application key generated"
    else
        print_error "Failed to generate application key"
        exit 1
    fi
    
    # Step 5: Setup database
    print_status "🗄️ Setting up SQLite database..."
    if [ ! -f database/database.sqlite ]; then
        if touch database/database.sqlite; then
            print_success "SQLite database file created"
        else
            print_error "Failed to create database file"
            exit 1
        fi
    else
        print_warning "Database file already exists, skipping..."
    fi
    
    # Step 6: Run migrations
    print_status "🚀 Running database migrations..."
    if php artisan migrate --no-interaction; then
        print_success "Database migrations completed"
    else
        print_error "Failed to run migrations"
        exit 1
    fi
    
    # Step 7: Build assets
    print_status "🎨 Building frontend assets..."
    if npm run build; then
        print_success "Assets built successfully"
    else
        print_error "Failed to build assets"
        exit 1
    fi
    
    # Step 8: Create admin user (interactive)
    print_status "👨‍💼 Creating admin user..."
    echo -e "${YELLOW}Please enter admin user details:${NC}"
    if php artisan make:filament-user; then
        print_success "Admin user created"
        
        # Ensure all users have admin access (fix for 403 issue)
        print_status "🔧 Ensuring admin access for all users..."
        if php artisan tinker --execute="App\Models\User::query()->update(['is_admin' => true]); echo 'Admin access granted';" > /dev/null 2>&1; then
            print_success "Admin access configured"
        else
            print_warning "Could not auto-configure admin access - you may need to set is_admin=1 manually"
        fi
    else
        print_error "Failed to create admin user"
        exit 1
    fi
    
    # Step 9: Set permissions
    print_status "🔐 Setting file permissions..."
    if chmod -R 775 storage bootstrap/cache 2>/dev/null; then
        print_success "File permissions set"
    else
        print_warning "Could not set file permissions (this might be okay)"
    fi
    
    # Success message
    echo -e "${GREEN}
╔══════════════════════════════════════════════════════╗
║                  🎉 SETUP COMPLETE! 🎉               ║
║                                                      ║
║  Your Laravel application is ready to use!          ║
║                                                      ║
║  To start the development server, run:              ║
║  ${BLUE}php artisan serve${GREEN}                              ║
║                                                      ║
║  Then visit:                                         ║
║  🌐 Frontend: http://127.0.0.1:8000                 ║
║  ⚙️  Admin Panel: http://127.0.0.1:8000/admin        ║
║                                                      ║
║  Happy coding! 🚀                                   ║
╚══════════════════════════════════════════════════════╝${NC}"
    
    # Ask if user wants to start the server
    echo
    read -p "Would you like to start the development server now? (y/N): " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        print_status "Starting development server..."
        print_status "Press Ctrl+C to stop the server"
        php artisan serve
    else
        print_status "You can start the server later with: php artisan serve"
    fi
}

# Run the setup
setup_project