//!!!!!!!!!!!!!!!!
  // extra functions
  //!!!!!!!!!!!!!!!!
var MINOVATE = MINOVATE || {};

$(function() {
  MINOVATE.extra = {

    init: function() {
      // MINOVATE.extra.daterangePicker();
      MINOVATE.extra.datepicker();
      MINOVATE.extra.chosen();
    },

    

    //initialize date range picker on elements
    // daterangePicker: function() {

    //   if ($pickDateEl.length > 0) {
    //     $pickDateEl.each(function() {
    //       var element = $(this);

    //       element.find('span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    //       element.daterangepicker({
    //         format: 'MM/DD/YYYY',
    //         startDate: moment().subtract(29, 'days'),
    //         endDate: moment(),
    //         minDate: '01/01/2012',
    //         maxDate: '12/31/2015',
    //         dateLimit: { days: 60 },
    //         showDropdowns: true,
    //         showWeekNumbers: true,
    //         timePicker: false,
    //         timePickerIncrement: 1,
    //         timePicker12Hour: true,
    //         ranges: {
    //           'Today': [moment(), moment()],
    //           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    //           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //           'This Month': [moment().startOf('month'), moment().endOf('month')],
    //           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //         },
    //         opens: 'left',
    //         drops: 'down',
    //         buttonClasses: ['btn', 'btn-sm'],
    //         applyClass: 'btn-success',
    //         cancelClass: 'btn-default',
    //         separator: ' to ',
    //         locale: {
    //           applyLabel: 'Submit',
    //           cancelLabel: 'Cancel',
    //           fromLabel: 'From',
    //           toLabel: 'To',
    //           customRangeLabel: 'Custom',
    //           daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
    //           monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    //           firstDay: 1
    //         }
    //       }, function(start, end, label) {
    //         console.log(start.toISOString(), end.toISOString(), label);
    //         element.find('span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    //       });

    //     });
    //   }

    // },
    chosen: function() {
      if ($chosenEl.length > 0) {
        $chosenEl.each(function() {
          var element = $(this);
          element.on('chosen:ready', function(e, chosen) {
            var width = element.css("width");
            element.next().find('.chosen-choices').addClass('form-control');
            element.next().css("width", width);
            element.next().find('.search-field input').css("width", "125px");
          }).chosen();
        });
      }
    },
    datepicker: function() {
      if ($datepickerEl.length > 0) {
        $datepickerEl.each(function() {
          var element = $(this);
          var format = element.data('format')
          element.datetimepicker({
            format: format
          });
        });
      }
    },
  };
  MINOVATE.documentOnReady = {

    init: function(){
      // MINOVATE.global.init();
      // MINOVATE.header.init();
      // MINOVATE.navbar.init();
      // MINOVATE.documentOnReady.windowscroll();
      // MINOVATE.tiles.init();
      MINOVATE.extra.init();
      // MINOVATE.documentOnReady.setSidebar();
    },
  };
  var $datepickerEl = $('.datepicker');
  $chosenEl = $('.chosen-select');
  $(document).ready( MINOVATE.documentOnReady.init );
});