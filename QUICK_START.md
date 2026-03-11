# 🚀 SensiAir - Quick Start Guide

## Local Development

### First Time Setup
```bash
# 1. Install dependencies
composer install
npm install

# 2. Setup environment
cp .env.example .env
php artisan key:generate

# 3. Build assets
npm run build

# 4. Start development server
php artisan serve
npm run dev
```

Visit: `http://localhost:8000`

## Production Build

### Linux/Mac
```bash
bash build-production.sh
```

### Windows
```bash
build-production.bat
```

### Manual
```bash
# 1. Install dependencies
composer install --no-dev --optimize-autoloader
npm install

# 2. Build assets
npm run build

# 3. Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# 4. Set permissions
chmod -R 755 storage bootstrap/cache
```

## Hosting Deployment

### Shared Hosting (cPanel)
1. Upload files to `public_html`
2. Set document root to `public_html/public`
3. Copy `.env.example` to `.env`
4. Configure `.env` with domain
5. Run migrations via SSH

### VPS/Dedicated
1. Clone repository
2. Run build script
3. Configure `.env`
4. Setup database
5. Configure web server
6. Enable SSL

See `HOSTING_SETUP.md` for detailed instructions.

## SEO Setup

### After Deployment
1. Submit sitemap: `https://yourdomain.com/sitemap.xml`
2. Go to Google Search Console
3. Add property and verify
4. Submit sitemap
5. Setup Google Analytics 4

See `SEO_GUIDE.md` for detailed SEO information.

## Important Files

| File | Purpose |
|------|---------|
| `.env` | Environment configuration |
| `public/robots.txt` | Search engine directives |
| `public/sitemap.xml` | Auto-generated sitemap |
| `public/.htaccess` | Apache configuration |
| `resources/views/layouts/app.blade.php` | Main layout with SEO |

## Common Commands

```bash
# Development
php artisan serve          # Start dev server
npm run dev               # Start Vite dev server

# Production
npm run build             # Build assets
php artisan config:cache  # Cache config
php artisan route:cache   # Cache routes
php artisan view:cache    # Cache views
php artisan optimize      # Optimize app

# Database
php artisan migrate       # Run migrations
php artisan migrate:fresh # Reset database
php artisan db:seed       # Seed database

# Maintenance
php artisan cache:clear   # Clear cache
php artisan view:clear    # Clear views
php artisan config:clear  # Clear config
```

## Troubleshooting

### 404 Errors
- Check `.htaccess` exists in `public/`
- Verify mod_rewrite enabled
- Check document root points to `public/`

### Blank Page
- Check `storage/logs/laravel.log`
- Verify database connection
- Check PHP errors

### Slow Performance
- Run `php artisan optimize`
- Check database queries
- Enable caching
- Optimize images

## Documentation

- `README.md` - Project overview
- `DEPLOYMENT.md` - Deployment guide
- `PRODUCTION_CHECKLIST.md` - Pre-launch checklist
- `SEO_GUIDE.md` - SEO implementation
- `HOSTING_SETUP.md` - Hosting setup
- `HOSTING_READY.md` - Hosting readiness

## Support

- Laravel Docs: https://laravel.com/docs
- Tailwind CSS: https://tailwindcss.com
- Google Search Central: https://developers.google.com/search

---

**Version**: 1.0.0
**Last Updated**: 2024
