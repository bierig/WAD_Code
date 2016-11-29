    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

    <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
    <head>
      <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
      <title>Form Validator: Favorite Book</title>
    </head>

    <body>
      <h2>Form Validator: Favorite Book</h2>

      <?php
        //Retrieve string from post submission
        $title = $_POST['title'];
        echo "Your favorite book is <b><i>$title</i></b>.";
      ?>

    </body>
    </html>