(function (jsOMS)
{
    "use strict";

    jsOMS.Application = class {
        constructor ()
        {
            jsOMS.Autoloader.initPreloaded();

            this.logger   = jsOMS.Log.Logger.getInstance();
            window.logger = this.logger;

            this.cacheManager    = new jsOMS.DataStorage.CacheManager();
            this.storageManager  = new jsOMS.DataStorage.StorageManager();
            this.eventManager    = new jsOMS.Event.EventManager();
            this.responseManager = new jsOMS.Message.Response.ResponseManager();
            this.dispatcher      = new jsOMS.Dispatcher.Dispatcher();
            this.assetManager    = new jsOMS.Asset.AssetManager();
            this.acountManager   = new jsOMS.Account.AccountManager();
            this.uiManager       = new jsOMS.UI.UIManager(this);
            this.inputManager    = new jsOMS.UI.Input.InputManager(this);
            this.moduleManager   = new jsOMS.Module.ModuleManager(this);
            this.readManager     = new jsOMS.UI.Input.Voice.ReadManager();
            this.voiceManager    = new jsOMS.UI.Input.Voice.VoiceManager(this);
            this.notifyManager   = new jsOMS.Message.Notification.NotificationManager();
            this.request         = new jsOMS.Uri.Http(window.location.href);

            this.request.setRootPath(
                jsOMS.Uri.Http.parseUrl(
                    document.getElementsByTagName('base')[0].href
                ).path
            );

            this.setResponseMessages();

            this.setActions();
            this.setKeyboardActions();
            this.setMouseActions();
            this.setVoiceActions();

            jsOMS.Uri.UriFactory.setupUriBuilder(this.request);
            jsOMS.Uri.UriFactory.setQuery('/lang', window.location.href.substr(this.request.getBase().length).split('/')[0]);

            this.uiManager.bind();
        };

        setResponseMessages ()
        {
            /** global: RESPONSE_EVENTS */
            for(let key in RESPONSE_EVENTS) {
                if(RESPONSE_EVENTS.hasOwnProperty(key)) {
                    this.responseManager.add(key, RESPONSE_EVENTS[key]);
                }
            }
        };

        setActions ()
        {
            /** global: ACTION_EVENTS */
            for(let key in ACTION_EVENTS) {
                if(ACTION_EVENTS.hasOwnProperty(key)) {
                    this.uiManager.getActionManager().add(key, ACTION_EVENTS[key]);
                }
            }
        };

        setKeyboardActions ()
        {
            /** global: KEYBOARD_EVENTS */
            let length = KEYBOARD_EVENTS.length;

            for(let i = 0; i < length; i++) {
                this.inputManager.getKeyboardManager().add(
                    KEYBOARD_EVENTS[i]['element'],
                    KEYBOARD_EVENTS[i]['keys'],
                    KEYBOARD_EVENTS[i]['callback']
                );
            }
        };

        setMouseActions ()
        {
            /** global: MOUSE_EVENTS */
            let length = MOUSE_EVENTS.length;

            for(let i = 0; i < length; i++) {
                this.inputManager.getMouseManager().add(
                    MOUSE_EVENTS[i]['element'],
                    MOUSE_EVENTS[i]['type'],
                    MOUSE_EVENTS[i]['button'],
                    MOUSE_EVENTS[i]['callback'],
                    MOUSE_EVENTS[i]['exact']
                );
            }
        };

        setVoiceActions ()
        {
            /** global: VOICE_EVENTS */
            for(let key in VOICE_EVENTS) {
                if(VOICE_EVENTS.hasOwnProperty(key)) {
                    this.voiceManager.add(key, VOICE_EVENTS[key]);
                }
            }

            this.voiceManager.setup();
            this.voiceManager.start();
        };
    }
}(window.jsOMS = window.jsOMS || {}));

jsOMS.ready(function ()
{
    "use strict";

    /** global: jsOMS */
    window.omsApp = new jsOMS.Application();

    const inputElement = document.getElementById('input1');
    const dataList = inputElement.getElementsByClassName('dropdown')[0].getElementsByTagName('table')[0];
    const dataTpl = inputElement.getElementsByClassName('rowTemplate')[0];
    const src = inputElement.getElementsByClassName('inputClass')[0].getAttribute('data-src');

    document.getElementById('inputId').addEventListener('keyup', function(e) {
        if (typeof src !== 'undefined' && src !== '') {
            while (dataList.firstChild) {
                dataList.removeChild(dataList.firstChild);
            }
            
            const request = new jsOMS.Message.Request.Request(src);
            request.setSuccess(function (data) {
                data = JSON.parse(data.response);
                const dataLength = data.length;

                console.table(data);

                for(let i = 0; i < dataLength; ++i) {
                    const newRow = dataTpl.content.cloneNode(true);
                    const fields = newRow.querySelectorAll('[data-tpl-value]');
                    const fieldLength = fields.length;

                    for (let j = 0; j < fieldLength; ++j) {
                        console.log(jsOMS.getArray(fields[j].getAttribute('data-tpl-value'), data[i]));
                        fields[j].appendChild(document.createTextNode(jsOMS.getArray(fields[j].getAttribute('data-tpl-name'), data[i])));
                    }

                    dataList.appendChild(newRow);
                }
            });
            request.send();
        }

        // check if data-src is available 
            // if yes load data with delay of x ms
            // if dropdown active
                // put data into dropdown
                // select highest fit
                // with enter/tab the text is completed
                // if tags is true
                    // move selected to tag
                // if emptyafter select is true
                    // remove content from input field
                // else
                    // autocomplete text based on selecteion
            // else put directly into input field and/or tag list depending on settings
        // if not check drop down for search results/data and do similar tasks as above 
        // .... reorder ... currently strucuture sux!

        // the dropdown should be a table because the data might be in tables (e.g. first name, second name, address etc. for a result)
    });
});
