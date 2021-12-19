<?php $tableCheckboxCounter = !isset($tableCheckboxCounter) ? 0 : $tableCheckboxCounter; ?>
<label class="checkbox" for="<?= $tableId ?>-check-<?= $tableCheckboxCounter ?>">
    <input type="checkbox" id="<?= $tableId ?>-check-<?= $tableCheckboxCounter ?>" name="<?= $tableId ?>-check">
    <span class="checkmark"></span>
</label>