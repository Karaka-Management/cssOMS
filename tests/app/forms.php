<div class="row">
    <div class="col-xs-12 col-md-6">
        <section class="box wf-100">
            <header><h1>Default</h1></header>
            <div class="inner">
                <form>
                    <table class="layout wf-100">
                        <tr>
                            <td colspan="2"><label>Placeholder</label></td>
                        <tr>
                            <td colspan="2"><input type="text" placeholder="&#61447; User">
                        <tr>
                            <td colspan="2"><label>Input+Button+Required</label></td>
                        <tr>
                            <td colspan="2">
                                <div class="ipt-wrap">
                                    <div class="ipt-first"><input type="text" required></div>
                                    <div class="ipt-second"><input type="submit" value="Text"></div>
                                </div>
                        <tr>
                            <td colspan="2"><label>Password</label></td>
                        <tr>
                            <td colspan="2"><input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" placeholder="&#xf023; Pa55w0rd?">
                        <tr>
                            <td colspan="2"><label>Datalist</label></td>
                        <tr>
                            <td colspan="2"><input list="test" type="text">
                                <datalist id="test">
                                    <option>Chrome</option>
                                    <option>IE</option>
                                    <option>Opera</option>
                                    <option>Safari</option>
                                    <option>Firefox</option>
                                </datalist>
                            </td>
                        <tr>
                        <tr>
                            <td colspan="2"><label>Special</label></td>
                        <tr>
                            <td colspan="2"><span class="input"><button type="button"><i class="fa fa-pencil"></i></button><input type="text"></span></td>

                        <tr>
                            <td colspan="2"><label>Number</label></td>
                        <tr>
                            <td colspan="2"><input type="number" step="any" min="0"></td>
                        <tr>
                            <td><label>Label1</label></td>
                            <td><label>Pattern Validation</label>
                        <tr>
                            <td><input type="text"></td>
                            <td><input type="text" pattern="[a-zA-Z]" required>
                        <tr>
                            <td colspan="2"><label>Localtime</label></td>
                        <tr>
                            <td colspan="2"><input type="datetime-local">
                        <tr>
                            <td><label>Localtime</label></td>
                            <td><label>Localtime</label>
                        <tr>
                            <td><input type="datetime-local"></td>
                            <td><input type="datetime-local">
                        <tr>
                            <td><label>Checkbox</label></td>
                            <td><label>Radio</label></td>
                        <tr>
                            <td><span class="check"><input type="checkbox" checked>Check</span>
                            <td><span class="radio"><input type="radio" name="test">Radio</span>
                        <tr>
                            <td><span class="check"><input type="checkbox">Check</span>
                            <td><span class="radio"><input type="radio" name="test" checked>Radio</span>
                        <tr>
                            <td></td>
                            <td><span class="radio"><input type="radio" name="test">Radio</span>
                        <tr>
                            <td><label>Option</label></td>
                        <tr>
                            <td colspan="2"><select>
                                <option>Option1</option>
                                <option>Option2</option>
                                <option>Option3</option>
                            </select>
                        <tr>
                            <td><label multiple>Multiselect</label></td>
                        <tr>
                            <td colspan="2"><select multiple>
                                <option>Option1</option>
                                <option>Option2</option>
                                <option>Option3</option>
                            </select>
                        <tr>
                            <td><label>Option Default</label></td>
                            <td><label>Select Selected</label>
                        <tr>
                            <td>
                                <select>
                                    <option disabled selected>Select something</option>
                                    <option>Option1</option>
                                    <option>Option2</option>
                                    <option>Option3</option>
                                </select>
                            </td>
                            <td>
                                <select>
                                    <option>Option1</option>
                                    <option selected>Option2</option>
                                    <option>Option3</option>
                                </select>
                        <tr>
                            <td colspan="2"><label>Textarea</label></td>
                        <tr>
                            <td colspan="2"><textarea></textarea>
                        <tr>
                            <td colspan="2"><input type="submit" value="Submit"> <input type="submit" value="Cancel"> <button type="submit">SButton</button>
                    </table>
                </form>
            </div>
        </section>
    </div>

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
                                                <table id="a1" class="table red">
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
                                                <table id="a1" class="table red">
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
                                    <table class="table red">
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
                                    <table id="a1" class="table red">
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
                                <table class="table red">
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
                                                <table id="a1" class="table red">
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

<script>
    const loginRequest = new jsOMS.Message.Request.Request('http://127.0.0.1/en/api/login', 'POST', 'json');
    loginRequest.setData({user: 'admin', pass: 'orange'});
    loginRequest.send();
</script>