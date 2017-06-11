<?php

use kuralab\jsonviewer\JsonViewer;

class JsonViewerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function normal()
    {
        $data = [
            'a' => '1',
            'b' => '2',
            'c' => [
                'x',
                'y',
                'z'
            ],
            'd' => [
                'a' => '1',
                'b' => '2',
                'c' => '3'
            ]
        ];
        $rowJson = json_encode($data);

        $expected = <<<EOT
{
    "a": "1",
    "b": "2",
    "c": [
        "x",
        "y",
        "z"
    ],
    "d": {
        "a": "1",
        "b": "2",
        "c": "3"
    }
}
EOT;

        $viewer = new JsonViewer($rowJson);
        $this->assertSame($expected, $viewer->visualize());
    }

    /**
     * @test
     */
    public function delimiter()
    {
        $data = [
            'a' => '1',
            'b' => '2',
            'c' => [
                'x',
                'y',
                'z'
            ],
            'd' => [
                'a' => '1',
                'b' => '2',
                'c' => '3'
            ]
        ];
        $rowJson = json_encode($data);
        $delimiter = "\n";

        $expected = <<<EOT
{
    "a": "1",
    "b": "2",
    "c": [
        "x",
        "y",
        "z"
    ],
    "d": {
        "a": "1",
        "b": "2",
        "c": "3"
    }
}
EOT;

        $viewer = new JsonViewer($rowJson, $delimiter);
        $this->assertSame($expected, $viewer->visualize());
    }

    /**
     * @test
     */
    public function indent()
    {
        $data = [
            'a' => '1',
            'b' => '2',
            'c' => [
                'x',
                'y',
                'z'
            ],
            'd' => [
                'a' => '1',
                'b' => '2',
                'c' => '3'
            ]
        ];
        $rowJson = json_encode($data);
        $delimiter = "\n";
        $indent = 2;

        $expected = <<<EOT
{
  "a": "1",
  "b": "2",
  "c": [
    "x",
    "y",
    "z"
  ],
  "d": {
    "a": "1",
    "b": "2",
    "c": "3"
  }
}
EOT;

        $viewer = new JsonViewer($rowJson, $delimiter, $indent);
        $this->assertSame($expected, $viewer->visualize());
    }

    /**
     * @test
     */
    public function indentTab()
    {
        $data = [
            'a' => '1',
            'b' => '2',
            'c' => [
                'x',
                'y',
                'z'
            ],
            'd' => [
                'a' => '1',
                'b' => '2',
                'c' => '3'
            ]
        ];
        $rowJson = json_encode($data);
        $delimiter = "\n";
        $indent = 1;
        $indentTab = "\t";

        $expected = <<<EOT
{
\t"a": "1",
\t"b": "2",
\t"c": [
\t\t"x",
\t\t"y",
\t\t"z"
\t],
\t"d": {
\t\t"a": "1",
\t\t"b": "2",
\t\t"c": "3"
\t}
}
EOT;

        $viewer = new JsonViewer($rowJson, $delimiter, $indent, $indentTab);
        $this->assertSame($expected, $viewer->visualize());
    }
}
