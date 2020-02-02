<?if($data[1]!='n'):echo $data[1];endif;?>
<article class="enter">
    <form method="post" action="/plinor/enter/action">
        <div class="ent_field">
            <div class="ent_text">Логин</div>
            <input class="ent_ent" type="text" name="login" placeholder="Сотрудник">
        </div>
        <div class="ent_field">
            <div class="ent_text">Пароль</div>
            <input class="ent_ent" type="password" name="password" placeholder="Пароль">
        </div>

        <div class="ent_field">
                <input type="submit" name="submit" value="Вход">
        </div>
    </form>
</article>
