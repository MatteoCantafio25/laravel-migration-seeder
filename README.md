# Laravel Migration Seeder Factory

Esercizio di oggi: **Laravel Migration Seeder Factory**
nome repo: `laravel-migration-seeder`
Iniziamo un nuovo progetto laravel (ricordate di controllare che non vi installi la versione 11)

Creiamo una tabella `trains` tramite una migration

Ogni treno dovrà avere:

-   Azienda
-   Stazione di partenza
-   Stazione di arrivo
-   Orario di partenza
-   Orario di arrivo
-   Codice Treno
-   Numero Carrozze
-   In orario
-   Cancellato (si / no)
-

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto :wink:

Una volta eseguita la migration provate ad inserire un dato sul db tramite PhpMyAdmin.
Se tutto funziona, potete passare a generare i file utilizzando una factory:  
`php artisan make:factory NomeFactory`

Qui trovate la documentazione al [PHP Faker](https://fakerphp.github.io)  
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna :slightly_smiling_face:

**BONUS:**  
Provate a crearvi un array contenente dei dati da poter utilizzare all'interno di un Seeder !

Buon divertimento!
