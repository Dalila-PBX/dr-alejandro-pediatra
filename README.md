# Dr. Alejandro Palomares | Pediatra

Este repositorio contiene el código fuente para la Landing Page del Dr. Alejandro Palomares Saavedra, especialista en pediatría. El sitio está diseñado para proporcionar información sobre servicios médicos, certificaciones, ubicación y facilitar el contacto con los pacientes.

## 🚀 Características

- **Diseño Responsivo**: Adaptable a móviles, tablets y escritorio (Bootstrap 5).
- **Animaciones**: Efectos de entrada al hacer scroll utilizando la librería AOS (configurada para desactivarse en móviles < 1200px).
- **Formulario de Contacto**: Funcional con validación PHP y envío de correos.
- **Seguridad**: Integración con Google reCAPTCHA v2 para evitar spam.
- **Secciones Informativas**: Inicio, Sobre Nosotros, Formación, Servicios y Contacto.
- **Integraciones**: Botón flotante de WhatsApp, Google Maps y enlaces a redes sociales.

## 🛠️ Tecnologías Utilizadas

- **Frontend**:
  - HTML5 Semántico
  - CSS3 (Estilos personalizados + Normalize.css)
  - [Bootstrap 5.3.8](https://getbootstrap.com/)
  - [AOS (Animate On Scroll) 2.3.1](https://michalsnik.github.io/aos/)
  - [Bootstrap Icons 1.13.1](https://icons.getbootstrap.com/)
  - Google Fonts (Poppins)

- **Backend**:
  - PHP (Procesamiento del formulario `enviar.php`)

- **Servicios Externos**:
  - Google reCAPTCHA v2
  - Google Maps Embed API

## 📋 Requisitos Previos

Para ejecutar este proyecto correctamente, necesitas:

1. Un servidor web (Apache, Nginx) o un entorno de desarrollo local como **XAMPP**, **WAMP** o **MAMP**.
2. Soporte para **PHP** habilitado en el servidor.
3. Conexión a internet para cargar las librerías CDN (Bootstrap, AOS, Google API).

## 🔧 Configuración

### 1. Formulario de Contacto (`enviar.php`)
Para que el formulario funcione y envíe correos a la dirección correcta, edita el archivo `enviar.php`:

```php
// Línea 40: Cambia esta dirección por el correo del doctor
$to = 'alejandropalomares.pediatra@gmail.com'; 

// Línea 17: Asegúrate de que la clave secreta de reCAPTCHA sea correcta
$secret = 'TU_CLAVE_SECRETA_DE_RECAPTCHA';
```

### 2. Google reCAPTCHA (`index.html`)
Si cambias de dominio, necesitarás generar nuevas claves en la consola de administración de reCAPTCHA v2.
Actualiza la clave del sitio en `index.html`:

```html
<!-- Línea 690 aprox -->
<div class="g-recaptcha" data-sitekey="TU_CLAVE_DE_SITIO"></div>
```

## 📂 Estructura del Proyecto

```text
PEDIATRA/
├── assets/
│   ├── css/
│   │   ├── normalize.css   # Reset de estilos
│   │   └── style.css       # Estilos personalizados y responsive
│   ├── images/             # Imágenes y logotipos
│   └── js/
│       └── main.js         # Scripts personalizados
├── index.html              # Página principal
├── enviar.php              # Script de envío de correo
└── README.md               # Documentación
```

## ✒️ Créditos

- **Desarrollo y Diseño**: Dalila Santiago - Luminel Agencia Creativa .
- **Cliente**: Dr. Alejandro Palomares Saavedra.