
<?php get_header(); ?>
  <div class="about" id="about" style="background: url(<?=  pods_field_display('background_white');?>) center 101% repeat-x, url(<?= pods_field_display('background_dark');?>) center 101% repeat-x, #1d1d1d;" >
    <div class="container">
      <div class="about__inner">
      <?php
        $years = explode(",", pods_field_display('about_year'));
        $texts = explode("#", pods_field_display('about_text'));

        // Ensure both arrays have valid data
        if (!empty($years) && !empty($texts)) {
            // Ensure both arrays have the same length
            $count = min(count($years), count($texts));

            for ($i = 0; $i < $count; $i++) {
      ?>
        <div class="about__item">
          <div class="about__year"><?= htmlspecialchars($years[$i]) ?></div> 
          <div class="about__text"><?= htmlspecialchars($texts[$i]) ?></div>
        </div>
      <?php
            }
        } else {
            // Handle the case where there are no years or texts
            echo '<div class="about__item"><div class="about__text">No information available.</div></div>';
        }
      ?>
      </div>
    </div>
  </div>
  <div class="team" id="team">
    <div class="container">
      <div class="block__head">
        <h2 class="block__title"><?= pods_field_display('team_title'); ?></h2>
        <p class="block__text"><?= pods_field_display('team_description'); ?></p>
      </div>
      <div class="team__inner">
        <!-- Swiper Slider (Visible on Desktop) -->
        <div class="swiper swiper-container desktop-only">
          <div class="swiper-wrapper">
            <?php 
              $team_imgs = explode(" ", pods_field_display('team_imgs'));
              $members_titles = explode("#", pods_field_display('members_titles'));
              $members_description = explode("#", pods_field_display('members_description'));
              $count_team_members = min(count($team_imgs), count($members_titles), count($members_description));
              
              for($i = 0; $i < $count_team_members; $i++ ) {
            ?>
              <div class="swiper-slide">
                <div class="team__item">
                  <img class="team__item-img" src="<?= htmlspecialchars($team_imgs[$i]); ?>" alt="">
                  <h3 class="team__item-title"><?= htmlspecialchars($members_titles[$i]); ?></h3>
                  <p class="team__item-text"><?= htmlspecialchars($members_description[$i]); ?></p>
                  <div class="team__icon-box">
                    <?php 
                      if(pods_field_display('twitter')) {
                    ?>
                      <a href="<?= pods_field_display('twitter') ?>" target="_blank">
                        <i class="icon-twitter" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>
                    <?php
                      if(pods_field_display('instagram')) {
                    ?>
                      <a href="<?= pods_field_display('instagram') ?>" target="_blank">
                        <i class="icon-instagram" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>
                    <?php
                      if(pods_field_display('vk')) {
                    ?>
                      <a href="<?= pods_field_display('vk') ?>" target="_blank">
                        <i class="icon-vkontakte" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>
                    <?php
                      if(pods_field_display('facebook')) {
                    ?>
                      <a href="<?= pods_field_display('facebook') ?>" target="_blank">
                        <i class="icon-facebook-squared" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>
                  </div>
                </div>
              </div>
            <?php 
            }
            ?>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- Static Team Items (Visible on Mobile) -->
        <div class="mobile-only">
            <?php 
              $team_imgs = explode(" ", pods_field_display('team_imgs'));
              $members_titles = explode("#", pods_field_display('members_titles'));
              $members_description = explode("#", pods_field_display('members_description'));
              $count_team_members = min(count($team_imgs), count($members_titles), count($members_description));
              
              for($i = 0; $i < $count_team_members; $i++ ) {
            ?>
            <div class="team__item">
                <img class="team__item-img" src="<?= htmlspecialchars($team_imgs[$i]); ?>" alt="">
                <h3 class="team__item-title"><?= htmlspecialchars($members_titles[$i]); ?></h3>
                <p class="team__item-text"><?= htmlspecialchars($members_description[$i]); ?></p>
                <div class="team__icon-box">
                    <?php 
                      if(pods_field_display('twitter')) {
                    ?>
                      <a href="<?= pods_field_display('twitter') ?>" target="_blank">
                        <i class="icon-twitter" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>
                    <?php
                      if(pods_field_display('instagram')) {
                    ?>
                      <a href="<?= pods_field_display('instagram') ?>" target="_blank">
                        <i class="icon-instagram" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>
                    <?php
                      if(pods_field_display('vk')) {
                    ?>
                      <a href="<?= pods_field_display('vk') ?>" target="_blank">
                        <i class="icon-vkontakte" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>
                    <?php
                      if(pods_field_display('facebook')) {
                    ?>
                      <a href="<?= pods_field_display('facebook') ?>" target="_blank">
                        <i class="icon-facebook-squared" aria-hidden="true"></i>
                      </a>
                    <?php
                      }
                    ?>            
                </div>
            </div>
            <?php 
            }
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="provide" id="provide">
    <div class="container">
      <div class="block__head inverse">
        <h2 class="block__title"><?= pods_field_display('provide_title') ?></h2>
        <p class="block__text"><?= pods_field_display('provide_text') ?></p>
      </div>
    </div>
    <div class="provide__inner">
      <?php
        $p_icons = explode("#", pods_field_display('provide_item_icon'));
        $item_titles = explode('#', pods_field_display('provide_item_title'));
        $item_texts = explode('#', pods_field_display('provide_item_text'));

        $count = min(count($p_icons), count($item_titles), count($item_texts));

        for($i = 0; $i < $count; $i++) {
      ?>
        <div class="provide__item">
          <i class="<?= htmlspecialchars($p_icons[$i]) ?>"></i>
          <h3 class="provide__item-title"><?= htmlspecialchars($item_titles[$i]) ?></h3>
          <p class="provide__item-text"><?= htmlspecialchars($item_texts[$i]) ?></p>
        </div>
      <?php 
       }
      ?>
    </div>
  </div>
  <div class="contact" id="contact">
    <div class="container">
      <div class="block__head">
        <h2 class="block__title"><?= pods_field_display('contact_title'); ?></h2>
        <p class="block__text"><?= pods_field_display('contact_text'); ?></p>
      </div>
      <div class="contact__inner">
        <div class="contact__icon-box">
          <?php 
            $c_icons = explode("#", pods_field_display('contact_item_icon'));
            $item_refs = explode("#", pods_field_display('contact_link_ref'));
            $item_texts = explode("#", pods_field_display('contact_link_text'));
            $count = min(count($c_icons), count($item_refs), count($item_texts));

            for($i = 0; $i < $count; $i++) {
          ?>
          <div class="contact__item">
            <i class="<?= htmlspecialchars($c_icons[$i]) ?>"></i>
            <div class="contact__text">
              <?php 
                if ( htmlspecialchars($item_texts[$i]) ) {
              ?>
                <a href="<?= htmlspecialchars($item_refs[$i]) ?>" target="_blank">
                  <?= htmlspecialchars($item_texts[$i]); ?>
                </a>
              <?php 
                } 
              ?>
            </div>
          </div>
          <?php 
            }
          ?>
        </div>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>