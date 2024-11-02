<?php

// Declare Input Array
$input_arr = [
    [
        "id" => 1,
        "attributes" => [
            "level" => 1
        ]
    ],
    [
        "id" => 2,
        "attributes" => [
            "level" => 2
        ]
    ],
    [
        "id" => 3,
        "attributes" => [
            "level" => 3
        ]
    ],
    [
        "id" => 4,
        "attributes" => [
            "level" => 2
        ]
    ],
    [
        "id" => 5,
        "attributes" => [
            "level" => 1
        ]
    ],
    [
        "id" => 6,
        "attributes" => [
            "level" => 2
        ]
    ],
    [
        "id" => 7,
        "attributes" => [
            "level" => 3
        ]
    ],
];

$output_arr = [];

foreach ($input_arr as $element) {
    $level = $element['attributes']['level'];
    $id = $element['id'];

    $new_object = [
        "id" => $id,
        "level" => $level,
        "children" => []
    ];

    if ($level == 1) {
        array_push($output_arr, $new_object);
    }

    if ($level == 2) {
        $prev_one_index = count($output_arr) - 1;
        $output_arr[$prev_one_index]['children'][] = $new_object;
    }

    if ($level == 3) {
        $prev_one_index = count($output_arr) - 1;
        $prev_two_index = count($output_arr[$prev_one_index]['children']) - 1;

        $output_arr[$prev_one_index]['children'][$prev_two_index]['children'][] = $new_object;
    }
}

echo "Output";
print_r($output_arr);

$expected_output = [
    [
        "id" => 1,
        "level" => 1,
        "children" => [
            [
                "id" => 2,
                "level" => 2,
                "children" => [
                    [
                        "id" => 3,
                        "level" => 3
                    ]
                ]
            ],
            [
                "id" => 4,
                "level" => 2
            ]
        ]
    ],
    [
        "id" => 5,
        "level" => 1,
        "children" => [
            [
                "id" => 6,
                "level" => 2,
                "children" => [
                    "id" => 7,
                    "level" => 3
                ]
            ]
        ]
    ]
];
