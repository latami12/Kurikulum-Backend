<?php

$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];

function sortById($data) {
    echo "<h3>Daftar santri berdasar nomor induk</h3>";
    asort($data);
    echo "<table>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($data as $value) {
        echo "<tr>";
            echo "<td>" . $value['id'] . "</td>";
            echo "<td>" . $value['name'] . "</td>";
            echo "<td>" . $value['division'] . "</td>";
            echo "<td>" . $value['age'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
}

function sortByName($data) {
    echo "<h3>Daftar santri berdasar nama </h3>";
    ksort($data);
    for ($i=0; $i < count($data); $i++) { 
        $name[] = $data[$i]['name'];
    }
    array_multisort($name, SORT_ASC, $data);

    echo "<table>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($data as $value) {
        echo "<tr>";
            echo "<td>" . $value['id'] . "</td>";
            echo "<td>" . $value['name'] . "</td>";
            echo "<td>" . $value['division'] . "</td>";
            echo "<td>" . $value['age'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
}

function sortByDivision($data) {
    echo "<h3>Daftar santri dengan minat PHP Backend </h3>";
    asort($data);
    echo "<table>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($data as $value) {
        if ($value['division'] == 'PHP Backend') {
            echo "<tr>";
                echo "<td>" . $value['id'] . "</td>";
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
    echo "<h3>Daftar santri dengan umur kurang dari 25 </h3>";
    asort($data);
    echo "<table>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($data as $value) {
        if ($value['age'] < 25) {
            echo "<tr>";
                echo "<td>" . $value['id'] . "</td>";
                echo "<td>" . $value['name'] . "</td>";
                echo "<td>" . $value['division'] . "</td>";
                echo "<td>" . $value['age'] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<hr>";
}

function avgAge($data) {
    echo "<h1>Rata-rata usia santri</h1>";
    asort($data);
    for ($i=0; $i < count($data); $i++) { 
        $age[] = $data[$i]['age'];
    }
    
    $count = count($age);
    $sum = array_sum($age);
    echo $sum/$count . " Tahun";
    echo "<hr>";
}

function mostYoung($data) {
    echo "<h1>Santri paling muda</h1>";
    asort($data);
    for ($i=0; $i < count($data); $i++) { 
        $age[] = $data[$i]['age'];
    }
    echo "<table>";
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Division</th>";
        echo "<th>Age</th>";
    echo "</tr>";
    foreach ($data as $value) {
        if ($value['age'] == min($age)) {
            echo "<tr>";
                echo "<td>" . $value['id'] . "</td>";
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

sortById($students);
sortByName($students);
sortByDivision($students);
age($students);
avgAge($students);
mostYoung($students);