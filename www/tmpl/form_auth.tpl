<h2>Вход на сайт</h2>
			%message_auth%
			<!-- <form name="auth" action="functions.php" method="post"> -->
			 
			 <form id ="auth" action="functions.php">
				<table> 
					<tr>
						<td>Логин:</td>
						<td>
							<input type="text" id="login" name="login" />
						</td>
					</tr>
					<tr>
						<td>Пороль:</td>
						<td>
							<input type="password" id="password" name="password" />
						</td>						
					</tr>
					<tr>
						<td colspan="2" align="right"> 
							<!-- <input type ="submit" name="auth" value="Войти" /> -->
							<input type ="button" name="auth" value="Войти" 
								onclick = '
								firstAjax({
								url: "functions.php",
								method: "POST",
								data: {
									login:document.getElementById("login").value,
									password: document.getElementById("password").value,
									auth: 1
								},
								success: function(data){document.getElementById("user_panel").innerHTML=data;}
								})'
							/>
						</td>
					</tr> 
					<tr>
						<td colspan="2" align="right"> 
							<a href="%address%?view=reg">Зарегистрироваться</a>
						</td>
					</tr> 
				</table>
			</form> 