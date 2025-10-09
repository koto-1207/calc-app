<?php

use function Livewire\Volt\{state, mount};

state(['num1', 'operator', 'num2', 'result', 'symbol']);
mount(function ($num1, $operator, $num2) {
    $this->num1 = $num1;
    $this->operator = $operator;
    $this->num2 = $num2;
    $this->calculate();
});

// 計算を実行する関数
$calculate = function () {
    switch ($this->operator) {
        case 'addition':
            $this->result = $this->num1 + $this->num2;
            $this->symbol = '+';
            break;

        case 'subtraction':
            $this->result = $this->num1 - $this->num2;
            $this->symbol = '-';
            break;

        case 'multiplication':
            $this->result = $this->num1 * $this->num2;
            $this->symbol = '×';
            break;

        case 'division':
            $this->result = $this->num1 / $this->num2;
            $this->symbol = '÷';
            break;

        default:
            $this->result = '無効な演算子です';
            $this->symbol = '?';
            break;
    }
};

?>
<div>
    <h1>計算結果</h1>
    <p>
        {{ $num1 }} {{ $symbol }} {{ $num2 }} = {{ $result }}
    </p>

</div>
