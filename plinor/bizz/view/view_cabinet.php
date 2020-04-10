<form name="addform" method="post" action="<?php echo URL_BASE;?>/cabinet/save" enctype="multipart/form-data">
<article>
    <div class="cab_profile row">
    <img src="<?php echo URL_BASE."/".$data['person'][8];?>" class="cab_avatar">
    <div class="cab_info">
        <input type="text" class="cab_fio" name="r_surname" value="<?php echo $data['person'][4];?>" <?php if($data['settings']==0):?>readonly<?php endif;?>>
        <div class="cab_io">
            <input type="text" class="cab_fio" name="r_name" value="<?php echo $data['person'][3];?>" <?php if($data['settings']==0):?>readonly<?php endif;?>>
            <input type="text" class="cab_fio" name="r_secname" value="<?php echo $data['person'][5];?>" <?php if($data['settings']==0):?>readonly<?php endif;?>>
        </div>
        <div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/profile.png" class="cab_icon">
            <input type="text" name="mode" value="<?php echo $data['person'][7];?>" readonly>
        </div>
        <div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/mail.png" class="cab_icon">
            <input type="text" name="mail" value="<?php echo $data['person'][6];?>" <?php if($data['settings']==0):?>readonly<?php endif;?>>
        </div>
        <div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/atsign.png" class="cab_icon">
            <input type="text" name="login" value="<?php echo $data['person'][1];?>" <?php if($data['settings']==0):?>readonly<?php endif;?>>
        </div>

        <?php if($data['settings']!=0):?>

            <div class="cab_full row">
                <img src="<?php echo URL_BASE;?>/pic/orig/eye.png" class="cab_icon eye" onclick="cab_vis(this,1)">
                <p class="cab_pus">Пароль</p>
                <input type="text" name="password" class="cab_puss unvis" value="<?php echo $data['person'][2];?>" <?php if($data['settings']==0):?>readonly<?php endif;?>>
            </div>

        <div class="cab_full row">
        <img src="<?php echo URL_BASE;?>/pic/orig/arrow.png" class="cab_icon">
        <label for="files" >Загрузить файл</label>
        </div>

        <div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/cancel.png" id="cross" class="cab_icon unvis" onclick='cross()'>
            <input type="text" class="unvis" id="cab_file" readonly>
        <input id="files" class="unvis" value="" type="file" name="avatar" onchange="file_name(id)">
        </div>

        <?php endif; ?>

    </div>
    <div class="cab_settings">
        <?php if($data['settings']==0):?>
        <a href="<?php echo URL_BASE;?>/cabinet/change"><div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/pencil.png" class="cab_icon">
            <p>Изменить профиль</p>
        </div>
        </a>
        <div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/eye.png" class="cab_icon eye" onclick="cab_vis(this,0)">
            <p class="cab_pus">Пароль</p>
            <input type="text" name="password" class="cab_puss unvis" value="<?php echo $data['person'][2];?>" <?php if($data['settings']==0):?>readonly<?php endif;?>>
        </div>
        <?php else:?>
        <div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/pencil.png" class="cab_icon">
            <input type="submit" name="submit" value="Сохранить изменения">
        </div>
        <a href="<?php echo URL_BASE;?>/cabinet/view"><div class="cab_full row">
            <img src="<?php echo URL_BASE;?>/pic/orig/cancel.png" class="cab_icon">
            <p>Отмена</p>
            </div></a>
        <?php endif;?>
    </div>
    </div>
    <div>
        <p class="cab_his cab_fio">Последняя активность</p>
    <div class="cab_history">
        У вас нет ранее бронированной техники
    </div>
    </div>
</article>
</form>