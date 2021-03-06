<section class="promo">
                <h2 class="promo__title">Нужен стафф для катки?</h2>
                <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
                <ul class="promo__list">
                    <?php foreach ($categories as $modifier => $category) : ?>
                        <li class="promo__item promo__item--<?= $modifier ?>">
                            <a class="promo__link" href="pages/all-lots.html"><?= htmlspecialchars($category) ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
            <section class="lots">
                <div class="lots__header">
                    <h2>Открытые лоты</h2>
                </div>
                <ul class="lots__list">
                    <?php foreach ($products as $product) : ?>
                        <li class="lots__item lot">
                            <div class="lot__image">
                                <img src="<?= $product['url_picture'] ?>" width="350" height="260" alt="">
                            </div>
                            <div class="lot__info">
                                <span class="lot__category"><?= htmlspecialchars($product['category']) ?></span>
                                <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= htmlspecialchars($product['title']) ?></a></h3>
                                <div class="lot__state">
                                    <div class="lot__rate">
                                        <span class="lot__amount">Стартовая цена</span>
                                        <span class="lot__cost"><?= htmlspecialchars(formatting($product['price'])) ?></span>
                                    </div>
                                    <?php $timer = elapsedTime($product['date_range']); ?>
                                    <?php $timer_finish = "";
                                      if ($timer[0] < 1):
                                        $timer_finishing = "timer--finishing";
                                      endif; ?>
                                    <div class="lot__timer timer <?= $timer_finishing; ?>">
                                        <?= $timer[0] ?> : <?= $timer[1]; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
