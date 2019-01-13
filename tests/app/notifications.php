<div class="row">
    <div class="col-xs-12">
        <section class="box wf-100">
            <header><h1>App Notifications</h1></header>
            <div class="inner">
                <button id="okButton">OK Message</button>
                <button id="infoButton">Info Message</button>
                <button id="warningButton">Warning Message</button>
                <button id="errorButton">Error Message</button>
            </div>
        </section>
    </div>
</div>

<div id="app-message-container" style="position: absolute; margin: 0 auto; right: 1%; top: 1%;">
    <template id="app-message">
        <div class="log-msg" style="z-index: 11; position: relative; margin: 0 auto; right: 0; top: 0; margin-bottom: 10px;">
            <h1 class="log-msg-title"></h1>
            <div class="log-msg-content"></div>
        </div>
    </template>
</div>
<script>
    document.getElementById('okButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new jsOMS.Message.Notification.NotificationMessage(
                'ok',
                'Some Title',
                'This is a message content.'
            ), jsOMS.Message.Notification.NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('infoButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new jsOMS.Message.Notification.NotificationMessage(
                'info',
                'Some Title',
                'This is a message content.'
            ), jsOMS.Message.Notification.NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('warningButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new jsOMS.Message.Notification.NotificationMessage(
                'warning',
                'Some Title',
                'This is a message content.'
            ), jsOMS.Message.Notification.NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('errorButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new jsOMS.Message.Notification.NotificationMessage(
                'error',
                'Some Title',
                'This is a message content.'
            ), jsOMS.Message.Notification.NotificationType.APP_NOTIFICATION
        );
    });
</script>