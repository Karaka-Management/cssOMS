<div class="row">
    <div class="col-xs-12 col-md-6">
        <section class="box wf-100">
            <header><h1>Custom</h1></header>
            <div class="inner">
                <form>
                    <table class="layout wf-100">
                        <tr>
                            <td colspan="2"><label>Input+Autocomplete+Dropdown+Badge+Remote</label></td>
                        <tr>
                            <td colspan="2">
                                <div class="advancedInput" id="input1">
                                    <div class="inputOuter">
                                        <div class="inputbackground">
                                            <input autocomplete="off" class="input" id="inputId" type="text" emptyAfterSelect="true" data-autocomplete="true" data-value="/name/0" data-src="http://127.0.0.1/en/api/admin/find/account?search={#inputId}">
                                            <div id="input1-dropdown" class="dropdown" data-active="true">
                                                <table id="a1" class="table darkred">
                                                    <thead>
                                                        <tr>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input1-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
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
                                    <div id="input1-tags" class="tags" data-limit="1" data-active="true">
                                        <template id="input1-tagTemplate">
                                            <span data-tpl-value="/id" data-value="" data-uuid="" class="tag red">
                                                <i class="fa fa-times" data-remove=""></i>
                                                <i data-tpl-text="/name/0"></i>,
                                                <i data-tpl-text="/email"></i>
                                            </span>
                                        </template>
                                    </div>
                                </div>
                        <tr>
                            <td colspan="2"><label>Input+Autocomplete+Dropdown+Badge+Local</label></td>
                        <tr>
                            <td colspan="2"><label>Input+Autocomplete+Dropdown+Table+Remote</label></td>
                        <tr>
                            <td colspan="2">
                                <div class="advancedInput" id="input2">
                                    <div class="inputOuter">
                                        <div class="inputbackground">
                                            <input autocomplete="off" class="input" id="inputId2" type="text" emptyAfterSelect="true" data-autocomplete="true" data-value="/name/0" data-src="http://127.0.0.1/en/api/admin/find/account?search={#inputId2}">
                                            <div id="input2-dropdown" class="dropdown" data-active="true">
                                                <table id="a1" class="table darkred">
                                                    <thead>
                                                        <tr>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input2-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
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
                                    <table class="table darkred">
                                            <thead>
                                                <tr>
                                                    <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                            <tbody id="input2-tags" class="tags" data-limit="0" data-active="true">
                                                <template id="input2-tagTemplate">
                                                    <tr data-tpl-value="/id" data-value="" data-uuid="">
                                                        <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                        <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                        <td data-tpl-text="/email"></td>
                                                    </tr>
                                                </template>
                                    </table>
                                </div>
                        <tr>
                            <td colspan="2"><label>Input+Autocomplete+Dropdown</label></td>
                        <tr>
                            <td colspan="2"><label>Multiple Input+Autocomplete+External Table</label></td>
                        <tr>
                            <td colspan="2">
                                <div class="advancedInput" id="input4">
                                    <div class="inputOuter">
                                        <div class="inputbackground">
                                            <input autocomplete="off" class="input" id="inputId" type="text" emptyAfterSelect="true" data-autocomplete="true" data-value="/name/0" data-src="http://127.0.0.1/en/api/admin/find/account?search={#inputId}">
                                        </div>
                                    </div>
                                </div>
                                <div id="input4-dropdown" class="dropdown" data-active="true">
                                    <table id="a1" class="table darkred">
                                        <thead>
                                            <tr>
                                                <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                        <tbody>
                                            <template id="input4-rowElement" class="rowTemplate">
                                                <tr tabindex="-1">
                                                    <td data-tpl-text="/id" data-tpl-value="/id" data-value="">s</td>
                                                    <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                    <td data-tpl-text="/email"></td>
                                                </tr>
                                            </template>
                                        </tbody>
                                    </table>
                                </div>
                                <table class="table darkred">
                                    <thead>
                                        <tr>
                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                    <tbody id="input4-tags" class="tags" data-limit="0" data-active="true">
                                        <template id="input4-tagTemplate">
                                            <tr data-tpl-value="/id" data-value="" data-uuid="">
                                                <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                <td data-tpl-text="/email"></td>
                                            </tr>
                                        </template>
                                </table>
                        <tr>
                            <td colspan="2"><label>Simple remote autocomplete</label></td>
                        <tr>
                            <td colspan="2">
                                <div class="advancedInput" id="input3">
                                    <div class="inputOuter">
                                        <div class="inputbackground">
                                            <input autocomplete="off" class="input" id="inputId" type="text" emptyAfterSelect="true" data-autocomplete="true" data-value="/name/0" data-src="http://127.0.0.1/en/api/admin/find/account?search={#inputId}">
                                            <div id="input3-dropdown" class="dropdown" data-active="true">
                                                <table id="a1" class="table darkred">
                                                    <thead>
                                                        <tr>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input3-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
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
                                    <div id="input3-tags" class="tags" data-limit="1" data-active="false"></div>
                                </div>
                        <tr>
                            <td colspan="2"><label>Fancy Dropdown</label></td>
                        <tr>
                            <td colspan="2"><label>Fancy Multiple Dropdown</label></td>
                        <tr>
                            <td colspan="2"><label>Fancy Calendar</label></td>
                        <tr>
                            <td colspan="2"><label>Fancy Time</label></td>
                        <tr>
                            <td colspan="2"><label>Fancy Range Start/End</label></td>
                        <tr>
                            <td colspan="2"><label>Fancy Range End</label></td>
                    </table>
                </form>
            </div>
        </section>
    </div>
</div>

<script type="module">
    import { Request } from "../../../jsOMS/Message/Request/Request.js";

    const loginRequest = new Request('http://127.0.0.1/en/api/login', 'POST', 'json');
    loginRequest.setData({user: 'admin', pass: 'orange'});
    loginRequest.send();
</script>