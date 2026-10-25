<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende Laravel - Guía Estudiantil</title>
    <!-- Fuente Google Inter y Fira Code para código -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #FF2D20;
            --primary-soft: #FFF0F0;
            --secondary: #4F46E5;
            --secondary-soft: #EEF2FF;
            --accent: #F59E0B;
            --accent-soft: #FEF3C7;
            --dark: #1E293B;
            --light-bg: #F8FAFC;
            --card-bg: #FFFFFF;
            --border: #E2E8F0;
            --text-main: #334155;
            --text-muted: #64748B;
            --radius-lg: 20px;
            --radius-md: 12px;
            --radius-sm: 8px;
            --shadow: 0 10px 25px -5px rgba(0,0,0,0.05), 0 8px 10px -6px rgba(0,0,0,0.03);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-main);
            line-height: 1.6;
        }

        /* Top Navigation Header */
        header {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--dark);
        }

        .logo-badge {
            background: var(--primary);
            color: white;
            padding: 4px 10px;
            border-radius: var(--radius-sm);
            font-size: 0.85rem;
            font-weight: 700;
        }

        .student-badge {
            background: var(--accent-soft);
            color: #B45309;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid #FCD34D;
        }

        /* Layout Main */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2.5rem;
        }

        /* Sidebar Navigation */
        aside {
            position: sticky;
            top: 90px;
            height: fit-content;
            background: var(--card-bg);
            padding: 1.5rem;
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
        }

        aside h3 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        aside nav ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        aside nav a {
            text-decoration: none;
            color: var(--text-main);
            font-size: 0.95rem;
            font-weight: 600;
            padding: 10px 14px;
            border-radius: var(--radius-sm);
            display: block;
            transition: all 0.2s ease;
        }

        aside nav a:hover {
            background: var(--primary-soft);
            color: var(--primary);
            transform: translateX(4px);
        }

        /* Main Content Area */
        main {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        /* Hero Banner */
        .hero {
            background: linear-gradient(135deg, #FF2D20 0%, #E11D48 100%);
            color: white;
            padding: 3rem;
            border-radius: var(--radius-lg);
            box-shadow: 0 20px 30px -10px rgba(255, 45, 32, 0.3);
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: "⚙️";
            position: absolute;
            right: -20px;
            bottom: -30px;
            font-size: 10rem;
            opacity: 0.15;
            transform: rotate(-15deg);
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .hero p {
            font-size: 1.1rem;
            opacity: 0.95;
            max-width: 650px;
        }

        /* Content Sections */
        .section-card {
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--light-bg);
            padding-bottom: 0.75rem;
        }

        .section-icon {
            background: var(--secondary-soft);
            color: var(--secondary);
            width: 42px;
            height: 42px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Grids & Cards */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .info-box {
            background: var(--light-bg);
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            padding: 1.5rem;
            transition: transform 0.2s ease;
        }

        .info-box:hover {
            transform: translateY(-3px);
        }

        .info-box h4 {
            color: var(--dark);
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Lists */
        ul.custom-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        ul.custom-list li {
            position: relative;
            padding-left: 28px;
        }

        ul.custom-list li::before {
            content: "✨";
            position: absolute;
            left: 0;
            top: 2px;
        }

        /* Code snippets */
        pre {
            background: var(--dark);
            color: #F8FAFC;
            font-family: 'Fira Code', monospace;
            padding: 1.25rem;
            border-radius: var(--radius-md);
            overflow-x: auto;
            font-size: 0.9rem;
            margin: 1rem 0;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.2);
        }

        code {
            font-family: 'Fira Code', monospace;
            background: #F1F5F9;
            color: var(--primary);
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.88em;
            font-weight: 600;
        }

        pre code {
            background: transparent;
            color: inherit;
            padding: 0;
        }

        /* Callout Student Note */
        .student-note {
            background: var(--accent-soft);
            border-left: 4px solid var(--accent);
            padding: 1.25rem;
            border-radius: 0 var(--radius-md) var(--radius-md) 0;
            margin: 1.5rem 0;
            color: #78350F;
        }

        .student-note h5 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Directory Tree */
        .tree-view {
            background: #0F172A;
            color: #E2E8F0;
            padding: 1.5rem;
            border-radius: var(--radius-md);
            font-family: 'Fira Code', monospace;
            font-size: 0.9rem;
            line-height: 1.8;
        }

        .tree-view span {
            color: #38BDF8;
            font-weight: bold;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 3rem 1rem;
            color: var(--text-muted);
            border-top: 1px solid var(--border);
            margin-top: 4rem;
            background: white;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .container {
                grid-template-columns: 1fr;
            }

            aside {
                position: relative;
                top: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <span>Laravel</span>
            <span class="logo-badge">Tutorial</span>
        </div>
        <div class="student-badge">
            🎓 Modo de Aprendizaje
        </div>
    </header>

    <!-- Main Container -->
    <div class="container">

        <!-- Sidebar Navigation -->
        <aside>
            <h3>Índice del Tutorial</h3>
            <nav>
                <ul>
                    <li><a href="#objetivos">🎯 Objetivos</a></li>
                    <li><a href="#justificacion">💡 ¿Qué es Laravel?</a></li>
                    <li><a href="#arquitectura">🏗️ Arquitectura MVC</a></li>
                    <li><a href="#lenguajes">💻 Lenguajes</a></li>
                    <li><a href="#prerrequisitos">📋 Prerrequisitos</a></li>
                    <li><a href="#instalacion">🚀 Paso a Paso</a></li>
                    <li><a href="#estructura">📁 Directorios</a></li>
                    <li><a href="#entorno">🔑 Variables .env</a></li>
                    <li><a href="#base-datos">🗄️ Base de Datos</a></li>
                    <li><a href="#comprobacion">✅ Comprobación</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Content Area -->
        <main>

            <!-- Hero -->
            <section class="hero">
                <h1>Aprende Laravel Framework</h1>
                <p>Una guía práctica, amigable y estructurada para dominar el desarrollo web moderno en PHP desde cero.</p>
            </section>

            <!-- Objetivos -->
            <section id="objetivos" class="section-card">
                <div class="section-title">
                    <div class="section-icon">🎯</div>
                    <h2>Objetivos del Tutorial</h2>
                </div>
                <div class="grid-2">
                    <div class="info-box">
                        <h4>Poner en práctica</h4>
                        <p>Aplicar los conceptos aprendidos al investigar una nueva tecnología en forma de framework.</p>
                    </div>
                    <div class="info-box">
                        <h4>Sintetizar el conocimiento</h4>
                        <p>Resumir la información útil para resolver problemas reales usando el framework de programación.</p>
                    </div>
                </div>
            </section>

            <!-- Justificación -->
            <section id="justificacion" class="section-card">
                <div class="section-title">
                    <div class="section-icon">💡</div>
                    <h2>Justificación del Framework</h2>
                </div>
                
                <h3>¿Para qué sirve?</h3>
                <p>Laravel es un framework de código abierto para PHP, esencial para brindar eficiencia, claridad y rapidez al desarrollar aplicaciones web. Permite a los desarrolladores centrarse en la lógica del negocio en lugar de solucionar problemas repetitivos de infraestructura web.</p>

                <h3 style="margin-top: 1.5rem;">Aplicaciones principales</h3>
                <div class="grid-2">
                    <div class="info-box">
                        <h4>1. Gestión de Errores</h4>
                        <p>Manejo de excepciones de configuración integrado desde el inicio.</p>
                    </div>
                    <div class="info-box">
                        <h4>2. Autenticación y Seguridad</h4>
                        <p>Sistemas listos para contraseñas, tokens, filtros de parámetros y protección contra ataques CSRF.</p>
                    </div>
                    <div class="info-box">
                        <h4>3. Migración de BD</h4>
                        <p>Control de versiones y modificaciones del esquema de la base de datos mediante código.</p>
                    </div>
                    <div class="info-box">
                        <h4>4. Aplicaciones SaaS</h4>
                        <p>Creación de plataformas con suscripción mediante ecosistemas como Jetstream o Spark.</p>
                    </div>
                </div>
            </section>

            <!-- Arquitectura -->
            <section id="arquitectura" class="section-card">
                <div class="section-title">
                    <div class="section-icon">🏗️</div>
                    <h2>Componentes Clave (MVC)</h2>
                </div>
                <div class="grid-2">
                    <div class="info-box">
                        <h4>1. Modelo (Model)</h4>
                        <p>Representa los datos y su lógica mediante el ORM <strong>Eloquent</strong>, permitiendo interactuar con tablas como objetos PHP.</p>
                    </div>
                    <div class="info-box">
                        <h4>2. Vista (View)</h4>
                        <p>Se encarga de la interfaz gráfica usando el motor de plantillas <strong>Blade</strong>.</p>
                    </div>
                    <div class="info-box">
                        <h4>3. Controlador (Controller)</h4>
                        <p>Intermediario entre el modelo y la vista. Procesa peticiones HTTP y la lógica principal.</p>
                    </div>
                    <div class="info-box">
                        <h4>4. Rutas (Routes)</h4>
                        <p>Archivos en <code>routes/web.php</code> o <code>routes/api.php</code> que dirigen las peticiones URL hacia sus controladores.</p>
                    </div>
                </div>
            </section>

            <!-- Lenguajes -->
            <section id="lenguajes" class="section-card">
                <div class="section-title">
                    <div class="section-icon">💻</div>
                    <h2>Lenguajes en los que se apoya</h2>
                </div>
                <p>Se apoya principalmente en <strong>PHP</strong>, pero se integra perfectamente con las tecnologías frontend y de datos:</p>
                <ul class="custom-list">
                    <li><strong>PHP:</strong> Lenguaje principal para el servidor y la lógica backend.</li>
                    <li><strong>HTML y CSS:</strong> Base visual renderizada en plantillas Blade.</li>
                    <li><strong>JavaScript / TypeScript:</strong> Agrega dinamismo utilizando librerías como Vue.js, React o Inertia.js.</li>
                    <li><strong>SQL:</strong> Utilizado mediante consultas abstractas en Eloquent ORM.</li>
                </ul>
            </section>

            <!-- Prerrequisitos -->
            <section id="prerrequisitos" class="section-card">
                <div class="section-title">
                    <div class="section-icon">📋</div>
                    <h2>Prerrequisitos de Instalación</h2>
                </div>
                <ul class="custom-list">
                    <li><strong>PHP:</strong> Versión 8.1+ (Laravel 10), 8.2+ (Laravel 11) o 8.3+ (Laravel 13).</li>
                    <li><strong>Composer:</strong> Gestor de dependencias esencial (Versión 2.2+ recomendada).</li>
                    <li><strong>Node.js y NPM / Bun:</strong> Necesarios para compilar recursos frontend con Vite/Tailwind.</li>
                    <li><strong>Editor de Código:</strong> Recomendado VS Code o PhpStorm.</li>
                    <li><strong>Sistema Operativo:</strong> Compatible con Windows, macOS y Linux.</li>
                </ul>
            </section>

            <!-- Instalación -->
            <section id="instalacion" class="section-card">
                <div class="section-title">
                    <div class="section-icon">🚀</div>
                    <h2>Pasos de Instalación</h2>
                </div>

                <p><strong>1. Comprobar herramientas base:</strong></p>
                <pre><code>php -v
composer -v</code></pre>

                <p><strong>2. Instalar el instalador global de Laravel:</strong></p>
                <pre><code>composer global require laravel/installer
laravel --version</code></pre>

                <p><strong>3. Crear un nuevo proyecto:</strong></p>
                <pre><code>laravel new mi-proyecto</code></pre>

                <p><strong>4. Entrar e instalar recursos frontend:</strong></p>
                <pre><code>cd mi-proyecto
npm install
npm run build</code></pre>

                <p><strong>5. Iniciar el servidor local:</strong></p>
                <pre><code>composer run dev
# o bien: php artisan serve</code></pre>

                <div class="student-note">
                    <h5>💡 Tip Estudiantil</h5>
                    <p>Abre tu navegador e ingresa a <code>http://localhost:8000</code> para ver la pantalla inicial de Laravel en ejecución.</p>
                </div>
            </section>

            <!-- Estructura -->
            <section id="estructura" class="section-card">
                <div class="section-title">
                    <div class="section-icon">📁</div>
                    <h2>Estructura del Proyecto</h2>
                </div>
                <div class="tree-view">
                    ├── <span>app/</span> (Código principal de la aplicación)<br>
                    ├── <span>config/</span> (Archivos de configuración)<br>
                    ├── <span>database/</span> (Migraciones y semillas de BD)<br>
                    ├── <span>public/</span> (Punto de entrada accesibles públicamente)<br>
                    ├── <span>resources/</span> (Vistas Blade y assets no compilados)<br>
                    ├── <span>routes/</span> (Definición de rutas web y API)<br>
                    ├── <span>storage/</span> (Archivos generados, logs y caché)<br>
                    └── <span>.env</span> (Variables de entorno)
                </div>
            </section>

            <!-- Variables .env -->
            <section id="entorno" class="section-card">
                <div class="section-title">
                    <div class="section-icon">🔑</div>
                    <h2>Variables de Entorno (.env)</h2>
                </div>
                <p>Configuran aspectos críticos sin modificar el código fuente:</p>
                <ul class="custom-list">
                    <li><code>APP_NAME</code>: Nombre asignado al proyecto.</li>
                    <li><code>APP_ENV</code>: Entorno activo (local o producción).</li>
                    <li><code>APP_DEBUG</code>: Activa/Desactiva el modo de depuración de errores.</li>
                    <li><code>APP_URL</code>: Dirección web base.</li>
                    <li><code>DB_CONNECTION</code>: Motor de la base de datos a conectar.</li>
                </ul>
                <p style="margin-top: 1rem;">Para generar la clave de seguridad del proyecto ejecuta:</p>
                <pre><code>php artisan key:generate</code></pre>
            </section>

            <!-- Base de Datos -->
            <section id="base-datos" class="section-card">
                <div class="section-title">
                    <div class="section-icon">🗄️</div>
                    <h2>Uso de Bases de Datos</h2>
                </div>
                <p>Laravel admite SQLite, MySQL, MariaDB, PostgreSQL y SQL Server. Para iniciar rápidamente sin instalar un servidor pesado se puede usar <strong>SQLite</strong>.</p>
                
                <p style="margin-top: 1rem;">Si usas <strong>MySQL</strong>, configura las credenciales en tu archivo <code>.env</code> y luego ejecuta tus migraciones:</p>
                <pre><code>php artisan migrate</code></pre>
            </section>

            <!-- Comprobación -->
            <section id="comprobacion" class="section-card">
                <div class="section-title">
                    <div class="section-icon">✅</div>
                    <h2>Comprobación de la Instalación</h2>
                </div>
                <ul class="custom-list">
                    <li>Verificar instalación con <code>php -v</code> y <code>composer -v</code>.</li>
                    <li>Crear la app con <code>laravel new mi-proyecto</code>.</li>
                    <li>Navegar a la carpeta e iniciar servidor con <code>composer run dev</code> o <code>php artisan serve</code>.</li>
                    <li>Ingresar a <code>http://localhost:8000</code> y verificar que cargue la aplicación.</li>
                </ul>
            </section>

        </main>
    </div>

    <!-- Footer -->
    <footer>
        <p>Tutorial de Laravel • Desarrollado para Actividad Académica</p>
    </footer>

</body>
</html>