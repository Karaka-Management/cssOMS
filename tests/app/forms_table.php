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
                    data-update-content="tbody"
                    data-update-element="tr"
                    data-tag="form"
                    data-update-form="fSample"><?php $tableId = 'table1'; ?>
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
                    <tbody>
                    <template>
                        <tr>
                            <td><i class="fa fa-times btn remove"></i>
                                <i class="fa fa-cogs btn update"></i>
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
                                <span data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value=""><span>
                                <span data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value=""><span>
                                <span data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value=""><span>
                            </td>
                        </tr>
                    </template>
                    <tr draggable="true">
                        <td><i class="fa fa-times btn remove"></i>
                            <i class="fa fa-cogs btn update"></i>
                            <i class="fa fa-chevron-up order-up"></i>
                            <i class="fa fa-chevron-down order-down"></i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input1</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o1">Option1</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text1</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2020-10-13</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r1">R1</td>
                        <td data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value="CREATE">Create</td>
                    </tr>
                    <tr draggable="true">
                        <td><i class="fa fa-times btn remove"></i>
                            <i class="fa fa-cogs btn update"></i>
                            <i class="fa fa-chevron-up order-up"></i>
                            <i class="fa fa-chevron-down order-down"></i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="Hidden Input">Input2</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="Hidden Text">Text2</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="1999-02-03">2021-12-22</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">R2</td>
                        <td data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value="READ">Read</td>
                    </tr>
                    <tr draggable="true">
                        <td><i class="fa fa-times btn remove"></i>
                            <i class="fa fa-cogs btn update"></i>
                            <i class="fa fa-chevron-up order-up"></i>
                            <i class="fa fa-chevron-down order-down"></i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input3</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o3">Option3</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text3</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">1989-04-28</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r3">R3</td>
                        <td data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value="MODIFY">Modify</td>
                    </tr>
                    <tr draggable="true">
                        <td><i class="fa fa-times btn remove"></i>
                            <i class="fa fa-cogs btn update"></i>
                            <i class="fa fa-chevron-up order-up"></i>
                            <i class="fa fa-chevron-down order-down"></i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Input4</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="o2">Option2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Text4</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">2025-07-04</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="r2">R2</td>
                        <td data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value="CREATE,MODIFY">Create,Modify</td>
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
            <form id="fSample" action="api/test" method="put">
                <div class="portlet-body">
                    <div class="form-group">
                        <label for="iInput">Input</label>
                        <input id="iInput" name="input" type="text" data-tpl-text="/input" data-tpl-value="/input">
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
                        <textarea id="iText" name="text" type="text" data-tpl-text="/text" data-tpl-value="/text"></textarea>
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
                                    <input id="checkbox1" name="permissioncreate" type="checkbox" value="CREATE" data-tpl-text="/checkbox" data-tpl-value="/checkbox">
                                    <span class="checkmark"></span>
                                    Create
                                </label>

                                <label class="checkbox" for="checkbox2">
                                    <input id="checkbox2" name="permissionread" type="checkbox" value="READ" data-tpl-text="/checkbox" data-tpl-value="/checkbox">
                                    <span class="checkmark"></span>
                                    Read
                                </label>

                                <label class="checkbox" for="checkbox3">
                                    <input id="checkbox3" name="permissionupdate" type="checkbox" value="MODIFY" data-tpl-text="/checkbox" data-tpl-value="/checkbox">
                                    <span class="checkmark"></span>
                                    Update
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="portlet-foot">
                <input type="submit" value="Add">
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="portlet">
            <div class="portlet-head">
                Inline Eddit
                <?php include __DIR__ . '/helper/additional-functions.tpl.php'; ?>
                <?php include __DIR__ . '/helper/export-data.tpl.php'; ?>
            </div>
            <div class="slider">
                <table class="default" id="table2" data-ui-content="tbody" data-ui-element="tr" data-tag="form">
                    <?php $tableId = 'table2'; $tableCheckboxCounter = 0; $tableSortCounter = 0; ?>
                    <thead>
                    <tr>
                        <td>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td>Col1 Title
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        <td>Col2 Title
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        <td>Col3 Title
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        <td>Col4 Title
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        <td>Col5 Title
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                        <td>Col6 Title
                            <?php include __DIR__ . '/helper/sort.tpl.php'; ?>
                            <?php include __DIR__ . '/helper/filter.tpl.php'; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <template>
                        <tr>
                            <td><i class="fa fa-times btn remove"></i>
                                <i class="fa fa-cogs btn update"></i>
                            <td><label class="checkbox" for="itable2--">
                                <input type="checkbox" id="itable2--" name="itable2-select">
                                <span class="checkmark"></span>
                            <td data-tpl-text="/input" data-tpl-value="/input" data-value=""></td>
                            <td data-tpl-text="/select" data-tpl-value="/select" data-value=""></td>
                            <td data-tpl-text="/text" data-tpl-value="/text" data-value=""></td>
                            <td data-tpl-text="/date" data-tpl-value="/date" data-value=""></td>
                            <td data-tpl-text="/radio" data-tpl-value="/radio" data-value=""></td>
                            <td>
                                <span data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value=""><span>
                                <span data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value=""><span>
                                <span data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value=""><span>
                            </td>
                        </tr>
                    </template>
                    <template>
                        <tr>
                            <td><i class="fa fa-times btn remove"></i>
                                <i class="fa fa-cogs btn update"></i>
                            <td><label class="checkbox" for="itable2--">
                                <input type="checkbox" id="itable2--" name="itable2-select">
                                <span class="checkmark"></span>
                            </label>
                            <td><input data-form="fInside" data-tpl-text="/input" data-tpl-value="/input" data-value="" type="text"></td>
                            <td>
                                <select data-form="fInside" data-tpl-text="/select" data-tpl-value="/select" data-value="">
                                    <option value="o1">Option1</option>
                                    <option value="o2">Option2</option>
                                    <option value="o3">Option3</option>
                                </select>
                            </td>
                            <td>
                                <textarea data-form="fInside" data-tpl-text="/text" data-tpl-value="/text" data-value=""></textarea>
                            </td>
                            <td><input data-form="fInside" type="date" data-tpl-text="/date" data-tpl-value="/date" data-value=""></td>
                            <td>
                                <input data-form="fInside" type="radio" id="iRadio1" name="radio" value="r1"  data-tpl-text="/radio" data-tpl-value="/radio"><label for="iRadio1">Radio1</label>
                                <input data-form="fInside" type="radio" id="iRadio2" name="radio" value="r2"  data-tpl-text="/radio" data-tpl-value="/radio"><label for="iRadio2">Radio2</label>
                                <input data-form="fInside" type="radio" id="iRadio3" name="radio" value="r3"  data-tpl-text="/radio" data-tpl-value="/radio"><label for="iRadio3">Radio3</label>
                            </td>
                            <td>
                                <span class="checkbox">
                                    <input data-form="fInside" id="iPermissionCreate" name="permissioncreate" type="checkbox" value="CREATE" data-tpl-text="/checkbox" data-tpl-value="/checkbox">
                                    <label for="iPermissionCreate">Create</label>
                                </span>
                                <span class="checkbox">
                                    <input data-form="fInside" id="iPermissionRead" name="permissionread" type="checkbox" value="READ" data-tpl-text="/checkbox" data-tpl-value="/checkbox">
                                    <label for="iPermissionRead">Read</label>
                                </span>
                                <span class="checkbox">
                                    <input data-form="fInside" id="iPermissionUpdate" name="permissionupdate" type="checkbox" value="MODIFY" data-tpl-text="/checkbox" data-tpl-value="/checkbox">
                                    <label for="iPermissionUpdate">Update</label>
                                </span>
                                <form id="fInside" action="api/test" method="post"><input id="addRowInline" type="submit" value="Add"></form>
                            </td>
                        </tr>
                    </template>
                    <tr>
                        <td><i class="fa fa-times btn remove"></i>
                            <i class="fa fa-cogs btn update"></i>
                            <i class="fa fa-chevron-up order-up"></i>
                            <i class="fa fa-chevron-down order-down"></i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col2</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col1</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col4</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col3</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                        <td data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value="">Col6</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-times btn remove"></i>
                            <i class="fa fa-cogs btn update"></i>
                            <i class="fa fa-chevron-up order-up"></i>
                            <i class="fa fa-chevron-down order-down"></i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col4</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col1</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col2</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col3</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                        <td data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value="">Col6</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-times btn remove"></i>
                            <i class="fa fa-cogs btn update"></i>
                            <i class="fa fa-chevron-up order-up"></i>
                            <i class="fa fa-chevron-down order-down"></i>
                        <td><?php include __DIR__ . '/helper/checkbox.tpl.php'; ?>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col1</td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col2</td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col3</td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col4</td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                        <td data-tpl-text="/checkbox" data-tpl-value="/checkbox" data-value="">Col6</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import { Request } from '../../../jsOMS/Message/Request/Request.js';

    const loginRequest = new Request('http://127.0.0.1/en/api/login', 'POST', 'json');
    loginRequest.setData({user: 'admin', pass: 'orange'});
    loginRequest.send();
</script>