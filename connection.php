
<?php
// connection avec base de données
$dbh = new PDO('mysql:host=localhost;dbname=FacedebookMaria',
'root', 'user');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
