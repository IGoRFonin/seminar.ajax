<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
	<p>��������� �������(1), ������� �� ������� � 2, �������� 3.</p>
	<a href="#" class="addition">�������� 1 � 2</a>
	<br><br><br>


	<p>������� ������ �� ������� � ������� � ������.</p>
	<a href="#" class="array">JSON</a>
	<br><br><br>


	<p>������� HTML � ������� � ������� </p>
	<a href="#" class="html">HTML</a>

	<div class="people"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		$('.addition').on('click', function(event) {
			event.preventDefault();
			$.ajax({
				type:"POST",
				url:"/ajax/addition.php",
				data:"number=1",
				success: function(data) {
					console.log(data);
				}
			});
		});
		$('.array').on('click', function(event) {
			event.preventDefault();
			$.ajax({
				type:"POST",
				url:"/ajax/array.php",
				success: function(data) {
					console.log(data);
					var parsed = JSON.parse(data);
					console.dir(parsed);
				}
			});
		});
		$('.html').on('click', function(event) {
			event.preventDefault();
			$.ajax({
				type:"POST",
				url:"/ajax/html.php",
				success: function(data) {
					console.log(data);
					$('.people').append(data);
				}
			});
		});
	</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>