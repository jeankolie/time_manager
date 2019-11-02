        <!-- Vendor js -->
        <script src="{{ URL::asset('assets/js/vendor.min.js')}}"></script>

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('assets/js/app.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

        <script type="text/javascript">
        	$(document).ready(function () {

        		$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});

        		$(".btn-delete").on('click', function (e) {
        			e.preventDefault();
        			var link = $(e.target).attr('href');
        			$.confirm({
					    title: 'Attention !',
					    content: $('input[name=message-suppression]').val(),
					    type: 'red',
    					typeAnimated: true,
					    buttons: {
					        Supprimer: function () {
					        	$.ajax({
								  	url: link,
								  	method: "DELETE",
								  	dataType: "json",
								  	success: function (data) {
								  		if(data.statut){
								  			document.location.reload(true);
								  		}
								  	},
								  	error: function (xhr, status, error) {
								  		alert(xhr.responseText);
								  	}
								});
					        },
					        Annuler: function () {
					            return true;
					        }
					    }
					});
        		});
				        		
        	});
        </script>
        
        @yield('script-bottom')