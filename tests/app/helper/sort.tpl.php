<?php $tableSortCounter = !isset($tableSortCounter) ? 0 : $tableSortCounter; ?>
<label for="<?= $tableId; ?>-sort-<?= ++$tableSortCounter; ?>">
    <input type="radio" name="<?= $tableId; ?>-sort" id="<?= $tableId; ?>-sort-<?= $tableSortCounter; ?>">
    <i class="sort-asc g-icon">expand_less</i>
</label>
<label for="<?= $tableId; ?>-sort-<?= ++$tableSortCounter; ?>">
<input type="radio" name="<?= $tableId; ?>-sort" id="<?= $tableId; ?>-sort-<?= $tableSortCounter; ?>">
    <i class="sort-desc g-icon">expand_more</i>
</label>