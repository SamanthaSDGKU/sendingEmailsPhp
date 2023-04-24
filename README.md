### Envio de correos electrónicos con PHPMailer

1. Instalar "composer" en caso de no tenerlo (https://getcomposer.org/download/).
2. Una vez instalado, utilizar composer para instalar phpmailer: `composer require phpmailer/phpmailer` (https://packagist.org/packages/phpmailer/phpmailer)
3. Crear una cuenta en https://mailtrap.io/ para testear en envio de correos. En la pestaña Email Testing/Inboxes aparecerá uno por default dar click ahí en el nombre. En la sección de configuración deben seleccionar Laravel y les mostraran los datos de configuración para PHP (en un escenario real se toma esa información del hosting o servidor).
4. Crear la configuración PHP, utilizando el archivo `contacto.php` que está en el repositorio, cada línea está comentada para la explicación.
