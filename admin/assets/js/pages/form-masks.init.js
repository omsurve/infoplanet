
/*var cleaveDate, cleaveDate2, cleaveDateFormat, cleaveTime, cleaveTimeFormat, cleaveNumeral, cleaveDelimiter, cleaveDelimiters, cleavePrefix, cleaveBlocks;
document.querySelector("#start_date") && (cleaveDate = new Cleave("#start_date", {date: !0, delimiter: "-", datePattern: ["d", "m", "Y"]})),
        document.querySelector("#receipt-date") && (cleaveDate = new Cleave("#receipt-date", {date: !0, delimiter: "-", datePattern: ["d", "m", "Y"]})),
        document.querySelector("#credit_date") && (cleaveDate = new Cleave("#credit_date", {date: !0, delimiter: "-", datePattern: ["d", "m", "Y"]})),
        document.querySelector(".date") && (cleaveDate = new Cleave(".date", {date: !0, delimiter: "-", datePattern: ["d", "m", "Y"]})),
        document.querySelector("#end_date") && (cleaveDate = new Cleave("#end_date", {date: !0, delimiter: "-", datePattern: ["d", "m", "Y"]}));
//receipt-date


*/









$( "#receipt-date,#credit_date,.date" )
        .datepicker({
            dateFormat:'dd-mm-yy',
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        
        });