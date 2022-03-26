<div class="row">
    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Input+Autocomplete+Dropdown+Remote</div>
            <div class="portlet-body">
                <form>
                </form>
            </div>
        </section>
    </div>

    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Input+Autocomplete+Dropdown+Local</div>
            <div class="portlet-body">
                <form>

                </form>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Input+Autocomplete+Dropdown+Badge+Remote</div>
            <div class="portlet-body">
                <form>
                    <div class="form-group">
                        <label>Default</label>
                        <div>
                            <div class="ipt-wrap wf-100">
                                <div class="ipt-first">
                                    <span class="input">
                                        <button type="button" id="input5-book-button" data-action='[
                                            {
                                                "key": 1, "listener": "click", "action": [
                                                    {"key": 1, "type": "dom.popup", "selector": "#acc-grp-tpl", "aniIn": "fadeIn", "id": "input5"},
                                                    {"key": 2, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 3, "type": "dom.table.append", "id": "acc-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1},
                                                    {"key": 4, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 5, "type": "dom.table.append", "id": "grp-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1}
                                                ]
                                            }
                                        ]' formaction=""><i class="fa fa-book"></i></button>
                                        <div class="advancedInput wf-100" id="input5">
                                            <input autocomplete="off" spellcheck="false" class="input" type="text" id="input5"
                                                data-emptyAfter="true"
                                                data-autocomplete="off"
                                                data-src="http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10">
                                                <!-- Normally you put a search string here e.g. api/admin/find/accgrp?search={!#input5} -->
                                            <div id="input5-popup" class="popup" data-active="true">
                                                <table class="default">
                                                    <thead>
                                                        <tr>
                                                            <td>Type<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input5-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
                                                                <td data-tpl-text="/type_name" data-tpl-value="/type_prefix" data-value="">
                                                                <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                                <td data-tpl-text="/email" data-tpl-value="/email" data-value=""></td>
                                                            </tr>
                                                        </template>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="ipt-second"><button>Select</button></div>
                            </div>
                            <div class="box" id="input5-tags" data-limit="0" data-active="true">
                                <template id="input5-tagTemplate">
                                    <span class="tag red" data-tpl-value="/id" data-value="" data-uuid="" data-name="input5-tagname">
                                        <i class="fa fa-times"></i>
                                        <span style="display: none;" data-name="type_prefix" data-tpl-value="/type_prefix" data-value=""></span>
                                        <span data-tpl-text="/id" data-name="id" data-tpl-value="/id" data-value=""></span>
                                        <span data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></span>
                                    </span>
                                </template>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>With starting values</label>
                        <div>
                            <div class="ipt-wrap wf-100">
                                <div class="ipt-first">
                                    <span class="input">
                                        <button type="button" id="input6-book-button" data-action='[
                                            {
                                                "key": 1, "listener": "click", "action": [
                                                    {"key": 1, "type": "dom.popup", "selector": "#acc-grp-tpl", "aniIn": "fadeIn", "id": "input6"},
                                                    {"key": 2, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 3, "type": "dom.table.append", "id": "acc-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1},
                                                    {"key": 4, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 5, "type": "dom.table.append", "id": "grp-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1}
                                                ]
                                            }
                                        ]' formaction=""><i class="fa fa-book"></i></button>
                                        <div class="advancedInput wf-100" id="input6">
                                            <input autocomplete="off" spellcheck="false" class="input" type="text" id="input6"
                                                data-emptyAfter="true"
                                                data-autocomplete="off"
                                                data-src="http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10">
                                                <!-- Normally you put a search string here e.g. api/admin/find/accgrp?search={!#input6} -->
                                            <div id="input6-popup" class="popup" data-active="true">
                                                <table class="default">
                                                    <thead>
                                                        <tr>
                                                            <td>Type<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input6-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
                                                                <td data-tpl-text="/type_name" data-tpl-value="/type_prefix" data-value="">
                                                                <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                                <td data-tpl-text="/email" data-tpl-value="/email" data-value=""></td>
                                                            </tr>
                                                        </template>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="ipt-second"><button>Select</button></div>
                            </div>
                            <div class="box" id="input6-tags" data-limit="0" data-active="true">
                                <template id="input6-tagTemplate">
                                    <span class="tag red" data-tpl-value="/id" data-value="" data-uuid="" data-name="input6-tagname">
                                        <i class="fa fa-times"></i>
                                        <span style="display: none;" data-name="type_prefix" data-tpl-value="/type_prefix" data-value=""></span>
                                        <span data-tpl-text="/id" data-name="id" data-tpl-value="/id" data-value=""></span>
                                        <span data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></span>
                                    </span>
                                </template>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>With mandatory values</label>
                        <div>
                            <div class="ipt-wrap wf-100">
                                <div class="ipt-first">
                                    <span class="input">
                                        <button type="button" id="input7-book-button" data-action='[
                                            {
                                                "key": 1, "listener": "click", "action": [
                                                    {"key": 1, "type": "dom.popup", "selector": "#acc-grp-tpl", "aniIn": "fadeIn", "id": "input7"},
                                                    {"key": 2, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 3, "type": "dom.table.append", "id": "acc-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1},
                                                    {"key": 4, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 5, "type": "dom.table.append", "id": "grp-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1}
                                                ]
                                            }
                                        ]' formaction=""><i class="fa fa-book"></i></button>
                                        <div class="advancedInput wf-100" id="input7">
                                            <input autocomplete="off" spellcheck="false" class="input" type="text" id="input7"
                                                data-emptyAfter="true"
                                                data-autocomplete="off"
                                                data-src="http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10">
                                                <!-- Normally you put a search string here e.g. api/admin/find/accgrp?search={!#input7} -->
                                            <div id="input7-popup" class="popup" data-active="true">
                                                <table class="default">
                                                    <thead>
                                                        <tr>
                                                            <td>Type<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input7-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
                                                                <td data-tpl-text="/type_name" data-tpl-value="/type_prefix" data-value="">
                                                                <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                                <td data-tpl-text="/email" data-tpl-value="/email" data-value=""></td>
                                                            </tr>
                                                        </template>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="ipt-second"><button>Select</button></div>
                            </div>
                            <div class="box" id="input7-tags" data-limit="0" data-active="true">
                                <template id="input7-tagTemplate">
                                    <span class="tag red" data-tpl-value="/id" data-value="" data-uuid="" data-name="input7-tagname">
                                        <i class="fa fa-times"></i>
                                        <span style="display: none;" data-name="type_prefix" data-tpl-value="/type_prefix" data-value=""></span>
                                        <span data-tpl-text="/id" data-name="id" data-tpl-value="/id" data-value=""></span>
                                        <span data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></span>
                                    </span>
                                </template>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Input+Autocomplete+Dropdown+Badge+Local</div>
            <div class="portlet-body">
                <form>
                </form>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Input+Autocomplete+Dropdown+Table+Remote</div>
            <div class="portlet-body">
                <form>
                    <div class="form-group">
                        <label>Default</label>
                        <div>
                            <div class="ipt-wrap wf-100">
                                <div class="ipt-first">
                                    <span class="input">
                                        <button type="button" id="input11-book-button" data-action='[
                                            {
                                                "key": 1, "listener": "click", "action": [
                                                    {"key": 1, "type": "dom.popup", "selector": "#acc-grp-tpl", "aniIn": "fadeIn", "id": "input11"},
                                                    {"key": 2, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 3, "type": "dom.table.append", "id": "acc-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1},
                                                    {"key": 4, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 5, "type": "dom.table.append", "id": "grp-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1}
                                                ]
                                            }
                                        ]' formaction=""><i class="fa fa-book"></i></button>
                                        <div class="advancedInput wf-100" id="input11">
                                            <input autocomplete="off" spellcheck="false" class="input" type="text" id="input11"
                                                data-emptyAfter="true"
                                                data-autocomplete="off"
                                                data-src="http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10">
                                                <!-- Normally you put a search string here e.g. api/admin/find/accgrp?search={!#input11} -->
                                            <div id="input11-popup" class="popup" data-active="true">
                                                <table class="default">
                                                    <thead>
                                                        <tr>
                                                            <td>Type<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input11-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
                                                                <td data-tpl-text="/type_name" data-tpl-value="/type_prefix" data-value="">
                                                                <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                                <td data-tpl-text="/email" data-tpl-value="/email" data-value=""></td>
                                                            </tr>
                                                        </template>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="ipt-second"><button>Select</button></div>
                            </div>
                        </div>
                    </div>

                    <table class="default">
                        <thead>
                            <tr><td>
                                <td>Type
                                <td>ID
                                <td>Name
                                <td>Email
                        </thead>
                        <tbody id="input11-tags" data-limit="0" data-active="true">
                            <template id="input11-tagTemplate">
                                <tr data-tpl-value="/id" data-value="" data-uuid="" data-name="input11-tagname">
                                    <td><i class="fa fa-times"></i>
                                    <td><span data-tpl-text="/type_name" data-name="type_prefix" data-tpl-value="/type_prefix" data-value=""></span>
                                    <td><span data-tpl-text="/id" data-name="id" data-tpl-value="/id" data-value=""></span>
                                    <td><span data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></span>
                                    <td data-tpl-text="/email" data-tpl-value="/email" data-value="">
                                </span>
                            </template>
                    </table>

                    <div class="form-group">
                        <label>With starting values</label>
                        <div>
                            <div class="ipt-wrap wf-100">
                                <div class="ipt-first">
                                    <span class="input">
                                        <button type="button" id="input12-book-button" data-action='[
                                            {
                                                "key": 1, "listener": "click", "action": [
                                                    {"key": 1, "type": "dom.popup", "selector": "#acc-grp-tpl", "aniIn": "fadeIn", "id": "input12"},
                                                    {"key": 2, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 3, "type": "dom.table.append", "id": "acc-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1},
                                                    {"key": 4, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 5, "type": "dom.table.append", "id": "grp-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1}
                                                ]
                                            }
                                        ]' formaction=""><i class="fa fa-book"></i></button>
                                        <div class="advancedInput wf-100" id="input12">
                                            <input autocomplete="off" spellcheck="false" class="input" type="text" id="input12"
                                                data-emptyAfter="true"
                                                data-autocomplete="off"
                                                data-src="http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10">
                                                <!-- Normally you put a search string here e.g. api/admin/find/accgrp?search={!#input12} -->
                                            <div id="input12-popup" class="popup" data-active="true">
                                                <table class="default">
                                                    <thead>
                                                        <tr>
                                                            <td>Type<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input12-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
                                                                <td data-tpl-text="/type_name" data-tpl-value="/type_prefix" data-value="">
                                                                <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                                <td data-tpl-text="/email" data-tpl-value="/email" data-value=""></td>
                                                            </tr>
                                                        </template>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="ipt-second"><button>Select</button></div>
                            </div>
                        </div>
                    </div>

                    <table class="default">
                        <thead>
                            <tr><td>
                                <td>Type
                                <td>ID
                                <td>Name
                                <td>Email
                        </thead>
                        <tbody id="input12-tags" data-limit="0" data-active="true">
                            <template id="input12-tagTemplate">
                                <tr data-tpl-value="/id" data-value="" data-uuid="" data-name="input12-tagname">
                                    <td><i class="fa fa-times"></i>
                                    <td><span data-tpl-text="/type_name" data-name="type_prefix" data-tpl-value="/type_prefix" data-value=""></span>
                                    <td><span data-tpl-text="/id" data-name="id" data-tpl-value="/id" data-value=""></span>
                                    <td><span data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></span>
                                    <td data-tpl-text="/email" data-tpl-value="/email" data-value="">
                                </span>
                            </template>
                    </table>

                    <div class="form-group">
                        <label>With mandatory values</label>
                        <div>
                            <div class="ipt-wrap wf-100">
                                <div class="ipt-first">
                                    <span class="input">
                                        <button type="button" id="input13-book-button" data-action='[
                                            {
                                                "key": 1, "listener": "click", "action": [
                                                    {"key": 1, "type": "dom.popup", "selector": "#acc-grp-tpl", "aniIn": "fadeIn", "id": "input13"},
                                                    {"key": 2, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 3, "type": "dom.table.append", "id": "acc-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1},
                                                    {"key": 4, "type": "message.request", "uri": "http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10", "method": "GET", "request_type": "json"},
                                                    {"key": 5, "type": "dom.table.append", "id": "grp-table", "aniIn": "fadeIn", "data": [], "bindings": {"id": "id", "name": "name/0"}, "position": -1}
                                                ]
                                            }
                                        ]' formaction=""><i class="fa fa-book"></i></button>
                                        <div class="advancedInput wf-100" id="input13">
                                            <input autocomplete="off" spellcheck="false" class="input" type="text" id="input13"
                                                data-emptyAfter="true"
                                                data-autocomplete="off"
                                                data-src="http://127.0.0.1/cssOMS/tests/app/data/account.json?filter=some&limit=10">
                                                <!-- Normally you put a search string here e.g. api/admin/find/accgrp?search={!#input13} -->
                                            <div id="input13-popup" class="popup" data-active="true">
                                                <table class="default">
                                                    <thead>
                                                        <tr>
                                                            <td>Type<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>ID<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Name<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                            <td>Email<i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                                    <tbody>
                                                        <template id="input13-rowElement" class="rowTemplate">
                                                            <tr tabindex="-1">
                                                                <td data-tpl-text="/type_name" data-tpl-value="/type_prefix" data-value="">
                                                                <td data-tpl-text="/id" data-tpl-value="/id" data-value=""></td>
                                                                <td data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></td>
                                                                <td data-tpl-text="/email" data-tpl-value="/email" data-value=""></td>
                                                            </tr>
                                                        </template>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="ipt-second"><button>Select</button></div>
                            </div>
                        </div>
                    </div>

                    <table class="default">
                        <thead>
                            <tr><td>
                                <td>Type
                                <td>ID
                                <td>Name
                                <td>Email
                        </thead>
                        <tbody id="input13-tags" data-limit="0" data-active="true">
                            <template id="input13-tagTemplate">
                                <tr data-tpl-value="/id" data-value="" data-uuid="" data-name="input13-tagname">
                                    <td><i class="fa fa-times"></i>
                                    <td><span data-tpl-text="/type_name" data-name="type_prefix" data-tpl-value="/type_prefix" data-value=""></span>
                                    <td><span data-tpl-text="/id" data-name="id" data-tpl-value="/id" data-value=""></span>
                                    <td><span data-tpl-text="/name/0" data-tpl-value="/name/0" data-value=""></span>
                                    <td data-tpl-text="/email" data-tpl-value="/email" data-value="">
                                </span>
                            </template>
                    </table>
                </form>
            </div>
        </section>
    </div>

    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Input+Autocomplete+Dropdown+Table+Local</div>
            <div class="portlet-body">
                <form>
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