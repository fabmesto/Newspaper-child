<?php
class td_category_template_3 extends td_category_template {

    function render() {
        td_global::$custom_no_posts_message = false;
        ?>

        <!-- subcategory -->
        <!--<div class="td-category-header td-container-wrap">
            <div class="td-container">
                <div class="td-pb-row">
                    <div class="td-pb-span12">-->

                        <div class="td-crumb-container"><?php echo parent::get_breadcrumbs(); ?></div>
                        <h1 class="entry-title td-page-title"><?php echo parent::get_title(); ?></h1>

                        <?php echo parent::get_description(); ?>

                        <?php echo parent::fab_get_sibling_categories(array(
                                'show_background_color' => false
                            ));
                        ?>

                    <!--</div>
                </div>
                <?php echo parent::get_pull_down();  ?>
            </div>
        </div>-->

    <?php
    }
}
