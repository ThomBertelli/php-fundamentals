<html>


    <body>
        
    <h1>The fruit program</h1>
    </body>


    <?php
    
    class Fruit {

        public $name;
        public $color;

        function set_name($name){
            $this -> name = $name;
        }

        function get_name(){
            return $this -> name;
        }
    }    
    ?>
</html>