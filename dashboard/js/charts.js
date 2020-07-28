$(function () {
  /* Check status of AJAX calls
  ----------------------------------------------------------------- */
  $(document)
    // Runs before the AJAX request is sent
    .ajaxSend(function (e, xhr, opt) {
      console.log("Requesting " + opt.url);
    })
    // Runs when the AJAX request completes with an error
    .ajaxError(function (e, xhr, opt) {
      console.log("Completed with error: " + opt.url);
      console.log(e);
    })
    // Runs when an AJAX request completes successfully
    .ajaxSuccess(function (e, xhr, opt) {
      console.log("Completed successfully: " + opt.url);
    })
    // Runs when all AJAX requests have completed
    .ajaxStop(function () {
      console.log("All AJAX requests completed");
    });

  /* Set chart option
  ----------------------------------------------------------------- */
  var options = {
    chart: {
      height: 350,
      parentHeightOffset: 10,
      width: "100%",
      type: "line",
      foreColor: "#ffffff",
      background: "#000",
      animations: {
        enabled: true,
        easing: "easeinout",
        speed: 800,
        animateGradually: {
          enabled: false,
        },
        dynamicAnimation: {
          enabled: true,
        },
      },
      toolbar: {
        show: true,
        tools: {
          download: true,
          selection: false,
          zoom: false,
          zoomin: false,
          zoomout: false,
          pan: false,
          reset: false,
        },
      },
    },

    dataLabels: {
      enabled: false,
      textAnchor: "middle",
      distributed: false,
      offsetX: 0,
      offsetY: -5,
      style: {
        fontSize: "10px",
        fontWeight: "600",
      },
      background: {
        enabled: false,
      },
    },

    grid: {
      show: true,
      borderColor: "#90A4AE",
      strokeDashArray: 2,
      position: "back",
      xaxis: {
        lines: {
          show: true,
        },
      },
      yaxis: {
        lines: {
          show: true,
        },
      },
      padding: {
        top: 0,
        right: 10,
        bottom: 5,
        left: 15,
      },
    },

    legend: {
      position: "top",
      horizontalAlign: "center",
      fontSize: "10px",
      fontFamily: 'ShermanSans, "Trebuchet MS", Tahoma, sans-serif',
      offsetY: -5,
      markers: {
        width: 10,
        height: 10,
      },
      itemMargin: {
        horizontal: 5,
        vertical: 3,
      },
      onItemClick: {
        toggleDataSeries: true,
      },
      onItemHover: {
        highlightDataSeries: true,
      },
    },

    markers: {
      size: 4,
      strokeWidth: 0,
      hover: {
        size: 4,
      },
    },

    noData: {
      text: "Loading...",
    },

    responsive: [
      /* Devices 1000px and below */
      {
        breakpoint: 1000,

        options: {
          chart: {
            height: 300,
          },

          grid: {
            padding: {
              top: 0,
              right: 20,
              bottom: 5,
              left: 15,
            },
          },
        },
      },

      /* Devices 600px and below */
      {
        breakpoint: 600,

        options: {
          chart: {
            height: 300,
          },

          grid: {
            padding: {
              top: 0,
              right: 20,
              bottom: 5,
              left: 10,
            },
          },

          xaxis: {
            labels: {
              formatter: (value) => {
                return Math.round(value);
              },
              style: {
                colors: "#999",
                fontSize: "8px",
                fontFamily: 'ShermanSans, "Trebuchet MS", Tahoma, sans-serif',
              },
            },
          },

          yaxis: {
            type: "numeric",
            min: 40,
            max: 85,
            tickAmount: 9,
            labels: {
              formatter: (value) => {
                return Math.round(value);
              },
              style: {
                colors: "#999",
                fontSize: "8px",
                fontFamily: 'ShermanSans, "Trebuchet MS", Tahoma, sans-serif',
              },
            },
          },
        },
      },
    ],

    series: [],

    stroke: {
      curve: "straight",
      width: 2,
    },

    theme: {
      mode: "dark",
      palette: "palette8",
    },

    title: {
      text: "Age by Year",
      align: "center",
      offsetY: 10,
      style: {
        fontSize: "18px",
        fontWeight: "400",
        fontFamily: 'ShermanSans, "Trebuchet MS", Tahoma, sans-serif',
      },
    },

    tooltip: {
      enabled: true,
      x: {
        show: false,
      },
      y: {
        show: true,
        formatter: (value) => {
          parseFloat(value);
          return value.toFixed(1);
        },
      },
      shared: false,
      fixed: {
        enabled: true,
        position: "topRight",
      },
    },

    xaxis: {
      type: "numeric",
      tickAmount: "dataPoints",
      axisBorder: {
        show: true,
        color: "#999",
        height: 1,
        width: "100%",
        offsetX: 0,
        offsetY: 0,
      },
      axisTicks: {
        show: true,
        borderType: "dotted",
        color: "#999",
        height: 6,
      },
      labels: {
        formatter: (value) => {
          return Math.round(value);
        },
        style: {
          colors: "#999",
          fontSize: "10px",
          fontFamily: 'ShermanSans, "Trebuchet MS", Tahoma, sans-serif',
        },
      },
      crosshairs: {
        show: false,
      },
    },

    yaxis: {
      type: "numeric",
      min: 40,
      max: 85,
      tickAmount: 9,
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        formatter: (value) => {
          return Math.round(value);
        },
        style: {
          colors: "#999",
          fontSize: "10px",
          fontFamily: 'ShermanSans, "Trebuchet MS", Tahoma, sans-serif',
        },
      },
      crosshairs: {
        show: false,
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
  console.log("Chart rendered");

  /* Fetch JSON data from file and include in chart
  ----------------------------------------------------------------- */
  setTimeout(function () {
    console.log("Getting JSON data...");

    $.when(
      $.getJSON("../json/id_data.json", function (response) {
        chart.updateSeries([
          {
            name: "Intellectual disability",
            data: response,
          },
        ]);
      }),

      $.getJSON("../json/cp_data.json", function (response) {
        chart.appendSeries({
          name: "Cerebral Palsy",
          data: response,
        });
      }),

      $.getJSON("../json/ds_data.json", function (response) {
        chart.appendSeries({
          name: "Down syndrome",
          data: response,
        });
      }),

      $.getJSON("../json/ordd_data.json", function (response) {
        chart.appendSeries({
          name: "Other rare developmental disabilities",
          data: response,
        });
      }),

      $.getJSON("../json/no_idd_data.json", function (response) {
        chart.appendSeries({
          name: "No IDD",
          data: response,
        });
      })
    ).then(function () {
      console.log("Emptying chart...");
      $("#chart").empty();
      console.log("Chart is empty");
      chart.render();
      console.log("Chart rerendered");
    });
  }, 100);
});
