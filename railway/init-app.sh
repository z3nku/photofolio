#!/bin/bash

# Exit immediately if a command fails
set -e

# Run migrations (database is now accessible)
php artisan migrate --force

# Clear and re-cache the configuration after deployment
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

