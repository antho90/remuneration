<footer>
    <p class="mg-foot">© 2021 Anthony Chatelot - Tous droits réservés</p>

    <div class="col-12">
        <!-- ajout de ma nouvelle widget area -->
        <?php if (is_active_sidebar('new-widget-area')) : ?>
            <div id="header-widget-area" class="nwa-header-widget widget-area mg-left" role="complementary">
                <?php dynamic_sidebar('new-widget-area'); ?>
            </div>
        <?php endif; ?>
        <!-- fin nouvelle widget area -->
    </div>

</footer>
</body>

</html>