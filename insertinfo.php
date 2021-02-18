<?
include 'con.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>ادخال المعلومات</title>
  <link href="thiscss.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  
  <link rel = "icon" href = "http://localhost/ContEdo/logo.png" type = "image/x-icon">       


</head>

<body>

  <div class="container" dir="rtl" style="width: 50%">

    <form action="insert.php" method="POST" enctype="multipart/form-data">


<h3>ادخال معلومات الدورة</h3>
<hr style="height:2px;border-width:10px;color:gray;background-color:black">

      <div class="mb-3">

        <!-- عنوان الدورة -->
        <label for="title" class="form-label">عنوان الدورة</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
      </div>

      <!-- عدد محاضرات -->
      <div class="mb-3">

        <label for="docus" class="form-label">عدد محاضرات</label>
        <input type="text" class="form-control" name="docus" id="docus">

      </div>

      <div class="mb-3">
        <!-- منهاج الدوره -->
        <label for="contant" class="form-label">منهاج الدوره</label>
        <textarea type="text" class="form-control" name="contant" id="contant">
        </textarea>
      </div>


      <div class="mb-3">
        <!-- الوقت +الوقت -->
        <label for="contant" class="form-label">وقت المحاضرات</label>
        <br>
        <label for="contant" class="form-label">من</label>
        <input type="date"  class="form-control" name="time" id="time">
        
      </div>
      <div class="mb-3">

        <!-- الوقت +الوقت -->
        <label for="contant" class="form-label">الى</label>
        <input type="date" class="form-control" name="anothertime" id="anothertime">
      </div>


      <!--طريقه اقامه الدورة -->
      <label for="contant" class="form-label">طريقه اقامه الدورة</label>
      <select name="dropdown1" class="form-control">
        <option value='1' selected>اونلاين</option>
        <option value='0'>حضور فعلي</option>
      </select>

      <br>
      <!-- موقع اقامه الدوره -->
      <label for="contant" class="form-label">موقع اقامة الدورة</label>
      <select name="dropdown" class="form-control">
        <option value=4>ZOOM</option>
        <option value=5>FCC</option>
        <option value=9> Google Meet</option>
        <option value=6>قاعة المؤتمرات</option>
        <option value=7>قاعة المكتبة</option>
        <option value=8>قاعة الشهيد</option>
      </select>
      <br>
      <br>
      <div class="formgroup container-fluid">
        <input type="file" class="btn btn-primary" name="pdf" name="file" accept=".pdf" />
      </div>
      <br><br>
      <button type="submit" class="btn btn-primary" name="submit" onclick="normal()">Submit</button>
    </form>
  </div>
  <br>
  <br><br>
  <br>
  
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
    function sweet() {
        swal("Good job!", "You clicked the button!", "success");
    }
    function normal() {
        alert('تم تسجيل المعلومات');
    }
</script>




</html>