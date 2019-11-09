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

    				$('.btn-logout').on('click', function (e) {
      					e.preventDefault();
      					var link = $(e.target).attr('href');
      					$.ajax({
      						url: link,
      						method: "POST",
      						dataType: "text",
      						success: function (data) {
      							document.location.reload(true);
      						}
      					});
    				});

            var licence = $('select[name=licence]').children("option:selected").val();
            getSemestre(licence, 'select[name=semestre]');

            $('select[name=licence]').on('change', function (e) {
                var licence = $(this).find(":selected").val();
                getSemestre(licence, 'select[name=semestre]');
            });

            function getSemestre(licence, element) {
                $.ajax({
                    url: '/licence/'+licence+'/semestre',
                    method: "GET",
                    dataType: "JSON",
                    success: function (data) {
                        $(element).empty();
                        for (var i = 0; i <= data.length; i++) {
                             $(element).append(new Option(data[i].nom, data[i].id_semestre));
                             //$(element).append($('<option>').val(optionValue).text(optionText))
                        }
                    }
                });
            }

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
