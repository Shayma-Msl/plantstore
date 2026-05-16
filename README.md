# plantstore

girlypop bch thellou u have to:

---

## Download XAMPP

Baad ma tsob l XAMPP w thellou:

Normalment fama new folder fi `C:` esmou `xampp`.

Barra l:

```text
C:/xampp/htdocs
```

w hot fih l repo hedha kol fi dossier esmou:

```text
plantstore
```

---

## Database Setup

Open l XAMPP.

Normalment howa yokood fel system tray icons.

Kbal ma thellou men ghadi:
- barra l Task Manager
- sakker ay haja MySQL related

Baad khadem:
- Apache
- MySQL
fel xampp enzel aala start li koddemhom.

Enzel aala `admin` li koddem MySQL.

Normalment yethallek phpMyAdmin automatiquement.

---

## phpMyAdmin Setup

Hedhi l connection fel projet:

```php
$conn = mysqli_connect('localhost','root','','shop_db') or die ('connection failed');
```

### Create Database

Aamel database esmha:

```text
shop_db
```

w aabiha b script `.sql` li talqah fel repo.

---

## Opening the Project

Tawa barra lel browser w open:

```text
http://localhost/plantstore
```

The website should open normalement.

---

# What To Do

- Nahhi tsawer Asma w Nour w kol.
- Esm Asma and esmi mahtoutin m louta → nahhehom w hot ur name w mine.
- Her number fel footer nahhih.
- Fama some book pics fel repo zeydin → delete them.
- Check ken fama ay trace men Asma.
- I have no idea e JS chyaamel.
- L CSS fama 3 files, kol wahed yged fi part mel projet.

---
