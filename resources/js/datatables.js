window.dt = require('datatables.net').default;

/**
   * Datatables render
   */
 let ladmiDatatables = document.querySelectorAll('.datatables');
 ladmiDatatables.forEach((el) => {
   let options = el.getAttribute('data-options');
   options = JSON.parse(options);
   $(el).DataTable({
	 language: {
	   search: '',
	   searchPlaceholder: 'Search...'
	 },
	 ...options
   });
 });

 
/**
* Jquery Section
*/
$(function() {
 
$('.datatable-base').each(function() {
$(this).DataTable();
});
});