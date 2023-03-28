<?php

    interface IprintShape{
        public function drawnAxis();
        public function drawnCross();
        public function drawHorizontalLine($quantity, $pattern);
    }

    class PrintShape implements IprintShape{
        /**
         * desenha uma linha de asteriscos conforme parametros
         * @return void
         * @param int $quantity(1, 3, 5)
         * @param int $pattern(-1,0,1,2)
         */
        public function drawHorizontalLine($quantity, $pattern = -1){
            $aux = $quantity;
            $fields = array();
            /**
             * Adiciona asterisco conforme a seguinte regra:
             * se quantity for igual a 1:
             *  resultará em apenas um asterisco no meio da linha
             * se o quantity for 3:
             *  resultará em 3 asteriscos no meio, ou seja, sem as pontas
             * se o quantity for 5 resultará em uma linha com todos os 5 asteriscos
             *  */ 
            for($i = 0; $i < 5; $i++){
                $fields[$i] = '.';
                if($aux == 5){
              
                    $fields[$i] = '*';
                }else{
                    if($aux - $i == -1){
                  
                        if($quantity == $aux + 2){
                            $aux ++;
                        }
                        $fields[$i] = '*';
                    }
                    if($aux - $i == 2){
                        $aux = $aux -2;
        
                        $fields[$i] = '*';
                    }
                }
            
            }
            // remove os valores conforme o padrão indicado

            switch ($pattern){
                // remove o asterisco do meio
                case 0:
                    $fields[2] = '.';
                // remove os asteriscos dos index impares
                case 1:
                    for($i = 0; $i < 5; $i++){
                       if($i % 2 != 0){
                            $fields[$i] = '.';
                       }
                    }
                    break;
                // remove os asteriscos de index par
                case 2:
                    for($i = 0; $i < 5; $i++){
                        if($i % 2 == 0){
                             $fields[$i] = '.';
                        }
                     }
                    break;

            }
            
            print implode("", $fields);
            print "\n";
        }
        /**
         * Desenha uma cruz
         * 
         */
        public function drawnCross(){
            $this->drawHorizontalLine(1);
            $this->drawHorizontalLine(5);
            $this->drawHorizontalLine(1);
            $this->drawHorizontalLine(1);
            $this->drawHorizontalLine(1);
        }
        /**
         *  Desenha um xis
         */
        public function drawnAxis(){
            $this->drawHorizontalLine(5, 0);
            $this->drawHorizontalLine(5, 2);
            $this->drawHorizontalLine(1);
            $this->drawHorizontalLine(5, 2);
            $this->drawHorizontalLine(5, 0);
        }
    }

    $desenho = new PrintShape();
    $desenho->drawnCross();
    $desenho->drawnAxis();