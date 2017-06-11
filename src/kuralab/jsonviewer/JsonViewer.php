<?php
namespace kuralab\jsonviewer;

/**
 * JSON Viewer Class
 */
class JsonViewer
{
    private $rowJson;
    private $delimiter;
    private $indent;
    private $indentTab;

    public function __construct($rowJson, $delimiter = "\n", $indent = 4, $indentTab = ' ')
    {
        $this->rowJson = $rowJson;
        $this->delimiter = $delimiter;
        $this->indent = $indent;
        $this->indentTab = $indentTab;
    }

    public function visualize()
    {
        $splited = str_split($this->rowJson);

        $nest = 0;
        $visualized = '';
        foreach ($splited as $part) {
            if ($part === '{' || $part === '[') {
                $visualized .= $part;
                $visualized .= $this->delimiter;
                $nest++;
                $visualized .= str_repeat($this->indentTab, $this->indent * $nest);
            } elseif ($part === '}' || $part === ']') {
                $visualized .= $this->delimiter;
                $nest--;
                $visualized .= str_repeat($this->indentTab, $this->indent * $nest);
                $visualized .= $part;
            } elseif ($part === ',') {
                $visualized .= $part;
                $visualized .= $this->delimiter;
                $visualized .= str_repeat($this->indentTab, $this->indent * $nest);
            } elseif ($part === ':') {
                $visualized .= $part;
                $visualized .= ' ';
            } else {
                $visualized .= $part;
            }
        }

        return $visualized;
    }
}
