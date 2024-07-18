$( function() {
    var dateFormat = "dd-mm-yy",
      from = $( "#start_date" )
        .datepicker({
            dateFormat:dateFormat,
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
          calc_days();
        }),
      to = $( "#end_date" ).datepicker({
        dateFormat:dateFormat,
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
        calc_days();
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }

    $(".date").datepicker({
        dateFormat:dateFormat,
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
    });

  } );


  jQuery(document).ready(function () {
    jQuery("#star   t_date").on('input', function () {
        //alert();
        calc_days();
        check_start_date();
    });
    jQuery("#end_date").on('input', function () {
        calc_days();
    });
    jQuery("#rate").on('input', function () {

        let days = $("#days").val();
        let rate = $(this).val();

        $("#total").val(rate * days);

    });
    jQuery("#total").on('input', function () {
        let days = $("#days").val();
        let total = $(this).val();
        $("#rate").val(total / days);
    });
});
function check_start_date()
{
    let last_date = '<?php echo $last_date; ?>';
    let start_date = jQuery("#start_date").val();
    if (last_date != '-' && start_date.length == 10)
    {

        const [sdate, smonth, syear] = start_date.split('-');
        const [edate, emonth, eyear] = last_date.split('-');
        let sd = new Date(+syear, +smonth - 1, +sdate);
        let ld = new Date(+eyear, +emonth - 1, +edate);
        if (sd <= ld)
        {
            alert('start date is less than last date ');
        }

    }
}
function calc_days()
{
    //alert();
    let start_date = jQuery("#start_date").val();
    let end_date = jQuery("#end_date").val();

    //const str = ;
    if (start_date != "" && end_date != "")
    {
        let rate = jQuery("#rate").val();
        if (rate == "")
        {
            rate = 0;
        }
        const [sdate, smonth, syear] = start_date.split('-');
        const [edate, emonth, eyear] = end_date.split('-');
        let sd = new Date(+syear, +smonth - 1, +sdate);
        let ed = new Date(+eyear, +emonth - 1, +edate);

        var millisBetween = sd.getTime() - ed.getTime();
        var days = millisBetween / (1000 * 3600 * 24);
        var days = Math.round(Math.abs(days) + 1);
        //alert(days);
        $("#days").val(days);

        var total_amt = rate * days;
        $("#total").val(total_amt);

    }

}

$(document).ready(function () {
    $("#shift").on("change", function () {
        var shift = $(this).val();
        $("#tiffin").val('no_tiffin');
        $("#tiffin option").each(function () {
            $(this).prop('disabled', false);
            if (shift == 'morning')
            {
                if ($(this).val() != 'no_tiffin' && $(this).val() != 'morning_tiffin')
                {
                    $(this).prop('disabled', true);
                }
            } else if (shift == 'evening') {

                if ($(this).val() != 'no_tiffin' && $(this).val() != 'evening_tiffin')
                {
                    $(this).prop('disabled', true);
                }
            } else {
                $(this).prop('disabled', false);
            }
        });

    });

});