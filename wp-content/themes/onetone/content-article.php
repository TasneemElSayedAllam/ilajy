<div class="entry-box-wrap" id="post-<?php the_ID(); ?>">
                                        <article class="entry-box" role="article">
                                        <?php if (  has_post_thumbnail() ): ?>
                                            <div class="feature-img-box">
                                                <div class="img-box figcaption-middle text-center from-top fade-in">
                                                    <a href="<?php the_permalink();?>">
                                                        <?php the_post_thumbnail();?>
                                                        <div class="img-overlay dark">
                                                            <div class="img-overlay-container">
                                                                <div class="img-overlay-content">
                                                                    <i class="fa fa-link"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>                                                 
                                            </div>
                                            <?php endif;?>
                                            <div class="entry-main">
                                                <div class="entry-header">
                                                    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                                    <ul class="entry-meta">
                                                        <li class="entry-date"><i class="fa fa-calendar"></i><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m'));?>"><?php echo get_the_date("M d, Y");?></a></li>
                                                        <li class="entry-author"><i class="fa fa-user"></i><?php echo get_the_author_link();?></li>
                                                        <li class="entry-catagory"><i class="fa fa-file-o"></i><?php the_category(', '); ?></li>
                                                        <li class="entry-comments"><i class="fa fa-comment"></i><a href="<?php the_permalink();?>#comments"><?php  comments_popup_link( __('No comments yet','onetone'), __('1 comment','onetone'), __('% comments','onetone'), 'comments-link', '');?></a></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-summary">
                                                   <?php echo onetone_get_summary(); ?>
                                                </div>
                                                <div class="entry-footer">
                                                    <a href="<?php the_permalink();?>" class="entry-more pull-right"><?php _e("Read More","onetone");?> &gt;&gt;</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>