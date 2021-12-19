<div class="row">
    <div class="col-xs-12">
        <section class="portlet">
            <div class="portlet-head">App Notifications</div>
            <div class="portlet-body">
                <button id="okButton">OK Message</button>
                <button id="infoButton">Info Message</button>
                <button id="warningButton">Warning Message</button>
                <button id="errorButton">Error Message</button>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <section class="portlet">
            <div class="portlet-head">Special</div>
            <div class="portlet-body">
                <button id="vibrateButton">Vibrate Message</button>
                <button id="stickyButton">Sticky Message</button>
            </div>
        </section>
    </div>
</div>

<script type="module">
import { NotificationMessage } from '../../../jsOMS/Message/Notification/NotificationMessage.js';
import { NotificationType } from '../../../jsOMS/Message/Notification/NotificationType.js';

    document.getElementById('okButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new NotificationMessage(
                'ok',
                'Some Title',
                'This is a message content.'
            ), NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('infoButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new NotificationMessage(
                'info',
                'Some Title',
                'This is a message content.'
            ), NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('warningButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new NotificationMessage(
                'warning',
                'Some Title',
                'This is a message content.'
            ), NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('errorButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new NotificationMessage(
                'error',
                'Some Title',
                'This is a message content.'
            ), NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('vibrateButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new NotificationMessage(
                'ok',
                'Vibrate',
                'This is a message content.',
                500
            ), NotificationType.APP_NOTIFICATION
        );
    });

    document.getElementById('stickyButton').addEventListener('click', function() {
        window.omsApp.notifyManager.send(
            new NotificationMessage(
                'ok',
                'Sticky',
                'This is a message content.',
                false,
                true
            ), NotificationType.APP_NOTIFICATION
        );
    });
</script>