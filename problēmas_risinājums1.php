<?php
// =========================
//  0. Testa darbi
// =========================
$members = [
    [
    "vards" => "Anna",
    "uzvards" => "Kalniņa",
    "loma" => "leader",
    "stundas" => 25
    ],
    [
    "vards" => "Edgars",
    "uzvards" => "Mart",
    "loma" => "leader",
    "stundas" => 18

    ],
    [
                "vards" => "Markuss",
            "uzvards" => "Zaļais",
            "loma" => "member",
            "stundas" =>22
    ],
    [
                "vards" => "Marta",
            "uzvards" => "Ozola",
            "loma" => "member",
            "stundas" =>15
    ],
    [
                "vards" => "Kārlis",
            "uzvards" => "Ozols",
            "loma" => "member",
            "stundas" =>5
    ],
    [
                "vards" => "Mārtinš",
            "uzvards" => "Ezis",
            "loma" => "member",
            "stundas" =>20
    ],
    [
                "vards" => "Marta",
            "uzvards" => "Pīlupa",
            "loma" => "member",
            "stundas" =>8
    ]
];


// =========================
//  1. Kas ir vadītāji?
// =========================

echo "1. Vadītāji:\n";
foreach ($members as $m) {
    if ($m["loma"] === "leader") {
        echo "- {$m['vards']} {$m['uzvards']} ({$m['stundas']} stundas)\n";
    }
}

echo "\n";



// =========================
//  2. Cik liels ir kopējais brīvprātīgo stundu skaits?
// =========================


$totalHours = 0;
foreach ($members as $m) {
    $totalHours += $m["stundas"];
}

echo "2. Kopējais brīvprātīgo stundu skaits: $totalHours\n\n";



// =========================
//  3. Kuri saņems balvu “Zvaigžņu brīvprātīgais”?
// =========================


echo "3. “Zvaigžņu brīvprātīgais” balvas saņēmēji:\n";

$winners = [];

foreach ($members as $m) {
    if ($m["loma"] === "member" & $m["stundas"] >= 20) {
        $winners[] = "{$m['vards']} {$m['uzvards']}";
    }
}

if (count($winners) === 0) {
    echo "Neviens neatbilst kritērijiem.\n";
} else {
    foreach ($winners as $w) {
        echo "- $w\n";
    }
}

?>