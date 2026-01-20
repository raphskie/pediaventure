# Railway Environment Variables Configuration

## Quick Copy-Paste Reference

Copy these exact values into your Railway project's environment variables:

### Production Environment

```
APP_NAME=PediaVenture
APP_ENV=production
APP_KEY=base64:BbYrQYRzYSrN0BBWV4wbVN8Tlt8CaMAkAJ1xKAJlF7M=
APP_DEBUG=false
APP_URL=https://pediaventure-production.up.railway.app

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=[Railway MySQL Host]
DB_PORT=3306
DB_DATABASE=railway
DB_USERNAME=[Railway MySQL User]
DB_PASSWORD=[Railway MySQL Password]

SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=.pediaventure-production.up.railway.app

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log

MAIL_FROM_ADDRESS=no-reply@pediaventure.app
MAIL_FROM_NAME="PediaVenture"
```

### Key Points

1. **APP_URL** - MUST be `https://pediaventure-production.up.railway.app`
   - ⚠️ Must start with `https://` (not `http://`)
   - This fixes the mixed content errors

2. **APP_ENV** - MUST be `production`
   - AppServiceProvider checks this to force HTTPS
   - Set to `staging` for staging environment

3. **APP_DEBUG** - MUST be `false` in production
   - Set to `true` only in development
   - Never set to `true` on production servers

4. **APP_KEY** - Keep the same value from your local `.env`
   - Already set: `base64:BbYrQYRzYSrN0BBWV4wbVN8Tlt8CaMAkAJ1xKAJlF7M=`

5. **DATABASE** - Set to Railway's MySQL credentials
   - Railway provides these when you add PostgreSQL or MySQL service
   - Find in Railway dashboard under service variables

6. **SESSION_DOMAIN** - Set to your Railway domain
   - Allows cookies to work across the domain

---

## Step-by-Step on Railway Dashboard

1. **Open Railway Dashboard**
   - Go to [railway.app](https://railway.app)
   - Select PediaVenture project

2. **Navigate to Environment Variables**
   - Select your deployment/environment
   - Look for "Variables" or "Environment" tab
   - You may see a MySQL service already configured

3. **Add/Update Variables**
   - For each variable above, add it with the exact value
   - Pay special attention to `APP_URL` and `APP_ENV`

4. **Database Variables**
   - If Railway has a MySQL service, it auto-provides:
     - `DB_HOST`
     - `DB_PORT`
     - `DB_DATABASE`
     - `DB_USERNAME`
     - `DB_PASSWORD`
   - These appear in the MySQL service variables section
   - Copy them to your main environment variables

5. **Deploy**
   - After saving variables, redeploy
   - Watch logs for any errors
   - Visit your HTTPS URL when deployment completes

---

## Verification After Deployment

1. **Open Browser DevTools** (F12)
2. **Go to Console tab**
3. **Load any page** (e.g., `/login`)
4. **Check for errors:**
   - ❌ If you see "Mixed Content" errors → Variables not set correctly
   - ✅ If NO errors → Everything is working!

---

## The Most Important Variable

```
APP_URL=https://pediaventure-production.up.railway.app
```

**This single variable fixes all mixed content errors.**

The `AppServiceProvider.php` we updated will use this value to generate all asset URLs with HTTPS.
