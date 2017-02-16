<?php get_header();

get_template_part('content/archive-header');

?>

<h1>Proyectos</h1>

<div id="main-projects">
    <h2>Proyectos Principales</h2>
    <div class="box-project">
        <h3> Generador de Reportes</h3>
        <div>
            <figure>
                <img src="<?php echo get_theme_file_uri('/assets/images/cap-generador-reportes.png') ?>" alt="captura app">
                <figcaption>
                    Captura de una grilla generada
                </figcaption>
            </figure>
            <div class="project-description">
            El generador de reportes crea grillas facilmente a partir de un sql.
            </div>
        </div>
    </div>

    <div class="box-project">
        <h3> Reader </h3>
        <div>
            <a href="javascript:;" id="generador-reportes">
            <figure>
                <img src="<?php echo get_theme_file_uri('/assets/images/cap-generador-reportes.png') ?>" alt="captura app">
                <figcaption>
                    Captura de una grilla generada
                </figcaption>
            </figure>
            </a>
            <div class="project-description">
                Un lugar para compartir sobre lo leido.
            </div>
        </div>
    </div>

    <div class="box-project">
        <h3> Agremia </h3>
        <div>
            <figure>
                <img src="<?php echo get_theme_file_uri('/assets/images/cap-generador-reportes.png') ?>" alt="captura app">
                <figcaption>
                    Captura de una grilla generada
                </figcaption>
            </figure>
            <div class="project-description">
                La aplicación para organizaciones sociales
            </div>
        </div>
    </div>



</div>

<div id="packages">
    <h2>Paquetes desarrollados</h2>

    <div>
        <h3> Simple Db</h3>
        <div>
            Un sencilla libreria para trabajar con base de datos
        </div>
    </div>

    <div>
        <h3> Simple Excel</h3>
        <div>
            Un wrapper para quitar la complejidad a PHP-Excel
        </div>
    </div>

    <div>
        <h3>ETL</h3>
        <div>
            Una librería para procesar gran cantidad de archivos y cargarlos en una base de datos
        </div>
    </div>


</div>


<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_theme_file_uri('/assets/fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3');?>"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri('/assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('/assets/fancybox/source/jquery.fancybox.css?v=2.1.5');?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri('/assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7');?>" />
<script type="text/javascript" src="<?php echo get_theme_file_uri('/assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7');?>"></script>

<script type="text/javascript">

    jQuery(document).ready(function($) {
    $("#generador-reportes").click(function() {
            $.fancybox.open([
                {
                    href : "<?php echo get_theme_file_uri('/assets/images/gr-server.png');?>",
                    title : 'My title'
                    }, {
                    href : "<?php echo get_theme_file_uri('/assets/images/gr-configure.png');?>",
                    title : '2nd title'
                    }, {
                    href : "<?php echo get_theme_file_uri('/assets/images/cap-generador-reportes.png');?>"
                }
                ], {
                    helpers : {
                        thumbs : {
                        width: 75,
                        height: 50
                        }
                    }
                }
            );
        });
    });
</script>
