# SensiAir - Deployment Guide

## Pre-Deployment Checklist

### 1. Environment Configuration
- [ ] Copy `.env.example` to `.env`
- [ ] Update `APP_URL` to your domain (e.g., `https://sensiair.com`)
- [ ] Generate `APP_KEY`: `php artisan key:generate`
- [ ] Set `APP_DEBUG=false` for production
- [ ] Set `APP_ENV=production`

### 2. Database Setup
- [ ] Run migrations: `php artisan migrate --force`
- [ ] Seed database if needed: `php artisan db:seed`

### 3. Build Assets
```bash
npm install
npm run build
```

### 4. Optimize for Production
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

### 5. File Permissions
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

## Hosting Requirements

- PHP 8.2 or higher
- Composer installed
- Node.js 18+ (for build process)
- SQLite or MySQL database
- SSL certificate (HTTPS)
- Apache with mod_rewrite enabled

## Deployment Steps

### Using cPanel/Shared Hosting

1. **Upload Files**
   - Upload all files to `public_html` or your domain folder
   - Ensure `.env` is in the root directory (not in public_html)

2. **Configure Document Root**
   - Set document root to `public_html/public`
   - This ensures only the public folder is accessible

3. **Enable mod_rewrite**
   - Contact hosting provider if not enabled
   - Verify `.htaccess` is working

4. **Set Permissions**
   ```bash
   chmod 755 storage bootstrap/cache
   chmod 644 .env
   ```

### Using VPS/Dedicated Server

1. **Clone Repository**
   ```bash
   git clone <repository-url> /var/www/sensiair
   cd /var/www/sensiair
   ```

2. **Install Dependencies**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm install
   npm run build
   ```

3. **Configure Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set Permissions**
   ```bash
   chown -R www-data:www-data /var/www/sensiair
   chmod -R 755 storage bootstrap/cache
   ```

5. **Configure Web Server**
   - Nginx: Point root to `/var/www/sensiair/public`
   - Apache: Configure VirtualHost with DocumentRoot `/var/www/sensiair/public`

## SEO Configuration

### 1. Sitemap
- Automatically generated at `/sitemap.xml`
- Submit to Google Search Console

### 2. Robots.txt
- Located at `/robots.txt`
- Configured to allow search engines

### 3. Meta Tags
- All pages include proper meta descriptions
- Open Graph tags for social sharing
- Structured data (JSON-LD) for rich snippets

### 4. Search Console Setup
1. Go to Google Search Console
2. Add property: `https://sensiair.com`
3. Verify ownership (DNS or HTML file)
4. Submit sitemap: `https://sensiair.com/sitemap.xml`
5. Monitor indexing and search performance

### 5. Analytics Setup
- Add Google Analytics 4 tracking code
- Add Google Tag Manager if needed
- Monitor user behavior and conversions

## Performance Optimization

### 1. Caching
- Browser caching enabled via `.htaccess`
- Images cached for 1 year
- CSS/JS cached for 1 month

### 2. Compression
- Gzip compression enabled
- Reduces file sizes by ~70%

### 3. CDN (Optional)
- Consider using Cloudflare for:
  - Global content delivery
  - DDoS protection
  - Additional caching

### 4. Image Optimization
- Ensure images are optimized before upload
- Use WebP format where possible
- Lazy load images for better performance

## SSL Certificate

- Use Let's Encrypt (free)
- Auto-renew enabled
- Redirect HTTP to HTTPS

## Monitoring

### 1. Uptime Monitoring
- Use services like Uptime Robot
- Monitor critical pages

### 2. Error Logging
- Check `storage/logs/laravel.log` regularly
- Set up log rotation

### 3. Performance Monitoring
- Use tools like New Relic or DataDog
- Monitor response times and resource usage

## Maintenance

### Regular Tasks
- [ ] Update Laravel and dependencies monthly
- [ ] Review and optimize database queries
- [ ] Monitor server resources
- [ ] Backup database regularly
- [ ] Check SSL certificate expiration

### Security Updates
- [ ] Keep PHP updated
- [ ] Update all packages regularly
- [ ] Review security advisories
- [ ] Run security audits

## Troubleshooting

### 404 Errors
- Verify `.htaccess` is present in public folder
- Check mod_rewrite is enabled
- Verify document root points to public folder

### Permission Denied
- Check file permissions (755 for folders, 644 for files)
- Verify web server user owns files

### Blank Page
- Check `storage/logs/laravel.log` for errors
- Verify `APP_DEBUG=false` and check error logs
- Ensure database connection is correct

### Slow Performance
- Run `php artisan optimize`
- Check database queries
- Enable caching
- Consider CDN

## Support

For issues or questions:
- Check Laravel documentation: https://laravel.com/docs
- Review error logs in `storage/logs/`
- Contact hosting provider for server-level issues
