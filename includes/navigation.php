<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button"
        data-toggle="collapse"
        data-target="#bs-1"
      >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/my_cms" class="navbar-brand">
        MY CMS 
      </a>
    </div>

    <div class="collapse navbar-collapse"
      id="bs-1">
        <ul class="nav navbar-nav">

          <?php 

            $query = "SELECT * FROM category LIMIT 3";
            $select_all_categories_query = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_all_categories_query)) {
              $cat_title = $row['cat_title'];
              $cat_id = $row['cat_id'];

              echo "<li><a href='/my_cms/category/{$cat_id}'>{$cat_title}</a></li>";
            }
          ?>
        </ul>
    </div>
  </div>
</nav>