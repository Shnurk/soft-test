
function deletepol(self) {
        $( self ).parent().parent().parent().remove();
}

function rollpol(self) {
    if($( self ).parent().parent().parent().find(".ent_field").hasClass("hid"))
      $( self ).parent().parent().parent().find(".ent_field").removeClass("hid");
    else
    $( self ).parent().parent().parent().find(".ent_field").addClass("hid");
}

function new_form(option) {
    var amount=$(".art_man").length;
    switch (option) {
        case 'tech': $(".add_pult").before(" <article class=\"art_man\"'>" +
            "<div class=\"add_perpult\">\n" +
            "\n" +
            "        <div class = \"add_header\" style=\"margin:0;\">Техника "+amount+"</div>\n" +
            "        <div class = \"top_icons\">\n" +
            "            <i class=\"fas fa-edit\" onclick=\"rollpol(this)\"></i>\n" +
            "            <i class=\"fas fa-trash-alt\" onclick=\"deletepol(this)\"></i>\n" +
            "        </div>\n" +
            "\n" +
            "\n" +
            "    </div>" +
            " <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Инвентарный номер</label><br>\n" +
            "            <input class=\"ent_ent\" type=\"text\" name=\"iid[]\" placeholder=\"ИН\">\n" +
            "        </div>\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Полная модель</label><br>\n" +
            "            <input class=\"ent_ent\" type=\"text\" name=\"md[]\" placeholder=\"ПМ\">\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Короткая модель</label><br>\n" +
            "            <input class=\"ent_ent\" type=\"text\" name=\"cm[]\" placeholder=\"КМ\">\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Серийный номер</label><br>\n" +
            "            <input class=\"ent_ent\" type=\"text\" name=\"sid[]\" placeholder=\"СН\">\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Состояние</label><br>\n" +
            "            <textarea class=\"ent_ent\" type=\"text\" name=\"cond[]\" placeholder=\"Состояние\" >\n" +
            "            </textarea>\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Примечание</label><br>\n" +
            "            <textarea class=\"ent_ent\" type=\"text\" name=\"opt[]\" placeholder=\"Примечание\" >\n" +
            "            </textarea>\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Название склада</label><br>\n" +
            "            <input class=\"ent_ent\" type=\"text\" name=\"storage[]\" placeholder=\"Склад\">\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Режим</label><br>\n" +
            "            <select name=\"work[]\">\n" +
            "                <option disabled>Выберите режим</option>\n" +
            "                <option value=\"0\">Рабочий</option>\n" +
            "                <option value=\"1\">Архивный</option>\n" +
            "            </select>\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Резерв</label><br>\n" +
            "            <select name=\"reserve[]\">\n" +
            "                <option disabled>Выберите режим</option>\n" +
            "                <option value=\"0\">Доступен</option>\n" +
            "                <option value=\"1\">Недоступен</option>\n" +
            "            </select>\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Количество</label><br>\n" +
            "            <input class=\"ent_ent\" type=\"number\" name=\"amount[]\" placeholder=\"Количество\" min=\"1\" value=\"1\">\n" +
            "        </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Тип техники</label><br>\n" +
            "            <select name=\"type[]\">\n" +
            "                <option disabled>Выберите тип</option>\n" +
            "                <option value=\"1\">Ноутбук</option>\n" +
            "                <option value=\"2\">Проектор</option>\n" +
            "                <option value=\"3\">Устройство замера</option>\n" +
            "                <option value=\"4\">Расходный материал</option>\n" +
            "            </select>\n" +
            "        </div></article>");break;
        case 'user': $(".add_pult").before("<article class=\"art_man\" > " +
            "\n" +
            "<div class=\"add_perpult\">" +
            "        <div class = \"add_header\" style=\"margin:0;\">Пользователь "+amount+"</div>\n" +
            "        <div class = \"top_icons\">\n" +
            "            <i class=\"fas fa-edit\" onclick=\"rollpol(this)\"></i>\n" +
            "            <i class=\"fas fa-trash-alt\" onclick=\"deletepol(this)\"></i>\n" +
            "        </div>\n" +
            "\n" +
            "</div>" +
           " <div class=\"ent_field\">\n" +
            "                <label class=\"ent_text\">Имя сотрудника</label><br>\n" +
            "                <input class=\"ent_ent\" type=\"text\" name=\"r_name[]\" placeholder=\"Имя\">\n" +
            "            </div>\n" +
            "            <div class=\"ent_field\">\n" +
            "                <label class=\"ent_text\">Фамилия сотрудника</label><br>\n" +
            "                <input class=\"ent_ent\" type=\"text\" name=\"r_surname[]\" placeholder=\"Фамилия\">\n" +
            "            </div>\n" +
            "\n" +
            "            <div class=\"ent_field\">\n" +
            "                <label class=\"ent_text\">Отчество сотрудника</label><br>\n" +
            "                <input class=\"ent_ent\" type=\"text\" name=\"r_secname[]\" placeholder=\"Отчество\">\n" +
            "            </div>\n" +
            "\n" +
            "            <div class=\"ent_field\">\n" +
            "                <label class=\"ent_text\">Почта сотрудника</label><br>\n" +
            "                <input class=\"ent_ent\" type=\"text\" name=\"email[]\" placeholder=\"Почта\">\n" +
            "            </div>\n" +
            "\n" +
            "        <div class=\"ent_field\">\n" +
            "            <label class=\"ent_text\">Полномочия сотрудника</label><br>\n" +
            "            <select name=\"type[]\">\n" +
            "                <option disabled>Выберите полномочия</option>\n" +
            "                <option value=\"0\">Партнёр</option>\n" +
            "                <option value=\"1\">Сотрудник</option>\n" +
            "                <option value=\"2\">Старший сотрудник</option>\n" +
            "                <option value=\"3\">Начальник</option>\n" +
            "                <option value=\"4\">Модератор</option>\n" +
            "                <option value=\"5\">Администратор</option>\n" +
            "            </select>"+
            "        </div></article>");break;
    }
}
