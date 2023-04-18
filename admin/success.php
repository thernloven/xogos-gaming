<?php include "includes/header.php" ?>

<body>
  <?php if(is_parent()): ?>
  <section>
    <p>
      Thank you for your purschase! Continue creating user profile:  
    </p>
      <a href="http://localhost:80/xogos-gaming/admin/my_kids.php?source=add_kid" style="background: rgb(223,78,204); background: linear-gradient(90deg, rgba(223,78,204,1) 0%, rgba(223,78,204,1) 35%, rgba(192,83,237,1) 62%); border:none; color: white;" type="submit" id="checkout-button" class="btn btn-lg btn-block btn-outline-primary">Continue</a>

  </section>
  <?php endif ?>

  <?php if(is_teacher()): ?>
  <section>
    <p>
      Thank you for your purschase! Continue creating user profile:  
    </p>
    <a href="http://localhost:80/xogos-gaming/admin/my_students.php?source=add_student" style="background: rgb(223,78,204); background: linear-gradient(90deg, rgba(223,78,204,1) 0%, rgba(223,78,204,1) 35%, rgba(192,83,237,1) 62%); border:none; color: white;" type="submit" id="checkout-button" class="btn btn-lg btn-block btn-outline-primary">Continue</a>

  </section>
  <?php endif ?>

</body>
</html>