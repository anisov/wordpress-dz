<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">
            <div class="tags-list">
                <?php wp_tag_cloud([
                        'smallest'=> 0.9,
                        'largest'=>0.9,
                        'unit'=>'em'
                ])?>
            </div>
        </div>
    </div>
    <?php
    if(end(explode('/',get_page_template()))=='page-stock.php'): ?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории акций</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php //$categories = get_categories(array('parent' =>0)); для обычных категорий ?>
                <?php $categories = get_terms( array(
                        'hide_empty'  => 0,
                        'taxonomy'    => 'category_akcia',
                        'pad_counts'  => 1,
                        'parent' =>0
                ));?>
                <?php foreach ($categories as $category) : ?>
                    <?php if($category->slug != 'bez-rubriki') :
                        //для обычных категорий, для категорий новостей не используется
                        ?>
                        <li class="category-list__item">
                            <a href="<?php echo get_category_link($category->cat_ID); ?>"
                               class="category-list__item__link">
                                <?php echo $category->name; ?>
                            </a>
                            <?php //$sub_categories = get_categories(array(
                                //'parent' => $category->term_id
                            //)); для обычных категорий ?>
                            <?php $sub_categories = get_terms(array(
                                'hide_empty'  => 0,
                                'taxonomy'    => 'category_akcia',
                                'pad_counts'  => 1,
                                'parent' => $category->term_id
                            )); ?>
                            <?php if($sub_categories) : ?>
                            <ul class="category-list__inner">
                                <?php foreach ($sub_categories as $sub_category) : ?>
                                        <li class="category-list__item">
                                            <a href="<?php echo get_term_link($sub_category->term_id,'category_akcia'); ?>" class="category-list__item__link">
                                                <?php echo $sub_category->name; ?>
                                            </a>
                                        </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Календарь</div>
        <div class="sidebar-item__content">
            <?php echo get_calendar();?>
        </div>
    </div>
</div>