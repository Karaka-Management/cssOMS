import { jsOMS } from '../../../jsOMS/Utils/oLib.js';
import { AssetManager } from '../../../jsOMS/Asset/AssetManager.js';
import { Logger } from '../../../jsOMS/Log/Logger.js';
import { CacheManager } from '../../../jsOMS/DataStorage/CacheManager.js';
import { StorageManager } from '../../../jsOMS/DataStorage/StorageManager.js';
import { EventManager } from '../../../jsOMS/Event/EventManager.js';
import { ResponseManager } from '../../../jsOMS/Message/Response/ResponseManager.js';
import { AccountManager } from '../../../jsOMS/Account/AccountManager.js';
import { UIManager } from '../../../jsOMS/UI/UIManager.js';
import { InputManager } from '../../../jsOMS/UI/Input/InputManager.js';
import { ModuleManager } from '../../../jsOMS/Module/ModuleManager.js';
import { ReadManager } from '../../../jsOMS/UI/Input/Voice/ReadManager.js';
import { VoiceManager } from '../../../jsOMS/UI/Input/Voice/VoiceManager.js';
import { NotificationManager } from '../../../jsOMS/Message/Notification/NotificationManager.js';
import { HttpUri } from '../../../jsOMS/Uri/HttpUri.js';
import { UriFactory } from '../../../jsOMS/Uri/UriFactory.js';
import { ACTION_EVENTS } from '../../../Web/Backend/js/global/ActionEvents.js';
import { KEYBOARD_EVENTS } from '../../../Web/Backend/js/global/KeyboardEvents.js';
import { MOUSE_EVENTS } from '../../../Web/Backend/js/global/MouseEvents.js';
import { RESPONSE_EVENTS } from '../../../Web/Backend/js/global/ResponseEvents.js';
import { TOUCH_EVENTS } from '../../../Web/Backend/js/global/TouchEvents.js';
import { VOICE_EVENTS } from '../../../Web/Backend/js/global/VoiceEvents.js';

export class Application {
    constructor ()
    {
        this.logger   = Logger.getInstance();
        window.logger = this.logger;

        this.cacheManager    = new CacheManager();
        this.storageManager  = new StorageManager();
        this.eventManager    = new EventManager();
        this.responseManager = new ResponseManager();
        this.assetManager    = new AssetManager();
        this.accountManager   = new AccountManager();
        this.uiManager       = new UIManager(this);
        this.inputManager    = new InputManager(this);
        this.moduleManager   = new ModuleManager(this);
        this.readManager     = new ReadManager();
        this.voiceManager    = new VoiceManager(this);
        this.notifyManager   = new NotificationManager();
        this.request         = new HttpUri(window.location.href);

        this.request.setRootPath(
            HttpUri.parseUrl(
                typeof document.getElementsByTagName('base')[0] !== 'undefined'
                    ? document.getElementsByTagName('base')[0].href
                    : ''
            ).path
        );

        this.setResponseMessages();

        this.setActions();
        this.setKeyboardActions();
        this.setMouseActions();
        this.setVoiceActions();

        UriFactory.setupUriBuilder(this.request);
        UriFactory.setQuery('/lang', window.location.href.substr(this.request.getBase().length).split('/')[0]);

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

        for(let i = 0; i < length; ++i) {
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

        for(let i = 0; i < length; ++i) {
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
};

jsOMS.ready(function () {
    "use strict";

    /** global: jsOMS */
    window.omsApp = new Application();
});
