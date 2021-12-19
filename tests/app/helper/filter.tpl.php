<!-- @todo: define a id and a counter before, which is then used in here. This way we don't need a view which is too heavy. -->
<!-- The variable names must be semi unique so that they are not used in normal templates e.g.: $tableFilterId and $tableFilterCounter. The problem with that is that it is very html heavy since every include imports all of the html below! -->
<!-- Alternatively: somehow work with templates (create it once and then let JS create a filter based on that template. The problem here is that different columns might need different filtering option (e.g. datetime, numbers, options, names, ...) -->
<span class="clickPopup">
    <input id="filterDropdown" name="filterDropdown" type="checkbox">
    <label for="filterDropdown"><i class="filter fa fa-filter btn"></i></label>
    <div class="popup">
        <input type="text" name="filterText">

        <select name="valueList">
            <option>greater
            <option>greater equals
            <option>smaller equals
            <option>smaller
        </select>

        <label class="button cancel" for="filterDropdown">Cancel</label>
        <label class="button cancel" for="filterDropdown">Filter</label>
        <label class="button cancel" for="filterDropdown">Reset</label>
    </div>
</span>

<!--
>10 & <12
>10 | <12

>10 and <12
>10 or <12

=11

11 // finds also 111

also handle date, numerics, text, tags,
-->