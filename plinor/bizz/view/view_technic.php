
<?php foreach ($data[0] as $value):?>
<article class="article">
    <div class="artic_visual">
        <img src="
                            <?php
        switch($value['typ']){
            case 1: echo URL_BASE."/pic/orig/noutbook.png";break;
            case 2: echo URL_BASE."/pic/orig/proector.png";break;
            case 3: echo URL_BASE."/pic/orig/machine.png";break;
            case 4: echo URL_BASE."/pic/orig/marker.png";break;
        }
        ?>">
    </div>
    <div class="artic_top">
    <h1> <?php echo $value['model_short'];?></h1>
        <div>
            <?php if(isset($_SESSION['RULES'])&&($_SESSION['RULES']>=3)):?>
        <a href="<?php echo URL_BASE;?>/article/change/<?php echo $value['id'];?>">
            <img src="<?php echo URL_BASE;?>/pic/orig/pencil.png">
        </a>
            <?php endif;?>
         <?php if(isset($_SESSION['RULES'])&&($_SESSION['RULES']>=4)):?>
            <a href="<?php echo URL_BASE;?>/article/delete/<?php echo $value['id'];?>">
                <img src="<?php echo URL_BASE;?>/pic/orig/cancel.png">
            </a>
            <?php endif;?>
        </div>
    </div>
    <div class="artic_atten">
        <table>
            <tr>
                <td>Полное название:</td>
                <td><?php echo $value['model_full'];?></td>
            </tr>
            <tr>
                <td>Инвентарный номер:</td>
                <td><?php echo $value['inv_id'];?></td>
            </tr>
            <tr>
                <td>Серийный номер:</td>
                <td><?php echo $value['serial_id'];?></td>
            </tr>
            <tr>
                <td>Место хранения:</td>
                <td><?php echo $value['stg_name'];?></td>
            </tr>
            <tr>
                <td>Текущее состояние:</td>
                <td><?php echo 1;?></td>
            </tr>
            <tr>
                <td>Доступное количество:</td>
                <td><?php echo $value['amount'];?></td>
            </tr>
        </table>
    </div>
    <hr>
     <h2>Описание</h2>
    <p>
    <?php echo $value['model_opt'];?>
    </p>
    <hr>
    <h2>Примечение</h2>
    <p>
    <?php echo $value['model_cond'];?>
    </p>
    <hr>
    <h2>История использования</h2>
    <p>
        <?php echo 1;?>
    </p>
</article>
<?endforeach;?>


