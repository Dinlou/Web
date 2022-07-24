<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    var tableToExcel = (function() {
      var link = document.createElement('a');
      link.download = 'filename.xls';
      var uri = 'data:application/vnd.ms-excel;base64,'
      , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
      , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
      , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
      return function(table, name) {
      if (!table.nodeType) table = document.getElementById(table)
      var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
      link.href = uri + base64(format(template, ctx));
      link.click();
          }
        })()
</script> 
    <title>Администрирование</title>
</head>
<body>
    <?php
    $item=1;
    include 'db.php';
    include 'header.php';
    include 'footer.php';
    include 'delete.php';
    ?>

    <h1>Администрирование</h1>
    <div align="center">
    <input type="text" name="search" id="search" placeholder="Поиск по таблице">
    <table id="da"> 
        <thead>
            <tr>
                <th id="column 1">id</th>
                <th id="column 2">Имя</th>
                <th id="column 3">Логин</th>
                <th id="column 4">Почта</th>
                <th id="column 5"></th>
            </tr>
        </thead>
        </div>
       <?php 
       $sql=mysqli_query($link, 'SELECT * FROM `users`');
       while($result=mysqli_fetch_array($sql)){
           echo "
           <tbody id='telo'>
           <tr>
           <td name='id'>{$result['id']}</td>
           <td>{$result['name']}</td>
           <td>{$result['login']}</td>
           <td>{$result['email']}</td>
           <td><a href='delete.php?id=".$result['id']."'>Удалить</a></td>
           </tr>
           </tbody>";
       }
       ?>
    </table>

    <button id="btnExport" onclick="tableToExcel('da', 'W3C Example Table')">Экспортировать в Excel</button>


    <script>
      $(document).ready(function(){
        $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#telo tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
</body> 
</html>