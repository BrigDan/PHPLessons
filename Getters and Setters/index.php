<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Getters and setters let us get and set the variables that are private 

        */

        class Movie{
            //Visibility modifiers
            //Public means we can edit it
            public $title;
            //Private means we cannot
            private $rating;
            private $result;

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            // Getter
            function getRating(){
                return $this->rating;
            }

            // Setter
            function setRating($rating)
            {
                $available_ratings = array("G", "PG", "PG-13", "R", "NR");
                $result = false;

                foreach($available_ratings as $i){
                    if($rating == $i){
                        $result = true;
                    }
                }

                if(!$result){
                    echo "$rating rating is unsupported.";
                }
                else{
                    $this->rating = $rating;
                }
            }
    }

        $avengers = new Movie("Avengers", "PG-13");
        
        // // print rating through getter
        // echo $avengers->getRating();
        // echo "<br>";
        // // change rating through setter
        $avengers->setRating("Dog");

        // // and re-print it
        echo "<br> Rating: ";
        echo $avengers->getRating();
        $avengers->setRating("G");
        echo "<br> Rating: ";
        echo $avengers->getRating();
    ?>
</body>
</html>