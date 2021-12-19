<?php $tableSortCounter = !isset($tableSortCounter) ? 0 : $tableSortCounter; ?>
<label for="<?= $tableId ?>-sort-<?= ++$tableSortCounter ?>">
    <input type="radio" name="<?= $tableId ?>-sort" id="<?= $tableId ?>-sort-<?= $tableSortCounter ?>">
    <i class="sort-asc fa fa-chevron-up"></i>
</label>
<label for="<?= $tableId ?>-sort-<?= ++$tableSortCounter ?>">
<input type="radio" name="<?= $tableId ?>-sort" id="<?= $tableId ?>-sort-<?= $tableSortCounter ?>">
    <i class="sort-desc fa fa-chevron-down"></i>
</label>