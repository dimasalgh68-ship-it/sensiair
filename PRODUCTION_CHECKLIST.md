# SensiAir Production Checklist

## Before Going Live

### Security
- [ ] `APP_DEBUG` set to `false`
- [ ] `APP_ENV` set to `production`
- [ ] `APP_KEY` generated and set
- [ ] `.env` file not accessible from web
- [ ] Sensitive files removed from repository
- [ ] HTTPS/SSL certificate installed
- [ ] Security headers configured in `.htaccess`
- [ ] CORS properly configured if needed

### Performance
- [ ] Assets built with `npm run build`
- [ ] `php artisan config:cache` executed
- [ ] `php artisan route:cache` executed
- [ ] `php artisan view:cache` executed
- [ ] Database indexes created
- [ ] Slow queries optimized
- [ ] Images optimized and compressed
- [ ] Gzip compression enabled

### SEO
- [ ] Meta descriptions added to all pages
- [ ] Keywords researched and implemented
- [ ] Sitemap generated at `/sitemap.xml`
- [ ] Robots.txt configured
- [ ] Canonical URLs set
- [ ] Open Graph tags added
- [ ] Structured data (JSON-LD) implemented
- [ ] Mobile responsiveness tested
- [ ] Page speed optimized (target: <3s)

### Functionality
- [ ] All links tested and working
- [ ] Forms tested and working
- [ ] Contact form configured
- [ ] Error pages (404, 500) customized
- [ ] Redirects working correctly
- [ ] Database migrations run
- [ ] File uploads working (if applicable)

### Monitoring & Analytics
- [ ] Google Search Console configured
- [ ] Google Analytics 4 installed
- [ ] Uptime monitoring configured
- [ ] Error logging configured
- [ ] Backup strategy implemented
- [ ] Log rotation configured

### Content
- [ ] All pages have proper titles
- [ ] All pages have descriptions
- [ ] Images have alt text
- [ ] No placeholder text remaining
- [ ] All contact information correct
- [ ] Social media links correct
- [ ] Privacy policy complete
- [ ] Terms & conditions complete

### Testing
- [ ] Desktop browser testing (Chrome, Firefox, Safari, Edge)
- [ ] Mobile browser testing (iOS Safari, Chrome Mobile)
- [ ] Tablet testing
- [ ] Lighthouse audit score >90
- [ ] Mobile-friendly test passed
- [ ] Core Web Vitals optimized
- [ ] Cross-browser compatibility verified

### Deployment
- [ ] Backup of current production (if applicable)
- [ ] Database backed up
- [ ] Deployment script tested
- [ ] Rollback plan prepared
- [ ] Team notified of deployment
- [ ] Deployment window scheduled
- [ ] Post-deployment testing plan ready

## Post-Deployment

### Immediate (First Hour)
- [ ] Site loads without errors
- [ ] Homepage displays correctly
- [ ] Navigation works
- [ ] Contact form functional
- [ ] No console errors
- [ ] SSL certificate valid
- [ ] Redirects working

### First Day
- [ ] Monitor error logs
- [ ] Check analytics data
- [ ] Verify all pages accessible
- [ ] Test on multiple devices
- [ ] Check email notifications (if applicable)
- [ ] Monitor server resources

### First Week
- [ ] Monitor search console for errors
- [ ] Check indexing progress
- [ ] Review analytics data
- [ ] Monitor performance metrics
- [ ] Check for broken links
- [ ] Review user feedback

### Ongoing
- [ ] Weekly: Check error logs
- [ ] Weekly: Monitor performance
- [ ] Monthly: Update dependencies
- [ ] Monthly: Review analytics
- [ ] Quarterly: Security audit
- [ ] Quarterly: Performance optimization

## Performance Targets

- **Page Load Time**: < 3 seconds
- **Lighthouse Score**: > 90
- **Core Web Vitals**:
  - LCP (Largest Contentful Paint): < 2.5s
  - FID (First Input Delay): < 100ms
  - CLS (Cumulative Layout Shift): < 0.1
- **Mobile Score**: > 85
- **SEO Score**: > 90

## Monitoring Tools

### Essential
- Google Search Console
- Google Analytics 4
- Uptime Robot
- SSL Labs (for certificate validation)

### Recommended
- Lighthouse CI
- New Relic (performance monitoring)
- Sentry (error tracking)
- Cloudflare (CDN & security)

## Emergency Contacts

- Hosting Provider Support: [Add contact info]
- Domain Registrar: [Add contact info]
- SSL Certificate Provider: [Add contact info]
- Development Team: [Add contact info]

## Rollback Plan

If critical issues occur:
1. Revert to previous version from backup
2. Notify stakeholders
3. Investigate root cause
4. Fix and test thoroughly
5. Redeploy with fixes

## Notes

- Keep this checklist updated
- Document any custom configurations
- Maintain backup of all configurations
- Review and update quarterly
