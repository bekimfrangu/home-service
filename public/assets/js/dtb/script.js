// Code goes here

$(document).ready(function(){
  var table = $('#example').DataTable();
  
  $('#btn-export').on('click', function(){
      $('<table>').append(table.$('tr').clone()).table2excel({
          exclude: ".excludeThisClass",
          name: "Report"+ new Date().toISOString().replace(/[\-\:\.]/g, ""),
          filename: "SomeFile",//do not include extension
      });
  });      
})
