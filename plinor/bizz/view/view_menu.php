<header>

    <div class="nav_menu">
        <div class="nav_logo nav_edge">
            <a href="/plinor/main"> плинор</a>
        </div>
        <div class="nav_tag">
                <a href="/plinor/main" class="nav_one main">техника</a>
                <a href="#">|</a>
                <a href="/plinor/main/them/actual" class="nav_one">ноутбуки</a>
                <a href="#">|</a>
                <a href="/plinor/main/them/power" class="nav_one">проекторы</a>
                <a href="#">|</a>
                <a href="/plinor/main/them/lev" class="nav_one">измерительная техника</a>
                <a href="#">|</a>
                <a href="/plinor/main/them/games" class="nav_one">расходные материалы</a>
        </div>
        <div class="nav_setting nav_edge">
            <?if(isset($_COOKIE["hash"])&&($_COOKIE["hash"]!="")):?>
                <a href="/plinor/cabinet/view/id" class="nav_one">кабинет</a>
                <a href="#">|</a>
                <a href="/plinor/mail" class="nav_one">почта</a>
                <a href="#">|</a>
                <a href="/plinor/history" class="nav_one">история</a>
                <a href="#">|</a>
            <?endif;?>
                <?if(isset($_COOKIE["hash"])&&($_COOKIE["hash"]!="")):?>
                    <a href="/plinor/enter/exit" class="nav_one">выйти</a>
                <?else:?>
                    <a href="/plinor/enter" class="nav_one">войти</a>
                <?endif;?>
        </div>
    </div>

    <div class="hot_news">

        <div class="hot_value hot_grey nav_edge">
            <?if(isset($_SESSION['RULES'])&&($_SESSION['RULES']>=4)):?>
            <a  href="/plinor/list/order" class="hot_active">Заявки</a>
            <?endif;?>
        </div>
        <div class="hot_jump">
            <img src="/plinor/pic/web_logo/tea.gif">
            <p>Macbook Pro 9 зарезервирован с 26.07.20 по 28.07.20 Ивановой И.И.</p>
        </div>
        <div class="nav_setting hot_grey nav_edge">
        <?if(isset($_SESSION['RULES'])&&($_SESSION['RULES']>=4)):?>
                <a href="#">Список:</a>
                <a href="/plinor/list/tech" class="hot_active">Техника</a>
                <a href="#">|</a>
                <a href="/plinor/list/user" class="hot_active">Пользователи</a>
            <?endif;?>
        </div>
    </div>
</header>