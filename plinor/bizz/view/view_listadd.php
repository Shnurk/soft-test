<article class="list">
<div class="biggest_soft_new">
    <a href="<?php echo URL_BASE."/list/".$data['page'];?>/list" class="list_a">
        <?php if($data['page']!="order"):?>
        Список
    </a>
    <a href="#">|</a>
    <a href="<?php echo URL_BASE."/list/".$data['page'];?>/add" class="list_a">
        Добавить
   <?php else:?>
   Заявки
        <?php endif;?>
    </a>
</div>
<?php if($data['option']=="list"):
    include "bizz/view/view_list.php";
else:
    include "bizz/view/view_addform.php";
endif;?>
</article>
