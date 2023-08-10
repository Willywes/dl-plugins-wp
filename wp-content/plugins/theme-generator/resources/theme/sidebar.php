<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */

include 'settings/sidebars.php';


if (!empty($SIDEBARS)) {
    foreach ($SIDEBARS as $id => $name) {
        if ( ! is_active_sidebar( $id ) ) {
            continue;
        }
        ?>
        <aside id="<?php echo $id; ?>" class="widget-area">
            <?php dynamic_sidebar( $id ); ?>
        </aside>
        <?php
    }
}
