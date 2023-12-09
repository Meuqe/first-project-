
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Export</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <script  src="js/bootstrap.bundle.js"></script>
    <script  src="js/bootstrap.min.js"></script>
    <script  src="js/jquery.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>


<link href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF/jspdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/extensions/export/bootstrap-table-export.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body>



<style>
#toolbar {
  margin: 0;
}
</style>

<div id="toolbar" class="select">
  <select class="form-control">
    <option value="">Export Basic</option>
    <option value="all">Export All</option>
    <option value="selected">Export Selected</option>
  </select>
</div>

<table id="table"
  data-show-export="true"
  data-pagination="true"
  data-side-pagination="client"
  data-click-to-select="true"
  data-toolbar="#toolbar"
  data-show-toggle="true"
  data-show-columns="true"
  data-url="./residentdata.php">
</table>

<script>
  var $table = $('#table')

  $(function() {
    $('#toolbar').find('select').change(function () {
      $table.bootstrapTable('destroy').bootstrapTable({
        exportDataType: $(this).val(),
        exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf'],
        columns: [
          {
            field: 'state',
            checkbox: true,
            visible: $(this).val() === 'selected'
          },
          {
            field: 'number',
            title: 'Row'
          }, {
            field: 'first',
            title: 'First Name'
          }, {
            field: 'last',
            title: 'Last Name'
          }, {
            field: 'age',
            title: 'Age'
          }, {
            field: 'address',
            title: 'Address'
          }, {
            field: 'occupation',
            title: 'Occupation'
          }, {
            field: 'gender',
            title: 'Gender'
          }, {
            field: 'email',
            title: 'Email'
          }
        ]
      })
    }).trigger('change')
  })
</script>
</body>
</html>