
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./include/bootstrap.css">
<link rel="stylesheet" href="./css/stylein.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand h1 mb-0" href="index.php">Receipt Lottery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="invoice.php">發票兌獎</a>
        <a class="nav-item nav-link" href="add_invoice.php">獎號輸入</a>
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票獎號
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="#">1 - 2</a>
          <a class="dropdown-item" href="#">3 - 4</a>
          <a class="dropdown-item" href="#">5 - 6</a>
          <a class="dropdown-item" href="#">7 - 8</a>
          <a class="dropdown-item" href="#">9 - 10</a>
          <a class="dropdown-item" href="#">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="invoice.php">當期</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          發票列表
        </a>
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="list.php?period=1">1 - 2</a>
          <a class="dropdown-item" href="list.php?period=2">3 - 4</a>
          <a class="dropdown-item" href="list.php?period=3">5 - 6</a>
          <a class="dropdown-item" href="list.php?period=4">7 - 8</a>
          <a class="dropdown-item" href="list.php?period=5">9 - 10</a>
          <a class="dropdown-item" href="list.php?period=6">11 - 12</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="list.php?period=<?=ceil(date("n")/2);?>">當期</a>
        </div>
      </li>
      </div>
    </div>
    </div>
</nav>

<div>
    <form action="save_number.php" method="post">
        <table class="table table-bordered">
        <tr>
            <td>年月份</td>
            <td>
                    <select id="inputYear" class="form-control" name="year">
                        <option selected>請選擇年份...</option>
                        <option class="dropdown-item" value="2020" href="#">2020</option>
                        <option class="dropdown-item" value="2021" href="#">2021</option>
                        <option class="dropdown-item" value="2022" href="#">2022</option>
                    </select>
                    <select id="inputMonth" class="form-control" name="period">
                        <option selected>請選擇月份...</option>
                        <option class="dropdown-item" value="1">1-2</option>
                        <option class="dropdown-item" value="2">3-4</option>
                        <option class="dropdown-item" value="3">5-6</option>
                        <option class="dropdown-item" value="4">7-8</option>
                        <option class="dropdown-item" value="5">9-10</option>
                        <option class="dropdown-item" value="6">11-12</option>
                    </select>
                    
                    </select>
            </td>
        </tr>
        <tr>
            <td>特別獎</td>
            <td>
                <input type="number" name="num1">
            </td>
        </tr>
        <tr>
            <td>特獎</td>
            <td>
                <input type="number" name="num2">
            </td>
        </tr>
        <tr>
            <td>頭獎</td>
            <td>
                <input type="number" name="num3[]"><br>
                <input type="number" name="num3[]"><br>
                <input type="number" name="num3[]"><br>
                <input type="number" name="num3[]"><br>
            </td>
        </tr>
        <tr>
            <td>二獎</td>
            <td>

            </td>
        </tr>
        <tr>
            <td>三獎</td>
            <td>

            </td>
        </tr>
        <tr>
            <td>四獎</td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td>五獎</td>
            <td>
            
            </td>
        </tr>
        <tr>
            <td>六獎</td>
            <td>
                <input type="number" name="num4[]"><br>
                <input type="number" name="num4[]">
            </td>
        </tr>
        <tr>
            <td>增開六獎</td>
            <td></td>
        </tr>
        </table>

        <input type="submit" value="send">
    </form>
</div>
</body>

</html>