<?php do_action( 'main_bottom' ); ?>
</section> <!-- .main -->

<footer class="site-footer" role="contentinfo">
    <?php do_action( 'footer_top' ); ?>
    <div class="design-credit">
        <span>
            <?php
                $site_url = 'https://www.competethemes.com/author/';
                $footer_text = sprintf( __( '<a href=\"%s\" target=\"_blank\">Author WordPress Theme</a> Compete Themes, modified by @eycopia', 'author' ), esc_url( $site_url ) ) ;
                $footer_text = apply_filters( 'ct_author_footer_text', $footer_text );
                echo wp_kses_post( $footer_text );
            ?>
        </span>
    </div>
</footer>
</div><!-- .max-width -->
<?php do_action( 'overflow_bottom' ); ?>
</div><!-- .overflow-container -->

<?php wp_footer(); ?>

<?php do_action( 'body_bottom' ); ?>
</body>
</html>