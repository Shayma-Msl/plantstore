````md
# plantstore

girlypop bch thellou u have to:

## Download XAMPP

Baad ma tsob l XAMPP w thellou:

Normalment fama new folder f `C:` esmou `xampp`.

Barra l:

```text
C:/xampp/htdocs
````

w hot fih l repo hedha kol fi dossier esmou:

```text
plantstore
```

## Database

Open l XAMPP.

Normalment howa yokood f system tray icons.

Kbal ma thellou men ghadi, barra l Task Manager w sakker kol chy MySQL related.

Hell l XAMPP w khadem:

* Apache
* MySQL

Enzel aala `Start` li koddem MySQL.

Normalment yethallek phpMyAdmin.

## phpMyAdmin

This is how l connection code fel projet is:

```php
$conn = mysqli_connect('localhost','root','','shop_db') or die ('connection failed');
```

Donc fel phpMyAdmin:

* user: `root`
* password: empty / hatta chay

Aamel database esmha:

```text
shop_db
```

w aabiha b script `.sql` li talqah fel repo.

## Opening the project

Tawa barra lel browser w open:

```text
http://localhost/plantstore
```

The website should open.

## What to do

* Nahhi tsawer Asma w Nour w kol.
* Esm Asma and esmi mahtoutin m louta, juste nahhehom w hot ur name w mine.
* Her number also fel footer nahhih.
* Fama some book pics f repo hedha zeydin, delete them.
* Check ken fama anything else trace men Asma.
* I have no idea e JS chyaamel.
* L CSS fama 3 files, kol wahed yged fi part mel projet.


- code blocks with triple backticks.
```
