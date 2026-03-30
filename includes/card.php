<?php foreach ($product as $card): ?>
    <div class="card">
        <img src="<?= $card['img']['src']; ?>" alt="<?= $card['img']['alt']; ?>">
        <div class="content">
            <h2 class="name"><?= $card['title']; ?></h2>

            <div class="rating">
                <?php foreach ($card['rating'] as $rating): ?>
                    <svg width="15" height="15">
                        <use href="<?= $rating; ?>" />
                    </svg>
                <?php endforeach; ?>
            </div>

            <p class="price"><?= $card['price']; ?></p>
        </div>
    </div>
<?php endforeach; ?>