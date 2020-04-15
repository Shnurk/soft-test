<header>

    <div class="nav_menu">
        <div class="nav_logo nav_edge">
            <a href="<?php echo URL_BASE;?>/main">плинор</a>
        </div>
        <div class="nav_tag">
                <a href="<?php echo URL_BASE;?>/main" class="nav_one main">техника</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/1" class="nav_one">ноутбуки</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/2" class="nav_one">проекторы</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/3" class="nav_one">измерительная техника</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/4" class="nav_one">расходные материалы</a>
        </div>
        <div class="nav_setting nav_edge">
            <?php if(isset($_SESSION['RULES'])&&($_SESSION['RULES']!="")):?>
                <a href="<?php echo URL_BASE;?>/cabinet/view/" class="nav_one">кабинет</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/mail" class="nav_one">почта</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/history" class="nav_one">история</a>
                <a href="#">|</a>
            <?php endif;?>
                <?php if(isset($_SESSION['RULES'])&&($_SESSION['RULES']!="")):?>
                    <a href="<?php echo URL_BASE;?>/enter/exit" class="nav_one">выйти</a>
                <?php else:?>
                    <a href="<?php echo URL_BASE;?>/enter" class="nav_one">войти</a>
                <?php endif;?>
        </div>
    </div>

    <div class="hot_news">

        <div class="hot_value hot_grey nav_edge">
            <?php if(isset($_SESSION['RULES'])&&($_SESSION['RULES']>=4)):?>
            <a  href="<?php echo URL_BASE;?>/list/order" class="hot_active">Заявки</a>
            <?php endif;?>
        </div>
        <div class="hot_jump">

        </div>
        <div class="nav_setting hot_grey nav_edge">
        <?php if(isset($_SESSION['RULES'])&&($_SESSION['RULES']>=4)):?>
                <a href="#">Список:</a>
                <a href="<?php echo URL_BASE;?>/list/tech" class="hot_active">Техника</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/list/user" class="hot_active">Пользователи</a>
            <?php endif;?>
        </div>
    </div>
</header>