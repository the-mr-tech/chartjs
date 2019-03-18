<?php

namespace Encore\Chartjs;

use Encore\Admin\Widgets\Box;

class ChartjsBox extends Box
{
    public $id;
    public $width;
    public $height;
    public $options = [];

    public function __construct($title = '', $content = '')
    {
        parent::__construct($title, $content);
    }

    /**
     * @return string
     */
    public function render()
    {
        if (!$this->id)
            $this->id = 'chart' . rand(1111, 9999);

        if (!$this->width)
            $this->width = '100%';

        if (!$this->height)
            $this->height = '400px';

        $this->content(view('adminchartjs::chartjs', [
            'id' => $this->id,
            'width' => $this->width,
            'height' => $this->height,
            'options' => $this->options
        ]));

        return parent::render();
    }
}
