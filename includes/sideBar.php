<div class="footwear">
    <h2 class="list__title"><?= $list1['title']; ?></h2>

    <?php foreach ($list1['list'] as $item): ?>
        <div class="footwear__item gen">
            <input type="<?= $item['type']; ?>" name="<?= $item['name']; ?>" id="<?= $item['id']; ?>">
            <label for="<?= $item['id']; ?>"><?= $item['label']; ?></label>
        </div>
    <?php endforeach; ?>
</div>

<div class="brand">
    <h2 class="list__title"><?= $list2['title']; ?></h2>
    <?php foreach ($list2['list'] as $item): ?>
        <div class="brand__item gen">
            <input type="<?= $item['type']; ?>" name="<?= $item['name']; ?>" id="<?= $item['id']; ?>">
            <label for="<?= $item['id']; ?>"><?= $item['label']; ?></label>
        </div>
    <?php endforeach; ?>
</div>