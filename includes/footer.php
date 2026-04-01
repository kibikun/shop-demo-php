<footer>
    <div class="service__container">
        <?php foreach ($service['service'] as $source_code): ?>
            <div class="service">
                <a href="<?= $source_code['link']; ?>" target="_blank" rel="noopener noreferrer"
                    aria-label="<?= $source_code['label']; ?>">
                    <div class="service__icon">
                        <svg width="24" height="24">
                            <use href="<?= $source_code['icon']; ?>" />
                        </svg>
                    </div>
                    <?= $source_code['text']; ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</footer>
</body>

</html>