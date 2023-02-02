# Interview Test

Online Technical Test 

## Installation

Jika composer telah ter-install, ketik perintah dibawah ini :

```bash
composer install
```

## Database
Buat Database di MySQL dengan nama `test_interview`.
Setelah membuat database konfigurasi pengaturan database di `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_interview
DB_USERNAME=root
DB_PASSWORD=root
```

## Database Migration
Jalankan Database Migration di terminal
```bash
php artisan migrate
```

## Database Seeding
Jalankan Database Seeding di terminal
```bash
php artisan db:seed
```

## File Import CSV
untuk file csv yang akan di import berada di `database/seeds/csv/member.csv`

## Konfigurasi Mailer
Setting Mailer di .env untuk kebutuhan kirim email, contoh seperti ini :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

MAILGUN_DOMAIN=
MAILGUN_SECRET=
MAILGUN_ENDPOINT=api.mailgun.net
```
## Jalankan Program
Untuk Menjalankan Program : 
```bash
php artisan serve
```

## Dokumentasi Program
Task Online Technical Test 
1. Write a function in PHP that takes in an array of integers and returns the sum of the
even numbers in the array. 
[http://localhost:8000/api/sum_even](http://localhost:8000/api/sum_even)

2. Write a PHP class that represents a simple email message. The class should have the
following properties: sender, recipient, subject, and message body. It should also have a method that sends the email. 
[http://localhost:8000/api/send_email](http://localhost:8000/api/send_email)

3. Write a PHP script that connects to a MySQL database and retrieves all records from a
table.
[http://localhost:8000/api/member](http://localhost:8000/api/member)

4. Write a PHP function that takes in a string and returns a new string with all vowels
removed.
[http://localhost:8000/api/remove_vowels](http://localhost:8000/api/remove_vowels)

5. Write a PHP script that reads a CSV file and inserts the data into a MySQL table.  [http://localhost:8000/api/import_csv](http://localhost:8000/api/import_csv)
