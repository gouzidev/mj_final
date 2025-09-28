#!/bin/bash

# Development helper script for MJ Final Laravel Project
# Quick commands for common development tasks

set -e

# Colors
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
NC='\033[0m'

print_header() {
    echo -e "${BLUE}
╔══════════════════════════════════════════════════════╗
║              MJ Final - Dev Helper 🛠️                ║
╚══════════════════════════════════════════════════════╝${NC}"
}

show_help() {
    print_header
    echo -e "${GREEN}Available commands:${NC}"
    echo "  serve     - Start development server"
    echo "  dev       - Start asset watching (hot reload)"
    echo "  build     - Build assets for production"
    echo "  migrate   - Run database migrations"
    echo "  fresh     - Fresh database with migrations"
    echo "  admin     - Create new admin user"
    echo "  fix-admin - Fix admin access (grant admin to all users)"
    echo "  clear     - Clear all caches"
    echo "  install   - Install dependencies"
    echo "  help      - Show this help"
    echo ""
    echo -e "${YELLOW}Usage: ./dev.sh [command]${NC}"
    echo ""
}

case "${1:-help}" in
    "serve")
        echo -e "${GREEN}🚀 Starting development server...${NC}"
        php artisan serve
        ;;
    "dev")
        echo -e "${GREEN}👀 Starting asset watcher...${NC}"
        npm run dev
        ;;
    "build")
        echo -e "${GREEN}🎨 Building assets...${NC}"
        npm run build
        ;;
    "migrate")
        echo -e "${GREEN}🗄️ Running migrations...${NC}"
        php artisan migrate
        ;;
    "fresh")
        echo -e "${GREEN}🔄 Fresh database setup...${NC}"
        php artisan migrate:fresh
        echo -e "${YELLOW}Don't forget to create an admin user!${NC}"
        ;;
    "admin")
        echo -e "${GREEN}👨‍💼 Creating admin user...${NC}"
        php artisan make:filament-user
        echo -e "${GREEN}🔧 Ensuring admin access...${NC}"
        php artisan tinker --execute="App\Models\User::query()->update(['is_admin' => true]); echo 'Admin access granted';"
        ;;
    "fix-admin")
        echo -e "${GREEN}🔧 Fixing admin access for all users...${NC}"
        php artisan tinker --execute="App\Models\User::query()->update(['is_admin' => true]); echo 'All users now have admin access';"
        echo -e "${GREEN}✅ Admin access fixed!${NC}"
        ;;
    "clear")
        echo -e "${GREEN}🧹 Clearing caches...${NC}"
        php artisan cache:clear
        php artisan config:clear
        php artisan view:clear
        php artisan route:clear
        echo -e "${GREEN}✅ All caches cleared!${NC}"
        ;;
    "install")
        echo -e "${GREEN}📦 Installing dependencies...${NC}"
        composer install
        npm install
        ;;
    "help"|*)
        show_help
        ;;
esac