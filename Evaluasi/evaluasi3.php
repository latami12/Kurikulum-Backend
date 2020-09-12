<?php

echo '============================'."\n";
echo '||      INPUT SANTRI      ||'."\n";
echo '============================'."\n";

$students = [
    'name' => 'Rahmat',
    'age'  => 20,
    'dividion' => 'PHP Backend',
    'nik' => 'B-0012',
]
[
    'name' => 'Latami',
    'age' => 19,
    'division' => 'Mobile',
    'nik' => 'B-0020',

]
[
    'name' => 'Bagus',
    'age'  => 22,
    'dividion' => 'PHP Backend',
    'nik' => 'B-0015',
];


function sortByDivision($data) {
    echo "<h4> Daftar santri dengan minat PHP Backend </h4>";
    asort($data);
    echo "<table>";
    echo "<tr>";
        echo "<th>Nik</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($data as $value) {
        if ($value['division'] == 'PHP Backend') {
            echo "<tr>";
                echo "<td>" . $value['NIK'] . "</td>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td>" . $value['division'] . "</td>";
                echo "<td>" . $value['age'] . "</td>";
            echo "</tr>";
            continue;
        }
    }
    echo "</table>";
    echo "<hr>";
}    

function age($data) {
    echo "<h3>Daftar santri dengan umur kurang dari 20 </h3>";
    asort($data);
    echo "<table>";
    echo "<tr>";
        echo "<th>Nik</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($data as $value) {
        if ($value['age'] < 20) {
            echo "<tr>";
                echo "<td>" . $value['nik'] . "</td>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td>" . $value['division'] . "</td>";
                echo "<td>" . $value['age'] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<hr>";
}
