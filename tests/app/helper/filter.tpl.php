<?php $tableFilterCounter = !isset($tableFilterCounter) ? 0 : $tableFilterCounter; ?>
<span class="clickPopup">
    <input id="<?= $tableId; ?>-filterDropdown-<?= ++$tableFilterCounter; ?>" name="<?= $tableId; ?>-filterDropdown-<?= $tableFilterCounter; ?>" type="checkbox">
    <label for="<?= $tableId; ?>-filterDropdown-<?= $tableFilterCounter; ?>"><i class="filter fa fa-filter btn"></i></label>
    <div class="popup">
        <ul>
            <li>Filter
            <?php if ($filterType === 'text') : ?>
            <li>
                <input type="text" name="<?= $tableId; ?>-filterDropdown-text">
            <?php elseif ($filterType === 'select') : ?>
            <li>
                <select multiple>
                    <?php foreach ($filterOptions as $value => $option) : ?>
                        <option value="<?= $value; ?>"><?= $option; ?>
                    <?php endforeach; ?>
                </select>
            <?php elseif ($filterType === 'number' || $filterType === 'date'): ?>
            <li>
                <select name="valueList">
                    <option>=
                    <option>>
                    <option>>=
                    <option><=
                    <option><
                </select>
                <?php if ($filterType === 'number') : ?>
                    <input type="text" name="<?= $tableId; ?>-filterDropdown-number1">
                <?php else : ?>
                    <input type="date" name="<?= $tableId; ?>-filterDropdown-date1">
                <?php endif; ?>
            <li>AND
            <li>
                <select name="valueList">
                    <option>=
                    <option>>
                    <option>>=
                    <option><=
                    <option><
                </select>
                <?php if ($filterType === 'number') : ?>
                    <input type="text" name="<?= $tableId; ?>-filterDropdown-number2">
                <?php else : ?>
                    <input type="date" name="<?= $tableId; ?>-filterDropdown-date2">
                <?php endif; ?>
            <?php endif; ?>
            <li><label class="button close" for="<?= $tableId; ?>-filterDropdown-<?= $tableFilterCounter; ?>">Cancel</label>
            <li><label class="button save" for="<?= $tableId; ?>-filterDropdown-<?= $tableFilterCounter; ?>">Filter</label>
            <li><label class="button cancel" for="<?= $tableId; ?>-filterDropdown-<?= $tableFilterCounter; ?>">Reset</label>
        </ul>
    </div>
</span>