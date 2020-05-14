<form name="addform" method="post" action="<?php echo URL_BASE."/list/".$data['page'];?>/save">
<article class="art_man">
    <?php if($data['page']!='order'):?>
    <div class="add_perpult">

        <div class = "add_header" style="margin:0;"><?php if($data['page']=='user'):?>Пользователь<?php else:?>Техника<?php endif;?></div>
        <div class = "top_icons">
            <i class="fas fa-edit" onclick="rollpol(this)"></i>
            <i class="fas fa-trash-alt" onclick="deletepol(this)"></i>
        </div>


    </div>
    <?php endif;?>
    <?php switch ($data['page']):
    case 'tech':?>
        <div class="ent_field">
            <label class="ent_text">Инвентарный номер</label><br>
            <input class="ent_ent" type="text" name="iid[]" placeholder="ИН">
        </div>
        <div class="ent_field">
            <label class="ent_text">Полная модель</label><br>
            <input class="ent_ent" type="text" name="md[]" placeholder="ПМ">
        </div>

        <div class="ent_field">
            <label class="ent_text">Короткая модель</label><br>
            <input class="ent_ent" type="text" name="cm[]" placeholder="КМ">
        </div>

        <div class="ent_field">
            <label class="ent_text">Серийный номер</label><br>
            <input class="ent_ent" type="text" name="sid[]" placeholder="СН">
        </div>

        <div class="ent_field">
            <label class="ent_text">Состояние</label><br>
            <textarea class="ent_ent" type="text" name="cond[]" placeholder="Состояние" >
            </textarea>
        </div>

        <div class="ent_field">
            <label class="ent_text">Примечание</label><br>
            <textarea class="ent_ent" type="text" name="opt[]" placeholder="Примечание" >
            </textarea>
        </div>

        <div class="ent_field">
            <label class="ent_text">Название склада</label><br>
            <input class="ent_ent" type="text" name="storage[]" placeholder="Склад">
        </div>

        <div class="ent_field">
            <label class="ent_text">Режим</label><br>
            <select name="work[]">
                <option disabled>Выберите режим</option>
                <option value="0">Рабочий</option>
                <option value="1">Архивный</option>
            </select>
        </div>

        <div class="ent_field">
            <label class="ent_text">Резерв</label><br>
            <select name="reserve[]">
                <option disabled>Выберите режим</option>
                <option value="0">Доступен</option>
                <option value="1">Недоступен</option>
            </select>
        </div>

        <div class="ent_field">
            <label class="ent_text">Количество</label><br>
            <input class="ent_ent" type="number" name="amount[]" placeholder="Количество" min="1" value="1">
        </div>

        <div class="ent_field">
            <label class="ent_text">Тип техники</label><br>
            <select name="type[]">
                <option disabled>Выберите тип</option>
                <option value="1">Ноутбук</option>
                <option value="2">Проектор</option>
                <option value="3">Устройство замера</option>
                <option value="4">Расходный материал</option>
            </select>
        </div>

    <?php ;break;
    case 'user':?>
            <div class="ent_field">
                <label class="ent_text">Имя сотрудника</label><br>
                <input class="ent_ent" type="text" name="r_name[]" placeholder="Имя">
            </div>
            <div class="ent_field">
                <label class="ent_text">Фамилия сотрудника</label><br>
                <input class="ent_ent" type="text" name="r_surname[]" placeholder="Фамилия">
            </div>

            <div class="ent_field">
                <label class="ent_text">Отчество сотрудника</label><br>
                <input class="ent_ent" type="text" name="r_secname[]" placeholder="Отчество">
            </div>

            <div class="ent_field">
                <label class="ent_text">Почта сотрудника</label><br>
                <input class="ent_ent" type="text" name="email[]" placeholder="Почта">
            </div>

        <div class="ent_field">
            <label class="ent_text">Полномочия сотрудника</label><br>
            <select name="type[]">
                <option disabled>Выберите полномочия</option>
                <option value="0">Партнёр</option>
                <option value="1">Сотрудник</option>
                <option value="2">Старший сотрудник</option>
                <option value="3">Начальник</option>
                <option value="4">Модератор</option>
                <option value="5">Администратор</option>
            </select>
        </div>
            <?php ;break;
            endswitch;?>

    <div class="add_pult">
        <?php if($data['page']!='order'):?>
            <div class="ent_field">
                <input type="button" value="Добавить" class="add_button" onclick="new_form('<?php echo$data['page']?>')">
            </div>
            <div class="ent_field">
                <input type="submit" name="submit" value="Зарегистрировать" class="add_button">
            </div>
        <?php endif;?>
    </div>
</article>

</form>