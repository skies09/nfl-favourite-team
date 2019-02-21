queue()
    .defer(d3.csv, "/data/nfl-data.csv")
    .await(makeGraphs);

function makeGraphs(error, nflData) {
    var ndx = crossfilter(nflData);
    console.log(nflData)

    show_team_selector(ndx);
    show_stacked_CCH_PLA_UNI_STX(ndx);
    show_stacked_TRD_FRL_OWN(ndx);
    show_BWG(ndx);
    show_FUT(ndx);
    show_BNG(ndx);
    show_AFF(ndx);

    dc.renderAll();
}

function show_team_selector(ndx) {
    var teamDim = ndx.dimension(dc.pluck('TEAM'));
    var teamSelect = teamDim.group();

    dc.selectMenu("#team-selector")
        .dimension(teamDim)
        .group(teamSelect);
}

function show_stacked_CCH_PLA_UNI_STX(ndx) {

    var team_dim = ndx.dimension(dc.pluck("TEAM"));
    var cchGroup = team_dim.group().reduceSum(dc.pluck('CCH'));
    var plaGroup = team_dim.group().reduceSum(dc.pluck('PLA'));
    var uniGroup = team_dim.group().reduceSum(dc.pluck('UNI'));
    var stxGroup = team_dim.group().reduceSum(dc.pluck('STX'));

    dc.barChart("#cch-pla-uni-stx-chart")
        .width(800)
        .height(450)
        .dimension(team_dim)
        .group(cchGroup, "Coaching")
        .stack(plaGroup, "Players")
        .stack(uniGroup, "Uniform")
        .stack(stxGroup, "Stadium Experience")
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .legend(dc.legend().x(100).y(0).itemHeight(15).gap(5))
        .margins({ top: 10, right: 50, bottom: 95, left: 75 });
}

function show_stacked_TRD_FRL_OWN(ndx) {

    var team_dim = ndx.dimension(dc.pluck("TEAM"));
    var trdGroup = team_dim.group().reduceSum(dc.pluck('TRD'));
    var frlGroup = team_dim.group().reduceSum(dc.pluck('FRL'));
    var ownGroup = team_dim.group().reduceSum(dc.pluck('OWN'));

    dc.barChart("#trd-frl-own-chart")
        .width(800)
        .height(450)
        .dimension(team_dim)
        .group(trdGroup, "Tradition")
        .stack(frlGroup, "Fan Relations")
        .stack(ownGroup, "Ownership")
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .legend(dc.legend().x(100).y(20).itemHeight(15).gap(5))
        .margins({ top: 30, right: 50, bottom: 95, left: 75 });
}


function show_BWG(ndx) {
    var team_dim = ndx.dimension(dc.pluck('TEAM'));
    var bwgGroup = team_dim.group().reduceSum(dc.pluck('BWG'));

    dc.barChart("#BWG-chart")
        .width(500)
        .height(250)
        .margins({ top: 10, right: 20, bottom: 80, left: 50 })
        .dimension(team_dim)
        .group(bwgGroup)
        .transitionDuration(500)
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .yAxisLabel("Rating")
        .yAxis().ticks(10);
}

function show_FUT(ndx) {
    var team_dim = ndx.dimension(dc.pluck('TEAM'));
    var futGroup = team_dim.group().reduceSum(dc.pluck('FUT'));

    dc.barChart("#FUT-chart")
        .width(500)
        .height(250)
        .margins({ top: 10, right: 20, bottom: 80, left: 50 })
        .dimension(team_dim)
        .group(futGroup)
        .transitionDuration(500)
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .yAxisLabel("Rating")
        .yAxis().ticks(10);
}

function show_BNG(ndx) {
    var team_dim = ndx.dimension(dc.pluck('TEAM'));
    var bngGroup = team_dim.group().reduceSum(dc.pluck('BNG'));

    dc.barChart("#BNG-chart")
        .width(500)
        .height(250)
        .margins({ top: 10, right: 20, bottom: 80, left: 50 })
        .dimension(team_dim)
        .group(bngGroup)
        .transitionDuration(500)
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .yAxisLabel("Rating")
        .yAxis().ticks(10);
}

function show_AFF(ndx) {
    var team_dim = ndx.dimension(dc.pluck('TEAM'));
    var affGroup = team_dim.group().reduceSum(dc.pluck('AFF'));

    dc.barChart("#AFF-chart")
        .width(500)
        .height(250)
        .margins({ top: 10, right: 20, bottom: 80, left: 50 })
        .dimension(team_dim)
        .group(affGroup)
        .transitionDuration(500)
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .yAxisLabel("Rating")
        .yAxis().ticks(10);
}
