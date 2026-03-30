<footer>
    <div class="service__container">
        <?php foreach ($service['icon'] as $item): ?>
            <div class="service">
                <div class="service__icon">
                    <img src="<?= $item['src']; ?>" alt="<?= $item['alt']; ?>">
                </div>
                <p><span><?= $item['span']; ?></span><?= $item['text']; ?></p>
            </div>
        <?php endforeach; ?>

        <div class="service">
            <div class="service__icon">
                <svg width="24" height="24">
                    <use href="<?= $service['source']['icon']; ?>" />
                </svg>
            </div>
            <a href="<?= $service['source']['link']; ?>" target="_blank" rel="noopener noreferrer"
                aria-label="<?= $service['source']['label']; ?>"><?= $service['source']['text']; ?></a>
        </div>
    </div>
</footer>
</body>

</html>