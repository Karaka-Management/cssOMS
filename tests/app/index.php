<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <base href="http://127.0.0.1/cssOMS/tests/app/">
        <title>Style Test</title>
        <link rel="stylesheet" type="text/css" href="../../styles.css">
        <link rel="stylesheet" type="text/css" href="../../../Web/Backend/css/backend-small.css">
        <link rel="stylesheet" type="text/css" href="../../../Resources/fontawesome/css/font-awesome.min.css">
        <script src="../../../jsOMS/Utils/oLib.js"></script>
        <script src="../load.js" type="module"></script>
    </head>
    <body>
    <input type="checkbox" id="nav-trigger" name="nav-hamburger" class="nav-trigger">
    <nav>
        <span id="u-box">
            <a href="">
                <img alt="" loading="lazy" src="../../../Web/Backend/img/user_default_6.png">
            </a>
            <span id="logo">
                <span>AccountName</span>
            </span>
        </span>

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
    </nav>
    <main>
        <header>
        <form id="s-bar" method="GET" action="">
                <label class="ham-trigger" for="nav-trigger"><i class="fa fa-bars p"></i></label>
                <span role="search" class="inputWrapper">
                    <span class="textWrapper">
                        <input id="iSearchBox" name="search" type="text" autofocus="autofocus">
                        <i class="frontIcon fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                        <i class="endIcon fa fa-times fa-lg fa-fw" aria-hidden="true"></i>
                    </span>
                    <input type="submit" id="iSearchButton" name="searchButton" value="Search">
                </span>
            </form>
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
        </header>
            <div id="content" class="container-fluid" role="main">
                <?php include __DIR__ . '/' . \str_replace('.', '', ($_GET['page'] ?? 'welcome')) . '.php'; ?>
            </div>
        </main>
    </body>
</html>