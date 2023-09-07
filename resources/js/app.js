import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// // In your Javascript (external .js resource or <script> tag)
// $(document).ready(function() {
//     $('.js-example-basic-single').select2();
// });


new TomSelect("#siswa",{
	create: true,
	sortField: {
		field: "text",
		direction: "asc"
	}
});
