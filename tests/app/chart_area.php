<section style="float: left; width: 33%;">
    <h1>Line Chart</h1>
    <div id="line-chart" class="chart chart-line" style="width: 100%; height: 170px; float: left;"></div>
</section>
<script>
var c, chart, data, dataGen, i, k, count;

dataGen = (function ()
{
    return (function (id)
    {
        return function ()
        {
            var tempData, j, nums, y1Seed;
            nums     = Math.ceil(Math.random() * 50) + 4;
            y1Seed   = Math.round(Math.random() * 20);
            tempData = {
                id: id,
                name: "Dataset " + id,
                points: (function ()
                {
                    var k, ref, results, prev, counter = 0;
                    results                            = [];
                    for (j = k = 1, ref = nums; 1 <= ref ? k <= ref : k >= ref; j = 1 <= ref ? ++k : --k) {
                        if (data.length > 0) {
                            if (typeof data[count - 2].points !== 'undefined' && data[count - 2].points.length > counter && typeof data[count - 2].points[counter].y !== 'undefined') {
                                prev = data[count - 2].points[counter].y;
                            } else {
                                prev = 0;
                            }
                        } else {
                            prev = 0;
                        }

                        counter++;

                        results.push({
                            x: j,
                            y: y1Seed + Math.round(Math.random() * 5),
                            y0: prev
                        });
                    }

                    return results;
                })()
            };
            id       = id + 1;
            return tempData;
        };
    })(1);
})();
data = [];
for (i = k = 1; k <= 3; i = ++k) {
    count = i;
    data.push(dataGen());
}

var linechart = new jsOMS.Chart.LineChart('line-chart');
linechart.setData(data);
linechart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Area Chart</h1>
    <div id="area-chart" class="chart chart-area" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var c, chart, data, dataGen, i, k, count;

data = [];
for (i = k = 1; k <= 1; i = ++k) {
    count = i;
    data.push(dataGen());
}

var areachart = new jsOMS.Chart.AreaChart('area-chart');
areachart.setData(data);
areachart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Stacked Area Chart</h1>
    <div id="stackedarea-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var c, chart, data, dataGen, i, k, count;

data = [];
for (i = k = 1; k <= 3; i = ++k) {
    count = i;
    data.push(dataGen());
}

var stackedareachart = new jsOMS.Chart.StackedAreaChart('stackedarea-chart');
stackedareachart.setData(data);
stackedareachart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Diff Area Chart</h1>
    <div id="diffarea-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var c, chart, data, dataGen, i, k, count;

dataGen2 = (function ()
{
    return (function (id)
    {
        return function ()
        {
            var tempData, j, nums, y1Seed;
            nums     = Math.ceil(Math.random() * 50) + 4;
            y1Seed   = Math.round(Math.random() * 20);
            tempData = {
                id: id,
                name: "Dataset " + id,
                points: (function ()
                {
                    var k, ref, results, prev, counter = 0;
                    results                            = [];
                    for (j = k = 1, ref = nums; 1 <= ref ? k <= ref : k >= ref; j = 1 <= ref ? ++k : --k) {
                        if (data.length > 0) {
                            if (typeof data[count - 2].points !== 'undefined' && data[count - 2].points.length > counter && typeof data[count - 2].points[counter].y !== 'undefined') {
                                prev = data[count - 2].points[counter].y;
                            } else {
                                prev = 0;
                            }
                        } else {
                            prev = 0;
                        }

                        counter++;

                        let temp = 0;

                        results.push({
                            x: j,
                            y: temp = y1Seed + Math.round(Math.random() * 5),
                            y0: temp - Math.round(Math.max(1, Math.random() * 5))
                        });
                    }

                    return results;
                })()
            };
            id       = id + 1;
            return tempData;
        };
    })(1);
})();

data = [];
for (i = k = 1; k <= 1; i = ++k) {
    count = i;
    data.push(dataGen2());
}

var diffareachart = new jsOMS.Chart.DiffAreaChart('diffarea-chart');
diffareachart.setData(data);
diffareachart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Bar Chart</h1>
    <div id="bar-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>
<script>
var chart;

var n      = 1, // number of layers
    m      = 10, // number of samples per layer
    stack  = d3.layout.stack(),
    layers = stack(d3.range(n).map(function ()
    {
        return bumpLayer(m, .1);
    }));

function bumpLayer(n, o)
{
    function bump(a)
    {
        var x = 1 / (.1 + Math.random()),
            y = 2 * Math.random() - .5,
            z = 10 / (.1 + Math.random());

        for (var i = 0; i < n; i++) {
            var w = (i / n - y) * z;
            a[i] += x * Math.exp(-w * w);
        }
    }

    var a = [], i;
    for (i = 0; i < n; ++i) a[i] = o + o * Math.random();
    for (i = 0; i < 5; ++i) bump(a);
    return a.map(function (d, i)
    {
        return {x: i, y: Math.max(0, d)};
    });
}
for (let i = 0; i < layers.length; i++) {
    layers[i] = {
        id: i,
        name: 'Dataset ' + i,
        points: layers[i]
    };
}

var barchart = new jsOMS.Chart.BarChart('bar-chart');
barchart.setData(layers);
barchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Grouped Bar Chart</h1>
    <div id="groupedbar-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var chart;

var n      = 3, // number of layers
    m      = 5, // number of samples per layer
    stack  = d3.layout.stack(),
    layers = stack(d3.range(n).map(function ()
    {
        return bumpLayer(m, .1);
    }));
for (let i = 0; i < layers.length; i++) {
    layers[i] = {
        id: i,
        name: 'Dataset ' + i,
        points: layers[i]
    };
}

var groupedbarchart = new jsOMS.Chart.GroupedBarChart('groupedbar-chart');
groupedbarchart.setData(layers);
groupedbarchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Stacked Bar Chart</h1>
    <div id="stackedbar-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var chart;

var n      = 3, // number of layers
    m      = 5, // number of samples per layer
    stack  = d3.layout.stack(),
    layers = stack(d3.range(n).map(function ()
    {
        return bumpLayer(m, .1);
    }));

for (let i = 0; i < layers.length; i++) {
    layers[i] = {
        id: i,
        name: 'Dataset ' + i,
        points: layers[i]
    };
}

var stackedbarchart = new jsOMS.Chart.StackedBarChart('stackedbar-chart');
stackedbarchart.setData(layers);
stackedbarchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Vertical Waterfall Chart</h1>
    <div id="vwaterfall-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var vwaterfallchart = new jsOMS.Chart.VWaterfallChart('vwaterfall-chart');
vwaterfallchart.setData([
    {name: 'EBIT', value: 100}, 
    {name: 'two', value: -20}, 
    {name: 'three', value: 5}, 
    {name: 'four', value: -7}]); 
vwaterfallchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Waterfall Chart</h1>
    <div id="waterfall-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var waterfallchart = new jsOMS.Chart.WaterfallChart('waterfall-chart');
waterfallchart.setData([
    {name: 'EBIT', value: 100}, 
    {name: 'two', value: -20}, 
    {name: 'three', value: 5}, 
    {name: 'four', value: -7}]); 
waterfallchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Column Chart</h1>
    <div id="column-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var chart;

var n      = 1, // number of layers
    m      = 30, // number of samples per layer
    stack  = d3.layout.stack(),
    layers = stack(d3.range(n).map(function ()
    {
        return bumpLayer(m, .1);
    }));

for (let i = 0; i < layers.length; i++) {
    layers[i] = {
        id: i,
        name: 'Dataset ' + i,
        points: layers[i]
    };
}

var columnchart = new jsOMS.Chart.ColumnChart('column-chart');
columnchart.setData(layers);
columnchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Grouped Column Chart</h1>
    <div id="groupedcolumn-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var chart;

var n      = 3, // number of layers
    m      = 10, // number of samples per layer
    stack  = d3.layout.stack(),
    layers = stack(d3.range(n).map(function ()
    {
        return bumpLayer(m, .1);
    }));

for (let i = 0; i < layers.length; i++) {
    layers[i] = {
        id: i,
        name: 'Dataset ' + i,
        points: layers[i]
    };
}

var groupedcolumnchart = new jsOMS.Chart.GroupedColumnChart('groupedcolumn-chart');
groupedcolumnchart.setData(layers);
groupedcolumnchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Stacked Column Chart</h1>
    <div id="stackedcolumn-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var chart;

var n      = 3, // number of layers
    m      = 30, // number of samples per layer
    stack  = d3.layout.stack(),
    layers = stack(d3.range(n).map(function ()
    {
        return bumpLayer(m, .1);
    }));

for (let i = 0; i < layers.length; i++) {
    layers[i] = {
        id: i,
        name: 'Dataset ' + i,
        points: layers[i]
    };
}

var stackedcolumnchart = new jsOMS.Chart.StackedColumnChart('stackedcolumn-chart');
stackedcolumnchart.setData(layers);
stackedcolumnchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Pie Chart</h1>
    <div id="pie-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var c, chart, data, dataGen, i, k, count;

dataGen = (function ()
{
    return (function (id)
    {
        return function ()
        {
            var tempData, j, nums, y1Seed;
            nums     = Math.ceil(Math.random() * 5) + 2;
            y1Seed   = Math.round(Math.random() * 10);
            tempData = {
                id: id,
                name: "Dataset " + id,
                points: (function ()
                {
                    var k, ref, results, prev;
                    results = [];
                    for (j = k = 1, ref = nums; 1 <= ref ? k <= ref : k >= ref; j = 1 <= ref ? ++k : --k) {
                        results.push({
                            name: 'Name ' + j,
                            value: y1Seed + Math.round(Math.random() * 5),
                        });
                    }

                    return results;
                })()
            };
            id       = id + 1;
            return tempData;
        };
    })(1);
})();
data = [];
for (i = k = 1; k <= 1; i = ++k) {
    count = i;
    data.push(dataGen());
}

var piechart = new jsOMS.Chart.PieChart('pie-chart');
piechart.setData(data);
piechart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Donut Chart</h1>
    <div id="donut-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var c, chart, data, dataGen, i, k, count;

data = [];
for (i = k = 1; k <= 1; i = ++k) {
    count = i;
    data.push(dataGen());
}

var donutchart = new jsOMS.Chart.DonutChart('donut-chart');
donutchart.setData(data);
donutchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Stacked Pie Chart</h1>
    <div id="pie-chart2" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
data = [];
for (i = k = 1; k <= 3; i = ++k) {
    count = i;
    data.push(dataGen());
}

var piechart2 = new jsOMS.Chart.PieChart('pie-chart2');
piechart2.setData(data);
piechart2.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Stacked Donut Chart</h1>
    <div id="donut-chart2" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
data = [];
for (i = k = 1; k <= 3; i = ++k) {
    count = i;
    data.push(dataGen());
}

var donutchart2 = new jsOMS.Chart.DonutChart('donut-chart2');
donutchart2.setData(data);
donutchart2.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Gouge Chart</h1>
    <div id="gouge-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Fill Gouge Chart</h1>
    <div id="fill-gouge-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Radar Chart</h1>
    <div id="radar-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Pyramid Chart</h1>
    <div id="pyramid-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Scatterplot Chart</h1>
    <div id="scatterplot-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var scatterplotchart = new jsOMS.Chart.ScatterplotChart('scatterplot-chart');
scatterplotchart.setData([
    {
        id: 1,
        name: 'One',
        points: [
            {x: 5.8, y: 2.7, y0: 5.1},
            {x: 7.1, y: 3.0, y0: 5.9},
            {x: 6.3, y: 2.9, y0: 5.6},
            {x: 6.5, y: 3.0, y0: 5.8},
            {x: 7.6, y: 3.0, y0: 6.6},
            {x: 4.9, y: 2.5, y0: 4.5}
        ]
    }, {
        id: 2,
        name: 'Two',
        points: [
            {x: 7.3, y: 2.9, y0: 6.3},
            {x: 6.7, y: 2.5, y0: 5.8},
            {x: 7.2, y: 3.6, y0: 6.1},
            {x: 6.5, y: 3.2, y0: 5.1},
            {x: 6.4, y: 2.7, y0: 5.3},
            {x: 6.8, y: 3.0, y0: 5.5},
            {x: 5.7, y: 2.5, y0: 5.0}
        ]
    }, {
        id: 3,
        name: 'Three',
        points: [
            {x: 5.8, y: 2.8, y0: 5.1},
            {x: 6.4, y: 3.2, y0: 5.3},
            {x: 6.5, y: 3.0, y0: 5.5},
            {x: 7.7, y: 3.8, y0: 6.7},
            {x: 7.7, y: 2.6, y0: 6.9},
            {x: 6.0, y: 2.2, y0: 5.0},
            {x: 6.9, y: 3.2, y0: 5.7},
            {x: 5.6, y: 2.8, y0: 4.9}
        ]
    }]); 
scatterplotchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Boxplot Chart</h1>
    <div id="boxplot-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Candlestick Chart</h1>
    <div id="candlestick-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var candlestickchart = new jsOMS.Chart.CandlestickChart('candlestick-chart');
candlestickchart.setData([
    {
        id: 1,
        name: 'One',
        points: [
            {x: 2, y0: 2.7, y: 5.1, open: 2.8, close: 4},
            {x: 3, y0: 3.0, y: 5.9, open: 5, close: 4},
            {x: 4, y0: 2.9, y: 5.6, open: 5, close: 5.6},
            {x: 5, y0: 3.0, y: 5.8, open: 4, close: 4},
            {x: 6, y0: 3.0, y: 6.6, open: 5.5, close: 3.5},
            {x: 7, y0: 2.5, y: 4.5, open: 3, close: 3.2}
        ]
    }]); 
candlestickchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>OHLC Chart</h1>
    <div id="highlow-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<script>
var ohlcchart = new jsOMS.Chart.OhlcChart('highlow-chart');
ohlcchart.setData([
    {
        id: 1,
        name: 'One',
        points: [
            {x: 2, y0: 2.7, y: 5.1, open: 2.8, close: 4},
            {x: 3, y0: 3.0, y: 5.9, open: 5, close: 4},
            {x: 4, y0: 2.9, y: 5.6, open: 5, close: 5.6},
            {x: 5, y0: 3.0, y: 5.8, open: 4, close: 4},
            {x: 6, y0: 3.0, y: 6.6, open: 5.5, close: 3.5},
            {x: 7, y0: 2.5, y: 4.5, open: 3, close: 3.2}
        ]
    }]); 
ohlcchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Calendar Chart</h1>
    <div id="calendar-chart" class="chart" style="width: 100%; height: 70px; float: left;"></div>
</section>

<script>
var calendarchart = new jsOMS.Chart.CalendarChart('calendar-chart');
calendarchart.setData([
    {
        id: 1,
        name: '2014',
        points: [
            {x: '2014-10-01', y: 10732.27},
            {x: '2014-1-08', y: 15732.27},
            {x: '2014-09-25', y: 20732.27},
            {x: '2014-04-30', y: 5732.27},
            {x: '2014-08-13', y: 12732.27},
            {x: '2014-08-21', y: 8732.27}
        ]
    }, {
        id: 2,
        name: '2015',
        points: [
            {x: '2015-10-01', y: 10732.27},
            {x: '2015-1-08', y: 15732.27},
            {x: '2015-09-25', y: 20732.27},
            {x: '2015-04-30', y: 5732.27},
            {x: '2015-08-13', y: 12732.27},
            {x: '2015-08-21', y: 8732.27}
        ]
    }, {
        id: 3,
        name: '2016',
        points: [
            {x: '2016-10-01', y: 10732.27},
            {x: '2016-01-08', y: 15732.27},
            {x: '2016-09-25', y: 20732.27},
            {x: '2016-04-30', y: 5732.27},
            {x: '2016-08-13', y: 12732.27},
            {x: '2016-08-21', y: 8732.27}
        ]
    }]); 
calendarchart.draw();
</script>

<section style="float: left; width: 33%;">
    <h1>Gantt Chart</h1>
    <div id="gantt-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Heatmap Chart</h1>
    <div id="map-heat-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Bubblemap Chart</h1>
    <div id="map-bubble-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>Tree Chart</h1>
    <div id="tree-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>

<section style="float: left; width: 33%;">
    <h1>BCG Chart</h1>
    <div id="bcg-chart" class="chart" style="width: 100%; height: 170px; float: left;"></div>
</section>