# SensiAir - Hosting Setup Guide

Quick setup guide for different hosting providers.

## 🌐 Shared Hosting (cPanel)

### Step 1: Upload Files
1. Connect via FTP/SFTP
2. Upload all files to `public_html` folder
3. Ensure `.env` file is uploaded (not in public_html)

### Step 2: Configure Document Root
1. Go to cPanel → Addon Domains or Main Domain
2. Set Document Root to: `public_html/public`
3. Save changes

### Step 3: Enable mod_rewrite
1. Go to cPanel → MultiPHP INI Editor
2. Ensure `mod_rewrite` is enabled
3. If not available, contact hosting provider

### Step 4: Set Permissions
```bash
chmod 755 storage bootstrap/cache
chmod 644 .env
```

### Step 5: Configure Environment
1. Edit `.env` file via FTP or cPanel File Manager
2. Update `APP_URL=https://yourdomain.com`
3. Set `APP_DEBUG=false`
4. Set `APP_ENV=production`

### Step 6: Run Migrations
1. Access SSH terminal (if available)
2. Run: `php artisan migrate --force`
3. Or use cPanel Terminal

### Step 7: Test
1. Visit your domain
2. Check for errors in `storage/logs/laravel.log`
3. Verify all pages load correctly

## 🖥️ VPS/Dedicated Server

### Step 1: Install Dependencies
```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install PHP 8.2
sudo apt install php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-sqlite3 -y

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Node.js
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt install nodejs -y

# Install Git
sudo apt install git -y
```

### Step 2: Clone Repository
```bash
cd /var/www
git clone <repository-url> sensiair
cd sensiair
```

### Step 3: Install Dependencies
```bash
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

### Step 4: Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env`:
```
APP_URL=https://yourdomain.com
APP_DEBUG=false
APP_ENV=production
DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=sensiair
DB_USERNAME=sensiair_user
DB_PASSWORD=strong_password
```

### Step 5: Setup Database
```bash
# Create database
mysql -u root -p
CREATE DATABASE sensiair;
CREATE USER 'sensiair_user'@'localhost' IDENTIFIED BY 'strong_password';
GRANT ALL PRIVILEGES ON sensiair.* TO 'sensiair_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;

# Run migrations
php artisan migrate --force
```

### Step 6: Configure Web Server

#### Nginx
```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/sensiair/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

#### Apache
```apache
<VirtualHost *:80>
    ServerName yourdomain.com
    ServerAlias www.yourdomain.com
    DocumentRoot /var/www/sensiair/public

    <Directory /var/www/sensiair/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/sensiair-error.log
    CustomLog ${APACHE_LOG_DIR}/sensiair-access.log combined
</VirtualHost>
```

### Step 7: Set Permissions
```bash
sudo chown -R www-data:www-data /var/www/sensiair
sudo chmod -R 755 /var/www/sensiair/storage
sudo chmod -R 755 /var/www/sensiair/bootstrap/cache
```

### Step 8: Enable HTTPS
```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx -y

# Get SSL certificate
sudo certbot certonly --nginx -d yourdomain.com -d www.yourdomain.com

# Auto-renew
sudo systemctl enable certbot.timer
```

### Step 9: Optimize
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

## ☁️ Cloud Hosting (AWS, DigitalOcean, Heroku)

### AWS EC2
1. Launch Ubuntu 22.04 instance
2. Follow VPS setup steps above
3. Configure security groups for HTTP/HTTPS
4. Use RDS for database (optional)
5. Use S3 for file storage (optional)

### DigitalOcean App Platform
1. Connect GitHub repository
2. Configure build command: `npm run build && php artisan optimize`
3. Set environment variables from `.env`
4. Deploy

### Heroku
```bash
# Install Heroku CLI
curl https://cli-assets.heroku.com/install.sh | sh

# Login
heroku login

# Create app
heroku create sensiair

# Add buildpacks
heroku buildpacks:add heroku/php
heroku buildpacks:add heroku/nodejs

# Set environment variables
heroku config:set APP_KEY=your_app_key
heroku config:set APP_URL=https://sensiair.herokuapp.com

# Deploy
git push heroku main
```

## 🔒 SSL Certificate

### Let's Encrypt (Free)
```bash
# Using Certbot
sudo certbot certonly --standalone -d yourdomain.com

# Auto-renew
sudo systemctl enable certbot.timer
```

### Paid SSL
- Purchase from provider (Comodo, DigiCert, etc.)
- Install via hosting control panel
- Configure auto-renewal

## 📊 Post-Deployment

### 1. Verify Installation
- [ ] Website loads without errors
- [ ] All pages accessible
- [ ] HTTPS working
- [ ] No console errors

### 2. Configure Monitoring
- [ ] Setup error logging
- [ ] Configure uptime monitoring
- [ ] Setup performance monitoring
- [ ] Configure backup strategy

### 3. SEO Setup
- [ ] Submit sitemap to Google Search Console
- [ ] Setup Google Analytics 4
- [ ] Verify robots.txt
- [ ] Check indexing status

### 4. Security
- [ ] Enable firewall
- [ ] Configure fail2ban
- [ ] Setup automatic backups
- [ ] Monitor access logs

## 🆘 Troubleshooting

### 404 Errors
```bash
# Check .htaccess exists
ls -la public/.htaccess

# Check mod_rewrite enabled
apache2ctl -M | grep rewrite

# Restart Apache
sudo systemctl restart apache2
```

### Permission Denied
```bash
# Fix permissions
sudo chown -R www-data:www-data /var/www/sensiair
sudo chmod -R 755 storage bootstrap/cache
```

### Database Connection Error
```bash
# Check database credentials in .env
# Test connection
php artisan tinker
DB::connection()->getPdo();
```

### Blank Page
```bash
# Check error log
tail -f storage/logs/laravel.log

# Enable debug mode temporarily
APP_DEBUG=true

# Check PHP errors
php -l public/index.php
```

## 📞 Support

- Hosting Provider Support
- Laravel Documentation: https://laravel.com/docs
- GitHub Issues: [Your Repository]

---

**Last Updated**: 2024
**Version**: 1.0.0
