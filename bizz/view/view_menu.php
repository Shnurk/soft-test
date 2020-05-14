<header>

    <div class="nav_menu">
        <div class="nav_logo nav_edge">
            <a href="<?php echo URL_BASE;?>/main"> плинор</a>
        </div>
        <div class="nav_tag">
                <a href="<?php echo URL_BASE;?>/main" class="nav_one main">техника</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/actual" class="nav_one">ноутбуки</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/power" class="nav_one">проекторы</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/lev" class="nav_one">измерительная техника</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/main/them/games" class="nav_one">расходные материалы</a>
        </div>
        <div class="nav_setting nav_edge">
            <?php if(isset($_COOKIE["hash"])&&($_COOKIE["hash"]!="")):?>
                <a href="<?php echo URL_BASE;?>/cabinet/view/id" class="nav_one">кабинет</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/mail" class="nav_one">почта</a>
                <a href="#">|</a>
                <a href="<?php echo URL_BASE;?>/history" class="nav_one">история</a>
                <a href="#">|</a>
            <?php endif;?>
                <?php if(isset($_COOKIE["hash"])&&($_COOKIE["hash"]!="")):?>
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
            <img src="/pic/web_logo/tea.gif">
            <p>Macbook Pro 9 зарезервирован с 26.07.20 по 28.07.20 Ивановой И.И.</p>
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