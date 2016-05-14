(function($) {

  var addRaderChart = function($element, labelData, config, raderDatasets, score) {
    var canvas = $element.get(0);
    if (!canvas || typeof canvas.getContext !== 'function') {
      return;
    }
    var raderData = {
      labels: labelData,
      datasets: raderDatasets,
    };
    var ctx = canvas.getContext('2d');
    if (!isValidData(score)) {
      config.onAnimationComplete = function() {
        ctx.fillStyle = '#999';
        ctx.fillText('まだ評点がありません', $element.width() / 2, $element.height() / 2 + 5);
      };
    }
    setTimeout(function() {
      new Chart(ctx).Radar(raderData, config);
    }, 1);
  };

  var isValidData = function(data) {
    var sum = 0;
    $.each(data, function(index, value) {
      sum += parseFloat(value);
    });
    return 0 < sum;
  };

  var getNullArray = function(length) {
    var nullArray = [];
    for (var i = 0; i < length; i++) {
      nullArray.push(null);
    }
    return nullArray;
  };

  var drawRaderChart = function() {
    var $chart = $('body').find('.rader-chart').first();
    if ($chart.length === 0) {
      return;
    }
    var score = $chart.data('score').split(',');
    var valid = isValidData(score);
    if (!valid) {
      score = getNullArray(score.length);
    }

    var config = {
      animation: true,
      scaleOverride: true,
      scaleSteps: 5,
      scaleStepWidth: 1,
      scaleStartValue: 0,
      tooltipTemplate: '<%=value%>',
      showTooltips: valid
    };

    var raderDatasets = [{
      fillColor: 'rgba(238,135,21,0.1)',
      strokeColor: 'rgba(238,135,21,1)',
      pointColor: 'rgba(238,135,21,1)',
      pointStrokeColor: '#fff',
      pointHighlightFill: '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data: score
    }];

    // for mobilFe
    if ($chart.hasClass('minimal')) {
      config.animation = false;
      config.pointLabelFontSize = 11;
      config.pointLabelFontStyle = 'bold';
    }
    var labels = $chart.data('label').split(',');
    addRaderChart($chart, labels, config, raderDatasets, score);
  };

  $(function() {
    drawRaderChart();
  });

})(jQuery);
