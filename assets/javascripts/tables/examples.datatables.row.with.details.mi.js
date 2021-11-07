/*
Name: 			Tables / Advanced - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.3.0
*/

(function( $ ) {

	'use strict';

	//<td>1{$data.seq_numb}</td>
    //<td>3{$data.mi_title}</td>
    //<td class="hidden">3{$data.ref_cde}</td>
    //<td class="hidden">4{$data.code}</td>   
	//<td class="hidden">5{$data.mi_numb}</td>
	//<td class="hidden">6{$data.mi_remark}</td>
	//<td class="hidden">7{$data.mi_ref}</td>
	//<td class="hidden">8{$data.book_dte}</td>
	//<td class="hidden">9{$data.updt_by}</td>
	//<button type="button" class="mb-xs mt-xs mr-xs btn btn-xs btn-primary">Extra Small Button</button>

	// <th>Name</th>
    //                     <!-- <th>MI Number</th> -->
    //                     <th>Contact Person</th>
    //                     <th>phone</th>
    //                     <th>Email</th>
    //                     <th class="hidden">6Dessignation</th>
    //                     <th class="hidden">7Country</th>
    //                     <th class="hidden">8State</th>
    //                     <th class="hidden">9City</th>
    //                     <th class="hidden">10updt_by</th>


	

	var datatableInit = function() {
		var $table = $('#datatable-details');

		// format function for row details
		var fnFormatDetails = function( datatable, tr ) {
			var data = datatable.fnGetData( tr );

			return [
				'<table class="table mb-none">',
					'<tr class="b-top-none">',
						'<td><div class="row show-grid">'
						+ '<div class="col-md-2"><span class="show-grid-block">MI Number</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"> : </span></div>'
						+ '<div class="col-md-2"><span class="show-grid-block">' + data[4] + '</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"></span></div>'
						+ '<div class="col-md-2"><span class="show-grid-block">Book date</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"> : </span></div>'
						+ '<div class="col-md-2"><span class="show-grid-block">' + data[5] + '</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"></span></div>'
						+ '</div></td>',
					'<tr class="b-top-none">',
						'<td><div class="row show-grid">'
						+ '<div class="col-md-2"><span class="show-grid-block">Update by</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"> : </span></div>'
						+ '<div class="col-md-2"><span class="show-grid-block">' + data[6] + '</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"></span></div>'
						+ '<div class="col-md-2"><span class="show-grid-block">Value Date</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"> : </span></div>'
						+ '<div class="col-md-2"><span class="show-grid-block">' + data[7] + '</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"></span></div>'
						+ '</div></td>',
					'<tr class="b-top-none">',
						'<td><div class="row show-grid">'
						+ '<div class="col-md-2"><span class="show-grid-block">Remark</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"> : </span></div>'
						+ '<div class="col-md-9"><span class="show-grid-block">' + data[8] + '</span></div>'
						+ '</div></td>',
					'<tr class="b-top-none">',
						'<td><div class="row show-grid">'
						+ '<div class="col-md-2"><span class="show-grid-block">Reference</span></div>'
						+ '<div class="col-md-1"><span class="show-grid-block"> : </span></div>'
						+ '<div class="col-md-9"><span class="show-grid-block">' + data[9] + '</span></div>'
						+ '</div></td>',
							
					'</tr>',
					
				'</div>'
			].join('');
		};

		// insert the expand/collapse column
		var th = document.createElement( 'th' );
		var td = document.createElement( 'td' );
		td.innerHTML = '<i data-toggle class="fa fa-plus-square-o text-primary h5 m-none" style="cursor: pointer;"></i>';
		td.className = "text-center";

		$table
			.find( 'thead tr' ).each(function() {
				this.insertBefore( th, this.childNodes[0] );
			});

		$table
			.find( 'tbody tr' ).each(function() {
				this.insertBefore(  td.cloneNode( true ), this.childNodes[0] );
			});

		// initialize
		var datatable = $table.dataTable({
			aoColumnDefs: [{
				bSortable: false,
				aTargets: [ 0 ]
			}],
			aaSorting: [
				[1, 'asc']
			]
		});

		// add a listener
		$table.on('click', 'i[data-toggle]', function() {
			var $this = $(this),
				tr = $(this).closest( 'tr' ).get(0);

			if ( datatable.fnIsOpen(tr) ) {
				$this.removeClass( 'fa-minus-square-o' ).addClass( 'fa-plus-square-o' );
				datatable.fnClose( tr );
			} else {
				$this.removeClass( 'fa-plus-square-o' ).addClass( 'fa-minus-square-o' );
				datatable.fnOpen( tr, fnFormatDetails( datatable, tr), 'details' );
			}
		});
	};

	$(function() {
		datatableInit();
	});

}).apply( this, [ jQuery ]);