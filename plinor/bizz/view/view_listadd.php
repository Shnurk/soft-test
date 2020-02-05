<article class="list">
<div class="biggest_soft_new">
    <a href="/plinor/list/<?=$data['page']?>/list" class="list_a">
        <?if($data['page']!="order"):?>
        Список
    </a>
    <a href="#">|</a>
    <a href="/plinor/list/<?=$data['page']?>/add" class="list_a">
        Добавить
   <?else:?>
   Заявки
        <?endif;?>
    </a>
</div>
<?if($data['option']=="list"):
    include "bizz/view/view_list.php";
else:
    include "bizz/view/view_addform.php";
endif;?>
</article>
