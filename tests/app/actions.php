<div class="row">
    <div class="col-xs-4">
        <section class="box red wf-100">
            <header><h1>Change + Redirect</h1></header>
            <div class="inner">
                <select id="t-selector" name="unit" data-action='[
                    {
                        "listener": "change", "action": [
                            {
                                "key": 1, "type": "redirect", "uri": "{%}&u={!#t-selector}", "target": "self"
                            }
                        ]
                    }
                ]' title="Unit selector">
                    <option value="test">MTest
                    <option value="test2">MTest2
                </select>
            </div>
        </section>
    </div>
</div>
