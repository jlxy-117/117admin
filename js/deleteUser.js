function user_remove(phone_number) {
				$.post(
						"http://localhost:9092/DeleteUser/"+phone_number,
						{
							_method:"delete",
							phone_number:phone_number
						},
                        function () {
                            window.location.reload();
                        },
                        "text");
            }