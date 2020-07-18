var base_url = window.location.protocol + window.location.pathname;


$(function () {
	$("#example1").DataTable({
		"responsive": true,
		"autoWidth": false,
	});
});

function notifikasi(title1, message, status) {
	Swal.fire({
		title: title1,
		text: message,
		icon: status
	})
}

function konfirmasi() {
	Swal.fire({
		title: 'Apakah Kamu Yakin?',
		// text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yakin!'
	}).then((result) => {
		if (result.value) {
			Swal.fire(
				'Deleted!',
				base_url,
				'success'
			)
		}
	})
}
