<?php
/**Configuración de Email para The Best Gym*/

// Configuración del servidor SMTP
define('SMTP_HOST', 'smtp.gmail.com');  
define('SMTP_PORT', 587);                
define('SMTP_USERNAME', 'nosajmza94@gmail.com'); 
define('SMTP_PASSWORD', 'fexc xyje csfp gwch'); 
define('SMTP_ENCRYPTION', 'tls');        

// Configuración del remitente
define('EMAIL_FROM', 'nosajmza94@gmail.com');     
define('EMAIL_FROM_NAME', 'The Best Gym');

// Configuración general
define('EMAIL_CHARSET', 'UTF-8');
define('EMAIL_DEBUG', 0); 

// Validar que las credenciales no estén vacías
function validarConfiguracionEmail() {
    if (SMTP_USERNAME === 'tu_email@gmail.com' || SMTP_PASSWORD === 'tu_contraseña_app') {
        return [
            'success' => false,
            'message' => '⚠️ Email no configurado. Por favor edita email_config.php con tus credenciales reales.'
        ];
    }
    return ['success' => true];
}
?>