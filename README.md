php artisan serve - запустить сервер
php artisan migrate - данные миграции в базу данных, подключение к базе данных настраивать в .env
php artisan make:auth - создание контроллера для аутентификации
php artisan make:mail MailClass-создание класс MailClass в app/mail? здесь во вьюшке нужно указать шаблон письма(должен лежать в views/emails/contact-mail.blade.php), которое мы будем отправлять
php artisan make:controller MailSetting создание контроллера для писем
создание формы для отправки письма(в представления form.blade
настройка данных для почты в .env
php artisan tinker
$admin=new App\Admin
$admin->name="admin" с паролем, имайлом и джоб тайтлом;
