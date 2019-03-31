<div class="row">
    <div class="col-xs-12">
        <div class="box wf-100">
            <table class="table green" id="table1" data-table-form="fSample">
                <caption>Form Add</caption>
                <thead>
                <tr>
                    <td>
                    <td>
                    <td>Col1 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col2 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col3 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col4 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col5 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col6 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                </tr>
                </thead>
                <tbody>
                <template>
                    <tr>
                        <td><form id="fRemoveX" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                        <td><i class="fa fa-cogs btn update submit"></i>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value=""></td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value=""></td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value=""></td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value=""></td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value=""></td>
                        <td>
                            <span data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value=""><span>
                            <span data-tpl-text="/checkbox/r" data-tpl-value="/checkbox/r" data-value=""><span>
                            <span data-tpl-text="/checkbox/u" data-tpl-value="/checkbox/u" data-value=""><span>
                        </td>
                    </tr>
                </template>
                <tr>
                    <td><form id="fRemoveX1" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                    <td><i class="fa fa-cogs btn update submit"></i>
                    <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col2</td>
                    <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col1</td>
                    <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col4</td>
                    <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col3</td>
                    <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                    <td data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value="">Col6</td>
                </tr>
                <tr>
                    <td><form id="fRemoveX2" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                    <td><i class="fa fa-cogs btn update submit"></i>
                    <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col4</td>
                    <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col1</td>
                    <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col2</td>
                    <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col3</td>
                    <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                    <td data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value="">Col6</td>
                </tr>
                <tr>
                    <td><form id="fRemoveX3" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                    <td><i class="fa fa-cogs btn update submit"></i>
                    <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col1</td>
                    <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col2</td>
                    <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col3</td>
                    <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col4</td>
                    <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                    <td data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value="">Col6</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4">
                        <label>Results: 4</label>
                        <select>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                            <option>500</option>
                        </select>
                        <ul class="pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">20</a></li>
                        </ul>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <section class="box wf-100">
            <div class="inner">
                <form id="fSample" action="api/test" method="put">
                    <table class="layout wf-100">
                        <tbody>
                        <tr><td><label for="iInput">Input</label>
                        <tr><td><input id="iInput" name="input" type="text" data-tpl-text="/input" data-tpl-value="/input">
                        <tr><td><label for="iSelect">Select</label>
                        <tr><td><select id="iSelect" name="select" type="text" data-tpl-text="/select" data-tpl-value="/select">
                                <option value="o1">Options1</option>
                                <option value="o2">Options2</option>
                                <option value="o3">Options3</option>
                            </select>
                        <tr><td><label for="iText">Text</label>
                        <tr><td><textarea id="iText" name="text" type="text" data-tpl-text="/text" data-tpl-value="/text"></textarea>
                        <tr><td><label for="iDate">Date</label>
                        <tr><td><input id="iDate" name="date" type="date" data-tpl-text="/date" data-tpl-value="/date">
                        <tr><td><label for="iRadio">Radio</label>
                        <tr><td>
                            <input type="radio" id="iRadio1" name="radio" value="r1"  data-tpl-text="/radio" data-tpl-value="/radio"><label for="iRadio1">Radio1</label>
                            <input type="radio" id="iRadio2" name="radio" value="r2"  data-tpl-text="/radio" data-tpl-value="/radio"><label for="iRadio2">Radio2</label>
                            <input type="radio" id="iRadio3" name="radio" value="r3"  data-tpl-text="/radio" data-tpl-value="/radio"><label for="iRadio3">Radio3</label>
                        <tr><td><label>Checkbox</label>
                        <tr><td>
                            <span class="checkbox">
                                <input id="iPermissionCreate" name="permissioncreate" type="checkbox" value="CREATE" data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c">
                                <label for="iPermissionCreate">Create</label>
                            </span>
                            <span class="checkbox">
                                <input id="iPermissionRead" name="permissionread" type="checkbox" value="READ" data-tpl-text="/checkbox/r" data-tpl-value="/checkbox/r">
                                <label for="iPermissionRead">Read</label>
                            </span>
                            <span class="checkbox">
                                <input id="iPermissionUpdate" name="permissionupdate" type="checkbox" value="MODIFY" data-tpl-text="/checkbox/u" data-tpl-value="/checkbox/u">
                                <label for="iPermissionUpdate">Update</label>
                            </span>
                        <tr><td>
                            <input type="submit" value="Add">
                    </table>
                </form>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="box wf-100">
            <table class="table green" id="table2" data-table-add="addButton" data-table-form="fInside">
                <caption>Inline Add</caption>
                <thead>
                <tr>
                    <td>
                    <td>
                    <td>Col1 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col2 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col3 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col4 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col5 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                    <td>Col6 Title<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i></td>
                </tr>
                </thead>
                <tbody>
                <template>
                    <tr>
                        <td><form id="fRemoveY" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                        <td><i class="fa fa-cogs btn update submit"></i>
                        <td data-tpl-text="/input" data-tpl-value="/input" data-value=""></td>
                        <td data-tpl-text="/select" data-tpl-value="/select" data-value=""></td>
                        <td data-tpl-text="/text" data-tpl-value="/text" data-value=""></td>
                        <td data-tpl-text="/date" data-tpl-value="/date" data-value=""></td>
                        <td data-tpl-text="/radio" data-tpl-value="/radio" data-value=""></td>
                        <td>
                            <span data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value=""><span>
                            <span data-tpl-text="/checkbox/r" data-tpl-value="/checkbox/r" data-value=""><span>
                            <span data-tpl-text="/checkbox/u" data-tpl-value="/checkbox/u" data-value=""><span>
                        </td>
                    </tr>
                </template>
                <template>
                    <tr>
                        <td><form id="fRemoveYY" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                        <td><i class="fa fa-cogs btn update submit"></i>
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
                                <input data-form="fInside" id="iPermissionCreate" name="permissioncreate" type="checkbox" value="CREATE" data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c">
                                <label for="iPermissionCreate">Create</label>
                            </span>
                            <span class="checkbox">
                                <input data-form="fInside" id="iPermissionRead" name="permissionread" type="checkbox" value="READ" data-tpl-text="/checkbox/r" data-tpl-value="/checkbox/r">
                                <label for="iPermissionRead">Read</label>
                            </span>
                            <span class="checkbox">
                                <input data-form="fInside" id="iPermissionUpdate" name="permissionupdate" type="checkbox" value="MODIFY" data-tpl-text="/checkbox/u" data-tpl-value="/checkbox/u">
                                <label for="iPermissionUpdate">Update</label>
                            </span>
                            <form id="fInside" action="api/test" method="post"><input id="addRowInline" type="submit" value="Add"></form>
                        </td>
                    </tr>
                </template>
                <tr>
                    <td><form id="fRemoveY1" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                    <td><i class="fa fa-cogs btn update submit"></i>
                    <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col2</td>
                    <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col1</td>
                    <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col4</td>
                    <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col3</td>
                    <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                    <td data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value="">Col6</td>
                </tr>
                <tr>
                    <td><form id="fRemoveY2" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                    <td><i class="fa fa-cogs btn update submit"></i>
                    <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col4</td>
                    <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col1</td>
                    <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col2</td>
                    <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col3</td>
                    <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                    <td data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value="">Col6</td>
                </tr>
                <tr>
                    <td><form id="fRemoveY3" method="DELETE"><i class="fa fa-times btn remove submit"></i></form>
                    <td><i class="fa fa-cogs btn update submit"></i>
                    <td data-tpl-text="/input" data-tpl-value="/input" data-value="">Col1</td>
                    <td data-tpl-text="/select" data-tpl-value="/select" data-value="">Col2</td>
                    <td data-tpl-text="/text" data-tpl-value="/text" data-value="">Col3</td>
                    <td data-tpl-text="/date" data-tpl-value="/date" data-value="">Col4</td>
                    <td data-tpl-text="/radio" data-tpl-value="/radio" data-value="">Col5</td>
                    <td data-tpl-text="/checkbox/c" data-tpl-value="/checkbox/c" data-value="">Col6</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4">
                        <label>Results: 4</label>
                        <select>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                            <option>500</option>
                        </select>
                        <ul class="pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>...</li>
                            <li><a href="#">20</a></li>
                        </ul>
                        <button id="addButton">Add</button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>