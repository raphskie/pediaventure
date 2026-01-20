# Firebase OAuth & Railway MySQL Setup Guide

## Environment Variables for Railway

### Database Configuration
```env
# Railway MySQL Connection
DB_CONNECTION=mysql
DB_HOST=${DATABASE_URL_HOST}
DB_PORT=${DATABASE_URL_PORT}
DB_DATABASE=${DATABASE_URL_NAME}
DB_USERNAME=${DATABASE_URL_USER}
DB_PASSWORD=${DATABASE_URL_PASSWORD}
```

### Firebase OAuth Configuration
```env
# Firebase OAuth Credentials (from Firebase Console)
FIREBASE_API_KEY="your_firebase_api_key"
FIREBASE_AUTH_DOMAIN="your-project.firebaseapp.com"
FIREBASE_PROJECT_ID="your-project-id"
FIREBASE_STORAGE_BUCKET="your-project.appspot.com"
FIREBASE_MESSAGING_SENDER_ID="your_sender_id"
FIREBASE_APP_ID="your_app_id"
FIREBASE_MEASUREMENT_ID="your_measurement_id"

# Authorized OAuth Domains (comma-separated)
AUTHORIZED_OAUTH_DOMAINS="yourcompany.com,partners.com"

# Application URL for Railway
APP_URL=https://your-app.up.railway.app
APP_ENV=production
APP_DEBUG=false
```

## Firebase Console Setup

1. Go to Firebase Console (https://console.firebase.google.com)
2. Select your project
3. Go to Authentication > Sign-in method
4. Enable Google OAuth provider
5. Add authorized domains:
   - yourcompany.com
   - partners.com
   - your-app.up.railway.app (Railway domain)

6. Go to Project Settings > General
7. Copy Firebase SDK configuration values to .env

## Railway Deployment

1. Set environment variables in Railway dashboard:
   ```
   - DATABASE_URL_HOST=mysql.railway.internal
   - DATABASE_URL_PORT=3306
   - DATABASE_URL_NAME=pediaventure
   - DATABASE_URL_USER=root
   - DATABASE_URL_PASSWORD=<generated>
   - FIREBASE_API_KEY=<value>
   - FIREBASE_AUTH_DOMAIN=<value>
   - FIREBASE_PROJECT_ID=<value>
   - FIREBASE_STORAGE_BUCKET=<value>
   - FIREBASE_MESSAGING_SENDER_ID=<value>
   - FIREBASE_APP_ID=<value>
   - AUTHORIZED_OAUTH_DOMAINS=yourcompany.com
   - APP_URL=https://your-app.up.railway.app
   - APP_ENV=production
   - APP_DEBUG=false
   ```

2. Run migrations:
   ```bash
   php artisan migrate
   ```

3. Clear cache:
   ```bash
   php artisan config:cache
   php artisan view:cache
   ```

## Routes

- `/firebase-login` - Firebase OAuth login page
- POST `/firebase/callback` - OAuth callback handler
- POST `/firebase/logout` - Logout user

## Usage in Blade

```blade
<a href="{{ route('firebase.login') }}" class="btn btn-primary">
    Sign in with Google
</a>

<form action="{{ route('firebase.logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
```

## Logging

All authentication errors are logged to:
- `storage/logs/laravel.log`

Check logs for troubleshooting:
```bash
tail -f storage/logs/laravel.log
```

## Error Handling

- 500 errors are automatically logged with full stack traces
- Development mode shows detailed errors
- Production mode shows generic error page
- JSON requests return JSON error responses
