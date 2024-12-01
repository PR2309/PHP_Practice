<?php 
class Book{
    private $title;
    private $author;
    private $price;

    // setter functions
    public function setTitle(string $title) {$this->title=$title;}
    public function setAuthor(string $author) {$this->author=$author;}
    public function setPrice(float $price) {$this->price=$price;}

    // getter functions
    public function getTitle() {return $this->title;}
    public function getAuthor() {return $this->author;}
    public function getPrice() {return $this->price;}

};

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta http-equiv="refresh" content="30" data-comment="Meta tag to refresh the page every 30 seconds"/> -->
    <title>Book Library</title>
    <link rel="stylesheet" href="style.css" data-comment="Stylesheets"/>
    </head>
<body>
    <main>
        <form action="<?php $_SERVER["PHP_SELF"]=="GET" ?>" method="GET">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required placeholder="Book Title"/>
            <label for="Author">Author</label>
            <input type="text" id="author" name="author" requuired placeholder="Book Author"/>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" required placeholder="Book Price"/>
            <button type="submit">Add</button>
        </form>
    </main>
    <?php
        $title="";
        $author="";
        $price="";
        if($_SERVER['REQUEST_METHOD']=="GET"){
            $title=filter_var($_GET["title"],FILTER_SANITIZE_STRING);
            $author=filter_var($_GET["author"],FILTER_SANITIZE_STRING);
            $price=filter_var($_GET["price"],FILTER_SANITIZE_NUMBER_FLOAT);

            $title=trim(htmlspecialchars($title));
            $author=trim(htmlspecialchars($author));
            $price=trim(htmlspecialchars(filter_var($price,FILTER_VALIDATE_FLOAT)));
            $price = floatval($price);
            $books=array();
            if($price>=0){
                $obj = new Book();
                $obj->setTitle($title);
                $obj->setAuthor($author);
                $obj->setPrice($price);

                $t= $obj->getTitle();
                $a= $obj->getAuthor();
                $p= $obj->getPrice();
                echo "Book Title: ".$t."<br/>Book Author: ".$a."<br/>Book Price: ".$p."<br/>";
                $books[] = array('Title' => $title, 'Author' => $author, 'Price' => $price);
            }
        }
    ?>
    <script></script>
</body>
</html>