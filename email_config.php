<?php
/**
 * Configuración de Email para The Best Gym
 * 
 * IMPORTANTE: Configura estos valores con tu cuenta de correo real
 */

// Configuración del servidor SMTP
define('SMTP_HOST', 'smtp.gmail.com');  // Para Gmail
define('SMTP_PORT', 587);                // Puerto TLS
define('SMTP_USERNAME', 'nosajmza94@gmail.com');  // ⚠️ CAMBIAR POR TU EMAIL
define('SMTP_PASSWORD', 'fexc xyje csfp gwch');   // ⚠️ CAMBIAR POR TU CONTRASEÑA DE APLICACIÓN
define('SMTP_ENCRYPTION', 'tls');        // tls o ssl

// Configuración del remitente
define('EMAIL_FROM', 'nosajmza94@gmail.com');     // ⚠️ CAMBIAR
define('EMAIL_FROM_NAME', 'The Best Gym');

// Configuración general
define('EMAIL_CHARSET', 'UTF-8');
define('EMAIL_DEBUG', 0);  // 0 = sin debug, 2 = debug completo

/**
 * INSTRUCCIONES PARA CONFIGURAR GMAIL:
 * 
 * 1. Ir a tu cuenta de Google: https://myaccount.google.com/
 * 2. Seguridad → Verificación en 2 pasos (activarla si no está)
 * 3. Seguridad → Contraseñas de aplicaciones
 * 4. Generar nueva contraseña de aplicación para "Correo"
 * 5. Copiar la contraseña de 16 caracteres en SMTP_PASSWORD
 * 
 * ALTERNATIVAS A GMAIL:
 * 
 * Para Outlook/Hotmail:
 * - SMTP_HOST: 'smtp-mail.outlook.com'
 * - SMTP_PORT: 587
 * 
 * Para Yahoo:
 * - SMTP_HOST: 'smtp.mail.yahoo.com'
 * - SMTP_PORT: 587
 * 
 * Para servidores propios: configurar según tu proveedor
 */

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