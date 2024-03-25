<script src="<?= base_url(); ?>lib/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>lib/feather-icons/feather.min.js"></script>
<script src="<?= base_url(); ?>lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>lib/jquery.flot/jquery.flot.js"></script>
<script src="<?= base_url(); ?>lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="<?= base_url(); ?>lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?= base_url(); ?>lib/chart.js/Chart.bundle.min.js"></script>
<script src="<?= base_url(); ?>lib/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>lib/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- Datatables JS -->
<script src="<?= base_url(); ?>lib/prismjs/prism.js"></script>
<script src="<?= base_url(); ?>lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="<?= base_url(); ?>lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="<?= base_url(); ?>lib/select2/js/select2.min.js"></script>

<!-- apex charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

<script src="<?= base_url(); ?>/lib/parsleyjs/parsley.min.js"></script>

<script src="<?= base_url(); ?>assets/js/dashforge.js"></script>
<script src="<?= base_url(); ?>assets/js/dashforge.aside.js"></script>
<script src="<?= base_url(); ?>assets/js/dashforge.sampledata.js"></script>

<script>
  $(function() {
    'use strict'

    ClassicEditor
      .create(document.querySelector('#editor-container'))
      .catch(error => {
        console.error(error);
      });

    ClassicEditor
      .create(document.querySelector('#editor-container2'))
      .catch(error => {
        console.error(error);
      });

    ClassicEditor
      .create(document.querySelector('#editor-container3'))
      .catch(error => {
        console.error(error);
      });

    ClassicEditor
      .create(document.querySelector('#editor-container4'))
      .catch(error => {
        console.error(error);
      });

    var plot = $.plot('#flotChart', [{
      data: df3,
      color: '#69b2f8'
    }, {
      data: df1,
      color: '#d1e6fa'
    }, {
      data: df2,
      color: '#d1e6fa',
      lines: {
        fill: false,
        lineWidth: 1.5
      }
    }], {
      series: {
        stack: 0,
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 0,
          fill: 1
        }
      },
      grid: {
        borderWidth: 0,
        aboveData: true
      },
      yaxis: {
        show: false,
        min: 0,
        max: 350
      },
      xaxis: {
        show: true,
        ticks: [
          [0, ''],
          [8, 'Jan'],
          [20, 'Feb'],
          [32, 'Mar'],
          [44, 'Apr'],
          [56, 'May'],
          [68, 'Jun'],
          [80, 'Jul'],
          [92, 'Aug'],
          [104, 'Sep'],
          [116, 'Oct'],
          [128, 'Nov'],
          [140, 'Dec']
        ],
        color: 'rgba(255,255,255,.2)'
      }
    });


    $.plot('#flotChart2', [{
      data: [
        [0, 55],
        [1, 38],
        [2, 20],
        [3, 70],
        [4, 50],
        [5, 15],
        [6, 30],
        [7, 50],
        [8, 40],
        [9, 55],
        [10, 60],
        [11, 40],
        [12, 32],
        [13, 17],
        [14, 28],
        [15, 36],
        [16, 53],
        [17, 66],
        [18, 58],
        [19, 46]
      ],
      color: '#69b2f8'
    }, {
      data: [
        [0, 80],
        [1, 80],
        [2, 80],
        [3, 80],
        [4, 80],
        [5, 80],
        [6, 80],
        [7, 80],
        [8, 80],
        [9, 80],
        [10, 80],
        [11, 80],
        [12, 80],
        [13, 80],
        [14, 80],
        [15, 80],
        [16, 80],
        [17, 80],
        [18, 80],
        [19, 80]
      ],
      color: '#f0f1f5'
    }], {
      series: {
        stack: 0,
        bars: {
          show: true,
          lineWidth: 0,
          barWidth: .5,
          fill: 1
        }
      },
      grid: {
        borderWidth: 0,
        borderColor: '#edeff6'
      },
      yaxis: {
        show: false,
        max: 80
      },
      xaxis: {
        ticks: [
          [0, 'Jan'],
          [4, 'Feb'],
          [8, 'Mar'],
          [12, 'Apr'],
          [16, 'May'],
          [19, 'Jun']
        ],
        color: '#fff',
      }
    });

    $.plot('#flotChart3', [{
      data: df4,
      color: '#9db2c6'
    }], {
      series: {
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 2,
          fill: true,
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: .5
            }]
          }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 0
      },
      yaxis: {
        show: false,
        min: 0,
        max: 60
      },
      xaxis: {
        show: false
      }
    });

    $.plot('#flotChart4', [{
      data: df5,
      color: '#9db2c6'
    }], {
      series: {
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 2,
          fill: true,
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: .5
            }]
          }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 0
      },
      yaxis: {
        show: false,
        min: 0,
        max: 80
      },
      xaxis: {
        show: false
      }
    });

    $.plot('#flotChart5', [{
      data: df6,
      color: '#9db2c6'
    }], {
      series: {
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 2,
          fill: true,
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: .5
            }]
          }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 0
      },
      yaxis: {
        show: false,
        min: 0,
        max: 80
      },
      xaxis: {
        show: false
      }
    });

    $.plot('#flotChart6', [{
      data: df4,
      color: '#9db2c6'
    }], {
      series: {
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 2,
          fill: true,
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: .5
            }]
          }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 0
      },
      yaxis: {
        show: false,
        min: 0,
        max: 60
      },
      xaxis: {
        show: false
      }
    });

    $.plot('#flotChart7', [{
      data: df5,
      color: '#9db2c6'
    }], {
      series: {
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 2,
          fill: true,
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: .5
            }]
          }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 0
      },
      yaxis: {
        show: false,
        min: 0,
        max: 80
      },
      xaxis: {
        show: false
      }
    });

    $.plot('#flotChart8', [{
      data: df5,
      color: '#9db2c6'
    }], {
      series: {
        shadowSize: 0,
        lines: {
          show: true,
          lineWidth: 2,
          fill: true,
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: .5
            }]
          }
        }
      },
      grid: {
        borderWidth: 0,
        labelMargin: 0
      },
      yaxis: {
        show: false,
        min: 0,
        max: 80
      },
      xaxis: {
        show: false
      }
    });

    $('#vmap').vectorMap({
      map: 'usa_en',
      showTooltip: true,
      backgroundColor: '#fff',
      color: '#d1e6fa',
      colors: {
        fl: '#69b2f8',
        ca: '#69b2f8',
        tx: '#69b2f8',
        wy: '#69b2f8',
        ny: '#69b2f8'
      },
      selectedColor: '#00cccc',
      enableZoom: false,
      borderWidth: 1,
      borderColor: '#fff',
      hoverOpacity: .85
    });


    var ctxLabel = ['6am', '10am', '1pm', '4pm', '7pm', '10pm'];
    var ctxData1 = [20, 60, 50, 45, 50, 60];
    var ctxData2 = [10, 40, 30, 40, 55, 25];

    // Bar chart
    var ctx1 = document.getElementById('chartBar1').getContext('2d');
    new Chart(ctx1, {
      type: 'horizontalBar',
      data: {
        labels: ctxLabel,
        datasets: [{
          data: ctxData1,
          backgroundColor: '#69b2f8'
        }, {
          data: ctxData2,
          backgroundColor: '#d1e6fa'
        }]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false,
          labels: {
            display: false
          }
        },
        scales: {
          yAxes: [{
            gridLines: {
              display: false
            },
            ticks: {
              display: false,
              beginAtZero: true,
              fontSize: 10,
              fontColor: '#182b49'
            }
          }],
          xAxes: [{
            gridLines: {
              display: true,
              color: '#eceef4'
            },
            barPercentage: 0.6,
            ticks: {
              beginAtZero: true,
              fontSize: 10,
              fontColor: '#8392a5',
              max: 80
            }
          }]
        }
      }
    });

  })



  fetch('http://localhost/smm/admin/api_tiktok_ig')
        .then(r => r.json())
        .then((rr) => {
          const xValues = ['TikTok', 'Instagram'];
          const yValues = []
          const barColors = ["#EE1D52", "#9F70FD"];
          // console.log(rr);
          for (var i = 0; i < rr.length; i++) {
            yValues.push(rr[i])
          }

          new Chart("myChart", {
            type: "bar",
            data: {
              labels: xValues,
              datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: barColors,
                borderColor: "#86A7FC",
                data: yValues
              }]
            },
            options: {
              legend: {
                display: false
              },
              scales: {
                yAxes: [{
                  ticks: {
                    min: 0,
                    max: 500000
                  }
                }],
              }
            }
          });

        })

        fetch('http://localhost/smm/admin/api_product_total')
        .then(dd => dd.json())
        .then((ddd) => {
          const x1Values = [];
          const y1Values = [];
          const barColors1 = ["#3C2612", "#F48CA6", "#D48E29", "#362721", "#FFF67E", "#9BCF53", "#9F70FD"];
         
          for (var i = 0; i < ddd.length; i++) {
            x1Values.push(ddd[i]?.product)
            y1Values.push(ddd[i]?.jml)
          }

          new Chart("myChart1", {
            type: "bar",
            data: {
              labels: x1Values,
              datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: barColors1,
                borderColor: "#86A7FC",
                data: y1Values
              }]
            },
            options: {
              legend: {
                display: false
              },
              scales: {
                yAxes: [{
                  ticks: {
                    min: 0,
                    max: 50
                  }
                }],
              }
            }
          });

        })


        fetch('http://localhost/smm/admin/api_total_live_tiktok')
        .then(rs => rs.json())
        .then((rrs) => {
          const x2Values = [];
          const y2Values = [];
          const barColors2 = ["#B5C0D0", "#8E7AB5", "#070F2B", "#8CB9BD"];
          for (var j = 0; j < rrs.length; j++) {
            x2Values.push(rrs[j]?.nama);
            y2Values.push(rrs[j]?.jumlah_live);
          }

          new Chart("myChart2", {
            type: "bar",
            data: {
              labels: x2Values,
              datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: barColors2,
                borderColor: "#86A7FC",
                data: y2Values
              }]
            },
            options: {
              legend: {
                display: false
              },
              scales: {
                yAxes: [{
                  ticks: {
                    min: 0,
                    max: 1000
                  }
                }],
              }
            }
          });

        });        

  
  const x3Values = ['TikTok', 'Instagram'];
  const y3Values = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];
  const barColors3 = ["#EE1D52", "#9F70FD"];

  new Chart("myChart3", {
    type: "bar",
    data: {
      labels: x3Values,
      datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: barColors,
        borderColor: "#86A7FC",
        data: y3Values
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            min: 0,
            max: 50
          }
        }],
      }
    }
  });

  const x4Values = ['Glorious Moonlight', 'Senso di Blossom', 'Brotherhood Story', 'Magic of Nature'];
  const y4Values = [1, 3, 4, 4];
  const barColors4 = ["#EE1D52", "#9F70FD"];

  new Chart("myChart4", {
    type: "pie",
    data: {
      labels: x4Values,
      datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: barColors,
        borderColor: "#86A7FC",
        data: y4Values
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            min: 0,
            max: 50
          }
        }],
      }
    }
  });

  $('#example1').DataTable({
    responsive: true,
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_ items/page',
    }
  });

  $.noConflict();
  jQuery(document).ready(function($) {
    // Your datepicker initialization here
    $('#dateFrom').datepicker();
  });
  
</script>
</body>

</html>