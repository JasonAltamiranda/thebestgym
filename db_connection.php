<?php
// Configuración de la conexión para XAMPP
// Nota: Usa 3307 porque tu XAMPP lo requiere
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'thebestgym'); 
define('DB_PORT', 3307); 

/**
 * Función que establece la conexión PDO
 */
function getDB() {
    $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8mb4';
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        
        // Configura el manejo de errores
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        return $pdo;
    } catch (PDOException $e) {
        // Muestra un error más claro en caso de fallo de conexión
        // En este contexto, usamos un die simple ya que estamos fuera de una función jsonResponse
        die("FATAL ERROR: Falló la conexión a MySQL. Razón: " . $e->getMessage());
    }
}

/**
 * Funciones de utilidad que el código PHP utiliza (jsonResponse, sanitize, handleDbError)
 * Son necesarias para que el código de tu compañero no de errores de "Función no definida"
 */

// NOTA: Estas funciones deben estar definidas aquí para que los archivos API puedan usarlas.

function jsonResponse($data, $status = 200) {
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function handleDbError($e) {
    // Manejar errores de base de datos
    error_log("DB Error: " . $e->getMessage());
    jsonResponse(['success' => false, 'message' => 'Error interno de la base de datos. Detalles: ' . $e->getMessage()], 500);
}

// Inicializa la sesión para que el login funcione
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>