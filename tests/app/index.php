<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="/cssOMS/tests/app/">
        <title>Style Test</title>
        <link rel="stylesheet" type="text/css" href="../../styles.css">
        <link rel="stylesheet" type="text/css" href="../../tree.css">
        <link rel="stylesheet" type="text/css" href="../../timeline.css">
        <link rel="stylesheet" type="text/css" href="../../../Install/Application/Backend/Themes/Default/css/backend-small.css">
        <link rel="stylesheet" type="text/css" href="../../../Resources/fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../../Resources/fonts/linearicons/css/style.css">
        <link rel="stylesheet" type="text/css" href="../../../Resources/fonts/lineicons/css/lineicons.css">
        <script src="load.js" type="module"></script>
    </head>
    <body>
    <input type="checkbox" id="nav-trigger" name="nav-hamburger" class="nav-trigger">
    <nav id="nav-side">
        <span id="u-box">
            <a href="#">
                <img alt="User Image" loading="lazy" src="../../../Web/Backend/img/user_default_6.png">
            </a>
            <span id="logo" itemscope itemtype="http://schema.org/Organization">
                <div>&nbsp;</div>
                <select
                    class="plain" id="unit-selector" name="unit"
                    data-action='[{"listener": "change", "action": [{"key": 1, "type": "redirect", "uri": "{%}&u={!#unit-selector}", "target": "self"}]}]'
                    title="Unit selector">
                    <option value="1">Main Unit</option>
                    <option value="2">Secondary Unit</option>
                </select>
                <div id="nav-side-settings">
                    <input id="audio-output" type="checkbox">
                    <label for="audio-output"><i class="g-icon">volume_up</i><i class="g-icon">volume_down</i></label>

                    <input id="speech-recognition" type="checkbox">
                    <label for="speech-recognition"><i class="g-icon">mic</i>
                </div>
            </span>
            <label class="ham-trigger" for="nav-trigger"><i class="g-icon p">menu</i></label>
        </span>
        <div id="nav-side-outer">
            <ul id="nav-side-inner" class="nav" role="list">
                    <li><input id="nav-help" type="checkbox" checked>
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>Forms</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
                                </label>
                            </li>
                            <li><a href="?page=forms">Form</a></li>
                            <li><a href="?page=forms_input">Input</a></li>
                            <li><a href="?page=forms_data_selection">Data Selection</a></li>
                            <li><a href="?page=forms_table">Table</a></li>
                        </ul>
                    </li>
                    <li><input id="nav-help" type="checkbox" checked>
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>UI Elements</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
                                </label>
                            </li>
                            <li><a href="?page=alerts">Alerts</a></li>
                            <li><a href="?page=article">Articles</a></li>
                            <li><a href="?page=buttons">Buttons</a></li>
                            <li><a href="?page=tags">Tags</a></li>
                            <li><a href="?page=panels">Panels</a></li>
                            <li><a href="?page=loaders">Loaders</a></li>
                            <li><a href="?page=tabs">Tabs</a></li>
                            <li><a href="?page=breadcrumbs">Breadcrumbs</a></li>
                            <li><a href="?page=progress">Progress</a></li>
                            <li><a href="?page=timeline">Timeline</a></li>
                            <li><a href="?page=drag">Drag</a></li>
                            <li><a href="?page=tree">Tree</a></li>
                        </ul>
                    </li>
                    <li><input id="nav-help" type="checkbox" checked>
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>Images</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
                                </label>
                            </li>
                            <li><a href="?page=images">Images</a></li>
                            <li><a href="?page=sliders">Sliders</a></li>
                            <li><a href="?page=gallery">Gallery</a></li>
                            <li><a href="?page=lazyload">Lazyload</a></li>
                        </ul>
                    </li>
                    <li><input id="nav-help" type="checkbox" checked>
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>Tables & Lists</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
                                </label>
                            </li>
                            <li><a href="?page=tables">Tables</a></li>
                            <li><a href="?page=lists">Lists</a></li>
                        </ul>
                    </li>
                    <li><input id="nav-help" type="checkbox" checked>
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>Layout</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
                                </label>
                            </li>
                            <li><a href="?page=grid">Grid</a></li>
                            <li><a href="?page=sizes">Sizes</a></li>
                        </ul>
                    </li>
                    <li><input id="nav-help" type="checkbox" checked>
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>Interaction</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
                                </label>
                            </li>
                            <li><a href="?page=popups">Popups</a></li>
                            <li><a href="?page=notifications">Notifications</a></li>
                        </ul>
                    </li>
                    <li><input id="nav-help" type="checkbox" checked>
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>Views</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
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
                                    <i class="g-icon">help</i>
                                    <span>JS Tests</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
                                </label>
                            </li>
                            <li><a href="?page=3d">3D</a></li>
                            <li><a href="?page=actions">Actions</a></li>
                        </ul>
                    </li>
                    <li><input id="nav-help" type="checkbox">
                        <ul>
                            <li><label for="nav-Help">
                                    <i class="g-icon">help</i>
                                    <span>Charts (disabled)</span>
                                    <i class="g-icon min">expand_more</i>
                                    <i class="g-icon max">expand_less</i>
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
        </div>
    </nav>
    <main>
        <header>
        <form id="s-bar" method="GET" action="">
                <label class="ham-trigger" for="nav-trigger"><i class="g-icon p">menu</i></label>
                <span role="search" class="inputWrapper">
                    <span class="txtWrap">
                        <i class="frontIco g-icon" aria-hidden="true">search</i>
                        <input id="iSearchBox" name="search" type="text" autofocus="autofocus">
                        <i class="endIco g-icon" aria-hidden="true">close</i>
                    </span>
                    <input type="submit" id="iSearchButton" name="searchButton" value="Search">
                </span>
            </form>
                <ul id="t-nav" role="list">
                    <li>
                        <a href="/en/backend/calendar/dashboard?id=Admin">
                            <i class="g-icon infoIcon">calendar_month</i> Calendar
                        </a>
                    </li>
                    <li>
                        <a href="/en/backend/task/dashboard?id=Admin">
                            <i class="g-icon infoIcon">bolt<span class="badge">99</span></i> Tasks
                        </a>
                    </li>
                    <li>
                        <a href="/en/api/logout?id=Admin">
                            <i class="g-icon infoIcon">power_settings_new</i> Logout
                        </a>
                    </li>
                </ul>
        </header>
            <div id="content" class="container-fluid" role="main">
                <?php include __DIR__ . '/' . \str_replace('.', '', ($_GET['page'] ?? 'welcome')) . '.php'; ?>
            </div>

        </main>
        <?php include __DIR__ . '/globalTemplates.tpl.php'; ?>
    </body>
</html>