<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page Title</title>

    <style>
        #default #nav-home,
        #about #nav-about,
        #search #nav-search,
        [id^="?s"] #nav-search {
            text-decoration: underline;
        }
    </style>
</head>

<?php
    if (is_single()) {
        $prefix = 'page';
    }
    $page = $_SERVER['REQUEST_URI'];
    $page = str_replace("/","",$page);
    $page = str_replace(".php","",$page);
    $page = $page ? $page : 'default'
?>

<body id="<?php echo $page ?>">

    <h1>Blog Title</h1>
    <ul>
        <li><a id="nav-home" href="https://gomakethings.com/">Home</a></li>
        <li><a id="nav-about" href="https://gomakethings.com/about/">About</a></li>
        <li><a id="nav-search" href="https://gomakethings.com/search/">Search</a></li>
    </ul>

    Page Content

</body>
</html>