-- Crear la base de datos
CREATE DATABASE ProyectoWeb;

-- Usar la base de datos
USE ProyectoWeb;

-- Tabla Usuario
CREATE TABLE usuarios (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'cliente') DEFAULT 'admin',//rol
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
--despues de registrar los tres usuarios primeros ejecutar este codigo
ALTER TABLE usuarios MODIFY rol ENUM('admin', 'cliente') DEFAULT 'cliente';

-- Tabla Calificación
CREATE TABLE Calificacion (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNSIGNED NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5), -- Validar que el rango esté entre 1 y 5
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

ALTER TABLE Calificacion 
ADD COLUMN usuario_id INT UNSIGNED NOT NULL, se elimina si ya existe
ADD CONSTRAINT fk_usuario_id FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE;

-- Tabla Contacto
CREATE TABLE contacto (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
