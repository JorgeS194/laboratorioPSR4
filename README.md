# Laboratorio PSR-4 con Composer

Implementación de carga automática (Autoload) utilizando el estándar PSR-4 en PHP con Composer.

---

# Instalación

1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

2. Entrar al proyecto

```bash
cd LaboratorioPSR4
```

3. Generar el autoload

```bash
composer dump-autoload
```

o

```bash
composer install
```

---

# Estructura del Proyecto

```plaintext
LaboratorioPSR4/
│
├── App/
│   ├── Models/
│   │   └── User.php
│   │
│   └── Services/
│       └── EmailService.php
│
├── vendor/
├── composer.json
├── index.php
└── .gitignore
```

---

# Namespaces Utilizados

| Carpeta | Namespace |
|---|---|
| App/Models | App\Models |
| App/Services | App\Services |

---

# Ejecución

Abrir en navegador:

```plaintext
http://localhost/LaboratorioPSR4
```

Resultado esperado:

```plaintext
Hola, soy el usuario del sistema.
Correo enviado correctamente.
```

---

# Conclusiones Técnicas

## 1. Mantenibilidad

El uso de PSR-4 facilita agregar nuevas clases sin modificar múltiples archivos manualmente.

## 2. Eficiencia

Composer utiliza carga automática bajo demanda (Lazy Loading), cargando únicamente las clases necesarias durante la ejecución.

## 3. Estandarización

PSR-4 establece una estructura clara y profesional que facilita el trabajo colaborativo y la comprensión del código.
