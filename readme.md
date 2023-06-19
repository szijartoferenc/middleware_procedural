# Middleware procedurális környezetben

## Időráfordítás ~ 120 perc

## Felhasznált technológia

- PHP 8.0
- HTML 5
- CSS 3

## Telepítés

1. Klónozd le a repót a gépedre.
2. Hozz létre adatbázist, importáld az SQL dump-ot.
3. Állítsd be a kapcsolat adatait a `config.php` -ben.
4. Indítsd el a szervert a `php -S localhost:8000` paranccsal. Ha a 8000-es port foglalt, akkor használj másikat.
5. Nyisd meg a böngésződben a `http://localhost:8000` - vagy a használt portnak megfelelő - címet.

## Belépési adatok

- Felhasználónév: `user1@example.com`
- Jelszó: `password`

## Ellenőrzés
1. Védett oldal
    1. A látogató belépés nélkül megnyitja a `http://localhost:8000/protected.php` webcímet, az `auth` middleware átirányítja a `http://localhost:8000/login.php` oldalra.
    2. A user belépés után megnyitja a `http://localhost:8000/protected.php` webcímet, az oldal megnyílik.
2. Vendég oldal
    1. A user belépés után megnyitja a `http://localhost:8000/login.php` webcímet, a `guest` middleware átirányítja a `http://localhost:8000/protected.php` oldalra.
    2. A látogató belépés előtt megnyitja a `http://localhost:8000/login.php` webcímet, az oldal megnyílik.
3. Publikus oldal
    1. A látogató belépés nélkül megnyitja a `http://localhost:8000/public.php` webcímet, az oldal megnyílik.
    2. A user belépés után megnyitja a `http://localhost:8000/public.php` webcímet, az oldal megnyílik.

 
