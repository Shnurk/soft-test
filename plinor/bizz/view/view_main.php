<article>
    <div class="biggest_soft_new">
        Приборная панель по выбору техники и количеству
    </div>
</article>
<article class="landing_main">
    <? foreach ($data['data'] as $value): ?>
        <? if ($value['status'] == 1): ?>
            <div class="soft_news_cont">
                <a href="/plinor/article/index/<?= $value['id']; ?>">
                    <div class="single_new">
                        <div class="single_img">
                            <img src="/plinor/<?= $value['photo']; ?>">
                        </div>
                        <div class="news_text">

                            <?
                            $value['tag'] = json_decode($value['tag'], true);
                            foreach ($value['tag'] as $tag):?>
                                <div class="news_tags">
                                    <?= $tag; ?>
                                </div>
                            <? endforeach; ?>
                            <div class="news_name">
                                <?= $value['h1']; ?>
                            </div>
                            <div class="news_date">
                                <?= $value['pub_time']; ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <? endif; ?>
    <? endforeach; ?>

    <div class="soft_news_cont">
        <a href="/plinor/article">
            <div class="single_new">
                <div class="single_img">
                    <img src="/plinor/pic/orig/proector.png">
                </div>
                <div class="news_text">
                    <div class="news_tags">
                        Прожевальский Н.С.
                    </div>
                    <div class="news_name">
                        Ноутбук HP 3000. Хорошая машина
                    </div>
                    <div class="news_date">
                        20 минут назад
                    </div>
                </div>
            </div>
        </a>
    </div>

</article>