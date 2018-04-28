<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js" datatables=""></script>

		<link rel="stylesheet" type="text/css" href="/css/normalize.css">

		<link rel="stylesheet" type="text/css" href="/css/result-light.css">

		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css">

		<script type="text/javascript" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>

		<style type="text/css">
		</style>

		<title>DataTables</title>

	</head>

	<body>
		<div id="example_wrapper" class="dataTables_wrapper">
			<div class="dataTables_length" id="example_length">
				<label>Show
					<select name="example_length" aria-controls="example" class="">
						<option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
					</select> entries</label>
			</div>
			<div id="example_filter" class="dataTables_filter">
				<label>Search:
					<input type="search" class="" aria-controls="example">
				</label>
			</div>
			<table id="example" class="display dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
				<thead>
					<tr role="row">
						<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 54px;">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 157px;">Age</th><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 157px;" aria-sort="ascending">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 94px;">Office</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th>
					</tr>
				</tfoot>

				<tbody>

					<tr role="row" class="odd">
						<td class="">Tiger Nixon</td>
						<td class="">
						<input type="text" id="row-1-age" name="row-1-age" value="61">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-1-position" name="row-1-position" value="System Architect">
						</td>
						<td>
						<select size="1" id="row-1-office" name="row-1-office">
							<option value="Edinburgh" selected="selected"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Sonya Frost</td>
						<td class="">
						<input type="text" id="row-10-age" name="row-10-age" value="23">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-10-position" name="row-10-position" value="Software Engineer">
						</td>
						<td>
						<select size="1" id="row-10-office" name="row-10-office">
							<option value="Edinburgh" selected="selected"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Jena Gaines</td>
						<td class="">
						<input type="text" id="row-11-age" name="row-11-age" value="30">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-11-position" name="row-11-position" value="Office Manager">
						</td>
						<td>
						<select size="1" id="row-11-office" name="row-11-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London" selected="selected"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Quinn Flynn</td>
						<td class="">
						<input type="text" id="row-12-age" name="row-12-age" value="22">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-12-position" name="row-12-position" value="Support Lead">
						</td>
						<td>
						<select size="1" id="row-12-office" name="row-12-office">
							<option value="Edinburgh" selected="selected"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Charde Marshall</td>
						<td class="">
						<input type="text" id="row-13-age" name="row-13-age" value="36">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-13-position" name="row-13-position" value="Regional Director">
						</td>
						<td>
						<select size="1" id="row-13-office" name="row-13-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco" selected="selected"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Haley Kennedy</td>
						<td class="">
						<input type="text" id="row-14-age" name="row-14-age" value="43">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-14-position" name="row-14-position" value="Senior Marketing Designer">
						</td>
						<td>
						<select size="1" id="row-14-office" name="row-14-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London" selected="selected"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Tatyana Fitzpatrick</td>
						<td class="">
						<input type="text" id="row-15-age" name="row-15-age" value="19">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-15-position" name="row-15-position" value="Regional Director">
						</td>
						<td>
						<select size="1" id="row-15-office" name="row-15-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London" selected="selected"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Michael Silva</td>
						<td class="">
						<input type="text" id="row-16-age" name="row-16-age" value="66">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-16-position" name="row-16-position" value="Marketing Designer">
						</td>
						<td>
						<select size="1" id="row-16-office" name="row-16-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London" selected="selected"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Paul Byrd</td>
						<td class="">
						<input type="text" id="row-17-age" name="row-17-age" value="64">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-17-position" name="row-17-position" value="Chief Financial Officer (CFO)">
						</td>
						<td>
						<select size="1" id="row-17-office" name="row-17-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York" selected="selected"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Gloria Little</td>
						<td class="">
						<input type="text" id="row-18-age" name="row-18-age" value="59">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-18-position" name="row-18-position" value="Systems Administrator">
						</td>
						<td>
						<select size="1" id="row-18-office" name="row-18-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York" selected="selected"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Bradley Greer</td>
						<td class="">
						<input type="text" id="row-19-age" name="row-19-age" value="41">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-19-position" name="row-19-position" value="Software Engineer">
						</td>
						<td>
						<select size="1" id="row-19-office" name="row-19-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London" selected="selected"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Garrett Winters</td>
						<td class="">
						<input type="text" id="row-2-age" name="row-2-age" value="63">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-2-position" name="row-2-position" value="Accountant">
						</td>
						<td>
						<select size="1" id="row-2-office" name="row-2-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo" selected="selected"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Dai Rios</td>
						<td class="">
						<input type="text" id="row-20-age" name="row-20-age" value="35">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-20-position" name="row-20-position" value="Personnel Lead">
						</td>
						<td>
						<select size="1" id="row-20-office" name="row-20-office">
							<option value="Edinburgh" selected="selected"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Jenette Caldwell</td>
						<td class="">
						<input type="text" id="row-21-age" name="row-21-age" value="30">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-21-position" name="row-21-position" value="Development Lead">
						</td>
						<td>
						<select size="1" id="row-21-office" name="row-21-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York" selected="selected"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Yuri Berry</td>
						<td class="">
						<input type="text" id="row-22-age" name="row-22-age" value="40">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-22-position" name="row-22-position" value="Chief Marketing Officer (CMO)">
						</td>
						<td>
						<select size="1" id="row-22-office" name="row-22-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York" selected="selected"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Caesar Vance</td>
						<td class="">
						<input type="text" id="row-23-age" name="row-23-age" value="21">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-23-position" name="row-23-position" value="Pre-Sales Support">
						</td>
						<td>
						<select size="1" id="row-23-office" name="row-23-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York" selected="selected"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Doris Wilder</td>
						<td class="">
						<input type="text" id="row-24-age" name="row-24-age" value="23">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-24-position" name="row-24-position" value="Sales Assistant">
						</td>
						<td>
						<select size="1" id="row-24-office" name="row-24-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Angelica Ramos</td>
						<td class="">
						<input type="text" id="row-25-age" name="row-25-age" value="47">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-25-position" name="row-25-position" value="Chief Executive Officer (CEO)">
						</td>
						<td>
						<select size="1" id="row-25-office" name="row-25-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London" selected="selected"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Gavin Joyce</td>
						<td class="">
						<input type="text" id="row-26-age" name="row-26-age" value="42">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-26-position" name="row-26-position" value="Developer">
						</td>
						<td>
						<select size="1" id="row-26-office" name="row-26-office">
							<option value="Edinburgh" selected="selected"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Jennifer Chang</td>
						<td class="">
						<input type="text" id="row-27-age" name="row-27-age" value="28">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-27-position" name="row-27-position" value="Regional Director">
						</td>
						<td>
						<select size="1" id="row-27-office" name="row-27-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Brenden Wagner</td>
						<td class="">
						<input type="text" id="row-28-age" name="row-28-age" value="28">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-28-position" name="row-28-position" value="Software Engineer">
						</td>
						<td>
						<select size="1" id="row-28-office" name="row-28-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco" selected="selected"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Fiona Green</td>
						<td class="">
						<input type="text" id="row-29-age" name="row-29-age" value="48">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-29-position" name="row-29-position" value="Chief Operating Officer (COO)">
						</td>
						<td>
						<select size="1" id="row-29-office" name="row-29-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco" selected="selected"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Ashton Cox</td>
						<td class="">
						<input type="text" id="row-3-age" name="row-3-age" value="66">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-3-position" name="row-3-position" value="Junior Technical Author">
						</td>
						<td>
						<select size="1" id="row-3-office" name="row-3-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco" selected="selected"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="even">
						<td class="">Shou Itou</td>
						<td class="">
						<input type="text" id="row-30-age" name="row-30-age" value="20">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-30-position" name="row-30-position" value="Regional Marketing">
						</td>
						<td>
						<select size="1" id="row-30-office" name="row-30-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo" selected="selected"> Tokyo </option>
						</select></td>
					</tr>
					<tr role="row" class="odd">
						<td class="">Michelle House</td>
						<td class="">
						<input type="text" id="row-31-age" name="row-31-age" value="37">
						</td>
						<td class="sorting_1">
						<input type="text" id="row-31-position" name="row-31-position" value="Integration Specialist">
						</td>
						<td>
						<select size="1" id="row-31-office" name="row-31-office">
							<option value="Edinburgh"> Edinburgh </option>

							<option value="London"> London </option>

							<option value="New York"> New York </option>

							<option value="San Francisco"> San Francisco </option>

							<option value="Tokyo"> Tokyo </option>
						</select></td>
					</tr>
				</tbody>
			</table>
			<div class="dataTables_info" id="example_info" role="status" aria-live="polite">
				Showing 1 to 25 of 57 entries
			</div>
			<div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
				<a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="4" tabindex="0" id="example_next">Next</a>
			</div>
		</div>

		<script type="text/javascript">
			$.fn.dataTableExt.ofnSearch['html-input'] = function(value) {
				return $(value).val();
			};

			var table = $("#example").DataTable({
				columnDefs : [{
					"type" : "html-input",
					"targets" : [1, 2, 3]
				}]
			});

			$("#example td input").on('change', function() {
				var $td = $(this).parent();
				$td.find('input').attr('value', this.value);
				table.cell($td).invalidate().draw();
			});
			$("#example td select").on('change', function() {
				var $td = $(this).parent();
				var value = this.value;
				$td.find('option').each(function(i, o) {
					$(o).removeAttr('selected');
					if ($(o).val() == value)
						$(o).attr('selected', true);
				})
				table.cell($td).invalidate().draw();
			});

		</script>

		<script>
			// tell the embed parent frame the height of the content
			if (window.parent && window.parent.parent) {
				window.parent.parent.postMessage(["resultsFrame", {
					height : document.body.getBoundingClientRect().height,
					slug : "s2gbafuz"
				}], "*")
			}
		</script>

	</body>
</html>