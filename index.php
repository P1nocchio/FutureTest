<?php
$title="Future test";
include "connection_bd.php";
include "head.php";
include "header.php";
?>

<main class="index">
	<div class="container clearfix index">
		<div class="row">
			<div class="col-md">
				<?php include "connection_bd.php";
				$sql = "SELECT user_name, dt, comment FROM Users ORDER BY dt DESC";
				$res_sql = mysqli_query($con, $sql);
				do{
					echo "<div class='row info'>";
						echo "<div class='col-md-2 name'>";
							echo $row['user_name'];
						echo "</div>";
						echo "<div class='col-md-2 dt'>";
							echo $row['dt'];
						echo "</div>";
					echo "</div>";
					echo "<div class='row com'>";
						echo "<div class='col-md'>";
							echo $row['comment'];
						echo "</div>";
					echo "</div>";
				}while ($row = mysqli_fetch_assoc($res_sql));
				?>

			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md">
				<form action="commentary.php" method="post">
					<div class="row">
						<div class="col-md">
							<h4 class="form-signin-heading">Оставить комментарий</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="user_name">Ваше имя</label>
						</div>
					</div>
					<div class="row u_n">
						<div class="col-md-6">
							<input name="user_name" type="text" id="user_name" class="form-control input" placeholder="Ваше имя" required size="15" maxlength="15">
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="comment">Ваш комментарий</label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<textarea name="comment" class="form-control textarea" id="comment" rows="3" required></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 offset-md-4">
							<button class="btn btn-secondary btn-block center-block" type="submit" id="button">Отправить</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>

<?php include "footer.php"; ?>