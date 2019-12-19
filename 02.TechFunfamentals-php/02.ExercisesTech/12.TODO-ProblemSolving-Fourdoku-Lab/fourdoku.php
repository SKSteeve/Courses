<?php


class fourdoku {
    public $matrix;
    public $changed;

    public function __construct()
    {
        $this->matrix = array_fill(0, 4, array_fill(0, 4,0));
        $this->changed = false;
        // [0, 0, 0, 0]
        // [0, 0, 0, 0]
        // [0, 0, 0, 0]
        // [0, 0, 0, 0]
    }

    public function print()
    {
        for ($row = 0; $row < 4; $row++)
        {
            for ($column = 0; $column < 4; $column++)
            {
                if (rand(0, 1) == 1)
                {
                    echo '<input type="number" class="field" min="1" max="4" name="' . $row . $column . '"value="">';
                }
                else
                {
                    echo '<input type="number" readonly="readonly" class="field" min="1" max="4" name="' . $row . $column . '"value="' . $this->matrix[$row][$column] . '">';
                }

            }

            echo '<br>';
        }
    }


    public function generate()
    {
        $tries = 0;
        $this->fillDiagonal();
        $this->placeOne();

        while (true)
        {
            $this->changed = false;
            $this->placeCandidates();
            $this->placeZeroes();

            if ($this->changed == false)
            {
                break;
            }
            $tries++;

            if ($tries > 5)
            {
                $this->init();
                $this->fillDiagonal();
                $this->placeOne();
                $tries = 0;
            }
        }
    }

    function fillDiagonal()
    {
        $nums = [1, 2, 3, 4];

        for ($row = 0, $col = 0; $row < 4; $row++, $col++)
        {
            $index = rand(0, count($nums) - 1);
            $num = $nums[$index];
            $this->matrix[$row][$col] = $num;
            array_splice($nums, $index, 1);
        }
    }

    function placeOne()
    {
        $nums = [1, 2, 3, 4];
        while (true)
        {
            $index = rand(0, count($nums) - 1);
            $num = $nums[$index];

            if ($this->checkVertical($num, 1) && $this->checkHorizontal($num, 0))
            {
                $this->matrix[0][1] = $num;
                break;
            }
            else
            {
                array_splice($nums, $index, 1);
            }
        }
    }

    function checkHorizontal($num, $row)
    {
        for ($c = 0; $c < 4; $c++)
        {
            if ($this->matrix[$row][$c] == $num)
            {
                return false;
            }
        }

        return true;
    }

    function checkVertical($num, $col)
    {
        for ($r = 0; $r < 4; $r++)
        {
            if ($this->matrix[$col][$r] == $num)
            {
                return false;
            }
        }

        return true;
    }

    function placeCandidates()
    {
        $nums = [1, 2, 3, 4];

        for ($row = 0; $row < 4; $row++)
        {
            for ($col = 0; $col < 4; $col++)
            {
                if ($this->matrix[$row][$col] === 0)
                {
                    $this->matrix[$row][$col] = ' ';

                    foreach ($nums as $num)
                    {
                        if ($this->checkVertical($num, $col) && $this->checkHorizontal($num, $row))
                        {
                            $this->matrix[$row][$col] .= ' ' . $num;
                            $this->matrix[$row][$col] = trim($this->matrix[$row][$col]);
                        }
                        
                    }
                }
            }
        }
    }

    function placeZeroes()
    {
        for ($row = 0; $row < 4; $row++)
        {
            for ($col = 0; $col < 4; $col++)
            {
                if (!is_numeric($this->matrix[$row][$col]))
                {
                    $this->matrix[$row][$col] = 0;
                    $this->changed = true;
                }
            }
        }
    }

    public function init()
    {
        $this->matrix = array_fill(0, 4, array_fill(0, 4,0));
    }


    function checkSolution()
    {
        $data = array_values($_POST);
        $i = 0;
        for ($row = 0; $row < 4; $row++) {
            for ($column = 0; $column < 4; $column++) {
                $this->matrix[$row][$column] = $data[$i++];
            }
        }

        for ($row = 0; $row < 4; $row++) {
            for ($column = 0; $column < 4; $column++) {
                $num = $this->matrix[$row][$column];
                if(!$this->checkHorizontal($num,$row, $column)|| !$this->checkVertical($num, $row, $column)|| $num == 0 || $num == ''){
                    $class= 'wrong';
                }
                else{
                    $class = 'right';

                }

                echo '<input class="field '.$class.'" value="' . $num . '">';
            }

            echo '<br>';
        }

    }



}