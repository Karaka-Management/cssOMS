<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <base href="http://127.0.0.1/cssOMS/tests/app/">
        <title>Style Test</title>
        <link rel="stylesheet" type="text/css" href="../../styles.css">
        <link rel="stylesheet" type="text/css" href="../../../Web/Backend/css/backend-small.css">
        <link rel="stylesheet" type="text/css" href="../../../Web/Backend/css/backend.css">
        <link rel="stylesheet" type="text/css" href="../../../Resources/fontawesome/css/font-awesome.min.css">
        <script src="../../../jsOMS/Utils/oLib.js"></script>
        <script src="../../../jsOMS/Asset/AssetManager.js"></script>
        <script src="../../../jsOMS/Autoloader.js"></script>
        <script src="../../../jsOMS/Account/AccountType.js"></script>
        <script src="../../../jsOMS/Account/AccountManager.js"></script>
        <script src="../../../jsOMS/Uri/Http.js"></script>
        <script src="../../../jsOMS/Uri/UriFactory.js"></script>
        <script src="../../../jsOMS/DataStorage/CacheManager.js"></script>
        <script src="../../../jsOMS/DataStorage/LocalStorage.js"></script>
        <script src="../../../jsOMS/DataStorage/StorageManager.js"></script>
        <script src="../../../jsOMS/Event/EventManager.js"></script>
        <script src="../../../jsOMS/Message/Request/BrowserType.js"></script>
        <script src="../../../jsOMS/Message/Request/OSType.js"></script>
        <script src="../../../jsOMS/Message/Request/RequestMethod.js"></script>
        <script src="../../../jsOMS/Message/Request/RequestType.js"></script>
        <script src="../../../jsOMS/Message/Request/Request.js"></script>
        <script src="../../../jsOMS/UI/ActionManager.js"></script>
        <script src="../../../jsOMS/Message/Response/ResponseType.js"></script>
        <script src="../../../jsOMS/Message/Response/ResponseManager.js"></script>
        <script src="../../../jsOMS/Message/Response/Response.js"></script>
        <script src="../../../jsOMS/Message/Notification/App/AppNotification.js"></script>
        <script src="../../../jsOMS/Message/Notification/Browser/BrowserNotification.js"></script>
        <script src="../../../jsOMS/Message/Notification/NotificationType.js"></script>
        <script src="../../../jsOMS/Message/Notification/NotificationLevel.js"></script>
        <script src="../../../jsOMS/Message/Notification/NotificationManager.js"></script>
        <script src="../../../jsOMS/Message/Notification/NotificationMessage.js"></script>
        <script src="../../../jsOMS/Module/ModuleFactory.js"></script>
        <script src="../../../jsOMS/Module/ModuleManager.js"></script>
        <script src="../../../jsOMS/Dispatcher/Dispatcher.js"></script>
        <script src="../../../jsOMS/Log/Logger.js"></script>
        <script src="../../../jsOMS/Log/LogLevel.js"></script>
        <script src="../../../jsOMS/UI/Component/Form.js"></script>
        <script src="../../../jsOMS/UI/Component/Table.js"></script>
        <script src="../../../jsOMS/UI/Input/InputManager.js"></script>
        <script src="../../../jsOMS/UI/Input/Keyboard/KeyboardManager.js"></script>
        <script src="../../../jsOMS/UI/Input/Mouse/ClickType.js"></script>
        <script src="../../../jsOMS/UI/Input/Mouse/EventType.js"></script>
        <script src="../../../jsOMS/UI/Input/Mouse/MouseManager.js"></script>
        <script src="../../../jsOMS/UI/Input/Touch/TouchManager.js"></script>
        <script src="../../../jsOMS/UI/Input/Voice/VoiceManager.js"></script>
        <script src="../../../jsOMS/UI/Input/Voice/ReadManager.js"></script>
        <script src="../../../jsOMS/UI/Input/Voice/SpeechManager.js"></script>
        <script src="../../../jsOMS/UI/Component/Tab.js"></script>
        <script src="../../../jsOMS/UI/Component/AdvancedInput.js"></script>
        <script src="../../../jsOMS/UI/Loader.js"></script>
        <script src="../../../jsOMS/UI/DragNDrop.js"></script>
        <script src="../../../jsOMS/UI/GeneralUI.js"></script>
        <script src="../../../jsOMS/UI/UIManager.js"></script>
        <script src="../../../jsOMS/Views/FormView.js"></script>
        <script src="../../../jsOMS/Views/TableView.js"></script>
        <script src="../../../jsOMS/Utils/Parser/Markdown.js"></script>
        <script src="../../../jsOMS/Model/Message/DomActionType.js"></script>
        <script src="../../../jsOMS/Model/Message/DomAction.js"></script>
        <script src="../../../jsOMS/Model/Message/FormValidation.js"></script>
        <script src="../../../jsOMS/Model/Message/NotifyType.js"></script>
        <script src="../../../jsOMS/Model/Message/Notify.js"></script>
        <script src="../../../jsOMS/Model/Message/Redirect.js"></script>
        <script src="../../../jsOMS/Model/Message/Reload.js"></script>
        <script src="../../../jsOMS/Model/Action/Message/Request.js"></script>
        <script src="../../../jsOMS/Model/Action/Message/Log.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Popup.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Remove.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Show.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Hide.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Focus.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Datalist/Clear.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Datalist/Append.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Table/Clear.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/Table/Append.js"></script>
        <script src="../../../jsOMS/Model/Action/Event/Prevent.js"></script>
        <script src="../../../jsOMS/Model/Action/Utils/Timer.js"></script>
        <script src="../../../jsOMS/Model/Action/Validate/Keypress.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/SetValue.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/RemoveValue.js"></script>
        <script src="../../../jsOMS/Model/Action/Dom/GetValue.js"></script>
        <script src="../../../Web/Backend/js/config.js"></script>
        <script src="../../../Web/Backend/js/global/ActionEvents.js"></script>
        <script src="../../../Web/Backend/js/global/KeyboardEvents.js"></script>
        <script src="../../../Web/Backend/js/global/MouseEvents.js"></script>
        <script src="../../../Web/Backend/js/global/ResponseEvents.js"></script>
        <script src="../../../Web/Backend/js/global/TouchEvents.js"></script>
        <script src="../../../Web/Backend/js/global/VoiceEvents.js"></script>

        <script src="../../../Resources/d3/d3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../cssOMS/chart/chart.css">
        <link rel="stylesheet" type="text/css" href="../../../cssOMS/chart/chart_line.css">
        <link rel="stylesheet" type="text/css" href="../../../cssOMS/chart/chart_bar.css">
        <script src="../../../jsOMS/Utils/oLib.js"></script>
        <script src="../../../jsOMS/Asset/AssetManager.js"></script>
        <script src="../../../jsOMS/Autoloader.js"></script>
        <script src="../../../jsOMS/Chart/ChartAbstract.js"></script>
        <script src="../../../jsOMS/Chart/LineChart.js"></script>
        <script src="../../../jsOMS/Chart/AreaChart.js"></script>
        <script src="../../../jsOMS/Chart/DiffAreaChart.js"></script>
        <script src="../../../jsOMS/Chart/StackedAreaChart.js"></script>
        <script src="../../../jsOMS/Chart/ColumnChart.js"></script>
        <script src="../../../jsOMS/Chart/BarChart.js"></script>
        <script src="../../../jsOMS/Chart/GroupedColumnChart.js"></script>
        <script src="../../../jsOMS/Chart/GroupedBarChart.js"></script>
        <script src="../../../jsOMS/Chart/StackedColumnChart.js"></script>
        <script src="../../../jsOMS/Chart/StackedBarChart.js"></script>
        <script src="../../../jsOMS/Chart/PieChart.js"></script>
        <script src="../../../jsOMS/Chart/DonutChart.js"></script>
        <script src="../../../jsOMS/Chart/WaterfallChart.js"></script>
        <script src="../../../jsOMS/Chart/VWaterfallChart.js"></script>
        <script src="../../../jsOMS/Chart/PyramidChart.js"></script>
        <script src="../../../jsOMS/Chart/ScatterplotChart.js"></script>
        <script src="../../../jsOMS/Chart/CalendarChart.js"></script>
        <script src="../../../jsOMS/Chart/CandlestickChart.js"></script>
        <script src="../../../jsOMS/Chart/OhlcChart.js"></script>

        <script src="../load.js"></script>
    </head>
    <body>
        <header>
            <div id="bar-s">
                <ul id="t-nav" role="navigation">
                    <li>
                        <a href="/en/backend/calendar/dashboard?id=Admin">
                            <i class="fa fa-calendar infoIcon"></i> Calendar
                        </a>
                    </li>
                    <li>
                        <a href="/en/backend/task/dashboard?id=Admin">
                            <i class="fa fa-bolt infoIcon"><span class="badge">99</span></i> Tasks
                        </a>
                    </li>
                    <li>
                        <a href="/en/api/logout?id=Admin">
                            <i class="fa fa-power-off infoIcon"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
            <div id="bar-b">
                <span class="vC" id="ham-trigger">
                    <label for="nav-trigger"><i class="fa fa-bars"></i></label>
                </span>
                <span class="vC" id="logo" itemscope itemtype="http://schema.org/Organization">
                    <select class="plain" id="unit-selector" name="unit" data-action='[{"listener": "change", "action": [{"key": 1, "type": "redirect", "uri": "{%}&u={#unit-selector}", "target": "self"}]}]' title="Unit selector">
                        <option value="" selected>Organization Name</option>
                    </select>
                </span>
                <span class="vC" id="s-bar" role="search">
                    <span><input id="iSearchBox" name="search" type="text" autofocus="autofocus"></span>
                    <input type="submit" id="iSearchButton" name="searchButton" value="Search">
                </span>
                <span class="vC" id="u-box">
                    <a href="">
                        <span>AccountName</span>
                        <img alt="" data-lazyload="../../../Web/Backend/img/user_default_6.png">
                    </a>
                </span>
            </div>
        </header>
        <div id="out">
            <ul id="nav-side" class="nav" role="navigation">
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            Forms
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=forms">Form</a></li>
                        <li><a href="?page=forms_input">Input</a></li>
                        <li><a href="?page=forms_table">Table</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            UI Elements
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=article">Articles</a></li>
                        <li><a href="?page=buttons">Buttons</a></li>
                        <li><a href="?page=tags">Tags</a></li>
                        <li><a href="?page=panels">Panels</a></li>
                        <li><a href="?page=loaders">Loaders</a></li>
                        <li><a href="?page=tabs">Tabs</a></li>
                        <li><a href="?page=breadcrumbs">Breadcrumbs</a></li>
                        <li><a href="?page=progress">Progress</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            Images
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=images">Images</a></li>
                        <li><a href="?page=sliders">Sliders</a></li>
                        <li><a href="?page=lazyload">Lazyload</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            Tables & Lists
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=tables">Tables</a></li>
                        <li><a href="?page=lists">Lists</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            Layout
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=grid">Grid</a></li>
                        <li><a href="?page=sizes">Sizes</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            Interaction
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=popups">Popups</a></li>
                        <li><a href="?page=notifications">Notifications</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            Views
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=editor">Editor</a></li>
                        <li><a href="?page=calendar">Calendar</a></li>
                        <li><a href="?page=navigations">Navigations</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            JS Tests
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=3d">3D</a></li>
                        <li><a href="?page=actions">Actions</a></li>
                    </ul>
                </li>
                <li><input id="nav-help" type="checkbox" checked>
                    <ul>
                        <li><label for="nav-Help">
                            <span class="centerText">
                                <i class="fa fa-question-circle"></i>
                            </span>
                            Charts
                                <i class="fa fa-chevron-down min"></i>
                                <i class="fa fa-chevron-up max"></i>
                            </label>
                        </li>
                        <li><a href="?page=chart_line">Line Chart</a></li>
                        <li><a href="?page=chart_area">Area Chart</a></li>
                        <li><a href="?page=chart_bar">Bar Chart</a></li>
                        <li><a href="?page=chart_column">Column Chart</a></li>
                        <li><a href="?page=chart_waterfall">Waterfall Chart</a></li>
                        <li><a href="?page=chart_pie">Pie Chart</a></li>
                        <li><a href="?page=chart_radar">Radar Chart</a></li>
                        <li><a href="?page=chart_pyramid">Pyramid Chart</a></li>
                        <li><a href="?page=chart_gouge">Gouge Chart</a></li>
                        <li><a href="?page=chart_scatterplot">Scatterplot Chart</a></li>
                        <li><a href="?page=chart_boxplot">Boxplot Chart</a></li>
                        <li><a href="?page=chart_candlestick">Candlestick Chart</a></li>
                        <li><a href="?page=chart_ohlc">OHLC Chart</a></li>
                        <li><a href="?page=chart_calendar">Calendar Chart</a></li>
                        <li><a href="?page=chart_gantt">Gantt Chart</a></li>
                        <li><a href="?page=chart_bubblemap">Bubblemap</a></li>
                        <li><a href="?page=chart_tree">Tree Chart</a></li>
                        <li><a href="?page=chart_bcg">BCG Chart</a></li>
                        <li><a href="?page=chart_map">Map Chart</a></li>
                    </ul>
                </li>
            </ul>
            <input type="checkbox" id="nav-trigger" class="nav-trigger" checked>
            <main>
                <?php include __DIR__ . '/' . \str_replace('.', '', ($_GET['page'] ?? 'welcome')) . '.php'; ?>
            </main>
        </div>
    </body>
</html>