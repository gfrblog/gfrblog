<div class="each-member-wrap">
  <div class="member-detail">
    <div class="member-figure-div">
      <img class="member-figure" src= "<?php block_field( 'member-icon' ); ?>" />
    </div>
    <hr class="member-hr" />
    <div class="member-name"><span><?php block_field( 'member-name' ); ?></span></div>
    <ul class="member-feature">
    <li>人生目標（仮）<div><?php block_field( 'member-goal' ); ?></div></li>
    <li>行動指針（仮）<div><?php block_field( 'member-action' ); ?></div></li>
    <li>専攻<div><?php block_field( 'member-major' ); ?></div></li>
    </ul>
    <ul class="member-sns">
      <?php if (block_value( 'member-twitter' ) != null) : ?>
        <li><a href="https://twitter.com/<?php block_field( 'member-twitter' ); ?>?ref_src=twsrc%5Etfw" class="flowbtn11 fl_tw1"><i class="fab fa-twitter fa-lg"></i><span>&nbsp;Twitter</span></a></li>
      <?php endif; ?>
      <?php if (block_value( 'member-facebook' ) != null) : ?>
        <li><a href="https://www.facebook.com/profile.php?id=<?php block_field( 'member-facebook' ); ?>" class="flowbtn11 fl_fb1"><i class="fab fa-facebook-f fa-lg"></i><span>&nbsp;Facebook</span></a></li>
      <?php endif; ?>
      <?php if (block_value( 'member-instagram' ) != null) : ?>
        <li><a href="https://www.instagram.com/<?php block_field( 'member-instagram' ); ?>" class="flowbtn11 insta_btn1"><i class="fab fa-instagram fa-lg"></i><span>&nbsp;Istagram</span></a></li>
      <?php endif; ?>
    </ul>
    <hr class="member-hr" />
    <div class="member-introduction"><?php block_field( 'member-introduction' ); ?></div>
    <div class="member-introduction">→<a href=<?php block_field( 'member-article' ); ?>><?php block_field( 'member-name' ); ?>の人生についてもっと詳しく</a></div>
  </div>
</div>