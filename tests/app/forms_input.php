<div class="row">
    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Dropdown</div>
            <div class="portlet-body">
                <form>
                </form>
            </div>
        </section>
    </div>

    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Multiple Data Dropdown</div>
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
            <div class="portlet-head">Calendar</div>
            <div class="portlet-body">
                <form>
                </form>
            </div>
        </section>
    </div>

    <div class="col-xs-12 col-md-6">
        <section class="portlet">
            <div class="portlet-head">Slider Start/End</div>
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
            <div class="portlet-head">Slider</div>
            <div class="portlet-body">
                <form>
                </form>
            </div>
        </section>
    </div>
</div>


<script type="module">
    import { Request } from "../../../jsOMS/Message/Request/Request.js";

    const loginRequest = new HttpRequest('http://127.0.0.1/en/api/login', 'POST', 'json');
    loginRequest.setData({user: 'admin', pass: 'orange'});
    loginRequest.send();
</script>