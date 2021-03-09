<div class="each-member-wrap">
  <img class="member-figure" src= "<?php block_field( 'member-icon' ); ?>" />
  <div class="member-detail">
    <div class="member-name"><span><?php block_field( 'member-name' ); ?></span></div>
    <ul class="member-feature">
    <li>人生目標（仮）<div><?php block_field( 'member-goal' ); ?></div></li>
    <li>行動指針（仮）<div><?php block_field( 'member-action' ); ?></div></li>
    <li>趣味<div><?php block_field( 'member-hobby' ); ?></div></li>
    </ul>
    <hr class="member-hr" />
    <div class="member-introduction"><?php block_field( 'member-introduction' ); ?></div>
    <div class="member-introduction">→<a href=<?php block_field( 'member-article' ); ?>><?php block_field( 'member-name' ); ?>の履歴書を見る</a></div>
  </div>
</div>