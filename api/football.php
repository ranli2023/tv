<?php
header('Content-Type: application/json; charset=utf-8');

$data = [
    "key" => "leisu",
    "name" => "⚽┃乐速┃足球直播",
    "type" => 3,
    "api" => "https://raw.githubusercontent.com/ranli2023/tv/refs/heads/main/api/football.php",
    "filter" => 1,
    "playParse" => 1,
    "searchable" => 1,
    "quickSearch" => 2,
    "categories" => ["中超", "中甲", "欧冠", "川超", "齐鲁超", "苏超", "渝超", "湘超", "赣超", "香港超"],
    "matches" => [
        [
            "title" => "川超- 成都队vs绵阳队",
            "url" => "https://leisu.17kqb.cn/score/football/4279340"
        ],
        [
            "title" => "中超- 北京 vs 上海",
            "url" => "https://leisu.17kqb.cn/score/football/4279341"
        ]
    ]
];

echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
 
