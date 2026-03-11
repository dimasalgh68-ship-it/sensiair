@echo off
REM SensiAir Production Build Script for Windows
REM This script prepares the application for production deployment

echo.
echo 🚀 SensiAir Production Build Script
echo ====================================
echo.

REM Check if .env exists
if not exist .env (
    echo ❌ Error: .env file not found
    echo Please copy .env.example to .env and configure it
    pause
    exit /b 1
)

REM Check if APP_KEY is set
findstr /M "APP_KEY=$" .env >nul
if %errorlevel% equ 0 (
    echo ⚠️  APP_KEY is not set
    echo Generating APP_KEY...
    php artisan key:generate
)

echo.
echo 📦 Installing PHP dependencies...
call composer install --no-dev --optimize-autoloader

echo.
echo 📦 Installing Node dependencies...
call npm install

echo.
echo 🔨 Building assets...
call npm run build

echo.
echo ⚙️  Caching configuration...
php artisan config:cache

echo.
echo ⚙️  Caching routes...
php artisan route:cache

echo.
echo ⚙️  Caching views...
php artisan view:cache

echo.
echo ⚙️  Optimizing autoloader...
php artisan optimize

echo.
echo ✅ Production build completed successfully!
echo.
echo Next steps:
echo 1. Verify .env configuration
echo 2. Run database migrations: php artisan migrate --force
echo 3. Upload to production server
echo 4. Configure web server document root to 'public' folder
echo 5. Submit sitemap to Google Search Console
echo.
pause
