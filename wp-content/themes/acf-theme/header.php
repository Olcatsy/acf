<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head();?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script src="https://kit.fontawesome.com/cb6fbd44a4.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class();?>>
  <!-- HEADER -->
  <header class="header">
    <div class="logo">
      <a href="#">
        <h1>Logo</h1>
      </a>
    </div>

    <nav class="nav">
      <ul>
        <li>
          <a href="#" class="nav_link">Home</a>
        </li>
        <li> 
          <a href="#" class="nav_link">About</a>
        </li>
        <li> 
          <a href="#" class="nav_link">About</a>
        </li>
      </ul>
    </nav>

    <form class="search">
      <label for="search_bar">Search products</label>
      <input id="search_bar" type="text" name="searchbar" placeholder="Search products">
      <button class="search_button">
        <i class="fas fa-search" aria-hidden title="Go"></i>
        <span class="sr-only">Go</span>
      </button>
    </form>

  </header>
  <!-- END OF HEADER -->