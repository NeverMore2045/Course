<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<title>Форма входа</title>
</head>
<body>
	<style>
      #intro {
        margin-top: 58px;
      }
      @media (max-width: 991px) {
        #intro {
          margin-top: 45px;
        }
      }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Меню</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" rel="nofollow">Войти</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Корзина</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</header>
	<div class="container mt-4">
		<h1 id="intro">Админка</h1>
		<form method="POST" 
		action="auth.php" class="bg-white rounded-5 shadow-5-strong p-5">
            
            <div class="form-group mb-4">
              <label class="form-label" for="form1Example1">Логин</label>
              <input type="text" name="login" id="form1Example1" class="form-control" />
            </div>

            <div class="form-group mb-4">
              <label class="form-label" for="form1Example2">Пароль</label>
              <input type="password" name="pass" id="form1Example2" class="form-control" />
              <label class="form-label" for="form1Example2">Логин: 1, Пароль: 1</label>
            </div>

            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
              </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
	</div>

</body>
</html>