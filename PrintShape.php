<?php

    interface IprintShape{
        public function drawnAxis();
        public function drawnCross();
        public function drawHorizontalLine($quantity, $pattern);
    }

    class PrintShape implements IprintShape{

        private $line;
        private $crossQuantity;
        private $axisQuantity;
        private $axisPatern;

        public function __construct(){
            $this->line = array();
            $this->crossQuantity = array(1, 5, 1, 1, 1);
            $this->axisQuantity = array(5,5,1,5,5);
            $this->axisPatern = array(0,2,-1,2,0);   
            ;
            print"Objeto construído\nTente acessar os métodos e realizar um desenho!\n";
        }

        private function setAsteristcs($quantity){

            /**
             * Adiciona asterisco conforme a seguinte regra:
             * se quantity for igual a 1:
             *  resultará em apenas um asterisco no meio da linha
             * se o quantity for 3:
             *  resultará em 3 asteriscos no meio, ou seja, sem as pontas
             * se o quantity for 5 resultará em uma linha com todos os 5 asteriscos
             *  */ 

            $aux = $quantity;

            for($i = 0; $i < 5; $i++){
                $this->line[$i] = '.';
                if($aux == 5){
                    $this->line[$i] = '*';
                }else{
                    if($aux - $i == -1){                  
                        if($quantity == $aux + 2){
                            $aux ++;
                        }
                        $this->line[$i] = '*';
                    }
                    if($aux - $i == 2){
                        $aux = $aux -2;
                        $this->line[$i] = '*';
                    }
                }
            }
        }
        private function removeAsteristcs($pattern){
            switch ($pattern){
                case 0:
                    $this->line[2] = '.';
                case 1:
                    for($i = 0; $i < 5; $i++){
                       if($i % 2 != 0){
                            $this->line[$i] = '.';
                       }
                    }
                    break;
                case 2:
                    for($i = 0; $i < 5; $i++){
                        if($i % 2 == 0){
                             $this->line[$i] = '.';
                        }
                     }
                    break;
                default:
                     break;
            }
        }

        /**
         * desenha uma linha de asteriscos conforme parametros
         * @return void
         * @param int $quantity(1, 3, 5)
         * @param int $pattern(0,1,2)
         */
        public function drawHorizontalLine($quantity, $pattern = -1){ 
            if($quantity != 1 && $quantity != 3 && $quantity != 5){
                throw new Exception("São permitidos apenas os valores 1, 3 e 5 para o parametro quantity", 1);
            }
            $this->setAsteristcs($quantity);
            if($pattern != -1){
               $this->removeAsteristcs($pattern);
            }
            print implode("", $this->line);
            print "\n";
            $this->line = array();
        }
        /**
         * Desenha uma cruz
         * 
         */
        public function drawnCross(){
            foreach($this->crossQuantity as $valor){
                $this->drawHorizontalLine($valor);
            }
        }
        /**
         *  Desenha um xis
         */
        public function drawnAxis(){
            for($i=0;$i<5;$i++){
                $this->drawHorizontalLine($this->axisQuantity[$i], $this->axisPatern[$i]);
            }
        }
    }