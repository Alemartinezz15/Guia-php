CREATE database guia_php;
Use guia_php;

CREATE TABLE menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    link VARCHAR(255) NOT NULL
);

-- Insertar algunas opciones del menú
INSERT INTO menu (nombre, descripcion, link) VALUES
('Ejercicio 4', 'Un programita más útil que "Hola Mundo"', 'ejercicio4.php'),
('Ejercicio 5', 'Tipos de variables', 'ejercicio5.php'),
('Ejercicio 6', 'Variables de tipo string', 'ejercicio6.php'),
('Ejercicio 7', 'Estructura condicional (if)', 'ejercicio7.php'),
('Ejercicio 8', 'Estructuras repetitivas (for - while - do/while)', 'ejercicio8.php');
