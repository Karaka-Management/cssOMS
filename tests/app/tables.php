<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="portlet">
            <div class="portlet-head">
                Table Title
                <?php include __DIR__ . '/helper/additional-functions.tpl.php'; ?>
                <?php include __DIR__ . '/helper/export-data.tpl.php'; ?>
            </div>
            <div class="slider">
                <table class="default" id="table1">
                    <thead>
                    <tr>
                        <td><i class="filter g-icon" data-filter="">filter_alt</i>Col1 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                        <td><i class="filter g-icon">filter_alt</i>Col2 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                        <td><i class="filter g-icon">filter_alt</i>Col3 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                        <td><i class="filter g-icon">filter_alt</i>Col4 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Col2</td>
                        <td>Col1</td>
                        <td>Col4</td>
                        <td>Col3</td>
                    </tr>
                    <tr>
                        <td>Col4</td>
                        <td>Col1</td>
                        <td>Col2</td>
                        <td>Col3</td>
                    </tr>
                    <tr>
                        <td>Col1</td>
                        <td>Col2</td>
                        <td>Col3</td>
                        <td>Col4</td>
                    </tr>
                    <tr>
                        <td>Col2</td>
                        <td>Col1</td>
                        <td>Col3</td>
                        <td>Col4</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="portlet-foot">
                <a class="button" href="#">Previous</a>
                <a class="button" href="#">Next</a>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="portlet">
            <div class="portlet-head">
                Table Title
                <?php include __DIR__ . '/helper/additional-functions.tpl.php'; ?>
                <?php include __DIR__ . '/helper/export-data.tpl.php'; ?>
            </div>
            <div class="slider">
                <table class="default" id="table2">
                    <thead>
                    <tr>
                        <td>Col1 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                        <td>Col2 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                        <td>Col3 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                        <td>Col4 Title<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Col3</td>
                        <td>Col4</td>
                        <td>Col2</td>
                        <td>Col1</td>
                    </tr>
                    <tr>
                        <td>Col1</td>
                        <td>Col2</td>
                        <td>Col4</td>
                        <td>Col3</td>
                    </tr>
                    <tr>
                        <td>Col1</td>
                        <td>Col2</td>
                        <td>Col3</td>
                        <td>Col4</td>
                    </tr>
                    <tr>
                        <td>Col4</td>
                        <td>Col2</td>
                        <td>Col1</td>
                        <td>Col3</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="portlet">
            <div class="portlet-head">
                Table Title
                <?php include __DIR__ . '/helper/additional-functions.tpl.php'; ?>
                <?php include __DIR__ . '/helper/export-data.tpl.php'; ?>
            </div>
            <div class="slider">
                <table id="tRemovable" class="default" data-ui-element="tr" data-tag="form">
                    <thead>
                    <tr>
                        <td></td>
                        <td>Col1 Title</td>
                        <td>Col2 Title</td>
                        <td>Col3 Title</td>
                        <td>Col4 Title</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><i class="g-icon btn remove">close</i>
                        <td>Col1</td>
                        <td>Col2</td>
                        <td>Col3</td>
                        <td>Col4</td>
                    </tr>
                    <tr>
                        <td><i class="g-icon btn remove">close</i>
                        <td>Col2</td>
                        <td>Col2</td>
                        <td>Col3</td>
                        <td>Col4</td>
                    </tr>
                    <tr>
                        <td><i class="g-icon btn remove">close</i>
                        <td>Col3</td>
                        <td>Col2</td>
                        <td>Col3</td>
                        <td>Col4</td>
                    </tr>
                    <tr>
                        <td><i class="g-icon btn remove">close</i>
                        <td>Col4</td>
                        <td>Col2</td>
                        <td>Col3</td>
                        <td>Col4</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            <select>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                                <option>500</option>
                            </select>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="portlet">
            <div class="portlet-head">
                Remote Data
                <?php include __DIR__ . '/helper/additional-functions.tpl.php'; ?>
                <?php include __DIR__ . '/helper/export-data.tpl.php'; ?>
            </div>
            <div class="slider">
                <table class="default" id="table3" data-src="http://127.0.0.1/en/api/admin/find/account?search=do" data-ui-element="tr">
                    <thead>
                        <tr>
                            <td>
                            <td data-name=""><i class="filter g-icon">filter_alt</i>ID<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                            <td data-name=""><i class="filter g-icon">filter_alt</i>Name<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                            <td data-name=""><i class="filter g-icon">filter_alt</i>Email<i class="sort-asc g-icon">expand_less</i><i class="sort-desc g-icon">expand_more</i></td>
                    <tbody>
                        <template id="input2-rowElement" class="rowTemplate">
                            <tr tabindex="-1">
                                <td><i class="g-icon btn remove">close</i>
                                <td data-tpl-text="/id" data-tpl-value="/id" data-value="">s</td>
                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                <td data-tpl-text="/email"></td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<template id="table-filter-tpl">
    <section id="table-filter" class="box">
        <div class="inner">
            <form>
                <table class="layout wf-100">
                    <tr><td colspan="2"><label>Column Name</label>
                    <tr><td>
                        <select>
                            <option>=
                            <option>in
                            <option>>
                            <option>>=
                            <option><
                            <option><=
                            <option>*
                        </select>
                        <td><input type="text">
                    <tr><td colspan="2"><select>
                                <option>OR
                                <option>AND
                            </select>
                    <tr><td>
                        <select>
                            <option>=
                            <option>in
                            <option>>
                            <option>>=
                            <option><
                            <option><=
                            <option>*
                        </select>
                        <td><input type="text">
                    <tr><td colspan="2"><button type="submit">Filter</button><button type="reset">Cancel</button>
                </table>
            </form>
        </div>
    </section>
</template>

<script type="module">
    import { Request } from '../../../jsOMS/Message/Request/Request.js';
    import { Table } from '../../../jsOMS/UI/Component/Table.js';

    const loginRequest = new Request('http://127.0.0.1/en/api/login', 'POST', 'json');
    loginRequest.setData({user: 'admin', pass: 'orange'});
    loginRequest.send();

    Table.getRemoteData(document.getElementById('table3'));
</script>