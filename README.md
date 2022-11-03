<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.imgur.com/FooJVQr.png" width="400" alt="Laravel Logo"></a></p>

## Job Board - assignment for Epicode
> Screenshot of the homepage
![Main Dashboard](https://i.imgur.com/OXomJH2.jpg)

Job Board to portal umożliwiający m.in przeszukiwanie oraz aplikowanie na oferty pracy. Funkcjonalność to autoryzacja, załączanie resume w bazie danych, aplikowanie na oferty. Wprowadzono walidację danych takich jak email czy numer telefonu.

### Requirements
Xampp (Apache, MySQL)
PHP 8
Node

### Installing
1. Create a new folder `jobboard` and place in `xampp/htdocs/`.
2. Download and unzip the file into `jobboard` dir.
3. Run
```bash 
cd jobboard/
composer install
npm install
npm run dev
php artisan migrate
php artisan db:seed
```
(Optional) 4. If you're on Windows add this to `httpd.vhosts.conf`
```
<VirtualHost job-board.com:80>
    DocumentRoot "C:/xampp/htdocs/job-board/public"
	DirectoryIndex index.php
    ServerName job-board.com
	<Directory  "C:/xampp/htdocs/job-board">
	Options All
	AllowOverride All
	Require all granted  
	</Directory>
</VirtualHost>
```
And below to `hosts`
```
127.0.0.1 job-board.com
```
5. Run `artisan serve` if skipped 4th step.
6. Edit `.env` file to configure with your database credentials.


## Spełnione requirements
Struktura, relacje oraz zbudowane modele odpowiadają tym w wytycznych.

"należy wziąć pod uwagę, że na jedną ofertę może aplikować wielu kandydatów, oraz
fakt, że jeden kandydat może aplikować na kilka ofert" - zastosowano odpowiednią relację

Wymuszono konieczność załączenia pliku CV.

![Validation](https://i.imgur.com/EUv2Mb4.jpg)
![Validation](https://i.imgur.com/JSsdAu7.jpg)

## Niespełnione requirements

Wyszukiwarka - doczytałem dopiero pod przy pisaniu README pod koniec :p

## Entity-relationship diagram
![ER](https://i.imgur.com/Mbu4EDl.png)

## Future development

Za pierwszą poprawę architektury uważam stworzenie m.in. tabeli `Profile`, która służyłaby za profil aplikacji użytkownika oraz tabeli `Companies`, która umożliwia dodawanie nowych ofert pracy. Aby wprowadzić tabelę `Companies` dodać nowe pole w tabeli `users` - `seeker` jeżeli użytkownik poszukuje pracy, lub `employer` jeśli użytkownik chce stworzyć profil firmy lub dodać nowe ogłoszenie.


