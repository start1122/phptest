<!DOCTYPE html>
<html>
	<head>
		<title>登陆页</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="card col-12 mt-5">
				<div class="card-body">
					<h4 class="card-title">
                        用户登录
                    </h4>
					<div class="col-12 mt-4 d-flex justify-content-center">
						<form class="col-8" method="post" action="action.php">
                            <input type="hidden" name="action" value="login">
							<div class="form-group">
								<label for="username">用户名</label>
								<input type="text"
                                       class="form-control"
                                       id="username"
                                       name="username"
                                       placeholder="请输入用户名">
							</div>
							<div class="form-group">
								<label for="password">密码</label>
								<input type="password"
                                       class="form-control"
                                       id="password"
                                       name="password"
                                       placeholder="请输入密码">
							</div>
							<div class="form-group form-check">
								<input type="checkbox"
                                       class="form-check-input"
                                       id="remember"
                                       name="remember">
								<label class="form-check-label"
                                       for="remember">
                                    在这台电脑上记住我的登录状态
                                </label>
							</div>
							<button type="submit"
                                    class="btn btn-primary">
                                登录
                            </button>
						</form>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center mt-5">
				<div class="alert alert-light" role="alert">
					Powered by 慕课网
				</div>
			</div>
		</div>
	</body>
</html>