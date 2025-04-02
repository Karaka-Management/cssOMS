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
            <div class="portlet-head">Slider</div>
            <div class="portlet-body">
            <input type="range" min="1" max="100" value="50">
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