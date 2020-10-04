# Archivos para el TP de computación aplicada.

## ```clave_publica_sonda.pub``` y ```clave_privada_sonda```

Corresponde al punto 1 (SSH), de la sección Servidores. Debe utilizarse el comando ```ssh-copy-id``` para poder instalar la clave pública en el servidor-

## ```index.php```

Corresponde al punto 2 (WEB), de la sección Servidores.
Se debe instalar el paquete mysqli y aplicar los cambios ```sudo apt install php-mysqli && sudo systemctl restart apache2```

## ```db.sql```

Corresponde al punto 3 (RDBMS), de la sección Servidores. Debe cargarse con ```mysql < db.sql```
