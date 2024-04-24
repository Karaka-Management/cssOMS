<div class="row">
    <div class="col-xs-12">
        <div class="portlet">
            <div class="portlet-head">
                External Edit
                <?php include __DIR__ . '/helper/additional-functions.tpl.php'; ?>
                <?php include __DIR__ . '/helper/export-data.tpl.php'; ?>
            </div>
            <div class="slider">
                <table class="default sticky" id="table1"
                    data-tag="form"
                    data-ui-element="tr"
                    data-add-tpl=".oms-add-tpl-1"
                    data-update-form="fSample"><?php $tableId = 'table1'; ?>
                    <thead>
                    <tr>
                        <td>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td>Input
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php $filterType = 'text'; include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Select
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php
                                $filterType = 'select';
                                $filterOptions = [
                                    'o1' => 'Option1',
                                    'o2' => 'Option2',
                                    'o3' => 'Option3',
                                ];

                                include __DIR__ . '/helper/filter.tpl.php';
                            ?>
                        </td>
                        <td>Textarea
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php $filterType = 'text'; include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Date
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php $filterType = 'date'; include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Radio
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php
                                $filterType = 'select';
                                $filterOptions = [
                                    'r1' => 'Radio1',
                                    'r2' => 'Radio2',
                                    'r3' => 'Radio3',
                                ];

                                include __DIR__ . '/helper/filter.tpl.php';
                            ?>
                        </td>
                        <td>Checkbox
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php
                                $filterType = 'select';
                                $filterOptions = [
                                    'CREATE' => 'Create',
                                    'READ' => 'Read',
                                    'MODIFY' => 'Modify',
                                ];

                                include __DIR__ . '/helper/filter.tpl.php';
                            ?>
                        </td>
                    </tr>
                    </thead>
                    <tbody class="oms-dragcontainer oms-ordercontainer">
                    <template class="oms-add-tpl-1">
                        <tr data-id="" draggable="true">
                            <td>
                                <i class="g-icon btn update-form">settings</i>
                                <i class="g-icon order-up">expand_less</i>
                                <i class="g-icon order-down">expand_more</i>
                                <i class="g-icon btn remove-form">close</i>
                            <td><label class="checkbox" for="itable1--">
                                    <input type="checkbox" id="itable1--" name="itable1-select">
                                    <span class="checkmark"></span>
                                </label>
                            <td data-tpl-text="/input" data-tpl-value="/input" data-value=""></td>
                            <td data-tpl-text="/select" data-tpl-value="/select" data-value=""></td>
                            <td data-tpl-text="/text" data-tpl-value="/text" data-value=""></td>
                            <td data-tpl-text="/date" data-tpl-value="/date" data-value=""></td>
                            <td data-tpl-text="/radio" data-tpl-value="/radio" data-value=""></td>
                            <td>
                                <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value=""></span>
                                <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                                <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value=""></span>
                            </td>
                        </tr>
                    </template>
                    <tr data-id="1" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input1</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o1">Option1</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text1</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2020-10-13</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r1">Radio1</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value=""></span>
                        </td>
                    </tr>
                    <tr data-id="2" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="Hidden Input">Input2</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="Hidden Text">Text2</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="1999-02-03">2021-12-22</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value="READ">Read</span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value=""></span>
                        </td>
                    </tr>
                    <tr data-id="3" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input3</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o3">Option3</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text3</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">1989-04-28</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r3">Radio3</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value=""></span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    <tr data-id="4" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input4</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text4</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2025-07-04</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    <tr data-id="5" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input5</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text5</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2025-07-05</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    <tr data-id="6" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input6</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text6</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2025-07-06</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    <tr data-id="7" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input7</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text7</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2025-07-07</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    <tr data-id="8" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input8</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text8</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2025-07-08</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <section class="portlet">
            <form id="fSample" action="api/test" method="put"
                data-ui-container="#table1 tbody"
                data-add-form="fSample"
                data-add-tpl="#table1 tbody .oms-add-tpl-1">
                <div class="portlet-body">
                    <div class="form-group">
                        <label for="iInput">Input</label>
                        <input id="iInput" name="input" type="text" data-tpl-text="/input" data-tpl-value="/input" required>
                    </div>

                    <div class="form-group">
                        <label for="iSelect">Select</label>
                        <select id="iSelect" name="select" type="text" data-tpl-text="/select" data-tpl-value="/select">
                            <option value="o1">Options1</option>
                            <option value="o2">Options2</option>
                            <option value="o3">Options3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="iText">Text</label>
                        <textarea id="iText" name="text" type="text" data-tpl-text="/text" data-tpl-value="/text" data-value=""></textarea>
                    </div>

                    <div class="form-group">
                        <label for="iDate">Date</label>
                        <input id="iDate" name="date" type="date" data-tpl-text="/date" data-tpl-value="/date">
                    </div>

                    <div class="form-group">
                        <div class="input-control">
                            <label for="iRadio">Radio</label>
                            <div>
                                <label class="radio" for="iRadio1">
                                    <input type="radio" id="iRadio1" name="radio" value="r1"  data-tpl-text="/radio" data-tpl-value="/radio">
                                    <span class="checkmark"></span>
                                    Radio1
                                </label>

                                <label class="radio" for="iRadio2">
                                    <input type="radio" id="iRadio2" name="radio" value="r2"  data-tpl-text="/radio" data-tpl-value="/radio">
                                    <span class="checkmark"></span>
                                    Radio2
                                </label>

                                <label class="radio" for="iRadio3">
                                    <input type="radio" id="iRadio3" name="radio" value="r3"  data-tpl-text="/radio" data-tpl-value="/radio">
                                    <span class="checkmark"></span>
                                    Radio3
                                </label>
                            </div>
                        </div>

                        <div class="input-control">
                            <label for="iCheckbox">Checkbox</label>
                            <div>
                                <label class="checkbox" for="checkbox1">
                                    <input id="checkbox1" name="permissioncreate" type="checkbox" value="CREATE" data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create">
                                    <span class="checkmark"></span>
                                    Create
                                </label>

                                <label class="checkbox" for="checkbox2">
                                    <input id="checkbox2" name="permissionread" type="checkbox" value="READ" data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read">
                                    <span class="checkmark"></span>
                                    Read
                                </label>

                                <label class="checkbox" for="checkbox3">
                                    <input id="checkbox3" name="permissionupdate" type="checkbox" value="MODIFY" data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update">
                                    <span class="checkmark"></span>
                                    Update
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-foot">
                    <input type="submit" class="add-form" value="Add">
                    <input type="submit" class="save-form hidden button save" value="Update">
                    <input type="submit" class="cancel-form hidden button close" value="Cancel">
                </div>
            </form>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="portlet">
            <div class="portlet-head">
                Inline Edit
                <?php include __DIR__ . '/helper/additional-functions.tpl.php'; ?>
                <?php include __DIR__ . '/helper/export-data.tpl.php'; ?>
            </div>
            <div class="slider">
                <table class="default sticky" id="table2"
                    data-tag="form"
                    data-ui-container="tbody"
                    data-ui-element="tr"
                    data-add-tpl=".oms-add-tpl-2"
                    data-update-tpl="#table2 tbody .oms-update-tpl">
                    <?php $tableId = 'table2'; $tableCheckboxCounter = 0; $tableSortCounter = 0; ?>
                    <thead>
                    <tr>
                        <td>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td>Input
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Select
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Textarea
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Date
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Radio
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                        <td>Checkbox
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        </td>
                    </tr>
                    </thead>
                    <tbody class="oms-dragcontainer oms-ordercontainer">
                    <template class="oms-update-tpl">
                        <tr data-id="" draggable="true">
                            <td>
                                <i class="g-icon btn save-form">check</i>
                                <i class="g-icon order-up">expand_less</i>
                                <i class="g-icon order-down">expand_more</i>
                                <i class="g-icon btn cancel-form">close</i>
                            <td><label class="checkbox" for="itable1--">
                                    <input type="checkbox" id="itable1--" name="itable1-select">
                                    <span class="checkmark"></span>
                                </label>
                            <td>
                                <input id="iInput" name="input" type="text" data-tpl-text="/input" data-tpl-value="/input" required>
                            </td>
                            <td>
                                <select id="iSelect" name="select" type="text" data-tpl-text="/select" data-tpl-value="/select">
                                    <option value="o1">Options1</option>
                                    <option value="o2">Options2</option>
                                    <option value="o3">Options3</option>
                                </select>
                            </td>
                            <td>
                                <textarea id="iText" name="text" type="text" data-tpl-text="/text" data-tpl-value="/text"></textarea>
                            </td>
                            <td>
                                <input id="iDate" name="date" type="date" data-tpl-text="/date" data-tpl-value="/date">
                            </td>
                            <td>
                                <label class="radio" for="iRadio1-2">
                                    <input type="radio" id="iRadio1-2" name="radio-2" value="r1"  data-tpl-text="/radio" data-tpl-value="/radio">
                                    <span class="checkmark"></span>
                                    Radio1
                                </label>

                                <label class="radio" for="iRadio2-2">
                                    <input type="radio" id="iRadio2-2" name="radio-2" value="r2"  data-tpl-text="/radio" data-tpl-value="/radio">
                                    <span class="checkmark"></span>
                                    Radio2
                                </label>

                                <label class="radio" for="iRadio3-2">
                                    <input type="radio" id="iRadio3-2" name="radio-2" value="r3"  data-tpl-text="/radio" data-tpl-value="/radio">
                                    <span class="checkmark"></span>
                                    Radio3
                                </label>
                            </td>
                            <td>
                                <label class="checkbox" for="checkbox1-2">
                                    <input id="checkbox1-2" name="permissioncreate-2" type="checkbox" value="CREATE" data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create">
                                    <span class="checkmark"></span>
                                    Create
                                </label>

                                <label class="checkbox" for="checkbox2-2">
                                    <input id="checkbox2-2" name="permissionread-2" type="checkbox" value="READ" data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read">
                                    <span class="checkmark"></span>
                                    Read
                                </label>

                                <label class="checkbox" for="checkbox3-2">
                                    <input id="checkbox3-2" name="permissionupdate-2" type="checkbox" value="MODIFY" data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update">
                                    <span class="checkmark"></span>
                                    Update
                                </label>
                            </td>
                        </tr>
                    </template>
                    <template class="oms-add-tpl-2">
                        <tr data-id="" draggable="true">
                            <td>
                                <i class="g-icon btn update-form">settings</i>
                                <i class="g-icon order-up">expand_less</i>
                                <i class="g-icon order-down">expand_more</i>
                                <i class="g-icon btn remove-form">close</i>
                            <td><label class="checkbox" for="itable1--">
                                    <input type="checkbox" id="itable1--" name="itable1-select">
                                    <span class="checkmark"></span>
                                </label>
                            <td data-tpl-text="/input" data-tpl-value="/input" data-value=""></td>
                            <td data-tpl-text="/select" data-tpl-value="/select" data-value=""></td>
                            <td data-tpl-text="/text" data-tpl-value="/text" data-value=""></td>
                            <td data-tpl-text="/date" data-tpl-value="/date" data-value=""></td>
                            <td data-tpl-text="/radio" data-tpl-value="/radio" data-value=""></td>
                            <td>
                                <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value=""></span>
                                <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value=""></span>
                                <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value=""></span>
                            </td>
                        </tr>
                    </template>
                    <tr data-id="1" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input">Input1</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o1">Option1</td>
                        <td data-tpl-text="/text" data-tpl-value="/text">Text1</td>
                        <td data-tpl-text="/date" data-tpl-value="/date">2020-10-13</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r1">Radio1</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read"></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update"></span>
                        </td>
                    </tr>
                    <tr data-id="2" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="Hidden Input">Input2</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="Hidden Text">Text2</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="1999-02-03">2021-12-22</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read" data-value="READ">Read</span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update"></span>
                        </td>
                    </tr>
                    <tr data-id="3" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input">Input3</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o3">Option3</td>
                        <td data-tpl-text="/text" data-tpl-value="/text">Text3</td>
                        <td data-tpl-text="/date" data-tpl-value="/date">1989-04-28</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r3">Radio3</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create"></span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read"></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    <tr data-id="4" draggable="true">
                        <td>
                            <i class="g-icon btn update-form">settings</i>
                            <i class="g-icon order-up">expand_less</i>
                            <i class="g-icon order-down">expand_more</i>
                            <i class="g-icon btn remove-form">close</i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input">Input4</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text">Text4</td>
                        <td data-tpl-text="/date" data-tpl-value="/date">2025-07-04</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">Radio2</td>
                        <td>
                            <span data-tpl-text="/checkbox/create" data-tpl-value="/checkbox/create" data-value="CREATE">Create</span>
                            <span data-tpl-text="/checkbox/read" data-tpl-value="/checkbox/read"></span>
                            <span data-tpl-text="/checkbox/update" data-tpl-value="/checkbox/update" data-value="MODIFY">Modify</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <input type="submit" class="add-form" value="Add" form="table2">
</div>

<script type="module">
    import { Request } from '../../../jsOMS/Message/Request/Request.js';

    const loginRequest = new Request('/en/api/login', 'POST', 'json');
    loginRequest.setData({user: 'admin', pass: 'orange'});
    loginRequest.send();
</script>