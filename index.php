<?php

//入力を受け取ってそれぞれの変数に格納
[$initialHp, $atk, $heal] = array_map('intval', explode(' ', rtrim(fgets(STDIN))));

// 初期値のmpywのHP
$hp = $initialHp;
// 前のターンのmpywのHP
$previousHp = null;

echo "mpywのHPは{$hp}です\n";

while (true) {
    $hp = max($hp - $atk, 0);
    echo "はるうさの攻撃でmpywのHPは{$hp}になった\n";
    if ($hp === 0) {
        echo "mpywを倒した！\n";
        break;
    }

    $hp = $hp + $heal;
    echo "mpywは回復してHPは{$hp}になった\n";
    if ($previousHp !== NULL && $previousHp <= $hp) {
        echo "はるうさはmpywを倒すことはできない\n";
        break;
    }
    $previousHp = $hp;
}
