// INIT DATATABLES
$(function () {
	// Init
    var spinner = $( ".spinner" ).spinner();
    var table = $('#table_id').dataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );

    var tableTools = new $.fn.dataTable.TableTools( table, {
    	"sSwfPath": "http://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf",
        "buttons": [
            "copy",
            "csv",
            "xls",
            "pdf",
            { "type": "print", "buttonText": "Print me!" }
        ]
    } );
    $(".DTTT_container").css("float","right");
});


