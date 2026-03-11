#!/bin/bash

# SensiAir Production Build Script
# This script prepares the application for production deployment

echo "🚀 SensiAir Production Build Script"
echo "===================================="
echo ""

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Check if .env exists
if [ ! -f .env ]; then
    echo -e "${RED}❌ Error: .env file not found${NC}"
    echo "Please copy .env.example to .env and configure it"
    exit 1
fi

# Check if APP_KEY is set
if grep -q "APP_KEY=$" .env; then
    echo -e "${YELLOW}⚠️  APP_KEY is not set${NC}"
    echo "Generating APP_KEY..."
    php artisan key:generate
fi

echo -e "${YELLOW}📦 Installing PHP dependencies...${NC}"
composer install --no-dev --optimize-autoloader

echo -e "${YELLOW}📦 Installing Node dependencies...${NC}"
npm install

echo -e "${YELLOW}🔨 Building assets...${NC}"
npm run build

echo -e "${YELLOW}⚙️  Caching configuration...${NC}"
php artisan config:cache

echo -e "${YELLOW}⚙️  Caching routes...${NC}"
php artisan route:cache

echo -e "${YELLOW}⚙️  Caching views...${NC}"
php artisan view:cache

echo -e "${YELLOW}⚙️  Optimizing autoloader...${NC}"
php artisan optimize

echo -e "${YELLOW}🔐 Setting permissions...${NC}"
chmod -R 755 storage bootstrap/cache
chmod 644 .env

echo ""
echo -e "${GREEN}✅ Production build completed successfully!${NC}"
echo ""
echo "Next steps:"
echo "1. Verify .env configuration"
echo "2. Run database migrations: php artisan migrate --force"
echo "3. Upload to production server"
echo "4. Configure web server document root to 'public' folder"
echo "5. Submit sitemap to Google Search Console"
echo ""
