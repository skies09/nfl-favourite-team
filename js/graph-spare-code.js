function show_stacked_CCH_PLA_UNI_STX(ndx) {



    var team_dim = ndx.dimension(dc.pluck("TEAM"));
        var cchGroup = team_dim.group().reduceSum(dc.pluck('CCH'));
            var plaGroup = team_dim.group().reduceSum(dc.pluck('PLA'));
                var uniGroup = team_dim.group().reduceSum(dc.pluck('UNI'));
    dc.barChart("#cch-pla-uni-stx-chart")
        .width(350)
        .height(250)
        .dimension(team_dim)
        .group(cchGroup, "CCH")
        .stack(plaGroup, "PLA")
        .stack(uniGroup, "UNI")
        .valueAccessor(function(d) {
            if (d.value.total > 0) {
                return (d.value.match / d.value.total) * 100
            }
            else {
                return 0;
            }
            return d.value.percent * 100;
        })
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .xAxisLabel("TEAM")
        .legend(dc.legend().x(270).y(170).itemHeight(15).gap(5))
        .margins({ top: 10, right: 100, bottom: 30, left: 30 });
}
