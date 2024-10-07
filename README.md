# Contatos-Livewire
Testando conceitos diponibilizados pelo laravel.
## Requisitos de Sistema
- PHP Versão: 8.2
- Laravel Versão: 11.9
- Docker Versão: 27.3.1

## Como Testar
``` bash
cp .env.example .env
composer install
php artisan sail:install
./vendor/bin/sail artisan key:generate
./vendor/bin/sail up
./vendor/bin/sail npm run dev
./vendor/bin/sail artisan migrate:fresh --seed
```
