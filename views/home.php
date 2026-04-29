<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El Faro - Periódico Local</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
    .card, .box {
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .shadow {
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    </style>
</head>
<body>

<div class="notification is-danger is-marginless is-radiusless has-text-centered">
    <button class="delete"></button>
    <strong>ÚLTIMA HORA:</strong> Se reportan nuevamente fuertes alzas en el precio de los combustibles para este jueves. 
    <a href="#negocios" class="has-text-white" style="text-decoration: underline;">Leer más</a>
</div>

<section class="hero is-link is-bold">
    <div class="hero-body">
        <div class="container has-text-centered">
            <figure class="image is-inline-block mb-3" style="width: 300px;">
                <img src="assets/img/logotipo-faro.jpeg" alt="Logo El Faro" class="is-rounded shadow">
            </figure>
            <h1 class="title is-1">El Faro</h1>
            <h2 class="subtitle">La guía informativa de la región</h2>
        </div>
    </div>
</section>

<nav class="navbar is-link" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="#inicio">
        <strong>EL FARO</strong>
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarMenu" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="#inicio">Inicio</a>
        <a class="navbar-item" href="#deporte">Deportes</a>
        <a class="navbar-item" href="#negocios">Negocios</a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a href="#registro" class="button is-light is-outlined">Suscribirse</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<main class="section">
    <div class="container">
        <div class="columns">

            <div class="column is-8">
                
                <section id="inicio" class="mb-6">
                    <h2 class="title is-3 has-text-primary">Noticias Generales</h2>
                    
                    <div class="card mb-5">
                        <div class="card-image">
                            <figure class="image is-16by9">
                                <img src="assets/img/cadem.webp" alt="Encuesta Cadem" class="is-fullwidth">
                            </figure>
                        </div>
                        <div class="card-content">
                            <span class="tag is-link">Política</span>
                            <h3 class="title is-4 mt-2">Encuesta Cadem: Kast llega al 51% de desaprobación y ministros peor evaluados son Sedini y Quiroz</h3>
                            <div class="content">
                                Una nueva versión de la Encuesta Plaza Pública Cadem se dio a conocer este domingo, con cifras negativas para la actual administración. En este nuevo sondeo, la aprobación de José Antonio Kast cayó al 43% (4 puntos menos que la medición anterior), mientras que su desaprobación alcanza el 51%. Por su parte, los minsitros Mara Sedini y Jorge Quiroz son los ministros peor evaluados. Por su parte, May Chomali y Francisco Pérez Mackenna son los que mantienen un mayor respaldo de la ciudadanía. Además, un 60% cree que el subir los precios de los combustibles era completamente evitable, mientras un 72% habría preferido que se hiciera de manera gradual. Además, sólo un 25% cree que el Gobierno tiene razón respecto a que el Estado enfrenta una situación económica crítica, a diferencia del 33% que lo hacía en la medición anterior.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="card-content">
                            <span class="tag is-danger">Crimen</span>
                            <h3 class="title is-4 mt-2">Sorprenden a taxista con recetas falsas y extrañas pastillas en la frontera</h3>
                            <div class="columns is-vcentered">
                                <div class="column is-7">
                                    <p>Intentó ingresar medicamentos de forma ilegal, llevaba recetas falsas e intentó sobornar a funcionarios. Este es el caso que muestra Testigos en la Frontera.</p>
                                </div>
                                <div class="column is-5">
                                    <video src="assets/media/taxista.mp4" controls class="image"></video>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-5">
                        <div class="card-content">
                            <span class="tag is-warning">Educación</span>
                            <h3 class="title is-4 mt-2">Estudiante asesina a Inspectora en establecimiento de Calama</h3>
                            <div class="content">
                                Conmoción generó el ataque en Calama, región de Antofagasta, que se registró en horas de la mañana de este viernes 27 de marzo, luego de que un estudiante asesinara a una inspectora en un establecimiento educacional. En el lugar, falleció una inspectora y otras cuatro personas resultaron con lesiones.  Con el correr de las horas se conoció que de los cuatro lesionados, dos se encuentran en estado grave (una mujer adulta y un menor de edad). Asimismo, tres de los heridos son estudiantes del establecimiento educacional.
                            <figure class="image is-16by9">
                                <img src="assets/img/arsenal.jpeg" alt="Armas de H.M." class="is-fullwidth">
                            </figure>
                            <audio controls class="mt-3" style="width: 100%;">
                                 <source src="assets/media/calama.mp3" type="audio/mpeg">
                                 Tu navegador no soporta el elemento de audio.
                            </audio>
                            </div>
                        </div>
                    </div>
                </section>

                <hr>

                <section id="negocios">
                    <h2 class="title is-3 has-text-primary">Negocios</h2>
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <h3 class="title is-4">Dólar revierte fuerte alza ante repunte del cobre pese a incertidumbre por Medio Oriente</h3>
                                <p><strong>Categoría:</strong> Internacional</p>
                                <p>El dólar cerró la jornada de este viernes con una baja de $5,90 frente al peso, revirtiendo las fuertes alzas observadas durante la apertura de la jornada. En concreto, el billete verde terminó sus operaciones más líquidas en $923,50 vendedor y $923,20 comprador. En comparación con el cierre de la semana pasada, la divisa estadounidense registró una reducción semanal de $3,50. Al respecto, Felipe Sepúlveda, jefe de análisis para Admirals Latinoamérica, explicó que "el tipo de cambio cedió terreno debido a un factor clave: el repunte del cobre". "El metal avanzó 0,58% hasta US$5,50 la libra tras la apertura de Wall Street, lo que fortaleció al peso chileno y compensó la presión externa", añadió Sepúlveda. Liza Salinas, branch business director de Liberty Finance, señaló que "de cara a la próxima semana, el tipo de cambio seguirá atado a dos variables: la evolución del conflicto en Oriente Medio y los datos de empleo e inflación en EE.UU. que se publican este viernes".</p>
                            </div>
                            <div class="media-right">
                                <figure class="image is-128x128">
                                    <img src="assets/img/dolar.jpg" alt="Dólar">
                                </figure>
                            </div>
                        </article>
                    </div>

                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <h3 class="title is-4">Codelco gana US$2.423 millones en 2025 por impacto de acuerdo con SQM y aporte al fisco crece 16%</h3>
                                <p><strong>Categoría:</strong> Nacional</p>
                                <p>La empresa estatal Codelco dio a conocer sus resultados financieros correspondientes a 2025. En el ejercicio logró una mejora relevante en sus indicadores, una producción levemente superior y un mayor aporte al fisco, que creció 16% respecto al año anterior. En términos de utilidades, la cuprífera reportó ganancias por US$2.423 millones al cierre del año. Sin embargo, este resultado estuvo fuertemente influido por un efecto extraordinario asociado a la adquisición de su participación en el negocio del litio —tras el acuerdo con SQM que dio origen a la empresa conjunta NovaAndino- que aportó US$2.035 millones después de impuestos. Sin considerar este impacto, la utilidad ajustada alcanzó US$388 millones, lo que representa un incremento de 58% respecto de 2024.</p>
                            </div>
                            <div class="media-right">
                                <figure class="image is-128x128">
                                    <img src="assets/img/codelco.jpg" alt="Codelco">
                                </figure>
                            </div>
                        </article>
                    </div>

                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <h3 class="title is-4">Buses, operadores logísticos, agro, gas: Sectores cifran el traspaso de alzas de combustibles a precios</h3>
                                <p><strong>Categoría:</strong> Transporte</p>
                                <p>El alza en los precios de los combustibles significará un duro impacto para el bolsillo de los chilenos, golpeará a distintos sectores productivos y a toda la cadena de abastecimiento. Para intentar paliar esto, el Congreso despachó en solo dos días una ley impulsada por el Gobierno que establece el congelamiento del precio de la parafina y un bono mensual de $100 mil para dueños de taxis. Sin embargo, eso no evitará que los mayores costos para la producción que significa un combustible notoriamente más caro se traspase a los consumidores. La industria del gas es parte de los sectores desde donde se ha transparentado este efecto, particularmente la empresa Abastible, que proyecta un aumento cercano al 10% a partir del 2 de abril. "La compañía estima un incremento cercano al 10% desde el 2 de abril, significativamente inferior a los aumentos del diésel y gasolinas, en un contexto de alta volatilidad internacional", explicó Sebastián Montero Morán, gerente del negocio GL Chile.</p>
                            </div>
                            <div class="media-right">
                                <figure class="image is-128x128">
                                    <img src="assets/img/combustible.jpg" alt="Traspaso combustible">
                                </figure>
                            </div>
                        </article>
                    </div>
                    </section>
            </div>
<aside class="column is-4">
    <div style="position: sticky; top: 20px;">
        
        <div class="box has-background-light">
            <p class="menu-label has-text-weight-bold">Explorar Secciones</p>
            <ul class="menu-list">
                <li><a href="#inicio" class="is-active">Portada</a></li>
                <li><a href="#deporte">Deportes</a></li>
                <li><a href="#negocios">Negocios</a></li>
            </ul>
        </div>

        <h3 class="title is-5 mt-5">Más Leídas</h3>
        <div class="box p-3">
            <article class="media">
                <div class="media-left">
                    <figure class="image is-64x64">
                        <img src="assets/img/combustible.jpg" alt="Noticia" class="is-rounded is-fullwidth">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-6">Traspaso de alzas de combustibles a precios</p>
                    <p class="subtitle is-7">Transporte</p>
                </div>
            </article>
        </div>

        <div id="deporte" class="mt-6">
            <h2 class="title is-4 has-text-grey">Deportes</h2>
            
            <div class="box p-3">
                <article class="media">
                    <div class="media-left">
                        <figure class="image is-64x64">
                            <img src="assets/img/antonelli.jpg" alt="Antonelli" class="is-rounded">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-6">Antonelli gana el GP de Japón y hace historia</p>
                        <p class="subtitle is-7">Fórmula 1</p>
                        <p class="is-size-7">Kimi Antonelli se convierte en el líder más joven de un campeonato en la historia de la F1 tras su victoria en Suzuka.</p>
                    </div>
                </article>
            </div>

            <div class="box p-3">
                <article class="media">
                    <div class="media-left">
                        <figure class="image is-64x64">
                            <img src="assets/img/verstappen.jpg" alt="Verstappen" class="is-rounded">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-6">Verstappen analiza retirarse</p>
                        <p class="subtitle is-7">Fórmula 1</p>
                        <p class="is-size-7">Debido a las nuevas reglas del campeonato, el genio Max Verstappen evalúa dejar la categoría al final de esta temporada, por lo que las próximas semanas serán cruciales para su futuro en el deporte.</p>
                    </div>
                </article>
            </div>

            <div class="box p-3">
                <article class="media">
                    <div class="media-left">
                        <figure class="image is-64x64">
                            <img src="assets/img/kehr.webp" alt="Gabriel Kehr" class="is-rounded">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-6">Kehr registra gran serie en Temuco</p>
                        <p class="subtitle is-7">Atletismo</p>
                        <p class="is-size-7">El ex-campeón panamericano de lanzamiento de marillo, Gabriel Kehr, registra 76.52 metros éste sábado 28 de marzo durante el torneo realizado en Temuco.</p>
                    </div>
                </article>
        </div> 

        </div> </div> </aside> </div> </div> </main>

 <section id="registro" class="section has-background-link-light">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-6">
                <form action="index.php?action=registrar" method="POST" class="box shadow">
                    <h3 class="title is-4 has-text-centered">Registro de Lector</h3>
                    <p class="subtitle is-6 has-text-centered mb-5">Únete a la comunidad de El Faro</p>
                    
                    <div class="field">
                        <label class="label">Nombre Completo</label>
                        <div class="control">
                            <input class="input" type="text" name="nombre_usuario" placeholder="Ej: Juan Pérez" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" name="email_usuario" placeholder="juan@ejemplo.com" required>
                        </div>
                    </div>

                    <div class="control">
                        <button class="button is-link is-fullwidth" type="submit">Crear mi Cuenta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>       

<footer class="footer has-background-dark has-text-grey-light">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <h4 class="title is-5 has-text-white">Sobre El Faro</h4>
                <p>Periodismo local independiente de Chile.</p>
            </div>
            <div class="column is-4">
                <h4 class="title is-5 has-text-white">Secciones</h4>
                <ul>
                    <li><a href="#inicio" class="has-text-grey-light">Noticias Generales</a></li>
                    <li><a href="#deporte" class="has-text-grey-light">Deportes</a></li>
                    <li><a href="#negocios" class="has-text-grey-light">Negocios</a></li>
                </ul>
            </div>
  <div class="column is-4">
    <h4 class="title is-5 has-text-white">Contacto</h4>
    <form action="index.php?action=contactar" method="POST">
        <div class="field">
            <div class="control">
                <input class="input is-small" type="text" name="nom" placeholder="Tu nombre" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="input is-small" type="email" name="em" placeholder="Tu email" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <textarea class="textarea is-small" name="msg" placeholder="Mensaje para la redacción" rows="2"></textarea>
            </div>
        </div>
        <div class="control">
            <button class="button is-link is-small is-fullwidth" type="submit">Enviar Mensaje</button>
        </div>
    </form>
</div>
        </div>
        <hr style="background-color: #4a4a4a;">
        <p class="has-text-centered">&copy; 2026 El Faro. Desarrollado para Taller de Aplicaciones.</p>
    </div>
</footer>
<script>
  document.addEventListener('DOMContentLoaded', () => {

    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    if ($navbarBurgers.length > 0) {
      $navbarBurgers.forEach( el => {
        el.addEventListener('click', () => {
          const target = el.dataset.target;
          const $target = document.getElementById(target);

          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
        });
      });
    }

    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
      const $notification = $delete.parentNode;

      $delete.addEventListener('click', () => {
        $notification.parentNode.removeChild($notification);
      });
    });
  });
</script>
</body>
</html>